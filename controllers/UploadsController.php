<?php



namespace app\controllers;



use app\models\MaterialImages;
use app\models\DocumentsAndDistributionMaster;
use app\models\MinutesOfMeeting;
use app\models\MinutesOfMeetingImages;
use app\models\ProjectImages;
use app\models\Projects;
use app\models\SiteVisiteObservation;
use app\models\UserProofs;
use Imagine\Image\Box;
use Yii;
use yii\web\UploadedFile;
use app\models\Users;
use yii\imagine\Image;





class UploadsController extends \yii\web\Controller

{



    public function actionIndex()

    {

        return $this->render('index');

    }

    public function actionDocumentUpload()
    {

 \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON; 
        $model = new DocumentsAndDistributionMaster();

        $model->images = \yii\web\UploadedFile::getInstance($model, 'images');
        $filetype = mime_content_type($model->images->tempName);
        $ext = explode(".", $model->images->name);
        $destName = time() . rand() . "." . end($ext);

        $model->images->saveAs('uploads/' . $destName);

        return ['status' => 200, 'image' => $destName];
        /*echo json_encode();*/
    }

    public function actionCommon($attribute)

    {

        $imageFile = UploadedFile::getInstanceByName($attribute);

        $directory = \Yii::getAlias('@app/web/uploads') . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR;

        if ($imageFile) {



            $filetype = mime_content_type($imageFile->tempName);

            $allowed = array('image/png', 'image/jpeg', 'image/gif');

            //$allowed = array('gif', 'png', 'jpg', 'jpeg');

            if (!in_array(strtolower($filetype), $allowed)) {

                return json_encode(['files' => [

                    'error' => "File type not supported",

                ]

                ]);

            } else {

                $uid = uniqid(time(), true);

                $fileName = $uid . '.' . $imageFile->extension;

                $filePath = $directory . $fileName;

//                echo $filePath;

//                exit();



                if ($imageFile->saveAs($filePath)) {

                    $path = \yii\helpers\BaseUrl::home() . 'uploads/' . Yii::$app->session->id . DIRECTORY_SEPARATOR . $fileName;

                    /*Image::thumbnail('@webroot/img/test-photo.jpg', 120, 120)

                        ->save(Yii::getAlias('@runtime/thumb-test-photo.jpg'), ['quality' => 80]);*/



//                    if ($imageFile->size >= 2097152) {

//

//                        list($width, $height) = getimagesize('uploads/' . $fileName);

//

//                        // $heightResize = 1150 * ($width / $height);

//

//                        $imageResize = Yii::$app->image->load('uploads/' . $fileName);

//                        $imageResize->resize(1200, 880);

//                        $imageResize->save();

//                    }



                    return json_encode([

                        'files' => [

                            'name' => $fileName,

                            //'size' => $imageFile->size,

                            "url" => $path,

                            "thumbnailUrl" => $path,

                            "deleteUrl" => 'image-delete?name=' . $fileName,

                            "deleteType" => "POST",

                            'error' => ""

                        ]

                    ]);

                }

            }

        }

        return '';

    }



    public function actionProfileUpload()

    {

        $imageFile = UploadedFile::getInstanceByName('Users[profile_pic]');





        $directory = \Yii::getAlias('@app/web/uploads/temp') . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR;

        if ($imageFile) {



            $filetype = mime_content_type($imageFile->tempName);

            $allowed = array('image/png', 'image/jpeg', 'image/gif');

            //$allowed = array('gif', 'png', 'jpg', 'jpeg');

            if (!in_array(strtolower($filetype), $allowed)) {

                return json_encode(['files' => [

                    'error' => "File type not supported",

                ]

                ]);

            } else {

                $uid = uniqid(time(), true);

                $fileName = $uid . '.' . $imageFile->extension;

                $filePath = $directory . $fileName;

//                echo $filePath;

//                exit();

                if ($imageFile->saveAs($filePath)) {

                    $path = \yii\helpers\BaseUrl::home() . 'uploads/temp/' . Yii::$app->session->id . DIRECTORY_SEPARATOR . $fileName;

                    Image::thumbnail('../web/uploads/temp/' . $fileName, 250, 300)->resize(new Box(90,90))->save('../web/uploads/' . $fileName, ['quality' => 500]);

                    unlink('../web/uploads/temp/' . $fileName);



//                    if ($imageFile->size >= 2097152) {

//

//                        list($width, $height) = getimagesize('uploads/' . $fileName);

//

//                        // $heightResize = 1150 * ($width / $height);

//

//                        $imageResize = Yii::$app->image->load('uploads/' . $fileName);

//                        $imageResize->resize(1200, 880);

//                        $imageResize->save();

//                    }



                    return json_encode([

                        'files' => [

                            'name' => $fileName,

                            //'size' => $imageFile->size,

                            "url" => $path,

                            "thumbnailUrl" => $path,

                            "deleteUrl" => 'image-delete?name=' . $fileName,

                            "deleteType" => "POST",

                            'error' => ""

                        ]

                    ]);

                }

            }

        }

        return '';

    }





}


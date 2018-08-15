<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

//debugPrint(Yii::$app->session->get('company'));



if (Yii::$app->controller->action->id === 'login') {
    /**
     * Do not use this code in your template. Remove it.
     * Instead, use the code  $this->layout = '//main-login'; in your controller.
     */
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {

    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }

    dmstr\web\AdminLteAsset::register($this);

    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>


    <body class="hold-transition skin-blue sidebar-mini">
    <div id="overlay">
        <div class="spinner"></div>
    </div>
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <?= $this->render('_common_popup'); ?>
        <?= $this->render('_set-company'); ?>

        <?= $this->render(
            'header.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>

        <?= $this->render(
            'left.php',
            ['directoryAsset' => $directoryAsset]
        )
        ?>

        <?= $this->render(
            'content.php',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>

    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>

<?php
$this->registerJs("
        


", \yii\web\View::POS_END);
?>

<?php if (Yii::$app->session->has('company')): ?>



<?php else: ?>
    <script>
        $('#set-company').modal({
            backdrop: 'static',
            keyboard: false
        });

        /* Removing x button */
        $('.modal-header > .close').remove();


    </script>
    <script>
        $("#select-company").change(function () {
            var company_name = $('option:selected', this).text();
            $.ajax(
                {
                    type: 'GET',
                    url: '<?= Url::to(['/site/set-company'],true) ?>',
                    data: {
                        'id': $('option:selected', this).val()
                    },
                    success: function (res) {
                        if (res == 1) {
                            var selectedCompany = company_name + " has been selected.";
                            /*swal("Done!", , selectedCompany, "success");*/
                            swal({
                                title: "Done!",
                                text: selectedCompany,
                                imageUrl: '<?= Yii::$app->urlManager->createAbsoluteUrl('images/thumbs-up.jpg') ?>'
                            });
                            $('#set-company').modal('hide');
                        } else {
                            swal("Sorry!", "Company not selected. please try after some time.");
                        }
                    }
                });
        });
    </script>
<?php endif; ?>

<script>

    $('.open_common_popup').click(function (e) {
        e.preventDefault();
        $('#common-popup').modal().find('.modalContent').load($('.open_common_popup').attr('href'));
    });

    $('.open_update_popup').click(function (e) {
        e.preventDefault();
        $('#common-popup').modal().find('.modalContent').load($('.open_update_popup').attr('href'));
    });


</script>

<script>
    var overlay = document.getElementById("overlay");

    window.addEventListener('load', function () {
        overlay.style.display = 'none';
    });
    $(window).ready(function () {
        overlay.style.display = 'none';
    });
</script>

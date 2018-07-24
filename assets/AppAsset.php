<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'bower_components\select2\dist\css\select2.css',
        'bower_components\bootstrap-datepicker\dist\css\bootstrap-datepicker.css',
        'bower_components\toastr\toastr.min.css',
        'bower_components\animate.css\animate.min.css',
        'bower_components\datatables\media\css\jquery.dataTables.css',
        'css\switchbutton.css',
        'bower_components\bootstrap-sweetalert\dist\sweetalert.css',
        'css\preloader.css',
       /* 'bower_components\AjaxLoader\ajaxloader\ajaxloader.css'*/ /* EXTRA LOADER  */

    ];
    public $js = [
        'bower_components\select2\dist\js\select2.full.js',
        'bower_components\bootstrap-datepicker\dist\js\bootstrap-datepicker.js',
        'bower_components\toastr\toastr.js',
        'js/ajaxform.js',
        'bower_components\bootstrap-sweetalert\dist\sweetalert.js',
        'bower_components\datatables\media\js\jquery.dataTables.js',
        'bower_components\highcharts\highcharts.js',
        'bower_components\highcharts\modules\exporting.js',
       /* 'bower_components\AjaxLoader\jquery.ajaxloader.1.5.1.js' *//* EXTRA LOADER  */
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

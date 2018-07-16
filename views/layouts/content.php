<?php
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
use app\models\Help;



?>
<style type="text/css">
<style> 
#serach-mom
{
    border-radius: 30px !important;
}
    .is-hide {
        display: none !important;
    }
    .panel
    {
        background: #1C2529;
        padding: 10px;
        /*box-shadow: 1px 4px 12px 0px;*/
        color: white;
    }
    .panel-heading 
    {
        padding: 0px 15px;
    }
</style>
<div class="content-wrapper">
    <section class="content-header">


        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
    </section>

    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy; 2018-2019 <a href="http://vytechenterprise.com">Vytech Enterprise</a>.</strong> All rights
    reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class='control-sidebar-menu'>
                <li>
                    <a href='javascript::;'>
                        <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                            <p>Will be 23 on April 24th</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href='javascript::;'>
                        <i class="menu-icon fa fa-user bg-yellow"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                            <p>New phone +1(800)555-1234</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href='javascript::;'>
                        <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                            <p>nora@example.com</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href='javascript::;'>
                        <i class="menu-icon fa fa-file-code-o bg-green"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                            <p>Execution time 5 seconds</p>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class='control-sidebar-menu'>
                <li>
                    <a href='javascript::;'>
                        <h4 class="control-sidebar-subheading">
                            Custom Template Design
                            <span class="label label-danger pull-right">70%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href='javascript::;'>
                        <h4 class="control-sidebar-subheading">
                            Update Resume
                            <span class="label label-success pull-right">95%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href='javascript::;'>
                        <h4 class="control-sidebar-subheading">
                            Laravel Integration
                            <span class="label label-waring pull-right">50%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href='javascript::;'>
                        <h4 class="control-sidebar-subheading">
                            Back End Framework
                            <span class="label label-primary pull-right">68%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->

        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <?php
            $helps = Help::find()->all();
            ?>
                <h3 class="control-sidebar-heading">General Settings</h3>

                <div class="aside">
                                <div class="page-aside-inner">
                                    <div class="input-search">
                                        <input id="serach-mom" style="border-radius: 30px !important;" class="form-control" type="text" placeholder="Search Keyword" name="">
                                    </div>
                                    <br>
                                    <div class="notes">
                                        <div class="row">
                                            <?php if (!empty($helps)): ?>
                                                <?php foreach ($helps as $help): ?>
                                                    <a class="mom-view"
                                                       href="<?= \yii\helpers\Url::to(['help/view', 'id' => !empty($help->help_id) ? $help->help_id : ''],true) ?>">
                                                        <div class="col-md-12 col-xs-12 masonry-item" data-content="<?= !empty($help->title) ? strtolower($help->title) : '' ?>">
                                                            <!-- Panel Message -->
                                                            <div class="panel" id="messge">
                                                                <div class="panel-heading">
                                                                    <div class="panel-title"><?= !empty($help->title) ? $help->title : '' ?></div>
                                                                </div>
                                                            </div>
                                                            <!-- End Panel Message -->
                                                        </div>
                                                    </a>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

        </div>
        <!-- /.tab-pane -->
    </div>
</aside><!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class='control-sidebar-bg'></div>
<?php
$this->registerJs("
$('#serach-mom').on('keyup',
                        function() {
                        
                            var val = $(this).val();
                            //console.log(val);
                            if (val !== '') {
                                $('[data-content]').addClass('is-hide');
                                $('[data-content*=' + val + ']').removeClass(
                                    'is-hide');
                            } else {
                                $('[data-content]').removeClass('is-hide');
                            }
                            
                        });                     
                        
", \yii\web\View::POS_END);
?>
<?php 
    $this->registerJs("
    $('.mom-view').on('click', function(e)
{
    e.preventDefault(); 
    console.log($(this).attr('href'));
    $('#common-popup').modal('show').find('.modalContent').load($(this).attr('href'));
});
", \yii\web\View::POS_END);
?>
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;
use app\models\feedback\Feedback;
AdminAsset::register($this);

$msgCount = Feedback::find()->where(['status' => Feedback::STATUS_NEW])->count();

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-black fixed sidebar-mini">
<?php $this->beginBody() ?>
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?= Url::to(['/admin']) ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">

                        <a href="<?= Url::to('/admin/feedback/index') ?>" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <? if($msgCount > 0): ?>
                                <span class="label label-danger"><?= $msgCount ?></span>
                            <? endif; ?>
                        </a>
                    </li>

                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="hidden-xs"><?= Yii::$app->user->identity->username?></span>
                        </a>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="/admin/main/logout" data-method="post" data-toggle="control-sidebar"><i class="fa fa-sign-out"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">Оснвоное меню</li>
                <li><a href="<?= Url::to('/admin/articles/index') ?>"><img src="/icons/admin/1.svg"><span>Статьи</span></a></li>
                <li><a href="<?= Url::to('/admin/news/index') ?>"><img src="/icons/admin/2.svg"><span>Новости</span></a></li>
                <li><a href="<?= Url::to('/admin/pages/index') ?>"><img src="/icons/admin/3.svg"><span>Страницы</span></a></li>
                <li class="header">Каталог туров</li>
                <li><a href="<?= Url::to('/admin/tours/index') ?>"><img src="/icons/admin/4.svg"><span>Туры</span></a></li>
                <li><a href="<?= Url::to('/admin/tours-type/index') ?>"><img src="/icons/admin/5.svg"><span>Категории туров</span></a></li>
                <li><a href="<?= Url::to('/admin/destination/index') ?>"><img src="/icons/admin/5.svg"><span>Каталог пунктов</span></a></li>

                <li class="header">Модули</li>
                <li><a href="<?= Url::to('/admin/carousel/index') ?>"><img src="/icons/admin/8.svg"><span>Карусель</span></a></li>
                <li><a href="<?= Url::to('/admin/reviews/index') ?>"><img src="/icons/admin/9.svg"><span>Отзывы</span></a></li>
                <li><a href="<?= Url::to('/admin/personal/index') ?>"><img src="/icons/admin/11.svg"><span>Сотрудники</span></a></li>

                <!--
                <li class="treeview">
                    <a href="#">
                        <img src="/icons/admin/10.svg"><span>Проекты</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= Url::to('/admin/projects-type/index') ?>"><i class="fa fa-circle-o"></i>Типы проектов</a></li>
                        <li><a href="<?= Url::to('/admin/projects/index') ?>"><i class="fa fa-circle-o"></i>Проекты</a></li>
                    </ul>
                </li>
                -->
                <li><a href="<?= Url::to('/admin/social/index') ?>"><img src="/icons/admin/13.svg"><span>Социальные сети</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                &nbsp;
            </h1>
            <?
                echo Breadcrumbs::widget([
                    'homeLink' => ['label' => 'Главная', 'url' => '/admin'],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]);
            ?>

        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $this->title ?></h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <!--<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>-->
                    </div>
                </div>
                <div class="box-body">
                    <?= $content ?>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    &nbsp;
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.8
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="http://artbay.moscow">artbay.moscow</a>.</strong> All rights
        reserved.
    </footer>


</div>
<!-- ./wrapper -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

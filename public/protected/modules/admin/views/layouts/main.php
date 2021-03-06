<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title><?php
        echo Yii::app()->name;
        if (is_array($this->breadcrumbs)) {
            echo ' - ';
            foreach($this->breadcrumbs as $k => $b) {
                isset($not_first) && print " - " ;
                $not_first = true;
                if(is_integer($k) && !is_array($b)) echo $b; else echo $k;
            }
         } else {
            echo $this->pageTitle;
         }
        ?></title>
    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/assets/ace/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/assets/ace/css/font-awesome.min.css" />
    <!--     important for UE Editor keep this css file at the begin plz -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/assets/ueMini/themes/default/css/umeditor.css" />
    <!-- page specific plugin styles -->
    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/assets/ace/css/ace-fonts.css" />
    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/assets/ace/css/ace.min.css" />
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/assets/ace/css/ace-part2.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/assets/ace/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/assets/ace/css/ace-rtl.min.css" />
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/assets/ace/css/ace-ie.min.css" />
    <![endif]-->
    <?php if (file_exists(Yii::app()->basePath . '/../assets/admin/css/styles.css')) {?>
    <link rel="stylesheet" href="/assets/admin/css/styles.css" />
    <?php } ?>
    <?php if (file_exists(Yii::app()->basePath . '/../assets/admin/css/'.Yii::app()->controller->id.'/styles.css')) {?>
        <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/assets/admin/css/<?php echo Yii::app()->controller->id;?>/styles.css" />
    <?php } ?>
    <?php if (file_exists(Yii::app()->basePath . '/../assets/admin/css/'.Yii::app()->controller->id.'/'.$this->action->id.'/styles.css')) {?>
        <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/assets/admin/css/<?php echo Yii::app()->controller->id;?>/<?php echo $this->action->id;?>/styles.css" />
    <?php } ?>

    <!-- inline styles related to this page -->
    <!-- ace settings handler -->
    <script src="<?php echo Yii::app()->baseUrl?>/assets/ace/js/ace-extra.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lte IE 8]>
    <script src="<?php echo Yii::app()->baseUrl?>/assets/ace/js/html5shiv.js"></script>
    <script src="<?php echo Yii::app()->baseUrl?>/assets/ace/js/respond.min.js"></script>
    <![endif]-->
    <!--[if !IE]> -->
    <script type="text/javascript">
        window.jQuery || document.write("<script src='<?php echo Yii::app()->baseUrl?>/assets/ace/js/jquery.min.js'>"+"<"+"/script>");
    </script>
    <!-- <![endif]-->
    <!--[if IE]>
    <script type="text/javascript">
        window.jQuery || document.write("<script src='<?php echo Yii::app()->baseUrl?>/assets/ace/js/jquery1x.min.js'>"+"<"+"/script>");
    </script>
    <![endif]-->
</head>
<body class="no-skin">
<!-- #section:basics/navbar.layout -->
<div id="navbar" class="navbar navbar-default">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>
    <div class="navbar-container" id="navbar-container">
        <!-- #section:basics/sidebar.mobile.toggle -->
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
            <span class="sr-only">Toggle sidebar</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-header pull-left">
            <a href="/" class="navbar-brand">
                <small>
                    <?php echo Yii::app()->name;?>
                </small>
            </a>
        </div>
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <!-- #section:basics/navbar.user_menu -->
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<span class="user-info">
							<small>你好,</small>
							<?php echo Yii::app()->getUser()->getName();?>
						</span>
                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>
                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="/admin/user/profile">
                                <i class="ace-icon fa fa-user"></i>
                                个人资料
                            </a>
                        </li>
                        <li>
                            <a href="/admin/default/logout">
                                <i class="ace-icon fa fa-power-off"></i>
                                注销
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- /section:basics/navbar.user_menu -->
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>
<!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>
    <!-- #section:basics/sidebar -->
    <div id="sidebar" class="sidebar responsive">
        <script type="text/javascript">
            try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
        </script>
        <ul class="nav nav-list">
            <li class="<?php echo $this->id == 'default' && $this->getAction()->getId() == 'index' ? 'active' : ''; ?>">
                <a href="/admin">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>
                <b class="arrow"></b>
            </li>
            <li class="<?php echo $this->id == 'news' ? 'active open' : ''; ?>">
                <a href="<?php echo $this->createUrl('/admin/news');?>"  >
                    <i class="menu-icon fa fa-file-text"></i>
                    <span class="menu-text"> 新闻 </span>
                </a>
            </li>            
            <li class="<?php echo $this->id == 'volunteer' ? 'active open' : ''; ?>">
                <a href="<?php echo $this->createUrl('/admin/volunteer');?>"  >
                    <i class="menu-icon fa fa-users"></i>
                    <span class="menu-text"> 志愿者 </span>
                </a>
            </li>
            <li class="<?php echo $this->id == 'department' ? 'active open' : ''; ?>">
                <a href="<?php echo $this->createUrl('/admin/department');?>"  >
                    <i class="menu-icon fa fa-users"></i>
                    <span class="menu-text"> 部门管理 </span>
                </a>
            </li>
            <li class="<?php echo $this->id == 'staff' ? 'active open' : ''; ?>">
                <a href="<?php echo $this->createUrl('/admin/staff');?>"  >
                    <i class="menu-icon fa fa-users"></i>
                    <span class="menu-text"> 人员管理 </span>
                </a>
            </li>
            <li class="<?php echo $this->id == 'school' ? 'active open' : ''; ?>">
                <a href="<?php echo $this->createUrl('/admin/school');?>"  >
                    <i class="menu-icon fa fa-home"></i>
                    <span class="menu-text"> 学校 </span>
                </a>
            </li>
            <li class="<?php echo $this->id == 'gallery' ? 'active open' : ''; ?>">
                <a href="<?php echo $this->createUrl('/admin/gallery');?>"  >
                    <i class="menu-icon fa fa-picture-o"></i>
                    <span class="menu-text"> 相册 </span>
                </a>
            </li>
            <li class="<?php echo $this->id == 'user' && !in_array($this->getAction()->getId(), array('profile')) ? 'active open' : ''; ?>">
                <a href="/admin/user/index"  >
                    <i class="menu-icon fa fa-user"></i>
                    <span class="menu-text"> 管理员 </span>
                </a>
            </li>
            <li class="<?php echo $this->id == 'log' ? 'active open' : ''; ?>">
                <a href="<?php echo $this->createUrl('/admin/log');?>"  >
                    <i class="menu-icon fa fa-book"></i>
                    <span class="menu-text"> 后台日志 </span>
                </a>
            </li>
            <li class="<?php echo $this->id == 'user' && in_array($this->getAction()->getId(), array('profile')) ? 'active open' : ''; ?>">
                <a href="javascript:void(0);" class="dropdown-toggle">
                    <i class="menu-icon fa fa-cog"></i>
                    <span class="menu-text"> 个人中心 </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu">
                    <li class="<?php echo $this->id == 'user' && $this->getAction()->getId() == 'profile' ? 'active' : ''; ?>">
                        <a href="<?php echo $this->createUrl('/admin/user/profile');?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            个人资料
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="<?php echo $this->createUrl('/admin/default/logout');?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            注销
                        </a>
                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
        </ul><!-- /.nav-list -->
        <!-- #section:basics/sidebar.layout.minimize -->
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
        <!-- /section:basics/sidebar.layout.minimize -->
        <script type="text/javascript">
            //try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
        </script>
    </div>
    <!-- /section:basics/sidebar -->
    <div class="main-content">
        <!-- #section:basics/content.breadcrumbs -->
        <div class="breadcrumbs" id="breadcrumbs">
            <script type="text/javascript">
                try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
            </script>
            <!-- 面包屑 -->
            <?php
            $this->widget('zii.widgets.CBreadcrumbs', array(
                'homeLink'=> '<li><i class="ace-icon fa fa-home home-icon"></i>' . CHtml::link('首页',Yii::app()->homeUrl) . '</li>',
                'links'=>$this->breadcrumbs,
                'tagName' => 'ul',
                'activeLinkTemplate' => '<li><a href="{url}">{label}</a></li>',
                'inactiveLinkTemplate' => '<li>{label}</li>',
                'separator' => '',
                'htmlOptions' => array('class'=>'breadcrumb')
            )); ?>
            <!-- /面包屑 -->
        </div>
        <div class="page-content">
            <!-- /.page-header -->
            <?php foreach(Yii::app()->user->getFlashes() as $key => $message) { ?>
                <?php $key = str_replace('error','danger',$key); ?>
                <div class="alert alert-<?php echo $key;?>">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <?php if ($key == 'danger') { ?>
                        <i class="ace-icon fa fa-exclamation-triangle red"></i>
                    <?php } else if ($key == 'warning') { ?>
                        <i class="ace-icon fa fa-exclamation-triangle yellow"></i>
                    <?php } else if ($key == 'success') { ?>
                        <i class="ace-icon fa fa-check green"></i>
                    <?php } else if ($key == 'info') { ?>
                        <i class="ace-icon fa fa-exclamation-triangle yellow"></i>
                    <?php } ?>
                    <?php echo $message;?>
                    <br>
                </div>
            <?php } ?>
            <?php echo $content; ?>
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->
    <div class="footer">
        <div class="footer-inner">
            <!-- #section:basics/footer -->
            <div class="footer-content">
				<span class="bigger-120">
					<span class="blue bolder"><?php echo Yii::app()->name;?></span>
                        <?php echo Yii::app()->params['company'];?> &copy; 2005-<?php echo date('Y');?>
				    </span>
				</span>
            </div>
            <!-- /section:basics/footer -->
        </div>
    </div>
    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->
<!-- basic scripts -->

<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='/assets/ace/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?php echo Yii::app()->baseUrl?>/assets/ace/js/bootstrap.min.js"></script>
<!-- ace scripts -->
<script src="<?php echo Yii::app()->baseUrl?>/assets/ace/js/ace-elements.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl?>/assets/ace/js/ace.min.js"></script>
<script type="text/javascript"> ace.vars['base'] = '..'; </script>
<script src="<?php echo Yii::app()->baseUrl?>/assets/ace/js/ace/ace.onpage-help.js"></script>

<?php if (file_exists(Yii::app()->basePath . '/../assets/admin/js/scripts.js')) {?>
    <?php Yii::app()->getClientScript()->registerScriptFile("/assets/admin/js/scripts.js", CClientScript::POS_END);?>
<?php } ?>
<?php if (file_exists(Yii::app()->basePath . '/../assets/admin/js/'.Yii::app()->controller->id.'/scripts.js')) {?>
    <?php Yii::app()->getClientScript()->registerScriptFile("/assets/admin/js/".Yii::app()->controller->id."/scripts.js", CClientScript::POS_END);?>
<?php } ?>
<?php if (file_exists(Yii::app()->basePath . '/../assets/admin/js/'.Yii::app()->controller->id.'/'.$this->action->id.'/scripts.js')) {?>
    <?php Yii::app()->getClientScript()->registerScriptFile("/assets/admin/js/".Yii::app()->controller->id."/".$this->action->id."/scripts.js", CClientScript::POS_END);?>
<?php } ?>

</body>
</html>

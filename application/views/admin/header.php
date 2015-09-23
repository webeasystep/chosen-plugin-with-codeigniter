<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->config->item('site_lang') ?>" lang="en">
    <head>
        <title><?= $this->option->get('admin_panel_title'); //$page_title         ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="كلمات البحث مفصولة بفاصلة" />
        <meta name="description" content="وصف مختصر للموقع" />
        <link rel="shortcut icon" href="images/favicon.ico" type="<?php echo base_url(); ?>global/modules/admin/image/x-icon" />
        <link rel="stylesheet" type="text/css" title="style" media="screen" href="<?php echo base_url(); ?>global/modules/admin/css/style.css" />
        <link rel="stylesheet" type="text/css" title="style" media="screen" href="<?php echo base_url(); ?>global/modules/admin/css/jquery.hoverscroll.css" />
        <link rel="stylesheet" type="text/css" title="style" media="screen" href="<?php echo base_url(); ?>global/modules/admin/css/jquery.cleditor.css" />
        <!-- datepicker start -->
        <link rel="stylesheet" type="text/css" title="style" media="screen" href="<?php echo base_url(); ?>global/modules/admin/css/jquery.ui.base.css" />
        <link rel="stylesheet" type="text/css" title="style" media="screen" href="<?php echo base_url(); ?>global/modules/admin/css/jquery.ui.theme.css" />
        <!-- datepicker end -->
        <!--[if IE]><link rel="stylesheet" type="text/css" media="screen" href="css/ie.css" /><![endif]-->
        <!--[if lte IE 7]>
            <link rel="stylesheet" type="text/css" media="screen" href="css/ie7.css" />
            <script type="text/javascript">
                /*Load jQuery if not already loaded*/ if(typeof jQuery == 'undefined'){ document.write("<script type=\"text/javascript\"   src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js\"></"+"script>"); var __noconflict = true; }
                var IE6UPDATE_OPTIONS = {icons_path: "images/ie6update/"}
            </script>
            <script type="text/javascript" src="<?php echo base_url(); ?>global/modules/admin/js/ie6update.js"></script>
        <![endif]-->

        <script type="text/javascript" src="<?php echo base_url(); ?>global/modules/admin/js/jquery-1.8.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>global/modules/admin/js/jquery.tablesorter.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>global/modules/admin/js/jquery.hoverscroll.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>global/modules/admin/js/jquery.tabbed.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>global/modules/admin/js/jquery-ui-1.8.18.blind.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>global/modules/admin/js/jquery.cleditor.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>global/modules/admin/js/jquery.fancyfileinputs.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>global/modules/admin/js/cms.init.js"></script>   <!-- All jquery plugins initialization & tweaks here -->
        <script type="text/javascript" src="<?php echo base_url(); ?>global/modules/admin/js/jquery-1.8.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>global/modules/admin/js/jquery.ui.core.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>global/modules/admin/js/jquery.ui.datepicker.js"></script>
        <script type="text/javascript">
            $(function() {
                $( "#datepicker" ).datepicker();
            });
        </script><!-- datepicker end -->

    </head>
    <body>
        <div id="container">
            <div id="rightColumn">
                <a href="<?php echo base_url(); ?>" onclick="window.open(this.href); return false;" id ="logo"><img src="<?php echo base_url(); ?>global/modules/admin/images/icons/" alt="" /></a>
                <!-- Login Info Start -->
                <div id="loginInfo" class="drkTextShadow rnd5">
                    <h3>مرحبا بك يا</h3>
                    <b><a href="<?= base_url() ?>admin/profile"><?= $this->auth->get_username() ?></a></b>
                    <br />
                    <a href="<?= base_url() ?>contactus/admin_contactus" title=""><img src="<?php echo base_url(); ?>global/modules/admin/images/email.png" alt=""/><span class="count rnd3"><?php echo $this->unreaded_messages; ?></span></a>
                    <a href="<?= base_url() ?>admin/logout" onclick="return confirm('هل تريد تسجيل الخروج؟');" title="تسجيل الخروج"><img src="<?php echo base_url(); ?>global/modules/admin/images/logout.png" alt=""/></a>
                </div><!-- Login Info End -->
                <!-- Menu Start -->
                <div class="block">
                    <div class="content">
                        <ul id="rightNav" class="menu drkTextShadow">
                            <li><a href="<?= base_url() ?>admin/dashboard/" <?= ($this->uri->segment(2) == "dashboard") ? "class='current'" : "" ?>>الرئيسية</a></li>
                            <li><a href="<?= base_url() ?>authorization/admin_users/overview" <?= ($this->uri->segment(1) == "users") ? "class='current'" : "" ?>><?= 'إدارة المستخدمين والصلاحيات' ?></a></li>
                            <li><a href="<?= base_url() ?>services/admin_services"  <?= ($this->uri->segment(1) == "services") ? "class='current'" : "" ?>><?php echo 'إدارة الخدمات' ?></a></li>
                            <li><a href="<?= base_url() ?>places/admin_places"  <?= ($this->uri->segment(1) == "places") ? "class='current'" : "" ?>><?php echo 'إدارة الاماكن السياحية' ?></a></li>
                            <li><a href="<?= base_url() ?>hotels/admin_hotels"  <?= ($this->uri->segment(1) == "hotels") ? "class='current'" : "" ?>><?php echo 'إدارة حجوزات الفنادق' ?></a></li>
                            <li><a href="<?= base_url() ?>offers/admin_offers/overview"  <?= ($this->uri->segment(3) == "overview") ? "class='current'" : "" ?>><?php echo 'إدارة العروض' ?></a></li>
                            <li><a href="<?= base_url() ?>photos/admin_photos/overview"  <?= ($this->uri->segment(1) == "overview") ? "class='current'" : "" ?>><?php echo 'إدارة الصور' ?></a></li>
                            <li><a href="<?= base_url() ?>offers/admin_offers/offer_orders"  <?= ($this->uri->segment(3) == "offer_orders") ? "class='current'" : "" ?>><?php echo 'إدارة المشتريات' ?></a></li>
                            <li><a href="<?= base_url() ?>country/admin_country"  <?= ($this->uri->segment(1) == "country") ? "class='current'" : "" ?>>إدارة الدول</a></li>
                            <li><a href="<?= base_url() ?>contactus/admin_contactus"  <?= ($this->uri->segment(1) == "contactus") ? "class='current'" : "" ?>><?php echo lang('adminContactus') ?></a></li>
                            <li><a href="<?= base_url() ?>pages/admin_pages/"  <?= ($this->uri->segment(1) == "pages") ? "class='current'" : "" ?>><?php echo lang('adminPages') ?></a></li>
                            <li><a href="<?= base_url() ?>" onclick="window.open(this.href); return false;"><?php echo lang('website') ?></a></li>
                        </ul>
                    </div>
                </div><!-- Menu End -->
            </div><!-- right Column End -->
            <div id="middleContent">
                
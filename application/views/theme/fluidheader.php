<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl" lang="ar">
<head>
    <title>ميمورابل</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>global/site/images/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="keywords" content="كلمات تعبر عن محتوى الصفحة  مفصولة بفاصلة" />
    <meta name="description" content="وصف مختصر لمحتوى الصفحة" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Css Declarations -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>global/site/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>global/site/css/bootstrap-rtl.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>global/site/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>global/site/css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url()?>global/site/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>global/site/css/flip.images.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>global/site/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>global/site/css/navbar.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>global/site/css/media-fixes.css" />

    <!-- JavaScript Declarations -->
    <!--        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="<?= base_url()?>global/site/js/jquery.1.11.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>global/site/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>global/site/js/jquery.inewsticker.js"></script>
    <script type="text/javascript" src="<?= base_url()?>global/site/js/jquery.titletooltip.js"></script>
    <script type="text/javascript" src="<?= base_url()?>global/site/js/tooltip.js"></script>
    <script type="text/javascript" src="<?= base_url()?>global/site/js/jquery.tabs.js"></script>
    <script type="text/javascript" src="<?= base_url()?>global/site/js/jquery.slideOutMenu.js"></script>
    <script type="text/javascript" src="<?= base_url()?>global/site/js/jquery.featureList.js"></script>
    <script type="text/javascript" src="<?= base_url()?>global/site/js/jquery.noty.packaged.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>global/site/js/noty.Theme.js"></script>
    <script type="text/javascript" src="<?= base_url()?>global/site/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?= base_url()?>global/site/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?= base_url()?>global/site/js/navbar.js"></script>

    <!-- Templating Engine -->
    <script type="text/javascript">
        $(document).ready(function(){
            $(".page-content").load("<?= base_url()?>offers/get_img_offers");
            $(".pg-service").click(function(){$(".page-content").load("<?= base_url()?>services/get_slider_services")});
/*
            $(".pg-offer").click(function(){$(".page-content").load("<?= base_url()?>global/site/pg-offer.html")});
*/
            $("#pg-book-now").click(function(){$(".page-content").load("<?= base_url()?>global/site/pg-book-now.html")});
            $("#pg-sections").click(function(){$(".page-content").load("<?= base_url()?>global/site/pg-sections.html")});

            $("#pg-section-details").click(function(){$(".page-content").load("<?= base_url()?>global/site/pg-section-details.html")});
            $("#pg-news-details").click(function(){$(".page-content").load("<?= base_url()?>global/site/pg-news-details.html")});
            $("#pg-gallery").click(function(){$(".page-content").load("<?= base_url()?>global/site/pg-gallery.html")});
            $("#pg-faq").click(function(){$(".page-content").load("<?= base_url()?>global/site/pg-faq.html")});
            $("#pg-search-results").click(function(){$(".page-content").load("<?= base_url()?>global/site/pg-search-results.html")});

            $(".navbar-brand").click(function(){$(".page-content").load("<?= base_url()?>global/site/pg-home.html")});
            /*                $("a[title='بيانات المدينة']").click(function(){$("#container").load("cont-city-details.html")});
             $("a#logo, .breadCrumb > .home").click(function(){$("#container").load("cont-home.html")});*/
        });
    </script>

    <!-- Browser Hacks -->
    <script type="text/javascript" src="<?= base_url()?>global/site/js/browser.hacks.js"></script>
</head>
<body>
<!--Toggle "navbar-static-top" "navbar-fixed-top" "navbar-fixed-bottom" to place navbar on top with fixed OR scroll position -->
<nav id="header" role="navigation" class="navbar navbar-default navbar-fixed-top"><!-- Use "navbar-inverse" for dark navbar bg -->
    <div id="header-container" class="container-fluid">
        <div class="navbar-header">
            <button data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="brand" href="javascript:void(0)" class="navbar-brand"><img src="<?= base_url()?>global/site/images/logo.png" /></a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?= modules::run("services/services_cat_menu") ?>
                <?= modules::run("country/country_menu") ?>

                <li><a class="pg-offer" href="javascript:void(0)">الحج والعمرة</a></li>
                <?= modules::run("offers/others_menu") ?>


                <li><a id="pg-book-now" href="javascript:void(0)">احجز الآن</a></li>
                <li class="dropdown">
                    <a id="" data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)">لغة<span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a id="" href="javascript:void(0)">E</a></li>
                        <li><a id="" href="javascript:void(0)">Chinease</a></li>
                        <li><a id="" href="javascript:void(0)">Malay</a></li>
                        <li><a id="" href="javascript:void(0)">Bangla</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav><!-- /The responsive navbar requires the collapse plugin to be included in your version of Bootstrap. -->

<div class="container-fluid page-content">

</div>

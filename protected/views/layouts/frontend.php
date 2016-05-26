<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Implementation of a Highly Available and Audience Customized Cloud-Based Online Radio">
    <meta name="author" content="Samundra Babu Bastola">
    <title>Radio PRJ701 | Implementation of a Highly Available and Audience Customized Cloud-Based Online Radio Station | Samundra Babu Bastola</title>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/css/main.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/css/animate.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/js/html5shiv.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/images/ico/favicon.html">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/images/ico/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/images/ico/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/images/ico/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/images/ico/apple-touch-icon-57-precomposed.html">
</head>
<body>
<header id="header" role="banner">
    <div class="main-nav">
        <div class="container">
            <div class="header-top">
                <div class="pull-right social-icons">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl; ?>/site/index">
                        <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="scroll active"><a href="#home">Home</a></li>
                        <li class="scroll"><a href="#explore">Explore</a></li>
                        <li class="scroll"><a href="#program">Programs</a></li>
                        <li class="scroll"><a href="#about">About</a></li>
                        <li class="scroll"><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<?php echo $content; ?>
<footer id="footer">
    <div class="container">
        <div class="text-center">
            <p> Copyright &copy;2016<a target="_blank" href=""> Radio PRJ702 </a>. All Rights Reserved. <br> Designed by <a target="_blank" href="mailo:musik21ocean@gmail.com">Sam Bas</a></p>
        </div>
    </div>
</footer>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/js/gmaps.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/js/smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/js/jquery.parallax.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/js/coundown-timer.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/js/jquery.nav.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/js/main.js"></script>
</body>
</html>
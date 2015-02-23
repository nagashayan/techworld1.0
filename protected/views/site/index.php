<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="We call ourself geeks,we are group of like minded people working in different companies. We teach what we explore daily, we teach what we think is our passion.">
    <meta name="keywords" content="android workshops, learn technology, android workshops">
    <meta name="author" content="Nagashayana R">

    <title>Techworld - Learn new technology</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <!--  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>

    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    
    <script type="text/javascript" src="<?php echo Yii::app()->params['siteUrl'];?>/js/jssor.slider.mini.js"></script>
    <!-- for jquery contact form -->
    <link href="<?php echo Yii::app()->params['siteUrl'];?>/css/jquery.feedback_me.css" rel="stylesheet" type="text/css">
<script src="<?php echo Yii::app()->params['siteUrl'];?>/js/jquery.feedback_me.js"></script>
 <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

  <style>
      .jssort02 .p:hover .c, .jssort02 .pav:hover .c, .jssort02 .pav .c 
                {
                	background: url(<?php echo Yii::app()->params['siteUrl'];?>/img/t01.png) center center;
                	border-width: 0px;
                    top: 2px;
                    left: 2px;
                    width: 95px;
                    height: 62px;
                }
                /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l              (normal)
            .jssora05r              (normal)
            .jssora05l:hover        (normal mouseover)
            .jssora05r:hover        (normal mouseover)
            .jssora05ldn            (mousedown)
            .jssora05rdn            (mousedown)
            */
            .jssora05l, .jssora05r, .jssora05ldn, .jssora05rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(<?php echo Yii::app()->params['siteUrl'];?>/img/a17.png) no-repeat;
                overflow:hidden;
            }
      </style>
<script>
        jQuery(document).ready(function ($) {
            //set up some basic options for the feedback_me plugin
  fm_options = {
    position: "left-bottom",
    name_required: true,
    show_email: true,    
    email_required: true,
    message_placeholder: "We are glad to hear from you",
    message_required: true,
    show_asterisk_for_required: true,
    feedback_url: "<?php echo Yii::app()->params['siteUrl'];?>/site/contact",
    // Label for title text
    title_label : "Contact Us", 
    // Label for open/close (trigger) button
    trigger_label : "Contact Us",
    
    custom_params: {
      
      feedback_type: "From Techworld Site"
    }
    
  };
  //init feedback_me plugin
  fm.init(fm_options);
  //end of feedback plugin
  //start jquery slider
            var _SlideshowTransitions = [
            //Zoom- in
            {$Duration: 1200, $Zoom: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 },
            //Zoom+ out
            {$Duration: 1000, $Zoom: 11, $SlideOut: true, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 },
            //Rotate Zoom- in
            {$Duration: 1200, $Zoom: 1, $Rotate: 1, $During: { $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8] }, $Easing: { $Zoom: $JssorEasing$.$EaseSwing, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseSwing }, $Opacity: 2, $Round: { $Rotate: 0.5} },
            //Rotate Zoom+ out
            {$Duration: 1000, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} },

            //Zoom HDouble- in
            {$Duration: 1200, x: 0.5, $Cols: 2, $Zoom: 1, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 },
            //Zoom HDouble+ out
            {$Duration: 1200, x: 4, $Cols: 2, $Zoom: 11, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 },

            //Rotate Zoom- in L
            {$Duration: 1200, x: 0.6, $Zoom: 1, $Rotate: 1, $During: { $Left: [0.2, 0.8], $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8] }, $Easing: { $Left: $JssorEasing$.$EaseSwing, $Zoom: $JssorEasing$.$EaseSwing, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseSwing }, $Opacity: 2, $Round: { $Rotate: 0.5} },
            //Rotate Zoom+ out R
            {$Duration: 1000, x: -4, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} },
            //Rotate Zoom- in R
            {$Duration: 1200, x: -0.6, $Zoom: 1, $Rotate: 1, $During: { $Left: [0.2, 0.8], $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8] }, $Easing: { $Left: $JssorEasing$.$EaseSwing, $Zoom: $JssorEasing$.$EaseSwing, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseSwing }, $Opacity: 2, $Round: { $Rotate: 0.5} },
            //Rotate Zoom+ out L
            {$Duration: 1000, x: 4, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} },

            //Rotate HDouble- in
            {$Duration: 1200, x: 0.5, y: 0.3, $Cols: 2, $Zoom: 1, $Rotate: 1, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.7} },
            //Rotate HDouble- out
            {$Duration: 1000, x: 0.5, y: 0.3, $Cols: 2, $Zoom: 1, $Rotate: 1, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.7} },
            //Rotate VFork in
            {$Duration: 1200, x: -4, y: 2, $Rows: 2, $Zoom: 11, $Rotate: 1, $Assembly: 2049, $ChessMode: { $Row: 28 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.7} },
            //Rotate HFork in
            {$Duration: 1200, x: 1, y: 2, $Cols: 2, $Zoom: 11, $Rotate: 1, $Assembly: 2049, $ChessMode: { $Column: 19 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} }
            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 1500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 600,                                //Specifies default duration (swipe) for slide in milliseconds

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                },

                $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $Lanes: 2,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
                    $SpacingX: 14,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 12,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 6,                             //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 156,                          //[Optional] The offset position to park thumbnail
                    $Orientation: 2                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 960), 300));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top">Techworld</a>
            </li>
            <li>
                <a href="#top">Home</a>
            </li>
            <li>
                <a href="#about">Who we are</a>
            </li>
            <li>
                <a href="#services">What we do</a>
            </li>
            <li>
                <a href="#portfolio">What we have done</a>
            </li>
            <li>
                <a href="#nextevent">Our Next Event</a>
            </li>            
           
        </ul>
    </nav>

    <!-- Header -->
    <header id="top">
        <div class="contactinfo">
            &nbsp;&nbsp;&nbsp;<i class="fa fa-phone fa-fw"></i>+91 8971767398 &nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa fa-envelope-o fa-fw"></i>  <a rel="nofollow" target="_blank" href="mailto:thetechworldspeakers@gmail.com">thetechworldspeakers@gmail.com</a>

        </div>
    </header>
        <div class="header text-vertical-center">
            <h1 style="color: #fff">Techworld</h1>
            <h5 style="margin-left: 178px;margin-top: 3px;color: #fff">Where Geeks meet</h5>
			<br>
                        <h4 style="color: #fff">We call ourself geeks, we are group of like minded people working in different companies</h4>
			<h4 style="color: #fff">We teach what we explore daily, we teach what we think is our passion.</h4>
            <br>
            <a href="#portfolio" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>We Transform you from Student to Professional, Newbie to Master, Nothing to Everything</h2>
                    <p class="lead">We provide high quality and value based technical education.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside id="nextevent" class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Our Next Event, Workshop Coming Soon</h3>                    
                   <!-- <a href="#" class="btn btn-lg btn-light">Click Me!</a> -->
                   <!-- <a href="http://goo.gl/forms/y8gsQ1qvXR" class="btn btn-lg btn-dark" rel="nofollow" target="_blank">Register</a> -->
                </div>
            </div>
        </div>
    </aside>
    
    	<!-- our team -->
<section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-8  text-center">
                    <h2>What we have done</h2>
                
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 0px;  left: 0px; width: 960px;
        height: 480px; background: #191919; overflow: hidden;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(<?php echo Yii::app()->params['siteUrl'];?>/img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 240px; top: 0px; width: 720px; height: 480px; overflow: hidden;">
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/1.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/1.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/2.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/2.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/3.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/3.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/4.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/4.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/5.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/5.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/6.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/6.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/7.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/7.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/8.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/8.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/9.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/9.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/10.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/10.jpg" />
            </div>
            
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/11.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/11.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/12.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/12.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/13.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/13.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/14.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/14.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/15.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/15.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/16.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/16.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/17.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/17.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/18.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/18.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/19.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/19.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/20.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/20.jpg" />
            </div>
             <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/21.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/21.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/22.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/22.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/23.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/23.jpg" />
            </div>
            <div>
                <img u="image" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/24.jpg" />
                <img u="thumb" src="<?php echo Yii::app()->params['siteUrl'];?>/img/workshoppics/24.jpg" />
            </div>
        </div>
        
        <!-- Arrow Navigator Skin Begin -->
        <style>
            
                /* jssor slider thumbnail navigator skin 02 css */
                /*
                .jssort02 .p            (normal)
                .jssort02 .p:hover      (normal mouseover)
                .jssort02 .pav          (active)
                .jssort02 .pav:hover    (active mouseover)
                .jssort02 .pdn          (mousedown)
                */
                .jssort02 .w
                {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                }
                .jssort02 .c
                {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 95px;
                    height: 62px;
                    border: #000 2px solid;
                }
                
                .jssort02 .p:hover .c, .jssort02 .pav:hover .c
                {
                    top: 0px;
                    left: 0px;
                    width: 97px;
                    height: 64px;
                    border: #fff 1px solid;
                }
                .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05ldn { background-position: -250px -40px; }
            .jssora05rdn { background-position: -310px -40px; }
            
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 248px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        
        <!-- Thumbnail Navigator Skin 02 Begin -->
        <div u="thumbnavigator" class="jssort02" style="position: absolute; width: 240px; height: 480px; left:0px; bottom: 0px;">
        
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="position: absolute; width: 99px; height: 66px; top: 0; left: 0;">
                    <div class=w><div u="thumbnailtemplate" style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></div></div>
                    <div class=c>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        
    </div>
    <!-- Jssor Slider End -->
    
                    <!-- /.row (nested) -->
                   <!-- <a href="#" class="btn btn-dark">View More Items</a> -->
                </div>                
                <!-- /.col-lg-10 -->
                <div class="col-lg-4 text-center" style="left: 47px">
                     <h3>Things only for you</h3>
                <div class="row resources">
                    <a target="_blank" rel="nofollow" href="https://drive.google.com/file/d/0B1V6QpcguZ4VVXlCQUlYR0t3cEE/view">Demo apps</a>
                </div></div>
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

  
        
    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>What we do</h2>
                    <hr class="small">
                    <div class="row">
                        
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Workshops</strong>
                                </h4>
                                <p>Our workshops are interactive and completely hands-on.
Our trainers have wide years of experience in various technologies and have worked with multiple clients.
we provide the platform to students to develop  their profile and enhance their technical strengths.</p>
                                <!-- <a href="#" class="btn btn-light">Learn More</a> -->
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Projects</strong>
                                </h4>
                                <p> We provide Live Projects  with New Concepts and Latest Technology. Live projects give you the complete knowledge of the projects in all aspects. </p>
                                <!-- <a href="#" class="btn btn-light">Learn More</a> -->
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>TechTalk</strong>
                                </h4>
                                <p>We are  here a group of geeks who offer knowledge and inspiration from the  most inspired thinkers / speakers, and also a community of curious souls to engage with ideas and each other.</p>
                                <!-- <a href="#" class="btn btn-light">Learn More</a> -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
  
  <!-- Faculty Section -->
   <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section  class="portfolio">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Our Team</h2>
                    <hr class="small">
                    <div class="row ourteam">
                        <div class="col-lg-3"><img src="<?php echo Yii::app()->params['siteUrl'];?>/images/nagashayan.jpg" height="200" width="200" alt="Nagashayana R"/>Nagashayana R <br> Web Developer, InnovateSearch </div>
                        <div class="col-lg-3"><img src="<?php echo Yii::app()->params['siteUrl'];?>/images/vignesh.jpg" height="200" width="200" alt="Vignesh K"/>Vignesh K <br> Android Developer, Cognizant</div>
                        <div class="col-lg-3"><img src="<?php echo Yii::app()->params['siteUrl'];?>/images/karthik.jpg" height="200" width="200" alt="Karthik"/>Karthik <br> Java Developer, QuantumAeon</div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Map -->
    <!-- <section id="contact" class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3887.3163726026664!2d77.642605!3d13.015514!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17280ed42fa9%3A0x27905d0cf2fb5585!2sEast+Point+PU+College%2C+%2310%2C+80+Feet+Road!5e0!3m2!1sen!2s!4v1422121724380" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
        
      
    </section> -->

    <!-- Footer -->
    <footer>
        <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1395563410754806',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div>
<div class="fb-like" data-href="https://www.facebook.com/TheTechnologyWorld" data-width="100" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Techworld</strong>
                    </h4>
                    <p>#3,shanthi vilas, ganashankarappa layout,
                        oil mill road, aravind nagar, Bangalore - 560084</p>
                   <!-- <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i>+91 8971767398</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a rel="nofollow" target="_blank" href="mailto:thetechworldspeakers@gmail.com">thetechworldspeakers@gmail.com</a>
                        </li>
                    </ul> -->
                    
                    <!-- <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/TheTechnologyWorld" rel="nofollow" target="_blank"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li> 
                    </ul -->
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Techworld 2015</p>
                    <p class="text-muted">Developed by <a href="//in.linkedin.com/pub/naga-shayan-r/86/a87/554/" target="_blank" rel="nofollow">Nagashayan</a></p>
                </div>
            </div>
        </div>
</div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
	
$(document).ready( function() {

    $('.try').hover( function() {
        $(this).find('.img-title').fadeIn(300);
    }, function() {
        $(this).find('.img-title').fadeOut(100);
    });
	
});
    </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59122513-1', 'auto');
  ga('send', 'pageview');

</script>
  
</body>

</html>

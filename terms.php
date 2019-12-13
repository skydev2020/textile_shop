<?php

session_start();
$goToUrl = "horizontalios-zaliuzes";
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="verify-paysera" content="d11517eddb69e5571c56466a4aee8662">
    <meta name=description content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Solemlux el. parduotuvė - Užsakymas Internetu</title>
    

    <link href="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     


    <link rel="stylesheet" href="ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    </script>
    <script src="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/bootstrap/3.0.0/js/bootstrap.min.js">
    </script>
    <script src="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js">
    </script>

    <link href="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/custom.css" rel="stylesheet" />
	<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />
    <link href="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/jquery/jquery.multiselect.css" rel="stylesheet" />
    
    <script src="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/jquery/jquery.multiselect.js"></script>
<!-- Hotjar Tracking Code for https://solemlux.lt/eshopdev/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1476772,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T3MJ9P7');</script>
<!-- End Google Tag Manager -->

    <style>
	.fab {color:red}
        .myfab input[type="radio"]{
            display:none !important;
        }
        .soitan input[type="text"]{
            background:#f2f7fa;
        }
        .soitan input[type="number"]{
            background:#f2f7fa;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }
        .soitan input[type="email"]{
            background:#f2f7fa;
        }
        .soitan input[type="select"]{
            background:#f2f7fa;
        }
        .hoverImg{
            z-index:99999;
        }
        .cpic .frame
        {
            height:40px !important;
            margin-top:70px;
            margin-left:-196px;
        }
        .cpic .img-respom
        {
            height:100px !important;
        }
        .cpic .frame  img
        {
            height:60px !important;
            width:80px !important;
            margin-left:187px;
            margin-top:35px;
        }

        @media only screen and (min-width: 768px) {
          .cpic .frame  img
                {
                    margin-top:45px;
                }

         .col-form-labels {
                 margin-top: 0px; 
            }      
        .cpic .frame img{
        margin-top: 35px;
        }

        }

@media only screen and (max-width: 768px) {

  /* For mobile phones: */

                    .colss{
            padding-left: 0px  !important;
                padding-right: 0px  !important;
                margin-left: 0px  !important;
            }
             .colss_2{
                padding-left: 15px!important !important ;
             }



}

        .col-form-labels {
                 margin-top: 15px; 
            }   
        .checktab_img .singleImage frame{
            left:30px !important;
        }
        .checktab_img_check .singleImage frame{
            left:30px !important;
        }
        #color_mch {
            margin-top: 10px !important;
            text-align: left;
        }
        /* hide up/down arrows ("spinners") on input fields marked type="number" */
        .no-spinners {
            -moz-appearance:textfield;
        }
        .no-spinners::-webkit-outer-spin-button,
        .no-spinners::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        /*input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0;
        }*/

        .fabimg
        {
            cursor: pointer !important;
        }
    
           
    </style>

</head>
<?php 

if(isset($_SESSION['order_complete']) && $_SESSION['order_complete'] == "success" ){ ?>

 

<div id="successtyuasdwq_2" class="modal" role="dialog" style="display: block;">
        <div class="modal-dialog" style="width: 100%; max-width: 1000px">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body" style="text-align: center; padding:0px">
                    <h3 class="something" style="text-align: left"></h3>
                    <div id="product-table">



                        <h1>Jūsų užsakymas priimtas, netrukus su jumis susisieksime </h1>

                                   </div>
           
                    <button type="button" class="btn btn-default checkout" onClick="close_checkout();">Uždaryti
                    </button>
                </div>
            </div>

        </div>
    </div>




  
<?php 
unset ($_SESSION["order_complete"]);
} ?>

<script type="text/javascript">
	function step2show()
	{
		$("#step-2").show();
	}
	function tab_selection(step)
	{

		if(step=="step-1-select")
		{
			$("#step-1-select").html("<dddd></dddd>");
			$("#step-4-select").html("");
			$("#step-5-select").html("");
		}else
		if(step=="step-4-select")
		{
			$("#step-4-select").html("<dddd></dddd>");
			$("#step-1-select").html("");
			$("#step-5-select").html("");
		}else
		if(step=="step-5-select")
		{
			$("#step-5-select").html("<dddd></dddd>");
			$("#step-1-select").html("");
			$("#step-4-select").html("");
		}



	}
//alert($(body').width());
</script>

<div class="grnbg mobile_show redbgtop">
	 <div class="container">
  		<div class="row top_header_width" style="background-color:#fff; color:#ff244d;">
             <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 text-center logodiv" style="background-color:#ff2424;"><img src="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/upload/logo.png" alt="Logo" class="img-responsive topLogo" width="180" ></div>
             <?php
                    if (isset($_SESSION['cart']['product_details'])) {
                        $count = count($_SESSION['cart']['product_details']);
                    } else {
                        $count = 0;
                    }
                    ?>
             <div class="col-lg-6 col-md-5 col-xs-6 desktop_div no-padding-right" style=" float:left; margin:3px 0 0 0; font-size:15px;">
             	<ul class="nav nav-pills nav-justified thumbnail setup-panel topbarmenu" style="border:none; float: left;" >
             <li class="li" id="step2" style="width:48% !important;">
                    <a href="https://www.solemlux.lt/eshopdev/horizontalios-zaliuzes/step2">
                        <h4 class="list-group-item-heading" style="font-size:15px;">Užsakymas
                        </h4>
                        <p class="list-group-item-text" style="font-size:13px;">Pristatymo ir apmokėjimo informacija</p>
                    </a>
                </li>
                <li class="li" id="step3" style="width:48% !important;">
                    <a href="https://www.solemlux.lt/eshopdev/horizontalios-zaliuzes/step3">
                        <h4 class="list-group-item-heading" style="font-size:15px;">Užsakymo patvirtinimas
                        </h4>
                        <p class="list-group-item-text" style="font-size:13px;">Užsakymo peržiūra ir patvirtinimas
                        </p>
                    </a>
                </li>
               <!-- <li class="li" id="formstep">
                    <div class="search-area">
                        <form action="" method="get" class="search-form">
                            <input class="form-control" type="search" style="border: 0 !important;margin-top: 0;padding: 0 5px;">
                            <button type="submit"></button>
                        </form>
                    </div>
                </li>-->
                </ul>
             </div>
            <div class="col-lg-4 col-md-5 col-sm-9 col-xs-6 shoppingcart">
			
             	<div class="cartinner" style="float:right;">
             		<a <?php if( $count > 0) {?> href="https://www.solemlux.lt/eshopdev/<?php echo $goToUrl;?>/step2" class="cart-have-item" <?php } else { echo 'href="javascript:;"';} ?>>
             			<span class="cartxt">Krepšelis</span>
                        <span class="cartCount" id="gonoamarcart"><?php echo $count ?></span>
             		</a>
             	</div>
				 <div class="disnone searchBox">
             	<ul class="nav nav-pills nav-justified thumbnail setup-panel topbarmenu" style="border:none;" >
                <li class="li" id="formstep">
                    <div class="search-area">
                        <form action="" method="get" class="search-form">
                            <input class="form-control" type="search" style="border: 0 !important;margin-top: 0;padding: 0 5px;">
                            <button type="submit"></button>
                        </form>
                    </div>
                </li>
                </ul>
             </div>
           	</div>
        </div>
		
	<div class="col-lg-12 col-md-12 mobile_div" style="padding:0;">
		<ul class="nav nav-pills nav-justified thumbnail setup-panel" style="border:none; width:100%;" >
			<li class="li" id="formstep" style="width: 100%;">
				<div class="search-area">
					<form action="" method="get" class="search-form">
						<input class="form-control" type="search" style="border: 0 !important;padding: 0 5px;margin-top: 0px;width: 100%;">
						<button type="submit"></button>
					</form>
				</div>
			</li>
		</ul>
    </div>

       <div class="col-lg-12 mobile_div" style="padding:0;">

             	<ul class="nav nav-pills nav-justified thumbnail setup-panel" style="border:none; width:100%;" >
             <li  id="step2" class="col-lg-6 col-md-6 col-xs-6 li" style="float:left; width:49%; padding:0 2px;">
                    <a class="bgnav" href="https://www.solemlux.lt/eshopdev/horizontalios-zaliuzes/step2" style="padding:5px 0;">
                        <h4 class="list-group-item-heading" style="font-size:13px;">Užsakymas</h4>
                        <p class="list-group-item-text" style="font-size:13px;">Pristatymo ir apmokėjimo informacija</p>
                    </a>
                </li>
                <li  class="col-lg-6 col-md-6 col-xs-6 li" id="step3" style="float:left; width:49%; padding:0 2px;">
                    <a class="bgnav" href="https://www.solemlux.lt/eshopdev/horizontalios-zaliuzes/step3" style="padding:5px 0;">
                        <h4 class="list-group-item-heading" style="font-size:13px;">Užsakymo patvirtinimas</h4>
                        <p class="list-group-item-text" style="font-size:13px;">Užsakymo peržiūra ir patvirtinimas
                        </p>
                    </a>
                </li>
                </ul>

       </div>
   </div>
 </div>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">

<link rel="stylesheet" href="https://www.solemlux.lt/eshopdev/layout.css"> 

<div class="container myform ar-myform" id="cont">
   <?php
$uri_link = $_SERVER['REQUEST_URI'];?>
<!DOCTYPE html>
<html lang="lt-LT" prefix="og: http://ogp.me/ns#"> 
<head>

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<!--[if lt IE 9]>
<script src="https://www.solemlux.lt/wp-content/themes/roletas/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link rel="stylesheet" href="https://www.solemlux.lt/wp-content/themes/roletas/css/header.css">	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T3MJ9P7');</script>
<!-- End Google Tag Manager -->
<!-- Hotjar Tracking Code for www.solemlux.lt -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1123246,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>




		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}


.colss{
  margin-left: 10px;
}

.borderright
{
	border-right:1px dotted #ff2424;
	float:left;
	margin-left:2px;
}

.navbar.fixed ul#menu-main-menu-lt
{
	
}

.navbar.fixed
{
	background-color:#FFFFFF !important;
}


.navbar .navbar-nav > li > a:hover
{
	font-weight:bold;
	font-size:13px;
	color:red;
}

.actcive_menu
{

	font-weight:bold;
	font-size:13px;
	color:red;
}

.navbar.fixed:not(.centered) .navbar-nav > li > a
{
	padding: 7px 0 !important;
}
.grnbg
{
padding:0 !important;

}
</style>


<link rel='stylesheet' id='wpml-cms-nav-css-css'  href='https://www.solemlux.lt/wp-content/plugins/wpml-cms-nav/res/css/navigation.css?ver=1.4.20' type='text/css' media='all' />
<link rel='stylesheet' id='cms-navigation-style-base-css'  href='https://www.solemlux.lt/wp-content/plugins/wpml-cms-nav/res/css/cms-navigation-base.css?ver=1.4.20' type='text/css' media='screen' />
<link rel='stylesheet' id='cms-navigation-style-css'  href='https://www.solemlux.lt/wp-content/plugins/wpml-cms-nav/res/css/cms-navigation.css?ver=1.4.20' type='text/css' media='screen' />
<link rel='stylesheet' id='twentytwelve-fonts-css'  href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700&#038;subset=latin,latin-ext' type='text/css' media='all' />
<!--<link rel='stylesheet' id='bootstrap-css'  href='https://www.solemlux.lt/wp-content/themes/roletas/style/css/bootstrap.min.css?ver=4.9.8' type='text/css' media='all' />-->


<script type='text/javascript' src='https://www.solemlux.lt/wp-content/plugins/slick-popup/libs/js/jquery.nicescroll.min.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/plugins/slick-popup/libs/js/custom.js?ver=4.9.8'></script>
<!--<link rel='stylesheet' id='aqua-css'  href='https://www.solemlux.lt/wp-content/themes/roletas/style/css/color/aqua.css?ver=4.9.8' type='text/css' media='all' />-->
<link rel='stylesheet' id='googleapis-css'  href='https://fonts.googleapis.com/css?family=Raleway%3A400%2C300%2C500%2C600%2C700%2C800%2C900&#038;ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='googleapis 2-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C700%2C700i%2C900%2C900i&#038;ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='icons-css'  href='https://www.solemlux.lt/wp-content/themes/roletas/style/type/icons.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='https://www.solemlux.lt/wp-content/themes/roletas/css/font-awesome.css?ver=4.9.8' type='text/css' media='all' />
<!--[if lt IE 9]>
<link rel='stylesheet' id='twentytwelve-ie-css'  href='https://www.solemlux.lt/wp-content/themes/roletas/css/ie.css?ver=20121010' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='splite-css-css'  href='https://www.solemlux.lt/wp-content/plugins/slick-popup/libs/css/styles.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='splite-animate-css'  href='https://www.solemlux.lt/wp-content/plugins/slick-popup/libs/css/animate.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='redux-google-fonts-splite_opts-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A700%7CNoto+Sans&#038;ver=1540734837' type='text/css' media='all' />
<link rel='stylesheet' id='colorbox-css'  href='https://www.solemlux.lt/wp-content/plugins/lightbox-gallery/colorbox/example1/colorbox.css?ver=4.9.8' type='text/css' media='all' />


<script type='text/javascript' src='https://www.solemlux.lt/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var Cli_Data = {"nn_cookie_ids":[],"cookielist":[]};
var log_object = {"ajax_url":"https:\/\/www.solemlux.lt\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/plugins/cookie-law-info/public/js/cookie-law-info-public.js?ver=1.7.0'></script>


<script type='text/javascript'>
/* <![CDATA[ */
var wpml_cookies = {"_icl_current_language":{"value":"lt","expires":1,"path":"\/"}};
var wpml_cookies = {"_icl_current_language":{"value":"lt","expires":1,"path":"\/"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/plugins/sitepress-multilingual-cms/res/js/cookies/language-cookie.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-dropdown-click/script.js?ver=1'></script>


<link rel='https://api.w.org/' href='https://www.solemlux.lt/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.solemlux.lt/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.solemlux.lt/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.8" />
<link rel='shortlink' href='https://www.solemlux.lt/' />
<link rel="alternate" type="application/json+oembed" href="https://www.solemlux.lt/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.solemlux.lt%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://www.solemlux.lt/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.solemlux.lt%2F&#038;format=xml" />

<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Default comment here */ 

jQuery(document).ready(function(){
jQuery(".firstbxsl:not(.homepp)").css({'height':(jQuery("ul.bxslider li img").height()+'px')});
});</script>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<style type="text/css">

 .padding_right
 {
 	padding-right:10px !important;
	padding-left:0px !important;
 }
 
 

@media screen and (max-width: 1000px){
.firstbxsl:not(.homepp) a.bx-next{
    top: 38% !important;
}

.firstbxsl:not(.homepp) a.bx-prev, .firstbxsl:not(.homepp) a.bx-prev:hover {
    top: 43% !important;
}
}
@media (max-width: 768px){

  .bx-wrapper{
margin-bottom: 0;
}
  


@media screen and (min-width: 1000px){
.bx-viewport {
    height: 600px !important;
}
}

.first-tabb .panel-toggle{
    font-weight: 500;
    font-family: inherit;
}

.bordered .panel-active .panel-title a i {
  transform: rotateZ(180deg);
  transition: all 1s ease 0s;
}
.bordered .panel-title a i {
  transform: rotateZ(0deg);
  transition: all 1s ease 0s;
}
</style>
<!-- end Simple Custom CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://www.solemlux.lt/wp-content/plugins/lightbox-gallery/lightbox-gallery.css" />
<meta name="generator" content="WPML ver:3.7.1 stt:1,33,46;" />
<!-- <meta name="NextGEN" version="3.0.16" /> -->
		<script type="text/javascript">
			var cli_flush_cache=2;

		</script>
				<style type="text/css" id="wp-custom-css">
			/*
Čia galite pridėti savo CSS kodą.

Spustelėkite pagalbos piktogramą ir sužinokite daugiau.
*/
.fa-angle-down
{
cursor: default !important;
}



 
@media (max-width:768px){
.top_header_width
{
	padding:0;
} 

#splite_popup_box.layout_centered{
    left: 0 !important;
    right: 0 !important;
    width: 100% !important;
    max-width: 98% !important;
    float: none !important;
    margin: 0 auto !important;
}
#splite_popup_title {
    background: none !important;
    padding: 0 !important;
    font-size: 16px !important;
}
#splite_popup_description {
    font-size: 12px;
    margin-top: 0;
    padding: 0;
    margin-bottom: 10px;
    line-height: 1.3;
}
.fullwidth > label {
    font-size: 12px;
    margin-top: 6px;
}
#splite_popup_box input[type="text"] {
    font-size: 13px;
    margin-bottom: 0;
    height: 30px;}
.wpcf7-email{ font-size: 13px !important;
    font-family: sans-serif !important;
    height: 40px !important;
       margin-bottom: 0 !important;
    width: 100% !important;}
.checc{  font-size: 13px;}
}
.wpcf7-email{    border: 2px solid #E5E5E5;
    font-family: sans-serif !important;
    font-size: 15px !important;
    height: 40px !important;
    line-height: 26px !important;
    margin-bottom: 3px !important;
    max-width: 100% !important;
    width: 100% !important;
    padding: 0 8px !important;
    font-weight: normal !important;}		</style>
	<style type="text/css" title="dynamic-css" class="options-output">{color:#EFEFEF;}</style><script>
jQuery( document ).ready(function() {
jQuery('.bxslider').bxSlider({
  auto: true,
  autoControls: true,
  stopAutoOnClick: true,
  pager: true,
speed:5000
});
});

</script>
<link rel='stylesheet' id='testimonials-default-css'  href='https://www.solemlux.lt/wp-content/plugins/strong-testimonials/templates/default/content.css?ver=2.32.1' type='text/css' media='all' />
<link rel='stylesheet' id='wpmtst-font-awesome-css'  href='https://www.solemlux.lt/wp-content/plugins/strong-testimonials/public/fonts/font-awesome-4.6.3/css/font-awesome.min.css?ver=4.6.3' type='text/css' media='all' />
<link rel='stylesheet' id='wpmtst-slider-controls-simple-buttons-css'  href='https://www.solemlux.lt/wp-content/plugins/strong-testimonials/public/css/slider-controls-simple-buttons.css?ver=2.32.1' type='text/css' media='all' />
</head>
<body >
 
  
  <nav class="navbar navbar-default" role="navigation" style="display: block; position:absolute;">
  
  
     <!--<div class="row top_header_width" style="background-color:#fff; color:#ff244d;">
             <div class="col-lg-5 col-md-5"><img src="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/upload/2017/12/nlogo.png" alt="Logo" width="180"></div>
             
             <div class="col-lg-7 col-md-7" style="float:right;/*! vertical-align: middle; */text-align: right;margin-top: -52px;/*! color: red; *//*! margin-right: 30px; */margin-right: 30px; font-size:15px;">
             `<i class="fas fa-shopping-cart" style="font-size: 25px; position: relative; right: 5px;"></i>	Produktų krepšelyje (<span class="cartCount" id="gonoamarcart"><?php
                    if (isset($_SESSION['cart']['product_details'])) {
                        $count = count($_SESSION['cart']['product_details']);
                    } else {
                        $count = 0;
                    }
                    ?><?php echo $count; ?></span>)
           	 </div>
           </div>-->
           
	 <div class="grnbg">
	 <div class="container">
 

 <div class="navbar-header">
            <div class="basic-wrapper">
               <div class="logomobile">
                 <!-- <a href="https://www.solemlux.lt/"><img src="https://www.solemlux.lt/wp-content/themes/roletas/../../uploads/2017/12/logo2.png" class="img-responsive" alt="logo2"></a>-->
              <!--<a class="responsive-menu" data-toggle="collapse" data-target=".navbar-collapse" style="cursor:pointer;"> <img class="img-responsive" src="https://www.solemlux.lt/wp-content/themes/roletas/images/menu_new.png" alt="Chania"></a>-->
              <a class="responsive-menu" data-toggle="collapse" data-target=".navbar-collapse" style="cursor:pointer;"> <img class="img-responsive" src="./menu_new.png" alt="Chania"></a>
               </div>   
           
               
            </div>
            <!-- /.basic-wrapper --> 
          </div>
        
          <div class="collapse navbar-collapse" style="margin-left: 0px;">
		   
            
           

        <ul id="menu-main-menu-lt" class="nav navbar-nav" style="background-color:#fff; width:100%;">
		
		     <li id="menu-item-498" class="mine_rolex menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children" >
        
        <a class="eshop_anchor padding_right <?php if (strpos($uri_link, 'plisuotos-zaliuzes') !== false){?> actcive_menu<?php }?>" href="https://www.solemlux.lt/eshopdev/plisuotos-zaliuzes/"  <?php if (strpos($uri_link, 'plisuotos-zaliuzes') !== false){?> style="color:red !important;"<?php }?>>
					<img class="" style="width:30px" src="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/upload/09.png" alt="icon">
					Plisuotos žaliuzės
				</a> 
              </li>   
			  	 <li id="menu-item-498" class="mine_rolex menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children" >
        
        <a class="eshop_anchor padding_right <?php if (strpos($uri_link, 'roletai-diena-naktis') !== false){?> actcive_menu<?php }?>" href="https://www.solemlux.lt/eshopdev/roletai-diena-naktis/" <?php if (strpos($uri_link, 'roletai-diena-naktis') !== false){?> style="color:red  !important;"<?php }?>>
					<img class="" style="width:30px" src="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/upload/05.png" alt="icon">
					Roletai diena-naktis
				</a> 
              </li>      
        <li id="menu-item-498" class="mine_rolex menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children " >
        <a class="eshop_anchor padding_right <?php if (strpos($uri_link, 'roletai-plastikiniams-langams') !== false){?> actcive_menu<?php }?>" href="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/"  <?php if (strpos($uri_link, 'roletai-plastikiniams-langams') !== false){?> style="color:red !important; margin-left:-3px;"<?php }?> >
					<img class="" style="width:30px" src="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/upload/02.png" alt="icon">
					Roletai plastikiniams langams
				</a>
              </li>
              
        
  
              
         <li id="menu-item-498" class="mine_rolex menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children" >
        
        <a class="eshop_anchor padding_right <?php if (strpos($uri_link, 'horizontalios-zaliuzes') !== false){?> actcive_menu<?php }?>" href="https://www.solemlux.lt/eshopdev/horizontalios-zaliuzes/" <?php if (strpos($uri_link, 'horizontalios-zaliuzes') !== false){?> style="color:red !important; margin-left:-3px;"<?php }?>>
					<img class="" style="width:30px" src="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/upload/07.png" alt="icon">
					Horizontalios žaliuzės
				</a> 
              </li>        
              
              
            <li id="menu-item-498" class="mine_rolex menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children" >
        
        <a class="eshop_anchor padding_right <?php if (strpos($uri_link, 'tinkleliai-remeliai') !== false){?> actcive_menu<?php }?>" href="https://www.solemlux.lt/eshopdev/tinkleliai-remeliai/" <?php if (strpos($uri_link, 'tinkleliai-remeliai') !== false){?> style="color:red !important; margin-left:-3px;"<?php }?>>
					<img class="" style="width:30px" src="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/upload/Tinkleliai-rėmeliai.png" alt="icon">
					Tinkleliai rėmeliai
				</a> 
              </li>        
              
                       <li id="menu-item-498" class="mine_rolex menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children float_right" >
        
        <a class="eshop_anchor padding_right <?php if (strpos($uri_link, 'tinkleliai-roletai') !== false){?> actcive_menu<?php }?>" href="https://www.solemlux.lt/eshopdev/tinkleliai-roletai/" <?php if (strpos($uri_link, 'tinkleliai-roletai') !== false){?> style="color:red !important; margin-left:-3px;"<?php }?>>
					<img class="" style="width:30px" src="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/upload/Tinkeliai-roletai.png" alt="icon">
					Tinkeliai roletai
				</a> 
              </li>   
             <li id="menu-item-498" class="mine_rolex menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children" >
        
        <a class="eshop_anchor padding_right <?php if (strpos($uri_link, 'tinkleliai-durims') !== false){?> actcive_menu<?php }?>" href="https://www.solemlux.lt/eshopdev/tinkleliai-durims/" <?php if (strpos($uri_link, 'tinkleliai-durims') !== false){?> style="color:red !important; margin-left:-3px;"<?php }?>>
					<img class="" style="width:30px" src="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/upload/Tinkleliai-durims.png" alt="icon">
					Tinkleliai durims
				</a> 
              </li>           
              
            
    
</ul>            
      </div>
          
 
	  </div>
	  </div>
      
  </nav>
 
<div style="clear:both;"></div>

    <link rel="stylesheet" href="style1.css?t=<?php echo time(); ?>">
    <link rel="stylesheet" href="productstyle.css">

   <style>
    body {
        padding-top: 2px;
    }
   form * {
        font-family: nexa-regular;
    }
    tabff, eeee {
        display: none;
    }
    /*.ar-col-cart h4.list-group-item-heading:after {
        border-width: 23px 22px 22px 30px;
    }
	@media (max-width: 440px) {
		.ar-col-cart h4.list-group-item-heading:after {
        border-width: 23px 22px 22px 30px;
    }
	}*/
#step-5 h2
{
	color:4B4542 !important;
	font-size:13px;
}
.top_margin_class
{
	margin-top:100px !important;
}

.desktop_div
{
	display:block;
}

.mobile_div{
	display:none;
}
.middimg{width:100%; text-align:center; padding-top:15px; margin:60px auto 0}

@media(min-width: 300px) and (max-width: 991px){
	.mobile_div{
		display:block;
	}
}

@media(min-width: 300px) and (max-width: 1000px){

.redbgtop
 {
 	border:none !important;
	background:#fff;
 }

 .col-xs-12 p img
{
	width:100% !important;
	height:auto !important;
}

.top_margin_class
{
	margin-top:63px !important;
}





}
@media(min-width: 300px) and (max-width: 991px){
	.desktop_div{
		display:none;
	}
}

  @media(min-width: 992px) and (max-width: 1200px){
.mobile_div
{
	display:none;
}

.top_margin_class
{
	margin-top:114px !important;
}
.float_right
{
	float:none !important;
}
}
body div#window-append img {
    height: 504px!important;
    height: 100%!important;
}
div#window-append2 {
    top: 153px;
    width: 161px;
    height: 113px;
    left: 89px;
}
#window-append {
    line-height: 1.2em;
    overflow: hidden;
    padding: 0;
    margin: 0;
    position: absolute;
    top: 151px;
    width: 161px;
    left: 292px;
    background-size: cover;
    height: 228px;
}
@media all and (min-width: 992px) and (max-width: 1024px){
    #window-append2 {
    left: 16.5% !important;
    box-shadow: none;
    height: 20.1% !important;
    top: 25.7% !important;
    width: 29.9% !important;
}
#window-append {
    top: 25.7% !important;
    left: 54.1% !important;
    width: 29.9% !important;
    box-shadow: none;
    height: 168px !important;
}
}
@media (max-width: 499px) and (min-width: 411px){
    #window-append2 {
    left: 16.4% !important;
    width: 30.1% !important;
    box-shadow: none;
    height: 19.4% !important;
    top: 25.1% !important;
}
#window-append {
    top: 25.2% !important;
    left: 54% !important;
    width: 30.5% !important;
    box-shadow: none;
    height: 38% !important;
}
}
@media (max-width: 700px){
.navbar {/*top: 69px !important;*/}
.full{width:100% !important; padding:0 15px;}

}
@media (max-width: 767px){
    .navbar {
        /*top: 199px !important;*/
    }
}
@media (max-width: 480px){
    .navbar {top: 0px !important; position: relative !important;}
}
@media (max-width: 2100px){
	.margintop {
		margin:25px 0 0 0; 
	}
}
@media (max-width: 992px){
	.margintop {
		margin:0; 
	}
	.shoppingcart {
		margin: 13px 0 0 0;
	}
}
@media (max-width: 600px){

}
@media (max-width: 480px){
.middimg{margin:0px auto 0}
.disnone {display: none !important;}

}
/*@media (max-width: 769px){
    .disnone {
        display: none !important;
    }
}*/
</style>
</div>

      <div class="middimg top_margin_class ar-page-top">

           
            <div class="modal-content" style="height: 850px;overflow: scroll;text-align: justify; width: 100%; padding: 5px; height: 100%">
       
        <div class="modal-body" style="padding-bottom: 50px">
            <b>Prekių pirkimo – pardavimo SOLEMLUX parduotuvėje internete taisyklės</b>
            <br><b>1. Bendrosios nuostatos</b>
            <br>1.1. Šios prekių pirkimo – pardavimo taisyklės (toliau – „Taisyklės“) nustato naudojimosi SOLEMLUX parduotuve internete www.solemlux.lt (toliau – „SOLEMLUX parduotuvė“) sąlygas. Taisyklės yra taikomos, kai Pirkėjas renkasi, užsako ir perka SOLEMLUX parduotuvėje siūlomas prekes ar bet kaip kitaip naudojasi SOLEMLUX parduotuvės teikiamomis paslaugomis.
            <br>1.2. SOLEMLUX parduotuvė yra mažmeninės prekybos parduotuvė internete, orientuota į vartotojus, perkančius prekes asmeniniams, šeimos, namų ūkio poreikiams, nesusijusiems su verslu ar profesija, tenkinti.
            <br>1.3. SOLEMLUX parduotuvėje prekių prekybą organizuoja, vykdo ir su ja susijusias paslaugas Pirkėjui teikia UAB „SOLEMLUX“, buveinės adresas Smiltynų kel. 3, Smiltynų I k., Kauno r., juridinio asmens kodas 301843597, PVM mokėtojo kodas LT100004937718.
            <br>1.4. Pirkėju šiose Taisyklėse yra bet kuris asmuo, perkantis SOLEMLUX parduotuvėje ar besinaudojantis kitomis SOLEMLUX parduotuvės paslaugomis (toliau – „Pirkėjas“). Naudotis SOLEMLUX parduotuve ir joje pirkti turi teisę (a) veiksnūs fiziniai asmenys, t. y. asmenys, sulaukę pilnametystės, kurių veiksnumas nėra apribotas teismo tvarka, ir (b) juridiniai asmenys, veikiantys per įgaliotus atstovus, užsiregistravę SOLEMLUX parduotuvėje Taisyklėse nustatyta tvarka. 
            <br>1.5. Užsiregistruodamas arba pateikdamas užsakymą Pirkėjas besąlygiškai patvirtina, jog jis turi teisę pirkti SOLEMLUX parduotuvėje.
            <br>1.6. Kartu su Pirkėjo pateiktu prekių užsakymu šios Taisyklės tampa tarp Pirkėjo ir SOLEMLUX sudaryta sutartimi ir yra abiem šalims privalomas teisinis dokumentas. Sutartis laikoma sudaryta, kai Pirkėjas suformuoja ir pateikia SOLEMLUX parduotuvėje prekių užsakymą, Taisyklėse nustatyta tvarka ir terminais atlieka apmokėjimą (kai Pirkėjas yra pasirinkęs, kad už prekes atsiskaitys užsakymo metu) ir Pirkėjo nurodytu elektroniniu paštu SOLEMLUX išsiunčia patvirtinimą, kad Pirkėjo užsakymas yra priimtas. Jei pirkėjas SOLEMLUX parduotuvėje pasirenka atsiskaitymą už prekes jų pristatymo metu, sutartis laikoma sudaryta, kai Pirkėjas suformuoja ir pateikia SOLEMLUX parduotuvėje prekių užsakymą ir Pirkėjo nurodytu elektroniniu paštu SOLEMLUX išsiunčia patvirtinimą, kad Pirkėjo užsakymas yra priimtas. Sutartis tarp Pirkėjo ir SOLEMLUX dėl tokių prekių pirkimo – pardavimo laikoma sudaryta SOLEMLUX buveinės adresu nuo to momento, kai SOLEMLUX (jo atstovas) atitinkamų prekių pristatymo metu įsitikina (susipažinęs su Pirkėjo (ar kito prekes Pirkėjo adresu atsiimančio pilnamečio asmens) asmens dokumentais ir įvertinęs kitas aplinkybes), kad Pirkėjas (t. y. atitinkamą prekę užsakęs ir jos kainą sumokėjęs (arba pasirinkęs jos sumokėjimą pristatymo metu) asmuo ar juridinio asmens įgaliotas asmuo) ar kitas prekes Pirkėjo adresu atsiimantis pilnametis asmuo turi teisę įsigyti užsakytas prekes. SOLEMLUX nustačius, kad Pirkėjas ar kitas prekes Pirkėjo adresu atsiimantis asmuo neturi teisės įsigyti užsakytų prekių, sutartis laikoma nesudaryta, šios prekės Pirkėjui (ar kitam prekes Pirkėjo adresu atsiimančiam asmeniui) nėra perduodamos, o už šias prekes sumokėti pinigai (jei už prekes buvo sumokėta jų užsakymo metu) grąžinami Pirkėjui per 20 (dvidešimt) darbo dienų nuo planuotos pristatymo dienos. Tokiu atveju SOLEMLUX turi teisę iš Pirkėjui grąžinamos už prekes sumokėtos sumos išskaičiuoti prekių pristatymo išlaidas. Jei Pirkėjas už prekių pristatymą nebuvo sumokėjęs iš anksto, o dėl pirmiau nurodytų priežasčių prekės negali būti perduotos Pirkėjui, Pirkėjas privalo atlyginti SOLEMLUX prekių pristatymo išlaidas.
            <br>1.7. Pirkėjui nesuteikiama galimybė pateikti prekių užsakymo SOLEMLUX parduotuvėje, jeigu jis nėra susipažinęs su Taisyklėmis ir (ar) su jomis nesutinka. Tais atvejais, kai Pirkėjas nesutinka su Taisyklėmis arba tam tikra jų dalimi, jis neturėtų užsakyti prekių SOLEMLUX parduotuvėje. Pirkėjui užsisakius prekių SOLEMLUX parduotuvėje laikoma, jog Pirkėjas susipažino ir besąlygiškai sutiko su Taisyklėmis.
            <br>1.8. SOLEMLUX pasilieka teisę pakeisti, taisyti ar papildyti Taisykles. Pirkėjui apsiperkant SOLEMLUX parduotuvėje taikomos Taisyklės, galiojančios užsakymo pateikimo momentu, todėl Pirkėjui rekomenduojama su Taisyklėmis susipažinti kiekvieno apsipirkimo metu.
            <br>1.9. SOLEMLUX neprisiima jokios rizikos ar atsakomybės ir yra nuo jos besąlygiškai atleidžiamas, jei Pirkėjas iš dalies ar visiškai nesusipažino su Taisyklėmis, nors jam tokia galimybė buvo suteikta.
            <br>1.10. SOLEMLUX, atsižvelgdamas į SOLEMLUX parduotuvės sistemos techninius pajėgumus, turi teisę riboti registruotų Pirkėjų skaičių.
            <br>1.11. SOLEMLUX turi teisę be įspėjimo apriboti Pirkėjo naudojimąsi SOLEMLUX parduotuvės paslaugomis arba panaikinti Pirkėjo registraciją, jeigu Pirkėjas SOLEMLUX parduotuve naudojasi pažeisdamas šias Taisykles, bando pakenkti SOLEMLUX parduotuvės ar SOLEMLUX vykdomų užsakymų, darbo stabilumui ir (arba) saugumui.
            <br>1.12. Atsižvelgdamas į Taisyklių 1.2 punktą ir siekdamas pirmiausia patenkinti mažmeninės prekybos vartotojų poreikius, SOLEMLUX pasilieka teisę riboti didmeninio pirkimo požymių turinčius pirkimus, t. y. SOLEMLUX turi teisę atsisakyti priimti ir (ar) vykdyti Pirkėjo užsakymą (-us), kai Pirkėjas užsako mažmeninėje prekyboje neįprastai didelius prekių kiekius (neatsižvelgiant į tai, ar prekės užsakomos vienu užsakymu, ar keletu per sąlyginai trumpą laiką pateikiamų užsakymų) ir (ar) kai Pirkėjo užsakymas (-ai) turi kitų didmeninio pirkimo požymių.
            <br>1.13. SOLEMLUX gali laikinai arba iš viso nutraukti SOLEMLUX parduotuvės veiklą, apie tai iš anksto nepranešęs Pirkėjui. Įvykus nenugalimos jėgos (force majeure) aplinkybėms, SOLEMLUX turi teisę sustabdyti sutarties įvykdymą iki nenugalimos jėgos (force majeure) aplinkybių išnykimo, pranešant Pirkėjui apie užsakymo vykdymo sustabdymą. Jeigu pirkėjui nebeaktualus vėlesnis sutarties įvykdymas, tuomet pirkėjas turi teisę atsisakyti sutarties apie tai pranešdamas SOLEMLUX. SOLEMLUX sustabdžius veiklą, bet esant galimybei įvykdyti patvirtintus užsakymus, visos teisės ir pareigos numatytos šiose taisyklėse ar taikomuose teisės aktuose, susijusios su jau įvykdytais arba vykdomais užsakymais, išlieka galioti.
            <br><b>2. Registracija ir asmens duomenų tvarkymas</b>
            <br>2.1. Pirkėjas, norėdamas naudotis SOLEMLUX parduotuve ir pirkti joje siūlomas prekes, privalo užsiregistruoti SOLEMLUX parduotuvės sistemoje, užpildydamas registracijos anketą. Registracijos anketoje privalu pateikti šiuos Pirkėjo asmeninius duomenis: vardą, pavardę, elektroninį paštą, adresą, kuriuo bus pristatomos prekės, telefono numerį, kitus prekių pristatymui būtinus duomenis. Juridinio asmens įgaliotas atstovas vietoje vardo ir pavardės pateikia juridinio asmens pavadinimą.
            <br>2.2. Pirkėjas yra atsakingas, kad registracijos anketoje pateikti duomenys būtų tikslūs, teisingi ir išsamūs. Jeigu pasikeičia Pirkėjo registracijos formoje pateikti duomenys, jis privalo nedelsdamas juos atnaujinti. SOLEMLUX jokiu atveju nebus atsakingas už žalą, atsiradusią Pirkėjui ir (ar) tretiesiems asmenims dėl to, jog Pirkėjas nurodė neteisingus ir (ar) neišsamius asmens duomenis arba nepakeitė ir nepapildė duomenų jiems pasikeitus.
            <br>2.3. Pirkėjas turi teisę bet kuriuo momentu nevaržomai registracijos duomenis keisti, papildyti ar panaikinti savo registraciją. Panaikinęs registraciją, Pirkėjas netenka galimybės naudotis SOLEMLUX parduotuve ir joje pirkti. Pirkėjas vėl įgyja galimybę pirkti tik iš naujo užsiregistravęs SOLEMLUX parduotuvėje. Atkreipiame dėmesį, kad adreso ir (arba) telefono numerio keitimas svarbus atsiskaitymų debetinėmis ar kreditinėmis kortelėmis atveju (žr. 3.2.2 punktą). 
            <br>2.4. Registruodamasis Pirkėjas susikuria individualius prisijungimo duomenis (vartotojo vardą ir slaptažodį) ir įsipareigoja juos saugoti paslaptyje bei neatskleisti jokiems tretiesiems asmenims. Siekiant sumažinti neteisėto prisijungimo prie SOLEMLUX parduotuvės Pirkėjo vardu riziką, rekomenduojama susikurti sudėtingą, sunkiai nuspėjamą slaptažodį (rekomenduojama slaptažodį sudaryti iš ne mažiau kaip 8 simbolių, panaudojant didžiąsias ir mažąsias raides, skaičius bei skyrybos ženklus, vengti lengvai nuspėjamų žodžių (Pirkėjo vardo, pavardės ir pan.) ir (arba) skaičių (pvz. gimimo datos) ir pan.) ir keisti jį ne rečiau kaip kas 6 (šešis) mėnesius. Pirkėjas yra atsakingas už jo susikurtų prisijungimo duomenų sudėtingumą bei jų išsaugojimą, o taip pat už bet kuriuos veiksmus (duomenų perdavimą, pateiktus prekių užsakymus, vartotojo komentarus ar kt.), kurie SOLEMLUX parduotuvėje atliekami prisijungus individualiu Pirkėjo vardu ir slaptažodžiu. Jei SOLEMLUX teikiamomis paslaugomis naudojasi trečiasis asmuo, prisijungęs prie parduotuvės internete naudodamasis Pirkėjo prisijungimo duomenimis, SOLEMLUX šį asmenį laiko Pirkėju. Jei Pirkėjas praranda prisijungimo duomenis, jis privalo nedelsiant informuoti apie tai SOLEMLUX paštu, telefonu ar el. laišku arba pasikeisti prisijungimo duomenis prisijungdamas prie SOLEMLUX parduotuvės sistemos skiltyje „Mano duomenys“. SOLEMLUX negali būti ir nebus laikomas atsakingu už žalą, padarytą Pirkėjui, tretiesiems asmenims prisijungus prie SOLEMLUX parduotuvės pasinaudojant Pirkėjo prisijungimo duomenimis. Prisijungimo duomenų saugumas itin svarbus atsiskaitymų debetinėmis ar kreditinėmis kortelėms atveju (žr. 3.2.2 punktą).
            <br>2.5. Pirkėjo asmens duomenys bus tvarkomi pagal Asmens duomenų tvarkymo taisykles, Privatumo politiką bei kitais SOLEMLUX dokumentais. Jei Pirkėjas naudojasi SOLEMLUX parduotuvės paslaugomis, laikoma, kad jis sutinka su Pirkėjo asmens duomenų tvarkymu ir patvirtina, kad visa pateikta informacija ir asmens duomenys yra teisingi ir atitinka tikrovę.
            <br>2.6. Pirkėjo asmens duomenys bus naudojami identifikuojant Pirkėją, nustatant, ar Pirkėjas ir asmuo, kuriam pristatomos prekės, yra pilnametis (Lietuvos Respublikos įstatymų nustatytais atvejais), vykdant prekių pardavimą ir pristatymą, išrašant apskaitos dokumentus, grąžinant permokas ir (ar) pinigus už Pirkėjo grąžintas prekes, administruojant įsiskolinimus, vykdant kitus iš pirkimo-pardavimo sutarties kylančius įsipareigojimus bei užtikrinant Pirkėjui galimybę naudotis kitomis SOLEMLUX parduotuvės paslaugomis.
            <br>2.7. Pirkėjo asmens duomenys bus tvarkomi tiesioginės rinkodaros tikslais tik gavus Pirkėjo sutikimą. Pirkėjo sutikimas išreiškiamas užpildant registracijos anketą ir šiose Taisyklėse nustatyta tvarka anketoje pažymint atitinkamus laukus.
            <br><b>3. Prekių kainos, apmokėjimo tvarka ir terminai</b>
            <br>3.1. Prekių kainos SOLEMLUX parduotuvėje ir suformuotame užsakyme Eurais su PVM. Prekės Pirkėjui parduodamos kainomis, galiojančiomis SOLEMLUX parduotuvėje užsakymo pateikimo momentu.
            <br>3.2. Pirkėjas atsiskaito už prekes vienu iš šių būdų:
            <br>3.2.1. Apmokėjimas naudojantis elektronine bankininkyste ar tarpininkavimo atsiskaitant – tai išankstinis apmokėjimas pasinaudojant Pirkėjo naudojama elektroninės bankininkystės ar tarpininkavimo atsiskaitant sistema. Pirkėjas, norėdamas pasinaudoti šia apmokėjimo forma, turi būti pasirašęs elektroninės bankininkystės ar tarpininkavimo atsiskaitant sutartį su SOLEMLUX parduotuvėje nurodytais bankais bei įmonėmis. Mokant už prekes šiuo būdu, Pirkėjui elektroninės bankininkystės sistemoje sugeneruojamas mokėjimas pagal jo apmokamą užsakymą. Pinigus Pirkėjas perveda į SOLEMLUX sąskaitą. Atsakomybė už Pirkėjo mokėjimo metu duomenų saugumą šiuo atveju tenka atitinkamam bankui ar įmonei, kadangi visos piniginės operacijos vyksta banko ar įmonės elektroninėje atsiskaitymų sistemoje.
            <br>3.2.2. Apmokėjimas užsakymo metu naudojantis mokėjimo kortelėmis – tai išankstinis apmokėjimas pasinaudojant Pirkėjo naudojama MasterCard, VISA ar VISA Electron debetine ar kreditine kortele, kurios yra išduotos Europos Ekonominės Erdvės šalyse; kitose šalyse išduotos mokėjimo kortelės SOLEMLUX parduotuvėje, atsiskaitant šiuo būdu, nėra aptarnaujamos. Mokant už prekes Pirkėjo kreditine ar debetine kortele pirmą kartą, Pirkėjas turi suvesti savo kortelės duomenis. Kitais atsiskaitymo už prekes kreditine ar debetine kortele, kuria Pirkėjas buvo atsiskaitęs SOLEMLUX parduotuvėje, kartais SOLEMLUX parduotuvės sistema pasiūlys atsiskaityti kreditine ar debetine kortele, kuria Pirkėjas bent kartą buvo atsiskaitęs už prekes SOLEMLUX parduotuvėje, nereikalaujant iš naujo suvesti kortelės duomenų. Tokiu atveju pirkimui užbaigti pasinaudojant Pirkėjo kreditine ar debetine kortele, kuria Pirkėjas bent kartą buvo atsiskaitęs už prekes SOLEMLUX parduotuvėje (t. y. bet kuria iš kortelių), pakaks pakartotinai įvesti Pirkėjo prisijungimo prie SOLEMLUX parduotuvės sistemos slaptažodį. Pažymėtina, kad, Pirkėjui pakeitus SOLEMLUX parduotuvės sistemoje (skiltyje „Mano duomenys“) Pirkėjo užregistruotą prekių pristatymo adresą ir (arba) Pirkėjo telefono numerį, siekiant apsaugoti Pirkėjo interesus nuo galimų piktnaudžiavimo atvejų, SOLEMLUX parduotuvės sistema panaikins mokėjimo kortelių, kuriomis jau buvo atlikti atsiskaitymai BARBOROS parduotuvėje, sąrašą ir reikalaus kortelės duomenis suvesti iš naujo, t. y. lyg atsiskaitant atitinkama kortele pirmą kartą. Be to, Pirkėjas, bet kuriuo metu prisijungęs prie SOLEMLUX parduotuvės sistemos (skiltyje „Mano duomenys“), gali ištrinti mokėjimo kortelių, kuriomis jau buvo atlikti atsiskaitymai SOLEMLUX parduotuvėje, sąrašą. Tiek suvesdamas kreditinės ar debetinės kortelės duomenis, tiek ir atsiskaitydamas kreditine ar debetine kortele, Klientas SOLEMLUX parduotuvės sistemoje nepalieka duomenų, kadangi mokėjimo operacijos atlikimui Pirkėjas nukreipiamas į sertifikuoto paslaugos teikėjo saugų serverį. Iš šio serverio SOLEMLUX parduotuvės sistemai yra grąžinama tik dalinė informacija apie mokėjimo kortelės numerį.
            <br>3.2.3. Apmokėjimas grynaisiais pinigais – tai atsiskaitymas už prekes jų pristatymo metu. Pageidautina, kad Pirkėjas, pasirinkęs atsiskaitymą už prekes grynaisiais pinigais prekių pristatymo metu, turėtų tikslią pinigų sumą, tačiau prekes pristatantis kurjeris gali duoti grąžą. Pirkėjas privalo patikrinti ir suskaičiuoti kurjerio duotą grąžą kartu su kurjeriu jos davimo metu. Pirkėjui raštu patvirtinus grynųjų pinigų perdavimo faktą, Pirkėjas vėliau nebegali reikšti pretenzijų dėl grąžos dydžio.
            <br>3.2.4. Apmokėjimas naudojantis mokėjimo kortelėmis – tai atsiskaitymas už prekes jų pristatymo metu pasinaudojant Pirkėjo naudojama debetine ar kreditine kortele.
            <br>3.3. Pirkėjui pasirinkus atsiskaitymą už prekes jų užsakymo metu, Pirkėjas už užsakytas prekes įsipareigoja sumokėti nedelsiant, tačiau ne vėliau kaip per 1 (vieną) valandą nuo užsakymo pateikimo momento. Tik SOLEMLUX iš jo pasirinkto mokėjimų sistemos operatoriaus gavus atitinkamą Pirkėjo mokėjimo už prekes bei jų pristatymą (transportavimą) atlikimo patvirtinimą (atsiskaitant Sutarties 3.2.1 ar 3.2.2 punktuose nustatytu būdu) pradedamas vykdyti užsakymas ir skaičiuojamas prekių pristatymo terminas. Prekių ir jų pristatymo kainos sąskaitai apmokėti yra paskaičiuotos įskaitant PVM mokestį. Pirkėjui pasirinkus atsiskaitymą už prekes jų pristatymo metu, Pirkėjo užsakymas pradedamas vykdyti ir pradedamas skaičiuoti prekių pristatymo terminas nedelsiant, SOLEMLUX apie tai patvirtinant Pirkėjui nurodytu elektroniniu paštu.
            <br>3.4. Pirkėjui pasirinkus atsiskaitymą už prekes jų užsakymo metu, SOLEMLUX turi teisę iš anksto nepranešęs Pirkėjui anuliuoti jo užsakymą, jeigu Pirkėjas nesumoka už prekes per 1 (vieną) valandą nuo užsakymo pateikimo momento.
            <br>3.5. PVM sąskaitą-faktūrą SOLEMLUX išrašo ir Pirkėjui pateikia Pirkėjo Registracijos anketoje nurodytu elektroniniu paštu per 3 (tris) darbo dienas po prekių pristatymo.
            <br>3.6. Pirkėjas, jei jis yra juridinis asmuo, turi teisę atsiskaityti už prekes apmokant pateiktą išankstinę sąskaitą (pasirenkant tokį apmokėjimo būdą). Gavęs išankstinę sąskaitą Pirkėjas mokėjimą atlieka pasinaudodamas išankstinėje sąskaitoje nurodoma internetine nuoroda, kuri nukreipia į elektroninės bankininkystės sistemą. Pirkėjui elektroninės bankininkystės sistemoje sugeneruojamas mokėjimas pagal jo apmokamą užsakymą. Pinigus Pirkėjas perveda į SOLEMLUX sąskaitą išankstinėje sąskaitoje nurodytu terminu. Pirkėjui neapmokėjus išankstinės sąskaitos joje nurodytu terminu arba apmokėjus išankstinę sąskaitą ne pagal sąskaitoje nurodomą internetinę nuorodą, prekių užsakymas nėra vykdomas. Atsakomybė už Pirkėjo mokėjimo metu duomenų saugumą šiuo atveju tenka atitinkamam bankui ar įmonei, kadangi visos piniginės operacijos vyksta banko elektroninės bankininkystės tarpininkavimo atsiskaitant sistemoje.
            <br><b>4. Prekių komplektavimas ir pristatymas</b>
            <br>4.1. SOLEMLUX parduotuvės prekyba vykdoma ir prekės pristatomos visoje Lietuvoje. Už prekių pristatymo paslaugą taikomas mokestis, nurodytas SOLEMLUX parduotuvės puslapyje „Prekių Pristatymas“ ir taikomas prekių užsakymo pateikimo momentu. Prekių pristatymo mokestis gali būti tiek fiksuotas, tiek priklausantis nuo Pirkėjo užsakytų prekių vertės, svorio, dydžio ir (arba) pristatymo termino.
            <br>4.2. SOLEMLUX turi teisę vienašališkai savo nuožiūra nustatyti minimalią pirkinių krepšelio sumą, t. y. minimalią sumą, už kurią Pirkėjas turėtų išsirinkti ir užsisakyti prekių SOLEMLUX parduotuvėje, norėdamas jas įsigyti. Minimali pirkinių krepšelio suma nurodoma SOLEMLUX parduotuvės skiltyje „Prekių pristatymas“. Į minimalią pirkinių krepšelio sumą nėra įskaitomas prekių pristatymo mokestis.
            <br>4.3. SOLEMLUX dės visas pastangas, kad Pirkėjo užsakymas būtų visa apimtimi įvykdytas, tačiau negali suteikti ir neteikia dėl to jokių garantijų. Jei užsakymo komplektavimo vietoje nėra užsakytos prekės likučio ar pakankamo jos kiekio, SOLEMLUX pasilieka teisę nepristatyti prekės, pristatyti mažesnį prekės kiekį arba parinkti Pirkėjo užsakytai prekei analogišką ar kiek įmanoma savo savybėmis panašesnę prekę (toliau – „Panaši prekė“). Apie pageidavimą arba nepageidavimą, kad jam būtų parenkama Panaši prekė, Pirkėjas gali nurodyti SOLEMLUX parduotuvės sistemoje.
            <br>4.4. Jeigu SOLEMLUX parinktos Panašios prekės kaina yra mažesnė, nei Pirkėjas yra sumokėjęs, sumokėtos ir faktinės kainos skirtumas sumokamas į Pirkėjo sąskaitą ne vėliau kaip per 20 (dvidešimt) darbo dienų nuo prekių pristatymo. Jeigu Panašios prekės kaina yra didesnė, SOLEMLUX patvirtina, kad Pirkėjui nebereikės papildomai primokėti. Kai Pirkėjas yra pasirinkęs atsiskaitymą už prekes jų pristatymo metu, Pirkėjas moka faktinę Panašios prekės kainą, nebent ši būtų didesnė už užsakyme nurodytos prekės kainą – tokiu atveju Pirkėjas moka užsakyme nurodytą prekės kainą.
            <br>4.5. Jeigu Pirkėjo netenkina SOLEMLUX parinkta Panaši prekė, jis gali šią prekę grąžinti prekes pristačiusiam SOLEMLUX atstovui siuntos pristatymo metu. Grąžinimo faktas pažymimas sąskaitoje-faktūroje, važtaraštyje ar kitame siuntos perdavimo – priėmimo ar prekių grąžinimo dokumente (dokumentu gali būti laikomi ir elektroniniai įrenginiai, pavyzdžiui CAT S40).
            <br>4.6. Pirkėjui priėmus SOLEMLUX pristatytas Panašias prekes, vėliau jos gali būti grąžintos (išskyrus prekes, kurios pagal teisės aktus nekeičiamos ir negrąžinamos) tik šių Taisyklių skyriuje „Sutarties atsisakymas. Prekių keitimas ir grąžinimas“ nustatytomis sąlygomis ir tvarka.
            <br>4.7. Jei Pirkėjas už prekes yra apmokėjęs jų užsakymo metu, Pinigai už Pirkėjo apmokėtas, tačiau SOLEMLUX nepristatytas prekes, taip pat už siuntos pristatymo metu Pirkėjo grąžintas Panašias prekes sumokami į Pirkėjo sąskaitą ne vėliau kaip per 20 (dvidešimt) darbo dienų nuo siuntos pristatymo.
            <br>4.8. Kai Pirkėjas yra pasirinkęs apmokėjimą už prekes jų pristatymo metu, Pirkėjas privalo apmokėti tik už SOLEMLUX pristatytas prekes, įskaitant ir tas, kurias Pirkėjas dėl bet kokios priežasties grąžina jų pristatymo metu. Prekių pristatymo momentu kurjeris techniškai neturi galimybių pakoreguoti sąskaitą išbraukiant prekes, kurių buvo atsisakyta pristatymo momentu. Pirkėjo už jo pristatymo metu grąžintas prekes sumokėti pinigai grąžinami į Pirkėjo sąskaitą ne vėliau kaip per 20 (dvidešimt) darbo dienų nuo siuntos pristatymo.
            <br>4.9. Pirkėjo užsakytos prekės pristatomos SOLEMLUX parduotuvės sistemoje Pirkėjo užregistruotu adresu. Pirkėjas užsakymo suformavimo metu pasirinkto laiko lango ribose įsipareigoja prekes priimti pats.
            <br>4.10. Tuo atveju, kai Pirkėjo SOLEMLUX parduotuvės sistemoje nurodytu pristatymo adresu Pirkėjas ar gavėjas nerandamas, SOLEMLUX turi teisę prekes išduoti bet kuriam kitam nurodytu adresu esančiam pilnamečiui asmeniui, o Pirkėjas neturi teisės reikšti SOLEMLUX bet kokių pretenzijų dėl prekių pristatymo netinkamam subjektui.
            <br>4.11. Jeigu prekės pristatymas yra neįmanomas dėl Pirkėjo kaltės arba dėl nuo Pirkėjo priklausančių aplinkybių (Pirkėjas registruodamasis SOLEMLUX parduotuvės sistemoje nurodė neteisingą adresą, nurodytu adresu Pirkėjas ar gavėjas nerandamas, prekes priimantis asmuo yra nepilnametis, pateikė negaliojantį asmens dokumentą ar atsisakė pateikti asmens dokumentą (kai SOLEMLUX turi įsitikinti prekes priimančio asmens amžiumi pagal taikytinus teisės aktus ar šias Taisykles), Pirkėjas neturi pakankamo grynųjų pinigų kiekio, nurodyto užsakyme, Pirkėjas negali atsiskaityti mokėjimo kortele ne dėl SOLEMLUX kaltės ar kt.), pakartotinai prekės nėra siunčiamos (išskyrus atvejus, kai Pirkėjas papildomai sumoka už pakartotinį prekės pristatymą), o iš anksto už prekes sumokėti pinigai grąžinami išskaičiavus prekių pristatymo mokestį. Tuo atveju, jei užsakymo pateikimo metu Pirkėjui buvo taikyta pristatymo mokesčio nuolaida, tačiau prekių pristatymas nėra įmanomas dėl Pirkėjo kaltės arba dėl nuo Pirkėjo priklausančių aplinkybių, SOLEMLUX pasilieka teisę išskaičiuoti iš Pirkėjui grąžintinos pinigų sumos visą prekių pristatymo mokestį (galiojusį prekių užsakymo pateikimo momentu), neatsižvelgiant į užsakymo pateikimo metu taikytas nuolaidas. Jei Pirkėjas buvo pasirinkęs atsiskaitymą už prekes jų pristatymo metu, Pirkėjas privalo padengti SOLEMLUX patirtas pristatymo išlaidas, kurių dydis nurodytas Taisyklių 1.6 punkte.
            <br>4.12. SOLEMLUX pristato prekes Pirkėjui jo užsakymo suformavimo metu pasirinkto laiko lango ribose. Pirkėjas sutinka, jog išimtiniais atvejais prekių pristatymas gali vėluoti dėl nenumatytų ir nuo SOLEMLUX nepriklausančių aplinkybių. Tokiu atveju SOLEMLUX įsipareigoja nedelsiant susisiekti su Pirkėju ir suderinti prekių pristatymo klausimus.
            <br>4.13. Visais atvejais SOLEMLUX atleidžiamas nuo atsakomybės už prekių pristatymo terminų pažeidimą, jeigu prekės Pirkėjui nėra pristatomos arba pristatomos ne laiku dėl Pirkėjo kaltės arba dėl nuo Pirkėjo priklausančių aplinkybių.
            <br>4.14. Prekių pristatymo metu Pirkėjui pageidaujant, vairuotojas privalo suteikti galimybę kartu su SOLEMLUX arba jo įgaliotu atstovu patikrinti siuntos būklę, pristatytų prekių komplektiškumą (asortimentą). Pirkėjui nepatikrinus siuntos būklės, pristatytų prekių komplektiškumo ir (ar) šiame punkte nustatyta tvarka neužfiksavus duomenų apie siuntos pažeidimus, siunta yra laikoma pristatyta tinkama ir nepažeista.
            <br>4.15. Prekės po siuntos patikrinimo Pirkėjui perduodamos tik tada, kai Pirkėjas pasirašo važtaraštyje, prekių lydraštyje ar kitame siuntos perdavimo – priėmimo dokumente (dokumentu gali būti laikomi ir elektroniniai įrenginiai, pavyzdžiui CAT S40). Jei Pirkėjas dėl fizinio trūkumo, ligos ar kitokių priežasčių negali pats pasirašyti elektroniniuose ar kituose dokumentuose, jo pavedimu už jį pasirašo kitas asmuo arba SOLEMLUX (ar jo įgaliotas asmuo), Pirkėjui patvirtinus pasirašymo galimybę. Pirkėjui nepasirašius prekių važtaraštyje, prekių lydraštyje ar kitame siuntos perdavimo – priėmimo dokumente (įskaitant ir elektroniniame dokumente), prekės Pirkėjui neperduodamos ir pakartotinai prekės nėra siunčiamos (išskyrus atvejus, kai Pirkėjas papildomai sumoka už pakartotinį prekės pristatymą), o iš anksto už prekes sumokėti pinigai grąžinami išskaičiavus prekių pristatymo mokestį. Tuo atveju, jei užsakymo pateikimo metu Pirkėjui buvo taikyta pristatymo mokesčio nuolaida, SOLEMLUX pasilieka teisę išskaičiuoti iš Pirkėjui grąžintinos pinigų sumos visą prekių pristatymo mokestį (galiojusį prekių užsakymo pateikimo momentu), neatsižvelgiant į užsakymo pateikimo metu taikytas nuolaidas. Jei Pirkėjas buvo pasirinkęs atsiskaitymą už prekes jų pristatymo metu, Pirkėjas privalo padengti SOLEMLUX patirtas pristatymo išlaidas, kurių dydis nurodytas Taisyklių 1.6. punkte.
            <br>4.16. Tais atvejais, kai prekių priėmimo metu Pirkėjas pastebi, jog siuntoje nėra tinkamo prekių kiekio arba pateiktos prekės neatitinka jo užsakytų prekių ir tai nėra nurodyta sąskaitoje-faktūroje, važtaraštyje, prekių lydraštyje ar kitame siuntos perdavimo – priėmimo dokumente, Pirkėjas privalo nedelsiant (prekių pristatymo metu) informuoti apie tai SOLEMLUX. Kai Pirkėjas nustato, kad pristatytos prekės yra netinkamos kokybės, jis nekokybiškų prekių nepriima ir turi jas grąžinti kurjeriui, o prekių grąžinimo faktą bei priežastį pažymėti sąskaitoje-faktūroje, važtaraštyje ar kitame siuntos perdavimo – priėmimo ar prekių grąžinimo dokumente.
            <br><b>5. Prekių kokybės garantija ir tinkamumo naudoti terminas</b>
            <br>5.1. Visų SOLEMLUX parduotuvėje internete parduodamų prekių savybės bendrai nurodomos prie kiekvienos prekės esančiame prekės aprašyme. 
            <br>5.2. SOLEMLUX neatsako už tai, kad SOLEMLUX parduotuvėje internete esančios prekės savo spalva, forma ar kitais parametrais gali neatitikti realaus prekių dydžio, formų ir spalvos dėl Pirkėjo naudojamo monitoriaus ypatybių ar kitų techninių priežasčių, taip pat atsižvelgiant į protingai galimus išvaizdos neatitikimus. Jeigu prekės spalvos, dydžio ar formos neatitikimas sąlygotas dėl SOLEMLUX ar su juo susijusių trečiųjų asmenų veiksmų, tuomet SOLEMLUX atsako už prekės galimus išvaizdos neatitikimus.
            <br>5.3. SOLEMLUX patvirtina, kad yra atsakingas už SOLEMLUX internetinėje parduotuvėje užsakytų prekių pardavimą ir įsigytų prekių tinkamą pristatymą, prekių kokybę, grąžinimo sąlygų tinkamą įvykdymą bei kitų teisės aktuose numatytų pardavėjo teisių ir pareigų įgyvendinimą.
            <br>5.4. Tuo atveju, kai Pardavėjas tam tikroms prekių rūšims daiktų kokybės garantijos nesuteikia, galioja garantija, numatyta atitinkamų teisės aktų.
            <br><b>6. Sutarties atsisakymas. Prekių keitimas ir grąžinimas</b>
            <br>6.1. Pirkėjas turi teisę atsisakyti SOLEMLUX parduotuvėje sudarytos prekių pirkimo – pardavimo sutarties, pranešdamas apie tai SOLEMLUX raštu ne vėliau kaip per 14 (keturiolika) kalendorinių dienų nuo prekės pristatymo dienos. Laisvos formos pranešimą apie sutarties atsisakymą ir kitą SOLEMLUX nurodytą informaciją Pirkėjas privalo pateikti SOLEMLUX el. paštu: pagalba@SOLEMLUX.lt.
            <br>6.2. Pateikęs raštišką pranešimą apie sutarties atsisakymą ir kitą SOLEMLUX nurodytą informaciją, Pirkėjas privalo ne vėliau kaip per 15 (penkiolika) kalendorinių dienų grąžinti prekę (jeigu ji buvo pristatyta) šių Taisyklių 6.6 punkte nustatyta prekių keitimo ir grąžinimo tvarka.
            <br>6.3. Taisyklių 6.1 punkte numatyta teise gali pasinaudoti tik Pirkėjas, kuris pagal LR Vartotojų teisių apsaugos įstatymo nuostatas pripažintinas vartotoju, t. y. fizinis asmuo, su savo verslu, prekyba, amatu ar profesija nesusijusiais tikslais (vartojimo tikslais) siekiantis sudaryti ar sudarantis sutartis.
            <br>6.4. Primename, kad remiantis LR Civilinio kodekso bei 2001 m. birželio 11 d. Lietuvos Respublikos Vyriausybės nutarimu Nr. 697 patvirtintų „Mažmeninės prekybos taisyklių“  nuostatomis nekeičiamos ir negrąžinamos šios kokybiškos prekės:
            <br>6.4.1. pagal specialius vartotojo nurodymus pagamintos prekės, kurios nėra iš anksto pagamintos ir kurios gaminamos atsižvelgiant į vartotojo asmeninį pasirinkimą ar nurodymą, arba dėl prekių, kurios yra aiškiai pritaikytos vartotojo asmeninėms reikmėms;
            <br>6.4.2. supakuotos prekės, kurios buvo išpakuotos po pristatymo ir kurios yra netinkamos grąžinti dėl sveikatos apsaugos ar higienos priežasčių.
            <br>6.5. Prekės keičiamos ar grąžinamos vadovaujantis 2001 m. birželio 11 d. Lietuvos Respublikos Vyriausybės nutarimu Nr. 697 patvirtintomis Mažmeninės prekybos taisyklėmis, Lietuvos Respublikos civiliniu kodeksu ir kitais galiojančiais Lietuvos Respublikos teisės aktais. 
            <br>6.6. Nekokybiškos prekės keičiamos ar grąžinamos pirkėjui jas pristačius į SOLEMLUX parduotuvę iš anksto suderinus prekių pristatymo laiką ir adresą. Dėl prekių grąžinimo prašome kreiptis el. paštu: el. paštu info@solemlux.lt ar telefonu 8 600 00 400.
            <br>Pirkėjui pageidaujant grąžinti nekokybiškas prekes jų pristatymo metu, prekės grąžinamos jas pristačiusiam SOLEMLUX atstovui.
            <br>6.7. Grąžinant ar keičiant SOLEMLUX parduotuvėje įsigytas prekes, SOLEMLUX turi teisę reikalauti užpildyti SOLEMLUX pateiktą prekių grąžinimo ar keitimo formą.
            <br>6.8. Grąžinamos ar keičiamos kokybiškos prekės privalo būti nesugadintos, nepraradusios prekinės išvaizdos (nenuimtos ir nepažeistos etiketės, nenuplėštos apsauginės plėvelės ir kt.), vartojamųjų savybių ir negali būti naudotos. Prekė turi būti grąžinama originalioje pakuotėje, tos pačios komplektacijos, kokios buvo Pirkėjo gauta, būtinai pateikiant prekės įsigijimo dokumentą, garantinę kortelę (jei ji buvo išduota), naudojimo instrukcijas ir kitus prekės priklausinius. Jeigu prekė nėra pilnai sukomplektuota, yra sugadinta, netvarkinga arba nėra tinkamai supakuota, SOLEMLUX turi teisę nepriimti prekės, jos nekeisti ir negrąžinti už prekę Pirkėjo sumokėtų pinigų.
            <br>6.9. Už Pirkėjo priimtas, bet vėliau atsisakytas prekes sumokėti pinigai sumokami į Pirkėjo sąskaitą ne vėliau kaip per 20 (dvidešimt) darbo dienų nuo Pirkėjo pranešimo apie Sutarties atsisakymą gavimo dienos, nebent SOLEMLUX ir Pirkėjas susitaria kitaip.
            <br>6.10. Grąžinant ar keičiant kokybiškas ir Pirkėjo užsakymą atitinkančias prekes, Pirkėjui negrąžinamas jo sumokėtas prekių pristatymo mokestis.
            <br><b>7. Apsikeitimas informacija</b>
            <br>7.1. SOLEMLUX visus pranešimus siunčia ir kitaip kontaktuoja Pirkėjo registracijos formoje pateiktu elektroninio pašto adresu ar telefonu.
            <br>7.2. Pirkėjas visus pranešimus ir klausimus siunčia ir kitaip kontaktuoja el. paštu info@solemlux.lt ar telefonu 8 600 00 400.
            <br><b>8. Prekių atsiėmimas SOLEMLUX parduotuvėse</b>
            <br>8.1. Pirkėjo užsakytos prekės pristatomos į SOLEMLUX parduotuves. Pirkėjas užsakymo suformavimo metu pasirinkto laiko lango ribose įsipareigoja prekes atsiimti pats.
            <br>8.2. Pirkėjas atsiskaito už prekes išankstiniu apmokėjimu naudojantis elektroninės bankininkyste, tarpininkavimo atsiskaitant ar mokėjimo kortele.
            <br>8.3.  Kai pristatymas vykdomas į SOLEMLUX parduotuves užsakymas yra saugomas pagal nustatytą užsakymo pateikimo – atsiėmimo grafiką. Užsakytas prekes klientas  galės atsiimti atitinkamos SOLEMLUX parduotuvės darbo valandomis: 
            <br>8.4. Klientai apie prekių pristatymą į SOLEMLUX parduotuves bus informuojami išsiunčiant SMS žinutę bei el. laišką. 
            <br>8.5. Prekių kokybei, garantijai ir prekių gražinimui taikomos bendrosios Pirkimo – Pardavimo taisyklių sąlygos. 
            <br><b>9. Baigiamosios nuostatos</b>
            <br>9.1. Šios Taisyklės sudarytos vadovaujantis Lietuvos Respublikos teisės aktais.
            <br>9.2. Šių Taisyklių pagrindu kylantiems santykiams taikoma Lietuvos Respublikos teisė.
            <br>9.3. Atsiradus žalai, kaltoji šalis atlygina kitai šaliai tiesioginius nuostolius Lietuvos Respublikos įstatymų nustatyta tvarka ir pagrindais.
            <br>9.4. Visi nesutarimai, kilę dėl šių Taisyklių vykdymo, sprendžiami derybų būdu. Nepavykus susitarti, ginčai sprendžiami Lietuvos Respublikos įstatymų nustatyta tvarka.
            <br>9.5. Kiekvienas vartotojas turi galimybę spręsti su SOLEMLUX iškilusius ginčus ir elektroniniu būdu, nesikreipdamas į teismą. Pirmiausia vartotojas raštu turi kreiptis į SOLEMLUX bei per 14 dienų nuo pretenzijos gavimo, SOLEMLUX neatsakius į vartotojo pretenziją, arba nepatenkinus vartotojo pretenzijos, vartotojas gali kreiptis į ne teismo tvarka vartojimo ginčus nagrinėjantį subjektą, t.y. Valstybinę vartotojų teisių apsaugos tarnybą (Vilniaus g.25, 01402 Vilnius, el. p. tarnyba@vvtat.lt, tel. 852626751, interneto svetainė www.vvtat.lt).
        </div>
        <div class="modal-footer" style="position: fixed; bottom: 5px; right: 0px; border: 0px; width: 100%; text-align: center;">
            <button type="button" class="btn btn-primary" onClick="agreeTermsModal()" style="background: #00a1c4 !important;">Sutinku su sąlygomis, tęsti pirkimą</button>
        </div>
    </div>
	  </div>
<script>
    function openTermsModal() {
        $("#termsConditionsModal").show();
    }
    function closeTermsModal() {
        $("#termsConditionsModal").hide();
    }
    function closeModal() {
        $("#termsAgreement").prop("checked", false);
        $("#btn_submit_order").attr("disabled", "true");
        $("#termsConditionsModal").hide();
    }
    function agreeTermsModal() {
        $("#termsAgreement").prop("checked", true);
        $("#btn_submit_order").prop("disabled", false);
        $("#termsConditionsModal").hide();
    }
</script>
      <style>

		  .i4ewOd-pzNkMb-haAclf {  

		  display: none !important;}

		  .fb-page,

.fb-page span,

.fb-page span iframe[style] {

    max-width: 100% !important;

}

.col-md-12.footercon {

    padding: 0 0;

}

.topfooter label {

    display: inline-block;

    width: 100%;

    margin-bottom: 5px;

    font-weight: bold;

    max-width: 329px;

}
/* Thick red border */
hr.new4 {
    border: 1px solid red;
    padding: 0px;
    margin-bottom: 0px;


}

#window-append {
    padding: 0;
    margin: 0;
    height: 68%;
    position: absolute;
    top: 79px;
    width: 77.1%;   
    left: 54px;
    border-radius: 0px;
    background-size: 118px 118px !important;
}

@media only screen and (max-width: 320px) {
    #window-append {
        left: 25px !important;
        top: 37px;
        width: 78px;
        height: 75px;
    }

}

@media only screen and (min-width: 320px) and (max-width: 480px) {
  #window-append {
      padding: 0;
      margin: 0;
      height: 73.5%;
      position: absolute;
      top: 43px;
      width: 78%;
      left: 28px;
      border-left: 1px solid gray;
      border-right: 1px solid gray;
      border-top: 1px solid gray;
    }
}
@media only screen and (min-width: 480px) and (max-width: 599px) {
    #window-append {
        padding: 0 ;
        margin: 0;
        height: 75% !important;
        position: absolute;
        top: 59px !important;
        width: 76% !important;
        left: 42px !important;
    }   
}
@media only screen and (min-width: 600px) and (max-width: 759px) {
    #window-append {
    padding: 0;
    margin: 0;
  top: 11% !important;
left: 10.1% !important;
width: 76.9% !important;
box-shadow: none;
height: 64.1% !important;
    }
}
@media only screen and (min-width: 760px) and (max-width: 800px) {
    #window-append {
        padding: 0;
        margin: 0;
  top: 11% !important;
left: 10.1% !important;
width: 76.9% !important;
box-shadow: none;
height: 64.1% !important;
    }
}


@media only screen and (min-width: 800px) and (max-width: 1024px) {
    #window-append {
    top: 62px;
    width: 77.5%;
    left: 44px;
    height: 74%;
}

@media only screen and (width: 750px) {
    #window-append {
  top: 11% !important;
left: 10.1% !important;
width: 76.9% !important;
box-shadow: none;
height: 64.1% !important;
    }
}


}
@media(min-width: 1025px) and (max-width: 1199px){
    #window-append {
 top: 64px !important;
left: 43px !important;
box-shadow: none;
height: 67.1%;
    }
    .colorFabricbox label span {
        width: 93px !important;
        height: 93px !important;
    }
}
@media(min-width: 992px) and (max-width: 1024px){
    #window-append {
      
  top: 64px;
width: 77.1%;
left: 44px;
height: 67.1%;
box-shadow: none;
    }
    .colorFabricbox label span {
        height: 90px !important;
    }
}
@media(min-width: 769px) and (max-width: 991px){
    #window-append {
top: 12% !important;
left: 10.1% !important;
width: 76.9% !important;
box-shadow: none;
height: 67.1% !important;
    }
}
@media(min-width: 760px) and (max-width: 768px){
    #window-append {
  top: 11% !important;
left: 10.1% !important;
width: 76.9% !important;
box-shadow: none;
height: 64.1% !important;
    }
}
@media(min-width: 700px) and (max-width: 759px){
    #window-append {
  top: 11% !important;
left: 10.1% !important;
width: 76.9% !important;
box-shadow: none;
height: 64.1% !important;
    }
}
@media(max-width: 699px){
    #window-append {
        top: 12.0% !important;
        left: 9.9% !important;
        box-shadow: none;
        height: 72.3% !important;
        width: 77.3% !important;
    }
}
@media(max-width: 500px){
    #window-append {
  top: 11.1% !important;
left: 9.8% !important;
box-shadow: none;
height: 66.5% !important;
width: 77.9% !important;
    }
}
		  </style>

	  <?php include("footer_copyright.php");?>

  	<!-- /footer --> 

</div><!-- .body-wrapper -->
<!--
<div class="img-fix">

  <img src="http://solemlux.lt/wp-content/uploads/abc.png">

</div> -->

<!-- ngg_resource_manager_marker --><script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/www.solemlux.lt\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.4'></script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/plugins/wp-popup-banners/js/jquery.nicescroll.js?ver=1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpb_frontend_js = {"popup_delay_enable":"yes","popup_delay":"5","popup_close_countdown":"10","show_popup_cookie":"2","show_countdown_message":"no","popup_type":"fade","autoclose_enable":"yes"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/plugins/wp-popup-banners/js/frontend_popup.js?ver=1'></script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/plugins/wpcs-wp-custom-search/jscolor.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/themes/roletas/style/js/bootstrap.min.js?ver=24052017'></script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/themes/roletas/style/js/plugins.js?ver=24052017'></script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/themes/roletas/style/js/jquery.themepunch.tools.min.js?ver=24052017'></script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/themes/roletas/style/js/jquery.bxslider.min.js?ver=24052017'></script>
<script type='text/javascript' src='https://code.jquery.com/ui/1.10.2/jquery-ui.js?ver=24052017'></script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/themes/roletas/style/js/scripts.js?ver=24052017'></script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/plugins/lightbox-gallery/js/jquery.colorbox.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/plugins/lightbox-gallery/js/jquery.tooltip.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/plugins/lightbox-gallery/lightbox-gallery.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var icl_vars = {"current_language":"lt","icl_home":"https:\/\/www.solemlux.lt\/","ajax_url":"https:\/\/www.solemlux.lt\/wp-admin\/admin-ajax.php","url_type":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/plugins/sitepress-multilingual-cms/res/js/sitepress.js?ver=4.9.8'></script>
<script type='text/javascript' defer src='https://www.solemlux.lt/wp-content/plugins/strong-testimonials/public/js/lib/actual/jquery.actual.min.js?ver=1.0.16'></script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-includes/js/imagesloaded.min.js?ver=3.2.0'></script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-includes/js/underscore.min.js?ver=1.8.3'></script>
<script type='text/javascript' defer src='https://www.solemlux.lt/wp-content/plugins/strong-testimonials/public/js/lib/verge/verge.min.js?ver=1.10.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var strong_slider_id_1 = {"config":{"mode":"horizontal","speed":1000,"pause":8000,"autoHover":1,"autoStart":1,"stopAutoOnClick":1,"adaptiveHeight":1,"adaptiveHeightSpeed":500,"controls":1,"autoControls":0,"pager":0,"slideCount":28,"debug":false,"compat":{"lazyload":{"active":false,"classes":[]}},"touchEnabled":true,"maxSlides":1,"moveSlides":1,"slideMargin":0,"minThreshold":480,"startText":"","stopText":"","prevText":"","nextText":""}};
/* ]]> */
</script>
<script type='text/javascript' defer src='https://www.solemlux.lt/wp-content/plugins/strong-testimonials/public/js/lib/strongslider/jquery.strongslider.min.js?ver=2.32.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var strongControllerParms = {"initializeOn":"documentReady","method":"","universalTimer":"500","observerTimer":"500","event":"","script":"","containerId":"page","addedNodeId":"content","debug":""};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/plugins/strong-testimonials/public/js/controller.min.js?ver=2.32.1'></script>
<script type="text/javascript">
// <![CDATA[
// ]]>
</script>
<div id="cookie-law-info-bar"><span>Šioje svetainėje naudojame slapukus (angl. "cookies"). Jie padeda atpažinti prisijungusius vartotojus, matuoti auditorijos dydį ir naršymo įpročius; taip mes galime keisti svetainę, kad ji būtų jums patogesnė. <a href="https://www.solemlux.lt/privatumo-ir-slapuku-politika" id="CONSTANT_OPEN_URL" target="_blank"  class="small cli-plugin-button cli-plugin-main-link" >Atidaryti privatumo ir slapukų politiką</a> <a href="#" data-cli_action="accept" id="cookie_action_close_header"  class="medium cli-plugin-button cli-plugin-main-button cookie_action_close_header cli_action_button" >OK</a> </span></div><div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
<div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>
<script type="text/javascript">
  //<![CDATA[
  cli_cookiebar_settings='{"animate_speed_hide":"500","animate_speed_show":"500","background":"#fff","border":"#444","border_on":false,"button_1_button_colour":"#000","button_1_button_hover":"#000000","button_1_link_colour":"#fff","button_1_as_button":true,"button_1_new_win":false,"button_2_button_colour":"#333","button_2_button_hover":"#292929","button_2_link_colour":"#ffffff","button_2_as_button":true,"button_3_button_colour":"#000","button_3_button_hover":"#000000","button_3_link_colour":"#fff","button_3_as_button":true,"button_3_new_win":false,"button_4_button_colour":"#000","button_4_button_hover":"#000000","button_4_link_colour":"#fff","button_4_as_button":true,"font_family":"inherit","header_fix":true,"notify_animate_hide":true,"notify_animate_show":false,"notify_div_id":"#cookie-law-info-bar","notify_position_horizontal":"right","notify_position_vertical":"top","scroll_close":false,"scroll_close_reload":false,"accept_close_reload":false,"reject_close_reload":false,"showagain_tab":false,"showagain_background":"#fff","showagain_border":"#000","showagain_div_id":"#cookie-law-info-again","showagain_x_position":"100px","text":"#000","show_once_yn":false,"show_once":"20000","logging_on":false,"as_popup":false,"popup_overlay":true,"bar_heading_text":""}';
  //]]>
</script><!--Embed from Zendesk Chat Chat Wordpress Plugin v1.4.13-->
  <!--Start of Zopim Live Chat Script-->
  <script type="text/javascript">
  window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
  d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
  _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
  $.src='//v2.zopim.com/?5Tv9Q8bY42foCWjICWZYQ1DaBF4jiLCL';z.t=+new Date;$.
  type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
  </script><script>$zopim( function() {
})</script><!--End of Zendesk Chat Script-->			<style>
			#splite_popup_box {
				background: #EFEFEF;
				border-bottom: 5px solid #ED1C24;
				border-radius: 0px;
							}
			#splite_popup_title,
			#splite_popup_box div.wpcf7-response-output,
			a.splite_sideEnquiry {
				background-color: #ED1C24;
				color: #EFEFEF;  
			}
			#splite_popup_description {  
				color: #959595;  
			}
			#splite_popupBoxClose {
				 color: #EFEFEF;  
			}						
			#splite_popup_box  div.wpcf7 img.ajax-loader,
			#splite_popup_box div.wpcf7 span.ajax-loader.is-active {
				box-shadow: 0 0 5px 1px #ED1C24;
			}	
			a.splite_sideEnquiry {
				background: ;				
			}
			
            #splite_popup_box input.wpcf7-form-control.wpcf7-submit {
					background: #ED1C24;
					letter-spacing: 1px;
					padding: 10px 15px;  
					text-align: center;
					border: 0; 
					box-shadow: none;   
            }
            #splite_form_container {
				color: #484848;
			}
			#splite_popup_title {
				color: #FF2424;
				font-family: Open Sans;
				font-size: 28px;
				font-weight: ;
				line-height: 32px;
			}
			#splite_popup_description {
				color: #FF2424;
				font-family: Noto Sans;
				font-size: 13px;
				font-weight: ;
				line-height: 21px;
				text-align: center;
			}
			a.splite_sideEnquiry {
				color: #F1F1F1;
				font-family: Open Sans;
				font-size: 14px;
				font-weight: 700;
				line-height: 18px;
			}
			#splite_popup_box .wpcf7-form-control.wpcf7-submit {				
				color: #F1F1F1;
				font-family: Open Sans;
				font-size: 22px;
				font-weight: 700;
				line-height: 24px;
			}
			#splite_popup_box span.wpcf7-not-valid-tip{
				   
			}
			a.splite_sideEnquiry{    left:0 !important;
    bottom: 0px  !important;
    position: fixed  !important;
    top: inherit  !important;
    transform: none !important;}
    #splite_popup_box.layout_centered {
    max-height: 95%;}
    .splite_sideEnquiry.pos_left{    background: #FF2424;
    background: -moz-linear-gradient(top, #FF2424 0%, #FF2424 100%);
    background: -webkit-linear-gradient(top, #FF2424 0%,#FF2424 100%);
    background: linear-gradient(to bottom, #FF2424 0%,#FF2424 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#FF2424', endColorstr='#FF2424',GradientType=0 );
    bottom: 0;
    color: #fff;
    left:5px !important;
    padding: 10px 10px 10px;
    font-size: 15px;
    position: fixed;
    box-shadow: 0 1px 0 0 rgba(0, 0, 0, 0.4) inset, 0 2px 0 0 rgba(255, 255, 255, 0.7) inset;
    color: #ffffff;
    max-width: 300px;
    min-width: 190px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    cursor: pointer;
    font-weight: bold;}
    
    #splite_popup_box{background: #fff none repeat scroll 0 0;
    border: 2px solid #FF5F00;
    transition: all 0.5s ease 0s;}
    
    #splite_popup_title {
    color: #FF2424;
    font-size: 20px;
    text-align: center;
    margin: 0px;
}
#splite_popup_description {
    color: #FF2424;}
    .fullwidth {
    display: inline-block;
    width: 100%;
}
.fullwidth > label {
    float: left;
    font-size: 14px;
    margin-top: 10px;
    width: 35%;
    font-weight: 500;
}
.fullwidth .wpcf7-form-control-wrap {
    float: left;
    width: 65%;
}
#splite_popup_box input, #splite_popup_box input[type="*"], #splite_popup_box input[type="text"], #splite_popup_box input[type="email"], #splite_popup_box input[type="tel"], #splite_popup_box input[type="hidden"], #splite_popup_box textarea, #splite_popup_box select{    border: 2px solid #E5E5E5;
    color: #999999;
    font-family: "Segoe UI",Frutiger,Linotype;
    font-size: 16px;
    height: 37px;
    line-height: 26px;
    margin-bottom: 8px;
    max-width: 100%;
    width: 93%;
    padding: 0 8px;}
    
  .fullwidth span.wpcf7-list-item {    width: 50%;
    float: left;
    margin: 1px 0px;}
    .grsbtn{}
    #splite_popup_box{overflow:inherit !important;}
    
   #splite_popupBoxClose {    border: 3px solid #ff5f00;
    border-radius: 50%;
    color: #ff5f00;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    padding-top: 5px;
    position: absolute;
    right: -10px;
    text-align: center;
    top: -10px;
    width: 34px;
    padding: 3px !important;
    line-height: 23px !important;
    background: #fff;}
 .fullwidth  .checc .wpcf7-form-control-wrap, .checc .check,.fullwidth .add{  width: 100%;}
   #splite_popup_box input.wpcf7-form-control.wpcf7-submit{ background-color: #7bb800;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: 1px solid #18ab29;
    display: inline-block;
    cursor: pointer;
    color: #ffffff;
    font-family: Arial;
    font-size: 16px;
    padding: 8px 11px;
    text-decoration: none;
    text-shadow: 0px 1px 0px #2f6627;
    display: inline-block;
    float: right;
    text-transform: inherit;
    margin: 5px 0;}
    #splite_popup_box input[type="checkbox"], #splite_popup_box input[type="radio"] {
    width: auto;
    float: left;
    margin-right: 5px;
}
#splite_popup_description {
    margin: 0px auto 10px;
}
.fullwidth .add textarea{height:60px !important; width: 100% !important; }
#splite_popup_title {
        background: none !important;
        padding:10px 0 0px 20px;
}

#splite_popup_description {
    color: #FF2424;
    font-size: 14px;
    margin-top: 5px;
    text-align: center;
       padding: 0% 0px 5px 0;
           margin-bottom: 7px;
}

#splite_popup_box  input[type="text"] {
    border: 2px solid #E5E5E5;
    color: #999999;
        font-family: sans-serif;
    font-size: 15px;
    height: 40px;
    line-height: 26px;
    margin-bottom: 3px;
    max-width: 100%;
    width: 100%;
    padding: 0 8px;
}
#splite_popup_box.layout_centered {
    max-height: 97%;
}
#splite_popup_box input.wpcf7-form-control.wpcf7-submit {
    font-weight: 500 !important;
}
#splite_popup_box .wpcf7 {
    width: 93%;
}

#splite_popup_box textarea {
    height: 56px !important;
    margin-bottom: 0 !important;
}		

    .modal-dialog{
            position: relative !important;
            left: 0% !important;
        }
        .modal{
            overflow-y: scroll;
        }
        @media screen and (min-width: 768px)
        {
        	 .modal-dialog{
            /* position: relative !important; */
            left: 0% !important;
        }
        }
    .btn, .vanilla-form label.custom-select span {
    background: #7bb802 !important;
    color: white !important;
}
/*.frame img {
    height: 250px !important;
   width: 204px !important;
   margin: 10px !important;
}*/
/*.frame img {
   height: 161px !important;
   width: 155px !important;
   margin-top: 20px !important;
   margin-left: 34px  !important;
}*/
.frame img {
    height: 161px !important;
    width: 155px !important;
    margin-top: 37px !important;
    margin-left: 35px !important;
}
.third_cart .frame img {
    height: 161px !important;
    width: 155px !important;
    margin-top: 37px !important;
    margin-left: 40px !important;
}
@media(min-width: 992px) and (max-width: 1199px){
    .frame img {
        width: 72% !important;
        height: 86% !important;
        margin-left: 14% !important;
        margin-top: 11% !important;
    }
    .third_cart .frame img {
        width: 72% !important;
        height: 86% !important;
        margin-left: 14% !important;
        margin-top: 11% !important;
    }
}
@media(min-width: 901px) and (max-width: 991px){
    .frame img {
        width: 77% !important;
        height: 94% !important;
        margin-left: 12% !important;
        margin-top: 12% !important;
    }
    .third_cart .frame img {
        width: 78% !important;
        height: 97% !important;
        margin-left: 12% !important;
        margin-top: 12% !important;
    }
}
@media(min-width: 769px) and (max-width: 900px){
    .frame img {
        width: 76% !important;
        height: 94% !important;
        margin-left: 12% !important;
        margin-top: 10% !important;
    }
    .third_cart .frame img {
       width: 77% !important;
        height: 96% !important;
        margin-left: 12% !important;
        margin-top: 10% !important;
    }
}
@media(min-width: 700px) and (max-width: 768px){
    .frame img {
        width: 77% !important;
        height: 89% !important;
        margin-left: 11% !important;
        margin-top: 9% !important;
    }
    .third_cart .frame img {
        width: 78% !important;
        height: 89% !important;
        margin-left: 11% !important;
        margin-top: 9% !important;
    }
}
@media(min-width: 481px) and (max-width: 699px){
    .frame img {
        width: 64% !important;
        height: 78% !important;
        margin-left: 18% !important;
        margin-top: 17% !important;
    }
    .third_cart .frame img {
        width: 61.5% !important;
        height: 80% !important;
        margin-left: 19% !important;
        margin-top: 15% !important;
    }
}
@media(max-width: 480px){
    .frame img {
        width: 64% !important;
        height: 78% !important;
        margin-left: 18% !important;
        margin-top: 17% !important;
    }
    .third_cart .frame img {
        width: 59.5% !important;
        height: 80% !important;
        margin-left: 20% !important;
        margin-top: 13% !important;
    }
}
</style>

<style>
		  .i4ewOd-pzNkMb-haAclf {  
		  display: none !important;}
		  .fb-page,
.fb-page span,
.fb-page span iframe[style] {
    max-width: 100% !important;
}
.col-md-12.footercon {
    padding: 0 0;
}
.topfooter label {
    display: inline-block;
    width: 100%;
    margin-bottom: 5px;
    font-weight: bold;
    max-width: 329px;
}
/* Thick red border */
hr.new4 {
    border: 1px solid red;
    padding: 0px;
    margin-bottom: 0px;
}
#window-append {
    line-height: 1.2em;
    overflow: hidden;
    padding: 0;
    margin: 0;
    position: absolute;
    top: 151px;
    width: 162px;
    left: 292px;
    background-size: cover;
    height: 228px;
}
#window-append2 {
    line-height: 1.2em;
    overflow: hidden;
    width: 29.9%;
    padding: 0;
    margin: 0;
    height: 21.2%;
    position: absolute;
    top: 149px;
    left: 89px;
    border-radius: 0px;
    background-size: 118px 118px !important;
}
@media only screen and (max-width: 320px) {
    #window-append {
        left: 25px !important;
        top: 37px;
        width: 78px;
        height: 75px;
    }
}
@media only screen and (min-width: 320px) and (max-width: 480px) {
  #window-append {
      padding: 0;
      margin: 0;
      height: 73.5%;
      position: absolute;
      top: 43px;
      width: 78%;
      left: 28px;
      border-left: 1px solid gray;
      border-right: 1px solid gray;
      border-top: 1px solid gray;
    }
}
@media only screen and (min-width: 480px) and (max-width: 599px) {
    #window-append {
        padding: 0 ;
        margin: 0;
        height: 75% !important;
        position: absolute;
        top: 59px !important;
        width: 76% !important;
        left: 42px !important;
    }   
}
@media only screen and (min-width: 600px) and (max-width: 759px) {
    #window-append {
    padding: 0;
    margin: 0;
  top: 11% !important;
left: 10.1% !important;
width: 76.9% !important;
box-shadow: none;
height: 64.1% !important;
    }
}
@media only screen and (min-width: 760px) and (max-width: 800px) {
    #window-append {
        padding: 0;
        margin: 0;
  top: 11% !important;
left: 10.1% !important;
width: 76.9% !important;
box-shadow: none;
height: 64.1% !important;
    }
}
@media only screen and (min-width: 800px) and (max-width: 1024px) {
    #window-append {
    top: 62px;
    width: 77.5%;
    left: 44px;
    height: 74%;
}
@media only screen and (width: 750px) {
    #window-append {
  top: 11% !important;
left: 10.1% !important;
width: 76.9% !important;
box-shadow: none;
height: 64.1% !important;
    }
}
}
@media(min-width: 1025px) and (max-width: 1199px){
    #window-append {
top: 125px !important;
left: 237px !important;
box-shadow: none;
height: 39.1%;
width: 29.9%;
    }
		 #window-append2 {
 top: 125px;
width: 29.8%;
left: 73px;
height: 19.6%;
box-shadow: none;
    }
    .colorFabricbox label span {
        width: 93px !important;
        height: 93px !important;
    }
}
@media(min-width: 992px) and (max-width: 1024px){
   #window-append {
    top: 124px !important;
    left: 238px !important;
    box-shadow: none;
    height: 39.3%;
    width: 29.9%;
}
		#window-append2 {
    top: 123px;
    width: 30%;
    left: 72px;
    height: 20.2%;
    box-shadow: none;
}
    .colorFabricbox label span {
        height: 90px !important;
    }
	.text{top:125px!important; left:105px!important;}
}
@media(min-width: 769px) and (max-width: 991px){
    #window-append {
top: 25.7% !important;
    left: 54.1% !important;
    width: 29.9% !important;
    box-shadow: none;
    height: 149px !important;
    }
	  #window-append2 {
top: 25.5% !important;
left: 16.5% !important;
width: 29.9% !important;
box-shadow: none;
height: 20.1% !important;
    }
	.text{top:100px!important; left:82px!important;}
}
@media(min-width: 760px) and (max-width: 768px){
   #window-append {
    top: 30.6% !important;
    left: 54.2% !important;
    width: 29.9% !important;
    box-shadow: none;
    height: 33% !important;
}
	#window-append2 {
    top: 25% !important;
    left: 16.5% !important;
    width: 29.9% !important;
    box-shadow: none;
    height: 19.5% !important;
}
.text{left:76px!important; top:105px!important;}
}
@media(min-width: 732px) and (max-width: 759px){
    #window-append {
top: 25% !important;
left: 54.1% !important;
width: 29.9% !important;
box-shadow: none;
height: 38.3% !important;
    }
	 #window-append2 {
 top: 25% !important;
left: 16.6% !important;
width: 30.3% !important;
box-shadow: none;
height: 20.8% !important;
    }
}
@media(min-width: 700px) and (max-width: 731px){
    #window-append {
top: 24% !important;
left: 54.1% !important;
width: 29.9% !important;
box-shadow: none;
height: 38.3% !important;
    }
	 #window-append2 {
 top: 24% !important;
left: 16.6% !important;
width: 30.3% !important;
box-shadow: none;
height: 20.8% !important;
    }
}
@media(min-width: 500px) and (max-width: 699px){
    #window-append {
top: 26.3% !important;
left: 54.1% !important;
width: 29.9% !important;
box-shadow: none;
height: 39.3% !important;
    }
	 #window-append2 {
top: 26.3% !important;
left: 16.6% !important;
width: 30% !important;
box-shadow: none;
height: 19.8% !important;
    }
}
@media(min-width: 411px) and (max-width: 499px){
  #window-append {
     top: 25.2% !important;
    left: 54% !important;
    width: 30.2% !important;
    box-shadow: none;
    height: 38% !important;
}
#window-append2 {
    left: 16.4% !important;
    width: 29.9% !important;
    box-shadow: none;
    height: 19.4% !important;
    top: 25.1%;
}
.text{top:96px!important; left:81px!important;}
}
@media(min-width: 250px) and (max-width: 410px){
  #window-append {
    top: 23.3% !important;
    left: 53.7% !important;
    width: 30.7% !important;
    box-shadow: none;
    height: 41.4% !important;
}
#window-append2 {
    top: 23.7% !important;
    left: 16.6% !important;
    width: 30% !important;
    box-shadow: none;
    height: 17.9% !important;
}
.text{top:83px!important ; left:66px!important;}
}
@media(max-width: 249px){
    #window-append {
	top: 25.7% !important;
left: 54% !important;
box-shadow: none;
height: 39% !important;
width: 30% !important;
    }
	 #window-append2 {
top: 25.7% !important;
left: 16.5% !important;
box-shadow: none;
height: 19.5% !important;
width: 29.9% !important;
    }
}
@media (max-width: 320px) and (min-width: 319px){
#window-append2 {
    top: 22.9% !important;
    left: 16.3% !important;
    width: 30.2% !important;
    box-shadow: none;
    height: 17.6% !important;
}
#window-append {
    top: 23% !important;
    left: 53.7% !important;
    width: 30.7% !important;
    box-shadow: none;
    height: 34.7% !important;
}
.text{top:70px!important; left:53px!important;}
}
@media (max-width: 360px) and (min-width: 321px){

#window-append {
     height: 35.8% !important;
}

}
@media (max-width: 375px) and (min-width: 374px){
#window-append2 {
    top: 23.7% !important;
    left: 16.4% !important;
    width: 30.1% !important;
    box-shadow: none;
    height: 18.3% !important;
}
#window-append {
     top: 87px !important;
    height: 36.1% !important;
}
.text{top:86px!important; left:73px!important;}

}
#window-append2 img {
    margin-top:0px;
}
div#window-append img {
    height: 504px!important;
}

.text{position: absolute; top: 30% !important; left: 24% !important; color: #fff ;text-shadow: #000 0px 1px 5px; z-index:2; font-size: 25px;}


/*new*/
@media(min-width: 1025px) and (max-width: 1199px){
 #window-append {
   top: 28.5% !important;
    left: 54.3% !important;
    width: 29.7% !important;
    box-shadow: none;
    height: 41.8% !important;
    border: 0px;
}
 #window-append img{ height:100%;} 
#window-append2 {
	      top: 28.5% !important;
    left: 16.7% !important;
    width: 29.7% !important;
    box-shadow: none;
    height: 20.9% !important;
}
    .colorFabricbox label span {
        width: 93px !important;
        height: 93px !important;
    }
}
@media(min-width: 992px) and (max-width: 1024px){
 #window-append {
   top: 28.5% !important;
    left: 54.3% !important;
    width: 29.7% !important;
    box-shadow: none;
    height: 41.8% !important;
    border: 0px;
}
 #window-append img{ height:100%;} 
#window-append2 {
	       top: 28.5% !important;
    left: 16.7% !important;
    width: 29.7% !important;
    box-shadow: none;
    height: 20.9% !important;
}
    .colorFabricbox label span {
        height: 90px !important;
    }
}
@media(min-width: 700px) and (max-width: 991px){
 #window-append {
   top: 28.5% !important;
    left: 54.3% !important;
    width: 29.7% !important;
    box-shadow: none;
    height: 41.8% !important;
    border: 0px;
}
 #window-append img{ height:100%;} 
#window-append2 {
	      top: 28.5% !important;
    left: 16.7% !important;
    width: 29.7% !important;
    box-shadow: none;
    height: 20.9% !important;
}
}
@media(min-width: 250px) and (max-width: 699px){
 #window-append {
   top: 28.5% !important;
    left: 54.3% !important;
    width: 29.7% !important;
    box-shadow: none;
    height: 41.8% !important;
    border: 0px;
}
 #window-append img{ height:100%;} 
#window-append2 {
	        top: 28.5% !important;
    left: 16.7% !important;
    width: 29.7% !important;
    box-shadow: none;
    height: 20.9% !important;
}
}
</style>
		
		<!-- SP Pro - Popup Box Curtain Arrangement -->
		<div id="splite_curtain" onClick="splite_unloader();" style=""></div>
		<div class="splite_popup_animator" data-loadspeed="0.50" data-loadeffect="fadeIn" data-unloadeffect="fadeOut" data-unloadspeed="0.50"></div>
		<div id="splite_popup_box" class="layout_centered manage">  			
									
						<div id="splite_form_container" class="">			
				<p id="splite_popup_description">Užpildykite formą ir mūsų meistrai Jums patogiu laiku atvažiuos į Jūsų namus ar biurą ir priims užsakymą.</p>
				<div role="form" class="wpcf7" id="wpcf7-f7177-o2" lang="lt-LT" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/#wpcf7-f7177-o2" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="7177" />
<input type="hidden" name="_wpcf7_version" value="5.0.4" />
<input type="hidden" name="_wpcf7_locale" value="lt_LT" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f7177-o2" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
</div>
<div class="fullwidth">
<label>Vardas Pavardė *</label><span class="wpcf7-form-control-wrap fname"><input type="text" name="fname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Vardas Pavardė" /></span>
</div>
<div class="fullwidth">
<label>Adresas *</label><span class="wpcf7-form-control-wrap address"><input type="text" name="address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Adresas" /></span>
</div>
<div class="fullwidth">
<label>Miestas *</label><span class="wpcf7-form-control-wrap Miestas"><input type="text" name="Miestas" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Miestas" /></span>
</div>
<div class="fullwidth">
<label>El. paštas *</label><span class="wpcf7-form-control-wrap emailas"><input type="email" name="emailas" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="El. paštas" /></span>
</div>
<div class="fullwidth">
<label>Telefonas *</label><span class="wpcf7-form-control-wrap Telefonas"><input type="text" name="Telefonas" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Telefonas" /></span>
</div>
<div class="fullwidth checc">
<span class="wpcf7-form-control-wrap check"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first"><span class="wpcf7-list-item-label">Vidaus žaliuzės</span><input type="checkbox" name="check[]" value="Vidaus žaliuzės" /></span><span class="wpcf7-list-item"><span class="wpcf7-list-item-label">Išorinės žaliuzės</span><input type="checkbox" name="check[]" value="Išorinės žaliuzės" /></span><span class="wpcf7-list-item"><span class="wpcf7-list-item-label">Roletai</span><input type="checkbox" name="check[]" value="Roletai" /></span><span class="wpcf7-list-item"><span class="wpcf7-list-item-label">Romanetės</span><input type="checkbox" name="check[]" value="Romanetės" /></span><span class="wpcf7-list-item"><span class="wpcf7-list-item-label">Markizės</span><input type="checkbox" name="check[]" value="Markizės" /></span><span class="wpcf7-list-item last"><span class="wpcf7-list-item-label">Tinkleliai nuo vabzdžių</span><input type="checkbox" name="check[]" value="Tinkleliai nuo vabzdžių" /></span></span></span></div>
<div class="fullwidth">Pastabos *<br />
<span class="wpcf7-form-control-wrap add"><textarea name="add" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea></span></div>
<p><input type="hidden" name="contact_form_7_recaptcha" value="g-recaptcha-2djUiz6s0ST4avB" class="g-recaptcha-explicit-id"><div id="g-recaptcha-2djUiz6s0ST4avB"></div><span class="wpcf7-form-control-wrap g-recaptcha-explicit" data-sitekey="6Lemfz8UAAAAAOlBpuydFZiovdbRSCVhGya9BM2u"></span></p>
<div class="grsbtn"><input type="submit" value="Užsakyti" class="wpcf7-form-control wpcf7-submit" /></div>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>			</div>
			<!--<div class="success" style="display: none;">Successfully Submitted ...</div>-->
			 
		</div>
		
				
				
		<!-- Slick Popup Lite Box and Curtain Arrangement -->		
		
<div class="wpb-outer-wrap">
        <style type="text/css">
                .wpb-main-wrapper{
                border-radius: 10px;
                                background-color: #fff;
                                    position:fixed;

            }
                    #wpb_overlay{
                    opacity: 0.8;
                    background-color: black;
                }
                .wpb-preview-title {
                position: fixed;
                top: 6%;
                z-index: 99999;
                right: 40px;
                color: #fff;
                font-size: 25px;
            }
                
        </style>

               <?php /* ?> <div class="wpb-main-wrapper wpb-image-popup" id="wpb-scroll-div">
                    <div class="wpb_close_btn"></div>
            <div class="clear"></div>
                <div class="wpb-popup-content">

                                    <a href="https://www.solemlux.lt/" target="_self" >
                        <div class="wpb-background-image">
                            <img class="wpb_background_img wpb_overlay" src="https://www.solemlux.lt/wp-content/uploads/600x600.png" >
                        </div>
                    </a>


        </div>
    </div>
    <div id="wpb_overlay"></div>
<?php */ ?>
</div>

<?php
$item = isset($_GET['item'])? $_GET['item'] : null;
if(isset($item) && isset($_SESSION['cart']['product_details'])) {
    $edit_data = $_SESSION['cart']['product_details'][$item];
    echo '<input id="itemIdx" value="'.$edit_data['colorFabric'].'" hidden/>';
} else {
    echo '<input id="itemIdx" value="-1" hidden/>';
}

if(isset($item) && isset($_SESSION['cart']['product_details'])) {
    $edit_data = $_SESSION['cart']['product_details'][$item];
    echo '<input id="idx" value="'.$item.'" hidden/>';
} else {
    echo '<input id="idx" value="-1" hidden/>';
}

if(isset($item) && isset($_SESSION['cart']['product_details'])) {
    $edit_data = $_SESSION['cart']['product_details'][$item];
    echo '<input id="itemFlg" value="true" hidden/>';
} else {
    echo '<input id="itemFlg" value="false" hidden/>';
}
?>

<script src="ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
</script>
<script src="jquery/jquery.addproducts.js?v=<?php echo rand(999,9999); ?>">
</script>
<script src="jquery/html2canvas.js">
</script>
<script type='text/javascript' src='https://www.google.com/recaptcha/api.js?onload=contact_form_7_recaptcha_callback&#038;render=explicit&#038;ver=1.0.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var contact_form_7_recaptcha_data = {"sitekey":"6Lemfz8UAAAAAOlBpuydFZiovdbRSCVhGya9BM2u"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.solemlux.lt/wp-content/plugins/contact-form-7-recaptcha/script.js?ver=1.0.0'></script>

<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script>
jQuery('ul.bxslider').bxSlider({
  auto: true,
  autoControls: true,
  stopAutoOnClick: true,
  pager: false,
  mode:'fade',
  speed:5000
});
</script>

</body>

</html><script type="text/javascript">
(function($) {  

	/*$('select[multiple]').multiSelect({
            columns: 1,
            placeholder: 'Select Category',
            search: true,
            searchOptions: {
                'default': 'Search Category'
            },
            selectAll: true
        });*/

		$('select[multiple]').multiselect({
            columns: 1,
            placeholder: 'Pasirinkite audinių kategoriją',
            search: false,
            
            selectAll: true,
			texts: {
				placeholder    : 'Select options', // text to use in dummy input
				selectedOptions: ' pasirinkta',      // selected suffix text
				selectAll      : 'pasirinkti visas',     // select all text
				unselectAll    : 'išvalyti pasirinkimus',   // unselect all text
				noneSelected   : 'None Selected'   // None selected text
			}, 
			onLoad        : function( element ){},
			onOptionClick : function( element, option ){getimages($('#selectMaterial').val())},
			onSelectAll   : function( element, selected ){getimages($('#selectMaterial').val())},
        }); 
		
$(document).ready(function() {
    var url = document.location.toString();
    if ( url.match('#') ) {
      var fragment = url.split('#')[1];

      if(fragment == 'atliktų-darbų-galerijos') {
        $('.home-dynamic').html('');
        $('.akcijos').removeClass('active');
        $('.paslaugos').removeClass('active');
        $('atliktų-darbų-galerijos').addClass("active");
        console.log('https://www.solemlux.lt/ajax-request/');
        $.ajax({
          'url' : 'https://www.solemlux.lt/ajax-request/',
          'type' : 'POST',
		  
          'data' : {'type':'homegallery'},
          'success' : function(data){
            var container = $('.home-dynamic'); //jquery selector (get element by id)
            if(data==""){ }
            else{
              container.html('');
              container.html(data);
            }
          }
        });
      }
      else if(fragment == 'akcijos') {
        $('.home-dynamic').html('');
        $('.atliktų-darbų-galerijos').removeClass('active');
        $('.paslaugos').removeClass('active');
        $('.akcijos').addClass("active");
        $.ajax({
          'url' : 'https://www.solemlux.lt/ajax-request/',
          'type' : 'POST',
          'data' : {'type':'akcijos'},
		 
          'success' : function(data){
            var container = $('.home-dynamic'); //jquery selector (get element by id)
            if(data==""){ }
            else{
              container.html('');
              container.html(data);
            }
          }
        });
      }
      else if(fragment == 'paslaugos') {
        $('.home-dynamic').html('');
        $('.akcijos').removeClass('active');
        $('.atliktų-darbų-galerijos').removeClass('active');
        $('.paslaugos').addClass("active");
        $.ajax({
          'url' : 'https://www.solemlux.lt/ajax-request/',
          'type' : 'POST',
          'data' : {'type':'paslaugos'},
		  
          'success' : function(data){
            var container = $('.home-dynamic'); //jquery selector (get element by id)
            if(data==""){ }
            else{
              container.html('');
              container.html(data);
            }
          }
        });
      }
    }
$('.tabs.tabs-top').easytabs({
        animationSpeed: 300,
        updateHash: false
    });
    $('.tabs.tabs-bottom').easytabs({
        animationSpeed: 300,
        updateHash: false,
        cycle: 5000
    });
	$(".akcijos_1 a").click(function() {
	 $('.paslaugos').removeClass('active');
        $('.akcijos').addClass("active");
	 $.ajax({
          'url' : 'https://www.solemlux.lt/ajax-request/',
          'type' : 'POST',
          'data' : {'type':'akcijos'},
		 
          'success' : function(data){
            var container = $('.home-dynamic'); //jquery selector (get element by id)
            if(data==""){ }
            else{
              container.html('');
              container.html(data);
            }
          }
        });
    $('html, body').animate({
        scrollTop: $("#akcijos_1").offset().top
    }, 2000);
});
	$(".myrotetd").click(function() {
	 $('.paslaugos').removeClass('active');
        $('.akcijos').addClass("active");
	 $.ajax({
          'url' : 'https://www.solemlux.lt/ajax-request/',
          'type' : 'POST',
          'data' : {'type':'akcijos'},
		 
          'success' : function(data){
            var container = $('.home-dynamic'); //jquery selector (get element by id)
            if(data==""){ }
            else{
              container.html('');
              container.html(data);
            }
          }
        });
    $('html, body').animate({
        scrollTop: $("#akcijos_1").offset().top
    }, 2000);
});
});
})(jQuery);


    function openInNewTab(url)
    {
        window.open(url, '_blank');
    }

    function remove_cart(arguments, module_name) {
     
        data_id= arguments;
                    $.ajax({
                    type: 'post',
                    url: 'ajax/cartcheck.php',
                    data: {
                        data_id:data_id 
                    }
                    ,
                    success: function (response){
                      window.open("https://www.solemlux.lt/eshopdev/"+module_name+"/","_self");

                    }
                }
            );
    }
  function close_checkout() {
        // body...
         document.getElementById("successtyuasdwq_2").style.display="none";
    }
</script>
<style>.strong-view.default .testimonial-name {
    float: none !important;
    padding-left: 0;
}.strong-view.default .testimonial-client {
    margin-top: -10px;
}


</style>

<script>


    $ = jQuery.noConflict();
    $("#installationtype").change(function(){
            var selecteditem = $("#installationtype option:selected").val();
            if(selecteditem == "onframe"){
                $("#onframe").show();
                $("#onwall").hide();
                $("#inwindow").hide();
            }
            else if(selecteditem == "onwall"){
                $("#onframe").hide();
                $("#onwall").show();
                $("#inwindow").hide();
            }
            else if(selecteditem == "inwindow"){
                $("#onframe").hide();
                $("#onwall").hide();
                $("#inwindow").show();
            }
        }
    );
    $("[name='mechanism']").change(function(){
            $("#addPro").show();
            $("#addPro").find("#holder").text($(this).val());
            var amarselectoption = $("#mechanism option:selected");
            var select_mech = amarselectoption.val();
            var datasrc = amarselectoption.attr("datasrc");
            //alert(amarselectoption);
            $("#color_mch").html("<img src="+datasrc+" style='height:200px;width:200px;'>");
        }
		);
		 $("#mechanism").change(function(){
            
            var select_mech = $(this).val();
			if(select_mech=='Balta (1)'){
				select_mech1="ZP_BALTA_1.jpg";
			}else if(select_mech=='Ruda (7)'){
				select_mech1="ZP_RUDA_7.jpg";
			}else if(select_mech=='Antracitas(23)'){
				select_mech1="ZP_ANTRACITAS_23.jpg";
			}else if(select_mech=='Auksinis azuolas (9)'){
				select_mech1="ZP_AUKSINIS_AZUOLAS_9.jpg";
			}else if(select_mech=='Sidabrine (3)'){
				select_mech1="ZP_SIDABRINE_3.jpg";
			}else if(select_mech=='Rudonmedis (5)'){
				select_mech1="ZP_RUDONMEDIS_5.jpg";
			}else if(select_mech=='Riesutas(6)'){
				select_mech1="ZP_RIESUTAS_6.jpg";
			}else if(select_mech=='Sviesus azuolas (8)'){
				select_mech1="ZP_SVIESUS_AZUOLAS_8.jpg";
			}
           $("#window-image .singleImage img").attr('src','https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams//mechanizmai/'+select_mech1);
        }
    );
    function amarimgdekhao(){
        var img_value = $("#color_mch").find('img').attr('src');
        //alert(img_value);
        $(".vmech_colr").find('.hoverImgz').show();
        $(".vmech_colr").find('.hoverImgz').html("<img src='"+img_value+"' style='height:100%;width:100%;border:3px solid black;z-index:9999;'>");
    }
    function soriyedao(){
        $(".vmech_colr").find('.hoverImgz').hide();
    }

    function required_if(val)
    {
        if($("#additional_choices").val() == val)
            return true;
        else return false;
    }
    $.validator.addMethod('less_then_width', function (value, element, param) {
      
	    value = +value;
        value /= 1;

        widthValue = $("input#width").val();
        diff = widthValue - value;
		
		//diff  = 55;
        if(diff >= 35 && diff < 60){
            return true;
        }else{
            return false;
        }
    }, 'Audinio plotis turi būti [35 mm-60 mm] mažesnis už įvestą Plotį');

    $('#myform1').validate({
        errorClass: 'error',
        errorElement: 'span',
        successClass: 'success',
        rules:{
            width: {
                required: true,
                max: 1500,
                min: 200,
            },
            height: {
                required: true,
                max: 2500,
                min: 200,
            },
            installationtype: 'required',
            widthzz_fabric: {
                required: true,
                less_then_width: 1,
				 required: true,
                max: 1470,
                min: 170,
            },
            selectMaterial: 'required',
            colorFabric: 'required',
            control: 'required',
            mechanism: 'required',
            control_side: { required: required_if('Rankinis valdymas') },
            guiding: { required: required_if('Rankinis valdymas') },
            management_mechanism: { required: required_if('Automatinis valdymas') },
            remote_control: { required: required_if('Automatinis valdymas') }
        },
        messages:{
            installationtype: 'Prašome pasirinkti diegimo tipą',
            widthzz_fabric: 'Audinio plotis turi būti [35 mm-60 mm] mažesnis už įvestą Plotį',
            selectMaterial: 'Prašome pasirinkti medžiagą',
            mechanism: 'Pasirinkite laikiklį',
            width: 'Netinkamas plotis. Galimas plotis: [200mm-1500mm]',
            height: 'Netinkamas aukštis. Galimas aukštis: [200mm-2500mm]',
            control_side: 'tai reikalinga',
            guiding: 'tai reikalinga',
            management_mechanism: 'tai reikalinga',
            remote_control: 'tai reikalinga'
        }
    });
    var $form = $("#myform1");
    $form.submit(function (e) {
        e.preventDefault();
        if ($form.valid()){
            //alert('yoo');
            //exit;
            var form = $form[0];
            var typeofinstall = $("#installationtype option:selected").val();
            var width = $('#width').val();
            var height = $( "#height" ).val();
            var fabric =  $( "#widthzz_fabric" ).val();
            var glass_brad = $("#glassbeaddepth option:selected").val();
            var color_mech = $("#mechanism option:selected").val();
            var selection_metirial = $("#image").html();
            var selection_category = $("#selectMaterial").val();
            var colorFabric = $("input[name='colorFabric']:checked").val();
            var categories = $('#ms-list-1').children().children().html();
            var windowImage = $('#window-image').html();
            var priceSection = $('#calculated-price-section').html();
			
            var idx = $('#idx').val();
            var priceValue = $('#unitPriceValue').val();
            //alert(selection_category);
            //exit;
            var control_side = $("#control_side option:selected").val();
            if(typeofinstall = "onframe")
            {
                var frm = $(".onframe").html();
                /*html2canvas($(".onframe"), {
                  onrendered: function(canvas) {
                      var imgsrc = canvas.toDataURL("image/png");
                      console.log(imgsrc);
                  }
                  });*/
            }
            if(typeofinstall = "onwall")
            {
                var frm = $(".onwall").html();
                /*html2canvas($(".onwall"), {
                  onrendered: function(canvas) {
                      var imgsrc = canvas.toDataURL("image/png");
                      console.log(imgsrc);
                  }
                  });*/
            }
            if(typeofinstall = "inwindow")
            {
                var frm = $(".inwindow").html();
                /*html2canvas($(".inwindow"), {
                  onrendered: function(canvas) {
                      var imgsrc = canvas.toDataURL("image/png");
                      console.log(imgsrc);
                  }
               });*/
            }
			
            $.ajax({
                    type: 'post',
                    url: 'ajax/addProductCart.php',
                    data: {
                        typeofinstall:typeofinstall,
                        width:width,
                        height:height,
                        fabric:fabric,
                        glass_brad:glass_brad,
                        color_mech:color_mech,
                        selection_metirial:selection_metirial,
                        selection_category:selection_category,
                        control_side:control_side,
                        imgsrc:frm,
                        additional_choices: form.additional_choices.value,
                        guiding: form.guiding.value,
                        control_side_2: form.control_side_2.value,
                        safe_child: form.safe_child.checked,
                        matel_chain: form.matel_chain.checked,
                        management_mechanism: form.management_mechanism.value,
                        remote_control: form.remote_control.value,
                        notes: form.notes.value,
                        quantity: form.quantity.value,
                        table: $("#addPro")[0].innerHTML,
                        colorFabric, colorFabric,
                        categories: categories,
                        windowImage: windowImage,
                        priceSection: priceSection,
                        idx: idx,
                        priceValue: priceValue
                    }
                    ,
                    success: function (response){
                        //alert(response);
                        //exit
                        $.ajax({
                                url : './config/editOrder.php',
                                type : 'post',
                                data : {item: '-1'},
                                success : function(response) {
                                }
                            });
                        $("#successtyuasdwq").show();
                        $("#idx").val("-1")
                        history.pushState(null, '', './');
                        //modal.style.display = "block";
                        //document.getElementById("#successtyuasdwq").show();
                        $("#product-table").html($("#addPro").clone());
                        if($("#notes").val() == '') {
                            $(".notes_tr").parent().hide();
                        }
                        else {
                            $(".notes_tr").parent().show();   
                        }
                    }
                }
            );
        }
    });
    function add_more(){
        $("#successtyuasdwq").hide();
        $("#gonoamarcart").load(location.href + " #gonoamarcart");
    }
    function on_checkout(){
        var itemFlg = $("#itemFlg").val();
        $("#submit1").html("Pridėti į krepšelį");
        $('ul.setup-panel li a[href="#step-2"]').trigger('click');
        if(itemFlg === "false") {
            $("#amardivrelo").load(location.href + " #amardivrelo");
        } else {
            $("#amardivrelocart").load(location.href + " #amardivrelocart");
        }
        $("#gonoamarcart").load(location.href + " #gonoamarcart");
        //$("#amardivrelocheckkorlo").load(location.href + " #amardivrelocheckkorlo");
        $("#amardivrelocheckkorlo").load(location.href + " #amardivrelocheckkorlo", function() {
          if($("#notes").val() == '') {
            $(".notes_tr").parent().hide();
            }
            else {
                $(".notes_tr").parent().show();   
            }
        });
        $("#successtyuasdwq").hide();
        
    }
    function pay_now()
    {
        $('ul.setup-panel li a[href="#step-1"]').trigger('click');
        $("#exsdff").hide();
    }
    function confirm_order()
    {
        //alert('yoo');
        //exit;
        $("#exsdff").show();
    }
    $('#myform2').validate({
        errorClass: 'error',
        errorElement: 'span',
        successClass: 'success',
        rules:{
            firstname: 'required',
            lastname: 'required',
            email: {
                required: true,
                email: true,
            },
            phone: 'required',
           // firm: 'required',
           // company_code: 'required',
           // activity_type: 'required',
            //vat_no: 'required',
            address: 'required',
            city: 'required',
            postcode: 'required',
            //country: 'required',
            //state: 'required',

        },
        messages:{
            firstname: 'tai reikalinga',
            lastname: 'tai reikalinga',
            email: 'tai reikalinga',
            phone: 'tai reikalinga',
            //firm: 'tai reikalinga',
            //company_code: 'tai reikalinga',
            //activity_type: 'tai reikalinga',
            //vat_no: 'tai reikalinga',
            address: 'tai reikalinga',
            city: 'tai reikalinga',
            postcode: 'tai reikalinga',
            //country: 'tai reikalinga',
            //state: 'tai reikalinga',
        }
    });

    var $form2 = $("#myform2");
    $form2.submit(function (e) {
        e.preventDefault();
        if ($form2.valid()){
            //alert('yoo');
            //exit;
            var first_name = $("#firstname").val();
            var last_name = $("#lastname").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var firm = $("#firm").val();
            var company_code = $("#company_code").val();
            var activity_type = $("input[name='optradio']:checked").val();
            var vat_no = $("#vat_no").val();
            var address = $("#address").val();
            var city = $("#city").val();
            var postcode = $("#postcode").val();
            var country = $("#country option:selected").val();
            var state = $("#state").val();
            var shipping_method = $("input[name='shipping_method']:checked").val();
            var payment_method = $("input[name='payment_method']:checked").val();
            var qty = $("#qty").val();
            //alert(qty);
            //exit;
            //alert(activity_type);
            //exit;
            $.ajax({
                    type: 'post',
                    url: 'ajax/addCheckout.php',
                    data: {
                        first_name:first_name,
                        last_name:last_name,
                        email:email,
                        phone:phone,
                        firm:firm,
                        company_code:company_code,
                        activity_type:activity_type,
                        vat_no:vat_no,
                        address:address,
                        country:country,
                        city:city,
                        postcode:postcode,
                        state:state,
                        shipping_method:shipping_method,
                        payment_method:payment_method,
                        qty:qty

                    }
                    ,
                    success: function (response) {
                        //alert(response);
                        //exit;
                        $('ul.setup-panel li a[href="#step-3"]').trigger('click');
						$("#step-1-select").html("");
						$("#step-4-select").html("");
						$("#step-5-select").html("<ffff></ffff>");
                        $('#step-3').find("#cart_user").load(location.href + " #cart_user");
                        // $("#amardivrelocheckkorlo").load(" #amardivrelocheckkorlo");
                        var total_amount = 0;
                        $("#amardivrelocheckkorlo").load(" #amardivrelocheckkorlo", function() {
                          $('.cart_tab .display_kaina_tr').each(function(){
                                total_amount = total_amount + parseFloat($(this).html());
                            });
                          $('#total_sum').html(total_amount.toFixed(2) + ' e');
                          $delivery = parseFloat($("input[name='shipping_method']:checked").data('value')) + parseFloat($("input[name='payment_method']:checked").data('value'));
                          $('#pristatymo_kaina_selected').html($delivery + " e");
                          var totalPrice = total_amount + parseFloat($delivery);
                          totalPrice = totalPrice.toFixed(2);
                          $('#visu_so_pvm').html(totalPrice + " e");
                        });
                    }
                }
            );
        }
    });
    $(document).ready(function() {

        var navListItems = $('ul.setup-panel li a'),
            allWells = $('.setup-content');
        allWells.hide();
        navListItems.click(function(e)
            {
                e.preventDefault();

                var $target = $($(this).attr('href')),
                    $item = $(this).closest('li');
                if (!$item.hasClass('disabled')) {
                    navListItems.closest('li').removeClass('active');
                    $item.addClass('active');
                    allWells.hide();
                    $target.show();
                }
            }
        );
        $('ul.setup-panel li.active a').trigger('click');
        var colorBoxCon = $('.colorFabricbox');
    });

    $("#step-1").css("display", "block !important");
    $("#step-2").css("display", "none !important");
    $("#step-3").css("display", "none !important");
	
	$("#step-1-select").html("<dddd></dddd>");
	$("#step-4-select").html("");
	$("#step-5-select").html("");  
	
    $("body").on('change', '#selectMaterial', function(event) {
        event.preventDefault();
        var val = $(this).val();
        //var ok = val.replace(/\s/g,'-');
        //$('.colorFabricbox').hide();
        //$("#"+ok).show();
        //document.getElementById('MEDŽIAGŲ-PASIRINKIMAS').innerHTML = this.options[this.options.selectedIndex].innerText.trim();
    });

    function showmechanismhover(showhide, mech){
        if(showhide == 'show') {
            $('.mechanismdisplayfull').html('<img src="mechanism/'+mech+'.jpg">');
        }
        else {
            $('.mechanismdisplayfull').html('');
        }
    }
    /* For handle / mechanism */
    $('#holder').on('change', function(){
            var mech = $(this).val();
            if(mech == '') {
                $('#mechanismdisplay').html('');
            }
            else {
                $('#mechanismdisplay').html('<img class="mechanismthumb" onmouseout="showmechanismhover(\'hide\',\''+mech+'\')" onmouseover="showmechanismhover(\'show\',\''+mech+'\')" src="mechanism/thumb_'+ mech +'.jpg"><div class="mechanismdisplayfull"></div>');
            }
        }
    );
    
    $('#city').on('change', function(){
            var address = $('#address').val();
            var city = $(this).val();
            if(address != "" && city != "") {
                $('#postcode').val("");
                var temp = $('#div-postcode').html();
                $('#div-postcode').html("<div style='margin-top: 15px'><img src='./ajax-loader.gif'> ieškoma pašto kodo..</div>")
                var url = 'https://postit.lt/data/v2/?city=' + city + '&address=' + address + '&key=hCxwilcAnlskxdspzD3S';
                $.ajax({
                    'url' : url,
                    'type' : 'GET',
                    'success' : function(data){
                        $('#div-postcode').html(temp);
                        if(data.data.length > 0) {
                            $('#postcode').val(data.data[0].post_code);
                        } else {
                            $('#postcode').val("");
                        }
                    }
                });
            }
        }
    );
    
    function getPostCode() {
        var address = $('#address').val();
        var city = $('#city').val();
        if(address != "" && city != "") {
                $('#postcode').val("");
                var temp = $('#div-postcode').html();
                $('#div-postcode').html("<div style='margin-top: 15px'><img src='./ajax-loader.gif'> ieškoma pašto kodo..</div>")
                var url = 'https://postit.lt/data/v2/?city=' + city + '&address=' + address + '&key=hCxwilcAnlskxdspzD3S';
                $.ajax({
                    'url' : url,
                    'type' : 'GET',
                    'success' : function(data){
                        $('#div-postcode').html(temp);
                        if(data.data.length > 0) {
                            $('#postcode').val(data.data[0].post_code);
                        } else {
                            $('#postcode').val("");
                        }
                    }
                });
            }
    }

    function showmechanismhover(showhide, mech){
        if(showhide == 'show') {
            $('.mechanismdisplayfull').html('<img src="mechanism/'+mech+'.jpg">');
        }
        else {
            $('.mechanismdisplayfull').html('');
        }
    }

    function showchkchanismhover(showhide,val,step)
    {
        //alert(step);
        //exit;
        if(showhide = 'show')
        {
            if(val == 'White')
            {
                //alert(step);
                $('.showfullcheck_'+step+'').show();
                $('.showfullcheck_'+step+'').html('<img src="materials/mechanism/mechanizmo_spalva_50.jpg" style="height:100px;width:200px;">');
            }
            if(val == '1 Brown')
            {
                //alert(step);
                $('.showfullcheck_'+step+'').show();
                $('.showfullcheck_'+step+'').html('<img src="materials/mechanism/mechanizmo_spalva_79.jpg" style="height:100px;width:200px;">');
            }
            if(val == '48 Goldfish')
            {
                //alert(step);
                $('.showfullcheck_'+step+'').show();
                $('.showfullcheck_'+step+'').html('<img src="materials/mechanism/mechanizmo_spalva_48.jpg" style="height:100px;width:200px;">');
            }

            if(val == '22 Redwood')
            {
                //alert(step);
                $('.showfullcheck_'+step+'').show();
                $('.showfullcheck_'+step+'').html('<img src="materials/mechanism/mechanizmo_spalva_22.jpg" style="height:200px;width:200px;">' );
            }

            if(val == '11 Black Decor')
            {
                //alert(step);
                $('.showfullcheck_'+step+'').show();
                $('.showfullcheck_'+step+'').html('<img src="materials/mechanism/mechanizmo_spalva_11.jpg" style="height:100px;width:200px;">');
            }
        }
        else
        {
            $('.showfullcheck_'+step+'').hide('');
        }
    }

    function remprev_mech(step){
        $('.showfullcheck_'+step+'').hide();
    }

    function showfabrichover()
    {
        //alert('yoo');

    }

    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
        modal.style.display = "none";
    }
    function openFabricModal(){
        modal.style.display = "block";
        $.get('config/getallfabrics.php',function(data){
                $('#modal-body').html(data);
            }
        );
    }
    function openmechanismModal(){
        modal.style.display = "block";
        $.get('config/mechanism.php',function(data){
                $('#modal-body').html(data);
            }
        );
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    $("#additional_choices").on('change',function(){
        $("#additional_option_td").html(this.value);
        if(this.value == 'Automatinis valdymas')
        {
            // $("#manual_control").hide()
            $('#manual_control').children().filter(':not(#kreiptions)').hide();
            $(".classic_option_tr").hide()

            $("#automatic_control").show()
            $(".automatic_option_tr").show()

        }
        else
        {
            $("#automatic_control").hide()
            $(".automatic_option_tr").hide()

            $("#manual_control").children().show()
            $(".classic_option_tr").show()
        }
    })

    function changeQuantity(value)
    {
        $("#quantity_tr").html(value);
    }
    function changeNotes(value)
    {
        $("#notes_tr").html(value);
    }

    function showoptions(val) {

        if(val=='Balta (1)'){
            $("#kreiptions").show();
            $("#kreoption_guiding_td").show();
        }else{
            $("#kreoption_guiding_td").hide();
            $("#kreiptions").hide();
        }

        $("#spalva_option_td").html(val);
    }
    $(function () {
        $('[data-toggle="popover"]').popover()
    })

    var rad = "";

    $(document).ready(function(){
        setTimeout(function(){
            $(document).on("click",".thumb-images", function(){ 
                /*var colorFabricInputId = $(this).parent().prev().attr("id");
                if(colorFabricInputId.indexOf("colorwicml") == -1) {
                    var strarr = colorFabricInputId.split("colormwicml")
                    var newId = "colorwicml" + strarr[1];
                    $("#" +newId).attr("checked", "checked")
                    $("#" +colorFabricInputId).attr("checked", "checked")
                    $("#viewAllModal").hide();
                    console.log(newId)
                    console.log(colorFabricInputId)
                    console.log($("#" +newId).attr("checked"))
                    console.log($("#" + colorFabricInputId).attr("checked"))
                    //alert("modal")
                } else {
                    var strarr = colorFabricInputId.split("colorwicml")
                    var newId = "colormwicml" + strarr[1];
                    $("#" +newId).attr("checked", "checked")
                    $("#" +colorFabricInputId).attr("checked", "checked")
                    console.log(newId)
                    console.log(colorFabricInputId)
                    console.log($("#" +newId).attr("checked"))
                    console.log($("#" + colorFabricInputId).attr("checked"))
                    //alert("screen")
                }*/

                var discountPercentage = $(this).next().next().next().html();
                allowPreview = $(this).next().next().val();
                $(".parent#window-image #window-append").remove();
                $(".parent#window-image #window-append2").remove();
                $(".parent#window-image #window-discount").remove();
                $("#window-discount").html(discountPercentage? discountPercentage: "")
                colorFabricFinal = $(this).attr('src').toString();
                colorFabricFinal = colorFabricFinal.split("/");
                colorFabricFinal = colorFabricFinal[colorFabricFinal.length-1].replace("thumbs_","").replace("-","").split(".")[0];
                console.log(colorFabricFinal);
                $("#width").trigger('blur');
                if(allowPreview == "1") {  
				
					imgname = $(this).attr('id');
					$("#window-append").html('<img src="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/windows/'+imgname+'.jpg" style="width:100%;">');
					$("#window-append2").html('<img src="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/windows/'+imgname+'.jpg" style="width:100%;">'); 
					$("#window-image").append($("#window-append-div").html());
                }
            }); 
        }, 1000);
    });


</script> 
<div id="window-append-div"  style="display:none;">
    <!--<div id="window-discount" class='text'></div>-->
    <div id="window-append">
        &nbsp;
    </div>
	<div id="window-append2">
        &nbsp; 
    </div>
</div>

 

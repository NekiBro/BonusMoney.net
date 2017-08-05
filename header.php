<?
include 'settings.php';
$ref = 0;
if (isset($_GET['r'])) {
if (isset($_SESSION['ref'])) {
$ref = $_SESSION['ref'];
}else{
$ref = intval($_GET['r']);
$_SESSION['ref'] = $ref;
}
}
$site_name = mysqli_fetch_array(mysqli_query($db, "select value from settings where `set` = 'site_name'"));
if (isset($_SESSION['user']) && $_SESSION['user'] == "1") {echo'';}else{
$echo = '';
if (isset($_SERVER["HTTP_REFERER"])) {
if (substr_count($_SERVER["HTTP_REFERER"],"redsurf.ru") > 0 || substr_count($_SERVER["HTTP_REFERER"],"rubserf.ru") > 0 || substr_count($_SERVER["HTTP_REFERER"],"profitcentr.com") > 0 || substr_count($_SERVER["HTTP_REFERER"],"www.seo-honest.ru") > 0 || substr_count($_SERVER["HTTP_REFERER"],"infohit.cf") > 0 || substr_count($_SERVER["HTTP_REFERER"],"wmrok.com") > 0 || substr_count($_SERVER["HTTP_REFERER"],"bonusio.ru") > 0 || substr_count($_SERVER["HTTP_REFERER"],"seo-fast.ru") > 0 || substr_count($_SERVER["HTTP_REFERER"],"www.seosprint.net") > 0 || substr_count($_SERVER["HTTP_REFERER"],"socpublic.com") > 0) {echo '';}else{ echo $echo; }
}else{
echo $echo;
}
}
$vs = mysqli_fetch_row(mysqli_query($db, "select sum(`sum`) from sp"));
$s = round($vs[0], 2);
?>
<html>
<head>
<meta charset="utf-8">
<title><?=$site_name['value']; ?></title>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">

<!-- Mirrored from vekterra.ru/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Dec 2016 22:41:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Продвинутый Сервис Раздачи Бонусов на Payeer</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
<meta http-equiv="pragma" content="no-cache"/>
<meta name="robots" content="all">
<meta name="viewport" content="width=device-width">
<meta name="MobileOptimized" content="320"/>
<meta name="HandheldFriendly" content="true"/>
<meta http-equiv="pragma" content="no-cache"/>
<meta name="description" content="Раздача бонусов на PAYEER. Бонусы каждые 30 минут. Выгодная реферальная программа." />
<meta name="keywords" content="бонусник, на PAYEER, раздача, кран, бонусы, получить бонус, забрать бонус, реклама сайтов, бонусы PAYEER,бесплатный бонус, заработок, вывод на payeer, рублевый бонус, Payeer бонус, раздатчик payeer" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/thumbshot.js"></script>
<script type="text/javascript" src="js/jqueryi.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/hints.js"></script>
<script type="text/javascript" src="js/libs.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src='../www.google.com/recaptcha/api.js'></script>
<link href="style/css.css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="style/base.css" type="text/css" />
<link rel="stylesheet" href="style/main.css" type="text/css" />
<link type="text/css" rel="stylesheet" href="style/reset.css" />
<link type="text/css" rel="stylesheet" href="style/style.css" />
<link type="text/css" rel="stylesheet" href="style/rhinoslider-1.05.css" />
<script type="text/javascript" src="/ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="js/slider/rhinoslider-1.05.min.js"></script>
<script type="text/javascript" src="js/slider/mousewheel.js"></script>
<script type="text/javascript" src="js/slider/easing.js"></script>
<script type="text/javascript" src="js/hint.html"></script>
<link href="style/main.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
			$(document).ready(function() {
				$('#slider').rhinoslider({
					effectTime: 3500,
					easing: 'easeOutBounce',
					autoPlay: true,
					slideNextDirection: 'toTop'
				});
			});
		</script>
<style type="text/css">
#slider {
width:214px;
height:314px;
				
/*IE bugfix*/
padding:0;
margin:0;
}
			
#slider li { list-style:none; }
			
#page {
width:214px;
margin:0px auto;
}
</style
<!-- noindex–-->	
 <script type="text/javascript" src="/uguide.ru/js/script/snow1.js"></script>
<!--/ noindex–-->
<style>
html {overflow-x: hidden}
div { height: "100%"; }
</style>
</head>
<body>
<!--noindex–-->
<div id="workman-top" style="height:120px;border:none">  
<br /><div class="center"><table style=";border:none">
<tr>
<td>
<div class="bannceppanel"><div id="slotlinks_66"></div><script src="http://www.uppro.ru/bancode.php?id=66" async></script></div>
</td>
<td> 
<div class="bannceppanel"><div id="slotlinks_65"></div><script src="http://www.uppro.ru/bancode.php?id=65" async></script>
<td>
<div class="bannceppanel"><div id="slotlinks_67"></div><script src="http://www.uppro.ru/bancode.php?id=67" async></script></div>
</td>
</tr>
</table>
 </div>  	
</div>
<script type="text/javascript" src="/www.brigada31.ru/Skripts/vydvizhnaja_panel_verkhnjaja.js"></script>
<!--/ noindex–-->
<div class="wrapper">
<div id="blink6">
  <div id="content-bg">
    <div id="header">      
      <div class="clear"></div>
      <div class="h_bottom-bg">
      <div class="h_social">				
<div title="Мы выплатили" class="balance_payed">
<strong><?
echo '<div class="balance_balance"><span class="text_4"></strong>'.$s.'руб.</span></div>';
?>		  
</div>
</div>
      <div class="h_menu">
        <ul>
<li><a href="/" title="Главная страница" ><div id="home"><img src="img/home.png" style="width:60px;height:55px;border:none" alt="Главная страница"/></div></a></li>
<li><a href="/" class="button1" title="Обратная связь"><strong>Своё</strong></a></li>
<li><a href="/t" class="button1" title="Статистика выплат"><strong>Своё</strong></a></li>
<li><a href="/" class="button1" title="Реферальная программа"><strong>Своё</strong></a></a></li>
<li><a href="/" class="button1" title="Правила проекта"><strong>Своё</strong></a></li>
<li><a href="/" class="button1" title="Чат проекта"><strong>Своё</strong></a></li>
<li><div id="/"><a href="/rotator" class="button3" title="Получить ещё БОНУСЫ"><strong>Ротатор</strong></a></div></li>
        </ul>
      </div>	  	  
      </div>
<!--noindex–-->
      <div class="h_banner-blocks">
<div class="bannceppanel"><div id="slotlinks_68"></div><script src="http://www.uppro.ru/bancode.php?id=68" async></script></div>	
						</div>
	  
      <div class="h_banner-block">
<div class="bannceppanel"><div id="slotlinks_69"></div><script src="http://www.uppro.ru/bancode.php?id=69" async></script></div>	
						</div> 

 <div class="fmenus">
 
 </div>	
                <div class="hotbox">
					 <!-- ГЛАВНЫЙ СЛАЙДЕР -->
                    <div class="nnews">
                      <div class="dcont">
						<div class="bannceppanel">
<div id="slotlinks_80"></div><script src="http://www.uppro.ru/bancode.php?id=80" async></script>						
						</div>
                        </div>
                    </div>
                    <!-- /ГЛАВНЫЙ СЛАЙДЕР -->
					 <!-- ГЛАВНЫЙ СЛАЙДЕР -->
                    <div class="reviews">
                      <div class="dcont">						  
						<div class="bannceppanel">						
<div id="slotlinks_81"></div><script src="http://www.uppro.ru/bancode.php?id=81" async></script>		
						</div>
                        </div>
                    </div>
                    <!-- /ГЛАВНЫЙ СЛАЙДЕР -->
					 <!-- ГЛАВНЫЙ СЛАЙДЕР -->
                    <div class="haks">
                      <div class="dcont">						  
						<div class="bannceppanel">							
<div id="slotlinks_82"></div><script src="http://www.uppro.ru/bancode.php?id=82" async></script>			
							</div>
                        </div>
                    </div>
                    <!-- /ГЛАВНЫЙ СЛАЙДЕР -->
					 <!-- ГЛАВНЫЙ СЛАЙДЕР -->
                    <div class="dle">
                      <div class="dcont">
						   <div class="bannceppanel">							   
<div id="slotlinks_83"></div><script src="http://www.uppro.ru/bancode.php?id=83" async></script>			   
							</div>
                        </div>
                    </div>
                    <!-- /ГЛАВНЫЙ СЛАЙДЕР -->
 <div class="fmenus">
 </div>	
<!--/ noindex–-->
<!-- Контент -->
<div class="container">
<div class="ctop">
<div class="cbtm">
</table>
<!-- Левая колонка -->
﻿<div class="leftcol">
<!-- Блок -->
<div class="bwblock topnews">
<div class="dbg">
<div class="dtop">
<div class="dbtm">
<div style="padding-top: 10px; margin-right: 6px; color: white; font-size: 16px; "><strong>Посетители</strong></div>
<div class="dcont">
<div class="center"><div class="bannceppanel">
<script type="text/javascript" src="//rc.revolvermaps.com/0/0/6.js?i=2sgxtfxhjk0&amp;m=7&amp;s=190&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
</div></div>                     
</div>
</div>
</div>
</div>
</div>
<!-- /Блок -->
<!-- Блок -->
<div class="bwblock topnews">
<div class="dbg">
<div class="dtop">
<div class="dbtm">
<div style="padding-top: 10px; margin-right: 6px; color: white; font-size: 16px; "><strong>Витрина ссылок</strong></div>
<div class="dcont">
<div class="center"><div class="sld">		
<a href="http://www.uppro.ru/link.php?id=86" target="_blank"><span class="l1"><strong>Купить здесь</strong></span> <span class="text_green"><span class="l2">ссылку</span></span><span class="text_violet"> <span class="l3">всего за</span></span><span class="text_red4"><span class="l4">2</span></span><span class="l5">рубля</span></a>
</div></div>
<!-- noindex --> 
<div class="center"><div id="slotlinks_86" style="margin: 10px 0;"></div><script src="http://www.uppro.ru/lincode.php?id=86" async></script><br /><a href="http://www.uppro.ru/?ref=1" target="_blank"><strong>Поставить на свой сайт</strong></a></div>
<!--/ noindex --> 
<br />		
</div>
</div>
</div>
</div>
</div>
<!-- /Блок -->	
<!-- Блок -->
<div class="bwblock topnews">
<div class="dbg">
<div class="dtop">
<div class="dbtm">
<div style="padding-top: 10px; margin-right: 6px; color: white; font-size: 16px; "><strong>Баннеры 200х300</strong></div>
<div class="dcont">
<div class="center"><div class="bannceppanel">
<iframe src="slider200x300.html" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" style="width:196px;height:300px;border:none"></iframe>
</div></div>                     
</div>
</div>
</div>
</div>
</div>
<!-- /Блок -->
<!-- Блок -->
<div class="bwblock topnews">
<div class="dbg">
<div class="dtop">
<div class="dbtm">
<div style="padding-top: 10px; margin-right: 6px; color: white; font-size: 16px; "><strong>Баннеры 200х300</strong></div>
<div class="dcont">
<div class="center"><div class="bannceppanel">
<iframe src="slider200x300-1.php" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" style="width:196px;height:300px;border:none"></iframe>
</div></div>                     
</div>
</div>
</div>
</div>
</div>
<!-- /Блок -->
<!-- Блок -->
<div class="bwblock topnews">
<div class="dbg">
<div class="dtop">
<div class="dbtm">
<div style="padding-top: 10px; margin-right: 6px; color: white; font-size: 16px; "><strong>Баннеры 200х300</strong></div>
<div class="dcont">
<div class="center"><div class="bannceppanel">
<iframe src="slider200x300-2.php" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" style="width:196px;height:300px;border:none"></iframe>
</div></div>                         
</div>
</div>
</div>
</div>
</div>
<!-- /Блок -->
<!-- Блок -->
<div class="bwblock topnews">
<div class="dbg">
<div class="dtop">
<div class="dbtm">
<div style="padding-top: 10px; margin-right: 6px; color: white; font-size: 16px; "><strong>Баннеры 200х300</strong></div>
<div class="dcont">
<div class="center"><div class="bannceppanel">
<iframe src="slider200x300-3.php" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" style="width:196px;height:300px;border:none"></iframe>
</div></div>   
</div>
</div>
</div>
</div>
</div>
<!-- /Блок -->
</div><!-- /Левая колонка -->
<!-- Правая колонка -->
﻿<div class="rightcol">
<!-- Блок -->
<div class="bwblock topnews">
<div class="dbg">
<div class="dtop">
<div class="dbtm">
<div style="padding-top: 10px; margin-right: 6px; color: white; font-size: 16px; "><strong>Календарь</strong></div>
<div class="dcont">
<div class="center"><div class="bannceppanel">
<iframe src="http://delaisait.ucoz.ru/calendar/2013/anim1.html" frameborder="0" height="190" width="190"></iframe>
</div></div>                     
</div>
</div>
</div>
</div>
</div>
<!-- /Блок -->
<!-- Блок -->
<div class="bwblock topnews">
<div class="dbg">
<div class="dtop">
<div class="dbtm">
<div style="padding-top: 10px; margin-right: 6px; color: white; font-size: 16px; "><strong>Витрина ссылок</strong></div>
<div class="dcont">
<div class="center"><div class="sld">		
<a href="http://www.uppro.ru/link.php?id=84" target="_blank"><span class="l1"><strong>Купить здесь</strong></span> <span class="text_green"><span class="l2">ссылку</span></span><span class="text_violet"> <span class="l3">всего за</span></span><span class="text_red4"><span class="l4">2</span></span><span class="l5">рубля</span></a>
</div></div>
<!-- noindex --> 
<div class="center"><div id="slotlinks_84" style="margin: 10px 0;"></div><script src="http://www.uppro.ru/lincode.php?id=84" async></script><br /><a href="http://www.uppro.ru/?ref=1" target="_blank"><strong>Поставить на свой сайт</strong></a></div>
<!--/ noindex --> 
<br />		
</div>
</div>
</div>
</div>
</div>
<!-- /Блок -->	
<!-- Блок -->
<div class="bwblock topnews">
<div class="dbg">
<div class="dtop">
<div class="dbtm">
<div style="padding-top: 10px; margin-right: 6px; color: white; font-size: 16px; "><strong>Баннеры 200х300</strong></div>
<div class="dcont">
<div class="center"><div class="bannceppanel">
<iframe src="slider200x300-4.php" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" style="width:196px;height:300px;border:none"></iframe>
</div></div>                    
</div>
</div>
</div>
</div>
</div>
<!-- Блок -->
<!-- Блок -->
<div class="bwblock topnews">
<div class="dbg">
<div class="dtop">
<div class="dbtm">
<div style="padding-top: 10px; margin-right: 6px; color: white; font-size: 16px; "><strong>Баннеры 200х300</strong></div>
<div class="dcont">
<div class="center"><div class="bannceppanel">
<iframe src="slider200x300-5.php" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" style="width:196px;height:300px;border:none"></iframe>
</div></div>                    
</div>
</div>
</div>
</div>
</div>
<!-- Блок -->
<!-- Блок -->
<div class="bwblock topnews">
<div class="dbg">
<div class="dtop">
<div class="dbtm">
<div style="padding-top: 10px; margin-right: 6px; color: white; font-size: 16px; "><strong>Баннеры 200х300</strong></div>
<div class="dcont">
<div class="center"><div class="bannceppanel">
<iframe src="slider200x300-6.php" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" style="width:196px;height:300px;border:none"></iframe>
</div></div>                         
</div>
</div>
</div>
</div>
</div>
<!-- Блок -->
<!-- Блок -->
<div class="bwblock topnews">
<div class="dbg">
<div class="dtop">
<div class="dbtm">
<div style="padding-top: 10px; margin-right: 6px; color: white; font-size: 16px; "><strong>Баннеры 200х300</strong></div>
<div class="dcont">
<div class="center"><div class="bannceppanel">
<iframe src="slider200x300-7.php" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" style="width:196px;height:300px;border:none"></iframe>
</div></div>                    
</div>
</div>
</div>
</div>
</div>
<!-- Блок -->
</div><!-- /Правая колонка -->
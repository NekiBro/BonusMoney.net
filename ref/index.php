<?php
include '../header.php';
?>
		<div style="background-color: #f0f0f0;padding: 5px;margin-top: 10px;">
		<style>
		table {
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 14px;
  background: white;
  width: 100%;
  border-collapse: collapse;
  text-align: left;
}
th {
  font-weight: normal;
  color: #039;
  border-bottom: 2px solid #6678b1;
  padding: 10px 8px;
}
tr:hover td{
  color: #6699ff;
}
td {
  color: #669;
  border-top: 1px solid #e8edff;
  padding: 10px 15px;
}
tr:hover td{
  background: #e8edff;
}
</style>
		<?if (isset($_SESSION['user'])) {?>
<center>
<div id="block_b_1">
<b>HTML код баннера с Вашей реф. ссылкой</b>
<br>
<div style='    width: 459px;
    font-size: 12px;
    height: 45px;
    border: 1px solid #dae2e6;
    padding: 4px;
    margin-bottom: -10px;'>
&lt;a href="<?$id_user = intval($_SESSION['user']); $user_row = mysqli_fetch_array(mysqli_query($db, "select * from users where id = '$id_user'"));  echo 'http://'.$_SERVER['SERVER_NAME'].'/?r='.$user_row['id'].''?>" target="_blank"&gt;&lt;img src="<?echo 'http://'.$_SERVER['SERVER_NAME'].'/'?>img/banner-arhip-468-1.gif" width="468" height="60"&gt;&lt;/a&gt;
</div><br />
<!--b>Ссылка на баннер (173кб)</b>
<div style='    width: 459px;
    font-size: 12px;
    height: 15px;
    border: 1px solid #dae2e6;
    padding: 4px;
    margin-bottom: -10px;'><?//echo 'http://'.$_SERVER['SERVER_NAME'].'/'?>img/banner-arhip-468-1.gif</div-->
<br>
<img src="<?echo 'http://'.$_SERVER['SERVER_NAME'].'/'?>img/banner-arhip-468-1.gif">
<br />
<b>Ссылка на баннер (127кб)</b>
<div style='    width: 459px;
    font-size: 12px;
    height: 15px;
    border: 1px solid #dae2e6;
    padding: 4px;
    margin-bottom: -10px;'><?echo 'http://'.$_SERVER['SERVER_NAME'].'/'?>img/banner-arhip-468-1.gif</div>
<br>
</div>
</center>
<br>
		<table>
		<tr>
				<th>ID</th><th>PAYEER</th><th>Кол-во бонусов</th><th>Сумма</th>
			</tr>
		<?
if (isset($_SESSION['user'])) { 
$id_user = intval($_SESSION['user']); 
$q_re = mysqli_query($db, "select * from users where referer = '$id_user'");
while ($user_row = mysqli_fetch_array($q_re)) {
echo '<tr> 
<td>'.$user_row['id'].'</td><td>'.$user_row['payeer'].'</td><td>'.$user_row['kolv'].'</td><td>'.$user_row['sum_p'].'</td> 
</tr>'; 
}}
		?>
</table>

		</div>
<?}else{
				echo '<div><div class="error">Ошибка, для просмотра авторизируйтесь или зарегистрируйтесь!</div></div>';
			}?>
<?
include '../footer.php';
?>
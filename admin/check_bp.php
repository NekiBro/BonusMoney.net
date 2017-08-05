Баланс: <?php
require_once('../cpayeer.php');
$accountNumber = 'P5339300'; 
$apiId = '111';
$apiKey = '111';
$payeer = new CPayeer($accountNumber, $apiId, $apiKey);
if ($payeer->isAuth())
{
	$arBalance = $payeer->getBalance();
	echo '<pre>'.print_r($arBalance, true).'</pre>';
}
else
{
	echo '<pre>'.print_r($payeer->getErrors(), true).'</pre>';
}
?>
<? 
require '../header.php';

?>

		<?if (isset($_SESSION['user'])) {?>
<?
$res=mysqli_query($db, "select * from tb_comp order by id asc");
while($row=mysqli_fetch_assoc($res))
{
	$t=time();
	$sd=strtotime($row["startdate"]);
	$ed=strtotime($row["enddate"]);
	$idk=$row["id"];
	$pris1=$row["pris1value"];
	$pris2=$row["pris2value"];
	$pris3=$row["pris3value"];
	$pris4=$row["pris4value"];
	$pris5=$row["pris5value"];
	$pris1t='руб.';
	$pris2t='руб.';
	$pris3t='руб.';
	$pris4t='руб.';
	$pris5t='руб.';
	$param=$row["param"];
        if($t>$sd && $t<$ed)
	{
		echo "
<table class='reyt' width='100%' border='0' cellpadding='0' cellspacing='0'>
<thead><tr>
<th colspan='5' align='center'><b>Название: ".$row["name"]."</th>
</tr></thead>
<tr>
<td colspan='5'>
<div class='index_text'>
		<b>Описание:</b> ".$row["descr"]." 
</div>
</td>
</tr>

<tr>
<td colspan='5' align='center'>";
if ($pris1 != 0) { echo "&nbsp;&nbsp;&nbsp;1 место - <font color='red'>".$pris1."</font>".$pris1t; }
if ($pris2 != 0) { echo "&nbsp;&nbsp;&nbsp;2 место - <font color='red'>".$pris2."</font>".$pris2t; }
if ($pris3 != 0) { echo "&nbsp;&nbsp;&nbsp;3 место - <font color='red'>".$pris3."</font> ".$pris3t;}
if ($pris4 != 0) { echo "&nbsp;&nbsp;&nbsp;4 место - <font color='red'>".$pris4."</font> ".$pris4t;}
if ($pris5 != 0) { echo "&nbsp;&nbsp;&nbsp;5 место - <font color='red'>".$pris5."</font> ".$pris5t;}
echo "</td>
<tr>
<td colspan='5' align='center'>
Период проведения конкурса: с ".$row["startdate"]." до ".$row["enddate"]."</td>
</tr>
<tr>
<td bgcolor='#e6edf4' align='center' width='33%'>Место</td>
<td colspan='3' bgcolor='#e6edf4' align='center' width='33%'>Пользователь</td>
<td bgcolor='#e6edf4' align='center' width='33%'>Очки</td>
</tr>
";

$res1=mysqli_query($db, "select * from tb_compdata where idk='$idk' order by resvalue desc limit 10");
		$place=0;
		while($row1=mysqli_fetch_assoc($res1))
		{
			$place=$place+1;

echo "
<tbody>
<tr>
<td class='value'>$place</font></td>
<td colspan='3' class='value' align='center'>".$row1["user"]."</td>
<td class='value'>".$row1["resvalue"]."</td>
</tr></tbody>
";
		}

echo "</table><br>";

	}
}

?>

<?
$comp=mysqli_query($db, "select * from comp_ref order by id asc");
while($row1=mysqli_fetch_assoc($comp))
{
	$t1=time();
	$sd1=strtotime($row1["startdate"]);
	$ed1=strtotime($row1["enddate"]);
	$idk1=$row1["id"];
	$pris11=$row1["pris1value"];
	$pris22=$row1["pris2value"];
	$pris33=$row1["pris3value"];
	$pris44=$row1["pris4value"];
	$pris55=$row1["pris5value"];
	$pris1t1='руб.';
	$pris2t2='руб.';
	$pris3t3='руб.';
	$pris4t4='руб.';
	$pris5t5='руб.';
	$param1=$row1["param"];
        if($t1>$sd1 && $t1<$ed1)
	{
		echo "
<table class='reyt' width='100%' border='0' cellpadding='0' cellspacing='0'>
<thead><tr>
<th colspan='5' align='center'><b>Название: ".$row1["name"]."</th>
</tr></thead>
<tr>
<td colspan='5'>
<div class='index_text'>
		<b>Описание:</b> ".$row1["descr"]." 
</div>
</td>
</tr>

<tr>
<td colspan='5' align='center'>";
if ($pris11 != 0) { echo "&nbsp;&nbsp;&nbsp;1 место - <font color='red'>".$pris11."</font>".$pris1t1; }
if ($pris22 != 0) { echo "&nbsp;&nbsp;&nbsp;2 место - <font color='red'>".$pris22."</font>".$pris2t2; }
if ($pris33 != 0) { echo "&nbsp;&nbsp;&nbsp;3 место - <font color='red'>".$pris33."</font> ".$pris3t3;}
if ($pris44 != 0) { echo "&nbsp;&nbsp;&nbsp;4 место - <font color='red'>".$pris44."</font> ".$pris4t4;}
if ($pris55 != 0) { echo "&nbsp;&nbsp;&nbsp;5 место - <font color='red'>".$pris55."</font> ".$pris5t5;}
echo "</td>
<tr>
<td colspan='5' align='center'>
Период проведения конкурса: с ".$row1["startdate"]." до ".$row1["enddate"]."</td>
</tr>
<tr>
<td bgcolor='#e6edf4' align='center' width='33%'>Место</td>
<td colspan='3' bgcolor='#e6edf4' align='center' width='33%'>Пользователь</td>
<td bgcolor='#e6edf4' align='center' width='33%'>Очки</td>
</tr>
";

$res1=mysqli_query($db, "select * from compdata_ref where idk='$idk1' order by resvalue desc limit 10");
		$place1=0;
		while($row1=mysqli_fetch_assoc($res1))
		{
			$place1=$place1+1;

echo "
<tbody>
<tr>
<td class='value'>$place1</font></td>
<td colspan='3' class='value' align='center'>".$row1["kosh"]."</td>
<td class='value'>".$row1["resvalue"]."</td>
</tr></tbody>
";
		}

echo "</table>
<br>
";

	}
	echo "<div style='padding:10px 0px;background: #e6edf4;border: 1px solid #ccc;'>Для получения приза нужно отписаться в обсуждении <a style='text-decoration: underline;color: #0000FF;' href='http://vk.com/' title='Официальная группа.'>в группе вк</a>!</div>";
}

}else{
				echo '<div><div class="error">Ошибка, для просмотра авторизируйтесь или зарегистрируйтесь!</div></div>';
			}?>

<? require '../footer.php';?>

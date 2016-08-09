<?php
	session_start();
	include 'bradapi.php';	// $link

	if (!isset($_SESSION['key'])) header('Location: 1member.php');

	if (isset($_REQUEST['delno'])){
		// 將要刪除資料
		$delno = $_REQUEST['delno'];
		$sql = "DELETE FROM product WHERE product_id={$delno}";
		mysqli_query($link, $sql);
	}
?>
<script type="text/javascript" src="jquery-3.1.0.min.js"></script>
<script>
	function test(which){
		var ret = confirm('Delete ' +  which + '?');
		return ret;
	}
	function buy(which){
		var ret = confirm('Buy ' +  which + '?');
		return ret;
	}

</script>

<h1>My shop</h1>
<hr />
<h3>商城</h3>
<h4><a href="">購物車</a>	<a href="#shirt">		衣服</a>	<a href="#plants">		褲子</a>	<a href="#shoes">		鞋子</a>	</h4>
<table border='1' width='80%'>
	<tr>
		<th><a name="shirt"/>Name</th>
		<th>Size</th>
		<th>Amount</th>
		<!--<th>Price</th>-->
		<!--<th>Quantity</th>-->
		<!--<th>Total Price</th>-->
		<!--<th>Buy</th>-->
		<!--<th>Del</th>-->
		<!--<th>Edit</th>-->
	</tr>

	<?php
	//	group_id=1 為衣服的id  到 商品種類 將衣服撈出
	$sql = 'SELECT * FROM product_group WHERE group_id = 1';
	$rs = mysqli_query($link, $sql);
	$i=1;// ctrl size
	$j=1;
	//	再到 商品 撈出是衣服的所有商品
	while( $row = mysqli_fetch_array($rs)) {
		$sql2 = "SELECT * FROM product WHERE product_id ={$row['product_id']}";
		$rs2 = mysqli_query($link, $sql2);
		while( $row = mysqli_fetch_array($rs2) ){
			echo '<tr>';
			echo "<td>{$row['product_name']}</td>";
			$size = "getsize".$i; //div 名稱
			$ss = "ss".$j;	//select 名稱
			$total = "total".$i; 
			// 不同size 執行不同 php 語法 如果新增商品 需增加 script內的 getsize$i function  以及 PHP搜尋語法
			echo "<td><select id='$ss' >	<option value=\"\">Select a size:</option>	<option value=\"1\">S</option>	<option value=\"2\">M</option>	<option value=\"3\">L</option></select></td>";
			echo "<td><div id=\"$size\"></div></td>";
			//echo "<td><select  onchange=\"size(this.value)\"> <option value='1'>S</option> <option value='2'>M</option> <option value='3'>L</option> </select></td>";
			/*
			echo "<td>{$row['product_price']}</td>";

			echo"<td>";
			echo "<select onchange=\"$total(this.value)\">  <option value=\"1\">1</option>	<option value=\"2\">2</option>	<option value=\"3\">3</option> <option value=\"4\">4</option></select>";
			echo '</td>';
			echo "<td><div id=\"$total\"></div></td>";
			*/
			$i++;  // ctrl size
			$j++;
			/*echo '<td>';
			echo "<a href=?buyno={$row['product_id']} ";
			echo 'onclick="return buy(';
			echo "'" . $row['product_name'] . "'" . ')">';	//
			echo 'buy';
			echo '</a>';
			echo '</td>';
			*/
			echo '</tr>';
		}
	}
	?>
</table>

<script>

$('#ss1').on('change', function() {
	//1. 獲取當前選中項的 value
	//alert( this.value ); // or $(this).val()

	if(this.value=='1'){
		$.ajax({
			url:'heyjax.php?q1=1',
			type:'GET',
			success:function (data) {
				$("#getsize1").html(data);
				console.log('OK');
			}
		});
	}else if(this.value=='2'){
		$.ajax({
			url:'heyjax.php?q2=2',
			type:'GET',
			success:function (data) {
				$("#getsize1").html(data);
			}
		});
	}else if(this.value=='3'){
		$.ajax({
			url:'heyjax.php?q3=3',
			type:'GET',
			success:function (data) {
				$("#getsize1").html(data);
			}
		});
	}
});
$('#ss2').on('change', function() {
	//1. 獲取當前選中項的 value
	//alert( this.value ); // or $(this).val()

	if(this.value=='1'){
		$.ajax({
			url:'heyjax.php?q2=1',
			type:'GET',
			success:function (data) {
				$("#getsize2").html(data);
			}
		});
	}else if(this.value=='2'){
		$.ajax({
			url:'heyjax.php?q2=2',
			type:'GET',
			success:function (data) {
				$("#getsize2").html(data);
			}
		});
	}else if(this.value=='3'){
		$.ajax({
			url:'heyjax.php?q2=3',
			type:'GET',
			success:function (data) {
				$("#getsize2").html(data);
			}
		});
	}
});
$('#ss3').on('change', function() {
	if(this.value=='1'){
		$.ajax({
			url:'heyjax.php?q3=1',
			type:'GET',
			success:function (data) {
				$("#getsize3").html(data);
			}
		});
	}else if(this.value=='2'){
		$.ajax({
			url:'heyjax.php?q3=2',
			type:'GET',
			success:function (data) {
				$("#getsize3").html(data);
			}
		});
	}else if(this.value=='3'){
		$.ajax({
			url:'heyjax.php?q3=3',
			type:'GET',
			success:function (data) {
				$("#getsize3").html(data);
			}
		});
	}
});
</script>

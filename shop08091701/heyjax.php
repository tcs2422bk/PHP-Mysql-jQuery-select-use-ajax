<?php
include 'bradapi.php';
$q1 = intval($_GET['q1']);
$q2 = intval($_GET['q2']);
$q3 = intval($_GET['q3']);

// 搜尋 ajax table = option 的資料 : 上衣尺寸
if( $q1==1 ) {
    $sql3 = 'SELECT * FROM product_size WHERE product_id = 3 and size = "S" ';
}else if( $q1==2 ) {
    $sql3 = 'SELECT * FROM product_size WHERE product_id = 3 and size = "M" ';
}else if( $q1==3 ) {
    $sql3 = 'SELECT * FROM product_size WHERE product_id = 3 and size = "L" ';
}
if( $q2==1 ) {
    $sql3 = 'SELECT * FROM product_size WHERE product_id = 8 and size = "S" ';
}else if( $q2==2 ) {
    $sql3 = 'SELECT * FROM product_size WHERE product_id = 8 and size = "M" ';
}else if( $q2==3 ) {
    $sql3 = 'SELECT * FROM product_size WHERE product_id = 8 and size = "L" ';
}
if( $q3==1 ) {
    $sql3 = 'SELECT * FROM product_size WHERE product_id = 9 and size = "S" ';
}else if( $q3==2 ) {
    $sql3 = 'SELECT * FROM product_size WHERE product_id = 9 and size = "M" ';
}else if( $q3==3 ) {
    $sql3 = 'SELECT * FROM product_size WHERE product_id = 9 and size = "L" ';
}
$rs3 = mysqli_query($link, $sql3);

/*
echo "<table border='1'>
    <tr>
    <th>Name</th>    
    <th>Age</th>    
    </tr>";
*/
if($row = mysqli_fetch_array($rs3)) {
    echo $row['amount'];
}



//totalprice
//衣服1
if($p1 = intval($_GET['p1'])){
    $sqlp = 'SELECT product_price FROM product WHERE product_id = 3';
    $rsp = mysqli_query($link, $sqlp);

}
if($row = mysqli_fetch_array($rsp))
{
    echo $row['product_price']*$p1 ;
}


//衣服2
if($p2 = intval($_GET['p2'])){
    $sqlp2 = 'SELECT product_price FROM product WHERE product_id = 8';
    $rsp2 = mysqli_query($link, $sqlp2);
}


if($row = mysqli_fetch_array($rsp2))
{
    echo $row['product_price']*$p2 ;
}

//衣服3
if($p3 = intval($_GET['p3'])){
    $sqlp3 = 'SELECT product_price FROM product WHERE product_id = 9';
    $rsp3 = mysqli_query($link, $sqlp3);
}


if($row = mysqli_fetch_array($rsp3))
{
    echo $row['product_price']*$p3 ;

}

?>


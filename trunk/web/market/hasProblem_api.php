<?php 
require_once ("../include/db_info.inc.php");
//require_once("../include/check_post_key.php");
function hasProblem($title){
	$md5=md5($title);
	$sql="select 1 from problem where md5(title)=?";  
	$result=pdo_query( $sql,$md5 );
	$rows_cnt=count($result);				
	return  ($rows_cnt>0 ? "1" : "2" );
}
// if (!(isset($_SESSION[$OJ_NAME.'_'.'administrator']))){
	// echo "<a href='../loginpage.php'>Please Login First!</a>";
	// exit(1);
// 
$title_md5 = "";
if (isset($_POST['title_md5'])) {
	$title_md5 = $_POST['title_md5'];
	echo hasProblem($title_md5);
}
else
	echo "0";
?>


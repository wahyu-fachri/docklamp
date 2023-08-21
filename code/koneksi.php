<?
$cnc=mysqli_connect("mariaDB","root","654321");
$cncdb=mysqli_select_db("perpus", $cnc);
	if(!($cnc && $cncdb)) {
	echo "Not connected to MySQL";
	exit();
	}
?>

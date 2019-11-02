<?php
function OpenCon()
{
$servername='localhost';
$sub=$POST_['sub'];         //1st row
$mid1=$POST_['mid1'];
$mid2=$POST_['mid2'];
$avg=$POST_['avg'];
$lab=$POST_['lab'];
$grade=$POST_['grade'];
$gradep=$POST_['gradep'];
$credit=$POST_['credit'];
$dbname='acper';

$conn=mysqli_connect($servername,$sub,$mid1,$mid2,$avg,$lab,$grade,$gradep,$credit,$dbname) or die("connection failed:%s\n".$conn->error);

return $conn;

}
function CloseCon($conn)
{
	$conn->close();
}

?>

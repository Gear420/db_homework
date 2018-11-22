<?PHP
header("Content-Type: text/html; charset=utf8");
if(!isset($_POST["submit"])){
    exit("错误执行");
}
$student_number=$_POST['number'];
$student_name=$_POST['name'];
$student_sex=$_POST['sex'];
$student_birthdata=$_POST['birthdata'];
$student_class=$_POST['class'];


include('connect.php');//链接数据库
$q="insert into user(sno,clno,sname,ssex,sbirth) values ('$student_number','$student_class','$student_name','$student_sex','$student_birthdata')";
$reslut=mysql_query($q,$con);//执行sql

if (!$reslut){
    die('Error: ' . mysql_error());
}else{
    echo "录入数据成功";
}

mysql_close($con);

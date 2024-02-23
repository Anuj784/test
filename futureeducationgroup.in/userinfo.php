<?php 

$con = mysqli_connect('localhost','root');
if($con){
	echo "conenction successful";
}else{
	echo "No conenction";

}

mysqli_select_db($con, 'futureeducationgroup');

$user = $_POST['user'];
$email = $_POST['email'];
$moblie = $_POST['moblie'];
$comment = $_POST['comment'];

$query = " insert into user info data (user, email, moblie, comment)
values('$user', '$email', '$moblie', '$comment')";

echo "$query";


header('location:');
?>

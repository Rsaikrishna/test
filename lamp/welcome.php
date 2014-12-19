<?php 
$name=$_POST["username"];
$pwd=$_POST["password"];
$redirect=true;
if($name==""&& $pwd=="")
{
echo "<script type='text/javascript'>alert('fields should not be empty')
window.location='login.html';
</script>";

}
elseif($name=="admin"&& $pwd=="123")
{
echo "<script type='text/javascript'>alert('succefully login: redirecting to google page');
window.location='http://www.google.com/';
</script>";
}
else
{
echo "login failed sorry sai krishna teja ";
}
?>



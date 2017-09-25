<?php
session_start();
$code=rand(1000,9999);
$_SESSION["code"]=$code;
$im = imagecreatetruecolor(50, 24);
$bg = imagecolorallocate($im, 22, 86, 165); //background color blue
$fg = imagecolorallocate($im, 255, 255, 255);//text color white
imagefill($im, 0, 0, $bg);
imagestring($im, 5, 5, 5,  $code, $fg);
header("Cache-Control: no-cache, must-revalidate");
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>
<html>
<head>
<title>Test Form</title>
</head>
<body>
<form action="validate.php" method="post">
Enter Image Text
<input name="captcha" type="text">
<img src="captcha.php" /><br>
enter
<input type="text" type="text">
<input name="submit" type="submit" value="Submit">
</form>
</body>
</html>
<?php
session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
echo "Correct Code Entered";
//Do you stuff
}
else
{
die("Wrong Code Entered");
}
?>
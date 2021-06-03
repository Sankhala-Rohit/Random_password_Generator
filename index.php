<?php 
$val=$_POST;
function random_num($val){
	$data="1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*_";	
	return substr(str_shuffle(str_repeat($data,$val)),0,$val);
}	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Random Number Genrator</title>
</head>
<body>
	<div style="font-size: 30px; text-align: center;">
		Your Random No.="<?php
						if(isset($val["random"]))
						{
							print_r(random_num($val['random']));
						}else{
							print_r(random_num(10));
						}
						?>"
	</div>
	<div style="text-align: center; font-size: 14px;">
		1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*_
	</div>
	<form method="post" action="" style="text-align: center; margin:25px;">
		<div>
			<span style="font-weight: bold; font-size: 20px;">Password Char</span></br>
			<input type="Number" name="random" value="<?php if(isset($_POST["random"])){print_r($_POST["random"]);}else{echo "10";}?>">
		</div>
		<div>
			<button type="submit">Submit</button>
		</div>
	</form>
</body>
</html>

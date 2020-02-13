<!DOCTYPE html>
<html>
<head>
	<title>Interface Abstraction</title>
</head>
<body>
	<style>
		body{
margin: 0;
	padding: 0;
}
div{
	text-align: center;s
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 350px;
	height: 500px;
	padding: 80px 40px;
	box-sizing: border-box;
	background:rgba(0,0,0,.5);
}
		
	</style>
<div style="margin-left: 800px; margin-top: 200px; font-size: 50px">

<?php
include 'ShootInterface.php';
include 'PushButtonInterface.php';


	interface combine extends ShootInterface,PushButtonInterface
	{
		public function shootpush();

	}
    class Game implements combine
    {
    
        public function setPushButton()
        {
            echo 'Button is pushed'."<br>";
        }
        public function setShoot()
        {
        	echo "Shoot! "."<br>";
        }
        public function shootpush()
        {
        	echo "";
        }
    
    }
$obj = new Game;
$obj->setPushButton();
$obj-> setShoot();
$obj-> shootpush();
?>
	<form></form>
	
</div>
</body>
</html>
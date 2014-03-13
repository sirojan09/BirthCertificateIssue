
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	
	<title>
		
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<style>
	dl
	{
	width:705px;
	
	float: left;
	}
	dt
	{
	width:300px;
	
	float: left;
	}
	dd
	{
	width:400px;
	
	float: right;
	}
</style>

<style type="text/css">
.redbutton {
	display: inline-block;
	outline: none;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e4685d), color-stop(1, #f50f03));
	background:-moz-linear-gradient(top, #e4685d 5%, #f50f03 100%);
	background:-webkit-linear-gradient(top, #e4685d 5%, #f50f03 100%);
	background:-o-linear-gradient(top, #e4685d 5%, #f50f03 100%);
	background:-ms-linear-gradient(top, #e4685d 5%, #f50f03 100%);
	background:linear-gradient(to bottom, #e4685d 5%, #f50f03 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e4685d', endColorstr='#f50f03',GradientType=0);
	background-color:#e4685d;
	padding:10px 15px;
	color:#ffffff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:16px;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border:1px solid #ffffff
	
}
.redbutton:hover {
	text-decoration: none;
}
.redbutton:active {
	position: relative;
	top: 1px;
}
.greenbutton {
	display: inline-block;
	outline: none;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	background:#5CCD00;
	background:-moz-linear-gradient(top,#5CCD00 0%,#4AA400 100%);
	background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#5CCD00),color-stop(100%,#4AA400));
	background:-webkit-linear-gradient(top,#5CCD00 0%,#4AA400 100%);
	background:-o-linear-gradient(top,#5CCD00 0%,#4AA400 100%);
	background:-ms-linear-gradient(top,#5CCD00 0%,#4AA400 100%);
	background:linear-gradient(top,#5CCD00 0%,#4AA400 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5CCD00',endColorstr='#4AA400',GradientType=0);
	padding:10px 15px;
	color:#fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:16px;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border:1px solid #459A00
	
}
.greenbutton:hover {
	text-decoration: none;
}
.greenbutton:active {
	position: relative;
	top: 1px;
}
</style>

</head>
<body>
	<div id="container">
		<div id="header">
			<?php //echo $this->Html->image('image1.jpg', array('alt' => 'CakePHP'))?>
			<?php //echo $this-> element('login_menu'); ?>
			<div align='right'>
			<?php if($this->Session->read('user')!=''){echo '<b>logged in as ' . $this->Session->read('user').' </b> (<a href="/cake/Users/logout" >logout</a>)';}?>
			</div>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>

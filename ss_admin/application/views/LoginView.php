<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Calm breeze login screen</title>
  
  
   <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="<?php echo base_url('assets/login/'); ?>css/style.css">

  
</head>

<body>

  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="form" id="send_details">
			<input type="text" placeholder="Username" name="username">
			<input type="password" placeholder="Password" name="password">
			<button type="button" id="login-button" onclick="user_login();">Login</button><br>
			
		</form>
		<div id="alert" style="width: 43%;margin: auto;"></div>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="<?php echo base_url('assets/login/'); ?>js/index.js"></script>




</body>

</html>
<script>
  function user_login()
  {

    $.ajax({
      type:'POST',
      url:'<?php echo base_url('')?>Users/CheckUserDetail',
      data:$("#send_details").serialize(),
      success:function(response)
      {
        $("#alert").html(response);
      }
    });
  }
</script>
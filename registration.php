<?php require_once'head.php'?>
<body>

<div id="main">

	<div class="top">
		<div class="top_left">
			<div class="logo">
				<img src="logo.gif">
			</div>
          </div>
			<div class="top_right">
				<h1>ONLINE EXAM</h1>
				<p>chol School e jabi </p>
			</div>
		
      </div>
		
		<?php require_once'menu.php'?>
		<br>
		<br>
		<?php require_once'slide.php'?>
	
	<div class="content">
		<form class="form-signin" class="col-sm-4" action="index.php" method="post">
				<h2 >Insert user type</h2>
				
				<label>User Type</label>
				<input type="text" name="usertype"><br/>
				
				<label>Status</label>
				
				<select name="status">
					<option value='1'>ON</option>
					<option value='0'>OFF</option>
				</select><br/>
				
				<button type="submit">Submit</button>
		  </form>
	 </div>
	

<?php require_once'footer.php'?>


</div>
	
	

</div>

</body>
</html>
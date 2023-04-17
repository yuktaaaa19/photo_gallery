<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="logstyle.css">

<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>
<body>

<div class="box">
<div class="container">
<div class="top-header">
<span> Have an account?</span>
<header>Login</header> 
</div>
<form action="loginfinal.php" method="post">
<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
<div class="input-field">
<input type="text" class="input" name="username" placeholder="username" required>
<i class='bx bx-user' ></i>
</div>
<div class="input-field">
<input type="password" class="input" name="password" placeholder="password" required>
<i class='bx bx-lock-alt'></i>
</div>
<div class="input-field">
<input type="submit" class="submit" value="Login">
</div>
<div class="two-col">
<div class="one">
<input type="checkbox" id="check">
<label for="check">Remember Me</label>
</div>
<div class="right">
<label> <a href="#">Forgot Password</a></label>
</div>
</div>
</form>
</div>
</div>

</body>
</html>
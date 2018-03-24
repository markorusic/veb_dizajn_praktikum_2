<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="./static/css/main.css">
	<title>Belgrade party</title>
</head>
<body>
	<header>
		<nav class="main-nav flex-sp-around">
			<div class="logo">
				<a class="full-width-link" href="/">Belgrade party</a>
			</div>			
			<ul class="links flex-list-row">
				<li>
					<a class="full-width-link" href="/now-party.php">Now party</a>
				</li>
				<li>
					<a class="full-width-link" href="#">Services</a>
				</li>
				<li>
					<a class="full-width-link" href="#">News & Events</a>
				</li>
			</ul>
			<div class="auth">
				<ul class="flex-list">
					<li><a class="login" href="#">Login</a></li>
					<li><a class="register" href="#">Register</a></li>
				</ul>
			</div>
		</nav>
	</header>

	<div id="login-modal" class="modal">
		<div class="modal-content">
			<div class="modal-header">
				<span class="close"><a href="#"><i class="fa fa-close"></i></a></span>
				<h2 class="uc bold">Login</h2>
			</div>
			<div class="modal-body">
				<form class="login-form">
					<div class="form-control">
						<label for="login-email">Email</label>
						<input type="email" name="email" id="login-email" required placeholder="Please enter your email...">
					</div>
					<div class="form-control">
						<label for="login-password">Password</label>
						<input type="password" name="password" id="login-password" required placeholder="Please enter your password...">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button form="login-form" type="submit" class="btn-primary submit uc">Login</button>
			</div>
		</div>
	</div>

	<div id="register-modal" class="modal">
		<div class="modal-content">
			<div class="modal-header">
				<span class="close"><a href="#"><i class="fa fa-close"></i></a></span>
				<h2 class="uc bold">Register</h2>
			</div>
			<div class="modal-body">
				<form class="register-form">
					<div class="form-control">
						<label for="register-email">Email</label>
						<input type="email" name="email" id="register-email" required placeholder="Please enter your email...">
					</div>
					<div class="form-control">
						<label for="register-password">Password</label>
						<input type="password" name="password" id="register-password" required placeholder="Please enter your password...">
					</div>
					<div class="form-control">
						<label for="register-confirm-password">Confirm Password</label>
						<input type="password" name="confirm_password" id="register-confirm-password" required placeholder="Please confirm your password...">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button form="register-form" type="submit" class="btn-primary submit uc">Register</button>
			</div>
		</div>
	</div>
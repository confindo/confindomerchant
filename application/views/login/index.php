<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<?php
		$this->load->view('viewcomponent/defheaderrender');
		$render = new Render();
		foreach($render->getHeader() as $h){
			$this->load->view($h);
		}
	?>
	<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>">
	<script type="text/javascript" src="<?php echo $js; ?>"></script>
</head>
<body>
	<div class="container-fluid" id="mainContainer">
		<div class="container-fluid">
			<div class="row" id="mainLoginBox">
				<div class="col-md-1"></div>
				<div class="col-md-10" id="loginBoxSection">
					<div class="row">
						<div class="col-md-7" id="loginForm">
							<p align="center"><img src="<?php echo base_url().'public/images/logo.png'; ?>" id="logoImage"></p>
							<h3 id="loginTitle">CONFINDO POS</h3>
							<h5 id="loginSubTitle">Login</h5>
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8" id="formInput">
									<form>
										<div class="input-group mb-3">
										  	<div class="input-group-prepend">
										    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
										  	</div>
										  		<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
										</div>
										<div class="input-group mb-3">
										  	<div class="input-group-prepend">
										    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
										  	</div>
										  		<input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
										</div>
										<button class="btn btn-primary form-control">Login</button>
									</form>
									<br/>
									<i>Forgot your password ? click <a href="#">here</a></i>
								</div>
								<div class="col-md-2"></div>
							</div>
						</div>
						<div class="col-md-5" id="loginImage">
							<div class="row">
								<div class="col-md-8" id="imageCaption">
									<h3>Lorem ipsum dolor sit amet</h3>
									<p>
									consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. 
									</p>
								</div>
								<div class="col-md-4"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
</body>
</html>
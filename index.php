<!DOCTYPE html>
<html lang="en">
<head>
	<title> LIBRI | PROFILE PAGE </title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<script src="js/jquery-2.2.3.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/d2cd2acddf.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } 
	</script>
	<script src="js/bootstrap.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
</head>
<body>
	<div class="container">
  		<hr>
  		<div class="row">
    		<div class="col-md-3 mb-3 tab-menu">
        		<ul class="nav nav-pills flex-column" id="myTab" role="tablist">
					<li class="nav-itEm">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Bio Data</a>
					</li>
					<li class="nav-itEm">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Subscription</a>
					</li>
					<li class="nav-itEm">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Reset Password</a>
					</li>
					<li class="nav-itEm">
						<a class="nav-link"	href="">Log out</a>
					</li>
				</ul>
    		</div>
        	<div class="col-md-9">
      			<div class="tab-content" id="myTabContent">
  					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					  	<div class="card plan-card">
							<div class="card-body">
								<h2 class="profile_header">
									You can modify your name and gender
								</h2>
								<form>
									<div class="form-row">
										<div class="form-group col-md-6">
											<input type="text" class="form-control" id="fullname" placeholder="Fullname">
										</div>
										<div class="form-group col-md-6">
											<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
										</div>
										<div class="form-group col-md-6 form_group">
											<select class="form-control" id="sel1">
												<option>Male</option>
												<option>Female</option>
											</select>
										</div>
									</div>
									<button type="button" class="btn btn-light edit-btn">Edit</button>
								</form>
							</div>
						</div>
 					 </div>
  					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<h2 class="profile_header">Profile/ Subscription Packages</h2>
  						<ul>
							<li class="subscription_one">
								<div class="float-left plan-wrapper">
									<b>Basic</b>
									<small> Reading Plan for individuals </small>
									<p>
										Full access to our libri, Sync reading accross all devices, Access to academic papers, One device at a time. 
									</p>
								</div>
								<div class="float-right float-p">
									<p>
										&#8358;1,000/Month
									</p>
								</div>
							</li>
							<div class="clearfix"></div>
							<li class="subscription_two">
								<div class="float-left plan-wrap">
									<b>Family</b>
									<small> Reading Plan for Family </small>
									<p>
										All the benefits in the Basic plan + Read on devices at the same time
									</p>
								</div>
								<div class="float-right float-p">
									<p>
										&#8358;1,000/Month
									</p>
									<a href="">
										Upgrade
									</a>
								</div>
							</li>
							<div class="clearfix"></div>
							<li class="subscription_three">
								<div class="float-left plan-wrap">
									<b>Weekend</b>
									<small> Reading Plan for Family </small>
									<p>
										Full access to our libri, Sync reading accross all devices, Access to academic papers, One device at a time.
									</p>
								</div>
								<div class="float-right float-p">
									<p>
										&#8358;200/Month
									</p>
									<a href="">
										Subscribe
									</a>
								</div>
							</li>
						</ul>
  					</div>
  					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						  <h2 class="title-head">Profile/ Reset Password</h2>
    					<div class="card plan-card">
							<div class="card-body">
								<h2 class="profile_header">Reset Your Password</h2>
								<form action="">
									<div class="form-row">
										<div class="form-group col-md-6">
											<input type="password" class="form-control" id="Cpassword" placeholder="Current Password">
										</div>
										<div class="form-group col-md-6">
											<input type="password" class="form-control" id="Npassword" placeholder="New Password">
										</div>
									</div>
									<div class="float-left">
										<button type="button" class="btn btn-light edit-btn">Edit</button>
									</div>
									<div class="float-right right-btn">
										<a href="">Forgot Password</a>
									</div>
								</form>
							</div>
						</div>
  					</div>
				</div>
    		</div>
		</div>  
	</div>
</body>
</html>
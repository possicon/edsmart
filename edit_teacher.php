 <html>
 <head>
 <title>Principal Dashboard</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		
	  	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="bootstcrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css"> -->
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="ccontainer">
		<div class="row top">
			<div class="col-lg-4">
				<span class="dashboard"> Principal's Dashboard </span>
			</div>
			<div class="col-lg-1 col-lg-offset-7 messages">+5
				<span class="dashboard"> <img src="img/msg.jpg" class="img-responsive msg"> </span>
			</div>
			
			<!-- <div class="col-lg-4 col-lg-offset-6 username1"> 
				<span >Principal's Username</span>
			 </div> -->
<!-- 			 <div class="col-lg-2 col-lg-offset-8">
			 	<b>kjf</b>
			 </div> -->
		</div>


		<div class="row gray-box"><!-- the left menu backcolor hash start -->

			<div class="col-lg-3 aside">
				
				<aside>
					<div class="col-lg-2 image"> 
						<img src="img/mine.jpg" class="img-rounded" width="100" height="80" alt="Principal's Image"> 
					</div>
				</aside>

				<div class="col-lg-2 username">
				 	<h4> Principal's Name</h4>
				</div> <br>

				<input type="search" name="" id="input" placeholder="search a an action here.." class="form-control search_bar" id="search_bar" value="" required="required" title=""> <br>
				<h5 id= "title">MAIN MENU</h5>
					<div id="teacher_actions">
							

						
							<div id="check3_teacher"><a href="" > </span> <span class="glyphicon glyphicon-remove"></span>Suspend Teacher</a></div><br>
							<div id="check4_teacher"><a class="" data-toggle="modal" href='#modal-id'>View Teacher</a>




							</div><br>
							<div id="check5_teacher"><a class="" data-toggle="modal" href='#modal-id'> </span> <span class="glyphicon glyphicon-plus"></span>Add Course Content</a>
</div>


					</div> <!-- end of principal actions or links-->
			</div><!-- end of col 3 aside element -->
			<div class="col-lg-3 status"> 
				<ol class="breadcrumb">
									<li>
										<a href="#">Home</a>
									</li>
									<li class="active" id="active_link">
										<span href="#"  class="glyphicon glyphicon-edit"> Edit Teacher</span>
									</li>
									
								</ol>
			 </div>
			<div class="col-lg-4 teachers_form">
				
				<form role="form">
					<div class="for-group">
						 <div> <label id="label1">First Name:</label> </div>
						<input type="text" id="fname" placeholder="Ajayi" class="form-control"/>
					</div> 
					<div class="for-group">
						<div> <label id="label2">Last Name:</label> </div>
						<input type="text" placeholder="Nurudeen" class="form-control"/>
					</div>
					<div class="for-group">
						<div> <label id="label3">Middle Name:</label> </div>
						<input type="text" placeholder="Olawale" class="form-control"/>
					</div>
					<div class="for-group">
						<div> <label id="label4">Email Address:</label> </div>
						<input type="email" placeholder="ajayinurudeen998@gmnail.com" class="form-control"/>
					</div>
					<div class="for-group">
						<div> <label id="label5">Phone:</label> </div>
						<input type="phone" placeholder="+234-765-123-43" class="form-control"/>
					</div><br>
						<div> <label id="label6">Teachers Qualification:</label> </div>

					<select name="qualification" id="inputQualification" class="form-control">
						<option value="">B.SC</option>
						<option value="">-- N.C.E--</option>
						<option value="">-- O.N.D --</option>
						<option value="">--  -- N.D</option>
						<option value="">-- H.N.D --</option>
						<option value="">-- B.ED --</option>
						<option value="">-- B.A ED --</option>
						<option value="">-- B.SC --</option>
						<option value="">-- Me. --</option>
						<option value="">-- PHD --</option>
					</select><br>
						<div> <label id="label7">Teacher's Gender:</label> </div>

					<select name="gender" id="inputGender" class="form-control">
						<option>Male</option>
						<option>Female</option>

					</select><br>

					<div> <label id="label7">Teacher's Status:</label> </div>
					<select name="status" id="inputStatus" class="form-control">
						<option>Suspend</option>
						<option>Unsuspend</option>

					</select><br>

					<input type="file" name="image" id="input" class="form-control btn-primary" value="Browse Photo"><br>
					<button type="button" class="btn btn-success">Update</button>
					<button type="button" class="btn btn-danger">Cancel Update</button>

				</form>	

			</div>
			<!-- triger search start -->
				<div>
					<form>
						<div class="modal fade" id="modal-id">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<center><h4 class="modal-title glyphicon glyphicon-user" ><b id="label1"> Teacher's Login</b></h4></center>
								</div>
								<div class="modal-body">						
									
										
									
										<div class="form-group">
											<label for="" id="label1">Username</label>
											<input type="text" class="form-control" id="" placeholder="Teacher username here..">
										</div>
										<div class="form-group">
											<label for="" id="label1">Password</label>
											<input type="text" class="form-control" id="" placeholder="Teacher password here..">
										</div>
										<div class="form-group">
											<div class="checkbox">
											 	<label id="label1">
											 		<input type="checkbox" value="">
											 		Remember Me!
											 	</label>
											 	<img src="img/lock.jpg" width="70" height="70" class="img-responsive" alt="Padlock Image">
											 </div> 
										</div>
							
															
								</div>
								<div class="modal-footer">
									<center> <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
									<a href="teachers_dashboard.php" class="btn btn-success">Login</a>
			 </center>						
								</div>
							</div>
						</div>
				</div>			
				 </div>
				</form><!-- triger search end -->
			</div><!-- end of login trigger modal -->
		</div><!-- end of row gray-->
</div><!-- end of container -->
 <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
 <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="bootstrap/js/app.js"></script>

 </body>
 </html>

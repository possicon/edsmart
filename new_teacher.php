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
	<div class="container">
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

				<input type="search" name="" id="input" placeholder="search a menu item here.." class="form-control search_bar" id="search_bar" value="" required="required" title=""> <br>
						<div class="dropdown" id="teacher_actions"  >
									<div class="glyphicon glyphicon-ok"></div>

									<button type="button" class="btn btn-success glyphicon glyphicon-user dropdown-toggle" id="dropDownMenu1" data-toggle="dropdown">
											Manage Teacher
											<span class="caret"></span>
									</button>

									<ul class="dropdown-menu" id="dropdown" role"menu" aria-labelledby="dropDownMenu1">
										<li role="presentation"><a class="glyphicon glyphicon-edit"  role="menuitem" tabindex="1" href="edit_teacher.php"> Edit Teacher</a></li>
										<li role="presentation"><a class="glyphicon glyphicon-remove" data-toggle="modal" role="menuitem" tabindex="2" href="#modal-search_teacher"> Suspend Teacher</a></li>
										<li role="presentation"><a  class="glyphicon glyphicon-search" data-toggle="modal" role="menuitem" tabindex="3" href="#modal-search_teacher"> View Teacher</a></li>
										<li role="presentation"><a class="glyphicon glyphicon-pencil" data-toggle="modal" role="menuitem" tabindex="2" href="#modal-id1"> Mail Student</a></li>
										<li role="presentation">
									</ul>

						</div>
					<div class="dropdown" id="teacher_actions"  >
						<div class="glyphicon glyphicon-ok"></div>
						<button type="button" class="btn btn-success glyphicon glyphicon-user dropdown-toggle" id="dropDownMenu1" data-toggle="dropdown">
								Manage Student
								<span class="caret"></span>
						</button>

						<ul class="dropdown-menu" id="dropdown" role"menu" aria-labelledby="dropDownMenu1">
							<li role="presentation"><a class="glyphicon glyphicon-eye-open"  data-toggle="modal" role="menuitem" tabindex="1" href="#modal-search_student"> View Student</a></li>
							<li role="presentation"><a class="glyphicon glyphicon-pencil" role="menuitem" tabindex="2" href="view_student.php"> Mail Student</a></li>

							<li role="presentation">
						</ul>
						
					</div>
					<!-- <div id="teacher_actions">
							

						
							<div id="check2_teacher"><a href="edit_teacher.php" ><span class="glyphicon glyphicon-edit"></span>  Edit Teacher</a></div> <br>
							<div id="check3_teacher"><a class="view_teacher.php" data-toggle="modal" href='#modal-id'>Suspend Teacher</a></div><br>
							<div id="check4_teacher"><a class="view_teacher.php" data-toggle="modal" href='#modal-id'>View Teacher</a>




							</div><br>
							<div id="check5_teacher"><a data-toggle="modal" href="#modal-id1" > <span class="glyphicon glyphicon-plus"></span>Add Course Content</a></div>


					</div> --> <!-- end of principal actions or links-->
			</div><!-- end of col 3 aside element -->
			<div class="col-lg-3 status"> 
				<ol class="breadcrumb">
									<li>
										<a href="#">Home</a>
									</li>
									<li class="active" id="active_link">
										<span href="#"  class="glyphicon glyphicon-plus"> Add New Teacher</span>
									</li>
									
								</ol>				
			 </div>
			<div class="col-lg-4 teachers_form">
				
				<form role="form">
					<div class="for-group">
						 <div> <label id="label1">First Name:</label> </div>
						<input type="text" id = "fname" class="form-control"/>
					</div>
					<div class="for-group">
						<div> <label id="label2">Last Name:</label> </div>
						<input type="text" class="form-control"/>
					</div>
					<div class="for-group">
						<div> <label id="label1">Middle Name:</label> </div>
						<input type="text" class="form-control"/>
					</div>
					<div class="for-group">
						<div> <label id="label4">Email Address:</label> </div>
						<input type="email" class="form-control"/>
					</div>
					<div class="for-group">
						<div> <label id="label5">Phone:</label> </div>
						<input type="phone" class="form-control"/>
					</div><br>
						<div> <label id="label6">Teachers Qualification:</label> </div>

					<select name="qualification" id="inputQualification" class="form-control">
						<option value="">-- Select One --</option>
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
						<option>--Select Status</option>
						<option>Suspend</option>
						<option>Unsuspend</option>

					</select><br>

					<input type="file" name="image" id="input" class="form-control btn-primary" value="Browse Photo"><br>
					<button type="button" class="btn btn-success">Submit Registeration</button>
					<button type="button" class="btn btn-danger">Cancel Registeration</button>

				</form>	

			</div>

			<!-- triger search start -->
			<form>
					<div class="modal fade" id="modal-search_student">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Select Faculty of Student and Department</h4>
							</div>
							<div class="modal-body">
														
									<select name="" id="input" class="form-control" required="required">
										<option value="">--Select Faculty--</option>
										<option value="">Faculty of Science</option>
										<option value="">Faculty of Education</option>
										<option value="">Faculty of Law</option>
									</select><br>
									<select name="" id="input" class="form-control" required="required">
										<option value="">--Select Department--</option>
										<option value="">Engineering</option>
										<option value="">Computer Science</option>
										<option value="">Mathematics</option>
										<option value="">Geography</option>
									</select>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									<a href="view_student.php" class="btn btn-success">Search</a>
								
								
							</div>
						</div>
					</div>
			</div>			
			 </div>
			</form><!-- triger search end -->


				<form>
					<div class="modal fade" id="modal-search_teacher">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Select Faculty and Department of Teacher</h4>
							</div>
							<div class="modal-body">
														
									<select name="" id="input" class="form-control" required="required">
										<option value="">--Select Faculty--</option>
										<option value="">Faculty of Science</option>
										<option value="">Faculty of Education</option>
										<option value="">Faculty of Law</option>
									</select><br>
									<select name="" id="input" class="form-control" required="required">
										<option value="">--Select Department--</option>
										<option value="">Engineering</option>
										<option value="">Computer Science</option>
										<option value="">Mathematics</option>
										<option value="">Geography</option>
									</select>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									<a href="view_teacher.php" class="btn btn-success">Search</a>
								
								
							</div>
						</div>
					</div>
			</div>			
			 </div>
			</form>


			<form>
						<div class="modal fade" id="modal-id1">
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
									<a href="view_student.php" class="btn btn-success">Login</a>
			 </center>						
								</div>
							</div>
						</div>
				</div>			
				 </div>
				</form><!-- triger search end -->
		</div><!-- end of row gray-->
</div><!-- end of container -->
 <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
 <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="bootstrap/js/app.js"></script>

 </body>
 </html>

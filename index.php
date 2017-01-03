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
		<div class="row top" id="nav_head">
			<div class="col-lg-4">
				<span class="dashboard"> Principal's Dashboard </span>
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
					<div class="dropdown" id="teacher_actions">
						<button type="button" class="btn btn-success dropdown-toggle glyphicon glyphicon-user" id="dropDownMenu1" data-toggle="dropdown">
								Manage Staffs
								<span class="caret"></span>
						</button>

						<ul class="dropdown-menu" id="dropdown" role"menu" aria-labelledby="dropDownMenu1">
							<li role="presentation"><a class="glyphicon glyphicon-book" role="menuitem" tabindex="1" href="#"> Manage Course List</a></li>
							<li role="presentation"><a class="glyphicon glyphicon-user" role="menuitem" tabindex="2" href="new_teacher.php"> Manage Teacher</a></li>
							<li role="presentation"><a class="glyphicon glyphicon-user" role="menuitem" tabindex="3" href="#"> Class Management</a></li>
							<li role="presentation"><a class="glyphicon glyphicon-user" role="menuitem" tabindex="4" data-toggle="modal" href="#modal-search"> Manage Student</a></li>
							<li role="presentation"><a class="glyphicon glyphicon-pencil" role="menuitem" tabindex="4" href="#"> Moderate Result</a></li>


						</ul>
					</div>
			<!-- 	<div id="teacher_actions">
							<div id="check1_teacher"><a href="" ></a></div><br>

						
							<div id="check2_teacher"><a href="" ><span class="glyphicon glyphicon-book"></span> Manage Course List</a></div> <br>
							<div id="check3_teacher"><a href="new_teacher.php" ><span class="glyphicon glyphicon-user"></span> Manage Teacher</a></div><br>
							<div id="check4_teacher"><a href="" >Class Management</a></div><br>
							<div id="check5_teacher"><a href="" > <span class="glyphicon glyphicon-student"></span>Manage Student</a></div>
							<div id="check6_teacher"><a href="" >Moderate Result</a></div>



					</div> --> <!-- end of principal actions or links-->			</div><!-- end of col 3 backcolor grey aside element -->
			<div>
				<div class="" >
					<ol class="breadcrumb">
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li class="active">Current</li>
					</ol>
				</div>
				<div>


				</div>
				<div class="col-lg-2  block1">
					<h3 id="request"> 100 </h3> 
					<span id="text">Pending Students Request</span>
					<div id="read_more"> <a href="#">Read More</a> </div>
					<div id="b1_hover">
						<center>We have hundred Pendi djdjd djjmdf djfdv fjmdf vfjfvmvf vjf vjf vjuff vfj ng students request jdfjdf jadjs jsnfdd jdfd jdf jd fdj djfndfjff dnfj jf fvfj fjvf fvj mfvf </center>

					</div>
				</div>

				<div class="col-lg-2  block2">
					<h3 id="new_student"> 200 </h3> 
					<span id="text"> New Student </span>
					<div id="read_more"> <a href="#">Read More</a> </div>

				</div>

				<div class="col-lg-2 block3">
					<h3 id="new_student"> 315 </h3> 
					<span id="text"> Teachers </span>
					<div id="read_more"> <a href="#">Read More</a> </div>
				</div>

				<div class="col-lg-2 block4">
					<h3 id="new_student"> 4,570 </h3> 
					<span id="text"> Undergraduate </span>
					<div id="read_more"> <a href="#">Read More</a> </div>
				</div>
				<form>
					<div class="modal fade" id="modal-search">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Search Teacher</h4>
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

			</div><!-- end of gray-box -->
		</div><!-- end of row-->
	</div><!-- end of container -->
 <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
 <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="bootstrap/js/app.js"></script>


 </body>
 </html>

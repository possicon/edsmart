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
							<div id="check1_teacher"><a href="" >Add New Teacher</a></div><br>

						
							<div id="check2_teacher"><a href="" >Edit Teacher</a></div> <br>
							<div id="check3_teacher"><a href="" >Delete Teacher</a></div><br>
							
							<div id="check5_teacher"><a href="" >Add Course Content</a></div>


					</div> <!-- end of principal actions or links-->
			</div><!-- end of col 3 aside element -->
				<div class=""> 
					<center><button class="btn btn-success">
							<span class="glyphicon glyphicon-user"></span> <span class="glyphicon glyphicon-a"></span>All Teachers in Computer Science Department
							
						</button>
					</center>
				<div>
				<!-- <div class="col-lg-3 list_of_teachers">
					<div class=""> 
						<img src="img/mine.jpg" width class="img-responsive teacher_img" alt="Image">
					 </div>
					 sjdfsjf

				</div>

				<div class="col-lg-3 list_of_teachers second_teacher">
					kkjs dkdfiij sjhjds sjfh djwhjjdsd ndjwsjdhsdhsdfh sdsd h dsd <br> bjs <br>
				</div>
				 -->
				 <div class="teacher_pics">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
						<div class="thumbnail">
							<img data-src="#" class="teacher_img" src="img/mine.jpg" alt="">
							<div class="caption">
								<span id="label1">Teachers Name:</span>
								<p id="name1">
									<b>Mr. Ajayi Nurudeen</b>
								</p>
								<span id="label1">Department:</span>
								<p id="name2"><b >Engineering</b></p>
									
								
								<span id="label1">Rank:</span>
								<pid="name3">
									<b>Senior</b>
								</p><br>
								
								
								<p>
									<a href="edit_teacher.php" class="btn btn-xs btn-primary">Edit / Suspend</a>
									<a href="#modal-id" data-toggle="modal" class="btn btn-xs btn-default">Mail Ajayi</a>

								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
						<div class="thumbnail">
							<img data-src="#" class="teacher_img" src="img/mine.jpg" alt="">
							<div class="caption">
								<span id="label1">Teachers Name:</span>
								<p id="name1">
									<b>Mr. Ajayi Nurudeen</b>
								</p>
								<span id="label1">Department:</span>
								<p id="name2"><b >Engineering</b></p>
									
								
								<span id="label1">Rank:</span>
								<pid="name3">
									<b>Senior</b>
								</p><br>
								
								
								<p>
									<a href="#" class="btn btn-xs btn-primary">Edit / Suspend</a>
									<a href="#modal-id" data-toggle="modal" class="btn btn-xs btn-default">Mail Ajayi</a>

								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
						<div class="thumbnail">
							<img data-src="#" class="teacher_img" src="img/mine.jpg" alt="">
							<div class="caption">
								<span id="label1">Teachers Name:</span>
								<p id="name1">
									<b>Mr. Ajayi Nurudeen</b>
								</p>
								<span id="label1">Department:</span>
								<p id="name2"><b >Engineering</b></p>
									
								
								<span id="label1">Rank:</span>
								<pid="name3">
									<b>Senior</b>
								</p><br>
								
								
								<p>
									<a href="#" class="btn btn-xs btn-primary">Edit / Suspend</a>
									<a href="#modal-id" data-toggle="modal" class="btn btn-xs btn-default">Mail Ajayi</a>

								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
						<div class="thumbnail">
							<img data-src="#" class="teacher_img" src="img/mine.jpg" alt="">
							<div class="caption">
								<span id="label1">Teachers Name:</span>
								<p id="name1">
									<b>Mr. Ajayi Nurudeen</b>
								</p>
								<span id="label1">Department:</span>
								<p id="name2"><b >Engineering</b></p>
									
								
								<span id="label1">Rank:</span>
								<pid="name3">
									<b>Senior</b>
								</p><br>
								
								
								<p>
									<a href="#" class="btn btn-xs btn-primary">Edit / Suspend</a>
									<a href="#modal-id" data-toggle="modal" class="btn btn-xs btn-default">Mail Ajayi</a>

								</p>
							</div>
						</div>
					</div>
				</div>
					<form>
						<div class="modal fade" id="modal-id">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<center><h4 class="modal-title glyphicon glyphicon-user" ><b id="label1"> Messagel Teacher</b></h4></center>
								</div>
								<div class="modal-body">						
									
										
									
										<div class="form-group">
											<label for="" id="label1">From: </label>
											<label for="" >principalmail@domain.com</label>
										</div>
										<div class="form-group">
											<label for="" id="label1">To: </label>
											<input type="text" class="form-control" id="" placeholder="" value="teachersmail@domain.com">
										</div>
										<div class="form-group">
											<label for="" id="label1">Subject: </label>
											<textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="You Message Goes Here.."></textarea>
										</div>
							
															
								</div>
								<div class="modal-footer">
									<center> <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
									<a href="" id="send_message" class="btn btn-success">Send</a>
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

 </body>
 </html>

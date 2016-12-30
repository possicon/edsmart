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
							<div id="check1_teacher"><a href="" ><span class="glyphicon glyphicon-plus"></span>Add New Teacher</a></div><br>

						
							<div id="check2_teacher"><a href="" ><span class="glyphicon glyphicon-edit"></span>Edit Teacher</a></div> <br>
							<div id="check3_teacher"><a href=""> <span class="glyphicon glyphicon-remove"></span>Delete Teacher</a></div><br>
							
							<div id="check5_teacher"><a href="view_student.php">View Student</a></div>


					</div> <!-- end of principal actions or links-->
			</div><!-- end of col 3 aside element -->
				<div class=""> 
					<center><button class="btn btn-success">
							<span class="glyphicon glyphicon-book"></span> <span class="glyphicon glyphicon-a"></span>List of My Courses
							
						</button>
					</center>

				</div>
				<div class="col-lg-8">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Serial Number</th> <th>Course Title</th> <th>Code</th> 
							</tr>
							
						</thead>
						
						</thead>
						<tbody>
							<tr>
								<td>1</td> <td>Communication in English</td> 
								<td>GST 001</td>
								 <td> <button type="button" class="btn btn-default">Set Test</button> </td> 
								 <td> <button type="button" class="btn btn-default">Set Exam</button> </td>
								<td> <button type="button" class="btn btn-danger glyphicon glyphicon-edit"></span>Moderate</button> </td>
								
							</tr>

							<tr>
								<td>2</td>
								 <td>Introduction to Programming</td> 
								 <td> CSC 101</td>
								 <td> <button type="button" class="btn btn-default">Set Test</button> </td>
								 <td> <button type="button" class="btn btn-default">Set Exam</button> </td>
								<td> <button type="button" class="btn btn-danger glyphicon glyphicon-edit"></span>Moderate</button> </td>
								
							</tr>

							<tr>
								<td>3</td>
								 <td>Introduction to Mathematics</td> 
								 <td> MAT 101</td>
								 <td> <button type="button" class="btn btn-default">Set Test</button> </td>
								 <td> <button type="button" class="btn btn-default">Set Exam</button> </td>
								<td> <button type="button" class="btn btn-danger glyphicon glyphicon-edit"></span>Moderate</button> </td>
							
							</tr>

							<tr>
								<td>4</td>
								 <td>Introduction to Basi Logic Gates</td> 
								 <td> CSC 102</td>
								 <td> <button type="button" class="btn btn-default">Set Test</button> </td>
								 <td> <button type="button" class="btn btn-default">Set Exam</button> </td>
								<td> <button type="button" class="btn btn-danger glyphicon glyphicon-edit"></span>Moderate</button> </td>
								
							</tr>

							<tr>
								<td>5</td>
								 <td>Library Study</td> 
								 <td> GST 102</td>
								 <td> <button type="button" class="btn btn-default">Set Test</button> </td>
								 <td> <button type="button" class="btn btn-default">Set Exam</button> </td>
								<td> <button type="button" class="btn btn-danger glyphicon glyphicon-edit"></span>Moderate</button> </td>
								
							</tr>
						</tbody>
					</table>
				</div>
				 

		</div><!-- end of row gray-->
</div><!-- end of container -->
 <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>

 <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

 </body>
 </html>

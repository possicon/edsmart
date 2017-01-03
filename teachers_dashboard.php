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
					<div class="dropdown" id="teacher_actions"  >
									<div class="glyphicon glyphicon-ok"></div>

									<button type="button" class="btn btn-success glyphicon glyphicon-user dropdown-toggle" id="dropDownMenu1" data-toggle="dropdown">
											Manage Teacher
											<span class="caret"></span>
									</button>

									<ul class="dropdown-menu" id="dropdown" role"menu" aria-labelledby="dropDownMenu1">
										<li role="presentation"><a class="glyphicon glyphicon-edit"  role="menuitem" tabindex="1" href="edit_teacher.php"> Edit Teacher</a></li>
										<li role="presentation"><a class="glyphicon glyphicon-remove" data-toggle="modal" role="menuitem" tabindex="2" href="#modal-id"> Suspend Teacher</a></li>
										<li role="presentation"><a  class="glyphicon glyphicon-search" data-toggle="modal" role="menuitem" tabindex="3" href="#modal_search_teacher"> View Teacher</a></li>
										<li role="presentation"><a class="glyphicon glyphicon-plus" data-toggle="modal" role="menuitem" tabindex="3" href="#modal-id1"> Add Course Content</a></li>
								
										<li role="presentation">
									</ul>

						</div>
			</div><!-- end of col 3 aside element -->
				<div class=""> 
					<center><button class="btn btn-success">
							<span class="glyphicon glyphicon-book"></span> <span class="glyphicon glyphicon-a"></span>List of Courses Taking
							
						</button>
					</center>

				</div>
				<div class="col-lg-8">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Serial Number</th> <th>Course Title</th> <th>Code</th> <th>Assessement</th> <th>Assessement</th> <th>Content</th> <th>Mark Attendant</th>
							</tr>
							
						</thead>
						
						</thead>
						<tbody>
							<tr>
								<td>1</td> <td>Communication in English</td> 
								<td>GST 001</td>
								 <td> <button type="button" class="btn btn-default">Set Test</button> </td> 
								 <td> <button type="button" class="btn btn-default">Set Exam</button> </td>
								<td> <a href="#modal-content" data-toggle="modal" class="btn btn-primary glyphicon glyphicon-penCil"> Add Content</a> </td>
								<td> <a href="#modal-attendant" data-toggle="modal" class="btn btn-primary glyphicon glyphicon-ok"> Mark Attendant</a> </td>
								
							</tr>

							<tr>
								<td>2</td>
								 <td>Introduction to Programming</td> 
								 <td> CSC 101</td>
								 <td> <button type="button" class="btn btn-default">Set Test</button> </td>
								 <td> <button type="button" class="btn btn-default">Set Exam</button> </td>
								<td> <a href="#modal-content" data-toggle="modal" class="btn btn-primary glyphicon glyphicon-penCil"> Add Content</a> </td>
								<td> <a href="#modal-attendant" data-toggle="modal" class="btn btn-primary glyphicon glyphicon-ok"> Mark Attendant</a> </td>
								
							</tr>

							<tr>
								<td>3</td>
								 <td>Introduction to Mathematics</td> 
								 <td> MAT 101</td>
								 <td> <button type="button" class="btn btn-default">Set Test</button> </td>
								 <td> <button type="button" class="btn btn-default">Set Exam</button> </td>
								<td> <a href="#modal-content" data-toggle="modal" class="btn btn-primary glyphicon glyphicon-penCil"> Add Content</a> </td>
								<td> <a href="#modal-attendant" data-toggle="modal" class="btn btn-primary glyphicon glyphicon-ok"> Mark Attendant</a> </td>
							
							</tr>

							<tr>
								<td>4</td>
								 <td>Introduction to Basi Logic Gates</td> 
								 <td> CSC 102</td>
								 <td> <button type="button" class="btn btn-default">Set Test</button> </td>
								 <td> <button type="button" class="btn btn-default">Set Exam</button> </td>
								 <td> <a href="#modal-content" data-toggle="modal" class="btn btn-primary glyphicon glyphicon-penCil"> Add Content</a> </td>
								<td> <a href="#modal-attendant" data-toggle="modal" class="btn btn-primary glyphicon glyphicon-ok"> Mark Attendant</a> </td>
								
							</tr>

							<tr>
								<td>5</td>
								 <td>Library Study</td> 
								 <td> GST 102</td>
								 <td>
								  <button type="button" class="btn btn-default">Set Test</button>
								 </td>
								 <td> <button type="button" class="btn btn-default">Set Exam</button> </td>
								<td> <a href="#modal-content" data-toggle="modal" class="btn btn-primary glyphicon glyphicon-penCil"> Add Content</a> </td>
								<td> <a href="#modal-attendant" data-toggle="modal" class="btn btn-primary glyphicon glyphicon-ok"> Mark Attendant</a> </td>								
							</tr>
						</tbody>
					</table>
					<form>
								<div class="modal fade" id="modal-content">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Add Content</h4>
										</div>
										<div class="modal-body">
											
											<div class="form-group" id="c_name">
												<label for="" id="label1">Course Name: </label>
												<input type="text" name="" id="input_name" disabled class="form-control" value="" required="required" pattern="" title="">
											</div>

										<div class="form-group" id="c_code">
											<label for="" id="label1">Corse Code </label>
											<!-- <label id="mail_name" for="" >ajayi@domain.com</label> -->
											<input type="text" name="" id="input_code" disabled class="form-control" value="" required="required" pattern="" title="">
										</div>
										<div class="form-group" id="input_content">
											<label for="" id="label1">Course Content: </label>
											<textarea name="" class="form-control" rows="6" required="required" placeholder=""></textarea>
										</div>
										<div class="form-group" id="label_content">
											<label for="" id="label1">Course Content: </label>
											<label > sdhjfdd jsdjs iwiew ie btekfd dfdf f fkjf f ff fjkg fjkf vjkf fjv fvjf v
													eflkedf dkfdf kfff k fgkf gfkg fkf kfv kfv fv fkv fvkf vkfv fkv fkvf vkf vfkv fkv fv
											</label>
										</div>
										<div class="alert alert-success" id="success">
              								<strong><span class="glyphicon glyphicon-ok"></span>
              								 Success!, course content was added successfully!!?>
              								</strong>
    									</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
											<button type="button" class="btn btn-primary glyphicon glyphicon-eye-open" id="preview"> Preview</button>
											<button type="button" class="btn btn-success glyphicon glyphicon-ok" id="onsave"> Save</button>
											<button type="button" class="btn btn-success glyphicon glyphicon-ok" id="onok" data-dismiss="modal"> Ok</button>

											
										</div>
									</div>
								</div>
						</div>			
						 </div>
						</form><!-- triger search end -->

				<form>
					<div class="modal fade" id="modal-attendant">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<center><h4 class="modal-title glyphicon glyphicon-book" ><b id="label1"> Attendance Sheet for CSC 101</b></h4></center>
								</div>
								<div class="modal-body">						
									<table class="table table-bordered table-hover">
										<thead>
											<tr>
												<th id="student_name">Student Names</th> <th id="date">Monday</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Ajayi Nurudeen</td> <td>
												<div class="checkbox">
													<label>
														<input type="checkbox" value="">
														
													</label>
												</div></td>
											</tr>
											<tr>
												<td>Oni jegede</td> <td>
												<div class="checkbox">
													<label>
														<input type="checkbox" value="">
														
													</label>
												</div></td>
											</tr>
											<tr>
												<td>Ogunkola Adewale</td> <td>
												<div class="checkbox">
													<label>
														<input type="checkbox" value="">
														
													</label>
												</div></td>
											</tr>
											<tr>
												<td>Tobi Adeogun</td> <td>
												<div class="checkbox">
													<label>
														<input type="checkbox" value="">
														
													</label>
												</div></td>
											</tr>
																					<tr>
												<td>Oni jegede</td> <td>
												<div class="checkbox">
													<label>
														<input type="checkbox" value="">
														
													</label>
												</div></td>
											</tr>
											<tr>
												<td>Ogunkola Adewale</td> <td>
												<div class="checkbox">
													<label>
														<input type="checkbox" value="">
														
													</label>
												</div></td>
											</tr>
											<tr>
												<td>Tobi Adeogun</td> <td>
												<div class="checkbox">
													<label>
														<input type="checkbox" value="">
														
													</label>
												</div></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="modal-footer">
									<center> <button type="button" class="btn btn-danger  glyphicon glyphicon-remove" data-dismiss="modal"> Cancel</button>
										<a href="teachers_dashboard.php" class="btn btn-primary glyphicon glyphicon-ok "> <b> Done</b> </a>
							        </center>						
								</div>
							</div>
						</div>
					</div>			
				</form>
				<form>
					<div class="modal fade" id="modal_search_teacher">
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
									<a href="view_teacher.php" class="glyphicon glyphicon-eye-open btn btn-success"> View</a>
								
								
							</div>
						</div>
					</div>
			</div>			
			 </div>
			</form>

				</div>
		</div><!-- end of row gray-->
</div><!-- end of container -->
 <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>

 <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

 <script type="text/javascript" src="bootstrap/js/app.js"></script>


 </body>
 </html>

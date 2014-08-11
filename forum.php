<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Geek to Geek - Version Control</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- Customized CSS -->
        <link href="css/g2g.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
    <body>
    	<div class="container-full">
    		<!-- row 1 -->
    		<div class="head">
    			<div class="row">
					<div class="col-lg-3 col-sm-2">
						<a href="index.html"><img src="img/Geek.png" alt="Geek to Geek. A place to connect." class="img-responsive"></a>
					</div>
					<div class="col-lg-9 col-sm-10">
						<h1>User Forum</h1>
					</div>
			    </div>
			</div>

		    <!-- row 2 -->
			<div class="row">
				<div class="col-lg-9 col-sm-10">
					<ul class="nav nav-pills">
						<li class="active"><a href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="introduction.html"><span class="glyphicon glyphicon-book"></span> Introduction</a></li>
						<li><a href="comparisons.html"><span class="glyphicon glyphicon-zoom-in"></span> Comparisons</a></li>
						<li><a href="forum.php"><span class="glyphicon glyphicon-globe"></span> Forum</a></li>
						<li><a href="register.html"><span class="glyphicon glyphicon-user"></span> User</a></li>
					</ul>
				</div>
			</div>

			<!-- row 3 -->
			<div class="row">
				<div class="panel panel-default panel-g2g">
					<!-- Default panel contents -->
					<div class="panel-heading">Forum Topics</div>
					<div class="panel-body">
						<img src="img/forum.png" alt="Geek to Geek forum" class="img-responsive">
						Welcome to the Geek to Geek forum. Everyone play nicely now!
  					</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Topic ID</th>
								<th>User</th>
								<th>Topic Title</th>
								<th>Topic Description</th>
								<th>Create Date</th>
								<th></th>
								<th>Share this on</th>
					        </tr>
						</thead>

						<tbody>
							<?php

							//set up mysql connection
							mysql_connect("sql.njit.edu", "krr22", "Password1") or die(mysql_error());

							//select database
							mysql_select_db("krr22") or die(mysql_error());

							// Retrieve all the data from the "forum_topics" table
							$result = mysql_query("SELECT * FROM forum_topics") or die(mysql_error());

							// store the record of the "forum_topics" table into $row

							while ($row = mysql_fetch_array($result)) {

								// Print out the contents of the entry
								echo '<tr>';

								echo '<td>' . $row['forum_topic_id'] . '</td>';

								echo '<td>' . $row['forum_topic_user'] . '</td>';

								echo '<td>' . $row['forum_topic_title'] . '</td>';

								echo '<td style="width:100px">' . $row['forum_topic_content'] . '</td>';

								echo '<td>' . $row['forum_topic_create_date'] . '</td>';

								echo '<td><a href="replies.php?topic_id=' . $row['forum_topic_id'] . '" style="color:#DC5B21">Replies</a></td>';

								echo '<td>
										<div class="btn-group share-group">
											<a data-toggle="dropdown" class="btn btn-info">
								           		<i class="fa fa-share-alt fa-inverse"></i>
								            </a>
								    		<button data-href="#" data-toggle="dropdown" class="btn btn-info dropdown-toggle">
								    			<span class="caret"></span>
								    		</button>
								    		<ul class="dropdown-menu">
								        		<li>
								    				<a data-original-title="Twitter" href="#" class="btn btn-twitter" data-placement="left">
														<i class="fa fa-twitter"></i>
													</a>
								    			</li>
								    			<li>
								    				<a data-original-title="Facebook" href="#" class="btn btn-facebook" data-placement="left">
														<i class="fa fa-facebook"></i>
													</a>
								    			</li>
								    			<li>
								    				<a data-original-title="Google+" href="#" class="btn btn-google" data-placement="left">
														<i class="fa fa-google-plus"></i>
													</a>
								    			</li>
								    			<li>
								    				<a data-original-title="LinkedIn" href="#" class="btn btn-linkedin" data-placement="left">
														<i class="fa fa-linkedin"></i>
													</a>
								    			</li>
								    			<li>
								    				<a data-original-title="Pinterest" class="btn btn-pinterest" data-placement="left">
														<i class="fa fa-pinterest"></i>
													</a>
								    			</li>
								                <li>
								    				<a  data-original-title="Email" class="btn btn-mail tooltip" data-placement="left">
														<i class="fa fa-envelope"></i>
													</a>
								    			</li>
											</ul>
    									</div>
									</td>';
							}
							?>
						</tbody>

						<tbody></tbody>
					</table>
				</div>
			</div>

			<!-- footer -->
			<footer class="row">
				<div class="panel-footer text-center">
					<p><small><span class="glyphicon glyphicon-copyright-mark"></span>Geek to Geek, LLC  2014;  krr22@njit.edu<br>
					Amissville, VA 20106</small></p>
				</div>
  			</footer>
		</div>  <!-- end container -->

    	<!-- javascript -->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/G2G.js"></script>
    </body>
</html>

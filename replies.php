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
			    </div>
			</div>

			<!-- row 2 -->
			<div class="row">
				<div class="panel panel-default panel-g2g">
					<!-- Default panel contents -->
					<div class="panel-heading">Replies</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Topic ID</th>
								<th>Reply ID</th>
								<th>User</th>
								<th>Reply</th>
								<th>Create Date</th>
					        </tr>
						</thead>

						<tbody>
							<?php

							//set up mysql connection
							mysql_connect("sql.njit.edu", "krr22", "Password1") or die(mysql_error());

							//select database
							mysql_select_db("krr22") or die(mysql_error());

							// Retrieve all the data from the "replies" table for the passed "topic_id"
							$result = mysql_query("SELECT * FROM replies WHERE reply_topic_id = " . $_GET["topic_id"]) or die(mysql_error());

							// store the record of the "replies" table into $row

							while ($row = mysql_fetch_array($result)) {

								// Print out the contents of the entry
								echo '<tr>';

								echo '<td>' . $row['reply_topic_id'] . '</td>';

								echo '<td>' . $row['reply_id'] . '</td>';

								echo '<td>' . $row['reply_user'] . '</td>';

								echo '<td>' . $row['reply_content'] . '</td>';

								echo '<td>' . $row['reply_created_date'] . '</td>';

							}
							?>
						</tbody>

						<tbody></tbody>
					</table>
				</div>
			</div>

			<!-- row 3 -->
			<div>
				<ul class="nav nav-pills">
					<li class="active"><a href="forum.php"><span class="glyphicon glyphicon-hand-left"></span> Return</a></li>
				</ul>
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
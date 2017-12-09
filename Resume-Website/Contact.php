<html>
	<head>
		<title>Assignment</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	</head>
	<body>
		    <div class="container">
		    <!-- Static navbar -->
		    <nav class="navbar navbar-default">
        		<div class="container-fluid">
		          <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		              <span class="sr-only">Toggle navigation</span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="#">Assignment</a>
		          </div>
		          <div id="navbar" class="navbar-collapse collapse">
		            <ul class="nav navbar-nav">
		              <li><a href="./index.html">Home</a></li>
		              <li><a href="./Aboutme.html">Bio</a></li>
		              <li><a href="./Education.html">Resume</a></li>
		              <li class="active"><a href="#">Contact</a></li>
		            </ul>
		          </div><!--/.nav-collapse -->
		        </div><!--/.container-fluid -->
		      </nav>

		      <!-- Main component for a primary marketing message or call to action -->		      
				<!--method="POST" action="http://formspree.io/govardhana.aravind@live.com" -->
		      <div class="jumbotron">
				<form class="form-horizontal" method="post" onsubmit="return validateForm()" action="post_data.php">
				  <div class="form-group">
				    <label for="inputName" class="col-sm-3 control-label">Name</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputEmail" class="col-sm-3 control-label">Email</label>
				    <div class="col-sm-6">
				      <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="you@example.com">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputReason" class="col-sm-3 control-label">Contact Reason</label>
				    <div class="col-sm-6">
						<div class="dropdown">
						  <button class="btn btn-default dropdown-toggle" type="button" id="inputReason" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						    Contact Reason
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" name="inputOptions" id="inputOptions">
							<li><a href="#" class="option" id= "1" >Contact</a></li>	    
						  </ul>
						</div>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputSubject" class="col-sm-3 control-label">Subject</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputMessage" class="col-sm-3 control-label">Message</label>
				    <div class="col-sm-6">
				      <textarea type="text" rows="3" class="form-control" id="inputMessage" name="inputMessage" placeholder="Message"></textarea>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputSubmit" class="col-sm-3 control-label"></label>
				    <div class="col-sm-6">
				      <button type="submit" id="inputSubmit" class="btn btn-default">Submit</button>
				    </div>
				  </div>
				</form>
		      </div>
		    </div> <!-- /container -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="./ReasonForContact.js"></script>
    <script src="./validations.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	</body>
</html>

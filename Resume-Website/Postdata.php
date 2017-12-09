<html>
	<head>
		<title>Assignment</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
		              <li class="active"><a href="#">Home</a></li>
		              <li><a href="./Aboutme.html">Bio</a></li>
		              <li><a href="./Education.html">Resume</a></li>
		              <li><a href="./Contact.php">Contact</a></li>
		            </ul>
		          </div><!--/.nav-collapse -->
		        </div><!--/.container-fluid -->
		      </nav>

	<?php
    $servername = "localhost";
    $username = "id2810426_sathwik";
    $password = "sathwik";
    $database = "id2810426_sathwik";
    $newURL= "./Contact.php";
    $time_stamp = date('c',time());
    
    // Create connection
    $db = mysqli_connect('localhost','id2810426_sathwik' , 'sathwik', 'id2810426_sathwik');

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    // echo "Connected successfully (".$db->host_info.")";
    $name =  $_POST['inputName'];
    $email = $_POST['inputEmail'];
    $roc = "Others";
    $sub = $_POST['inputSubject'];
    $msg = $_POST['inputMessage'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Error";
        $emailErr = "Invalid email format";
    }
    else {
    $sql = "INSERT INTO info (name, email, roc, subject, message, timestamp) VALUES ('$name', '$email', '$roc', '$sub', '$msg', '$time_stamp')";
    $result = mysqli_query($db,$sql);
    if ($result === TRUE) {
        $to = "uppalapati8080@gmail.com";
        $subject = "The Following Person Tried to Contact You!";
        $message ="<html><head><title>Details</title></head><body><table>
        <tr><th>Field</th><th>Value</th></tr>
        <tr><td>Name</td><td>'$name'</td></tr>
        <tr><td>Email</td><td>'$email'</td></tr>
        <tr><td>Reason of Contact</td><td>'$roc'</td></tr>
        <tr><td>Subject</td><td>'$sub'</td></tr>
        <tr><td>Message</td><td>'$msg'</td></tr>
        <tr><td>Time Stamp</td><td>'$time_stamp'</td></tr>
        </table></body></html>";
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // More headers
        $headers .= 'From: <webmaster@example.com>' . "\r\n";
        mail($to,$subject,$message,$headers);
        echo '<div class="jumbotron"><div class="alert alert-success" role="alert">Form Successfully Submited!</div></div>';
        //header('Location: '.$newURL);
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
	?>
	<!-- Main component for a primary marketing message or call to action -->
    </div> <!-- /container -->
	</body>
</html>

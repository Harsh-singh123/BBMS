<html>
<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    <style>
		body {
			margin: 0;
			padding: 0;
			font-family: sans-serif;
		}
		header {
			background-color: #b30000;
			color: #fff;
			padding: 20px;
			text-align: left;
			font-size: 24px;
			font-weight: bold;
		}
		nav {
			background-color: #f2f2f2;
			overflow: hidden;
			padding: 20px;
		}
		nav a {
			float: left;
			display: block;
			color: #333;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 18px;
			font-weight: bold;
			border-right: 1px solid #ccc;
		}
		nav a:hover {
			background-color: #ddd;
			color: #b30000;
		}
    </style>
</head>

<body>
<?php
if(isset($_POST["send"])){
  $name=$_POST['fullname'];
$number=$_POST['contactno'];
$email=$_POST['email'];
$message=$_POST['message'];
$conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql= "insert into contact_query (query_name,query_mail,query_number,query_message) values('{$name}','{$number}','{$email}','{$message}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");
  echo '<div class="alert alert-success alert_dismissible"><b><button type="button" class="close" data-dismiss="alert">&times;</button></b><b>Query Sent, We will contact you shortly. </b></div>';
}?>
<header>
		Blood Bank Management System
	</header>
	<nav>
      <a href="index.php">Home</a>
      <a href="About Us.php">About</a>
      <a href="Contact us.php">Contact Us</a>
      <a href="Blood info.php">Blood info.</a>
      <a href="admin/login.php">Admin</a>
	</nav>
<div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
    <h1 class="mt-4 mb-3">Contact</h1>
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Send us a Message</h3>
        <form name="sentMessage"  method="post">
            <div class="control-group form-group">
                <div class="controls">
                    <label>Full Name:</label>
                    <input type="text" class="form-control" id="name" name="fullname" required>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" name="contactno"  required >
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Message:</label>
                    <textarea rows="10" cols="100" class="form-control" id="message" name="message" required  maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <button type="submit" name="send"  class="btn btn-primary">Send Message</button>
        </form>
    </div>
    <div class="col-lg-4 mb-4">
        <h2>Contact Details</h2>
        <?php
          include 'conn.php';
          $sql= "select * from contact_info";
          $result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)>0)   {
              while($row = mysqli_fetch_assoc($result)) { ?>
        <br>
        <p>
            <h4>Address :</h4><?php echo $row['contact_address']; ?>
        </p>
        <p>
            <h4>Contact Number :</h4><?php echo $row['contact_phone']; ?>
        </p>
        <p>
          <h4>  Email: </h4><a href="#"><?php echo $row['contact_mail']; ?></a>
          </a></b>
        </p>
        <?php }
      } ?>
    </div>
</div>
<!-- /.row -->


</div>
</div>
</div>
</body>

</html>
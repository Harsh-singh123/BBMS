<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Management System</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Roboto:wght@400;500;700&display=swap");
		body {
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background-color: white;
		}
		header {
			background-color: #b30000;
			color: #fff;
			padding: 20px;
			text-align: left;
			font-size: 24px;
			font-weight: bold;
		}
		h3 {
			display: inline;
			margin: 380px;
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
		section {
			background-color: #fff;
			padding: 20px;
			text-align: center;
			font-size: 24px;
			font-weight: bold;
		}
		footer {
			background-color: #333;
			color: #f2f2f2;
			padding: 20px;
			text-align: center;
			font-size: 14px;
		}
        table {
			border-collapse: collapse;
			width: 100%;
			margin: 20px 0;
			font-size: 18px;
			text-align: center;
		}
		table th {
			background-color: #333;
			color: #fff;
			font-weight: bold;
			padding: 10px;
			border: 1px solid #ccc;
		}
		table td {
			background-color: #f2f2f2;
			padding: 10px;
			border: 1px solid #ccc;
		}
		table tr:nth-child(even) td {
			background-color: #ddd;
		}
        .button {
			display: inline-block;
			padding: 10px 20px;
			border-radius: 4px;
			font-size: 18px;
			font-weight: bold;
			text-align: center;
			text-decoration: none;
			color: #fff;
			background-color: #007bff;
			border: none;
			cursor: pointer;
			transition: background-color 0.3s;
			margin: 10px;
		}
		.button:hover {
			background-color: #0062cc;
		}
		.red {
			background-color: #dc3545;
		}
		.red:hover {
			background-color: #c82333;
		}
		.green {
			background-color: #28a745;
		}
		.green:hover {
			background-color: #218838;
		}
		.blue {
			background-color: #007bff;
		}
		.blue:hover {
			background-color: #0062cc;
		}
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: "Roboto", sans-serif;
		}
		.container {
			width: 1000px;
			display: flex;
			flex-wrap: wrap;
			justify-content: space-around;
		}
		.container .btn {
			position: relative;
			top: 0;
			left: 0;
			width: 250px;
			height: 50px;
			margin: 0;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.container .btn a {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			background: rgba(255, 255, 255, 0.05);
			box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
			border-bottom: 1px solid rgba(255, 255, 255, 0.1);
			border-top: 1px solid rgba(255, 255, 255, 0.1);
			border-radius: 30px;
			padding: 10px;
			letter-spacing: 1px;
			text-decoration: none;
			overflow: hidden;
			color: black;
			font-weight: 400px;
			z-index: 1;
			transition: 0.5s;
			backdrop-filter: blur(15px);
		}
		.container .btn:hover a {
			letter-spacing: 3px;
		}
		.container .btn a::before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 50%;
			height: 100%;
			background: linear-gradient(to left, rgba(255, 255, 255, 0.15), transparent);
			transform: skewX(45deg) translate(0);
			transition: 0.5s;
			filter: blur(0px);
		}
		.container .btn:hover a::before {
			transform: skewX(45deg) translate(200px);
		}
		.container .btn::before {
			content: "";
			position: absolute;
			left: 50%;
			transform: translatex(-50%);
			bottom: -5px;
			width: 30px;
			height: 10px;
			background: #f00;
			border-radius: 10px;
			transition: 0.5s;
			transition-delay: 0.5;
		}
		.container .btn:hover::before /*lightup button*/ {
			bottom: 0;
			height: 50%;
			width: 80%;
			border-radius: 30px;
		}

		.container .btn::after {
			content: "";
			position: absolute;
			left: 50%;
			transform: translatex(-50%);
			top: -5px;
			width: 30px;
			height: 10px;
			background: #f00;
			border-radius: 10px;
			transition: 0.5s;
			transition-delay: 0.5;
		}
		.container .btn:hover::after /*lightup button*/ {
			top: 0;
			height: 50%;
			width: 80%;
			border-radius: 30px;
		}
		.container .btn:nth-child(1)::before, /*chnage 1*/
		.container .btn:nth-child(1)::after {
			background: #ff1f71;
			box-shadow: 0 0 5px #ff1f71, 0 0 15px #ff1f71, 0 0 30px #ff1f71,
				0 0 60px #ff1f71;
		}
		.container .btn:nth-child(2)::before, /* 2*/
		.container .btn:nth-child(2)::after {
			background: #2db2ff;
			box-shadow: 0 0 5px #2db2ff, 0 0 15px #2db2ff, 0 0 30px #2db2ff,
				0 0 60px #2db2ff;
		}
		.container .btn:nth-child(3)::before, /* 3*/
		.container .btn:nth-child(3)::after {
			background: #1eff45;
			box-shadow: 0 0 5px #1eff45, 0 0 15px #1eff45, 0 0 30px #1eff45,
				0 0 60px #1eff45;
		}
	</style>
</head>
<body>
	<div class="dave">
	<header>
		Blood Bank Management System
		<h3 style="color:yellow;">Blood donation day: 14/Jun</h3>
	</header>

	<nav>
		<a href="index.php">Home</a>
		<a href="About Us.php">About</a>
		<a href="Contact us.php">Contact Us</a>
		<a href="Blood info.php">Blood info.</a>
        <a href="admin/login.php">Admin</a>
	</nav>

	<section>
		<h1>Welcome to the Blood Bank Management System</h1>
	</section>
	</div>

	<div class="container" style="margin-top:100px">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
            <img src="image\_107317099_blooddonor976.jpg" alt="Los Angeles" style="width:100%; height:550px;margin-top:0px;">
        </div>

        <div class="item">
          <img src="image\Blood-facts_10-illustration-graphics__canteen.png" alt="Chicago" style="width:100%;height:550px;margin-top:0px;">
        </div>
      </div>

      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div><br><br><br>

<div class="container">
		<div class="btn"><a href="select1.php"><img src="image/blood-bank.png">&nbsp Blood Bank Directory</a></div>
		<div class="btn"><a href="donate_blood.php"><img src="image/heart.png">&nbsp Become A Donor</a></div>
		<div class="btn"><a href="need_blood.php"><img src="image/need.png">&nbsp Need Blood </a></div>
	</div><br><br><br>
<table>
		<thead>
			<tr>
				<th>Blood Type</th>
				<th>Universal Donor</th>
				<th>Universal Reciver</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>A+</td>
				<td>A+ AB+</td>
				<td>A+ A- O+ O-</td>
			</tr>
			<tr>
				<td>O+</td>
				<td>O+ A+ B+ AB+</td>
				<td>O+ O-</td>
			</tr>
			<tr>
				<td>B+</td>
				<td>B+ AB+</td>
				<td>B+ B- O+ O-</td>
			</tr>
			<tr>
				<td>AB+</td>
				<td>AB+</td>
				<td>Everyone</td>
			</tr>
            <tr>
				<td>A-</td>
				<td>A+ A- AB+ AB-</td>
				<td>A- O-</td>
			</tr>
            <tr>
				<td>O-</td>
				<td>Everyone</td>
				<td>O-</td>
			</tr>
            <tr>
				<td>B-</td>
				<td>B+ B- AB+ AB-</td>
				<td>B- O-</td>
			</tr>
            <tr>
				<td>AB-</td>
				<td>AB+ AB-</td>
				<td>AB- A- B- O-</td>
			</tr>
		</tbody>
	</table>

    <h2>Some info.</h2>
		<p>The human body contains five liters of blood, which is made of several useful components i.e. Whole blood, Platelet, and Plasma.Each type of component has several medical uses and can be used for different medical treatments. your blood donation determines the best donation for you to make.For plasma and platelet donation you must have donated whole blood in past two years.</p>
        
        <button class="button blue" onclick="window.location.href='W.php'">Whole Blood</button>
	    <button class="button green" onclick="window.location.href='P.php'">Platelet</button>
	    <button class="button red" onclick="window.location.href='P1.php'">Plasma</button>
		
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white" >The need for blood</h4>

                        <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                          <?php
                            include 'conn.php';
                            $sql=$sql= "select * from pages where page_type='needforblood'";
                            $result=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0)   {
                                while($row = mysqli_fetch_assoc($result)) {
                                  echo $row['page_data'];
                                }
							}

                           ?>
                         </p>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white">Blood Tips</h4>

                    <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                      <?php
                        include 'conn.php';
                        $sql=$sql= "select * from pages where page_type='bloodtips'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)   {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['page_data'];
                            }
                          }

                       ?>
                     </p>

                        </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white" >Who you could Help</h4>

                    <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                      <?php
                        include 'conn.php';
                        $sql=$sql= "select * from pages where page_type='whoyouhelp'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)   {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['page_data'];
                            }
                          }

                       ?>
                     </p>


                        </div>
            </div>
</div>

	<footer>
		&copy; 2023 Blood Bank Management System
	</footer>
</body>
</html>

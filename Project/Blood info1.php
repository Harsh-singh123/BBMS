<!DOCTYPE html>
<html>
<head>
	<title>Blood Info.</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background-color: #f2f2f2;
		}
		header {
			background-color: #b30000;
			color: #fff;
			padding: 20px;
			text-align: center;
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
		.container {
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
			width: 800px;
			margin: 100px auto;
		}
		h1 {
			text-align: center;
			font-size: 36px;
			font-weight: bold;
			margin-bottom: 20px;
		}
        h3 {
            font-size: 26ph;
            font-weight:bold ;
        }
		p {
			font-size: 20px;
			line-height: 1.5;
			margin-bottom: 20px;
		}
		ul {
			list-style: none;
			padding: 0;
			margin-bottom: 20px;
		}
		li {
			font-size: 20px;
			line-height: 1.5;
			margin-bottom: 10px;
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
       
	</style>
</head>
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
<body>
	<div class="container">
		<h1>information</h1>
        <h3>Blood Treatments</h3>
   <p>Chemotherapy: Medicines that kill cancer cells. Leukemias and lymphomas are usually treated with chemotherapy.
   <p>Blood transfusion: A blood donor's red blood cells are separated from their plasma and packed into a small bag. Transfusing the concentrated red blood cells into a recipient replaces blood loss.
   <p>Platelet transfusion: A blood donor's platelets are separated from the rest of blood and concentrated into a plastic bag. Platelet transfusion is generally only performed when platelet counts fall to very low levels.
   <p>Fresh frozen plasma: A blood donor's plasma (liquid blood) is separated from the blood cells, and frozen for storage. Plasma transfusion can improve blood clotting and prevent or stop bleeding that's due to clotting problems.
   <p>Cryoprecipitate: Specific proteins are separated from blood and frozen in a small volume of liquid. Cryoprecipitate transfusion can replace specific blood clotting proteins when their levels are low, such as in people with hemophilia.
   <p>Anticoagulation: Medicines to "thin" the blood and prevent clotting in people at high risk from blood clots. Heparin, enoxaparin (Lovenox) and warfarin (Coumadin) are the medicines most often used.
   <p>Antiplatelet drugs: Aspirin and clopidogrel (Plavix) interfere with platelet function and help prevent blood clots, including those that cause heart attacks and strokes.
   <p>Antibiotics: Medicines to kill bacteria and parasites can treat blood infections caused by these organisms.
   <p>Erythropoietin: A hormone produced by the kidney that stimulates red blood cell production. A manufactured form of erythropoietin can be given to improve the symptoms of anemia.
   <p>Bloodletting: In people with problems caused by too much blood (such as from hemochromatosis or polycythemia), occasional controlled removal of blood may be necessary.
   <button class="button red" onclick="window.location.href='Blood info2.php'">Next Page</button> 
    </div>
    </body>
    </html>
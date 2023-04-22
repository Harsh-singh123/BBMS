<html>
<head>
	<title>Select Field Example</title>
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
		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
			width: 400px;
			margin: 100px auto;
		}
		select {
			padding: 10px;
			width: 100%;
			border-radius: 5px;
			border: none;
			margin-bottom: 20px;
			box-sizing: border-box;
			font-size: 16px;
		}
		input[type="submit"] {
			background-color: #b30000;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #990000;
		}
		h1 {
			text-align: center;
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 20px;
		}
		table {
			border-collapse: collapse;
			width: 100%;
			margin: 20px 0;
			font-size: 18px;
			text-align: center;
		}
		table th {
			background-color: black;
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
	</style>
</head>
<body>
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
	<form method="post" action="">
		<h1>Select City</h1>
		<select name="city">
			<option value="">Select<option>
			<option value="rajkot_bb">Rajkot</option>
			<option value="surat_bb">Surat</option>
			<option value="ahmedabad_bb">Ahmedabad</option>
            <option value="amreli_bb">Amreli</option>
            <option value="bharuch_bb">Bharuch</option>
            <option value="porbandar_bb">Porbandar</option>
            <option value="jamnagar_bb">Jamnagar</option>
            <option value="junagadh">Junagadh</option>
            <option value="surendranagar_bb">Surendranagar</option>
            <option value="gir_somnath_bb">Gir Somnath</option>
		</select>
		<input type="submit" name="submit" value="submit">
	</form>
<?php
if(isset($_POST['submit'])){
  $city = $_POST['city'];
  $c=mysqli_connect("localhost","root","","bb");
  if($c)
  {
  mysqli_select_db($c ,"bb");
  $disp=mysqli_query($c, "select * from $city");
  echo "<table>
  <tr>
  <th>Id</th>
  <th>Name</th>
  <th>Address</th>
  <th>Email</th>
  <th>Mobile_no</th>
  </tr>";
  while($row=mysqli_fetch_array($disp))
  {
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['Name']."</td>";
  echo "<td>".$row['Address']."</td>";
  echo "<td>".$row['Email']."</td>";
  echo "<td>".$row['Mobile_no.']."</td>";
  echo "</tr>";
  }
  echo "</table>";
  mysqli_close($c);
  }
  else
  echo mysqli_error($c);
}
?>

</body>
</html>
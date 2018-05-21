<?php

require("adaw.php");
 
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];
		
	$result = mysqli_query($mysqli, "UPDATE karyawan SET nama='$nama',email='$email' WHERE id=$id");
	
	header("Location: admin.php");
}
?>
<?php

$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "SELECT * FROM karyawan WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$nama = $user_data['nama'];
	$email = $user_data['email'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
	<style>
body {
  margin-top: 15%;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("hotel1.jpg");
   background-color: #cccccc;
   width: 100%;
}

* {
  box-sizing: border-box;
}


.container {
	align: center;
	left: 35%;
	width: 35%;
  position: relative;
  border-radius: 5px;
  background-color: rgba(255, 255, 255, .5);
  padding: 20px 0 30px 0;
}


input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none;
}

input:hover,
.btn:hover {
  opacity: 1;
}


input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}


.row:after {
	align: center;
  content: "";
  display: table;
  clear: both;
}


.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}


.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}


.hide-md-lg {
  display: none;
}


(max-width: 650px) {
  .col {

    width: 100%;
    margin-top: 0;
  }

  .hide-md-lg {
    display: block;
    text-align: center;
  }

  span.psw {
    float: right;
    padding-top: 16px;
}

}
</style>
</head>
 
<body>

<div class="container">
    <div class="row">
	
	<br/><br/>
	
	<center><form name="update_karyawan" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
			
		</table>
		<a href="admin.php">Home</a>
	</form></center>
	</div>

    </div>
</body>
</html>
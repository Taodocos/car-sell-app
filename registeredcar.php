<!DOCTYPE html>
<html>
<head>
	<?php 
	//include_once('header.php');
	session_start();
    if(isset($_GET['logged']))
	{
		Header("location:index.php");
		session_destroy();
		
	} //<link rel="stylesheet" href="styles/slide1.css" type="text/css"/>
 
 ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css"rel="stylesheet" />
    <script src="js/bootstrap.min.js"></script>
    <title>cars</title>
</head>
<body>
<section class="bg-light">
        <div class="container-lg my-5 justify-content-center align-items-center">
            <h3 class="fw-bold display-6 text-center ">cars available here</h3>
            <div class="row my-12 align-items-center justify-content-center fw-light g- 5">
                <div class="col-12 col-lg-8 col-xl-8 shadow bg-white">
                    <div class="card-border-0">
                        <div class="card-body text-center py-4">
<div class="container">
		<table id="example" class="table table-stripped">
						<thead>
							<tr>
								<th style="width:5;">ID</th>
								<th style="width:5;">Car Image</th>
								<th style="width:5;">name</th>
								<th style="width:5;">manu date</th>
								<th style="width:5;">price</th>
								
							</tr>
						</thead>
                          <tbody>

<?php

   include("jcon.php");
#if(isset($_POST['view'])){   
#include("DBof-Gibi_conn.php");   
$select = mysqli_query($jcon, "select * from cars"); 
while ($row = mysqli_fetch_assoc($select)) {
	$id=$row['id'];
	$image = $row['image'];
   $name= $row['name'];
	$manuda = $row['manuda'];
	$price = $row['price'];
	
 {
 	echo'<tr>';
 	    echo'<th scope="row">'.$id.'';?>
		<td><img width="300" height="200" src='jj\<?php  echo $image;?>'></td>
		<?php
		
		//echo '<td>' echo "name"; '</td>';
		echo '<td>' . $name . '</td>';
		
		//echo '<td>' echo "manu date"; '</td>';
		echo '<td>' .$manuda.'</td>';
		
		//echo '<td>' echo "price"; '</td>';
		echo '<td>' .$price.'</td>';
		echo '<tr>';
		
		?>
		
		<td>
	<button class="btn btn-secondary"><a href="updatee.php?id=<?php echo   $id  ;?>" class="text-black">update</a></button>
	<td><button class="btn btn-danger"><a href="deletee.php?id=<?php echo   $id  ;?>"class="text-black">delete</a></button>
</td>
		<?php
	}}
	    
	                          
?>

</tr>
</tbody>
</table>

click here to buy a car<a href="1stpage.html"><h2>Buy car</h2></a>
</body>
</html>
	
	
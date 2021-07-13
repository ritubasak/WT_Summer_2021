<?php
    include "../model/db.php";
    error_reporting(0);
	
	$conn = new db();
    $conobj=$conn->OpenCon();
    
    $userQuery1=$conn->viewProduct($conobj,"product",$_REQUEST["search_productid"]);
?>

<!DOCTYPE HTML>
<head>
	<title>
	View Product
	</title>
</head>

<body>
	<form action="" method="post">
    <br><br>
    <h3>&nbsp&nbsp Product ID :</h3> 
    &nbsp&nbsp <input type='text' name='search_productid' >
    &nbsp&nbsp <input type='submit' name='search' value='search'> 
    </form>
    <br><br>

    <h2>&nbsp&nbsp Product Details:</h2>
	<table>
	<tr>
	<th><h3>&nbsp&nbsp p_id</h3></th>
	<th></th><th></th>
	<th><h3>&nbsp&nbsp p_name</h3></th>
	<th></th><th></th>
	<th><h3>&nbsp&nbsp p_desc</h3></th>
	<th></th><th></th>
	<th><h3>&nbsp&nbsp p_category</h3></th>
	<th></th><th></th>
	<th><h3>&nbsp&nbsp p_price</h3></th>
	<th></th><th></th>
    <th><h3>&nbsp&nbsp p_picture</h3></th>
	</tr>		
<body>
	
    <?php while($row = $userQuery1->fetch_assoc()){ ?>
	<tr>				
	<td>&nbsp&nbsp <?php echo $row['P_id']; ?></td>
	<th></th><th></th>
	<td>&nbsp&nbsp <?php echo $row['P_Name']; ?></td>
	<th></th><th></th>
	<td>&nbsp&nbsp <?php echo $row['P_Desc']; ?></td>
	<th></th><th></th>
	<td>&nbsp&nbsp <?php echo $row['P_Category']; ?></td>
	<th></th><th></th>
	<td>&nbsp&nbsp <?php echo $row['P_Price']; ?></td>
	<th></th><th></th>
    <td>&nbsp&nbsp <img src="<?php echo $row['P_Picture'];?>" width="60px" alt=""> </td>
	</tr>
	<?php } ?>
	</table>
	<br>
	<a href="pageone.php"><h3>Back to previous page</h3></a>

</body>
</html>
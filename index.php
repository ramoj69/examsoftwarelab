<?php 
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 

if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

	<style>
					/* Body Styling */
			body {
				font-family: Arial, sans-serif;
				background-color: #f3a46b;
				color: #333;
				display: flex;
				flex-direction: column;
				align-items: center;
				margin: 0;
				padding: 20px;
			}

			/* Message Styling */
			h1 {
				color: #333;
				font-family: 'Pacifico', cursive;
				margin-bottom: 20px;
			}

			h1.message {
				color: red;
			}

			/* Header Styling */
			h1, h3 {
				text-align: center;
			}

			/* Table Container */
			.table-container {
				width: 100%;
				max-width: 800px;
				margin-top: 20px;
			}

			.table-container table {
				width: 100%;
				border-collapse: collapse;
				box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
				background-color: #fff;
				border-radius: 20px;
				overflow: hidden;
			}

			.table-container th,
			.table-container td {
				padding: 12px;
				border: 1px solid #ddd;
				text-align: left;
			}

			.table-container th {
				background-color: #219B9D;
				color: #fff;
				font-weight: bold;
			}

			/* Form Container */
			.form-container {
				width: 100%;
				max-width: 600px;
				background-color: #219B9D;
				padding: 20px;
				margin-top: 20px;
				border-radius: 8px;
				box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			}

			.form-container label {
				display: block;
				margin-bottom: 5px;
				font-weight: bold;
				color: #333;
			}

			.form-container input[type="text"] {
				width: 100%;
				padding: 10px;
				margin-bottom: 15px;
				border: 1px solid #ccc;
				border-radius: 4px;
			}

			.form-container input[type="submit"] {
				width: 100%;
				padding: 12px;
				background-color: #28a745;
				color: #fff;
				border: none;
				border-radius: 4px;
				font-size: 1em;
				cursor: pointer;
			}

			.form-container input[type="submit"]:hover {
				background-color: #218838;
			}

			/* Customer Cards */
			.container {
				width: 100%;
				max-width: 600px;
				padding: 20px;
				margin-top: 20px;
				background-color: #fff;
				border-left: 5px solid #007bff;
				box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
				border-radius: 8px;
			}

			.container h3 {
				margin: 8px 0;
				color: #555;
			}

			.container .editAndDelete {
				display: flex;
				justify-content: flex-end;
				margin-top: 15px;
			}

			.container .editAndDelete a {
				margin-left: 10px;
				padding: 8px 12px;
				text-decoration: none;
				color: #fff;
				border-radius: 4px;
				font-size: 0.9em;
			}

			.container .editAndDelete a:first-child {
				background-color: #28a745;
			}

			.container .editAndDelete a:first-child:hover {
				background-color: #218838;
			}

			.container .editAndDelete a:last-child {
				background-color: #dc3545;
			}

			.container .editAndDelete a:last-child:hover {
				background-color: #c82333;
			}

			/* Users List */
			ul {
				list-style: none;
				padding: 0;
				margin: 20px 0;
			}

			ul li {
				background-color: #f1f1f1;
				margin: 8px 0;
				padding: 10px;
				border-radius: 4px;
				box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			}

			ul li h2 a {
				text-decoration: none;
				color: #007bff;
				font-size: 1.1em;
			}

			ul li h2 a:hover {
				text-decoration: underline;
			}
			.logout{
				margin-right: 1200px;
			}
		
	</style>
</head>
<body>
	<?php if (isset($_SESSION['message'])) { ?>
		<h1 style="color: red;"><?php echo $_SESSION['message']; ?></h1>
	<?php } unset($_SESSION['message']); ?>



	<?php if (isset($_SESSION['username'])) { ?>
		<a class="logout" href="core/handleForms.php?logoutAUser=1">LOGOUT</a>
		<h1>Hello there!! <?php echo $_SESSION['username']; ?></h1>

	
		 

	<h1>Welcome To DONATIRIA NI RAMOJ. Add Orders!</h1>

<div class="table-container">
	<table>
		<thead>
			<tr>
				<th>Item Name</th>
				<th>Description</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>KAPE AT TINAPAY</td>
				<td>Soft and fluffy donut with a sweet glaze coating</td>
				<td>PHP110.50</td>
			</tr>
			<tr>
				<td>DONUT CHOKOLEYT</td>
				<td>Chocolate-covered donut with a rich, creamy texture</td>
				<td>PHP21.75</td>
			</tr>
			<tr>
				<td>DONUT NA MAY BACON</td>
				<td>Maple-glazed donut topped with crispy bacon bits</td>
				<td>PHP52.25</td>
			</tr>
			<tr>
				<td>JAM DONUT</td>
				<td>Classic donut filled with a sweet berry jelly</td>
				<td>PHP62.00</td>
			</tr>
			<tr>
				<td>PINAKAMATAMIS NA DONUT</td>
				<td>Coated in a mixture of cinnamon and sugar</td>
				<td>PHP61.50</td>
			</tr>
			<tr>
				<td>ESPRESSO NA KAPE</td>
				<td>Donut with a coffee-infused glaze for a caffeine kick</td>
				<td>PHP82.00</td>
			</tr>
		</tbody>
	</table>
</div>

<div class="form-container">
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="table_num">Table Number</label> 
			<input type="text" id="table_num" name="table_num">
		</p>
		<p>
			<label for="cus_name">Customer Name</label> 
			<input type="text" id="cus_name" name="cus_name">
		</p>
		<p>
			<label for="cus_order">Order Name</label> 
			<input type="text" id="cus_order" name="cus_order">
		</p>
		<p>
			<label for="quantity">Quantity</label> 
			<input type="text" id="quantity" name="quantity">
		</p>
		<p>
			<label for="amount_of_money">Amount of Payment</label> 
			<input type="text" id="amount_of_money" name="amount_of_money">
		</p>
		<p>
			<input type="submit" name="insertCustomerBtn" value="Submit Order">
		</p>
	</form>
</div>

	<?php $getAllCustomer = getAllCustomer($pdo); ?>
	<?php foreach ($getAllCustomer as $row) { ?>
	<div class="container" style="border-style: solid; width: 50%; height: 300px; margin-top: 20px;">
		<h3>Table Number: <?php echo $row['table_num']; ?></h3>
		<h3>Customer Name: <?php echo $row['cus_name']; ?></h3>
		<h3>Order Name: <?php echo $row['cus_order']; ?></h3>
		<h3>Quantity: <?php echo $row['quantity']; ?></h3>
		<h3>Amount of Payment: <?php echo $row['amount_of_money']; ?></h3>
		<h3>Added By: <?php echo $row['added_by']; ?></h3>
		<h3>Edited By: <?php echo $row['updated_by']; ?></h3>
		<h3>Date Added: <?php echo $row['date_added']; ?></h3>


		<div class="editAndDelete" style="float: right; margin-right: 20px;">

			<a href="editwebdev.php?customer_id=<?php echo $row['customer_id']; ?>">Edit</a>
			<a href="deletewebdev.php?customer_id=<?php echo $row['customer_id']; ?>">Delete</a>
		</div>


	</div> 
	<?php } ?>
	
	<?php } else { echo "<h1>No user logged in</h1>";}?>

	<h1>Users List</h1>
	<ul>
		<?php $getAllUsers =  getAllUsers($pdo); ?>
		<?php foreach ($getAllUsers as $row){ ?>
		<li>
			<h2>
				<a href="viewuser.php?user_id=<?php echo $row['user_id']; ?>"><?php echo $row['username']; ?></a>
			</h2>
		</li>
		<?php	}?>

</body>
</html>

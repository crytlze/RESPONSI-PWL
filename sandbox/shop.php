<html>
<head></head>

<body>
	<h1>Pick 3 items for your shopping cart</h1>
	<form method="POST" action="cart.php">
		<table>
			<tr>
				<th>Item</th>
				<th>QTY</th>
				<th>Price</th>
			</tr>
			<tr>
				<td>
					<select name="item1" id="item1">
						<option value="Supreme T-Shirt">Supreme T-Shirt</option>
						<option value="KickDenim Shirt">KickDenim Shirt</option>
						<option value="Vans T-Shirt">Vans T-Shirt</option>
					</select>
				</td>
				<td>
					<input type="number" name="qty1">
				</td>
				<td>
					<input type="number" name="price1" value="25000" readonly>
				</td>
			</tr>
			<tr>
				<td>
					<select name="item2" id="item2">
						<option value="Levi's Trousers">Levi's Trousers</option>
						<option value="Cardinal Trousers">Cardinal Trousers</option>
						<option value="L'eggs Trousers">L'eggs Trousers</option>
					</select>
				</td>
				<td>
					<input type="number" name="qty2">
				</td>
				<td>
					<input type="number" name="price2" value="30000" readonly>
				</td>
			</tr>
			<tr>
				<td>
					<select name="item3" id="item3">
						<option value="Red Hat">Red Hat</option>
						<option value="White Hat">White Hat</option>
						<option value="Black Hat">Black Hat</option>
					</select>
				</td>
				<td>
					<input type="number" name="qty3">
				</td>
				<td>
					<input type="number" name="price3" value="35000" readonly>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Add to cart"></td>
			</tr>
		</table>
	</form>
</body>
</html>
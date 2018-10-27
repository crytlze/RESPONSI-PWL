<?php 
	$item1 = $_POST['item1'];
	$item2 = $_POST['item2'];
	$item3 = $_POST['item3'];
	$qty1 = $_POST['qty1'];
	$qty2 = $_POST['qty2'];
	$qty3 = $_POST['qty3'];
	
	$price1 = $_POST['price1'];
	$price2 = $_POST['price2'];
	$price3 = $_POST['price3'];
?>

<html>
<head></head>

<body>
	<h1>Shopping cart</h1>
		<table>
			<tr>
				<th>No</th>
				<th>
					Item
				</th>
				<th>
					QTY
				</th>
				<th>
					Price
				</th>
				<th>
					Diskon
				</th>
				<th>
					Total
				</th>
			</tr>
			<tr>
				<td>1</td>
				<td>
					<?php echo $item1; ?>
				</td>
				<td>
					<?php echo $qty1; ?>
				</td>
				<td>
					<?php echo $qty1 * $price1; ?>
				</td>
				<td>
					<?php if(($qty1 * $price1) <= 25000) : ?>
						25%
					<?php elseif(($qty1 * $price1) <= 50000) : ?>
						35%
					<?php elseif(($qty1 * $price1) > 50000) : ?>
						45%
					<?php elseif($qty1 * $price1 <= 15000) : ?>
						0%
					<?php endif; ?>
				</td>
				<td>
					<?php if(($qty1 * $price1) <= 25000) : ?>
						<?php echo ($qty1 * $price1) - (($qty1 * $price1) * 0.25); ?>
					<?php elseif(($qty1 * $price1) <= 50000) : ?>
						<?php echo($qty1 * $price1) - (($qty1 * $price1) * 0.35); ?>
					<?php elseif(($qty1 * $price1) > 50000) : ?>
						<?php echo ($qty1 * $price1)-(($qty1 * $price1) * 0.45); ?>
					<?php elseif($qty1 * $price1 <= 15000) : ?>
						<?php echo ($qty1 * $price1); ?>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td>
					<?php echo $item2; ?>
				</td>
				<td>
					<?php echo $qty2; ?>
				</td>
				<td>
					<?php echo $qty2 * $price2; ?>
				</td>
				<td>
					<?php if(($qty2 * $price2) <= 25000) : ?>
						25%
					<?php elseif(($qty2 * $price2) <= 50000) : ?>
						35%
					<?php elseif(($qty2 * $price2) > 50000) : ?>
						45%
					<?php elseif($qty2 * $price2 <= 15000) : ?>
						0%
					<?php endif; ?>
				</td>
				<td>
					<?php if(($qty2 * $price2) <= 25000) : ?>
						<?php echo ($qty2 * $price2) - (($qty2 * $price2) * 0.25); ?>
					<?php elseif(($qty2 * $price2) <= 50000) : ?>
						<?php echo($qty2 * $price2) - (($qty2 * $price2) * 0.35); ?>
					<?php elseif(($qty2 * $price2) > 50000) : ?>
						<?php echo ($qty2 * $price2)-(($qty2 * $price2) * 0.45); ?>
					<?php elseif($qty2 * $price2 <= 15000) : ?>
						<?php echo ($qty2 * $price2); ?>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td>3</td>
				<td>
					<?php echo $item3; ?>
				</td>
				<td>
					<?php echo $qty3; ?>
				</td>
				<td>
					<?php echo $qty3 * $price3; ?>
				</td>
				<td>
					<?php if(($qty3 * $price3) <= 25000) : ?>
						25%
					<?php elseif(($qty3 * $price3) <= 50000) : ?>
						35%
					<?php elseif(($qty3 * $price3) > 50000) : ?>
						45%
					<?php elseif($qty3 * $price3 <= 15000) : ?>
						0%
					<?php endif; ?>
				</td>
				<td>
					<?php if(($qty3 * $price3) <= 25000) : ?>
						<?php echo ($qty3 * $price3) - (($qty3 * $price3) * 0.25); ?>
					<?php elseif(($qty3 * $price3) <= 50000) : ?>
						<?php echo($qty3 * $price3) - (($qty3 * $price3) * 0.35); ?>
					<?php elseif(($qty3 * $price3) > 50000) : ?>
						<?php echo ($qty3 * $price3)-(($qty3 * $price3) * 0.45); ?>
					<?php elseif($qty3 * $price3 <= 15000) : ?>
						<?php echo ($qty3 * $price3); ?>
					<?php endif; ?>
				</td>
			</tr>
		</table>
</body>
</html>
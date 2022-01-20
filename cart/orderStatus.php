<div id="divToPrint">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h3>Status Pemesanan</h3>
				<center><h5>Nomor Pemesanan : <?php echo $_SESSION['order_id']; ?></h5></center>
			</div>
			<hr>
		<div class="col-lg-12">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk</th>
						<th>Jumlah</th>
						<th>Diskon</th>
						<th>Status</th>
						<th>Harga</th>
						<th>Subtotal</th>
					</tr>
				</thead>
				<?php
				$query = mysqli_query($conn, "SELECT * FROM order_detail a join orders b on a.order_id = b.order_id
				WHERE a.order_id = '".$_SESSION['order_id']."'");
				$no = 1;
				while($row = mysqli_fetch_array($query)){
					$totalDisc = $row['price']-($row['price'] * $row['disc']/100);
					$subtotal = $row['qty'] * $totalDisc;
					$total = $total + $subtotal;
				?>
				<tr>
					<td align="center"><?php echo $no; ?></td>
					<td>
						<div class="table-column-left">
							<img src="../myadmin/img/<?php echo $row['bgimg']; ?>" class="img-small">
						</div>
						<div class="table-column-right">
							Kode : <?php echo $row['item_code']; ?><br/>
							Nama : <?php echo $row['item_name']; ?><br/>
						</div>
					</td>
					<td align="center"><?php echo $row['qty']; ?></td>
					<td align="center"><?php echo $row['disc']; ?>%</td>
					<td align="center"><?php echo $row['order_status']; ?></td>
					<td align="center"><?php echo 'Rp '.number_format($row['price'],0,".","."); ?></td>
					<td align="center"><?php echo 'Rp '.number_format($subtotal,0,".","."); ?></td>
				</tr>
				<?php
				$no++;
				}
				?>
				<tr>
					<td colspan="5" align="right">Total</td>
					<td align="center"><?php echo 'Rp '.number_format($total,0,".","."); ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<div class="container" style="margin-bottom:20px;">
	<div class="shopping-right-basket">
		<form action="../index.php?p=order" method="POST">
		<a href="../index.php?p=order"><button type="button" class="btn-continue">Invoice</button></a>
		<input type="submit" name="finish" value="Selesai" class="btn-continue">
		</form>
	</div>
	<?php
	if(isset($_POST['finish'])){
		unset($_SESSION['order_id']);
		echo "<script>document.location = '../index.php'; </script>";
	}
	?>
</div>

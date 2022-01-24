<div id="divToPrint">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h3>History Pembelian</h3>
			</div>
			<hr>
		<div class="col-lg-12">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk</th>
                        <th>Kode pembelian</th>
						<th>Nama produk</th>
						<th>Jumlah</th>
						<th>Subtotal</th>
                        <th>Status</th>
						<th>Nomer Resi</th>
                        <th>Invoice</th>
					</tr>
				</thead>
				<?php
				$query = mysqli_query($conn, "SELECT * FROM order_detail a join orders b on a.order_id = b.order_id");
				$no = 1;
				while($row = mysqli_fetch_array($query)){
					$total = 0;
					$totalDisc = $row['price']-($row['price'] * $row['disc']/100);
					$subtotal = $row['qty'] * $totalDisc;
					$total = $total + $subtotal;
				?>
				<tr>
					<td align="center"><?php echo $no; ?></td>
					<td>
					<img src="../myadmin/img/<?php echo $row['bgimg']; ?>" class="img-small">
					</td>
                    <td align="center"><?php echo $row['order_id']; ?></td>
					<td align="center"><?php echo $row['item_name']; ?></td>
					<td align="center"><?php echo $row['qty']; ?></td>
					<td align="center"><?php echo 'Rp '.number_format($subtotal,0,".","."); ?></td>
                    <td align="center"><?php echo $row['order_status']; ?></td>
					<td align="center"><?php echo $row['Resi']; ?></td>
                    <td>
		                <a href="../index.php?p=invoice&order_id<?php echo $row['order_id']; ?>"><button type="button" class="btn-continue">Invoice</button></a>
                    </td>
				</tr>
				<?php
				$no++;
				}
				?>
			</table>
		</div>
	</div>
</div>
</div>

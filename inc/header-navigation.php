<!-- header one-->
<header class="page-header-one">
	<div class="container-fluid">
		<div class="top-right text-center">
			<ul>
				<?php 
				if(empty($_SESSION['email']) && empty($_COOKIE['email'])){
				?>
				<li><a href="../index.php?p=login">Masuk</a></li>
				<li><a href="../index.php?p=register">Daftar</a></li>
				<?php 
				}else{ 
					if(isset($_SESSION['email'])){
						$member = $_SESSION['member_id'];
						$queryname = mysqli_query($conn, "SELECT * FROM members WHERE member_id = '".$member."'");
						$name = mysqli_fetch_array($queryname);
						echo '<li>'.$name['fullname'].'</li>';
					}else{
						$member = $_COOKIE['member_id'];
						$queryname = mysqli_query($conn, "SELECT * FROM members WHERE member_id = '".$member."'");
						$name = mysqli_fetch_array($queryname);
						echo '<li>'.$name['fullname'].'</li>';
					}
				?>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">Pengaturan<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="../index.php?p=profil">Profil Saya</a></li>
						<li><a href="../index.php?p=history">History Pesanan</a></li>
						<li><a href="../index.php?&p=logout">Keluar</a></li>
					</ul>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</header>
	
<!-- header two-->
<header class="page-header-two">
	<div class="container-fluid text-center">
		<div class="col-md-4 top-header-left">
			<div class="search-bar">
				<input type="text" id="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
			</div>
		</div>
		<div class="col-md-4 top-header-middle">
			<a href="../index.php"><img class="logo-header" width="200" height="100" src="../logo/logo2.png"  /></a>
		</div>
		<div class="col-md-4 top-header-right">
			<a href="../index.php?p=cart">
			<span class="fa fa-shopping-cart"></span>
			<h4 class="items">
			<?php 
				if(isset($_SESSION['cart'])) { 
					echo count($_SESSION['cart']) ; 
				}else{
					echo '0'; 
				} 
			?>
			</h4>
			</a>
		</div>
	</div>
</header>

<!-- navigation -->
<nav class="navbar navbar-expand-lg bg-primary navbar-light navbar-custom" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
			
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav top-nav-info">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Panasonic <span class="caret"></span></a>
					<ul class="dropdown-menu mega-dropdown-menu">
						<li class="col-sm-6">
							<ul>
								<li><a href="../index.php?p=panasonicGearMotor">Compact AC Gear Motor</a></li>
								<hr>
								<li><a href="../index.php?p=omronPLC">AC Servo</a></li>
								<hr>
								<li><a href="../index.php?p=mitsubishiPLC">AC Servo Drive</a></li>
								<hr>
								<li><a href="../index.php?p=mitsubishiPLC">AC Servo Motor</a></li>
								<hr>
								<li><a href="../index.php?p=mitsubishiPLC">Sensor</a></li>
								<hr>
								<li><a href="../index.php?p=mitsubishiPLC">Programable Controller</a></li>
							</ul>
						</li>
					</ul>
				</li>

				

			<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product<span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Panasonic</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                            <li><a href="../index.php?p=panasonicGearMotor">Compact AC Gear Motor</a></li>
							<li class="dropdown-item" href="#"><a>AC Servo</a></li>
							<li class="dropdown-item" href="#"><a>AC Servo Drive</a></li>
							<li class="dropdown-item" href="#"><a>AC Servo Motor</a></li>
							<li class="dropdown-item" href="#"><a>Sensor</a></li>
							<li class="dropdown-item" href="#"><a>Programable Controller</a></li>
                        </ul>
                    </li>

					<li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shimpo</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                            <li class="dropdown-item" href="#"><a>Gearbox Inline</a></li>
							<li class="dropdown-item" href="#"><a>Gearbox Featured</a></li>
							<li class="dropdown-item" href="#"><a>Gearbpx Right Angle</a></li>
							<li class="dropdown-item" href="#"><a>Cycloidal Gear</a></li>
                        </ul>
                    </li>

					<li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Universal Robot</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                            <li class="dropdown-item" href="#"><a>UR3</a></li>
							<li class="dropdown-item" href="#"><a>UR5</a></li>
							<li class="dropdown-item" href="#"><a>UR10</a></li>
                        </ul>
                    </li>

					<li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dings</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                            <li class="dropdown-item" href="#"><a>Stepper Motor Linear Actuator</a></li>
							<li class="dropdown-item" href="#"><a>Hybrid Rotary Stepper Motor</a></li>
							<li class="dropdown-item" href="#"><a>Brushless DC Motor</a></li>
							<li class="dropdown-item" href="#"><a>Driver</a></li>
                        </ul>
                    </li>

					<li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Weintek</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                            <li class="dropdown-item" href="#"><a>XE Series</a></li>
							<li class="dropdown-item" href="#"><a>IE Series</a></li>
							<li class="dropdown-item" href="#"><a>IP Series</a></li>
							<li class="dropdown-item" href="#"><a>CMT Series</a></li>
							<li class="dropdown-item" href="#"><a>mTV</a></li>
							<li class="dropdown-item" href="#"><a>Software</a></li>
                        </ul>
                    </li>

					<li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shihlin</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                            <li class="dropdown-item" href="#"><a>AC Drives</a></li>
							<li class="dropdown-item" href="#"><a>Servo System</a></li>
						</ul>
                    </li>

					<li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sesame</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                            <li class="dropdown-item" href="#"><a>AC Gear Motor</a></li>
							<li class="dropdown-item" href="#"><a>Percision Gear Motor</a></li>
							<li class="dropdown-item" href="#"><a>Linier Actuator</a></li>
                        </ul>
                    </li>

					<li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">KBK</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                            <li class="dropdown-item" href="#"><a>KBK Couplings</a></li>
                        </ul>
                    </li>

					<li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SMAC</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                            <li class="dropdown-item" href="#"><a>C Series</a></li>
							<li class="dropdown-item" href="#"><a>LCA Series</a></li>
							<li class="dropdown-item" href="#"><a>LAR Series</a></li>
							<li class="dropdown-item" href="#"><a>LC Series</a></li>
							<li class="dropdown-item" href="#"><a>GRP Series</a></li>
							<li class="dropdown-item" href="#"><a>Controller</a></li>
                        </ul>
                    </li>

					<li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Robotiq</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                            <li class="dropdown-item" href="#"><a>Gripper</a></li>
							<li class="dropdown-item" href="#"><a>FT300 Force Torque Sensor</a></li>
							<li class="dropdown-item" href="#"><a>Wrist Camera</a></li>
							<li class="dropdown-item" href="#"><a>Vacuum Grippers</a></li>
							<li class="dropdown-item" href="#"><a>Sanding Kit</a></li>
							<li class="dropdown-item" href="#"><a>Software</a></li>
                        </ul>
                    </li>

					<li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fuji Electric</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                            <li class="dropdown-item" href="#"><a>AC Drive</a></li>
							<li class="dropdown-item" href="#"><a>Temperature Control</a></li>
							<li class="dropdown-item" href="#"><a>Recorder</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
				<li><a href="../index.php?p=brands">Brand</a></li>

				
			</ul>

			
		</div>
	</div>
</nav>

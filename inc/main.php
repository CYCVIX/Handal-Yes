<?php
if(@$_GET){
	switch($_GET['p']){
		case "register";
			include "user/register.php";
		break;
		case "profil";
			include "user/profil.php";
		break;
		case "login";
			include "user/login.php";
		break;
		case "logout";
			include "user/logout.php";
		break;
		case "delete";
			include "user/deleteaccount.php";
		break;
		case "success";
			include "user/success.php";
		break;
		case "single";
			include "page/single.php";
		break;
		case "brands";
			include "page/brands.php";
		break;
		case "home";
			include "page/home.php";
		break;
		case "productbrand";
			include "page/productbrand.php";
		break;
		case "cart";
			include "cart/cart.php";
		break;
		case "checkout";
			include "cart/checkout.php";
		break;
		case "order";
			include "cart/order_detail.php";
		break;
		case "blazercoats";
			include "subkat/blazercoats.php";
		break;
		case "panasonicServo";
			include "subkat/panasonicServo.php";
		break;
		case "shihlinServo";
			include "subkat/shihlinServo.php";
		break;
		case "ihtekInverter";
			include "subkat/ihtekInverter.php";
		break;
		case "panasonicPLC";
			include "subkat/panasonicPLC.php";
		break;
		case "weintekHMI";
			include "subkat/weintekHMI.php";
		break;
		case "shimpoGearbox";
			include "subkat/shimpoGearbox.php";
		break;
		case "shihlinInverter";
			include "subkat/shihlinInverter.php";
		break;
		case "omronHMI";
			include "subkat/omronHMI.php";
		break;
		case "panasonicInverter";
			include "subkat/panasonicInverter.php";
		break;
		case "omronInverter";
			include "subkat/omronInverter.php";
		break;
		case "omronPLC";
			include "subkat/omronPLC.php";
		break;
		case "mitsubishiPLC";
			include "subkat/mitsubishiPLC.php";
		break;
		case "orderStatus";
			include "cart/orderStatus.php";
		break;
		case "panasonicGearMotor":
			include "subkat/panasonicGearMotor.php";
		break;
		default:
			echo '<div class="container">
							<div class="row">
								<div class="col-md-12">
									<h2 class="text-center text1">Page was not found</h2>
								</div>
							</div>
					</div>';
		break;
	}
}else{
	include "page/home.php";
}
?>
<?php
if(@$_GET){
	switch($_GET['p']){
		case "register";
			include "user/register.php";
		break;
		case "history";
			include "user/history.php";
		break;
		case "invoice";
			include "cart/invoice.php";
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
		case "panasonicACServo":
			include "subkat/panasonicACServo.php";
		break;
		case "panasonicACServoDrive":
			include "subkat/panasonicACServoDrive.php";
		break;
		case "panasonicACServoMotor":
			include "subkat/panasonicACMotor.php";
		break;
		case "panasonicSensor":
			include "subkat/panasonicSensor.php";
		break;
		case "panasonicProgrammableController":
			include "subkat/panasonicProgrammableController.php";
		break;
		case "shimpoGearboxInline":
			include "subkat/shimpoGearboxInline.php";
		break;
		case "shimpoGearboxRightAngle":
			include "subkat/shimpoGearboxRightAngle.php";
		break;
		case "shimpoClycloidalGear":
			include "subkat/shimpoCycloidalGear.php";
		break;
		case "UR3":
			include "subkat/UR3.php";
		break;
		case "UR5":
			include "subkat/UR5.php";
		break;
		case "UR10":
			include "subkat/UR10.php";
		break;
		case "XE":
			include "subkat/weintekXE.php";
		break;
		case "IE":
			include "subkat/weintekIE.php";
		break;
		case "IP":
			include "subkat/weintekIP.php";
		break;
		case "CMT":
			include "subkat/weintekCMT.php";
		break;
		case "mtv":
			include "subkat/weintekMTV.php";
		break;
		case "Software":
			include "subkat/weintekSoftware.php";
		break;
		case "ShihlinAC":
			include "subkat/ShihlinAcDrives.php";
		break;
		case "ShihlinServo":
			include "subkat/ShihlinServoSystem.php";
		break;
		case "DingsStepper":
			include "subkat/dingsStepperMotor.php";
		break;
		case "DingsHybrid":
			include "subkat/dingsHybridRotary.php";
		break;
		case "DingsDriver":
			include "subkat/dingsDriver.php";
		break;
		case "DingsBrushless":
			include "subkat/dingsBrushless.php";
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
<?php
        error_reporting(0);
		extract($_REQUEST);
		$start=$_POST['startDate'];
		$end=$_POST['endDate'];
		$model=$_POST['model'];
		$hours=$_POST['hours'];
		$fifty5=["Ford Figo","Maruti Swift","Hyundai Grand i10","Renault Kwid"];
		$eighty=["Ford Figo Aspire","Honda Amaze"];
		$ninety=["Honda City","Volkswagen Ameo","Renault Duster","Mahindra Scorpio","Ford Ecosport","Hyundai Xcent"];
		$one30=["Mahindra XUV","Toyota Fortuner"];	
		$luxury=["Mercedes GLA","Audi Q3"];
		if(in_array($model,$fifty5)){
			$price=55;
		}
		else if($model=="Tata Nano"){
			$price=30;
		}
		else if(in_array($model,$ninety)){
			$price=90;
		}
		else if(in_array($model,$one30)){
			$price=130;
		}
		else if(in_array($model,$eighty)){
			$price=80;
		}
		else if(in_array($model,$luxury)){
			$price=240;
		}
?>
<!DOCTYPE html>
<html>
<title>VolerCars - Booking Summary</title>
<!-- links -->
<link rel="stylesheet" href="./bill_files/bootstrap.min.css">
<link rel="stylesheet" href="./bill_files/style.css">
<body>
	
	<!-- container -->
		<div class="bg-full-background">
		<div class="container">
			<div class="second-nav breadcrumb-gradient">
				<div>
					<div id="breadcrumb">
						<ul class="breadcrumb">
							<li><a href="home.html">Home</a></li>
							<li class="active">Booking Summary</li>
						</ul>
						<h1 class="main-header">Booking Summary</h1>
					</div>
				</div>
			</div>
		</div>
		<form action="home.html" method="post" id="summary-page-form";">
			<div class="container">
				<div id="summary-page">
					<div class="row">
						<div class="col-md-12">
							<div class="new-summary-details-div">
								<div class="row">
									<div class="col-md-3"></div>
									<div class="col-md-3">
										<i class="fa fa-calendar"></i>
										<p>
											Pick-Up Date/Time <span>
												<?php
												  	print("$start");
												?></span>
										</p>
									</div>
									<div class="col-md-3">
										<i class="fa fa-calendar"></i>
										<p>
											Drop-Off Date/Time <span>
												<?php
													print("$end");
												?></span>
										</p>
									</div>
								</div>
							</div>
							<div class="payment-details-div">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-3"></div>
											<div class="col-md-6">
												<h2>Payment Details</h2>
												<table class="table table-hover" id="car-price-section" name="car-price-section">
													<tbody>
													<!-- Car Model Goes Here -->
													
													<tr>
														<td><span class="">Model Name</span></td>
														<td><span class=""> <span id="payableAmt"> 
															<h2 class="tariff-car-name">
															<b> <?php print("$model");?> </b>
															</h2>
															</span></span></td>
													</tr>
													<tr>
														<td><span class="">Tariff</span></td>
														<td><span class=""> <span id="payableAmt"> 
															<?php 
																$price=$hours*$price;
																echo "Rs.".$price; 
															?> 
															</span></span></td>
													</tr>
													<tr>
														<td><span class="">Refundable Deposit</span></td>
														<td><span class=""> <span id="payableAmt"> Rs.0</span></span></td>
													</tr>
													<tr>
														<td><span class="">VAT @14.5%</span></td>
														<td><span class=""> <span id="payableAmt"> 
															<?php
																$vat=0.145*$price;
																echo "Rs.".$vat;
															?>
															</span></span></td>
													</tr>		
													<tr>
														<td><span class="payable-text">Total payable amount</span></td>
														<td><span class="payable-amount"> <span id="payableAmt">
															<?php
																$total=$price+$vat;
																echo "Rs.".$total;
															?></span></span></td>

													</tr>
													<tr>
														<td colspan="2">															
															<button onclick="checkout()" id="cont" name="Continue" value="Continue">CONFIRM</button>
														</td>
													</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	
</body>
<script>
	function checkout(){
			alert("Your booking is confirmed");
			location.href="cars.html";
	}
</script>
<style>
#cont {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
</style>
</html>


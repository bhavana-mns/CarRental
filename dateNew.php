<!DOCTYPE html>
<head>
	<title>DateTime Picker</title>
	<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />	
	<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
	<script type="text/javascript">			
		window.onload = function(){
			new JsDatePick({
				useMode:2,
				target:"start",
				dateFormat:"%d-%M-%Y"
			});
			new JsDatePick({
				useMode:2,
				target:"end",
				dateFormat:"%d-%M-%Y"
			});
		};
	</script>
</head>
<body>
    <div id="popupContact">  <!-- Popup Div Starts Here -->
		<form action="../billTrial1.php" method="POST">  
			<h2>Some more Details...</h2><hr>
			<img id="close" src="img/closeButton_normal.gif" onclick ="div_hide()">				
			Start Date:<input type="text" name="startDate" size="12" id="start" placeholder="Start Date"/>    
	        End Date:<input type="text" name="endDate" size="12" id="end" placeholder="End Date"/></br></br>
			<b>Select Your Car:</b><br>
			<input type="radio" name="model" id="nano" value="Tata Nano"/> Tata Nano<br>
			<input type="radio" name="model" id="kwid" value="Renault Kwid"/>Renault Kwid<br>
			<input type="radio" name="model" id="figo" value="Ford Figo"/> Ford Figo<br>
			<input type="radio" name="model" id="swift" value="Maruti Swift"/> Maruti Swift<br>
			<input type="radio" name="model" id="i10" value="Hyundai Grand i10"/>Hyundai Grand i10<br>
			<input type="radio" name="model" id="aspire" value="Ford Figo Aspire"/>Ford Figo Aspire<br>
			<input type="radio" name="model" id="city" value="Honda City"/> Honda City<br>
			<input type="radio" name="model" id="amaze" value="Honda Amaze"/> Honda Amaze<br>
			<input type="radio" name="model" id="xcent" value="Hyundai Xcent"/> Hyundai Xcent<br>
			<input type="radio" name="model" id="ameo" value="Volkswagen Ameo"/>Volkswagen Ameo<br>
			<input type="radio" name="model" id="duster" value="Renault Duster"/>Renault Duster<br>
			<input type="radio" name="model" id="fortuner" value="Toyota Fortuner"/>Toyota Fortuner<br>
			<input type="radio" name="model" id="scorpio" value="Mahindra Scorpio"/>Mahindra Scorpio<br>
			<input type="radio" name="model" id="ecosport" value="Ford Ecosport"/>Ford Ecosport<br>
			<input type="radio" name="model" id="xuv" value="Mahindra XUV"/>Mahindra XUV<br>
			<input type="radio" name="model" id="gla" value="Mercedes GLA"/>Mercedes GLA<br>
			<input type="radio" name="model" id="q3" value="Audi Q3"/>Audi Q3<br>
			<input name="hours" id="hours" value="" style="display:none"/><br>
			<button onclick="validate()" id="cont" name="Continue" value="Continue">Continue</button>
		</form>
	</div>  <!-- Popup Div Ends Here -->
</body>
</html>
<script>
	
	function validate() {
		valid=1;
		var startDate = document.getElementById("start").value;
		var endDate = document.getElementById("end").value;
		//Validating all fields are entered
		if (startDate== "" || endDate== "") {
			alert("Fill All Fields !");
			valid=0;
		} 
		//Validating if end date> start date
		else if((Date.parse(startDate) > Date.parse(endDate))) {
				alert("End date should be greater than Start date");
				document.getElementById("end").value = "";
				valid=0;
		}
		else{
			//alert("Thank you...");
			//window.location="../billTrial1.php";
			if(valid){
			var hours1=Math.abs(Date.parse(endDate)-Date.parse(startDate))/36e5;
			document.getElementById("hours").value=hours1;
			
			}
		}	
		
	}	
	//Function to Hide Popup
	function div_hide(){
		window.location="../cars.html";
		return false;
	}
	
</script>
<style>
img#close {
position:absolute;
right:-14px;
top:-14px;
cursor:pointer
}
div#popupContact {
position:absolute;
left:50%;
top:17%;
margin-left:-202px;
font-family:'Raleway',sans-serif
}
form {
max-width:300px;
min-width:250px;
padding:10px 50px;
border:2px solid gray;
border-radius:10px;
font-family:raleway;
background-color:#FFFFCC
}
h2 {
background-color:#FEFFED;
padding:20px 35px;
margin:-10px -50px;
text-align:center;
border-radius:10px 10px 0 0
}
hr {
margin:10px -50px;
border:0;
border-top:1px solid #ccc
}
input[type=text] {
width:82%;
padding:10px;
border:1px solid #ccc;
padding-left:40px;
font-size:16px;
font-family:raleway
}	
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

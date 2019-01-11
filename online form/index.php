<!DOCTYPE html>
<html>
<head>
	<title>Survey</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" type="text/css" href="stylesheet/index.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">

		function setData(inputFieldId, objectFieldId, object) {
			var inputField = document.getElementById(inputFieldId);
			var value = inputField.value.toLowerCase();
			object[objectFieldId] = value;
		}

		function checkSelection(id, msg) {
			var selectDom = document.getElementById(id);
			if (selectDom.value == "") {
				setHint(id, msg);
				return false;
			}
			return true;
		}

		function checkInputText(sourceId, msg, max) {
			
			var dom = document.getElementById(sourceId);
			var value = dom.value;
			if (value.length < max) {
				setHint(sourceId, msg);
				return false;
			}
			return true;
		}

		function checkCheckbox(checkboxIds, msg) {

			var dirty = false;
			var total = checkboxIds.length;
			for (var i = 0; i < total; i++) {
				var checkbox = document.getElementById(checkboxIds[i]);
				if (checkbox.checked == true) dirty = true;
			}

			if (!dirty) {
				$("#spotNames").children("span.hint").text(msg);
				$("#spotNames").children("span.hint").css("display", "block");
				$("#spotNames").focus();
			}

			return dirty;
		} 

		
		function getValue(inputFieldId) {
			var inputField = document.getElementById(inputFieldId);
			return inputField.value;
		}

		function checkInteger(sourceId, msg, min) {
			var dom = document.getElementById(sourceId);
			var value = dom.value;
			if (!Number.isInteger(value) && value < min) {
				setHint(sourceId, msg);
				return false;
			}
			return true;
		}



		function clearHint() {
			$("span.hint").text("");
			$("span.hint").css("display", "none");
		}
		
		function setHint(sourceId, msg) {
			$("#" + sourceId).siblings("span.hint").text(msg);
			$("#" + sourceId).siblings("span.hint").css("display", "block");
			$("#" + sourceId).focus();
		}
	</script>
</head>
<body>
	<header>
		<img src="image/cu.png" atl="City University" title="City University">
		<h1>Survey on Tourist Spots of Bangladesh</h1>
		<p>This survey is conducted by the research students of City University for a research project. All the information will be kept confidential. No personal use will be made to the information that is gathered by this survey.</p>
	</header>
	<div id="form">
		<form>
			<div class="group">
				<p>
					Name <br>
					<input type="text" id="name" required>
					<span class="hint"></span>	
				</p>

				<p>
					Gender
					<select id="sex">
						<option value="">Select Gender</option>
						<option value="male">Male</option>
						<option value="female">female</option>
					</select>
					<span class="hint"></span>	
				</p>	

				<p>
					Date of Birth
					<div id="dob" class="selectGroup">
						<select id="day">
							<option value="">Day</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option></select>
						<select id="month">
							<option value="">Month</option>
							<option value="01">Jan</option>
							<option value="02">Feb</option>
							<option value="03">Mar</option>
							<option value="04">Apr</option>
							<option value="05">May</option>
							<option value="06">Jun</option>
							<option value="07">Jul</option>
							<option value="08">Aug</option>
							<option value="09">Sep</option>
							<option value="10">Oct</option>
							<option value="11">Nov</option>
							<option value="12">Dec</option></select>
						<select id="year">
							<option value="">Year</option>
							<script>
								for (var i = 1960; i < 2015; i++) {
									document.write('<option value="'+ i + '">' + i + '</option>');
								}
							</script></select>
						<span class="hint"></span>
					</div>
				</p>

				<p>	
					Are you married ?
					<select id="married">
						<option value="">Choose</option>
						<option value="yes">Yes</option>
						<option value="no">No</option>
					</select>
					<span class="hint"></span>
				</p>

				<p>
					Profession
					<input type="text" id="profession" required>
					<span class="hint"></span>	
				</p>

				<p>
					Religion
					<select id="religion">
						<option value="">Select Religion</option>
						<option value="islam">Islam</option>
						<option value="hindusim">Hindusim</option>
						<option value="christianity">Christianity</option>
						<option value="buddhism">Buddhism</option></select>
					<span class="hint"></span>	
				</p>

				<p>
					District
					<select id="district">
						<option value="">Choose</option>
						<option value="bagerhat">Bagerhat</option>
						<option value="bandarban">Bandarban</option>
						<option value="bagerhat">Bagerhat</option>
						<option value="barisal">Barisal</option>
						<option value="bhola">Bhola</option>
						<option value="bogra">Bogra</option>
						<option value="brahmanbaria">Brahmanbaria</option>
						<option value="chandpur">Chandpur</option>
						<option value="chittagong">Chittagong</option>
						<option value="chuadanga">Chuadanga</option>
						<option value="comilla">Comilla</option>
						<option value="cox's Bazar">Cox's Bazar</option>
						<option value="dhaka">Dhaka</option>
						<option value="dinajpur">Dinajpur</option>
						<option value="faridpur">Faridpur</option>
						<option value="feni">Feni</option>
						<option value="gaibandha">Gaibandha</option>
						<option value="gazipur">Gazipur</option>
						<option value="gopalganj">Gopalganj</option>
						<option value="habiganj">Habiganj</option>
						<option value="jaipurhat">Jaipurhat</option>
						<option value="jamalpur">Jamalpur</option>
						<option value="jessore">Jessore</option>
						<option value="jhalakati">Jhalakati</option>
						<option value="jhenaidah">Jhenaidah</option>
						<option value="khagrachari">Khagrachari</option>
						<option value="khulna">Khulna</option>
						<option value="kishoreganj">Kishoreganj</option>
						<option value="kurigram">Kurigram</option>
						<option value="kushtia">Kushtia</option>
						<option value="lakshmipur">Lakshmipur</option>
						<option value="lalmonirhat">Lalmonirhat</option>
						<option value="madaripur">Madaripur</option>
						<option value="magura">Magura</option>
						<option value="manikganj">Manikganj</option>
						<option value="meherpur">Meherpur</option>
						<option value="moulvibazar">Moulvibazar</option>
						<option value="munshiganj">Munshiganj</option>
						<option value="mymensingh">Mymensingh</option>
						<option value="naogaon">Naogaon</option>
						<option value="narail">Narail</option>
						<option value="narayanganj">Narayanganj</option>
						<option value="narsingdi">Narsingdi</option>
						<option value="natore">Natore</option>
						<option value="nawabganj">Nawabganj</option>
						<option value="netrakona">Netrakona</option>
						<option value="nilphamari">Nilphamari</option>
						<option value="noakhali">Noakhali</option>
						<option value="pabna">Pabna</option>
						<option value="panchagarh">Panchagarh</option>
						<option value="parbattya chattagram	">Parbattya Chattagram	</option>
						<option value="patuakhali">Patuakhali</option>
						<option value="pirojpur">Pirojpur</option>
						<option value="rajbari">Rajbari</option>
						<option value="rajshahi">Rajshahi</option>
						<option value="rangpur">Rangpur</option>
						<option value="satkhira">Satkhira</option>
						<option value="shariatpur">Shariatpur</option>
						<option value="sherpur">Sherpur</option>
						<option value="sirajganj">Sirajganj</option>
						<option value="sunamganj">Sunamganj</option>
						<option value="sylhet">Sylhet</option>
						<option value="tangail">Tangail</option>
						<option value="thakurgaon">Thakurgaon</option></select>
					<span class="hint"></span>
				</p>
			</div>

			<div id="spotNames" class="group">
				Which of the following spots have you visited?
				<span class="hint"></span>
				<label><input type="checkbox" id="cox"	name="Cox Bazar">Cox Bazar</label>
				<label><input type="checkbox" id="sai"	name="Saint Martin">Saint Martin</label>
				<label><input type="checkbox" id="kua"	name="Kuakata">Kuakata</label>
				<label><input type="checkbox" id="sun"	name="Sundarban">Sundarban</label>
				<label><input type="checkbox" id="jaf"	name="Jaflong">Jaflong</label>
				<label><input type="checkbox" id="ban"	name="Bandarban">Bandarban</label>
				<label><input type="checkbox" id="sit"	name="Sitakunda">Sitakunda</label>
				<label><input type="checkbox" id="lal"	name="Lalbagh Fort">Lalbagh Fort</label>
				<label><input type="checkbox" id="pat"	name="Patanga">Patanga</label>
				<label><input type="checkbox" id="son"	name="Sonargon">Sonargaon</label>
			</div>

			<button id="next">Next &raquo;</button>
			</form>
	</div>

	<script type="text/javascript">
		
		var nextButton = document.getElementById("next");
		nextButton.addEventListener('click', function (event) {
			event.preventDefault();

			clearHint();

			if(!checkInputText("name", "Name must be between 3-20 charcters long", 3)) return;
			if (!checkSelection("sex", "Select your gender")) return;
			if (!checkSelection("day", "Select day")) return;
			if (!checkSelection("month", "Select month")) return;
			if (!checkSelection("year", "Select year")) return;
			if (!checkSelection("married", "Select your marital status")) return;
			if(!checkInputText("profession", "Enter your profession", 3)) return;
			if (!checkSelection("religion", "Select religion")) return;
			if (!checkSelection("district", "Select district")) return;

			// 	if (!checkCheckbox(spotId, "At least, select one spot")) return;

			collectPersonalData();
		});


		var processorPageAddress = "http://curesearch.tk/savedata.php";

		var spotId = ["cox", "sai", "kua", "sun", "jaf", "ban", "sit", "lal", "pat", "son"];
		var spotName = ["Cox Bazar", "Saint Martin", "Kuakata", "Sundarban", "Jaflong", "Bandarban", "Sitakunda", "Lalbagh Fort", "Patanga", "Sonargong"];
		
		var spotIdNameMap = {
			"cox"	: "Cox Bazar",
			"sai"	: "Saint Martin",
			"kua"	: "Kuakata",
			"sun"	: "Sundarban",
			"jaf"	: "Jaflong",
			"ban"	: "Bandarban",
			"sit"	: "Sitakunda",
			"lal"	: "Lalbagh Fort",
			"pat"	: "Patanga",
			"son"	: "Sonargon"
		};		
		
		var questionMap = {
			"tInTourRate" 				: "How would you rate your tour?",
			"tInWhen" 					: "When did you go?",
			"tInHowLong" 				: "How long did you stay?(Day)",
			"tInTourGuide" 				: "Did you have tour guide?(Yes/No)",
			"tInInternet" 				: "Could you use mobile internet?(Yes/No)",
			"tInInternetStrength" 		: "How strong was the signal of network strengt?(High/Medium/Low)",
			"tInCost" 					: "How much did this tour cost ? (Assumed)",
			"tInByWhat" 				: "Did you go by Private Vehicle or tourist agent?",

			"haInEasinessFindingHotel" 	: "How easy was it to find hotel/inn?(1-5)",
			"haInOnlineBooking" 		: "Did you book hotel via online?(Yes/No)",
			"haInRoomNumber" 			: "How many room did you book?",
			"haInWashRoomRate" 			: "How would you rate on washroom facilities?(1-5)",

			"fdInFoodRate" 				: "How would you rate on food facilities?(1-5)",
			"fdInEnoughWater" 			: "Did you have enough drinking water?(Yes/No)",
			"fdInFoodPoision" 			: "Did you have any food poison or any disease?(Be specific)",

			"psInHarassment" 			: "Did you harass by anybody?(Yes/No)",
			"psInPropertyLoss" 			: "Did you loss of any personal property?(Yes/No)",
			"psInRobbery" 				: "Did you rob by anybody?(Yes/No)",
			"psInAccident" 				: "Did you have any accident during tour?(Be specific)"
		};

		var totalSpot = spotId.length;

		var checkedSpotId = [];
		var checkedSpotName = [];

		var jsonData = {};
		
		jsonData["Name"] = "";
		jsonData["Gender"] = "";
		jsonData["DOB"] = "";
		jsonData["Married"] = "";
		jsonData["Occupation"] = "";
		jsonData["Religion"] = "";
		jsonData["District"] = "";
		
		for(var spotPrefix in spotIdNameMap ) {
		    for(var tag in questionMap) {
                var key = spotPrefix + "_" + tag;
                jsonData[key] = "";
		    }
		}
        
		spotName.forEach(function(name) {
		    jsonData[name] = "";
		});


		function collectPersonalData() {

			setData("name", "Name", jsonData);
			setData("sex", "Gender", jsonData);
			jsonData["DOB"] = getValue("day") + "-" + getValue("month") + "-" + getValue("year");
			setData("married", "Married", jsonData);
			setData("profession", "Occupation", jsonData);
			setData("religion", "Religion", jsonData);
			setData("district", "District", jsonData);
			setSpotList();

			// jsonData["spotData"] = [];
			prepareTourForm(0);

			console.log(jsonData);
			// console.log(JSON.stringify(jsonData));
		}


		function setSpotList() {
			for (var i = 0; i < totalSpot; i++) {
				var spot = document.getElementById(spotId[i]);
				if (spot.checked == true) {
					checkedSpotId.push(spotId[i]);
					checkedSpotName.push(spotName[i]);
				}
			}

			// jsonData["spotVisited"] = checkedSpotId.length;
			// jsonData["spotNames"] = checkedSpotName;
		}

		function prepareTourForm(formId) {

			if (checkedSpotId.length == 0) {
				// the user didn't go out on any tour
				prepareNextTourForm();
				return;
			}

			console.log("preparing form for id : " + formId);

			var formData = '<h2 id="title">' + checkedSpotName[formId] + '</h2>';

			formData += '<h3>Tour Information</h3>';
			formData += '<input type="hidden" value="'+ formId +'" id="formId">';
			formData += '<p>When did you go?<br><select id="tInWhen" ><option value="">Month</option><option value="january">Jan</option><option value="february">Feb</option><option value="march">Mar</option><option value="april">Apr</option><option value="may">May</option><option value="june">Jun</option><option value="july">Jul</option><option value="auguest">Aug</option><option value="september">Sep</option><option value="october">Oct</option><option value="november">Nov</option><option value="december">Dec</option></select><span class="hint"></span></p>';
			formData += '<p>Which year did you go?<br><input type="text"></p>';
			formData += '<p>How long did you stay?(Day)<br><select id="tInHowLong"><option value="">Choose</option><option value="1">00</option><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="360">30+</option></select><span class="hint"></span></p>';
			formData += '<p>Did you have tour guide?<br><select id="tInTourGuide"><option value="">Choose</option><option value="yes">Yes</option><option value="no">No</option></select><span class="hint"></span>';
			formData += '<p>Could you use mobile internet?<br><select id="tInInternet"><option value="">Choose</option><option value="yes">Yes</option><option value="no">No</option></select><span class="hint"></span>';
			formData += '<p>How strong was the signal of network strength?<br><select id="tInInternetStrength"><option value="">Rate</option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select><span class="hint"></span></p>';
			formData += '<p>How much did this tour cost in TK? (Assumed)<br><input type="text" id="tInCost"><span class="hint"></span></p>';
			formData += '<p>How would you rate your tour?<br><select id="tInTourRate"><option value="">Rate</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select><span class="hint"></span></p>';

			formData += '<h3>Hotel and Accommdation</h3>';
			formData += '<p>How easy was it to find hotel/inn?<br><select id="haInEasinessFindingHotel"><option value="">Rate</option><option value="0">N/A</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select><span class="hint"></span></p>';
			formData += '<p>Did you book hotel via online?<br><select id="haInOnlineBooking"><option value="">Choose</option><option value="yes">Yes</option><option value="no">No</option></select><span class="hint"></span></p>';
			formData += '<p>How many room did you book?<br><select id="haInRoomNumber"><option value="">Choose</option><option value="0">00</option><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="360">30+</option></select><span class="hint"></span></p>';
			formData += '<p>How would you rate on washroom facilities?<br><select id="haInWashRoomRate"><option value="">Choose</option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select><span class="hint"></span></p>';
			formData += '<p>Did you go by Private Vehicle or tourist agent?<br><select id="tInByWhat"><option value="">Choose</option><option value="private">Private Vehicle</option><option value="agent">Tourist agent</option></select><span class="hint"></span></p>';
			

			formData += '<h3>Food and Drinking</h3>';
			formData += '<p>How would you rate on food facilities?<br><select id="fdInFoodRate"><option value="">Choose</option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select><span class="hint"></span></p>';
			formData += '<p>Did you have enough drinking water?<br><select id="fdInEnoughWater"><option value="">Choose</option><option value="yes">Yes</option><option value="no">No</option></select><span class="hint"></span></p>';
			formData += '<p>Did you have any food poison or any disease?<br><select id="fdInFoodPoision"><option value="">Choose</option><option value="yes">Yes</option><option value="no">No</option></select><span class="hint"></span></p>';
			

			formData += '<h3>Privacy and Security</h3>';
			formData += '<p>Did you harass by anybody?<br><select id="psInHarassment"><option value="">Choose</option><option value="yes">Yes</option><option value="no">No</option></select><span class="hint"></span></p>';
			formData += '<p>Did you loss of any personal property?<br><select id="psInPropertyLoss"><option value="">Choose</option><option value="yes">Yes</option><option value="no">No</option></select><span class="hint"></span></p>';
			formData += '<p>Did you rob by anybody?<br><select id="psInRobbery"><option value="">Choose</option><option value="yes">Yes</option><option value="no">No</option></select><span class="hint"></span></p>';
			formData += '<p>Did you have any accident during tour?<br><select id="psInAccident"><option value="">Choose</option><option value="yes">Yes</option><option value="no">No</option></select><span class="hint"></span></p>';

			formData += '<button onclick="collectTourData(' + formId + ')">Next &raquo;</button>';
			document.getElementById("form").innerHTML = formData;

			focusElement();
		}

		function prepareNextTourForm() {

			console.log("preparing next tour form...");

			var formData = '<h2 id="title">Where do you want to go next?</h2>';
			formData += '<p><span class="hint"></span><label><input type="checkbox" id="cox"	name="Cox Bazar">Cox Bazar</label><label><input type="checkbox" id="sai"	name="Saint Martin">Saint Martin</label><label><input type="checkbox" id="kua"	name="Kuakata">Kuakata</label><label><input type="checkbox" id="sun"	name="Sundarban">Sundarban</label><label><input type="checkbox" id="jaf"	name="Jaflong">Jaflong</label><label><input type="checkbox" id="ban"	name="Bandarban">Bandarban</label><label><input type="checkbox" id="sit"	name="Sitakunda">Sitakunda</label><label><input type="checkbox" id="lal"	name="Lalbagh Fort">Lalbagh Fort</label><label><input type="checkbox" id="pat"	name="Patanga">Patanga</label><label><input type="checkbox" id="son"	name="Sonargon">Sonargaon</label></p>';
			formData += '<button id="nextTour" onclick="collectNextTour(this)">Next &raquo;</button>';

			document.getElementById("form").innerHTML = formData;

			focusElement();
		}

		function focusElement() { 
			var dom = document.getElementById("title");
            window.scrollTo(0, dom.offsetTop);
		}


		function collectTourData(formId) {
			
			clearHint();

			var formId = document.getElementById("formId").value;
			var spotName = checkedSpotName[formId];
			console.log("collecting tour jsonData of " + spotName + "...");
			
			var msg = "This input is required";

			if(!checkSelection("tInWhen", msg)) return;
			if(!checkSelection("tInHowLong", msg)) return;
			if(!checkSelection("tInTourGuide", msg)) return;
			if(!checkSelection("tInInternet", msg)) return;
			if(!checkSelection("tInInternetStrength", msg)) return;
			if(!checkInteger("tInCost", msg, 1)) return;
			if(!checkSelection("tInTourRate", msg)) return;

			if(!checkSelection("haInEasinessFindingHotel", msg)) return;
			if(!checkSelection("haInOnlineBooking", msg)) return;
			if(!checkSelection("haInRoomNumber", msg)) return;
			if(!checkSelection("haInWashRoomRate", msg)) return;
			if(!checkSelection("tInByWhat", msg)) return;


			if(!checkSelection("fdInFoodRate", msg)) return;
			if(!checkSelection("fdInEnoughWater", msg)) return;
			if(!checkSelection("fdInFoodPoision", msg)) return;


			if(!checkSelection("psInHarassment", msg)) return;
			if(!checkSelection("psInPropertyLoss", msg)) return;
			if(!checkSelection("psInRobbery", msg)) return;
			if(!checkSelection("psInAccident", msg)) return;


			for (var key in questionMap) {
				var finalKey = checkedSpotId[formId] + "_" + key;
				setData(key, finalKey,jsonData);
			}

			

			if (formId < (checkedSpotId.length - 1)) {
				prepareTourForm(++formId);
			} else if (formId == (checkedSpotId.length - 1)) {
				// now procced with next tour form
				prepareNextTourForm();
			}

			console.log(jsonData);
		}

		function collectNextTour(self) {

			for (var i = 0; i < totalSpot; i++) {
				var spot = document.getElementById(spotId[i]);
				if (spot.checked == true) {
					jsonData[spotIdNameMap[spotId[i]]] = "yes";
				}
			}

			self.disabled = true; 
			$("#nextTour").addClass("disable");
			
			console.log("sending data to server...");
		    $.post(processorPageAddress, {jsonData: JSON.stringify(jsonData)}, function(result) {
		    	console.log("gotcha!");
        		$("#form").html(result);
    		});
    		
		}
        
	</script>

</body>
</html>
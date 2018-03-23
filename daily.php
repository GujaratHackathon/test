<?php include ('ser.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	
	<meta name="keywords" content="General Application Form Responsive widget, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- stylesheets -->
	<link rel="stylesheet" href="dailycss.css" type="text/css" media="all">
	
	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    
    <script type="text/javascript">
 		var counter1= 1;
		var limit = 3;
		function addInput(divName){
     		if (counter1 == limit)  {
          		alert("You have reached the limit of adding " + counter + " inputs");
          	}
     		else {
          		var newdiv = document.createElement('div');
          		newdiv.innerHTML = " <br><select class='form-dropdown' name='city1'><option> Ahmedabad</option><option> Amreli</option><option> Anand</option><option>Aravali </option> <option> Banaskantha</option><option> Bharuch</option> <option> Bhavnagar</option> <option> Botad</option> <option> Chhota Udaipur</option><option> Devbhoomi Dwarka</option><option> Dohad</option><option> Gandhinagar</option><option> Gir Somnath</option><option> Jamnagar</option><option> Junagadh</option><option> Kachchh</option><option>Kheda</option><option> Mahisagar</option><option> Mehsana </option> <option> Morbi </option><option> Narmada </option><option> Navsari </option><option> PanchMahal </option><option> Patan </option><option> Porbandar</option><option > Rajkot </option><option> Sabarkantha </option><option> Surat </option> <option> Surendranagar</option><option> Tapi </option><option> The Dangs</option><option > Vadodara</option><option> Valsad</option></select>";
          		document.getElementById(divName).appendChild(newdiv);
          		counter1++;
     }
		
}
	</script>

	<script type="text/javascript">
 		var counter2= 1;
		var limit = 3;
		function addInput1(divName){
     		if (counter2== limit)  {
          		alert("You have reached the limit of adding " + counter + " inputs");
          	}
     		else {
          		var newdiv = document.createElement('div');
          		newdiv.innerHTML = " <br><select class='form-dropdown' name='Sector'><option>Agriculture </option><option> College </option><option> Construction </option><option> House </option><option> Hospital </option><option> Industrial Worker  </option><option> Office </option><option>Railways </option> <option>Sweeping and Cleaning </option> <option> Transport </option><option> Watch and Ward  </option></select>";
          		document.getElementById(divName).appendChild(newdiv);
          		counter2++;
     }
		
}
	</script><script type="text/javascript">
 		var counter3= 1;
		var limit = 3;
		function addInput2(divName){
     		if (counter3 == limit)  {
          		alert("You have reached the limit of adding " + counter + " inputs");
          	}
     		else {
          		var newdiv = document.createElement('div');
          		newdiv.innerHTML = " <br><select class='form-dropdown' name='Skill'><option> Carpenter </option><option> Cobbler </option><option> Cleaner </option><option>Driver </option><option> Electrician </option><option> Farmer </option><option>House Keeper </option><option > Mechanic </option><option> Peon </option><option> Plumbing </option><option> Wall painter </option><option> Worker </option><option>Watchman </option></select>";
          		document.getElementById(divName).appendChild(newdiv);
          		counter3++;
     }
		
}
	</script>

</head>
<body background="dailyimg.jpg" background-align="center">
	<div class="w3ls-banner">
	<div class="heading">
		<h1> Daily Workers </h1>
	</div>
		<div class="container">
			<div class="heading">
				<h2>Please Enter Your Details</h2>
				<p>Fill the application form below and submit.</p>
			</div>
			<div class="agile-form">
				<form action="daily.php" method="POST">
					<?php include('errors.php'); ?>
					<ul class="field-list">
						<li class="name">
							<label class="form-label"> Name <span class="form-required"> * </span></label>
							<div class="form-input add">
								<span class="form-sub-label">
									<input type="text" name="Fname" placeholder="First Name" required>
								</span>
								<span class="form-sub-label">
									<input type="text" name="Lname" placeholder="Last Name" required>
								</span>
							</div>
						</li>
						<li> 
							<label class="form-label"> Adhaar number <span class="form-required"> * </span></label>
							<div class="form-input">


								<input  id="Phonenum" type="text" pattern="^\d{12}$" name="Adhaar_number" placeholder="Enter number" required>
							
							</div>
						</li>
						<li>
							<label class="form-label"> Gender <span class="form-required"> * </span></label>
							<div class="form-input">
								<select class="form-dropdown" name="gender" required>
									<option value="">Gender</option>
									<option value="Male"> Male </option>
									<option value="Female"> Female </option>
									<option value="Transgender"> Transgender </option>
								</select>
							</div>
						</li>
						<li> 
							<label class="form-label" for="Phonenum"> Contact <span class="form-required"> * </span></label>
							<div class="form-input">
								<input  id="Phonenum" type="text" pattern="^\d{10}$" name="mobile_number" placeholder="Phone Number" required >

							</div>
						</li>
						<li> 
							<label class="form-label"> Other Contact <span>  </span></label>
							<div class="form-input">
								<input  id="Phonenum" type="text" pattern="^\d{10}$" name="mobile_number" placeholder="Phone Number">


							</div>
						</li>
						<li> 
							<label class="form-label">
							  Current Address<span class="form-required"> * </span>
							</label>
							<div class="form-input add">
								<span class="form-sub-label">
									<input type="text" name="tstreet_address" placeholder="Street Address " required>
								</span>
								<span class="form-sub-label">
									<input type="text" name="tstreet_address2" placeholder="Street Line 2 " required>
								</span>
								<span class="form-sub-label">
									<input type="text" name="tlandmark" placeholder="Landmark " required>
								</span>
								<span class="form-sub-label">
									<input type="text" name="tCity" placeholder="City" required>
								</span>
								<span class="form-sub-label last">
									<input type="text" name="tstate" placeholder="State / Province " required>
								</span>
								<span class="form-sub-label last">
									<input type="text" name="tcode" placeholder="Postal / Zip Code " required>
								</span>
							</div>
						</li>
						<li> 
							<label class="form-label"></label>
							<div class="form-input">
								<input type="checkbox" name="same" value="same">Permenant address same as Current Address
							</div>
						</li>
						<li> 
							<label class="form-label">
							  Permenent Address<span class="form-required"></span>
							</label>
							<div class="form-input add">
								<span class="form-sub-label">
									<input type="text" name="street_address" placeholder="Street Address ">
								</span>
								<span class="form-sub-label">
									<input type="text" name="street_address2" placeholder="Street Line 2 ">
								</span>
								<span class="form-sub-label">
									<input type="text" name="landmark" placeholder="Landmark ">
								</span>
								<span class="form-sub-label">
									<input type="text" name="City" placeholder="City">
								</span>
								<span class="form-sub-label last">
									<input type="text" name="state" placeholder="State / Province ">
								</span>
								<span class="form-sub-label last">
									<input type="text" name="code" placeholder="Postal / Zip Code ">
								</span>
							</div>
						</li>
						<li>
							<label class="form-label"> City <span class="form-required"> for Work *</span></label>
							<div class="form-input">
								<select class="form-dropdown" name="WCity" required>
									<option value="">Select City</option>
									<option value="Ahmedabad">Ahmedabad</option>
									<option value="Amreli">Amreli</option>
									<option value="Anand">Anand</option>
									<option value="Aravalli">Aravalli</option>
									<option value="Banaskantha">Banaskantha</option>
									<option value="Bharuch">Bharuch</option>
									<option value="Bhavnagar">Bhavnagar</option>
									<option value="Botad">Botad</option>
									<option value="Chhota Udaipur">Chhota Udaipur</option>
									<option value="Dahod">Dahod</option>
									<option value="Dang">Dang</option>
									<option value="Dwarka">Dwarka</option>
									<option value="Gandhinagar">Gandhinagar</option>
									<option value="Jamnagar">Jamnagar</option>
									<option value="Junagadh">Junagadh</option>
									<option value="Kutch">Kutch</option>
									<option value="Kheda">Kheda</option>
									<option value="Mahisagar">Mahisagar</option>
									<option value="Mehsana">Mehsana</option>
									<option value="Morbi">Morbi</option>
									<option value="Narmada">Narmada</option>
									<option value="Navsari">Navsari</option>
									<option value="Panchmahal">Panchmahal</option>
									<option value="Patan">Patan</option>
									<option value="Porbandar">Porbandar</option>
									<option value="Rajkot">Rajkot</option>
									<option value="Sabarkantha">Sabarkantha</option>
									<option value="Surat">Surat</option>
									<option value="Surendranagar">Surendranagar</option>
									<option value="Tapi">Tapi</option>
									<option value="Vadodara">Vadodara</option>
									<option value="Valsad">Valsad</option>
									<option value="Veraval">Veraval</option>
								</select>
							</div>
                            <input type="button" name="add" value="add"  onclick="addInput('city1')">

						</li>
						<li>
							<label class="form-label"> Date of Birth <span class="form-required"> * </span></label>
							<div class="form-input dob">
								<span class="form-sub-label">
									<select name="day" class="day" required>
										<option>Day</option>
										<option value="1"> 1 </option>
										<option value="2"> 2 </option>
										<option value="3"> 3 </option>
										<option value="4"> 4 </option>
										<option value="5"> 5 </option>
										<option value="6"> 6 </option>
										<option value="7"> 7 </option>
										<option value="8"> 8 </option>
										<option value="9"> 9 </option>
										<option value="10"> 10 </option>
										<option value="11"> 11 </option>
										<option value="12"> 12 </option>
										<option value="13"> 13 </option>
										<option value="14"> 14 </option>
										<option value="15"> 15 </option>
										<option value="16"> 16 </option>
										<option value="17"> 17 </option>
										<option value="18"> 18 </option>
										<option value="19"> 19 </option>
										<option value="20"> 20 </option>
										<option value="21"> 21 </option>
										<option value="22"> 22 </option>
										<option value="23"> 23 </option>
										<option value="24"> 24 </option>
										<option value="25"> 25 </option>
										<option value="26"> 26 </option>
										<option value="27"> 27 </option>
										<option value="28"> 28 </option>
										<option value="29"> 29 </option>
										<option value="30"> 30 </option>
										<option value="31"> 31 </option>
									</select>
								</span>
								<span class="form-sub-label">
									<select name="month" required>
										<option>Month</option>
										<option value="January"> January </option>
										<option value="February"> February </option>
										<option value="March"> March </option>
										<option value="April"> April </option>
										<option value="May"> May </option>
										<option value="June"> June </option>
										<option value="July"> July </option>
										<option value="August"> August </option>
										<option value="September"> September </option>
										<option value="October"> October </option>
										<option value="November"> November </option>
										<option value="December"> December </option>
									 </select>
								</span>
								<span class="form-sub-label">
									<select name="year" required>
										<option>Year</option>
										<option value="1990"> 1990 </option>
										<option value="1990"> 1991 </option>
										<option value="1990"> 1992 </option>
										<option value="1990"> 1993 </option>
										<option value="1990"> 1994 </option>
										<option value="1990"> 1995 </option>
										<option value="1990"> 1996 </option>
										<option value="1990"> 1997 </option>
										<option value="1990"> 1998 </option>
										<option value="1990"> 1999 </option>
										<option value="1990"> 2000 </option>
										<option value="1990"> 2001 </option>
										<option value="1990"> 2002 </option>
										<option value="1990"> 2003 </option>
										<option value="1990"> 2004 </option>
										<option value="1990"> 2005 </option>
										<option value="1990"> 2006 </option>
										<option value="1990"> 2007 </option>
										<option value="1990"> 2008 </option>
										<option value="1990"> 2009 </option>
										<option value="1990"> 2010 </option>
										<option value="1990"> 2011 </option>
										<option value="1990"> 2012 </option>
										<option value="1990"> 2013 </option>
										<option value="1990"> 2014 </option>
										<option value="1990"> 2015 </option>
										<option value="1990"> 2016 </option>
										<option value="1990"> 2017 </option>
										<option value="1990"> 2018 </option>
									 </select>
								</span>
							</div>
						</li>
						<li> 
							<label class="form-label"> E-Mail Address <span class="form">  </span></label>
							<div class="form-input">
								<input type="email" name="email" placeholder="Mail@example.com" >
							
							</div>
						</li>
									<li>
							<label class="form-label"> Skills <span class="form-required"> * </span></label>
							<div class="form-input">
								<select class="form-dropdown" name="Skills" required>
									<option value="">Skills</option>
                                    <option value="Carpenter"> Carpenter </option>
									<option value="Cobbler"> Cobbler </option>
                                    <option value="Cleaner"> Cleaner </option>
                                    <option value="Driver">Driver </option>
                                    <option value="Electrician"> Electrician </option>
                                    <option value="Farmer"> Farmer </option>
                                    <option value="House Keeper">House Keeper </option>
                                    <option value="Mechanic"> Mechanic </option>
                                    <option value="Peon"> Peon </option>
									<option value="Plumbing"> Plumbing </option>
                                	<option value="Wall painter"> Wall painter </option>
                                    <option value="Worker"> Worker </option>
                                     <option value="Watchman">Watchman </option>
								</select>
                                   <input type="button" name="add" value="add"  onclick="addInput2('skill1')">
							</div>
						</li>
							<li>
							<label class="form-label">Sector<span class="form-required"> * </span></label>
							<div class="form-input">
								<select class="form-dropdown" name="Work_Area" required>
									<option value="">Sector</option>
                                     <option value="Agriculture">Agriculture </option>
                                          <option value="College"> College </option>
									<option value="Construction"> Construction </option>
                                    <option value="House"> House </option>
                                    <option value="Hospital"> Hospital </option>
									<option value="Industrial Worker "> Industrial Worker  </option>
									<option value="Office"> Office </option>
                                    <option value="Railways">Railways </option> 
                                    <option value="Sweeping and Cleaning">Sweeping and Cleaning </option> 
                                    <option value="Transport"> Transport </option>
                                       <option value="Watch and Ward "> Watch and Ward  </option>
								</select>
                                         <input type="button" name="add" value="add"  onclick="addInput1('sector1')">
							</div>
						</li>
						<li> 
							<label class="form-label"> Certificate(If Any) <span class="form-required">  </span></label>
							<div class="form-input">
								<input type="file" id="myFile" name="Certificate">
							</div>
						</li>
					</ul>
					<div>
						<button type="submit" name="submit" class="subbut"><span>Submit</span></button><br> 
					</div>
				</form>	
			</div>
			<div>
			<button class="button" onclick="goBack()">Back</button>
            <script>function goBack(){window.history.back();}</script>
			</div>
		</div>
		
	</div>
</body>
</html>
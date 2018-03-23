<?php include ('permanentser.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>hello</title>
	<!-- Meta tags -->
	<title><General Application Form</title>
	<meta name="keywords" content="General Application Form Responsive widget, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- stylesheets -->
	<link rel="stylesheet" href="preg.css" type="text/css" media="all">
	
	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

	<script type="text/javascript">
 		var counter = 1;
		function addInput(divName){
     		if (counter >= 3)  {
          		alert("You have reached the limit of adding " + counter + " inputs");
          	}
     		else {
          		var newdiv = document.createElement('div');
          		newdiv.innerHTML = " <br><select class='form-dropdown' name='city1'><option>Valsad</option><option>Vadodara</option></select>";
          		document.getElementById(divName).appendChild(newdiv);
          		counter++;
     }
		
}
	</script>

	<script type="text/javascript">
 		var counter1 = 1;
		function addInput1(divName){
     		if (counter1 >= 3)  {
          		alert("You have reached the limit of adding " + counter + " inputs");
          	}
     		else {
          		var newdiv = document.createElement('div');
          		newdiv.innerHTML = " <br><select class='form-dropdown' name='city1'><option>Valsad</option><option>Vadodara</option></select>";
          		document.getElementById(divName).appendChild(newdiv);
          		counter1++;
     }
		
}
	</script><script type="text/javascript">
 		var counter2 = 1;
		function addInput2(divName){
     		if (counter2 >= 3)  {
          		alert("You have reached the limit of adding " + counter + " inputs");
          	}
     		else {
          		var newdiv = document.createElement('div');
          		newdiv.innerHTML = " <br><select class='form-dropdown' name='city1'><option>Valsad</option><option>Vadodara</option></select>";
          		document.getElementById(divName).appendChild(newdiv);
          		counter2++;
     }
		
}
	</script>
</head>
<body background="dailyimg.jpg" background-align="center">
	<div class="w3ls-banner">
	<div class="heading">
		<h1>General Application Form</h1>
	</div>
		<div class="container">
			<div class="heading">
				<h2>Please Enter Your Details</h2>
				<p>Fill the application form below and submit.</p>
			</div>
			<div class="agile-form">
				<form action="#" method="POST">
					<ul class="field-list">
						<li class="name">
							<label class="form-label"> Name <span class="form-required"> * </span></label>
							<div class="form-input add">
								<span class="form-sub-label">
									<input type="text" name="firstname" placeholder="First Name" required>
								</span>
								<span class="form-sub-label">
									<input type="text" name="lastname" placeholder="Last Name" required>
								</span>
							</div>
						</li>
                        <li class="name">
                            <label class="form-label"> Adhaar no<span class="form-required"> * </span></label>
                            <div class="form-input add">
                                <span clas="form-sub-label">
                                    <input id="Phonenum" type="text" pattern="^\d{12}$" type="text" name="Adhaar" placeholder="adhaar" required>
                                </span>
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
							<label class="form-label"> Phone Number <span class="form-required"> * </span></label>
							<div class="form-input">
								<input id="Phonenum" type="text" name="mobile_number" pattern="^\d{10}$" placeholder="Phone Number" required >
							</div>
						</li>
                        <li> 
							<label class="form-label">
							   Current<span class="form-required"> Address *</span>
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
									<input type="text" name="City" placeholder="City ">
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
							<label class="form-label"></label>
							<div class="form-input">
								<input type="checkbox" name="same" value="same">Permenant address same as Current Address
							</div>
						</li>
                        <li> 
							<label class="form-label">
							   Permenant<span class="form-required"> Address </span>
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
							<label class="form-label"> City <span class="form-required"> for Work *</span></label>
							<div class="form-input" id="city1">
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
								<input type="button" name="add" value="add"  onclick="addInput('city1')">
							</div>
							</div>
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
							<br>
							<label class="form-label"> E-Mail Address <span class="form-required"> * </span></label>
							<div class="form-input">
								<input type="email" name="email" placeholder="Mail@example.com" required>
							
							</div>
						</li><br>
                        <li class="name">
                            <label class="form-label"> Password <span class="form-required"> * </span></label>
                            <div class="form-input add">
                                <span clas="form-sub-label">
                                    <input type="password" name="Password" placeholder="password" required>
                                </span>
                            </div>
                        </li><br>
                        <li class="name">
                            <label class="form-label"> Desigination <span class="form-required"> * </span></label>
                            <div class="form-input add">
                            <select class="form-dropdown" name="Degree" required>
                               <option value="B.Arch">Bachelor of Architecture-B.Arch</option>
                               <option value="B.A">Bachelor of Arts</option>
                               <option value="B.A.M.S.">Bachelor of Ayurvedic Medicine & Surgery-B.A.M.S.</option>
                               <option value="B.B.A.">Bachelor of Buisness Applications-B.B.A.</option>
                               <option value="B.Com">Bachelor of Commerce-B.Com</option>
                               <option value="B.C.A">Bachelor of Computer Application-B.C.A</option>
                               <option value="B.D.S">Bachelor of Dental Surgery=B.D.S</option>
                               <option value="B.Ed.">Bachelor of Education-B.Ed</option>
                               <option value="B.E./B.Tech.">Bachelor of Engineering/Bachelor of Technology-B.E./B.Tech</option>
                               <option value="B.D.">Bachelor of Design-B.D</option>
                               <option value="B.F.Sc">Bachelor of Fisheries Science-B.F.SC/B.Sc</option>
                               <option value="B.H.M.S.">Bachelor of Homeopathic Science-B.H.M.S</option>
                               <option value="L.L.B">Bachelor of Laws-L.L.B</option>
                               <option value="B.Lib">Bachelor of Library Science-B.Lib</option>
                               <option value="B.M.C/B.M.M">Bachelor of Mass Communications-B.M.C/B.M.M</option>
                               <option value="M.B.B.S.">Bachelor of Medicine and Bachelor of Surgery-M.B.B.S</option>
                               <option value="B.Pharma">Bachelor of Pharmacy-B.Pharma/option>
                               <option value="B.P.T.">Bachelor of Physiotherapy-B.P.T.</option>
                               <option value="B.Sc">Bachelor of Science-B.Sc</option>
                               <option value="BSW">Bachelor of Social Work-BSW</option>
                               <option value="M.D">Doctor of Medicine-M.D</option>
                               <option value="Pharm.D">Doctor of Pharmacy</option>
                               <option value="Ph.D">Doctor of Philosophy</option>
                               <option value="D.M">Doctorate of Medicine</option>
                               <option value="M.Arch">Master of Architecture-M.Arch</option>
                               <option value="M.A.">Master of Arts-M.A.</option>
                               <option value="M.B.A.">Master of Buisness Administration-M.B.A.</option>
                               <option value="M.Comm">Master of Commerce-M.Com.</option>
                               <option value="M.C.A.">Master of Computer Applications-M.C.A.</option>
                               <option value="M.D.S.">Master of Design-M.Des.</option>
                               <option value="M.Ed.">Master of Education-M.Ed.</option>
                               <option value="M.E/M.Tech.">Master of Engineering/Master of Technology</opyion>
                               <option value="MFA">Master of Fine Arts-MFA</option>
                               <option value="L.L.M">Master of Laws</option>
                               <option value="M.Lib.">Master of Library-M.Lib</option>
                               <option value="M.M.C./M.M.M.">Master of Mass Communication/Mass Media-M.M.C./M.M.M</option>
                               <option value="M.Pharm">Master of Pharmacy-M.Pharm</option>
                               <option value="M.Phil.">Master of Philosophy-M.Phil.</option>
                               <option value="M.P.T.">Master of Physiotheraphy-M.P.T</option>
                               <option value="M.Sc.">Master of Science-M.Sc.</option>
                               <option value="others">Others</option>
                            </select>
                            </div>
                        </li><br>
                        <li class="name">
                            <label class="form-label"> Experience <span class="form-required"> </span></label>
                            <div class="form-input add">
                                <span clas="form-sub-label">
                                    <input type="text" name="Experience" placeholder="Experience">
                                </span>
                            </div>
                        </li><br>
                        <li class="name">
                            <label class="form-label"> Requirements <span class="form-required">*</span></label>
                            <div class="form-input add">
                                <span clas="form-sub-label">
                                    <input type="text" name="Requirements" placeholder="Requirements" required>
                                </span>
                            </div>
                        </li><br>
                        <li class="name">
                            <label class="form-label"> Sectors <span class="form-required"> * </span></label>
                            <div class="form-input add" id="sector1">
                            <select class="form-dropdown" name="sector" value="Select your sector" required>
                               <option value="Agriculture">Agriculture<option>
                               <option value="Apparels">Apparels</option>
                               <option value="Automotive">Automotive</option>
                               <option value="Arms & Ammunitions">Arms & Ammunitions</option>
                               <option value="Aviation & AeroSpace">Aviation & Aerospace</option>
                               <option value="Beauty & Wellness">Beauty & Wellness</option>
                               <option value="BFSI">Banking, Financial, Services & Insurances</option>
                               <option value="Capital Goods">Capital Goods</option>
                               <option value="Construction">Construction</option>
                                <option value="Chemicals & Petrochemicals">Chemicals & Petrochemicals</option>
                               <option value="Dance">Dance</option>
                               <option value="Defence">Defence</option>
                                <option value="Entertainment">Entertainment</option>
                               <option value="Electronics & Hardware">Hardware</option>
                                <option value="Event Management">Event Management</option>
                               <option value="Food Processing">Food & Processing</option>
                             <option value="Food and Beverages">Food and Beverages</option>
                               <option value="Gems & Jwellery">Gems & Jwellery</option>
                               <option value="Handicraft">Handicraft</option>
                               <option value="Healthcare">Healthcare</option>
                               <option value="Infrastructure Equipment">Infrastructure Equipment</option>
                               <option value="Iron & Steel">Iron & Steel</option>
                               <option value="IT-ITeS">It-ITeS</option>
                               <option value="Leather">Leather</option>
                               <option value="Life Sciences">Life Sciences</option>
                                <option value="Law Firm">Law Firm</option>
                               <option value="Logistics">Logistics</option>
                               <option value="Media">Media</option>
                               <option value="Mining">Mining</option>
                               <option value="Oil & Gas">Oil & Gas</option>
                                <option value="Office">Office</option>
                               <option value="Power">Power</option>
                               <option value="Retail">Retail</option>
                               <option value="Security">Security</option>
                               <option value="Sports">Sports</option>                            
                               <option value="Singing">Singing</option>
                              <option value="Shipping">Shipping</option>
                              <option value="School">School</option>
                               <option value="Telecom">Telecom</option>
                               <option value="Textiles & Handlooms">Textiles & Handlooms</option>
                               <option value="Tourism & Hospitality">Tourism & Hospitality</option>
                               <option value="Transport">Transport</option>
                               <option value="University">University</option>

                            </select>
                            <input type="button" name="add" value="add"  onclick="addInput1('sector1')">
                            </div>
                            </label>
                        </li><br>
                        <li class="name">
                            <label class="form-label"> Skills <span class="form-required"> * </span></label>
                            <div class="form-input add" id="skill1">
                            <select class="form-dropdown" name="Degree">
                              <option value="Accounts">Accounts</option>
                               <option value="Clerk">Clerk</option>
                               <option value="CEO">CEO</option>
                               <option value="Cheif">Cheif</option>
                               <option value="Chef">Chef</option>
                               <option value="Financer">Financer</option>
                                <option value="Law">Law</option>
                             <option value="Manager">Manager</option>
                                 <option value="Professor">Professor</option>
                               <option value="Teacher">Teacher</option>                       
                            </select>
                            <input type="button" name="add" value="add"  onclick="addInput2('skill1')">
                            </div><br>
                            </label>
                        </li><br>
                        <li class="name">
                            <label class="form-label">Certificates <span class="form-required">*</span></label>
                            <div class="form-input">
									<input type="file" id="myFile" name="Certificate" required>
							</div>
                        </li>
                    </ul><br>
					<div>
						<button type="submit" name="submit" class="subbut"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSubmit&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button><br>
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

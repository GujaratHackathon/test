<?php include ('coser.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Company Registeration</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sports Club Membership Registration form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" 
/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="coregi.css" rel="stylesheet" type="text/css" media="all"/><!--style_sheet-->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700" rel="stylesheet">
<!--online_fonts-->
<link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet"><!--online_fonts-->
</head>
<body background="bg.jpg" background="no-reapeat" background="center">
<h1>Company's Membership Form</h1>
<div class="w3ls-main">
<h2>Registration Form</h2>
<p>Complete the form below to sign up for our membership service.</p>
<div class="w3ls-form">
<form action="#" method="POST">
<?php include('errors.php'); ?>
<ul class="fields">
<div class="Refer_w3l">
<h3>Your details</h3>
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
 		var counter3= 1;
		var limit = 3;
		function addInput2(divName){
     		if (counter3 == limit)  {
          		alert("You have reached the limit of adding " + counter + " inputs");
          	}
     		else {
          		var newdiv = document.createElement('div');
          		newdiv.innerHTML = " <br><select class='form-dropdown' name='Skill'><option value="Accounts">Accounts</option><option >Clerk</option><option>CEO</option><option>Cheif</option><option>Chef</option>  <option> Carpenter </option><option> Cobbler </option><option> Cleaner</option><option>Driver </option><option> Electrician </option><option> Farmer </option><option>Financer</option><option>House Keeper</option> <option>Law</option><option> Mechanic </option><option>Manager</option><option> Peon </option><option> Plumbing </option><option>Professor</option> <option>Teacher</option> <option> Wall painter </option><option> Worker </option><option>Watchman </option></select>";
          		document.getElementById(divName).appendChild(newdiv);
          		counter3++;
     }
		
}
	</script>
 <body>   
	<li>	
		<label class="w3ls-opt">Company name<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
			<input type="text" name="Company_name"  placeholder="company name" required=" "/>
		</div>
	</li>
    <li>	
		<label class="w3ls-opt">Owner Name<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
			<input type="text" name="owner_name"  placeholder="owner name" required=" "/>
		</div>
	</li>
    <li>	
		<label class="w3ls-opt">Reg_Name<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
			<input type="text" name="Registerer_name"  placeholder="Registerer name" required=" "/>
		</div>
	</li>
       <li>	
		<label class="w3ls-opt">Reg_Designation<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
            <select name="Reg_DEsigination">
                <option value="">Registerer_Designation</option>
                <option value="Chairman">Chairman</option>
                 <option value="Vice Chairman ">Vice Chairman  </option>
                 <option value="Chairman cum Managing Director">Chairman cum Managing Director</option>
                  <option value=" Managing Director "> Managing Director  </option>
                  <option value="Sr. Vice president">Sr. Vice president </option>
                  <option value="Vice President">Vice President</option>
                  <option value=" General Manager"> General Manager </option>
                  <option value="Joint General Manager">Joint General Manager </option>
                  <option value=" Deputy General Manager"> Deputy General Manager </option>
                  <option value=" Asst. General Manager "> Asst. General Manager  </option>
                  <option value="Chief Manager ">Chief Manager  </option>
                    <option value="Sr. Manager Manager">Sr. Manager Manager </option>
                  <option value="Joint Manager ">Joint Manager  </option>
                  <option value="Deputy Manager">Deputy Manager </option>
                  <option value=" Asst. Manager"> Asst. Manager </option>
                  <option value=" Sr. Officer Officer"> Sr. Officer Officer </option>
                  <option value=" Jr. Officer "> Jr. Officer  </option>
                 <option value="Sr. Associate Associate">Sr. Associate Associate </option>
                 <option value=" Jr. Associate "> Jr. Associate  </option>
                 <option value="Assistant ">Assistant  </option>
            </select>
		</div>
	</li>
    <li>	
		<label class="w3ls-opt">Company Type<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">
            <select name="C_type">
                <option value="Public limited company (PLC)">Public limited company (PLC)</option>
                <option value="Private company limited by shares (LTD)">Private company limited by shares (LTD)</option>
                 <option value="Semi goverment company (SGC)">Semi goverment company (SGC)</option>
            </select>
		</div>
	</li>
    <li>	
		<label class="w3ls-opt">Total Employees<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
			<input type="number" name="Emp_strength"  placeholder="Strength of employee" required=" "/>
		</div>
	</li>
    <li>	
		<label class="w3ls-opt">Contact<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
			<input type="text" name="Contact" pattern="^\d{10}$" placeholder="contact" required=" "/>
		</div>
	</li>
    <li>
		<label class="w3ls-opt">Address: <span class="w3ls-star"> * </span> </label>
		<div class="adderss">
			<span class="text">
				<input type="text" name="C_address" placeholder="street address" required=" ">
			</span>
			<span class="text">
				<input type="text" name="C_line" placeholder="street line2" required=" ">
			</span>
			<span class="text">
				<input type="text" name="city" placeholder="city" required="">
				
			</span>
			<span class="text">
				<input type="text" name="street" placeholder="state/province" required="">
				
			</span>
			<span class="text">
				<input type="text" name="zipcode" placeholder="postal/zipcode" required="">
			</span>
			<span class="text">
				<input type="text" name="country" placeholder="country" required="">
			</span>
		</div>
	</li>
	<li>
		<div class="mail">
			<label class="w3ls-opt">e-mail <span class="w3ls-star"> * </span></label>
			<span class="w3ls-text w3ls-name">
				<input type="email" name="email" placeholder="enter your e-mail" required=""/>
			</span>
		</div>
	</li>
	<li>	
		<label class="w3ls-opt">Password<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
			<input type="password" name="Password"  placeholder="password" required=" "/>
		</div>
	</li>
    <li>	
		<label class="w3ls-opt">Buisness_licence <span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
			<select name="Buisness_licence">
                <option value="  Liquor License Renewals and Transfers" >  Liquor License Renewals and Transfers</option>
                  <option value="  Exhibitors Affidavit">  Exhibitors Affidavit</option>
                  <option value="Traders License">Traders Licence</option>
                  <option value="Slot Machine Licenses">  Slot Machine Licenses</option>
                  <option value=" Chain Store License"> Chain Store License</option>
                  <option value="  Scrap Metal Processor Junk Dealer and Agent License">  Scrap Metal Processor Junk Dealer and Agent License</option>
                  <option value="  Peddlers License">  Peddlers License</option>
                  <option value="  Vending Machine License">  Vending Machine License</option>
                  <option value="  Transient Vendors License">  Transient Vendors License</option>
                  <option value="  ELECTRONIC NICOTINE DELIVERY SYSTEMS (ENDS) Retailer">  ELECTRONIC NICOTINE DELIVERY SYSTEMS (ENDS) Retailer</option>
                  <option value="  Construction License">  Construction License</option>
                  <option value=" Storage Warehouse License"> Storage Warehouse License</option>
                
            </select>
		</div>
	</li>
	<li>
		<label class="w3ls-opt">Registration number<span class="w3ls-star"> * </span></label>	
			<span class="w3ls-text w3ls-name">
				<input type="number" name="Reg_number" placeholder="Registeration number" required=""/>
			</span>
	</li>
       <li>
		<label class="w3ls-opt">Branches<span class="w3ls-star"> * </span></label>	
			<div class="w3ls-text w3ls-name">
                <select class="form-dropdown" name="Branch" required>
				 <option value="Ahmedabad"> Ahmedabad</option>
                                    <option value="Amreli"> Amreli</option>
                                    <option value="Anand"> Anand</option>
                                    <option value="Aravali">Aravali </option>
                                    <option value="Banaskantha"> Banaskantha</option>
                                    <option value="Bharuch"> Bharuch</option>
                                    <option value="Bhavnagar"> Bhavnagar</option>
                                    <option value="Botad"> Botad</option>
                                    <option value="Chhota Udaipur"> Chhota Udaipur</option>
                                    <option value="Devbhoomi Dwarka"> Devbhoomi Dwarka</option>
                                    <option value="Dohad"> Dohad</option>
                                    <option value="Gandhinagar"> Gandhinagar</option>
                                    <option value="Gir Somnath"> Gir Somnath</option>
                                    <option value="Jamnagar"> Jamnagar</option>
                                    <option value="Junagadh"> Junagadh</option>
                                    <option value="Kachchh"> Kachchh</option>
                                    <option value="Kheda">Kheda</option>
									<option value="Mahisagar"> Mahisagar</option>
									<option value="Mehsana"> Mehsana </option>
                                    <option value="Morbi"> Morbi </option>
                                    <option value="Narmada"> Narmada </option>
                                    <option value="Navsari"> Navsari </option>
                                    <option value="PanchMahal"> PanchMahal </option>
                                    <option value="Patan"> Patan </option>
                                    <option value="Porbandar"> Porbandar</option>
                                    <option value="Rajkot"> Rajkot </option>
                                    <option value="Sabarkantha"> Sabarkantha </option>
                                    <option value="Surat"> Surat </option>
                                    <option value="Surendranagar"> Surendranagar</option>
									<option value="Tapi"> Tapi </option>
									<option value="The Dangs"> The Dangs</option>
									<option value="Vadodara"> Vadodara</option>
									<option value="Valsad"> Valsad</option>
                </select>
                <input type="button" name="add" value="add"  onclick="addInput('city1')">
        </div>
	</li>
<li>
							<label class="form-label"> Skills <span class="form-required"> * </span></label>
							<div class="form-input">
								<select class="form-dropdown" name="Skills" required>
								        <option value="Accounts">Accounts</option>
                                   <option value="Clerk">Clerk</option>
                                    <option value="CEO">CEO</option>
                                    <option value="Cheif">Cheif</option>
                                    <option value="Chef">Chef</option>  
                                    <option value="Carpenter"> Carpenter </option>
									<option value="Cobbler"> Cobbler </option>
                                    <option value="Cleaner"> Cleaner </option>
                                    <option value="Driver">Driver </option>
                                    <option value="Electrician"> Electrician </option>
                                    <option value="Farmer"> Farmer </option>
                                   <option value="Financer">Financer</option>  
                                    <option value="House Keeper">House Keeper </option>
                                   <option value="Law">Law</option>     
                                    <option value="Mechanic"> Mechanic </option>
                                    <option value="Manager">Manager</option>
                                    <option value="Peon"> Peon </option>
									<option value="Plumbing"> Plumbing </option>
                                   <option value="Professor">Professor</option> 
                                   <option value="Teacher">Teacher</option> 
                                 	<option value="Wall painter"> Wall painter </option>
                                    <option value="Worker"> Worker </option>
                                     <option value="Watchman">Watchman </option>
        
								</select>
                                 <input type="button" name="add" value="add"  onclick="addInput2('skill1')">
							</div>
						</li>
							
<div class="clear"></div>
	<div class="w3ls-btn">
		<input type="submit" name="submit" value="Submit">
		<input type="submit" onclick="goBack()" value="Back">
        <script>function goBack(){window.history.back();}</script>
	</div>
</form>
</div>
</div>
<footer></footer>
</body>
</html>
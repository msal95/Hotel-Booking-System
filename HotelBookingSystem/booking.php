<?php require_once("header.php");

?>
 <?php
	if(isset($_POST['booking']))
	{
		
		$package_price=mysql_fetch_array(mysql_query("select price from packages where package_id=".$_GET['packageID']));
		
		$total_all=$package_price['price']*$_POST['nights'];
		if(!empty($_POST['vehicle_id'])):
		$vehiclePrice=mysql_fetch_array(mysql_query("select price from vehicle where vehicle_id=".$_POST['vehicle_id']));
		$total_all=$total_all+$vehiclePrice['price'];
		endif;
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$city=$_POST['city'];
		$country=$_POST['country'];
		$cdate=$_POST['cdate'];
		$adults=$_POST['adult'];
		$childrens=$_POST['childrens'];
		$nights=$_POST['nights'];
		$place=$_POST['place'];
		$hotel=$_POST['hotel'];
		$package=$_POST['package'];
		$cnic=$_POST['cnic'];
		$vehicle_id=$_POST['vehicle_id'];
		$total_price=$total_all;
		$comments=$_POST['comments'];
		
		
		$insert_data=mysql_query("INSERT INTO booking(name,email,phone,city,country,checkin_date,adults,childrens,nights,place,hotel_id,package_id,cnic,vehicle_id,total_price,comments) 
VALUES('$name','$email','$phone','$city','$country','$cdate','$adults','$childrens','$nights','$place','$hotel','$package','$cnic','$vehicle_id','$total_price','$comments')");
	
	if($insert_data)
	{
		$data_txt="Booking Done";
		header("Refresh: 5; url=index.php");
	}
	else
	{
		$data_txt="Booking Not Done";
	}
	}
	
	 ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Book Your Holidays
                    
                </h1>
                
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <section>
        	<div class="row">
            	<div class="col-md-12">
                	<form method="post">
                    <input type="hidden" value="<?php echo $_GET['placeID']; ?>" name="place">
                    <input type="hidden" value="<?php echo $_GET['hotelID']; ?>" name="hotel">
                    <input type="hidden" value="<?php echo $_GET['packageID']; ?>" name="package">
                    
                     
                    
                    	    <?php $package=mysql_fetch_array(mysql_query("select * from packages where package_id=".$_GET['packageID'])); ?>
                         <?php $place=mysql_fetch_array(mysql_query("select * from places where place_id=".$_GET['placeID'])); ?>
                         <?php $hotel=mysql_fetch_array(mysql_query("select * from hotels where hotel_id=".$_GET['hotelID'])); ?>
                        <div class="form-group col-md-12">
    							<label>Selected Package Name</label>
    							<input type="text" value="<?php echo $package["title"]; ?>" disabled class="form-control">
  						</div>
                        
                        
                        <div class="form-group col-md-6">
    							<label>Selected Place Name</label>
    							<input type="text"  value="<?php echo $place["heading"]; ?>" disabled class="form-control">
  						</div>
                        
                        <div class="form-group col-md-6">
    							<label>Selected Hotel Name</label>
    							<input type="text" value="<?php echo $hotel["title"]; ?>" disabled class="form-control">
  						</div>
                      <div class="form-group col-md-12">
                      <h3>Required Details</h3> 
                      </div>
                        
                    	<div class="form-group col-md-6">
    							<label>Name</label>
    							<input type="text" name="name" placeholder="Full Name" class="form-control" required>
  						</div>
                    
                        <div class="form-group col-md-6">
    							<label>Email</label>
    							<input type="email" name="email" placeholder="Enter Email" class="form-control" required>
  						</div>
                        <div class="form-group col-md-6">
    							<label>Country</label>
    							<select name="country" class="form-control" required>
<option value="AF">Afghanistan</option>
	<option value="AX">Åland Islands</option>
	<option value="AL">Albania</option>
	<option value="DZ">Algeria</option>
	<option value="AS">American Samoa</option>
	<option value="AD">Andorra</option>
	<option value="AO">Angola</option>
	<option value="AI">Anguilla</option>
	<option value="AQ">Antarctica</option>
	<option value="AG">Antigua and Barbuda</option>
	<option value="AR">Argentina</option>
	<option value="AM">Armenia</option>
	<option value="AW">Aruba</option>
	<option value="AU">Australia</option>
	<option value="AT">Austria</option>
	<option value="AZ">Azerbaijan</option>
	<option value="BS">Bahamas</option>
	<option value="BH">Bahrain</option>
	<option value="BD">Bangladesh</option>
	<option value="BB">Barbados</option>
	<option value="BY">Belarus</option>
	<option value="BE">Belgium</option>
	<option value="BZ">Belize</option>
	<option value="BJ">Benin</option>
	<option value="BM">Bermuda</option>
	<option value="BT">Bhutan</option>
	<option value="BO">Bolivia, Plurinational State of</option>
	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
	<option value="BA">Bosnia and Herzegovina</option>
	<option value="BW">Botswana</option>
	<option value="BV">Bouvet Island</option>
	<option value="BR">Brazil</option>
	<option value="IO">British Indian Ocean Territory</option>
	<option value="BN">Brunei Darussalam</option>
	<option value="BG">Bulgaria</option>
	<option value="BF">Burkina Faso</option>
	<option value="BI">Burundi</option>
	<option value="KH">Cambodia</option>
	<option value="CM">Cameroon</option>
	<option value="CA">Canada</option>
	<option value="CV">Cape Verde</option>
	<option value="KY">Cayman Islands</option>
	<option value="CF">Central African Republic</option>
	<option value="TD">Chad</option>
	<option value="CL">Chile</option>
	<option value="CN">China</option>
	<option value="CX">Christmas Island</option>
	<option value="CC">Cocos (Keeling) Islands</option>
	<option value="CO">Colombia</option>
	<option value="KM">Comoros</option>
	<option value="CG">Congo</option>
	<option value="CD">Congo, the Democratic Republic of the</option>
	<option value="CK">Cook Islands</option>
	<option value="CR">Costa Rica</option>
	<option value="CI">Côte d'Ivoire</option>
	<option value="HR">Croatia</option>
	<option value="CU">Cuba</option>
	<option value="CW">Curaçao</option>
	<option value="CY">Cyprus</option>
	<option value="CZ">Czech Republic</option>
	<option value="DK">Denmark</option>
	<option value="DJ">Djibouti</option>
	<option value="DM">Dominica</option>
	<option value="DO">Dominican Republic</option>
	<option value="EC">Ecuador</option>
	<option value="EG">Egypt</option>
	<option value="SV">El Salvador</option>
	<option value="GQ">Equatorial Guinea</option>
	<option value="ER">Eritrea</option>
	<option value="EE">Estonia</option>
	<option value="ET">Ethiopia</option>
	<option value="FK">Falkland Islands (Malvinas)</option>
	<option value="FO">Faroe Islands</option>
	<option value="FJ">Fiji</option>
	<option value="FI">Finland</option>
	<option value="FR">France</option>
	<option value="GF">French Guiana</option>
	<option value="PF">French Polynesia</option>
	<option value="TF">French Southern Territories</option>
	<option value="GA">Gabon</option>
	<option value="GM">Gambia</option>
	<option value="GE">Georgia</option>
	<option value="DE">Germany</option>
	<option value="GH">Ghana</option>
	<option value="GI">Gibraltar</option>
	<option value="GR">Greece</option>
	<option value="GL">Greenland</option>
	<option value="GD">Grenada</option>
	<option value="GP">Guadeloupe</option>
	<option value="GU">Guam</option>
	<option value="GT">Guatemala</option>
	<option value="GG">Guernsey</option>
	<option value="GN">Guinea</option>
	<option value="GW">Guinea-Bissau</option>
	<option value="GY">Guyana</option>
	<option value="HT">Haiti</option>
	<option value="HM">Heard Island and McDonald Islands</option>
	<option value="VA">Holy See (Vatican City State)</option>
	<option value="HN">Honduras</option>
	<option value="HK">Hong Kong</option>
	<option value="HU">Hungary</option>
	<option value="IS">Iceland</option>
	<option value="IN">India</option>
	<option value="ID">Indonesia</option>
	<option value="IR">Iran, Islamic Republic of</option>
	<option value="IQ">Iraq</option>
	<option value="IE">Ireland</option>
	<option value="IM">Isle of Man</option>
	<option value="IL">Israel</option>
	<option value="IT">Italy</option>
	<option value="JM">Jamaica</option>
	<option value="JP">Japan</option>
	<option value="JE">Jersey</option>
	<option value="JO">Jordan</option>
	<option value="KZ">Kazakhstan</option>
	<option value="KE">Kenya</option>
	<option value="KI">Kiribati</option>
	<option value="KP">Korea, Democratic People's Republic of</option>
	<option value="KR">Korea, Republic of</option>
	<option value="KW">Kuwait</option>
	<option value="KG">Kyrgyzstan</option>
	<option value="LA">Lao People's Democratic Republic</option>
	<option value="LV">Latvia</option>
	<option value="LB">Lebanon</option>
	<option value="LS">Lesotho</option>
	<option value="LR">Liberia</option>
	<option value="LY">Libya</option>
	<option value="LI">Liechtenstein</option>
	<option value="LT">Lithuania</option>
	<option value="LU">Luxembourg</option>
	<option value="MO">Macao</option>
	<option value="MK">Macedonia, the former Yugoslav Republic of</option>
	<option value="MG">Madagascar</option>
	<option value="MW">Malawi</option>
	<option value="MY">Malaysia</option>
	<option value="MV">Maldives</option>
	<option value="ML">Mali</option>
	<option value="MT">Malta</option>
	<option value="MH">Marshall Islands</option>
	<option value="MQ">Martinique</option>
	<option value="MR">Mauritania</option>
	<option value="MU">Mauritius</option>
	<option value="YT">Mayotte</option>
	<option value="MX">Mexico</option>
	<option value="FM">Micronesia, Federated States of</option>
	<option value="MD">Moldova, Republic of</option>
	<option value="MC">Monaco</option>
	<option value="MN">Mongolia</option>
	<option value="ME">Montenegro</option>
	<option value="MS">Montserrat</option>
	<option value="MA">Morocco</option>
	<option value="MZ">Mozambique</option>
	<option value="MM">Myanmar</option>
	<option value="NA">Namibia</option>
	<option value="NR">Nauru</option>
	<option value="NP">Nepal</option>
	<option value="NL">Netherlands</option>
	<option value="NC">New Caledonia</option>
	<option value="NZ">New Zealand</option>
	<option value="NI">Nicaragua</option>
	<option value="NE">Niger</option>
	<option value="NG">Nigeria</option>
	<option value="NU">Niue</option>
	<option value="NF">Norfolk Island</option>
	<option value="MP">Northern Mariana Islands</option>
	<option value="NO">Norway</option>
	<option value="OM">Oman</option>
	<option value="PK">Pakistan</option>
	<option value="PW">Palau</option>
	<option value="PS">Palestinian Territory, Occupied</option>
	<option value="PA">Panama</option>
	<option value="PG">Papua New Guinea</option>
	<option value="PY">Paraguay</option>
	<option value="PE">Peru</option>
	<option value="PH">Philippines</option>
	<option value="PN">Pitcairn</option>
	<option value="PL">Poland</option>
	<option value="PT">Portugal</option>
	<option value="PR">Puerto Rico</option>
	<option value="QA">Qatar</option>
	<option value="RE">Réunion</option>
	<option value="RO">Romania</option>
	<option value="RU">Russian Federation</option>
	<option value="RW">Rwanda</option>
	<option value="BL">Saint Barthélemy</option>
	<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KN">Saint Kitts and Nevis</option>
	<option value="LC">Saint Lucia</option>
	<option value="MF">Saint Martin (French part)</option>
	<option value="PM">Saint Pierre and Miquelon</option>
	<option value="VC">Saint Vincent and the Grenadines</option>
	<option value="WS">Samoa</option>
	<option value="SM">San Marino</option>
	<option value="ST">Sao Tome and Principe</option>
	<option value="SA">Saudi Arabia</option>
	<option value="SN">Senegal</option>
	<option value="RS">Serbia</option>
	<option value="SC">Seychelles</option>
	<option value="SL">Sierra Leone</option>
	<option value="SG">Singapore</option>
	<option value="SX">Sint Maarten (Dutch part)</option>
	<option value="SK">Slovakia</option>
	<option value="SI">Slovenia</option>
	<option value="SB">Solomon Islands</option>
	<option value="SO">Somalia</option>
	<option value="ZA">South Africa</option>
	<option value="GS">South Georgia and the South Sandwich Islands</option>
	<option value="SS">South Sudan</option>
	<option value="ES">Spain</option>
	<option value="LK">Sri Lanka</option>
	<option value="SD">Sudan</option>
	<option value="SR">Suriname</option>
	<option value="SJ">Svalbard and Jan Mayen</option>
	<option value="SZ">Swaziland</option>
	<option value="SE">Sweden</option>
	<option value="CH">Switzerland</option>
	<option value="SY">Syrian Arab Republic</option>
	<option value="TW">Taiwan, Province of China</option>
	<option value="TJ">Tajikistan</option>
	<option value="TZ">Tanzania, United Republic of</option>
	<option value="TH">Thailand</option>
	<option value="TL">Timor-Leste</option>
	<option value="TG">Togo</option>
	<option value="TK">Tokelau</option>
	<option value="TO">Tonga</option>
	<option value="TT">Trinidad and Tobago</option>
	<option value="TN">Tunisia</option>
	<option value="TR">Turkey</option>
	<option value="TM">Turkmenistan</option>
	<option value="TC">Turks and Caicos Islands</option>
	<option value="TV">Tuvalu</option>
	<option value="UG">Uganda</option>
	<option value="UA">Ukraine</option>
	<option value="AE">United Arab Emirates</option>
	<option value="GB">United Kingdom</option>
	<option value="US">United States</option>
	<option value="UM">United States Minor Outlying Islands</option>
	<option value="UY">Uruguay</option>
	<option value="UZ">Uzbekistan</option>
	<option value="VU">Vanuatu</option>
	<option value="VE">Venezuela, Bolivarian Republic of</option>
	<option value="VN">Viet Nam</option>
	<option value="VG">Virgin Islands, British</option>
	<option value="VI">Virgin Islands, U.S.</option>
	<option value="WF">Wallis and Futuna</option>
	<option value="EH">Western Sahara</option>
	<option value="YE">Yemen</option>
	<option value="ZM">Zambia</option>
	<option value="ZW">Zimbabwe</option>
                                
                                
                                </select>
  						</div>
                         <div class="form-group col-md-6">
    							<label>City</label>
    							<input type="text" name="city" placeholder="City" class="form-control" required>
  						</div>
                         
                    
                        <div class="form-group col-md-12">
    							<label>National Identity Card Number (NIC)</label>
    							<input type="number" name="cnic" placeholder="eg 00000-0000000-0" class="form-control" required>
  						</div>
                        <div class="form-group col-md-6">
    							<label>City</label>
    							<input type="text" name="city" placeholder="Enter the City Name..." class="form-control" required>
  						</div>
                        <div class="form-group col-md-6">
    							<label>Phone</label>
    							<input type="text" name="phone" placeholder="Enter Phone Number..." class="form-control">
  						</div>
                         <div class="form-group col-md-12">
                        <label>Book Vehicle: </label>
                          <input type="radio" name="book-vehicle" checked value="NO" /> NO

                                <input type="radio" name="book-vehicle" value="YES" /> YES
                        </div>
                     <div id="vehicle"  style="display:none;">   
                        <div class="form-group col-md-12">
    							<label>Select Vehicle</label>
    							<select name="vehicle_id" class="form-control">
                                <option value="">Select Vehicle</option>
                                 <?php 
								 $select_dt=mysql_query("select * from vehicle");
			while($get_dt=mysql_fetch_array($select_dt)){
			 ?>  
                                <option value="<?php echo $get_dt["vehicle_id"]; ?>"><?php echo $get_dt["name"]; ?></option>
                                <?php } ?>                                
                                </select>
  						</div>
                        </div>
                        <div class="form-group col-md-6">
    							<label>Number of Adults</label>
    							<input type="number" name="adult" placeholder="0" class="form-control">
  						</div>
                        <div class="form-group col-md-6">
    							<label>Number of Childrens</label>
    							<input type="number" name="childrens" placeholder="0" class="form-control">
  						</div>
                        <div class="form-group col-md-6">
    							<label>Check-In Date</label>
    							<div class="input-group date" data-provide="datepicker">
  <input type="text" class="form-control datepicker" name="cdate" placeholder="Kindly Select Your Check-In Date...">
  <div class="input-group-addon">
    <span class="glyphicon glyphicon-th"></span>
  </div>
</div>
  						</div>
                        <div class="form-group col-md-6">
    							<label>Number of Nights</label>
    							
 <input type="number" name="nights" placeholder="0" class="form-control">
  
</div>
  						</div>
                            <div class="form-group col-md-12">
                        <label>Payment Method: </label>
                          <input type="radio" name="payment" checked value="CASH" /> Cash

                                <input type="radio" name="payment" value="CC" /> Credit Card
                        </div>
                     <div id="paymentType" class="billing-info" style="display:none;">   
                    
                        <div class="form-group col-md-6">
    							<label>Name on Card</label>
    							<input type="text" name="card" placeholder="Laiba" class="form-control">
  						</div>
                        <div class="form-group col-md-6">
    							<label>Card Number</label>
    							<input type="text" name="card_number" placeholder="1236 1236 1236 1236" class="form-control">
  						</div>
                        <div class="form-group col-md-4">
    							<label>CVC Code</label>
    							<input type="password" name="cvc" placeholder="****" class="form-control">
  						</div>
                        <div class="form-group col-md-4">
    							<label>Expiration Month</label>
    							<input type="text" name="exp_mnth" placeholder="09" class="form-control">
  						</div>
                        <div class="form-group col-md-4">
    							<label>Expiration Year</label>
    							<input type="text" name="exp_year" placeholder="2020" class="form-control">
  						</div>
                        
                        </div>
                          <div class="form-group col-md-12">
    							<label>Comments*</label>
    							<textarea name="comments" rows="5" class="form-control"></textarea>
  						</div>
                          <div class="form-group col-md-4 pull-right">
    							
    							<button type="submit" class="form-control btn btn-primary" name="booking">Submit</button>
  						</div>
                         <p align="center"><strong><?php if(isset($data_txt)): echo $data_txt;   endif; ?></strong></p>
                        <div class="clearfix"></div>
                      
                    </form>
                     
                </div>
            </div>
        </section>
       </div>
     <?php require_once("footer.php"); ?>
	 <script>
	 
	 $(document).ready(function() {   
	$('input[name="payment"]').click(function() {
		if($(this).val()=="CASH") {
			$('#paymentType').hide();
		} else if($(this).val()=="CC") {
			$('#paymentType').show();
		}
    });

$('input[name="book-vehicle"]').click(function() {
		if($(this).val()=="NO") {
			$('#vehicle').hide();
		} else if($(this).val()=="YES") {
			$('#vehicle').show();
		}
    });

	 });
	
	 </script>
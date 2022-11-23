<!DOCTYPLE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form</title>
    <link rel="stylesheet" href="test.css" />

	<style>
		
	</style>
    
</head>

<body>

    <div>
        <div class = "input_container">
        <h2> Personal Information </h2>
        <form name="formValidation" id="formValidation" action="firstOutput.php" method="POST" enctype='multipart/form-data'>
            <div class="left w50" >
                <b><label for="fname">First name</label></b><br>
                <label style="color: grey"><i>(As per CNIC)</i></label><br>
                <input type="text" name="fname" placeholder="First Name*" required>
            </div>

            <div class="left w50">
                <b><label for="lname">Last name</label></b><br>
                <i><label style="color: grey">(As per CNIC)</label></i><br>
                <input type="text" name="lname"required>
            </div>
                <br style="clear:both;"/>
                
            <div class="left w33">
                <b><label for="gender">Gender</label></b><br>
                <select name='gender' id="gender" required>
                <option value="">--Select--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>  	
                </select>
            </div>

            <div class="left w33">
                <b><label for="dob">Date of Birth</label></b><br>
                <input type="date" id="dob" name ="dob" required >
            </div>

            <div class="left w33">
                <b><label for="cnic">CNIC</label></b><br>
                <input type="tel" id="cnic" name="cnic" required>
            </div>
            <br style="clear: both">

            <div class = "left w33">
                <b><label for="Contact">Student's Contact Number</label></b><br>
                <input type="text" id="std_contact" placeholder="0308-2352331" name="std_contact">
            </div>

            <div class="left w33">
                <b><label for="std_whatsapp">Whatsapp No.</label></b><br>
                <input type="text" id="std_whatsapp" placeholder="0308-2352331" name="std_whatsapp" required>
            </div>

            <div class = "left w33">
                <b><label for="home_contact">Home Phone No.</label></b><br>
                <input type="text" id="home" name="home_contact" placeholder="021-32214531" required>  		
            </div>
            <br style="clear: both">
                
            <div class = "left w50">
                <b><label for="std_email">Email Address</label></b><br>
                <input type="std_email" id = "std_email" name="std_email" required>
            </div>

            <div class = "left w50">
                <b><label for="std_res_address">Residential Postal Address</label></b><br>
                <input type="text" id = "std_res_address" name = "std_res_address" required>
            </div>
            <br style="clear: both">

            <div class="left w50">
                <b><label for="city">City</label></b><br>
                <input type="text" id = "cite" name="city" required>
            </div>
            <div class="left w50">
                <b><label for="zip_code">Postal/Zip Code</label></b><br>
                <input type="text" id = "zip_code" name="zip_code" required>
                <br style = "clear: both"><br><br>	
            </div>
                
            <h2> Academic Information </h2>
            <div class=" left w100">
                <b><label for = "qualification" > Latest Qualification</label></b><br>
                <select name = "qualification" id ="qualification" required>
                    <option value="">Select an Option</option>
                    <option value="olevels">O'Levels</option>
                    <option value="aslevels">As'Levels</option>
                    <option value="alevels">A'Levels</option>
                    <option value="bachelors">Bachelors / Masters Degree</option>
                    <option value="intermediate">Intermediate </option>
                    <option value="internationalFunding">International Foundation</option>
                    <option value="other_degree">Other Degree</option>
                    <option value="transfer_student">Transfer Student</option>
                </select><br><br>
            </div>
            
            <!-- O Levels -->
            <div class="toggle-academics" id="academics_olevels">
                <h4>O'Levels</h4><br>
                <div class="left w50">
                    <b><label for="olevels_institute">O'Levels Institute</label></b><br>
                    <input type="text" id="olevels_institute" name="olevels_institute" required>
                </div>
                <div class="left w50">
                    <b><label for="olevel_grades">O'Levels Grades</label></b><br>
                    <input type="text" id="olevel_grades" name="olevel_grades" required>
                    <br style = "clear: both"><br><br>	
                </div>
            </div>

            <!-- A Levels -->
            <div class="toggle-academics" id="academics_alevels">
                <b><label>A'Levels</label></b><br>
                <div class="left w100">
                    <b><label for="alevels_institute">A'Levels Institute</label></b><br>
                    <input type="text" id="alevels_institute" name="alevels_institute" required>
                </div>


                <div class="left w100">
                    <b><label for="alevel_subjects">A'Levels Subjects</label></b><br>
                    <!-- <label style="color: grey; font-size: 10; ">Subject Name - Grade in each line</label> -->
                    <input type="text" id="alevel_subjects" name="alevel_subjects" required>
                    <!-- <br style = "clear: both"><br><br>	 -->
                </div>
            </div>
            <!-- As Levels -->
            <div class="toggle-academics" id="academics_aslevels">
                <b><label>As'Levels</label></b><br>
                <div class="left w100">
                    <b><label for="aslevels_institute">As'Levels Institute</label></b><br>
                    <input type="text" id = "aslevels_institute" name="aslevels_institute" required>
                </div>
                <div class="left w100">
                    <b><label for="aslevel_subjects">As'Levels Subjects</label></b><br>
                    <textarea  name="aslevel_subjects" required>  </textarea>
                    <br style = "clear: both"><br><br>	
                </div>
            </div>

            <!-- Bachelors Degree -->
            <div class="toggle-academics" id="academics_bachelors">
                <b><label> Bachelors / Masters Degree</label></b><br>
                <div class="left w25">
                    <b><label for="bachelors_institute">Institute Name</label></b><br>
                    <input type="text" id = "bachelors_institute" name="bachelors_institute" required>
                </div>
                <div class="left w25">
                    <b><label for="qualification">Qualification</label></b><br>
                    <input type="text" id = "bachelors_qualification" name="bachelors_qualification" required>	
                </div>
                <div class="left w25">
                    <b><label for="duration">Duration of Years</label></b><br>
                    <input type="text" id="duration" name="duration" required>
                </div>
                <div class="left w25">
                    <b><label for="grade">Grade</label></b><br>
                    <input type="text" id="grade" name="grade" required>
                </div>
            </div>
            <br style="clear: both">

            <!-- Intermediate/Matriculation -->
            <div class="toggle-academics" id="academics_intermediate">
                <b><label>Intermediate/Matriculation</label></b><br>
                <div class="left w33">
                    <b><label for="intermediate_institute">Institute name</label></b><br>
                    <input type="text" id = "intermediate_institute" name="intermediate_institute" required>
                </div>
                <div class="left w33">
                    <b><label for="intermediate_year">Year</label></b><br>
                    <select name="intermediate_year">
                        <option value="">--select--</option>
                        <?php for ($i = 1980; $i <= 2023; $i++) : ?>
                            <option value="<?php echo $i; ?>">
                                <?php echo $i; ?>
                            </option>
                        <?php endfor; ?>
                    </select>   
                </div>
                <div class="left w33">
                    <b><label for="intermediate_percentage">Percentage</label></b><br>
                    <input type="number" id = "intermediate_percentage" name="intermediate_percentage" required>
                    <br style = "clear: both"><br><br>	
                </div>
            </div>
            <!-- Other Degree -->
            <div class="toggle-academics" id="academics_other_degree">
                <b><label>Other Degree</label></b><br>
                <div class="left w50">
                    <b><label for="degree_program">Degree Program</label></b><br>
                    <input type="text" id="degree_program" name="degree_program" required>
                </div>
                <div class="left w50">
                    <b><label for="degree_awarding_institue">Degree Awarding Institue</label></b><br>
                    <input type="text" id="degree_awarding_institue" name="degree_awarding_institue" required>
                    <br style = "clear: both"><br><br>
                    <br style = "clear: both">
                </div>
                <div class="left w50">
                    <b><label for="degree_country">Country</label></b><br>
                    <select id="country" name="country">
                        <option>--Select a country--</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Aland Islands">Aland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curacao">Curacao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Territories">French Southern Territories</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guernsey">Guernsey</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                        <option value="Korea, Republic of">Korea, Republic of</option>
                        <option value="Kosovo">Kosovo</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macao">Macao</option>
                        <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russian Federation">Russian Federation</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Barthelemy">Saint Barthelemy</option>
                        <option value="Saint Helena">Saint Helena</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Martin">Saint Martin</option>
                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Sint Maarten">Sint Maarten</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                        <option value="South Sudan">South Sudan</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-Leste">Timor-Leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Viet Nam">Viet Nam</option>
                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                        <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <div class="left w50">
                    <b><label for="other_degree_year">Year</label></b><br>
                    <select name="other_degree_year">
                        <option value="">--select--</option>
                        <?php for ($i = 1980; $i <= 2023; $i++) : ?>
                            <option value="<?php echo $i; ?>">
                                <?php echo $i; ?>
                            </option>
                        <?php endfor; ?>
                    </select>
                    <br style = "clear: both"><br><br>
                    <br style = "clear: both">
                </div>
            </div>
            <!-- Transfer Student -->
            <div class="toggle-academics" id="academics_transfer_student">
                <b><label>Transfer Student</label></b><br>
                <div class="left w50">
                    <b><label for="transfer_student_level">Level</label></b><br>
                    <select name="transfer_student_level" required>
                        <option>--Select--</option>
                        <option value="level_1">Level 1</option>
                        <option value="level_2">Level 2</option>
                        <option value="level_3">Level 3</option>
                    </select>
                </div>
                <div class="left w50">
                    <b><label for="transfer_std_institue">Institue Name</label></b><br>
                    <input type="text" id = "transfer_std_institue" name="transfer_std_institue" required>
                    <br style = "clear: both"><br><br>	
                </div>
            </div>

            <div class=" left w100">
                <b><label for = "prog"> Programme</label></b><br>
                <select name="programme" id ="programme" required>
                    <option value="">Select Programme</option>
                    <option value="LLB(Hons)">LLB(Hons)</option>
                    <option value="BSc Buisness Adminstration Programme (BBA)">BSc Buisness Adminstration Programme (BBA)</option>
                    <option value="International Foundation">International Foundation</option>
                </select><br><br>
            </div>

            <h2> Parent/Guardian Information </h2>
            <div class="left w33">
                <b><label for="parent_fname">First name</label></b><br>
                <input type="text" id="parent_fname" name="parent_fname" required>
            </div>

            <div class="left w33">
                <b><label for="parent_lname">Last name</label></b><br>
                <input type="text" id="parent_lname" name="parent_lname" required>
            </div>

            <div class="left w33">
                <b><label for= "parent_email"> Email </label></b><br>
                <input type="email" id ="parent_email "name="parent_email" required><br>
            </div>
            <br style="clear: both">

            <div class = "left w33">
                <b><label for="parent_contact">Mobile Number</label></b><br>
                <input type="text" id = "parent_contact" placeholder="0308-2352331" name="parent_contact" required>
            </div>

            <div class="left w33">
                <b><label for="parent_cnic">CNIC</label></b><br>
                <input type="text" id = "parent_cnic" placeholder="42301-2323236-2" name="parent_cnic" required>
            </div>

            <div class = "left w33">
                <b><label for="parent_ntn">NTN</label></b><br>
                <input type="text" id = "parent_ntn" name="parent_ntn" required>  		
            </div>
            <br style="clear: both">
            
            <div class = "left w33">
                <b><label for="parent_occupation">Occupation</label></b><br>
                <input type="text" id = "parent_occupation" name="parent_occupation" required>
            </div>

            <div class="left w33">
                <b><label for="parent_res_address">Residentail Address</label></b><br>
                <input type="text" id = "parent_res_address" name="parent_res_address" required>
            </div>

            <div class = "left w33">
                <b><label for="parent_office_address">Office Address</label></b><br>
                <input type="text" id = "parent_office_address" name="parent_office_address">  		
            </div>
            <br style="clear: both">
            <br><br>
            <div class = "left w33">
                <b><label for="relation">Relation</label></b><br>
                <select name="relation" id="relation" required>
                    <option value="">--Select-- </option>
                    <option value="Father">Father</option>
                    <option value="Mother">Mother</option>
                    <option value="Next of Kin">Next of Kin</option>
                </select>
            </div>
            <br style="clear: both">

            <div class = "left w100">
                <b><label for="tax">Are You/Your Parent or Guardian an Active Income Tax Filer?</label></b><br>
                <input type="radio" id="tax_yes" name="tax" value="Yes">
                <label for="tax_yes">Yes</label>
                <input type="radio" id="tax_no" name="tax" value="No">
                <label for="tax_no">No</label><br>
                </div>
            <br style="clear: both">
            <div class="toggle-yes" id="Yes">
            <b><label for="tax_payer">Tax Payer</label></b><br>
                <select name="tax_payer" id="tax_payer" required>
                    <option value=""> Select an Option </option>
                    <option value="student">Student</option>	
                    <option value="parent">Parent</option>
                    <option value="other_info">Other (Please Specify)</option>
                </select><br> 
            </div>

            <div class = "left w50">
                <b><label for="find_how">How did you find out about Denning</label></b><br>
                <select name="find_how" id="find_how" required>
                    <option value=""> --Select-- </option>
                    <option value="Facebook">Facebook</option>	
                    <option value="Linkedin">Linkedin</option>
                    <option value="other_info">Other (Please Specify)</option>
                </select><br>  		
                <br style="clear: both">
            </div>
            <div class="toggle-others" id="other_info">
                <b><label>Other Info</label></b><br>
                <input type="text" name="other_info" required>
            </div>

            <div class="left w100">
                <b><label for = "statement">Personal Statement</label></b><br>
                <i> <label style="color: grey; font-size: 15px;">Explain your academic background/any work experience, achievements, and why you wish to pursue this Degree?</label></i><br>
                <textarea  name="statement" required></textarea>
            </div><br>
            <br style="clear: both">
                
            <div class="left w100">
            <b><label style="color: grey;">Photocopies of all supporting documents should be submitted on the interview day</label></b>
            </div><br>
            <br style="clear: both">

            <div class="left w33">
                <b><label for="profile_image">Profile Image*</label></b><br>
                <i><label style="color:grey; font-size: 15px;">Upload Passport size photograph in JPG or PNG format</label></i><br>
                <input type="file"
                id="profile_image" name="profile_image"
                accept="image/png, image/jpeg" 
                required>
            </div>

            <div class="left w33">
                <b><label for="cnic_image">Upload CNIC/Passport*</label></b><br>
                <i><label style="color:grey; font-size: 15px;">Upload CNIC/Passport documents in PDF, JPG or PNG format.</label></i><br>
                <input type="file"
                    id="cnic_image" name="cnic_image[]"
                    accept="image/png, image/jpeg , .pdf, .doc"
                    multiple required>
            </div>
            <br style="clear: both">

            <div class="left w33">
                <b><label for="transcripts">Supporting Documents (All Academic Transcripts) *</label></b><br>
                <i><label style="color:grey; font-size: 15px;">Upload Original Academic Documents in PDF, JPG or PNG format. You can upload 5 documents max 2MB each.</label></i><br>
                <input type="file"
                id="transcripts" name="transcripts[]"
                accept="image/png, image/jpeg, .doc, .pdf"
                multiple required>
            </div>
            <div class="left w33">
                <b><label for="certificates">Supporting Documents (Certificates)</label></b><br>
                <i><label style="color:grey; font-size: 15px;">Upload Original Documents in PDF, JPG or PNG format (if any).</label></i><br>
                <input type="file"
                id="certificates" name="certificates[]"
                accept="image/png, image/jpeg, .doc, .pdf"
                multiple required>
            </div>
            <div class="left w33">
                <b><label for="extra_curricular">Supporting Documents (Extra Curricular/Others)</label></b><br>
                <i><label style="color:grey; font-size: 15px;">Upload Original Documents in PDF, JPG or PNG format (if any).</label></i><br>
                <input type="file"
                id="extra_curricular" name="extra_curricular[]"
                accept="image/png, image/jpeg, .pdf, .doc"
                multiple required>
            </div>
            <br style="clear: both"> 
            
            <div class="left w100">
                <b><label for="declaration">Statement of Declaration</label></b><br>
                <input type="radio" id="agree" name="agree" required>
                <label for="agree">I certify that the information provided above is authentic and complete. I understand that failure to provide the correct, accurate and complete information will dismiss me even after my enrollment and acceptance at Denning. I, hereby, acknowledge that Denning may verify the information I have provided using all means deemed necessary.
            </div>
            <br style="clear: both">
            <input type="submit" value="submit"> 
  	    </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script type="text/javascript" src="test.js?v=1"></script>
</body>
</html>







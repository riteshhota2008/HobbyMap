<?php
if(isset($_POST["submit"])){
$hostname='localhost';
$username='u243652019_test';
$password='12345678';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=u243652019_test",$username,$password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
        $sql = "INSERT INTO users (subjects, locality, description, fees)
VALUES ('".$_POST["subjects"]."','".$_POST["locality"]."','".$_POST["description"]."','".$_POST["fees"]."')";
        if ($dbh->query($sql))
        {
            echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
        }
        else
        {
            echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
        }

    $dbh = null;
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

}
?>





<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="chosen.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

    <style>

        .button {
            border: 0 none;
            border-radius: 24px;
            padding: 12px 18px;
            margin: 10px;
            cursor: pointer;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 160px;
            -ms-flex: 0 0 160px;
            flex: 0 0 160px;
            text-align: center;
            line-height: 1.3;
            font-size: 14px;
            color: #fff;
            text-transform: none;
            font-weight: 500;
            -webkit-transition: all 100ms ease-in-out;
            transition: all 100ms ease-in-out;
        }
        .button:hover {
            opacity: .9;
            -webkit-transition: all 100ms ease;
            transition: all 100ms ease;
        }
        .button:active {
            opacity: .75;
            -webkit-transform: scale(0.97);
            transform: scale(0.97);
            -webkit-transition: all 100ms ease;
            transition: all 100ms ease;
        }

        .button.-border {
            background: transparent;
            border: 2px solid #94c258;
            color: #94c258;
        }
        .button.-border:hover, .button.-border.-active {
            background: #94c258;
            border-color: #94c258;
            color: #FFFFFF;
        }


    </style>

    <style>

        @media only screen and (max-width: 768px)	{
            .search {

                width: 100%;
            }

        }

    </style>

    <style>


        /***********************
        ********* Footer ******
        ************************/
        #footer {
            padding-top: 30px;
            padding-left: 30px;
            padding-bottom: 20px;
            color: #aaa;
            background: #2e2e2e;
        }
        #footer a {
            color: #eee;
        }
        #footer a:hover {
            color: #f39c12;
        }
        #footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        #footer ul > li {
            display: inline-block;
            margin-left: 15px;
        }
        .follow-us {
            margin-top: -30px;
            text-align: right;
            display: inline;
        }
        .social-icon {
            padding-top: 6px;
            font-size: 16px;
            text-align: center;
            width: 32px;
            height: 32px;
            border: 2px solid #999;
            border-radius: 50%;
            color: #999;
            margin: 5px;
        }
        a.social-icon:hover, a.social-icon:active, a.social-icon:focus {
            text-decoration: none;
            color: #f39c12;
            border-color: #f39c12;
        }

    </style>

    <style>

        .form-style-8{
            font-family: 'Open Sans Condensed', arial, sans;
            width: auto;/*500px*/
            padding: 30px;
            background: #FFFFFF;
            margin: 50px auto;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
            -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
            -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

        }
        .form-style-8 h2{
            background: #4D4D4D;
            text-transform: uppercase;
            font-family: 'Open Sans Condensed', sans-serif;
            color: #797979;
            font-size: 18px;
            font-weight: 100;
            padding: 20px;
            margin: -30px -30px 30px -30px;
        }
        .form-style-8 input[type="text"],
        .form-style-8 input[type="date"],
        .form-style-8 input[type="datetime"],
        .form-style-8 input[type="email"],
        .form-style-8 input[type="number"],
        .form-style-8 input[type="search"],
        .form-style-8 input[type="time"],
        .form-style-8 input[type="url"],
        .form-style-8 input[type="password"],
        .form-style-8 textarea,
        .form-style-8 select
        {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            outline: none;
            display: block;
            width: 100%;
            padding: 7px;
            border: none;
            border-bottom: 1px solid #ddd;
            background: transparent;
            margin-bottom: 10px;
            font: 16px Arial, Helvetica, sans-serif;
            height: 45px;
        }
        .form-style-8 textarea{
            resize:none;
            overflow: hidden;
        }
        .form-style-8 input[type="button"],
        .form-style-8 input[type="submit"]{
            -moz-box-shadow: inset 0px 1px 0px 0px #94c258;
            -webkit-box-shadow: inset 0px 1px 0px 0px #94c258;
            box-shadow: inset 0px 1px 0px 0px #94c258;
            background-color: #94c258;
            border: 1px solid #94c258;
            display: inline-block;
            cursor: pointer;
            color: #FFFFFF;
            font-family: 'Open Sans Condensed', sans-serif;
            font-size: 14px;
            padding: 8px 18px;
            text-decoration: none;
            text-transform: uppercase;
        }
        .form-style-8 input[type="button"]:hover,
        .form-style-8 input[type="submit"]:hover {
            background:linear-gradient(to bottom, #94c258 5%, #94c258 100%);
            background-color:#94c258;
        }
    </style>


    <title>Hello</title>

</head>
<body>
<header>
    <a id="cd-logo" href="#0"><img src="img/cd-logo.svg" alt="Homepage"></a>
    <nav id="cd-top-nav">
        <ul>
            <!--<li><a href="#0">Tour</a></li>-->
            <li><a href="login.html">Login</a></li>
        </ul>
    </nav>
    <a id="cd-menu-trigger" href="#0"><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
</header>
<main class="cd-main-content"  style="background-color: #FFFFFF">

    <!-- put your content here -->

    <br><br>
    <div class="container">
        <div class="jumbotron">
            <h1 style="text-align: center">Let's get started.</h1>
            <p style="text-align: center">Select the subject which you really love to teach. You can select multiple subjects though.</p>

        </div>
    </div>


    <!--

      <div class="container">
          <div class="row">



              <div class="search" style="text-align: center;">
  <select data-placeholder="Choose a Subject..." class="chosen-select" multiple style="width:50%;" >
      <option value=""></option>
      <option value="United States">United States</option>
      <option value="United Kingdom">United Kingdom</option>
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
      <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
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
      <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
      <option value="Cook Islands">Cook Islands</option>
      <option value="Costa Rica">Costa Rica</option>
      <option value="Cote D&apos;ivoire">Cote D'ivoire</option>
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
      <option value="Guinea-bissau">Guinea-bissau</option>
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
      <option value="Korea, Democratic People&apos;s Republic of">Korea, Democratic People's Republic of</option>
      <option value="Korea, Republic of">Korea, Republic of</option>
      <option value="Kuwait">Kuwait</option>
      <option value="Kyrgyzstan">Kyrgyzstan</option>
      <option value="Lao People&apos;s Democratic Republic">Lao People's Democratic Republic</option>
      <option value="Latvia">Latvia</option>
      <option value="Lebanon">Lebanon</option>
      <option value="Lesotho">Lesotho</option>
      <option value="Liberia">Liberia</option>
      <option value="Libya">Libya</option>
      <option value="Liechtenstein">Liechtenstein</option>
      <option value="Lithuania">Lithuania</option>
      <option value="Luxembourg">Luxembourg</option>
      <option value="Macao">Macao</option>
      <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
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
      <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
      <option value="Saint Lucia">Saint Lucia</option>
      <option value="Saint Martin (French part)">Saint Martin (French part)</option>
      <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
      <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
      <option value="Samoa">Samoa</option>
      <option value="San Marino">San Marino</option>
      <option value="Sao Tome and Principe">Sao Tome and Principe</option>
      <option value="Saudi Arabia">Saudi Arabia</option>
      <option value="Senegal">Senegal</option>
      <option value="Serbia">Serbia</option>
      <option value="Seychelles">Seychelles</option>
      <option value="Sierra Leone">Sierra Leone</option>
      <option value="Singapore">Singapore</option>
      <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
      <option value="Slovakia">Slovakia</option>
      <option value="Slovenia">Slovenia</option>
      <option value="Solomon Islands">Solomon Islands</option>
      <option value="Somalia">Somalia</option>
      <option value="South Africa">South Africa</option>
      <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
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
      <option value="Timor-leste">Timor-leste</option>
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
      <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
      <option value="Viet Nam">Viet Nam</option>
      <option value="Virgin Islands, British">Virgin Islands, British</option>
      <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
      <option value="Wallis and Futuna">Wallis and Futuna</option>
      <option value="Western Sahara">Western Sahara</option>
      <option value="Yemen">Yemen</option>
      <option value="Zambia">Zambia</option>
      <option value="Zimbabwe">Zimbabwe</option>
  </select>

                 <br><br> <!-- <a href="#" class="btn btn-primary" role="button">Save</a> -->


    <!--
                    <div class='button -border center' style="width: 100px;margin-left: 45%">Save</div>

                </div></div>
        </div>

        <br><br><br>

        <div class="container">
            <div class="row">
                <div class="jumbotron">
                    <h1 style="text-align: center">Set your location</h1>
                    <p style="text-align: center">Students will be able to reach faster using your location.</p><br>

                <!--    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
    <!--               <div class="search" style="text-align: center">
                   <select data-placeholder="Choose your Locality..." class="chosen-select" multiple style="width:50%;" >
                       <option value=""></option>
                       <option value="United States">United States</option>
                       <option value="United Kingdom">United Kingdom</option>
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
                   </select></div>
                       <br>
                   <div class='button -border center' style="width: 200px;margin-left: 40%">Update Location</div>



               </div>
           </div>
       </div>

   -->

    <div class="container">
        <div class="form-style-8">
            <h2 style="color: #fff">Details</h2>
            <form method="post" action="">
                <select name="subjects" data-placeholder="Choose a Subject..." class="chosen-select" multiple style="width:100%;" >
                    <option value=""></option>
                    <option value="United States">United States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                </select><br><br>
                <select name="locality" data-placeholder="Choose your Locality..." class="chosen-select" multiple style="width:100%;" >
                    <option value=""></option>
                    <option value="United States">United States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                </select><br><br>
                <input type="text" name="fees" placeholder="Enter your Fees/Month" />
                <textarea name="description" placeholder="Please Enter Your Description" onkeyup="adjust_textarea(this)"></textarea><br>
                <!--<a href="profile.html">--> <input type="submit" value="Save" name="submit" /><!--</a>-->
            </form>
        </div>
    </div>

    <br><br>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">Copyright &copy; 2016 HobbyMap. All Rights Reserved.</div>
                <div class="col-sm-6">
                    <!--   <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div> -->
                </div>
            </div>
        </div>
    </footer>






</main> <!-- cd-main-content -->

<nav id="cd-lateral-nav">
    <ul class="cd-navigation">
        <li class="item-has-children">
            <a href="#0">Services</a>
            <ul class="sub-menu">
                <li><a href="#0">Brand</a></li>
                <li><a href="#0">Web Apps</a></li>
                <li><a href="#0">Mobile Apps</a></li>
            </ul>
        </li> <!-- item-has-children -->

        <li class="item-has-children">
            <a href="#0">Products</a>
            <ul class="sub-menu">
                <li><a href="#0">Product 1</a></li>
                <li><a href="#0">Product 2</a></li>
                <li><a href="#0">Product 3</a></li>
                <li><a href="#0">Product 4</a></li>
                <li><a href="#0">Product 5</a></li>
            </ul>
        </li> <!-- item-has-children -->

        <li class="item-has-children">
            <a href="#0">Stockists</a>
            <ul class="sub-menu">
                <li><a href="#0">London</a></li>
                <li><a href="#0">New York</a></li>
                <li><a href="#0">Milan</a></li>
                <li><a href="#0">Paris</a></li>
            </ul>
        </li> <!-- item-has-children -->
    </ul> <!-- cd-navigation -->

    <ul class="cd-navigation cd-single-item-wrapper">
        <li><a href="#0">Tour</a></li>
        <li><a href="#0">Login</a></li>
        <li><a href="#0">Register</a></li>
        <li><a href="#0">Pricing</a></li>
        <li><a href="#0">Support</a></li>
    </ul> <!-- cd-single-item-wrapper -->

    <ul class="cd-navigation cd-single-item-wrapper">
        <li><a class="current" href="#0">Journal</a></li>
        <li><a href="#0">FAQ</a></li>
        <li><a href="#0">Terms &amp; Conditions</a></li>
        <li><a href="#0">Careers</a></li>
        <li><a href="#0">Students</a></li>
    </ul> <!-- cd-single-item-wrapper -->

    <div class="cd-navigation socials">
        <a class="cd-twitter cd-img-replace" href="#0">Twitter</a>
        <a class="cd-github cd-img-replace" href="#0">Git Hub</a>
        <a class="cd-facebook cd-img-replace" href="#0">Facebook</a>
        <a class="cd-google cd-img-replace" href="#0">Google Plus</a>
    </div> <!-- socials -->
</nav>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
<script src="chosen.jquery.js"></script>
<script type="text/javascript">
    var config = {
        '.chosen-select'           : {},
        '.chosen-select-deselect'  : {allow_single_deselect:true},
        '.chosen-select-no-single' : {disable_search_threshold:10},
        '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
        '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }
</script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

<script type="text/javascript">
    //auto expand textarea
    function adjust_textarea(h) {
        h.style.height = "20px";
        h.style.height = (h.scrollHeight)+"px";
    }
</script>




</body>
</html>
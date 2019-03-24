<?php

session_start();
//connect to database
$link = mysqli_connect ("localhost", "root", "", "ted-x");
if (isset($_POST['submit'])) {
// Escape user inputs for security

$full_name = mysqli_real_escape_string($link, $_REQUEST['full_name']);
$designation = mysqli_real_escape_string($link, $_REQUEST['designation']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$contact_no = mysqli_real_escape_string($link, $_REQUEST['contact_no']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$field = mysqli_real_escape_string($link, $_REQUEST['field']);
$brief_description= mysqli_real_escape_string($link, $_REQUEST['brief_description']);
$topic = mysqli_real_escape_string($link, $_REQUEST['topic']);
$tedx_past = mysqli_real_escape_string($link, $_REQUEST['tedx_past']);
$old_link = mysqli_real_escape_string($link, $_REQUEST['old_link']);
$other_talks = mysqli_real_escape_string($link, $_REQUEST['other_talks']);

 //insert into DB
$sql = "INSERT INTO submissions (full_name, designation, email, contact_no, address, field, brief_description, topic, tedx_past, old_link, other_talks) VALUES ('$full_name', '$designation', '$email', '$contact_no', '$address', '$field', '$brief_description', '$topic', '$tedx_past', '$old_link', '$other_talks')";
mysqli_query($link, $sql);
if(mysqli_query($link, $sql)){
          header('location: success.html');
        die;
} else{
    header ('location: failed.html');
	die;
}

}



?>


<!--

  _______ ______ _____        __     __         _   _                                 
 |__   __|  ____|  __ \       \ \   / /        | | | |                                
    | |  | |__  | |  | |_  __  \ \_/ /__  _   _| |_| |__                              
    | |  |  __| | |  | \ \/ /   \   / _ \| | | | __| '_ \                             
    | |  | |____| |__| |>  <     | | (_) | |_| | |_| | | |                            
    |_|  |______|_____//_/\_\ _  |_|\___/ \__,_|\__|_| |_|_____ _______ ______ __  __ 
    ____     / /  / __ \     | |      | |                / ____|__   __|  ____|  \/  |
   / __ \   / /_ | |  | | ___| |_ ___ | |__   ___ _ __  | (___    | |  | |__  | \  / |
  / / _` | | '_ \| |  | |/ __| __/ _ \| '_ \ / _ \ '__|  \___ \   | |  |  __| | |\/| |
 | | (_| | | (_) | |__| | (__| || (_) | |_) |  __/ |     ____) |  | |  | |____| |  | |
  \ \__,_|  \___/ \____/ \___|\__\___/|_.__/ \___|_|    |_____/   |_|  |______|_|  |_|
   \____/                                                                             
                                                                                      

Event website by Ahmed Saad Sharawi (facebook.com/sha3rawi33)
-->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEDxRSET | SPEAKER CALL</title>

    <!--SEO Data-->
    <meta name="title" content="TEDxRSEY" />
    <meta name="description" content="TEDxRSET | October" />
    <meta name="keywords" content="TEDxRSET, TEDx, rset , kakkanad, rajagiri, engineering, ktu, kochi, CMI, Ernakulam, kakkanad, Speaker call" />
    <meta name="copyright" content="TEDxRSET"/>
    <meta name="rating" content="General" />
    <meta name="coverage" content="Worldwide" />
    <meta name="creator" content="TEDxRSET" />
    <meta itemprop="name" content="TEDxRSET"/>
    <meta itemprop="image" content=" "/>
    <meta itemprop="keywords" content="TEDxRSET, TEDxRSET 2018, RSET, Rajagiri, Engineering, RSET NAAC, Kochi, Kakkanad, Ernakulam, ktu, speaker call"/>


    <!--OpenGraph-->
    <meta property="og:title" content="TEDxRSET">
    <meta property="og:site_name" content="TEDxRSET | NOVEMBER 4, 2018 | RSET">

    <!--Twitter-->
    <meta name="twitter:domain" content="http://tedxrset.com"/>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TEDxRSET">
    <meta name="twitter:creator" content="@TEDxRSET">
    <meta name="twitter:title" content="TEDxRSET | RSET">
    <meta name="twitter:description" content="TEDxRSET | NOVEMBER 4 2018">
    <meta name="twitter:image" content="">



    <link rel="stylesheet" href="assets/css/speakercall.css">
    <link href="https://fonts.googleapis.com/css?family=Armata" rel="stylesheet">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>

<body>
<script type='javascript/text'>
function fuck(){
	(if grecaptcha.getResponse().length == 0)
	{
		alert("Please Do captcha")
	}
	else{
		document.getElementById("submit").removeAttribute('disabled');
	}
}
</script>
	
	<form method="post" action="submission.php">

                <img class="centerimg" src="assets/img/speakercall2.jpg">
                <br>
            
<div class="container">
    
       <div class="form-elements">
        <ul class="flex-outer">
            <li>
                <label for="full_name" style="font-family: 'Armata', sans-serif;">Full Name *</label>
                <input id="full_name" type=text name="full_name" required placeholder="eg: Your Name" style="font-family: 'Armata', sans-serif;"/>
            </li>
            <li>
                <label for="designation" style="font-family: 'Armata', sans-serif;"> Designation *</label>
                <input id="designation" name="designation" required placeholder="eg: Freelancer"style="font-family: 'Armata', sans-serif;" />
            </li>
            <li>
                <label for="email" style="font-family: 'Armata', sans-serif;">Email Address *</label>
                <input id="email" name="email" type="email" value=""
                       required placeholder="your.name@email.com" style="font-family: 'Armata', sans-serif;"/>
                <span class="email-invalid" style="display:none">
          Must be a valid email address</span>
                <!--TODO : check this invalid checking-->
            </li>
            <li>
                <label for="contact_no"style="font-family: 'Armata', sans-serif;">Contact Number *</label>
                <input id="contact_no" name="contact_no" type="number" value=""
                      maxlength="10" required placeholder="eg: 9447718219" style="font-family: 'Armata', sans-serif;"/>
                <!--TODO : type for number-->
            </li>
            <li>
                <label for="address" style="font-family: 'Armata', sans-serif;">Address *</label>
                <textarea id="address" name="address" rows="5"
                          required style="font-family: 'Armata', sans-serif;" placeholder="eg: Kakkanad, Kochi, Kerala"></textarea>
            </li>
            <li>
                <label for="field" style="font-family: 'Armata', sans-serif;">Field Of Expertise *</label>
                <input id="field" style="font-family: 'Armata', sans-serif;" name="field" required placeholder="eg: Technical " />
            </li>
            <li>
                <label for="brief_description" style="font-family: 'Armata', sans-serif;">Please give a brief description of your interpretation of the theme *</label>
                <textarea id="brief_description" style="font-family: 'Armata', sans-serif;" name="brief_description" required rows="10" placeholder="THEME -
Hypercubes : Beyond Dimension -
Taken literally a line , a square , a cube and tesseract are all the same thing except with a little added dimension. Although the existence of a thought or idea is universal, it can evolve to a far greater extent when given a new dimension to grow into or in simpler words , when it's looked at from a different perspective. History has it's examples of how wondrous developments have followed this evolution of thought. Something simple or even controversial can have a totally different implication based on the perspective from which it is viewed. Everyone has a different perspective and each perspective is a different dimension of thought. Bringing all of this together can bring about better clarity and understanding."></textarea>
            </li>
            <li>
                <label for="topic" style="font-family: 'Armata', sans-serif;">Keeping this theme in mind, what would your TEDx talk be about? *</label>
                <textarea id="topic" style="font-family: 'Armata', sans-serif;" name="topic" required rows="10" required placeholder="Description Of Your Talk"></textarea>
            </li>

            <li>
                <label for="tedx_past" style="font-family: 'Armata', sans-serif;">Do you have any prior experience as a TED/TEDx speaker? *</label>
                <div id="tedx_past" required style="font-family: 'Armata', sans-serif;">
                    <input type="radio" name="tedx_past" value="Yes"> Yes<br>
                    <input type="radio" name="tedx_past" value="No"> No
                </div>
            </li>

            <li>
                <label for="old_link" style="font-family: 'Armata', sans-serif;">If yes, please provide the link to your TED/TEDx talk.(Provide links separated by commas)</label>
                <input id="old_link" style="font-family: 'Armata', sans-serif;" name="old_link"  placeholder="Links To Your Talks" />
            </li>
            <li>
                <label for="other_talks" style="font-family: 'Armata', sans-serif;">Please provide details of  any past speaking experiences you have other than TED/TEDx talks.(Provide links if any separated by commas)</label>
                <textarea id="other_talks" style="font-family: 'Armata', sans-serif;" name="other_talks"  rows="10"  placeholder="Past Speaking Experiences"></textarea>
            </li>


<div class="g-recaptcha" data-sitekey="6Lcw7IUUAAAAAKZle4V0LWK5RkEgGScNsWmBM1dn"></div>
	
            <li>
               <button type="submit" id="submit"  name="submit" value="submit" >Submit</button>
            </li>
			
	
			
        </ul>
       </div>

	   

    </form>
</div>

<script data-cfasync="false" type="text/javascript"
        src="https://cdn.rawgit.com/dwyl/html-form-send-email-via-google-script-without-server/master/form-submission-handler.js"></script>

                <script>
                    (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
                        t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
                    })(window, document, '_gscq','script','//widgets.getsitecontrol.com/152018/script.js');
                </script>
				
				
			</body>
			</html>
			
			
				
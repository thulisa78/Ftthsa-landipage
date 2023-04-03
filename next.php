<?php
 if (isset($_POST["submit_address"]))  {
	$address = $_POST["address"];
	$address_lower = strtolower($_POST["address"]);
	$address =str_replace("","+", $address);
	$service_not_avail = '';
	if($address_lower == 'strydom park' || $address_lower == 'randburg' || $address_lower == 'ferndale' || $address_lower == 'windsor east' || $address_lower == 'queens avenue windsor west' || $address_lower == 'arbeid avenue' || $address_lower == 'arbeid avenue, strydom park' || $address_lower == 'arbeid avenue strydom park') {
		$address = $address;
		$service_avail  = '<font color="green">Service available in your  location, Please click on package plab to choose a suitable package.</font>';
	}

    elseif($address_lower == 'hammer avenue,strydom park' || $address_lower == ' commercial avenue,strydom park' || $address_lower == 'fabriek street,strydom park' || $address_lower == 'gerhardus street,strydom park' || $address_lower == 'hans strijdom drive,strydom park' || $address_lower == 'langwa street,strydom park' || $address_lower == 'kruger road, strydom park' || $address_lower == 'lyn road,strydom park'|| $address_lower == ' commercial avenue,strydom park' || $address_lower == 'fabriek street,strydom park' || $address_lower == 'gerhardus street,strydom park' || $address_lower == 'hans strijdom drive,strydom park' || $address_lower == 'langwa street,strydom park' || $address_lower == 'kruger road, strydom park' || $address_lower == 'lyn road,strydom park' || $address_lower == ' malibongwe drive,strydom park' || $address_lower == 'masjien street,strydom park' || $address_lower == 'naaf street,strydom park' || $address_lower == 'remblok street,strydom park' || $address_lower == 'sable close,strydom park' || $address_lower == 'sterling street, strydom park' || $address_lower == 'tungsten road,strydom park'|| $address_lower == 'samantha street,strydom park'|| $address_lower == 'susan street,strydom park'|| $address_lower == 'wakis avenue,strydom park'|| $address_lower == 'bram fischer Drive,randburg' || $address_lower == 'bond street,randburg
    ' || $address_lower == 'randburg' || $address_lower == 'dover street,randburg' || $address_lower == 'harley street,randburg' || $address_lower == 'kent avenue,randburg' || $address_lower == 'main avenue,randburg' || $address_lower == 'oak avenue,randburg' || $address_lower == 'oxford street,randburg'|| $address_lower == 'oak street,randburg' || $address_lower == 'philips street,randburg' || $address_lower == 'pretoria avenue,randburg'|| $address_lower == 'republic road,randburg' || $address_lower == 'pine avenue,randburg'|| $address_lower == 'surrey avenue,randburg'|| $address_lower == 'surrey street,randburg' || $address_lower == 'beatrice street,windsor east'|| $address_lower == 'duchesses avenue,windsor east' || $address_lower == 'earls avenue,windsor east'|| $address_lower == 'countesses avenue,windsor east'|| $address_lower == 'dukes avenue,windsor east' || $address_lower == 'george street,windsor east'
    || $address_lower == 'henry street,windsor east' || $address_lower == 'kings avenue,windsor east' || $address_lower == 'golf avenue,windsor east' || $address_lower == 'judges avenue,windsor east' || $address_lower == 'knights avenue,windsor east' || $address_lower == 'lords avenue,windsor east' || $address_lower == 'naude street,windsor east'|| $address_lower == 'princesses avenue,windsor east' || $address_lower == 'may street,windsor east' || $address_lower == 'princes avenue windsor east' || $address_lower == 'queens avenue windsor east' || $address_lower == 'republic road windsor east' || $address_lower == 'viscounts avenue,windsor east'|| $address_lower == 'alexander street windsor west' || $address_lower == 'arthur street windsor west' || $address_lower == 'countesses avenue windsor west' || $address_lower == 'alice street windsor west' || $address_lower == 'duchesses avenue windsor west' || $address_lower == 'earls avenue windsor west' || $address_lower == 'judges avenue windsor west' || $address_lower == 'dukes avenue windsor west' || $address_lower == 'Edward Street windsor west' || $address_lower == 'kings avenue windsor west' || $address_lower == 'lords avenue windsor west' || $address_lower == 'louise avenue windsor west' || $address_lower == 'Knights Avenue windsor west' || $address_lower == 'premiers avenue windsor west' || $address_lower == 'princesses avenue windsor west' || $address_lower == 'viscounts avenue windsor west' || $address_lower == 'princes avenue windsor west') {
	 $address = $address;
	 $service_not_avail = '<font color="green">Service available in your  location, Please click on package plab to choose a suitable package.</font>';
	} else {
          $address = $address;
        //  $service_not_avail = '<script>alert("Service not available in the selected location")</script>';
        // echo $service_not_avail;
		
		// $service_not_avail = '<font color="red">Service not available in the selected location.</font>';
	}
 }

?>                             
<html>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css">
    <header class="header" id="header">
        <nav class="navbar container">
            <div class="logo">
                <img src="assets/img/FTTHSA-Logo1.png" alt="" width="35%" height="10%" >
   </div>          
</nav>                     
<body>
<main class="main">
        <section class="section banner banner-section">
            <div class="container banner-column">
                <div class="banner-inner">
                    <h3 class="heading-x3">WiFi connection made easy</h3>
                    <p class="paragraph">
                        Your uninterrupted internet streaming journey begins now.<br>Choose from a wide range of high-speed, uncapped Fibre/WIFI packages.
                        <div class="searchbox-wrap">
                        <form method="POST"  >
                        <p><input type ="text/left"  name="address"  placeholder="Enter address to get started." value="<?php echo isset($_POST['address']) ? $_POST['address'] : ''; ?>">
                         <input id=searchAdressSubmit type="submit" onclick="myFunction()" value="Wifi Coverage" name="submit_address"></p>
						 <p><?php echo (isset($service_not_avail) && $service_not_avail != '') ? $service_not_avail :'<div class=" alert alert-warning alert-dismissible fade show">
<strong>Coverage is not available in your area at the moment</strong>. Please click on the "Leave Your Info" button to send your details for us to contact you when fibre is available in your street.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>'; ?></p>
                               <div class="map">
                                <iframe width="100%" height="390" src="https://maps.google.com/maps?q=<?php echo $address;  ?>&output=embed" ></iframe> 
                               </div>
                            <br><br>
                            <a  href ="http://www.ftthsa-signup.co.za/payment-plans/"><button class="button2"> VIEW PACKAGES</a></button>
							<a  href ="http://www.ftthsa-signup.co.za/"><button class ="button2" >CONTACT US</a></button></a>
                                </form>
                            </div> 
                            <a rel ="click here" > <button class ="openbutton1"  onclick="openForm1()" >LEAVE YOUR INFO</a></button>  
                            <!-- <form action="https://formsubmit.co/tulisa.wasa@gmail.com" method="POST"> -->
                             <form name="myForm" action="success.html" onsubmit="return validateForm()" method="post">  
                             <!-- <div id="map"> -->
            
                            <!-- <div class="container mt-5"> -->
        <!-- <h1>Contact Me!</h1> -->
        <!-- <form class="row g-3" action="http://ftthsa-coverage.co.za/" method="POST"> -->
          <!-- Honeypot --
          <input type="text" name="_honey" style="display: none;">

          <!-- Disable Captcha -->
          <input type="hidden" name="_captcha" value="false"> 
          <!-- <form class="i-form" action="https://formsubmit.co/tulisa.wasa@gmail.com" method="POST"> -->
               <!-- <input type="hidden" name="_url" value="https://support@gplat.co.za">  -->
                           <div class="myForm1">
                               <div class="form-popup1" id="myForm1">
                                   <label for="name"> First Name</b></label>
                                   <p><input id="Cont" name=" Name" placeholder2="First Name" name=" Number" required></p>
                                   <!-- <p><input id="Name" name="name" placeholder1=" " name="name" required></p> -->
                               <label for="surn">Surname</b></label>
                                   <p><input id="surn" name="Surname" placeholder2="Enter Surname" name="surname" required></p>
                                   <label for="name">Contact Number</b></label>
                                   <p><input id="Cont" name="Contact Number" placeholder2="Contact Number" name=" Number" required></p>
                                   <button type="submit"   class="btn2">Submit</button>
                                   <button type="button" class="btn2" onclick="closeForm1()">Close</button>
                                
            <form> 
           
         </div>                                                    
         </div>
     </div>                                                        
</section>
<script src="https://smtpjs.com/v3/smtp.js">
          </script>
<script>
   
function openForm1() {
    
  document.getElementById("myForm1").style.display = "block";
  

}


function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
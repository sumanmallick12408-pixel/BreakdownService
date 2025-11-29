<?php
include 'config.php';
if(isset($_POST['submit'])){
   $username=$_POST['username'];
   $email=$_POST['email'];
   $mobile=$_POST['mobile'];
   $problem=$_POST['problem'];
   $city=$_POST['city'];

   $sql="insert into `request` (username,email,mobile,problem,city) values('$username','$email','$mobile','$problem','$city')";
   $result=mysqli_query($conn,$sql);
   if($result){
    //echo "Data inserted Sucessfully";
   }else{
    die(mysqli_error($conn));
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="/VSCODE/index.css?v=<?=time();?>">
</head>

<body>
    <header>  
        <div class="navbar">

            <div class="icon">

                <img src="depositphotos_446351784-stock-illustration-initial-logo-company-name-colored.jpg" alt="t">

            </div>
            <h2 class="logo">Onroad <br> Breakdown</h2>

            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="service.php">SERVICE</a></li>
                    <li><a href="form.php">CONTACT</a></li>
                    <li><a href="plans.php">PLANS</a></li>

                </ul>
</div>
             <div class="search">
                <button class="btn">Login</button>
             <ul class="login-list">
                <li class="nav-item" ><a href="login.php">Admin</a></li>
                <li class="nav-item"><a href="m_login.php">Mechanic</a></li>
                <li class="nav-item"><a href="c_login.php">user</a></li>
              </ul>
            </div>
        </div>
    </header>
    <main>
        <br>
        <br>
        <video autoplay loop muted plays-inline class="background-clip">
            <source src="FUEL.mp4" type="video/mp4"> 
        </video> 

        <div class="content">

            <ul>
                <li>
                    <h1>WELCOME TO <br>OUR SERVICE</h1>

                    <P class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                        Soluta facilis a consequuntur laborum aliquid corporis,<br>
                        sapiente illo dolores facere consectetur at? Eaque esse, <br>
                        voluptates modi nihil est amet minima <br>Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        <br>
                        Soluta facilis a consequuntur laborum aliquid corporis,<br>
                        sapiente illo dolores facere consectetur at? Eaque esse, <br>
                        voluptates modi nihil est amet minima exercitationem
                    </P>
                    <button class="cn"><a href="\VSCODE\c_register.php">JOIN US</a></button>
                </li>

            </ul>
        </div>
    </main>
    <div class="a">
        <h2>We are Committed to Provide Best Quality
             Service
        </h2>
        <br>
        <p> We are committed to providing the highest quality <br>
            service for On-road beakdown assistance. Our team
            understand the stress and incovenience of unexpected <br>
            vehicle trouble,which is why we prioritize fast,reliable,
            and professional support.Your trust derive us to maintain <br>
            excellence, offering seamless and efficient solution whenever
            and whenever you need them.
        </p>
        <ul>
            <li>
                <div class="card-container">
                    <div class="card">
                        <img src="road.png" alt="">
                        <div class="card-content">
                            <h3>Roadside Emergency</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, laborum veritatis
                                quo
                                dolorem <br>
                                necessitatibus commodi, animi facilis rerum alias iusto, enim esse illo n</p>
                            <a href="service.php" class="btt">Know more</a>
                        </div>
                    </div>

                </div>
            </li>
            <li>
                <div class="card-container">
                    <div class="card">
                        <img src="wheel.jpg" alt="">
                        <div class="card-content">
                            <h3>Sercice On Wheel</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, laborum veritatis
                                quo
                                dolorem <br>
                                necessitatibus commodi, animi facilis rerum alias iusto, enim esse illo n</p>
                            <a href="service.php" class="btt">Know more</a>
                        </div>
                    </div>

                </div>
            </li>
            <li>
                <div class="card-container">
                    <div class="card">
                        <img src="fuel.jpg" alt="">
                        <div class="card-content">
                            <h3>Fuel service</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, laborum veritatis
                                quo
                                dolorem <br>
                                necessitatibus commodi, animi facilis rerum alias iusto, enim esse illo n</p>
                            <a href="service.php" class="btt">Know more</a>
                        </div>
                    </div>

                </div>
            </li>
            <li>
                <div class="card-container">
                    <div class="card">
                        <img src="insurance.jpg" alt="">
                        <div class="card-content">
                            <h3>Get Insurence</h3>
                            <p>Lorem dolor sit amet consectetur, adipisicing elit. Nihil, laborum veritatis
                                quo
                                dolorem <br>
                                necessitatibus commodi, animi facilis rerum alias iusto, enim esse illo n</p>
                            <a href="service.php" class="btt">Know more</a>
                        </div>
                    </div>

                </div>
            </li>
        </ul>
    </div>
    <div class="b">
        <h2>Offers</h2>
        <p> Enjoy 40% discounted rates on emergency roadside services, including towing, battery
            jump-starts,
            <br>
            tire changes,vand fuel delivery.Whether you are a frequent traveler or an occasional driver,our
            affordable <br>
            plans ensure you are never stranded.Join now and experience <br> hassle-free road assistance
            whenever
            you need it!
        </p>
        <div class="slider">
            <div class="row">
                <div class="column">
                    <img src="download (6).jfif" alt="">
                </div>
                
                <div class="column">
                    <img src="Detailing Service.PNG" alt="">
                </div>
                <div class="column">
                    <img src="offer1.jpg" alt="">
                </div>
                <div class="column">
                    <img src="Best-Fuel-Credit-Cards-India.webp" alt="">
                </div>
                <div class="column">
                    <img src="download (6).jfif" alt="">
                </div>
                
                <div class="column">
                    <img src="Detailing Service.PNG" alt="">
                </div>
                <div class="column">
                    <img src="offer1.jpg" alt="">
                </div>
                <div class="column">
                    <img src="Best-Fuel-Credit-Cards-India.webp" alt="">
                </div>
                <div class="column">
                    <img src="download (6).jfif" alt="">
                </div>
               
            <div class="column">
                <img src="Detailing Service.PNG" alt="">
            </div>
            <div class="column">
                <img src="offer1.jpg" alt="">
            </div>
            <div class="column">
                <img src="Best-Fuel-Credit-Cards-India.webp" alt="">
            </div>
            <div class="column">
                <img src="Detailing Service.PNG" alt="">
            </div>
            <div class="column">
                <img src="offer1.jpg" alt="">
            </div>
            <div class="column">
                <img src="Best-Fuel-Credit-Cards-India.webp" alt="">
            </div>


        </div>
    </div>
    </div>
    <div class="c">

        <h2>Service We Provide</h2>
        <p> We provide services, including towing, battery jump-starts,
            tire changes,vand fuel delivery.Whether you are a <br>
            frequent traveler or an occasional driver,our affordable
            plans ensure you are never stranded.Join now and experience <br> hassle-free road assistance
            whenever
            you need it! <br>
            With our reliable service ,you can have peace of mind knowing <br>
            that assistance is just a call away, anytime and anywhere.
        </p>

        <ul>
            <li>
                <div class="list1">

                    <h4>Tyre Puncture</h4>
                    <img src="tyre.png" height="80px" width="80px">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing consectetur adipisicing <br>
                        elit. Pariatur impedit consequuntur mollitia, molestias saepe molestias saepe <br>
                        aspernatur, facere laudantium amet, eligendi soluta commodi endi soluta commodi <br>
                        deserunt a. Quis, delectus sit dolore iste quam illo.endi soluta commodi <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing endi soluta commodi<br>
                        <br>
                    </p>
                    <a href="service.php" class="btt">More Information</a>
                </div>
            </li>
            <li>
                <div class="list1">
                    <h4>Battery Jumpstart</h4>
                    <img src="battery.png" height="80px" width="80px">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing consectetur adipisicing<br>
                        elit. Pariatur impedit consequuntur mollitia, molestias saepe molestias saepe <br>
                        aspernatur, facere laudantium amet, eligendi soluta commodi endi soluta commodi <br>
                        deserunt a. Quis, delectus sit dolore iste quam illo. endi soluta commodi<br>
                        Lorem ipsum dolor sit amet consectetur adipisicing endi soluta commodi<br>
                        <br>
                    </p>
                    <a href="service.php" class="btt">More Information</a>
                </div>

            </li>
            <li>
                <div class="list1">
                    <h4>Fuel delivery</h4>
                    <img src="tunk.png" height="80px" width="80px">
                    <p>Lorem ipsum dolor sit amet consectetur consectetur adipisicing adipisicing <br>
                        elit. Pariatur impedit consequuntur mollitia, molestias saepe molestias saepe <br>
                        aspernatur, facere laudantium amet, eligendi soluta commodi endi soluta commodi <br>
                        deserunt a. Quis, delectus sit dolore iste quam illo.endi soluta commodi <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing endi soluta commodi <br> <br>

                    </p>
                    <a href="service.php" class="btt">More Information</a>
                </div>

            </li>
            <li>
                <div class="list1">
                    <h4> Car Towing</h4>
                    <img src="towing.png" height="80px" width="80px">
                    <p> Our car towing service is here to help when you need it most. Whether you've <br>
                         been involved in an accident, experienced a breakdown, or simply need a vehicle <br>
                          transported, our team of expert technicians are available 24/7 to provide safe <br>
                           and reliable towing services. With our state-of-the-art equipment and fully equipped <br> tow trucks,
                         we can handle any type of vehicle, from small cars to large trucks and SUVs.
                    </p>
                    <a href="service.php " class="btt">More Information</a>
                </div>

            </li>
        </ul>
    </div>
    <div class="x">
        <ul>
            <li>
                <div class="list1">
                    <h4> Key Lockout</h4>
                    <img src="key.png" width="70px" height=" 80px" alt="">
                    <p>Stranded outside your vehicle with no way in? Don't worry, our key lockout 
                         service is  <br>
                          here to help. Our team of expert technicians are available 24/7 to  
                          provide fast  <br>
                           and reliable assistance. Whether you've locked your keys in your car, 
                           yor need <br> help with a broken lock, we'll get you back in your vehicle quickly and safely.
                    </p> <br>

                    <a href="service.php" class="btt">More Information</a>
                </div>
            </li>
            <li>
                <div class="list1">
                    <h4>Spare Part Supply</h4>
                    <img src="spm.png" height="80px" width="80px">
                    <p>
                        Get the right spare parts for your vehicle with our <br>
                         reliable supply service.We offer a wide range of genuine and high-quality aftermarket parts for  <br>
                          various makes and models. Our team of experts will help you find the right <br>
                           parts for your needs, and our efficient logistics ensure timely delivery.
                        <br>
                    </p>
                    <br>
                    <a href="service.php" class="btt">More Information</a>
                </div>

            </li>
            <li>
                <div class="list1">
                    <h4>Minor Issues</h4>
                    <img src="9718308.png" height="80px" width="80px">
                    <p>Don't let small problems become big headaches. Our minor issues service 
                         is designed  <br> to tackle those pesky problems that can slow you down. From  
                         
                         faulty wiper <br>
                          blades to minor electrical issues, our team of expert technicians 
                          will quickly <br>
                           diagnose and fix the problem, getting you back on the road in no time.

                    </p>
                    <br>
                    <a href="service.php" class="btt">More Information</a>
                </div>

            </li>
            <li>
                <div class="list1">
                    <h4>Instant car Repair</h4>
                    <img src="5361512.png" height="80px" width="80px">
                    <p>Instant Car Repair Service
                        Get back on the road quickly and safely with our instant car repair. <br>
                         Our team of expert technicians are available 24/7 to provide fast and reliable  <br>

                         repairs for a wide range of car issues. From flat tires to minor engine problems, <br>
                          we'll fix the issue on the spot, minimizing downtime and getting you back behind wheel.
                        
                        </p>
                        <br>
                    <a href="service.php" class="btt">More Information</a>
                </div>

            </li>
        </ul>
    </div>
    <div class="d">
        <h2>How We Work</h2>
        <p>Discover how we efficiently address your needs. From initial <br>
           contect to resolution, We strive for transparency, rellabllity and costomer
            <br>
             satisfaction. Our duty is to assist you perfectly and your satisfaction is our responsbility
        </p>
        <ul class="png">
            <li><img src="one.png" heigt="200px" width="130px"></li>
            <div class="st"><h3>Pull Over Safely</h3><br>
            <p>If you're low on fuel, find a safe spot to stop- ideally away from traffic, on the shoulder or in a parking area.</p></div>
            <li><img src="two.png" heigt="200px" width="130px"></li>
            <div class="st"><h3>Know Your Fuel <br> Type </h3><br>
            <p>Always confirm whether your vhicle uses petrol, diesil, or another type- giving wrong info can cause serious engine damage.</p></div>
            <li><img src="number_3_blue-512.png" heigt="200px" width="130px"></li>
            <div class="st"><h3>Call a Reliable  <br>Service</h3><br>
            <p>Contact a roadside assitance provider that offers fast and verified fuel delivery in your area.</p></div>
            <li><img src="four.png" heigt="200px" width="130px"></li>
            <div class="st"><h3>Stay With Your  <br>Vehicle</h3><br>
            <p>Wait inside or near your car in a vissible, safe spot. Turn on hazard lights if it's dark or you're on a roadside.</p></div>

        </ul>
        
    </div>
    
    <div class="y">
        <h2><strong> Get a quick service</strong></h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam commodi <br>
            pariatur aliquam deleniti officiis animi explicabo quod magnam dolorum quae culpa, <br>
            itaque corporis laborum magni molestiae a quasi nihil molestias?</p>
        <h1 class="y2">DO YOU NEED HELP?<br>WE ARE HERE TO <br>HELP YOU AYTIME <br>
            AYWERE <br>

            <a href="form.php"> <button type="button" class="butn"> Contect Us</button></a>
        </h1>
        <form  method="post" class="fuel-form">
        <h3>Get Assistance Now</h3>
        <input type="text" placeholder="Name" name="username"><br>
        <input type="email" placeholder="Email" name="email"><br>
        <input type="number" placeholder="10 digit Mobile Number" name="mobile"><br>
        <input type="text" placeholder="problem?" name="problem"><br>
        <input type="text" placeholder="City" name="city">
        <button type="submit" name="submit">Request A Callback</button>

    </form>
</div>

        
    </main>
<footer style="background-color: black; color: white;  margin-top:-200 px; font-family: sans-serif;">
        <div class="bottom-list">
          
          <!-- Apps -->
          <ul>
            <li><div class="bottom-c"><p>The Agency for good Service</p></li>
         <li> <div class=" bottom-a" style="margin-bottom: 20px;">
            <h3>Apps</h3><br>
            <p>Get it on</p>
            <p>
              <img src="google-play-icon.png" alt="" style="height: 24px;"> <p>google play</p>
              <img src="app-store-icon.png" alt="" style="height: 24px;"><p>app store</p>
            </p>
          </div></li>
      
          <!-- Popular Cities -->
          <li><div  class=" bottom" style="margin-bottom: 20px;">
            <h3>Popular Cities</h3><br>
            <p><strong>Noida:</strong> Tyre Puncture, Fuel Delivery, Towing, Key Lockout, Battery Jump Start, Instant Car Repair</p><br>
            <p><strong>Gurgaon:</strong> Tyre Puncture, Fuel Delivery, Towing, Key Lockout, Battery Jump Start, Instant Car Repair</p><br>
            <p><strong>Delhi:</strong> Tyre Puncture, Fuel Delivery, Towing, Key Lockout, Battery Jump Start, Instant Car Repair</p><br>
            <p><strong>Ghaziabad:</strong> Tyre Puncture, Fuel Delivery, Towing, Key Lockout, Battery Jump Start, Instant Car Repair</p>
          </div></li>
      
          <!-- Popular Services -->
          <li> <div class=" bottom"  style="margin-bottom: 20px;">
            <h3>Popular Services</h3><br>
            <p>Roadside Assistance | Service on Wheels | Car Sell Campaign | Motor Insurance | 2-wheeler | Commercial Car | Electric vehicle (EV) | B2B Deal</p>
          </div></li>
      
          <!-- Press and Links -->
         <li> <div  class=" bottom" style="margin-bottom: 20px;">
            <h3>Press</h3><br>
            <p>Blog | Login | Media | Shop | City Route Map Guide | Contact Us | Privacy & Policy | Terms & Conditions</p>
          </div></li>
      
          <!-- Contact Info -->
          <li> <div class=" bottom-b" >
            <h3>Contact</h3><br>
            <p>About Us</p>
            <p>Helpline (24 Hours): <a href="tel:+917409080706" style="color: white;">+91 7409080706</a></p>
            <p>
              <a href="http://www.facebook.com/profile.php?id=100080808643524" style="margin-right: 10px;"><img src="facebook.png" alt="Facebook" style="height: 24px; color: white;">facebook</a>
              <a href="http://www.twitter.com/profile.php?id=100080808643524" style="margin-right: 10px;"><img src="twitter.png" alt="Twitter" style="height: 24px; color: white;">Twitter</a>
              <a href="http://www.instagram.com/profile.php?id=100080808643524" style="margin-right: 10px;"><img src="insta.png" alt="instagram" style="height: 24px; color: white; ">Instagram</a>
            </p>
          </div>
          </li>
          </ul>
        </div>
      </footer>
</body>

</html>
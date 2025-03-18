<?php
include 'includes/connect.php';

if(isset($_SESSION['user_id']))
{
// include 'includes/wallet.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="stylesheets.css">
    <link rel="stylesheet" type="text/css" href="styles2.css">
    <link rel="stylesheet" type="text/css" href="styles3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script rel="javascript" src="script.js" defer> </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News and Blogs</title>
</head>
<body>
        <div class="parent">
            <section class="header2">
              <!--Navigation-->
              <span class="head">
                <nav class="navigation" id="main-nav">
                    <a class="logoHover" href="index.php"><img src="img/logo.jpg"  alt="Logo"></a>
                    <div class="navigation_menu">
                    <ul>
                      <li><a> <iframe class="clock" scrolling="no" frameborder="no" clocktype="html5" 
                        src="https://www.clocklink.com/html5embed.php?clock=043&timezone=Philippines
                        _Manila&color=yellow&size=120&Title=&Message=&Target=&From=2022,1,1,0,0,0&Color=yellow"></iframe></a></li>
                        <li class="und"><a href="index.php" href="javascript:void(0)" > HOME </a></li>
                        <li class="und"><a href="top_meals.php"> TOP MEALS </a></li>
                        <li class="und"><a href="news_and_blogs.php" id="home"> NEWS & BLOGS </a></li>

                        <li class="und"><a href="delivery.php">DELIVERY </li> 
                        <li class="und dropdown">
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="orders.php" data-activates="profile-dropdown"><?php echo $name;?> <i class="mdi-navigation-arrow-drop-down right"></i></a>
                        <div class="dropdown-content">
                          <a href="router/logout.php">LOG OUT</a>
                        </div>
                     </li>

                        <a href="javascript:void(0);" 
                        style="font-size:15px; color:#f1ce02" 
                        class="icon" onclick="FuncNav()">&#9776;</a>
                                            
                      </ul>
                    </div>
                </nav>
              </span>
            <!--Navigation-->
             <!--SlideShow-->
             <div class="slideshow" id="stick-scroll">
              <div class="slideshow-container">
                <div class="slider">
                  <div class="slides">
                    <!--radio buttons start-->
                    <input type="radio" name="radio-button" id="radio1">
                    <input type="radio" name="radio-button" id="radio2">
                    <input type="radio" name="radio-button" id="radio3">
                    <input type="radio" name="radio-button" id="radio4">
                    <input type="radio" name="radio-button" id="radio5">
                    <input type="radio" name="radio-button" id="radio6">
                    <input type="radio" name="radio-button" id="radio7">
                    <input type="radio" name="radio-button" id="radio8">
                    <input type="radio" name="radio-button" id="radio9">
                    <input type="radio" name="radio-button" id="radio10">
                    <input type="radio" name="radio-button" id="radio11">
                  
                    <!--radio buttons end-->
                    <!--slide images start-->
                    <div class="slide first">
                      <img src="img/News_Pics/Closed_Election_day.jpg" alt="">
                    </div>
                    <div class="slide">
                      <img src="img/News_Pics/Free-BoneMarrow.jpg" alt="">
                    </div>
                    <div class="slide">
                      <img src="img/News_Pics/Immediate_Hiring.jpg" alt="">
                    </div>
                    <div class="slide">
                      <img src="img/News_Pics/New-Menu-Inasal.jpg" alt="">
                    </div>
                    <div class="slide">
                      <img src="img/News_Pics/No_Stock_No_Supply.jpg" alt="">
                    </div>
                    <div class="slide">
                      <img src="img/News_Pics/Pasonanca_Stall.jpg" alt="">
                    </div>
                    <div class="slide">
                      <img src="img/News_Pics/Reopening_putikBranch.jpg" alt="">
                    </div>
                    <div class="slide">
                      <img src= "img/News_Pics/Unavailable.jpg" alt="">
                    </div>
                    <div class="slide">
                      <img src="img/News_Pics/unli_fried_Rice.jpg" alt="">
                    </div>
                    <div class="slide">
                      <img src="img/News_Pics/we_are_hiring.jpg" alt="">
                    </div>
                    <div class="slide">
                      <img src="img/News_Pics/Yellow_RiceAvailable_AT_Putik.jpg" alt="">
                    </div>
            
                    <!--slide images end-->
                    <!--automatic navigation start-->
                    <div class="navigation-auto">
                      <div class="auto-button1"></div>
                      <div class="auto-button2"></div>
                      <div class="auto-button3"></div>
                      <div class="auto-button4"></div>
                      <div class="auto-button5"></div>
                      <div class="auto-button6"></div>
                      <div class="auto-button7"></div>
                      <div class="auto-button8"></div>
                      <div class="auto-button9"></div>
                      <div class="auto-button10"></div>
                      <div class="auto-button11"></div>
                    </div>
                    <!--automatic navigation end-->
                  </div>
                  <!--manual navigation start-->
                  <div class="navigation-manual">
                    <label for="radio1" class="manual-button"></label>
                    <label for="radio2" class="manual-button"></label>
                    <label for="radio3" class="manual-button"></label>
                    <label for="radio4" class="manual-button"></label>
                    <label for="radio5" class="manual-button"></label>
                    <label for="radio6" class="manual-button"></label>
                    <label for="radio7" class="manual-button"></label>
                    <label for="radio8" class="manual-button"></label>
                    <label for="radio9" class="manual-button"></label>
                    <label for="radio10" class="manual-button"></label>
                    <label for="radio11" class="manual-button"></label>
                  </div>
                  <!--manual navigation end-->
                </div>
              </div>
            </div>
          <!--SlideShow-->
            </section>

            <section class="transition">
              <img src="img/Art/EGG_MAN.png" width="200px" height="200px">
              <img src="img/Art/siss.png" height="200px">
            </section>
            <!--New Section For addional content-->
            <section class="Additional_Content">
              <div class="parent_of_news">
              <br><br>
              <div class="textbox_main">
              <br>
              <center><h1>NEWS</h1></center>  
              <div class="news_2cols">
                <!--start-->
                      <!--1st-->
                      <div id="content_1">
                        <div class="headlines">
                          <div class="title">
                            <h3>Unli fried Rice </h3>
                            <h5>Available at Sta. Maria Branch</h5>
                          </div>
                            <img src="img/News_Pics/unli_fried_Rice.jpg" alt="Pasonanca_UnliRice">
                        </div>
                      </div>
                      <div id="content_2">
                        <!--Text Box-->
                        <div>
                        <p class="paragraph">
                          The Sta. Maria branch of Pares Silog is celebrating its first Anniversary. 
                          To our patronage customers, we are offering a limited-time promo. 
                          Which is the "Rice all you want promo." 
                          Exclusively available on Sta. Maria Branch on the 3rd day of March 2022.   </p>
                        </div>
                        </div>
                    </div>
                    <!--2nd-->
                    <div class="news_2cols">
                      <div id="content_1">
                        <div class="headlines">
                          <div class="title">
                            <h3>Job Hiring</h3>
                            <h5>For Sta. Maria Branch</h5>
                          </div>
                            <img src="img/News_Pics/Immediate_Hiring.jpg" alt="Pasonanca_UnliRice">
                        </div>
                      </div>
                      <div id="content_2">
                        <!--Text Box-->
                        <div>
                        <p class="paragraph">
                          Our establishment is lacking 2 Cook. Be part of our crew! 
                          The requirement would be a biodata with a picture attached. 
                          Submit the requirements to Gym hub Gov. Ramos, Ave. Sta. Maria, Zamboanga City. 
                          Hope to see you as one of us. </p>
                        </div>
                        </div>
                    </div>
                    <!--3rd-->
                    <div class="news_2cols">
                      <div id="content_1">
                        <div class="headlines">
                          <div class="title">
                            <h3>Bone Marrow Unavailable </h3>
                            <h5>Both Putik and Sta. Maria</h5>
                          </div>
                            <img src="img/News_Pics/Unavailable.jpg" alt="Pasonanca_UnliRice">
                        </div>
                      </div>
                      <div id="content_2">
                        <!--Text Box-->
                        <div>
                        <p class="paragraph">
                          We apologize for the short supply of bone marrow in our establishment. According to our suppliers, 
                          the world supply of bone marrow is experiencing congestion and supply disruption; once the stock returns, 
                          we will immediately return the all-time favorite bone-marrow on our menu. 
                          Thank you for understanding, and have a nice day.  </p>
                        </div>
                        </div>
                      </div>
                      <!--4rd-->
                      <div class="news_2cols">
                        <div id="content_1">
                          <div class="headlines">
                            <div class="title">
                              <h3>We are hiring</h3>
                              <h5>Join us</h5>
                            </div>
                              <img src="img/News_Pics/we_are_hiring.jpg" alt="Pasonanca_UnliRice">
                          </div>
                        </div>
                        <div id="content_2">
                          <!--Text Box-->
                          <div>
                          <p class="paragraph">
                            Do you want to experience being a cook or assistant? 
                            Can you handle a load-intensive Working Environment? 
                            If so, Join us! We are accepting Cook and assistance to add to our workforce. 
                            While you're at our establishment, we will make sure to compensate you a decent amount for the efforts you make in our establishment. 
                            Also, we hope to accomplish our vision with the aid of our staff. 
                            What are you waiting for? Join now!  </p>
                          </div>
                          </div>
                        </div>
                      <!--5th-->
                      <div class="news_2cols">
                        <div id="content_1">
                          <div class="headlines">
                            <div class="title">
                              <h3>Free Bone Marrow </h3>
                              <h5>Available at Putik Branch</h5>
                            </div>
                              <img src="img/News_Pics/Free-BoneMarrow.jpg" alt="Pasonanca_UnliRice">
                          </div>
                        </div>
                        <div id="content_2">
                          <!--Text Box-->
                          <div>
                          <p class="paragraph">
                            Our Putik Branch is celebrating its 1st anniversary, and we want to celebrate it with a fattilicious bone-marrow goodness. 
                            The limited offer would be available only to our Putik branch, and only the 1st 50 customers will be able to obtain a free bone marrow in each purchase of Sizzling meals. 
                            This promo is only available on the 8th of October 2022.    </p>
                          </div>
                          </div>
                        </div>
                      <!--6th-->
                      <div class="news_2cols">
                        <div id="content_1">
                          <div class="headlines">
                            <div class="title">
                              <h3>New Inasal Meal </h3>
                              <h5>Available at Putik Branch</h5>
                            </div>
                              <img src="img/News_Pics/New-Menu-Inasal.jpg" alt="Pares_Silog_Inasals">
                          </div>
                        </div>
                        <div id="content_2">
                          <!--Text Box-->
                          <div>
                          <p class="paragraph">
                            Want to eat chicken? You've come to the right place here at Pares Silog, 
                            introducing our new menu, the Special Chicken Inasal. Eat now.  </p>
                          </div>
                          </div>
                        </div>
                      <!--7th-->
                      <div class="news_2cols">
                        <div id="content_1">
                          <div class="headlines">
                            <div class="title">
                              <h3>Pasonanca Stall is now open </h3>
                              <h5>Eat now</h5>
                            </div>
                              <img src="img/News_Pics/Pasonanca_Stall.jpg" alt="Pasonanca_UnliRice">
                          </div>
                        </div>
                        <div id="content_2">
                          <!--Text Box-->
                          <div>
                          <p class="paragraph">
                            Pasonanca Stall is now open! Invite your friends and family at our stall.  </p>
                          </div>
                          </div>
                        </div>
                      <!--8th-->
                      <div class="news_2cols">
                        <div id="content_1">
                          <div class="headlines">
                            <div class="title">
                              <h3>Yellow Rice now Available</h3>
                              <h5>Available at Putik Branch</h5>
                            </div>
                              <img src="img/News_Pics/Yellow_RiceAvailable_AT_Putik.jpg" alt="yellow_rice_pares_silog">
                          </div>
                        </div>
                        <div id="content_2">
                          <!--Text Box-->
                          <div>
                          <p class="paragraph">
                            Bored of having plain rice? Come and eat at Putik Branch where we serve this add-on exclusively.   </p>
                          </div>
                          </div>
                        </div>
                      <!--9th-->
                      <div class="news_2cols">
                        <div id="content_1">
                          <div class="headlines">
                            <div class="title">
                              <h3>Closed </h3>
                              <h5>Election Day</h5>
                            </div>
                              <img src="img/News_Pics/Closed_Election_day.jpg" alt="Bakit_si_BBM???">
                          </div>
                        </div>
                        <div id="content_2">
                          <!--Text Box-->
                          <div>
                          <p class="paragraph">
                            We are currently closed due to the election period. We Highly encourage our humble customers to come and vote for the future of our country.   </p>
                          </div>
                          </div>
                        </div>
                      <!--10th-->
                      <div class="news_2cols">
                        <div id="content_1">
                          <div class="headlines">
                            <div class="title">
                              <h3>No Stock No supply </h3>
                              <h5>Applicable to all Branches</h5>
                            </div>
                              <img src="img/News_Pics/No_Stock_No_Supply.jpg" alt="No Supply So sad :(">
                          </div>
                        </div>
                        <div id="content_2">
                          <!--Text Box-->
                          <div>
                          <p class="paragraph">
                            Currently, our all-time favorite bone marrow is unavailable in all branches due to circumstances. 
                            Stay tune to our page to be updated. Thank you!  </p>
                          </div>
                          </div>
                      </div>
                      <!--11th-->
                      <div class="news_2cols">
                        <div id="content_1">
                          <div class="headlines">
                            <div class="title">
                              <h3>Putik Branch Reopenning</h3>
                              <h5>Come and visit us!</h5>
                            </div>
                              <img src="img/News_Pics/Reopening_putikBranch.jpg" alt="Yieepie!!! :^)">
                          </div>
                        </div>
                        <div id="content_2">
                          <!--Text Box-->
                          <div>
                          <p class="paragraph">
                            We are happy to announce that we are reopening the putik branch of our beloved store. Come and Eat now!  </p>
                          </div>
                          </div>
                      </div>
                  <!--END-->
                <br>
              </div>
              <br>

            </section>
            <footer>

                        <a href="about.html"> <p>ABOUT</p></a>
                        <a href="https://www.facebook.com/pareSilog.zamboanga"><img src="img/FB_logo.png" alt="logo" class = "fbLogo"></a>
            </footer>
        </div>
</body>
</html>
<?php
	}
	else
	{
		if($_SESSION['customer_sid']==session_id())
		{
			header("location:index.php");		
		}
		else{
			header("location:login.php");
		}
	}
?>
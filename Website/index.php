<?php
include 'includes/connect.php';

if(isset($_SESSION['user_id']))
{
// include 'includes/wallet.php';
?>
<!--Test V.1.0.0.1-->
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
    <link rel="icon" href="img/logo.jpg" sizes="32x32">
    <title>Homepage</title>
</head>
<body>
        <div class="parent">
            <section class="header">
   
            <!--Navigation-->
            <span class="head">
                <nav class="navigation" id="main-nav">
                    <a class="logoHover" href="index.php"><img src="img/logo.jpg"  alt="Logo"></a>
                    <div class="navigation_menu">
                    <ul>
                      <li><a> <iframe class="clock" scrolling="no" frameborder="no" clocktype="html5" 
                        src="https://www.clocklink.com/html5embed.php?clock=043&timezone=Philippines
                        _Manila&color=yellow&size=120&Title=&Message=&Target=&From=2022,1,1,0,0,0&Color=yellow"></iframe></a></li>
                        <li class="und"><a href="index.php" href="javascript:void(0)" id="home"> HOME </a></li>
                        <li class="und"><a href="top_meals.php"> TOP MEALS </a></li>
                        <li class="und"><a href="news_and_blogs.php"> NEWS & BLOGS </a></li>

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
                        <img src="img/allMenu/beef_pares.jpg" alt="">
                      </div>
                      <div class="slide">
                        <img src="img/allMenu/beef_tapa.jpg" alt="">
                      </div>
                      <div class="slide">
                        <img src="img/allMenu/BeefPares_with_BoneMarrow.jpg" alt="">
                      </div>
                      <div class="slide">
                        <img src="img/allMenu/BoneMarrow_HotMeal.jpg" alt="">
                      </div>
                      <div class="slide">
                        <img src="img/allMenu/BuffaloWings_silog.jpg" alt="">
                      </div>
                      <div class="slide">
                        <img src="img/allMenu/Burger_Steak.jpg" alt="">
                      </div>
                      <div class="slide">
                        <img src="img/allMenu/Chicken_sisig.jpg" alt="">
                      </div>
                      <div class="slide">
                        <img src="img/allMenu/long_silog.jpg" alt="">
                      </div>
                      <div class="slide">
                        <img src="img/allMenu/sizzling_wings.jpg" alt="">
                      </div>
                      <div class="slide">
                        <img src="img/allMenu/Tapsilog.jpg" alt="">
                      </div>
                      <div class="slide">
                        <img src="img/allMenu/TBone_Steak.jpg" alt="">
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
                <div class="parentContent_home">
                <!--Content Area-->
                <div class="content1">
                    <center><h1> NEWS </h1></center>
                    <br>
                    <div class="Headline">
                    <div>
                    <h3>The famous T-bone Steak </h3>
                    <h5>Available on Putik Branch</h5>
                    </div>
                    <a href="top_meals.php" class="remove"><div class="moretips">Check Info
                      <span class="tips">Click This for <br> more info </span></a>
                  </div>
                    </div>
                    <br>
                    <center><img src="img/menu_images/TBone_Steak.jpg" alt=""></center>
                    <p>The famous T-bone Steak is back! 
                      Make you day a sizzling one, once you eat the all time favorite T-Bone Steak.

                    </p>
                        
                </div>
                <div class="content2">
                    <center><h1> FEATURED MEALS </h1> </center>
                    <br>
                    <div class="mealList">
                        <div>
                        <h4>Beef Pares</h4>
                        <h6>Beef Pares topped with Corn and Egg paired with Fried Garlic Rice.</h6>
                        <br>
                        <a href="top_meals.php"></a>
                        <a href="top_meals.php" class="remove"><div class="moretips">Check Info
                          <span class="tips">Click This for <br> more info </span></a>
                        </div>
                        </a>
                        </div>
            <div class="image"><img src="img/hot_meals/beef_pares.jpg"></div>
                    </div>
                    <br>
                    <div class="mealList">
                        <div>
                        <h4>Tapsilog</h4>
                        <h6>Beef tapa with Sunny-Side up egg and Fried Garlic Rice.</h6>
                        <br>
                        <a href="top_meals.php" class="remove"><div class="moretips">Check Info
                          <span class="tips">Click This for <br> more info </span></a>
                          </div>
                        </div>
                        </a>
            <div class="image"><img src="img/hot_meals/beef_tapa.jpg"></div>
                    </div>                    
                    <br>
                    <div class="mealList">
                        <div>
                        <h4>Beef Pares with Bone Marrow</h4>
                        <h6>Bone Marron Atop Beef sisig with Fried rice, In a Sizzling Plate.</h6>
                        <br>
                        <a href="top_meals.php" class="remove"><div class="moretips">Check Info
                          <span class="tips">Click This for <br> more info </span></a>
                        </div>
                        </div>
            <div class="image"><img src="img/hot_meals/BeefPares_with_BoneMarrow.jpg"></div>
                    </div>                    
                    <br>
                    <div class="mealList">
                        <div>
                        <h4>Buffalo Wings</h4>
                        <h6>Chicken Wings with Fried Sunny-Side up egg, sizzling with Gravy.</h6>
                        <br>
                        <a href="top_meals.php" class="remove"><div class="moretips">Check Info
                          <span class="tips">Click This for <br> more info </span></a>
                        </div>
                        </div>
            <div class="image"><img src="img/hot_meals/BuffaloWings_silog.jpg"></div>
                    </div>                    
                    <br>
                    <div class="mealList">
                        <div>
                        <h4>Burger Steak</h4>
                        <h6>Steamy Burger patty with Fried Garlic rice and Sizzling Gravy.</h6>
                        <br>
                        <a href="top_meals.php" class="remove"><div class="moretips">Check Info
                          <span class="tips">Click This for <br> more info </span></a>
                        </div>
                        </div>
            <div class="image"><img src="img/hot_meals/Burger_Steak.jpg"></div>
            </div>
                    
            <!--For Span Image when click-->
            <div class="open-image">
                <span>&times;</span>
                <img src="img/hot_meals/beef_pares.jpg" alt="beef pares"></img>
            </div>
                    
                </div>
                </div>
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
		if(isset($_SESSION['admin_sid']))
		{
			header("location:admin-page.php");		
		}
		else{
			header("location:login.php");
		}
	}
?>
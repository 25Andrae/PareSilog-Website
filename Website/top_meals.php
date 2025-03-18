<?php
include 'includes/connect.php';

if(isset($_SESSION['user_id']))
{
// include 'includes/wallet.php';
?>
<?php include "db-IMPORTANT.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets.css">
    <link rel="stylesheet" type="text/css" href="styles2.css">
    <link rel="stylesheet" type="text/css" href="styles3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script rel="javascript" src="script.js" defer> </script>
    <link rel="icon" href="img/logo.jpg" sizes="32x32">
    <title>Top meal</title>
</head>
<body>
    <div class="parent">
        
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
                        <li class="und"><a href="top_meals.php" id="home"> TOP MEALS </a></li>
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

        <!--New Section For addional content-->
        <section class="Additional_Content">
            <div  class="root">
            <center><h1 class="subtitle">TOP MEALS</h1></center>
            <div class="parentContent_topmeal">
            <!--Content Area-->
            <div class="content1">
                <center><h1> PARES </h1></center>
                <br>
                <div class="mealList">
                    <div>
                    <h4>Beef Pares</h4>
                    <p class="price">P65.00</p>
                    <h6>Beef Pares topped with Corn and Egg paired with Fried Garlic Rice.</h6>
                    <br>
                    <a href="delivery.php" class="remove"><div class="moretips">Order Now!
                    <span class="tips">Click This to Order Beef Pares </span></a>
                    </div>
                    </div>
        <div class="image"><img src="img/hot_meals/beef_pares.jpg"></div>
                </div>
                <br>
                <div class="mealList">
                    <div>
                    <h4>Beef Pares with Bone Marrow</h4>
                    <p class="price">P120.00</p>
                    <h6>Torched-top Bone marrow, springkled with Beef Pares Meat.</h6>
                    <br>
                    <a href="delivery.php" class="remove"><div class="moretips">Order Now!
                        <span class="tips">Click This to Order Beef Pares with Bone Marrow </span></a>
                    </div>
                    </div>
        <div class="image"><img src="img/hot_meals/BeefPares_with_BoneMarrow.jpg"></div>
                </div>                    
                <br>
               
                    
            </div>
            <div class="content2">
                <center><h1> SILOG </h1> </center>
                <br>
                <div class="mealList">
                    <div>
                    <h4>Long Silog</h4>
                    <p class="price">P60.00</p>
                    <h6>Longanisa with Sunny-Side up egg and Fried Garlic Rice.</h6>
                    <br>
                    <a href="delivery.php" class="remove"><div class="moretips">Order Now!
                        <span class="tips">Click This to Order Long Silog </span></a>
                        </div>
                    </div>
        <div class="image"><img src="img/hot_meals/long_silog.jpg"></div>
                </div>
                <br>
                <div class="mealList">
                    <div>
                    <h4>Tapsilog</h4>
                    <p class="price">P75.00</p>
                    <h6>Beef tapa with Sunny-Side up egg and Fried Garlic Rice.</h6>
                    <br>
                    <a href="delivery.php" class="remove"><div class="moretips">Order Now!
                        <span class="tips">Click This to Order Tapsilog</span></a>
                        </div>
                    </div>
        <div class="image"><img src="img/hot_meals/beef_tapa.jpg"></div>
                </div>                    
                <br>
                <div class="mealList">
                    <div>
                    <h4>Bangsilog</h4>
                    <p class="price">P75.00</p>
                    <h6>Fried Bangus with Sunny-Side up egg and Fried Garlic Rice.</h6>
                    <br>
                    <a href="delivery.php" class="remove"><div class="moretips">Order Now!
                        <span class="tips">Click This to Order Bangsilog</span></a>
                        </div>
                    </div>
        <div class="image"><img src="img/hot_meals/bangSilog.png"></div>
                </div>                    
                <br>
                <div class="mealList">
                    <div>
                    <h4>Cornsilog</h4>
                    <p class="price">P60.00</p>
                    <h6>Cornbeef with Sunny-Side up egg and Freshly cooked Plain Rice.</h6>
                    <br>
                    <a href="delivery.php" class="remove"><div class="moretips">Order Now!
                        <span class="tips">Click This to Order Cornsilog</span></a>
                        </div>
                    </div>
        <div class="image"><img src="img/hot_meals/corn_silog.jpg"></div>
                </div>                    
                <br>
                <div class="mealList">
                    <div>
                    <h4>Buffalo Silog</h4>
                    <p class="price">P65.00 - P95.00 </p>
                    <h6>Buffalo wings with Sunny-Side up egg and Fried Gralic Rice.</h6>
                    <br>
                    <a href="delivery.php" class="remove"><div class="moretips">Order Now!
                        <span class="tips">Click This to Order Buffalo Silog </span></a>
                        </div>
                    </div>
        <div class="image"><img src="img/hot_meals/BuffaloWings_silog.jpg"></div>
                </div>

        <div class="open-image">
            <span>&times;</span>
            <img src="img/hot_meals/beef_pares.jpg" alt="beef pares"></img>
        </div>
                
        </div>
            <div class="content3">
                <center><h1> SIZZLING </h1> </center>
                <br>
                <div class="mealList">
                    <div>
                    <h4>Beef Sisig</h4>
                    <p class="price">P95.00</p>
                    <h6>Sisig, beef style on a sizzling plate side with Fried rice and topped with egg and mayo.</h6>
                    <br>
                    <a href="delivery.php" class="remove"><div class="moretips">Order Now!
                        <span class="tips">Click This to Order Beef Sisig </span></a>
                        </div>
                    </div>
        <div class="image"><img src="img/hot_meals/Chicken_sisig.jpg"></div>
                </div>
                <br>
                <div class="mealList">
                    <div>
                    <h4>Sizzling Wings</h4>
                    <p class="price">P95.00</p>
                    <h6>Chicken Wings with Fried Sunny-Side up egg, sizzling with Gravy.</h6>
                    <br>
                    <a href="delivery.php" class="remove"><div class="moretips">Order Now!
                        <span class="tips">Click This to Order Sizzling Wings </span></a>
                        </div>
                    </div>
        <div class="image"><img src="img/hot_meals/beef_tapa.jpg"></div>
                </div>                    
                <br>
                <div class="mealList">
                    <div>
                    <h4>Burger Steak</h4>
                    <p class="price">P75.00</p>
                    <h6>Steamy Burger patty with Fried Garlic rice and Sizzling Gravy.</h6>
                    <br>
                    <a href="delivery.php" class="remove"><div class="moretips">Order Now!
                        <span class="tips">Click This to Order Burger Steak </span></a>
                        </div>
                    </div>
        <div class="image"><img src="img/hot_meals/Burger_Steak.jpg"></div>
                </div>                    
                <br>
                <div class="mealList">
                    <div>
                    <h4>Bone Marrow on Beef Sisig</h4>
                    <p class="price">P150.00</p>
                    <h6>Bone Marron Atop Beef sisig with Fried rice, In a Sizzling Plate.</h6>
                    <br>
                    <a href="delivery.php" class="remove"><div class="moretips">Order Now!
                        <span class="tips" id="tipsy">Click This to Order Bone Marrow on Beef Sisig </span></a>
                        </div>
                    </div>
        <div class="image"><img src="img/hot_meals/BoneMarrow_HotMeal.jpg"></div>
                </div>                    <br>
       
            </div>
        </div>
        </div>
        </section>
        <footer>
            <a href=""> <p>ABOUT</p></a>
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
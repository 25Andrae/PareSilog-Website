<?php
include 'includes/connect.php';
// include 'includes/wallet.php';
$total = 0;
if($_SESSION['customer_sid']==session_id())
{
        $continue=1;
}
$user_id=$_SESSION['user_id'];
$result = mysqli_query($con, "SELECT * FROM users where id = $user_id");
while($row = mysqli_fetch_array($result)){
	$name = $row['name'];
	$contact = $row['contact'];
}

if($continue){
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Provide Order Details</title>

  <!-- Favicons-->
  <link rel="icon" href="img/logo.jpg" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">

  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="index.php" class="brand-logo darken-1"><img src="img/logo.jpg"  alt="Logo" width="80px" height="80px"></a></h1></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details  light-blue darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="images/userav.png" alt="" class="circle responsive-img valign profile-image">
                </div>
				<div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="routers/logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="col col s8 m8 l8">
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $name;?> <i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal"><?php echo $role;?></p>
                </div>
            </div>
            </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-light-blue"><i class="mdi-editor-insert-invitation"></i> Orders</a>
                            <div class="collapsible-body">
                                <ul>
								<li><a href="orders.php">All Orders</a>
                                </li>
								<?php
									$sql = mysqli_query($con, "SELECT DISTINCT status FROM orders WHERE customer_id = $user_id;");
									while($row = mysqli_fetch_array($sql)){
                                    echo '<li><a href="orders.php?status='.$row['status'].'">'.$row['status'].'</a>
                                    </li>';
									}
									?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>				
            <li class="bold"><a href="details.php" class="waves-effect waves-light-blue"><i class="mdi-social-person"></i> Edit Details</a>
            </li>				
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only  light-blue"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Provide Order Details</h5>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <p class="caption">Receipt</p>
          <div class="divider"></div>
          <!--editableTable-->
<div id="work-collections" class="seaction">
<div class="row">
<div>
<ul id="issues-collection" class="collection">
<?php
    echo '<li class="collection-item avatar">
        <i class="mdi-content-content-paste light-blue circle"></i>
        <p><strong>Name:</strong>'.$name.'</p>
		<p><strong>Contact Number:</strong> '.$contact.'</p>
		<p><strong>Address:</strong> '.htmlspecialchars($_POST['address']).'</p>	
		<p><strong>Payment Type:</strong> '.$_POST['payment_type'].'</p>			
        <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>';
		
	foreach ($_POST as $key => $value)
	{
		if(is_numeric($key)){		
		$result = mysqli_query($con, "SELECT * FROM items WHERE id = $key");
		while($row = mysqli_fetch_array($result))
		{
			$price = $row['price'];
			$item_name = $row['name'];
			$item_id = $row['id'];
		}
			$price = $value*$price;
			    echo '<li class="collection-item">
        <div class="row">
            <div class="col s7">
                <p class="collections-title"><strong>#'.$item_id.' </strong>'.$item_name.'</p>
            </div>
            <div class="col s2">
                <span>'.$value.' (Quantity)</span>
            </div>
            <div class="col s3">
                <span>₱'.$price.'</span>
            </div>
        </div>
    </li>';
		$total = $total + $price;
	}
	}
    echo '<li class="collection-item">
        <div class="row">
            <div class="col s7">
                <p class="collections-title"> Total</p>
            </div>
            <div class="col s2">
                <span>&nbsp;</span>
            </div>
            <div class="col s3">
                <span><strong>₱'.$total.'</strong></span>
            </div>
        </div>
    </li>';
	if(!empty($_POST['description']))
		echo '<li class="collection-item avatar"><p><strong>Note: </strong>'.htmlspecialchars($_POST['description']).'</p></li>';
?>
<form action="router/order-router.php" method="post">
<?php
foreach ($_POST as $key => $value)
{
	if(is_numeric($key)){
		echo '<input type="hidden" name="'.$key.'" value="'.$value.'">';
	}
}
?>
<input type="hidden" name="payment_type" value="<?php echo $_POST['payment_type'];?>">
<input type="hidden" name="address" value="<?php echo htmlspecialchars($_POST['address']);?>">
<?php if (isset($_POST['description'])) { echo'<input type="hidden" name="description" value="'.htmlspecialchars($_POST['description']).'">';}?>
<?php if($_POST['payment_type'] == 'Wallet') echo '<input type="hidden" name="balance" value="<?php echo ($balance-$total);?>">'; ?>
<input type="hidden" name="total" value="<?php echo $total;?>">
<div class="input-field col s12">
<button class="btn  light-blue waves-effect waves-light right" type="submit" name="action" <?php if($_POST['payment_type'] == 'Wallet') {if ($balance-$total < 0) {echo 'disabled'; }}?>>Confirm Order
<i class="mdi-content-send right"></i>
</button>
</div>
</form>
</ul>


                </div>
				</div>
                </div>
              </div>
            </div>
        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->
    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->




    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--angularjs-->
    <script type="text/javascript" src="js/plugins/angular.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script> 
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
</body>

</html>
<?php
	}
	else
	{
		if($_SESSION['admin_sid']==session_id())
		{
			header("location:admin-page.php");		
		}
		else{
			header("location:login.php");
		}
	}
?>

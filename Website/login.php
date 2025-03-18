<?php  
session_start(); 
if(isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid']))
{
	header("location:index.php");
}
else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/logo.jpg" sizes="32x32">
    <link rel="stylesheet" type="text/css" href="stylesheets.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles2.css">
    <script rel="javascript" src="script.js" defer> </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
        <div class="parent">
             <!--Navigation-->
            <span class="head">
              <nav class="navigation" id="main-nav">
                  <a class="logoHover" href="index.php"><img src="img/logo.jpg"  alt="Logo"></a>
              </nav>
            </span>
          <!--Navigation-->
            <section class="login">
                <div class="parentLog">
                    <div class="anak1">
                        <div>
                        <form method ="post" action="router/router.php">
                            <label>USER NAME <span aria-hidden="true" class="required">*</span><br></label>
                            <input name="username" type="text" id = "input" ><br>
                            <label>PASSWORD <span aria-hidden="true" class="required">*</span><br></label>
                            <input name="password" type="password" id = "input" ><br>
                            <br>
                            <button class="logIn" type="submit">LOGIN</button>
                            <div class="remember">Need an account? <a href="register.php"><p>Create an Account</p></a></div><br>
                            
                            <!-- <div class="wrongers">
                            <?php if($_SERVER['REQUEST_METHOD'] == "POST")
                                    {
                                //something was posted
                                $user_name = $_POST['username'];
                                $password = $_POST['password'];

                                if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
                                {

                                    //read from database
                                    $query = "SELECT * from users where username = '$user_name' limit 1";
                                    $result = mysqli_query($con, $query);

                                    if($result)
                                    {
                                        if($result && mysqli_num_rows($result) > 0)
                                        {

                                            $user_data = mysqli_fetch_assoc($result);
                                            
                                            if($user_data['password'] === $password)
                                            {

                                                $_SESSION['id'] = $user_data['id'];
                                                header("Location: index.php");
                                                die;
                                            }
                                        }
                                    }
                                    
                                    echo "Wrong Username or Password!";
                                }else
                                {
                                    echo "Wrong Username or Password!";
                                }
                            }
                            ?>
                            </div> -->
                        </form>
                        </div>
                        <div>
                            <center><img src="img/mascott.png" width="300px" height="260px"></center>
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
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
      
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      
      <div class="forms-container">
       
        <div class="signin-signup">

       
        
          <form action="check.php" method="POST" class="signin-form">

            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required/>
            </div>
            <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>
            <input type="submit" value="Signin" class="btn solid" />
           
          </form>

         
          <form action="insert.php" method="POST" class="signup-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="FirstName" name="firstname" required />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="LastName" name="lastname" required />
            </div>
            
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" require />
            </div>

            <div class="input-field">
                <i class="fas fa-home"></i>
                <input type="text" placeholder="Address" name="address" required/>
              </div>
              <div class="input-field">
                <i class="fas fa-code"></i>
                <input type="text" placeholder="Pincode" name="pincode" required/>
              </div>
              <div class="input-field">
                <i class="fas fa-phone"></i>
                <input type="text" placeholder="Phone Number" name="phno" required/>
              </div>
              <div class="input-field">
                <i class="fas fa-book"></i>
                <input type="text" placeholder="UserName" name="username" required />
              </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required/>
            </div>
            <input type="submit" class="btn" value="Signup" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        
    
      
        <div class="panel left-panel">
          <div class="content">
            <h3>New here?</h3>
            <p>
              Lets get you set up. It should only take you a minute to connect..
            </p>
            <button class="btn transparent" id="signup-btn">
              Sign up
            </button>
          </div>


          <form class="green-box"  method="get" action="home.php">
            <button type="submit" class="btn1"> <i class="fas fa-home" style="font-size:40px;color:#e84393;"></i> </button>
      </form>




       
          <img src="images\1.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Already have a  account?</h3>
            <p>
                Lets get you started..
            </p>
            <button class="btn transparent" id="signin-btn">
              Sign in
            </button>
            

          </div>
          <img src="images\2.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="sw.js"></script>
  </body>
</html>

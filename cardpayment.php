<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <script
          src="https://kit.fontawesome.com/64d58efce2.js"
          crossorigin="anonymous"
        ></script>
        <style>
               .curve svg {
  display: block;
}
.curve {
  background: #B53471;
  color: #FFF;
  text-align: center;
}
.curve h1 {
  font-size: 40px;
}
.curve p {
  font-size: 1rem;

}
.btn1 {
  width: 150px;
  background-color:  #fff;
  border: none;
  outline: none;
  height: 49px;
  border-radius: 49px;
  color: #B53471 #fff;
  text-transform: uppercase;
  font-weight: 600;
  margin: 10px 0;
  cursor: pointer;
  transition: 0.5s;
}
        </style>

        <title>Orderplaced</title>
        
     
</head>
<body>
  
<div class="curve">
<br></br>
  <h1>Card Payment</h1>
  <form action="orderplaced.php" id="payment" >
              <div class="input-field">
                  <i class="fas fa-user"></i>
                <input type="text" placeholder="Card Holder" required/>
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                <input type="text" placeholder="Card Number" required/>
            </div>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="CVV" required/>
            </div>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Expiry Date" required/>
              </div>
              <input type="submit" value="Pay" class="btn1 solid">
            </form>
  
            
              <svg 
             viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,32L120,37.3C240,43,480,53,720,90.7C960,128,1200,192,1320,224L1440,256L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">

            </path></svg>
          </body>
</html>
          

   
        
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <style>
                        body {
                margin: 0;
                background: #B53471;
                }
                h1 {
                  font-size: 60px;
                }
                div {
                  height: 450px;
                  border-radius: 100% / 0 0 30% 30%;
                  background: white;
                }

                footer {
                  height: 100px;
                }
                .btn {
                  width: 150px;
                  background-color: #B53471;
                  border: none;
                  outline: none;
                  height: 49px;
                  border-radius: 49px;
                  color: #fff;
                  text-transform: uppercase;
                    font-weight: 600;
                  margin: 10px 0;
                    cursor: pointer;
                    transition: 0.5s;
                    }
                    .c {
                      position: relative;
                      text-align: center;
                  }
        </style>

        <title>Orderplaced</title>
      </head>
</head>
<body class="c">
   
<div>
  <p>
  <h1 >YOUR ORDER HAS BEEN PLACED!</h1>
                <h2>Thank you for your Order</h2>
                
                    <form method="get" action="menu.php">
                        <button type="submit" class="btn">ORDER AGAIN</button>
                    </form>
                    <form action="logout.php" method="post">
                <button type="submit" class="btn">LOG OUT</button>
            </form>
              
  </p>
</div>
<footer>
  
</footer>
        
</body>
</html>
          

   
        
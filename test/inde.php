<?php
$con = mysqli_connect("localhost","root","","cservice");
$query = "select * from opportunities";
$result=mysqli_query($con,$query);


     
?>


<!DOCTYPE html>
    <html>
    <head>
        <title>Aggie Community Service Finder</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" type="text/css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    
    <!-- the body is where the layout of the webpage is set -->
    <body>
        <!-- header tag that conains the navigation bar -->
        <style>
            th {
             padding: 20px;
            }
        </style>
        <header>
            <table>
             <tr>
    <th>Hours: 16</th>
    
  </tr>
  <tr>
    <td><strong>Points: 37</strong></td>
             </tr>
            </table>
            <h1 class="logo">Aggie Community Service Finder</h1>
            <input type="checkbox" id="nav-toggle" class="nav-toggle">
            <nav>
              <ul>
                
                <li><a href="#popup2">Sign Up</a></li>
                <li><a href="prizes.html">Prizes</a></li>
                <li><a href="inde.php">Opportunities</a></li>
                <li><a href="service.html">Service Uploads</a></li>
              </ul>
            </nav>
            <label for="nav-toggle" class="nav-toggle-label">
              <span></span>
            </label>
        </header>
        <!-- Slider tag that is the mark up for the image carousel in the background -->

        <br>
       
        <!-- Division that contains the welcome message-->    
        <br>
        <br>
        <br>
        <div class="title">
    
              Volunteers
              <br>
              Please Enter Service ID into Redeem
        </div>
        <div class="prizes">
        <br>
        <br>   
        
        
      
        </div>
        
        <!-- Login Popup that contains username and password textfields and a submit button-->
        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Login</h2>
                <a class="close" href='#'>&times;</a>
                <div class="content">
                    <form action="loginSuccessful" method="post">
                        User Name <input type="text" name="userName"/><br><br>
                        Password <input type="password" name="password"/><br><br>
                        <input class="Sbutton" type="submit" value="login"/>
                    </form>
                </div>
            </div>
        </div>
        <!-- Sign Up Popup that contains username and password textfields and a submit button-->
        <div id="popup2" class="overlay">
            <div class="popup">
                <h2>Sign Up</h2>
                <a class="close" href='#'>&times;</a>
                <div class="content">
                    <form action="registerSuccessful" method="post">
                        New User Name <input type="text" name="userName"/><br><br>
                        New Password <input type="password" name="password"/><br><br>
                        <input class="Sbutton" type="submit" value="sign up"/>
                    </form>
                </div>
            </div>
        </div>
   
  
    
      
     
   




        
        <table align="center" style="width:600px" >
            <tr>
                <th>ID</th>
                <th>CompanyName</th>
                <th>ServiceDescription</th>
                <th>Location</th>
                <th>Hours</th>
                <th>Points Value</th>
            </tr>
            <?php
            while($rows= mysqli_fetch_assoc($result))
            {
             ?>
                <tr>
                    <td><?php echo $rows['ID']?></td>
                    <td><?php echo $rows['companyname']?></td>
                    <td><?php echo $rows['servicedesc']?></td>
                    <td><?php echo $rows['location']?></td>
                    <td><?php echo $rows['hours']?></td>
                    <td><?php echo $rows['points']?></td>




          
              </tr>
            <?php    
            }
           ?>
        </table>
        <br>
        <br>
        
         <form action="php_search_in_mysql_database.php" method="post">
        <strong>Service Id:</strong> <input type="text" name="Enter Service Id">
        <input type = "button" value = "Submit">
         </form>
        
         
         
         
     </body>   
        
        
        
        
    </html>
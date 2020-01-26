<?php
  
  
 
  $con = mysqli_connect("localhost","root","","cservice");
  
  if(!$con){
    echo "Not Connected to Server";
  }
  
  if(!mysqli_select_db($con,"cservice")){
    echo "Database not selected";
  }
  
  $comp= $_POST["name"];
  $service= $_POST["service"];
 
  $location= $_POST["location"];
  $hours= $_POST["hours"];
  $points = $hours * 1.5 + 1;
  
  $sql = "INSERT INTO opportunities (companyname, servicedesc, location, hours, points) VALUES ('$comp','$service','$location','$hours','$points')";
  
  if(!mysqli_query($con,$sql)){
    echo "Not Inserted";
  
  } else{
    echo "Inserted";
  }
  
  header("refresh:2; url=service.html");
  
  
 
?>
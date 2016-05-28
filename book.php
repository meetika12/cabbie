<?php
include('session.php');
?>

<!DOCTYPE html>
<html>
  <head>
     <style type="text/css">
       #my_map
       {
        height: 600px;
        width: 600px;
       }
     </style>
  </head>
  <body>
    <link rel="stylesheet" href="registerstyle.css">
   <h2> Registration successful! Book your car now</h2>
    <div class="logout"><a href="logout.php">Logout</a></div>
    <form action="booking_check.php" method="post">
      
      <p>
      <div> <label> Select area of pickup </label>
        <select name="pickup" class="txt"> 
          <option value="bhawarkua">bhawarkua</option>
          <option value="manik bagh">manik bagh</option>
          <option value="janjeerwala">janjeerwala</option>
          <option value="vijay nagar">vijaynagar</option>
          <option value="sapna sangeeta">Sapna sangeeta</option>
          <option value="usha nagar">usha nagar</option>
          <option value="airport road">airport road</option>
        </select> </div>
      <div><label>select destination</label>  <input type="text" id="meetika" name="destination"></div>
       <div> <input type="submit" value="Book" class="btn"></div>
      </p>
    </form>
   
    <div id="my_map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/geocomplete/1.7.0/jquery.geocomplete.js"></script>
    <script>
      $('#meetika').geocomplete({
        map: "#my_map"
      });
    </script>
  </body>
</html>
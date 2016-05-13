<?php
include('session.php');
?>
Registration successful! Book your car now
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
    <form  method="post">
      <p>
        <select name="select area of pickup">
          <option value="bhawarkua">bhawarkua</option>
          <option value="manik bagh">manik bagh</option>
          <option value="janjeerwala">janjeerwala</option>
          <option value="vijay nagar">vijaynagar</option>
          <option value="sapna sangeeta">Sapna sangeeta</option>
          <option value="usha nagar">usha nagar</option>
          <option value="airport road">airport road</option>
        </select> 
      </p>
    </form>
    <input type="text" id="meetika">
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
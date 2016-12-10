<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  </head>
    <body> 
      <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li  class="active"><a href="#">Home</a></li>
        <li><a href="product.html">Products</a></li>
        <li><a href="Deals.html">Deals</a></li>
        <li><a href="#">Staff</a></li>
        <li><a href="Contact.html">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
    <h2>Feedback</h2> 
    <div class="panel panel-default"> 
    <table class="table">
      <thead>
      <tr> 
        <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Text</th>
      </tr>
    </thead>
      
      <style>
         body{
      background-image: url("/WebAppCA3/back.png");  
    }
      
        h2{
          color:white;
          
        }
      
      </style>

    <tbody>
      <?php
        $xml=simplexml_load_file("./data/feedback.xml") or die("ERROR: Cannot load feedback.xml file.");
          $n= 1; // simple counter
          foreach($xml->children() as $feedback) {
           echo "<tr>"; // beginning of row
            echo "<th scope=\"row\">" . $n . "</th>";

             foreach($feedback->children() as $child){
            echo "<td>" . $child . "</td>";
            }
            echo "</tr>"; // end of row
            $n++;
          }
  
  
     ?>
    </tbody> 
    </table> 
    </div>
    </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form Completion !!</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
        .bg-1 { 
          background-color: #39aaeb8a; /* Green */
          color: #ffffff;
          margin-bottom: 30px ;
        }
        .bg-2 { 
            background-color: #474e5d; /* Dark Blue */
            color: #ffffff;
            margin-bottom: 30px ;
        }
        footer { 
          background-color: #2f2f2f; /* Black Gray */
          color: #fff;
          position: relative ;
          bottom: 0px ;
          width: 100% ;
        }
        </style>
    </head>
    <body>
<?php
$conn = new mysqli('localhost' , 'id4263838_abstark2' , 'mark56inbound' , 'id4263838_bunkdata') ;
if($conn->connect_error)    echo "Error!!" ;

$name = $_GET['student-name'] ;
$roll = $_GET['roll-no'] ;
$supp = $_GET['support'] ;
$limit = $_GET['limit'] ;
$sugg = $_GET['suggest'] ;

$sugg = $conn->real_escape_string($sugg) ;
$query = "INSERT INTO bunk VALUES ('$name' ,'$roll' , '$supp' , '$limit' , '$sugg' , NULL)" ;
$conn->query($query) ;

$conn->close() ;

?>
            <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="http://a1astuff.000webhostapp.com">A1A Stuff</a>
                      </div>
                      <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                          <li class="active"><a href="#">Home</a></li>
                          <li><a href="#">Messages</a></li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                          <div class="form-group input-group">
                            <input type="text" class="form-control" placeholder="Search..">
                            <span class="input-group-btn">
                              <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                              </button>
                            </span>        
                          </div>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
                        </ul>
                      </div>
                    </div>
                  </nav>
                  <div class="container bg-1 text-center">
                        <h3 class="margin">A1A Post Winter Vacation Bunk</h3>
                        <img src="images/success.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
                        <h3>Review via form</h3>
                  </div>
        <div class="container bg-2 text-center">
            <h2>Thankyou For Filling The Form !!</h2>
        </div>

        <footer class="container-fluid bg-4 text-center">
          <p>Site is under development</p> 
        </footer>
        <script src="js/effect.js"></script>
    </body>
</html>
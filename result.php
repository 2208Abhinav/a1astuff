<?php
    if(isset($_COOKIE['username'])) header("Location: http://a1astuff.000webhostapp.com/result2.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>A1A post winter break bunk</title>
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
        .bg-dad{ 
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
        #enter{
            margin-bottom : 10px ;
        }
        </style>
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
                        <h2>Review Data</h2>
                        <h3>Result and Discussion</h3>
                </div>
                <div class="container bg-dad" height="300px">
                <form action="result2.php" method="post">
                <div class="form-group">
                  <label for="name">Enter Your Name (real one please) :</label>
                  <input type="text" class="form-control" name="student-name" required="required" id="name">
                </div>  
                <button type="submit" class="btn btn-default" id="enter">Enter Discussion</button>         
              </form>
            </div>

        <footer class="container-fluid bg-4 text-center" id="bottom">
            <p>Testing Credit : FAHAD , SHOAIB , SAARTHAK and SANCHIT</p> 
        </footer>
    </body>
</html>
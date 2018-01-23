<?php
        if(!isset($_COOKIE['username']))
        {
            if(isset($_POST['student-name']))
            {
                setcookie('username' , $_POST['student-name'] , time() + 60*60*24*7 , '/') ;
                echo "<meta http-equiv='refresh' content='0'>" ;
            }
            else header("Location: http://a1astuff.000webhostapp.com/result.php"); 
        }
        if(isset($_COOKIE['username'])) $username = $_COOKIE['username'] ;
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
        #brain{
            margin-bottom : 10px ;
        }
        .well-sm{
            margin-top : 10px ;
        }
        .btn-default{
            margin-bottom : 10px ;
        }
        .refresh{
            margin-bottom : 100px ;
        }
        .name{
            text-decoration: underline ;
        }
        .bg-o{
            background-color : rgba(160, 255, 97, 0.733);
            margin-bottom : 10px ;
        }
        .bg-e{
            background-color : rgba(86, 189, 248, 0.733);
            margin-bottom : 10px ;
        }
        .bg-1 { 
          background-color: rgba(50, 140, 224, 0.95) ;
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
        #comment{
            position : fixed ;
            left : 15px ;
            bottom : 68px ;
        }
        #bt-refresh{
            position : fixed ;
            right : 15px ;
            bottom : 68px ;
        }
        .view-main{
            margin-bottom : 65px ;
        }
        #greet{
            color : rgba(77, 209, 95, 0.99)  ;
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
                  <?php echo "<div class=\"container text-center\" id=\"greet\"><h3>Welcome " . $username . "!!</h4></div>" ; ?>
                  <div class="container bg-1 text-center">
                        <h3 class="margin">A1A Post Winter Vacation Bunk</h3>
                        <h3>Result and Discussion</h3>
                    <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="images/support.jpg" target="_blank">
          <img src="images/support.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <h4>SUPPORT</h4>
            <p>86.9% Say YES</p>
            <p>13.1% Say NO</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="images/dates.jpg" target="_blank">
          <img src="images/dates.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <h4>DATES DISTRIBUTION</h4>
            <p>28<sup>th</sup> January : 13%</p>
            <p>29<sup>th</sup> January : 43.4%</p>
            <p>30<sup>th</sup> January : 8.6%</p>
            <p>31<sup>st</sup> January : 13%</p>
            <p>1<sup>st</sup> February : 11%</p>
            <p>Less than above : 11%</p>
          </div>
        </a>
      </div>
    </div>
  </div>
                  </div>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" id="comment">Comment</button>
            <div class="container-fluid">
            <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-sm">
            <div class="modal-content">
            <div class="modal-body">
            <form action="http://a1astuff.000webhostapp.com/result2.php" method="post">
            <div class="form-group">
            <label for="comment">Comment :</label>
            <textarea class="form-control" rows="5" name="comment"></textarea>
            </div>  
            <button type="submit" class="btn btn-info">Comment</button>         
            </form>
            </div>
            </div>
            </div>
            </div>
            </div>
        <div class="container view-main">
            <?php 
             $conn = new mysqli(/*confidential*/) ;
             $conn->set_charset('utf8mb4') ;
            if(($username)&&(isset($_POST['comment'])))
             {  
                $name = $username ;
                $comment = $_POST['comment'] ;
                $comment = $conn->real_escape_string($comment) ;

                $query = "INSERT INTO views VALUES (NULL , '$name' , '$comment')" ;

                $result2 = $conn->query($query) ;
                $query = NULL ;
             }

             $query = "SELECT*FROM views ORDER BY id DESC" ;
             $result2 = $conn->query($query) ;

             $rows = $result2->num_rows ;

             for($j = 0 ; $j < $rows ; ++$j)
             {
                 $result2->data_seek($j) ;
                 $row = $result2->fetch_array(MYSQLI_NUM) ;

                 $index = $row[0] ;
                 $name = $row[1] ;
                 $comment = $row[2] ;
                 if($index%2 == 0)
                 {
                     echo "<div class=\"container bg-e\">" ;
                 }
                 else if($index%2 != 0)
                 {
                     echo "<div class=\"container bg-o\">" ;
                 }
                 echo "<div class=\"well well-sm\">" . $name . "</div>" ;
                 echo "<textarea class=\"form-control\" rows=\"5\" content=\"comment\" id=\"brain\">" . $comment . "</textarea>" ;
                 echo "</div>" ;
             }

             $result2->close() ;
             $conn->close() ;
             ?>
        </div>
        <a href="http://a1astuff.000webhostapp.com/result2.php"><button type="button" class="btn btn-danger" id="bt-refresh">REFRESH</button></a>

        <footer class="container-fluid bg-4 text-center" id="bottom">
            <p>Testing Credit : FAHAD , SHOAIB , SAARTHAK and SANCHIT</p> 
        </footer>
    </body>
</html>

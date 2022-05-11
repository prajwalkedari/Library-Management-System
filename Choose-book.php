<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login In</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <style>
         body, html {
         height: 100vh;
         width: 100%;
         }
         /* Start out */
         .domain-search {
         margin: 0;
         padding: 105px 0;
         }
         .domain-search .form-title {
         margin-top: 0;
         margin-bottom: 2px;
         color: #fff;
         font-family: "Poppins", sans-serif;
         font-weight: 100
         }
         .domain-search p {
         color: #B0E7FF;
         margin: 0
         }
         .domain-search .input-group {
         -webkit-box-shadow: 0px 4px 18px 0px rgba(0, 0, 0, 0.1);
         box-shadow: 0px 4px 18px 0px rgba(0, 0, 0, 0.1)
         }
         .domain-search .input-group-addon {
         border: none
         }
         .domain-search .form-title strong {
         display: block
         }
         .domain-search .form-control {
         height: 60px;
         border-radius: 0;
         border: none
         }
         .domain-search .form-control:focus {
         box-shadow: 0px 0px 0px 0px #ffffff !important
         }
         .input-group .input-group-addon [type="submit"],
         .input-group .input-group-addon button {
         border: none;
         border-radius: 0
         }
         .domain-search .btn {
         padding: 0 54px;
         line-height: 60px
         }
         .btn-primary {
         padding: 0 28px;
         line-height: 54px;
         background: #ff6726;
         color: #fff
         }
         .btn-primary:hover {
         color: #fff;
         }
         .domain-search .input-group+p {
         color: #fff;
         font-size: 15px;
         font-family: "Poppins", sans-serif;
         font-weight: 100;
         margin-top: 15px;
         margin-bottom: 0
         }
         .domain-search .input-group+p strong {
         margin-right: 40px
         }
         /* Over Out */
         .card {
         background-color: rgba(255, 255, 255, 0.699);
         color: rgb(126, 0, 0);
         padding: 15px;
         margin-top: 104px;
         height: auto;
         }
         .imgg {
         background-image: url("img/bg-choose-book.jpg");
         opacity: 0.6;
         /* background-color: #cccccc0e; */
         height: 100vh; 
         width: 100%;
         background-repeat: no-repeat;
         background-size: cover;
         }
      </style>
   </head>
   <body>
      <div class="imgg">
         <!-- This Button  -->
         <form class="row domain-search  bg-pblue" action="Choose-book.php" method = "POST" >
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                     <h2 class="form-title">Find Your <strong>Favourit Books</strong></h2>
                     <p>“Today a reader, tomorrow a leader.”</p>
                  </div>
                  <div class="col-md-9">
                     <div class="input-group"> <input type="txt" name = "BookName" placeholder="“If you don’t like to read, you haven’t found the right book. ” "list="books" class="form-control"> <span class="input-group-addon"><input type="submit" value="Search"  class="btn btn-primary">  <
                        </span> 
                     </div>
                     <p>Libary <strong>$0.0</strong>per/Day <strong>$1.95</strong>Buy <strong>$9.95</strong>Fine <strong>$4.99</strong></p>
                  </div>
               </div>
            </div>
         </form>
         <?php
            session_start();
            if(empty($_SESSION['name'])){
            header("location: login.php");
            }
            $user = 'root
            $password = '';
            $database = 'LMS';//or which one U create that name 
            $mysql = new mysqli("localhost", $user, 
                            $password, $database);
            $sql = "SELECT * FROM book";
            echo ' <datalist id="books"> ';
            if ($result = $mysql->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                echo '<option value="'.$row["Name"].'"></option><br><small><p>'.$row["Auther"].'</p></small></option>';
                }}
            echo '</datalist>';
            if(isset($_POST['BookName'])){
            echo '<script>alert("'.$_POST["BookName"].'")</script>';
            $sqla = 'SELECT * FROM book where Name= "'.$_POST["BookName"].'";' ;
            if ($result = $mysql->query($sqla)) {
            $row = $result->fetch_assoc( );
            session_start();
            $_SESSION['Book'] = $row["Name"];
            $_SESSION['Auther'] = $row["Auther"];
            echo '
            <center>
            <div class="col-sm-3 d-flex justify-content-center">
              <div class="card card-block">
                <div class="card-block">
                  <center><h4 class="card-title">'.$row["Name"].'</h4></center>
                  <center><h6 class="card-subtitle text-muted">'.$row["Auther"].'</h6></center>
                  <center><p class="card-text">'.$row["about"].'</p></center>
                  <center><a href="book-buy.php" style="align-content: center;" class="btn btn-primary">Read Now</a></center>
                </div>
                </div>
              </div>
            </div><center>';
            }
            }
            ?>
      </div>
   </body>
</html>

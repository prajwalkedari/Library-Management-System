<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login In</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </head>
   <body style="background-color: rgba(123,108,90,255);">
      <?php 
         $user = 'root';
         $password = '';
         $database = 'LMS'; //or which one U create that name 
         $con = mysqli_connect("localhost", $user, 
                         $password, $database);
         
         if (isset($_POST['username'])) {
         $id=$_POST['username'];
         $pwd=$_POST['password'];
         $sql ='select * from   user where UserName = "'.$id.'" and Password = "'.$pwd.'";';
         $result = mysqli_query($con, $sql);  
         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
         $count = mysqli_num_rows($result);  
         
 
         if($count == 1){  
         $sql1 ='select Id from   user where UserName = "'.$id.'" and Password = "'.$pwd.'";';
         session_start();
         $_SESSION['name'] = $id;
         header("location: Choose-book.php") ;
         }  
         else{  
         echo '<script>alert("Worng useername or password")</script>';
           }    
       }
      ?>
      <section class="vh-100" >
         <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col col-xl-10">
                  <div class="card" style="border-radius: 1rem;">
                     <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                           <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp" -->
                           <img src="img/login_img.jpg" 
                              alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                           <div class="card-body p-4 p-lg-5 text-black">
                              <form action="login.php" method="POST">
                                 <div class="d-flex align-items-center mb-3 pb-1">
                                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                    <span class="h1 fw-bold mb-0">Logo</span>
                                 </div>
                                 <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                                 <div class="form-outline mb-4">
                                    <input type="username" name="username" id="form2Example17" class="form-control form-control-lg" />
                                    <label class="form-label" for="form2Example17">username</label>
                                 </div>
                                 <div class="form-outline mb-4">
                                    <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                                    <label class="form-label" for="form2Example27">Password</label>
                                 </div>
                                 <div class="pt-1 mb-4">
                                    <button class="btn btn-dark btn-lg btn-block" type="sumit">Login</button>
                                 </div>
                                 <a class="small text-muted" href="#!">Forgot password?</a>
                                 <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="sigup.php"
                                    style="color: #393f81;">Register here</a></p>
                                 <a href="#!" class="small text-muted">Terms of use.</a>
                                 <a href="#!" class="small text-muted">Privacy policy</a>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>


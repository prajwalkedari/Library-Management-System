

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <title>Book Plan</title>
      <style>
         .header {
         background:#00C9FF;
         }
         .bi {
         color:#00C9FF;
         }
         .price {
         color:white;
         font-size: 150px;
         font-weight: 800;
         padding-top:-80% !important;
         }
         /* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
         .flip-card {
         background-color: transparent;
         width: auto;
         height: auto;
         perspective: 1000px; /* Remove this if you don't want the 3D effect */
         }
         /* This container is needed to position the front and back side */
         .flip-card-inner {
         position: relative;
         width: 100%;
         height: 100%;
         text-align: center;
         transition: transform 0.8s;
         transform-style: preserve-3d;
         }
         /* Do an horizontal flip when you move the mouse over the flip box container */
         .flip-card:hover .flip-card-inner {
         transform: rotateY(180deg);
         }
         /* Position the front and back side */
         .flip-card-front, .flip-card-back {
         position: absolute;
         width: 100%;
         height: 100%;
         -webkit-backface-visibility: hidden; /* Safari */
         backface-visibility: hidden;
         }
         /* Style the front side (fallback if image is missing) */
         .flip-card-front {
         background-color: #00C9FF;
         color: white;
         height: auto;
         padding:50px 0px;
         }
         /* Style the back side */
         .flip-card-back {
         background-color: white;
         color: black;
         transform: rotateY(180deg);
         padding:50px 0px;
         }
      </style>
   </head>
   <body>
      <?php 
         session_start();bb
         if(isset($_POST["plan"])){
         $plan=$_POST["plan"];
         $price=$_POST["price"];
         $_SESSION["Plan"]=$plan;
         $_SESSION["Price"]=$price;
         header("location: abc.php");
         }
         
         
         ?>
      <div class="container p-5">
         <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
               <div class="h-100 flip-card">
                  <div class="flip-card-inner">
                     <div class="flip-card-front">
                        <span class="price">$0.1</span><br>/Hour
                        <br>
                        <h2 class="card-title">Libary</h2>
                        <small>Read in libary</small>
                     </div>
                     <div class="flip-card-back">
                        <ul class="list-group list-group-flush">
                           <li class="list-group-item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                 <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                              </svg>
                              Read
                           </li>
                           <li class="list-group-item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                 <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                              </svg>
                              IN
                           </li>
                           <li class="list-group-item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                 <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                              </svg>
                              Libary
                           </li>
                        </ul>
                        <form action="book-buy.php" method="POST">
                           <input value="$0.1" name ="price"  style="display:none">
                           <input value="Libary" name ="plan" style="display:none">
                           <button class="my-5 btn btn-outline-success btn-lg">Select</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
               <div class="h-100 flip-card">
                  <div class="flip-card-inner">
                     <div class="flip-card-front">
                        <span class="price">$1</span><br>/Hour
                        <br>
                        <h2 class="card-title">Rent</h2>
                        <small>for Home</small>
                     </div>
                     <div class="flip-card-back">
                        <ul class="list-group list-group-flush">
                           <li class="list-group-item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                 <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                              </svg>
                              In
                           </li>
                           <li class="list-group-item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                 <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                              </svg>
                              Your
                           </li>
                           <li class="list-group-item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                 <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                              </svg>
                              Home
                           </li>
                        </ul>
                        <form action="book-buy.php" method="POST">
                           <input value="$1" name ="price"  style="display:none">
                           <input value="Home" name ="plan" style="display:none">          
                           <button class="my-5 btn btn-outline-success btn-lg">Select</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
               <div class="h-100 flip-card">
                  <div class="flip-card-inner">
                     <div class="flip-card-front">
                        <span class="price">$40</span><br>/Lifetime
                        <br>
                        <h2 class="card-title">Buy</h2>
                        <small>Read Any Where</small>
                     </div>
                     <div class="flip-card-back">
                        <ul class="list-group list-group-flush">
                           <li class="list-group-item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                 <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                              </svg>
                              Read 
                           </li>
                           <li class="list-group-item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                 <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                              </svg>
                              any Where
                           </li>
                           <li class="list-group-item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                 <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                              </svg>
                              Its Your
                           </li>
                        </ul>
                        <form action="book-buy.php" method="POST">
                           <input value="$40" name ="price" style="display:none">
                           <input value="BUY" name ="plan" style="display:none">        
                           <button class="my-5 btn btn-outline-success btn-lg">Buy It</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>

 <!doctype html>
 <html lang="en">

 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="css/daftar.css">
     <title>Daftar Kami</title>
 </head>

 <body>
     <div class="container text-center">
         <div class="row">
             <div class="col">
                 <section>
                     <h3 class="h3log">MARI-KULIAH</h3>
                     <h4 class="h4log">DAFTAR</h4>
                     <hr class="hayukhr"><br><br><br>
                     <form method="POST" action="submit_register.php">
                        <center>
                        <div class="input-box">
                            <input type="text"  name="username" required="">
                            <label>username</label>
                        </div>
                        <div class="input-box">
                             <input type="password"  name="password" id="pass1" required="">
                             <label>password</label>
                        </div>
                        <div class="input-box">
                             <input type="password"  name="password2" id="pass2" required="">
                             <label>konfirmasi password</label>
                        </div>
                        </center>
                         
                         <button type="submit" name="submit" class="kerenboy">DAFTAR</button>
                         <br><br>
                         <a href="login.php" class="linkcadangan" style="color: red">Login?</a>
                     </form>
                 </section>
             </div>
         </div>
     </div>

     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 </body>

 </html>
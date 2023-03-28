<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body style="background-image: url(gambar/bintang.jpg); height:100%;  background-repeat: no-repeat;
    background-size: cover;  ">
    <!-- bg -->
    <div class="container">
        <div class="Logo" >
            <h1>CINEMA TIX</h1>
        </div>

    
        <div class="content">
            <div class="box-Login" style="    background-image: url(gambar/bacground.jpg) ;">
                <h2>Login</h2>
                <form action="" method="POST">
                
                    
                <div class="group">      
                    <input type="text " name="user"  required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Username</label>
                </div>
                <div class="group">      
                <input type="password " name="pass" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Password</label>
                </div>
               <div class="daftar">
                    New Member, <a href="daftar.php">Daftar Cinema tix</a>
               </div>
                
                <input type="submit" name="submit" value="Login" style="background-color: #5296BD;    font-family: 'Inter';">
             </form>

            </div>
     </div>
    </div>


</body>
</html>
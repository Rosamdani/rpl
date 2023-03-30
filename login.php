<?php
if (isset($_POST['submit'])) {
    session_start();


    $url = "https://regispmb.000webhostapp.com/public/api/user";
    $headers = @get_headers($url);

    if (!$headers || strpos($headers[0], '200') === false) {
        echo "<script>alert('Tidak ada koneksi internet')</script>";
    }else{
        $ch = curl_init($url);
    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
        $output = curl_exec($ch);
    
        curl_close($ch);
        $data = json_decode($output, true);
    
        $data = $data["data"];
    
        $i = 0;
        $ketemu = false;
        for ($i = 0; $i < count($data); $i++) {
            if ($_POST['user'] == $data[$i]['nama'] && md5($_POST['pass']) == $data[$i]['password']) {
                $_SESSION['login'] = true;
                $ketemu = true;
                header("Location:index.php");
            }
        }
    
        echo "<script>alert('Nama atau password tidak ditemukan')</script>";
    }

}
?>
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
        <div class="Logo">
            <h1>CINEMATIX</h1>
        </div>


        <div class="content">
            <div class="box-Login" style="    background-image: url(gambar/bacground.jpg) ;">
                <h2>Login</h2>
                <form action="" method="POST">


                    <div class="group">
                        <input type="text " name="user" required>
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
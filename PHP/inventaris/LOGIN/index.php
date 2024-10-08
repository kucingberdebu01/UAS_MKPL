<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
      
    }

    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 30px;
      background-image: url("loginfoto.jfif");
      background-repeat: no-repeat;
      background-size: cover;
    }

    .container {
      position: relative;
      max-width: 850px;
      width: 100%;
      background: #fff;
      padding: 40px 30px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 2);
      perspective: 2700px;
    }

    .container .cover {
      position: absolute;
      top: 0;
      left: 50%;
      height: 100%;
      width: 50%;
      z-index: 98;
      transition: all 1s ease;
      transform-origin: left;
      transform-style: preserve-3d;
    }

    .container #flip:checked ~ .cover {
      transform: rotateY(-180deg);
    }

    .container .cover .front {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
    }
    
    .container .cover .back {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
    }

    .cover .front {
      transform: rotateY(180deg);
      backface-visibility: block;
    }

    .cover .back {
      transform: rotateY(180deg);
      backface-visibility: hidden;
    }

    .container .cover::before {
    content: "";
      position: absolute;
      height: 100%;
      width: 100%;
      opacity: 0.1;
      z-index: 12;
      
    }
    .container .cover::after {
      content: "";
      position: absolute;
      height: 100%;
      width: 100%;
      opacity: 0.1;
      z-index: 12;
    }

    .container .cover::after {
      opacity: 0.3;
      transform: rotateY(180deg);
      backface-visibility: hide;
    }

    .container .cover img {
      position: absolute;
      height: 100%;
      width: 100%;
      object-fit: cover;
      z-index: 10;
    }

    .container .cover .text {
      position: absolute;
      z-index: 130;
      height: 100%;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .cover .text .text-1 {
      transform: rotateY(180deg);
      font-size: 26px;
      font-weight: 600;
      color: #fff;
      text-align: center;
    }
    .cover .text .text-2 {
      transform: rotateY(180deg);
      font-size: 26px;
      font-weight: 600;
      color: #fff;
      text-align: center;
    }

    .cover .text .text-3 {
      font-size: 26px;
      font-weight: 600;
      color: #fff;
      text-align: center;
    }
    .cover .text .text-4 {
      font-size: 26px;
      font-weight: 600;
      color: #fff;
      text-align: center;
    }

    .cover .text .text-2 {
      font-size: 15px;
      font-weight: 500;
    }
    .cover .text .text-4 {
      font-size: 15px;
      font-weight: 500;
    }
    .container .forms {
      height: 100%;
      width: 100%;
      background: #fff;
    }

    .container .form-content {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .form-content .login-form {
        width: calc(100% / 2 - 25px);
    }
    

    .forms .form-content .title {
      position: relative;
      font-size: 24px;
      font-weight: 500;
      color: #333;
    }

    

    .forms .form-content .title:before {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      height: 3px;
      width: 25px;
      background: #3d2ae8;
    }

    .forms .signup-form .title:before {
      width: 20px;
    }

    .forms .form-content .input-boxes {
      margin-top: 30px;
    }

    .forms .form-content .input-box {
      display: flex;
      align-items: center;
      height: 50px;
      width: 100%;
      margin: 10px 0;
      position: relative;
    }

    .form-content .input-box input {
      height: 100%;
      width: 100%;
      outline: none;
      border: none;
      padding: 0 30px;
      font-size: 16px;
      font-weight: 500;
      border-bottom: 2px solid rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
    }

    .form-content .input-box input:focus,
    .form-content .input-box input:valid {
      border-color: #eeedf0;
    }

    .form-content .input-box i {
      position: absolute;
      color: #0004f8;
      font-size: 17px;
    }

    .forms .form-content .text {
      font-size: 14px;
      font-weight: 500;
      color: #333;
    }

    .forms .form-content .text a {
      text-decoration: none;
    }

    .forms .form-content .text a:hover {
      text-decoration: underline;
    }

    .forms .form-content .button {
      color: #fff;
      margin-top: 40px;
    }

    .forms .form-content .button input {
      color: #fff;
      background: #3638c7;
      border-radius: 6px;
      padding: 0;
      cursor: pointer;
      transition: all 0.4s ease;
    }

    .forms .form-content .button input:hover {
      background: #1900f7;
    }

    .forms .form-content label {
      color: #1e76db;
      cursor: pointer;
    }

    .forms .form-content label:hover {
      text-decoration: underline;
    }

    .forms .form-content .login-text {
    text-align: center;
      margin-top: 25px;
    }
    .forms .form-content .sign-up-text {
      text-align: center;
      margin-top: 25px;
    }

    .container #flip {
      display: none;
    }

    @media (max-width: 730px) {
      .container .cover {
        display: none;
      }

      .form-content .login-form,
      .form-content .signup-form {
        width: 100%;
      }

      .form-content .signup-form {
        display: none;
      }

      .container #flip:checked ~ .forms .signup-form {
        display: none;
      }

      .container #flip:checked ~ .forms .login-form {
        display: none;
      }
    }
  </style>
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">

      
      <div class="front">
        <img src="bgmasuk1.jfif" alt="">
        <div class="text">
          <span class="text-1">Selamat datang di form login<br> ITS Mandiri</span>
          <span class="text-2">Silahkan masukan username dan Password</span>
        </div>
      </div>
      <div class="back">
      <img src="bgdaftar1.jfif" alt="">
        <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
        <div class="text">
            <span class="text-3">Selamat datang di form Daftar<br> ITS Mandiri</span>
            <span class="text-4">Silahkan masukan Nama Lengkap, username dan Password</span>
          </div>
      </div>
    </div>
    <div class="forms">
      <div class="form-content">
        <div class="sign-form">
          <div class="title">Masuk</div>
          <form action="sign.php" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="username" placeholder="Masukan username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Masukkan Password" required>
              </div>
              <div class="text"><a href="#">Lupa password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Belum memiliki akun? <label for="flip">Daftar sekarang</label></div>
            </div>
          </form>
        </div>
        <div class="signup-form">
          <div class="title">Daftar</div>
          <form action="signup.php" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="nama_lengkap" placeholder="Masukan Nama Lengkap" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="username" placeholder="Masukan username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Masukan Password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Sudah memiliki akun? <label for="flip">Masuk sekarang</label></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
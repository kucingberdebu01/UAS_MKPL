<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>APLIKASI PENDATAAN MAHASISWA</title>
  <style>
    /* Styles for the header */
    header {
      background-color: rgb(8, 6, 107);
      padding: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 0px;
    }
    body {
      background-image: url("http://localhost/inventaris/HOME/images/fotobangunan.jpeg");
      background-size: cover;
      background-repeat: no-repeat;
    }
    .label-text {
        font-size: 20px;
        color: #fff;
    }

    .header-left {
      display: flex;
      align-items: center;
    }

    .logo {
      width: 65px;
    }

    .header-text {
      margin-left: 10px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    /*ITS Mandiri sebelah kiri*/
    .header-text h1 {
      color: #ffffff;
      font-size: 20px;
      margin: 0;
    }

    .header-text h5 {
      color: #ffffff;
      font-size: 8px;
      margin: 0;
    }

    .header-center {
      display: flex;
      flex-direction: column;
      align-items: center;
      flex-grow: 1;
    }

    .header-center h1 {
      color: #fff;
      font-size: 28px;
      margin-bottom: 0px;
      text-align: center;
      margin-left: 10px;
    }

    

    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 270px;
      background: rgb(255, 255, 255);
      padding: 15px 10px;
      box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
      transition: all 0.4s ease;
    }

    .sidebar.close {
      width: calc(55px + 20px);
    }

    .logo_items {
      gap: 4px;
    }

    .logo_name {
      font-size: 22px;
      color: #333;
      font-weight: 100px;
      transition: all 0.3s ease;
    }

    .sidebar.close .logo_name,
    .sidebar.close #lock-icon,
    .sidebar.close #sidebar-close {
      opacity: 0;
      pointer-events: none;
    }

    #lock-icon,
    #sidebar-close {
      padding: 20px;
      color: #001696;
      font-size: 25px;
      cursor: pointer;
      margin-left: -4px;
      transition: all 0.3s ease;
    }

    #sidebar-close {
      display: none;
      color: rgb(122, 86, 86);
    }

    .menu_container {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      margin-top: 10px;
      overflow-y: auto;
      height: calc(90% - 40px);
    }

    .menu_container::-webkit-scrollbar {
      display: none;
    }

    .menu_title {
      position: relative;
      height: 50px;
      width: 55px;
    }

    .menu_title .title {
      margin-left: 15px;
      transition: all 0.3s ease;
    }

    .sidebar.close .title {
      opacity: 0;
    }

    .menu_title .line {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      height: 3px;
      width: 20px;
      border-radius: 25px;
      background: #aaa;
      transition: all 0.3s ease;
    }

    .menu_title .line {
      opacity: 0;
    }

    .sidebar.close .line {
      opacity: 1;
    }

    .item {
      list-style: none;
    }

    .link {
      text-decoration: none;
      border-radius: 8px;
      margin-bottom: 8px;
      color: #707070;
      background-color: #bebebe7c;
    }

    .link:hover {
      color: #fff;
      background-color: #4070f4;
    }

    .link span {
      white-space: nowrap;
    }

    .link i {
      height: 60px;
      min-width: 50px;
      display: flex;
      font-size: 22px;
      align-items: center;
      justify-content: center;
      border-radius: 3px;
    }

    .sidebar_profile {
      padding-top: 15px;
      margin-top: 15px;
      gap: 15px;
      border-top: 2px solid rgba(0, 0, 0, 0.1);
    }

    .sidebar_profile .name {
      font-size: 18px;
      color: #333;
    }

    .sidebar_profile .email {
      font-size: 15px;
      color: #333;
    }

    .navbar {
      max-width: 500px;
      width: 100%;
      position: fixed;
      top: 0;
      left: 60%;
      transform: translateX(-50%);
      background: #fff;
      padding: 10px 20px;
      border-radius: 0 0 8px 8px;
      justify-content: space-between;
    }

    #sidebar-open {
      font-size: 30px;
      color: #333;
      cursor: pointer;
      margin-right: 20px;
      display: none;
    }

    .navbar img {
      height: 40px;
      width: 40px;
      margin-left: 20px;
    }

    @media screen and (max-width: 1100px) {
      .navbar {
        left: 65%;
      }
    }

    @media screen and (max-width: 800px) {
      .sidebar {
        left: 0;
        z-index: 1000;
      }

      .sidebar.close {
        left: -100%;
      }

      #sidebar-close {
        display: block;
      }

      #lock-icon {
        display: none;
      }

      .navbar {
        left: 0;
        max-width: 100%;
        transform: translateX(0%);
      }

      #sidebar-open {
        display: block;
      }
    }
  </style>
  <link rel="stylesheet" href="style.css" />
  <link
    flex
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet"
  />
  <script src="script.js" defer></script>
  <script>
    function loadFormInput() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("content").innerHTML = this.responseText;
        }
      };
      xhttp.open(
        "GET",
        "http://localhost/inventaris/HOME/Modul/rbm_bos/input_rbm_bos.php",
        true
      );
      xhttp.send();
    }
    function loadTampilanHasil() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("content").innerHTML = this.responseText;
        }
      };
      xhttp.open(
        "GET",
        "http://localhost/inventaris/HOME/Modul/rbm_bos/show_rbm_bos.php",
        true
      );
      xhttp.send();
    }
  </script>
</head>

<body style="background-image: url('http://localhost/inventaris/HOME/images/fotobangunan.jpeg');">
  <header>
    <div class="header-left">
      <img class="logo" src="Logo.png" alt="ITS Mandiri Logo" />
      <div class="header-text">
        <h1>ITS Mandiri</h1>
        <h5>Institut Teknologi Sapta Mandiri</h5>
      </div>
    </div>
    <div class="header-center">
      <h1>APLIKASI PENDATAAN inventaris</h1>
    </div>
  </header>
  <div id="content"></div>
  <nav class="sidebar locked">
    <div class="logo_items flex">
      <span class="nav_image">
        <img src="images/logo.png" alt="logo_img" />
      </span>
      <span class="logo_name">ITS MANDIRI</span>
      <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
      <i class="bx bx-x" id="sidebar-close"></i>
    </div>
    <div class="menu_container">
      <div class="sidebar_profile flex">
        <span class="nav_image">
          <img src="images/profile1.jpg" alt="logo_img" />
        </span>
        <div class="data_text">
          <span class="name">Zainal Arifin</span>
          <span class="email">zainarifin@gmail.com</span>
        </div>
      </div>

          <div class="menu_title flex">
            <span class="title">MENU</span>
            <span class="line"></span>
          </div>
          <li class="item">
            <a href="#" class="link flex" onclick="loadFormInput()">
              <i class="bx bx-pencil"></i>
              <span>Tambah Data Siswa</span>
            </a>
          </li>
          <li class="item">
            <a href="#" class="link flex" onclick="loadTampilanHasil()">
              <i class="bx bx-folder"></i>
              <span>Tampilkan Data Siswa</span>
            </a>
          </li>
        <li class="item">
          <a href="http://localhost/inventaris/LOGIN/index.php" class="link flex">
            <i class="bx bx-log-out"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>


</body>
</html>

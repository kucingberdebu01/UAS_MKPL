<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI PENDATAAN MAHASISWA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            color: #444;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px 0;
            width: 100%;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 30px;
        }

        .profile {
            text-align: center;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            width: 80%;
            max-width: 400px;
        }

        .profile-pic {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            margin-bottom: 20px;
            border: 5px solid #ff7e5f;
        }

        .menu {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 80%;
            max-width: 400px;
        }

        .menu-item {
            width: 100%;
            margin-bottom: 15px;
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: #ff7e5f;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
            background-color: #feb47b;
            transform: scale(1.05);
        }

        button:active {
            background-color: #ff7e5f;
            transform: scale(1);
        }
    </style>
</head>
<body>
    <header>
        <h1>APLIKASI PENDATAAN MAHASISWA</h1>
    </header>
    <main>
        <section class="profile">
            <img src="profile.jpg" alt="Profile Picture" class="profile-pic">
            <h2>Nama Mahasiswa</h2>
            <p>NIM: 12345678</p>
            <p>Jurusan: Teknik Informatika</p>
        </section>
        <section class="menu">
            <div class="menu-item">
                <a href="input_data.html">
                    <button>Input Data</button>
                </a>
            </div>
            <div class="menu-item">
                <a href="tampilkan_data.html">
                    <button>Tampilkan Data</button>
                </a>
            </div>
            <div class="menu-item">
                <a href="logout.html">
                    <button>Logout</button>
                </a>
            </div>
        </section>
    </main>
</body>
</html>

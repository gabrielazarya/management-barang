<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/style_sidebar.css') }}" rel="stylesheet">
    <title>Sidebar</title>
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <div class="user">
                <div class="user-avatar">
                    <p>JH</p>
                </div>
                <div class="user-info">
                    <h3>John Doe</h3>
                    <p>Logistik TU-Surabaya</p>
                </div>
            </div>
            <div class="hr"></div>
            <ul class="menu one">
                <li>
                    <a href="#">
                        <ion-icon name="archive-outline"></ion-icon>
                        <span>Tambah Barang</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="settings-outline"></ion-icon>
                        <span>Data Barang</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="mail-outline"></ion-icon>
                        <span>Konfirmasi</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="calendar-outline"></ion-icon>
                        <span>Riwayat</span>
                    </a>
                </li>
            </ul>
            <div class="hr"></div>
            <ul class="menu two">
                <li>
                    <a href="#">
                        <ion-icon name="log-out-outline"></ion-icon>
                        <span>Log out</span>
                    </a>
                </li>
            </ul>
        </aside>
        <main class="events">
            <!-- Main Start -->
            @yield('admin-content')
        </main>
    </div>

    <!-- IONICONS -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
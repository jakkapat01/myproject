<?php
session_start();


// ตรวจสอบสถานะการล็อกอิน
$is_logged_in = isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true;

//เรียกใช้งานไฟล์เชื่อมต่อฐานข้อมูล
require_once 'condb.php';

//query
$query = "SELECT * FROM tbl_table ORDER BY id ASC";
$result = mysqli_query($condb, $query);



?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../src/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100..700&family=IBM+Plex+Sans+Thai+Looped:wght@100;200;300;400;500;600;700&family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Mitr:wght@200;300;400;500;600;700&family=Noto+Sans+Thai:wght@100..900&family=Noto+Serif+Thai:wght@100..900&family=Pattaya&display=swap"
        rel="stylesheet">
    <link rel="website icon" type="png" href="../images/OnzonLogo.png">
    <title>Booking - Onzon</title>
</head>

<body>
    <nav class="bg-nav-color w-full h-18 shadow-lg rounded-b-lg flex items-center justify-between px-4 z-30">
    
        <!-- Logo + Name -->
        <div class="items-center flex">
    
            <button class="block p-2" onclick="toggleMenu()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
    
            <a href="../pages/index.php">
                <img src="../images/OnzonLogo.png" alt="Logo"
                    class="h-8 w-8 md:h-12 md:w-12 rounded-xl ml-1 md:ml-5 mr-2 md:mr-5">
            </a>
            <span
                class="font-Pattaya text-black text-2xl sm:text-[30px] md:text-[36px] lg:text-[42px] mr-3 md:mr-8 blink-text">Onzon
                Bar</span>
    
        </div>
    
        <!-- Login/Register btn -->
        <?php if ($is_logged_in):?>
            <div class="flex items-center space-x-2 md:space-x-4">
            <div id="userProfile" >
                <!-- รูปโปรไฟล์ -->
                <div class="flex items-center cursor-pointer" onclick="toggleProfileMenu()">
                    <img id="userAvatar" src="../images/user.png" alt="User Profile"
                        class="h-7 w-7 mr-2 md:h-8 md:w-8 rounded-full hover:ring-[1.5] hover:scale-110">
                </div>
        
                <!-- Dropdown Menu -->
                <div id="profileMenu" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg hidden z-50">
                    <div class="py-1">
                        <div class="px-4 py-2 text-sm font-medium text-gray-700 border-b">
                            <span id="userName" class="font-ibmPlex">ชื่อผู้ใช้</span>
                        </div>
                        <a href="../pages/profile.html"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 font-ibmPlex">
                            โปรไฟล์
                        </a>
                        <a href="../pages/booking-history.php"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 font-ibmPlex">
                            ประวัติการจอง
                        </a>
                        <button onclick="location.href='logout.php'"
                            class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100 font-ibmPlex">
                            ออกจากระบบ
                        </button>
                    </div>
                </div>
            </div>
            </div>
        <?php else: ?>
            <div class="flex items-center space-x-2 md:space-x-4">
                <div id="loginButton">
                    <a href="../pages/login.php">
                        <button
                            class="bg-yellow-500 hover:bg-yellow-600 text-black font-medium 
                            text-base sm:text-lg md:text-xl
                            px-2 sm:px-3 md:px-4 
                            py-1 sm:py-1.5 md:py-2 
                            rounded-md sm:rounded-lg transition-colors duration-300">
                            Login/Register
                        </button>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </nav>

    <div id="overlay"
        class="fixed inset-0 backdrop-filter backdrop-brightness-90 bg-black/50 opacity-0 pointer-events-none transition-opacity duration-300 ease-in-out z-40">
    </div>

    <div id="sideMenu"
        class="fixed top-0 left-0 h-full w-64 bg-black shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-50">
        <div class="p-4">
            <div class="flex justify-end">
                <button class="mb-8 text-gray-600" onclick="toggleMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="flex flex-col space-y-4">
                <a href="../pages/index.php"
                    class="font-ibmPlex text-white text-lg px-3 py-2 rounded-md hover:scale-105 hover:bg-white/15 transition-all duration-300">หน้าแรก</a>
                <a href="../pages/booking.php"
                    class="font-ibmPlex text-white text-lg px-3 py-2 rounded-md hover:scale-105 hover:bg-white/15 transition-all duration-300">จองโต๊ะ</a>
                <a href="https://maps.app.goo.gl/nfmjpPh55RHHYSpK8" target="_blank"
                    class="font-ibmPlex text-white text-lg px-3 py-2 rounded-md hover:scale-105 hover:bg-white/15 transition-all duration-300">ตำแหน่งร้าน</a>
                <a href="/"
                    class="font-ibmPlex text-white text-lg px-3 py-2 rounded-md hover:scale-105 hover:bg-white/15 transition-all duration-300">ติดต่อเรา</a>
            </div>
        </div>
    </div>

    <main>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6 lg:py-8">
            <div class="flex gap-4">
                <!-- ฝั่งซ้าย (Cashier และ Bar) sm:text-3xl md:text-4xl lg:text-5xl font-bold -->
                <div class="w-1/4 bg-black p-4 relative">
                    <div class="absolute top-0 right-4">
                        <div
                            class="bg-green-600 text-white px-3 py-1 sm:px-4 sm:py-2 rounded text-sm sm:text-base font-ibmPlex transform transition-transform duration-500">
                            ห้องน้ำ
                        </div>
                    </div>

                    <!-- Cashier -->
                     <div class="absolute bottom-24 left-0">
                        <div class="bg-white w-10 h-18 sm:w-10 sm:h-18 md:w-15 md:h-40 lg:w-20 lg:h-36">
                            <p class="-right-10 top-1/2 -translate-y-1/2 transform rotate-90 origin-left font-medium">Cashier</p>
                        </div>

                     </div>

                    <!-- Bar แบบตัว L -->

                    <div class="absolute bottom-0 left-0">
                        <div class="flex bg-white w-15 sm:w-24 md:w-36 lg:w-48 h-4 sm:h-6">
                            <p class="flex font-ibmPlex font-medium items-center ml-4 mt-0.5">BAR</p>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-14 sm:left-24 md:left-36 lg:left-48">
                        <div class="flex bg-white w-4 sm:w-12 md:w-6 h-18 sm:h-56">

                        </div>
                    </div>
                    <div class="absolute bottom-8 left-0">
                        <!-- <div class="bg-black flex">
                        <div class="h-7 sm:h-34 w-32 sm:w-32"></div>
                    </div> -->
                    </div>
                </div>

                <!-- ฝั่งขวา (โซนที่นั่ง) -->
                <div class="w-3/4 relative">


                    <!-- โซนที่นั่ง -->
                    <div class="bg-purple-600 p-3 sm:p-5 rounded">
                         <div class="grid grid-cols-5 gap-2 sm:gap-3 lg:gap-4">
                            <?php foreach ($result as $row) {
                                if ($row['table_status'] == 0) { // ว่าง
                                echo '<a href="check_login.php?id=' . urlencode($row["id"]) . '&act=booking" 
                                class="bg-pink-400 p-2 sm:p-3 rounded text-center text-yellow-300 font-bold text-sm sm:text-base lg:text-lg hover:bg-pink-500 cursor-pointer transition-colors">'
                                . htmlspecialchars($row['table_name']) . 
                                '</a>';
                            } else { // ถูกจอง
                                echo '<div class="bg-gray-400 p-2 sm:p-3 rounded text-center text-white font-bold text-sm sm:text-base lg:text-lg cursor-not-allowed">'
                                . htmlspecialchars($row['table_name']) . 
                                '</div>';
                            }
                            } ?>
                         </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <script>
        function toggleMenu() {
            const sideMenu = document.getElementById('sideMenu');
            const overlay = document.getElementById('overlay');
            const isOpen = sideMenu.classList.contains('translate-x-0');

            if (isOpen) {
                // ปิดเมนู
                sideMenu.classList.remove('translate-x-0');
                sideMenu.classList.add('-translate-x-full');
                // ซ่อน overlay
                overlay.classList.add('opacity-0', 'pointer-events-none');
            } else {
                // เปิดเมนู
                sideMenu.classList.remove('-translate-x-full');
                sideMenu.classList.add('translate-x-0');
                // แสดง overlay
                overlay.classList.remove('opacity-0', 'pointer-events-none');
            }
        }

        // รวม event listeners
        document.addEventListener('click', function (event) {
            const sideMenu = document.getElementById('sideMenu');
            const hamburgerButton = document.querySelector('button.block');
            const overlay = document.getElementById('overlay');

            if (event.target === overlay ||
                (!sideMenu.contains(event.target) && !hamburgerButton.contains(event.target))) {
                sideMenu.classList.remove('translate-x-0');
                sideMenu.classList.add('-translate-x-full');
                overlay.classList.add('opacity-0', 'pointer-events-none');
            }
        });
        function toggleProfileMenu() {
                const menu = document.getElementById('profileMenu');
                menu.classList.toggle('hidden');
            }
    </script>

</body>

</html>
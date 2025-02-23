<?php
session_start();


// ตรวจสอบสถานะการล็อกอิน
$is_logged_in = isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true;
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
    <title>Onzon Bar</title>
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

    <!-- Size menu Overlay -->
    <div id="overlay"
        class="fixed inset-0 backdrop-filter backdrop-brightness-90 bg-black/50 opacity-0 pointer-events-none transition-opacity duration-300 ease-in-out z-40">
    </div>

    <!-- Side Menu -->
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
        <section class="px-8 py-8">
            <div
                class="relative w-full h-[200px] md:h-[300px] lg:h-[400px] bg-gray-300 rounded-2xl overflow-hidden group">
                <a href="../pages/booking.php">
                    <img src="../images/test.png" alt="รูปในร้าน" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center backdrop-blur-[1px] bg-gray-500/20">
                        <h2
                            class="text-white text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold transform transition-transform duration-500 group-hover:scale-110">
                            พร้อมไปม่วนแล้วหรือยัง
                        </h2>
                        <p
                            class="text-white text-sm sm:text-base md:text-lg lg:text-xl mt-2 px-4 text-center transition-transform duration-500 group-hover:scale-110">
                            จองโต๊ะเลย!!!
                        </p>
                    </div>
                </a>
            </div>
        </section>

        <section class="px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            <a href="#">
                <div
                    class="relative w-full h-[150px] md:h-[200px] lg:h-[300px] bg-gray-300 rounded-2xl overflow-hidden group">
                    <img src="../images/leftPic.png" alt="โปรโมชั่น" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center backdrop-blur-[1px] bg-gray-500/20">
                        <h3
                            class="text-white text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold transform transition-transform duration-500 group-hover:scale-110">
                            โปรโมชั่น
                        </h3>
                        <p
                            class="text-white text-sm sm:text-base md:text-lg lg:text-xl mt-2 px-4 text-center transition-transform duration-500 group-hover:scale-110">
                            วันนี้มีโปร
                        </p>
                    </div>
                </div>
            </a>

            <a href="#">
                <div
                    class="relative w-full h-[150px] md:h-[200px] lg:h-[300px] bg-gray-300 rounded-2xl overflow-hidden group">
                    <img src="../images/rightPic.png" alt="โปรโมชั่น" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center backdrop-blur-[1px] bg-gray-500/20">
                        <h3
                            class="text-white text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold transform transition-transform duration-500 group-hover:scale-110">
                            วงดนตรีวันนี้
                        </h3>
                        <p
                            class="text-white text-sm sm:text-base md:text-lg lg:text-xl mt-2 px-4 text-center transition-transform duration-500 group-hover:scale-110">
                            ทั้งชิว ทั้งม่วน มาฟังกันเลย!
                        </p>
                    </div>
                </div>
            </a>
        </section>

    </main>

    <footer class="shadow-lg m-8">
        <div class="max-w-6xl mx-auto px-4 py-6 text-center text-gray-600">
            <p>ติดต่อเรา</p>
            <a href="https://line.me/R/ti/p/@044kyqlg" target="_blank">
                <img src="../images/line-icon.png" alt="Line" class="h-6 w-6 inline-block mb-2 mt-2 mr-1">
            </a>

            <a href="https://www.facebook.com/profile.php?id=100092482647637" target="_blank">
                <img src="../images/facebook-icon.png" alt="facebook" class="h-6 w-6 inline-block mb-2 mt-2">
            </a>

            <a href="https://maps.app.goo.gl/nfmjpPh55RHHYSpK8" target="_blank">
                <img src="../images/google-maps-icon.png" alt="googleMaps" class="h-5 w-3.5 inline-block mb-2 mt-2 ml-1">
            </a>

            <p class="">
                © 2024 EN811302 Project.
            </p>
        </div>
    </footer>

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

        // รวม event listeners เป็นอันเดียว
        document.addEventListener('click', function (event) {
            const sideMenu = document.getElementById('sideMenu');
            const hamburgerButton = document.querySelector('button.md\\:hidden');
            const overlay = document.getElementById('overlay');

            const profileMenu = document.getElementById('profileMenu');
                const userProfile = document.getElementById('userProfile');

                if (!userProfile.contains(event.target)) {
                    profileMenu.classList.add('hidden');
                }

            // ถ้าคลิกที่ overlay หรือคลิกนอกเมนู (ยกเว้นปุ่ม hamburger)
            if (event.target === overlay ||
                (!sideMenu.contains(event.target) && !hamburgerButton.contains(event.target))) {
                sideMenu.classList.remove('translate-x-0');
                sideMenu.classList.add('-translate-x-full');
                overlay.classList.add('opacity-0', 'pointer-events-none');
            }
        });

        // // เช็คสถานะ login เมื่อโหลดหน้า
        // document.addEventListener('DOMContentLoaded', () => {
        //     checkLoginStatus();
        // });

        // // ฟังก์ชันเช็คสถานะ login
        // function checkLoginStatus() {
        //     const token = localStorage.getItem('token');
        //     const userInfo = localStorage.getItem('userInfo');

        //     const loginButton = document.getElementById('loginButton');
        //     const userProfile = document.getElementById('userProfile');

        //     if (token && userInfo) {
        //         // ถ้ามี token แสดงว่า login แล้ว
        //         loginButton.classList.add('hidden');
        //         userProfile.classList.remove('hidden');

        //         // แสดงข้อมูลผู้ใช้
        //         const user = JSON.parse(userInfo);
        //         document.getElementById('userName').textContent = user.name || 'ผู้ใช้งาน';
        //         if (user.avatar) {
        //             document.getElementById('userAvatar').src = user.avatar;
        //         }
        //     } else {
        //         // ถ้าไม่มี token แสดงปุ่ม login
        //         loginButton.classList.remove('hidden');
        //         userProfile.classList.add('hidden');
        //     }
        // }

        // // ฟังก์ชัน logout
        // function handleLogout() {
        //     // ลบข้อมูลใน localStorage
        //     localStorage.removeItem('token');
        //     localStorage.removeItem('userInfo');

        //     // รีเฟรชหน้าเว็บ
        //     window.location.reload();
        // }

        // // ฟังก์ชันเมื่อ login สำเร็จ (เรียกใช้ในหน้า login)
        // function handleLoginSuccess(userData) {
        //     // เก็บข้อมูลลง localStorage
        //     localStorage.setItem('token', userData.token);
        //     localStorage.setItem('userInfo', JSON.stringify({
        //         name: userData.name,
        //         avatar: userData.avatar
        //     }));

        //     // redirect ไปหน้าหลัก
        //     window.location.href = '../pages/index.html';
        // }

        // เพิ่มต่อจาก script เดิม
            function toggleProfileMenu() {
                const menu = document.getElementById('profileMenu');
                menu.classList.toggle('hidden');
            }

        //     // ปิดเมนูเมื่อคลิกที่อื่น
        //     document.addEventListener('click', function (event) {
        //         const profileMenu = document.getElementById('profileMenu');
        //         const userProfile = document.getElementById('userProfile');

        //         if (!userProfile.contains(event.target)) {
        //             profileMenu.classList.add('hidden');
        //         }
        //     });
    </script>
</body>

</html>
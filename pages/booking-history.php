<?php
session_start();


// ตรวจสอบสถานะการล็อกอิน
$is_logged_in = isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true;
?>
<html lang="en">
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
    <title>Booking History - Onzon Bar</title>
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
        function toggleProfileMenu() {
                const menu = document.getElementById('profileMenu');
                menu.classList.toggle('hidden');
            }
</script>
</body>
</html>
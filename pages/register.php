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
    <title>register - Onzon</title>
</head>
<body class="min-h-screen flex items-center justify-center p-4">

    <div class="absolute top-4 left-4">
        <a href="../pages/index.php"
            class="inline-flex items-center text-gray-400 hover:text-gray-200 hover:scale-110 transition-colors duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            <span class="font-ibmPlex text-sm sm:text-base">ย้อนกลับ</span>
        </a>
    </div>

    <div class="min-h-screen flex items-center justify-center p-4 mt-8 sm:mt-0">
        <div
            class="bg-white rounded-2xl shadow-xl w-[calc(70vw)] max-w-lg lg:max-w-xl xl:max-w-calc(1000px)  p-6 sm:p-8 md:p-10">

            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-center mb-6 sm:mb-8 font-Pattaya">
                สมัครสมาชิก
            </h2>


            <form action="process-register.php" method="post" class="space-y-4 sm:space-y-6">

                <div>
                    <label class="block font-ibmPlex text-sm sm:text-base md:text-lg lg:text-xl font-medium text-gray-700 mb-2">
                        ชื่อผู้ใช้
                    </label>
                    <input type="text" id="username" name="username_account"
                        class="w-full px-4 py-2 sm:py-3 lg:py-4 text-base lg:text-lg border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent"
                        placeholder="กรอกชื่อผู้ใช้" required>
                </div>

                <div>
                    <label
                        class="block font-ibmPlex text-sm sm:text-base md:text-lg lg:text-xl font-medium text-gray-700 mb-2">
                        อีเมล
                    </label>
                    <input type="email" id="email" name="email_account"
                        class="w-full px-4 py-2 sm:py-3 lg:py-4 text-base lg:text-lg border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent"
                        placeholder="example@email.com" required>
                </div>


                <div>
                    <label
                        class="block font-ibmPlex text-sm sm:text-base md:text-lg lg:text-xl font-medium text-gray-700 mb-2">
                        รหัสผ่าน
                    </label>
                    <input type="password" id="password" name="password_account1"
                        class="w-full px-4 py-2 sm:py-3 lg:py-4 text-base lg:text-lg border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent"
                        placeholder="••••••••" required>
                </div>

                <div>
                    <label class="block font-ibmPlex text-sm sm:text-base md:text-lg lg:text-xl font-medium text-gray-700 mb-2">
                        ยืนยันรหัสผ่าน
                    </label>
                    <input type="password" id="password" name="password_account2"
                        class="w-full px-4 py-2 sm:py-3 lg:py-4 text-base lg:text-lg border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent"
                        placeholder="••••••••" required>
                </div>

                <button type="submit"
                    class="w-full bg-yellow-500 text-black font-medium py-2 sm:py-3 lg:py-4 rounded-lg hover:bg-yellow-600 transition-colors duration-300 text-sm sm:text-base lg:text-xl">
                    ลงทะเบียน
                </button>

                <p class="text-center text-sm sm:text-base text-gray-600">
                    มีบัญชีอยู่แล้ว?
                    <a href="../pages/login.php" class="text-yellow-600 hover:text-yellow-700 font-medium">
                        เข้าสู่ระบบ
                    </a>
                </p>

            </form>
        </div>
    </div>
</html>
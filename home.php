<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script>
        // Live Clock
        function updateTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString();
            document.getElementById('liveTime').textContent = timeString;
        }
        setInterval(updateTime, 1000);

        // Function to load name and email
        function loadUserData() {
            const name = localStorage.getItem('name');
            const email = localStorage.getItem('email');
            
            if (name && email) {
                document.getElementById('welcomeMessage').textContent = `Welcome ${name} (${email})`;
            } else {
                document.getElementById('welcomeMessage').textContent = 'No data received';
            }
        }
        window.onload = loadUserData;
    </script>
    <style>
        /* Custom Styles */
        .navbar a:hover {
            text-decoration: underline;
            color: #1D4ED8; /* Tailwind blue */
        }
        .course-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }
    </style>
</head>
<body class="bg-white">
    <div class="container mx-auto p-4">
        <!-- Navigation Bar -->
        <div class="bg-blue-500 p-4 flex justify-between items-center border border-blue-500">
            <div class="flex space-x-4 navbar">
                <a href="#" class="text-black font-bold">HOME</a>
                <a href="#" class="text-black font-bold">COURSES</a>
                <a href="#" class="text-black font-bold">AFFILIATIONS</a>
                <a href="#" class="text-black font-bold">HOW TO JOIN</a>
                <a href="#" class="text-black font-bold">TESTIMONIALS</a>
            </div>
            <div>
                <i class="fas fa-shopping-cart text-black text-2xl"></i>
            </div>
        </div>

        <!-- Welcome Message and Live Clock-->
        <div class="text-right mt-4">
            <p id="welcomeMessage" class="text-black"></p>
            <p class="date">
                <script>document.write(new Date().toDateString())</script> - <span id="liveTime"></span>
            </p>
        </div>

        <!-- Courses Section -->
        <div class="grid grid-cols-3 gap-4 mt-4">
            <!-- Course Card -->
            <div class="border border-blue-500 p-4 course-card">
                <div class="bg-gray-300 p-4 shadow-lg">
                    <p class="text-black">EC0001</p>
                    <p class="text-black font-bold">Quantitative Analysis in Business (45 Hours)</p>
                    <p class="text-black mt-4">Rs. 35,000/-</p>
                </div>
            </div>
            <!-- Course Card -->
            <div class="border border-blue-500 p-4 course-card">
                <div class="bg-gray-300 p-4 shadow-lg">
                    <p class="text-black">EC0002</p>
                    <p class="text-black font-bold">Information Technology in Retailing (45 Hours)</p>
                    <p class="text-black mt-4">Rs. 35,000/-</p>
                </div>
            </div>
            <!-- Course Card -->
            <div class="border border-blue-500 p-4 course-card">
                <div class="bg-gray-300 p-4 shadow-lg">
                    <p class="text-black">EC0003</p>
                    <p class="text-black font-bold">Brand Innovation & Development (30 Hours)</p>
                    <p class="text-black mt-4">Rs. 25,000/-</p>
                </div>
            </div>
            <!-- Course Card -->
            <div class="border border-blue-500 p-4 course-card">
                <div class="bg-gray-300 p-4 shadow-lg">
                    <p class="text-black">EC0004</p>
                    <p class="text-black font-bold">Packaging & Logistic Management (30 Hours)</p>
                    <p class="text-black mt-4">Rs. 25,000/-</p>
                </div>
            </div>
            <!-- Course Card -->
            <div class="border border-blue-500 p-4 course-card">
                <div class="bg-gray-300 p-4 shadow-lg">
                    <p class="text-black">EC0005</p>
                    <p class="text-black font-bold">Service Marketing (40 Hours)</p>
                    <p class="text-black mt-4">Rs. 30,000/-</p>
                </div>
            </div>
            <!-- Course Card -->
            <div class="border border-blue-500 p-4 course-card">
                <div class="bg-gray-300 p-4 shadow-lg">
                    <p class="text-black">EC0006</p>
                    <p class="text-black font-bold">E-Commerce (45 Hours)</p>
                    <p class="text-black mt-4">Rs. 35,000/-</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

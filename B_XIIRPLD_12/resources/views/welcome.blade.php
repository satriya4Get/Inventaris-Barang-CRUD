<html>

<head>
    <title>Inventaris Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body class="font-roboto bg-[#EFEFED] flex flex-col min-h-screen overflow-hidden">
    <header class="flex flex-wrap justify-between items-center p-4 bg-white shadow-md">
        <div class="flex space-x-4">
            <a class="text-gray-700 hover:text-blue-600 text-sm" href="#"><b>INVENTARIS BARANG</b></a>
        </div>
        <div class="flex items-center space-x-4 mt-4 md:mt-0">
            <a class="text-gray-700 hover:text-blue-600 text-sm" href="{{ '/login' }}">Log In</a>
            <a class="text-blue-600 border border-blue-600 px-3 py-2 rounded hover:bg-blue-600 hover:text-white text-sm"
                href="{{ '/register' }}">Sign Up</a>
        </div>
    </header>

    <!-- Flex-grow to make sure main content takes available space -->
    <main class="flex flex-col lg:flex-row justify-between items-center p-10 bg-[#F1EFEE] flex-grow">
        <div class="max-w-md space-y-4 text-center lg:text-left">
            <h1 class="text-4xl font-bold text-gray-900 leading-tight">
                Easily Track and Manage Your Inventory
            </h1>
            <p class="text-base text-gray-600">
                Keep your stock levels in check with our intuitive inventory tracking system. Monitor your products,
                update quantities, and stay ahead of your supply needs effortlessly.
            </p>
            <a href="{{ route('login') }}"><button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">
                Check The Inventory
            </button></a>
        </div>
        <div class="relative mt-6 lg:mt-0 w-full lg:w-1/3">
            <img src="https://files.oaiusercontent.com/file-jnYSMXACFTyYSWlsvM9VbLdo?se=2024-09-30T02%3A37%3A15Z&sp=r&sv=2024-08-04&sr=b&rscc=max-age%3D604800%2C%20immutable%2C%20private&rscd=attachment%3B%20filename%3D63d0f4cf-c8e2-468d-a052-22325754a636.webp&sig=O07e2FeIS/zS3ebqEZQrQu3tXvlyHwuZSTin5awesHY%3D" alt="Gambar" class="rounded-lg w-full h-auto" />
        </div>
    </main>

    <footer class="mt-auto p-4 bg-[#EFEFED] text-black text-center">
        <p>&copy; 2019 Inventaris Barang. All Rights Reserved.</p>
    </footer>
</body>

</html>

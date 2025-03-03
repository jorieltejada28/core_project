<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body class="flex flex-col min-h-screen bg-[#594423] text-white">

    <div id="loadingScreen">
        <div class="spinner-container text-center">
            <div class="spinner"></div>
            <div class="loading-text">Loading</div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="bg-[#F7E6CA] text-[#4E3B2A] p-4 shadow-md fixed top-0 left-0 w-full z-50">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#home" class="text-2xl font-bold">MyLogo</a>
            <ul class="hidden md:flex space-x-6 mx-auto">
                <li><a href="#about" class="nav-link hover:text-[#8B5E3C]">About</a></li>
                <li><a href="#services" class="nav-link hover:text-[#8B5E3C]">Services</a></li>
                <li><a href="#contact" class="nav-link hover:text-[#8B5E3C]">Contact</a></li>
            </ul>
            <div class="hidden md:flex space-x-4">
                <a href="signin.php" class="border border-[#8B5E3C] text-[#8B5E3C] px-4 py-2 rounded-lg transition duration-300 ease-in-out hover:bg-[#8B5E3C] hover:text-white">Sign In</a>
                <a href="signup.php" class="border border-[#8B5E3C] text-[#8B5E3C] px-4 py-2 rounded-lg transition duration-300 ease-in-out hover:bg-[#8B5E3C] hover:text-white">Sign Up</a>
            </div>
            <button id="menu-toggle" class="md:hidden text-white focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <section id="home" class="relative w-full h-screen flex flex-col items-center justify-center text-center overflow-hidden">
        <div class="absolute inset-0 z-0 slideshow">
            <div class="slide bg-cover bg-center absolute w-full h-full opacity-0 transition-opacity duration-1000" style="background-image: url('./pictures/one.png');"></div>
            <div class="slide bg-cover bg-center absolute w-full h-full opacity-0 transition-opacity duration-1000" style="background-image: url('./pictures/two.png');"></div>
            <div class="slide bg-cover bg-center absolute w-full h-full opacity-0 transition-opacity duration-1000" style="background-image: url('./pictures/three.png');"></div>
            <div class="slide bg-cover bg-center absolute w-full h-full opacity-0 transition-opacity duration-1000" style="background-image: url('./pictures/four.png');"></div>
            <div class="slide bg-cover bg-center absolute w-full h-full opacity-0 transition-opacity duration-1000" style="background-image: url('./pictures/five.png');"></div>
        </div>
        <h1 class="text-5xl font-bold z-10">Welcome to Our Website</h1>
        <p class="mt-4 text-lg z-10">Discover amazing content and features.</p>
        <a href="#" class="mt-6 bg-[#F7E6CA] text-[#4E3B2A] px-6 py-3 rounded-lg transition duration-300 ease-in-out hover:bg-[#594423] hover:text-white z-10">
            Get Started
        </a>
        <div class="absolute bottom-6 flex space-x-2 z-10">
            <div class="dot w-3 h-3 bg-gray-300 rounded-full cursor-pointer"></div>
            <div class="dot w-3 h-3 bg-gray-300 rounded-full cursor-pointer"></div>
            <div class="dot w-3 h-3 bg-gray-300 rounded-full cursor-pointer"></div>
            <div class="dot w-3 h-3 bg-gray-300 rounded-full cursor-pointer"></div>
            <div class="dot w-3 h-3 bg-gray-300 rounded-full cursor-pointer"></div>
        </div>
    </section>

    <section id="about" class="py-16 bg-[#4E3B2A] text-white text-center">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold mb-6">About Us</h2>
            <p class="max-w-3xl mx-auto mb-8">
                We are a dedicated team passionate about delivering high-quality services and solutions to our customers. Our mission is to provide exceptional value through innovation and customer-centric approaches. With years of experience in the industry, we strive to bring the best solutions tailored to your needs.
            </p>
            <p class="max-w-3xl mx-auto mb-8">
                Our team consists of highly skilled professionals who are experts in their respective fields. We believe in continuous learning and improvement, ensuring that we stay ahead of industry trends. Customer satisfaction is at the core of our values, and we work tirelessly to exceed expectations.
            </p>
            <p class="max-w-3xl mx-auto mb-8">
                Whether you're looking for innovative solutions, expert guidance, or reliable services, we are here to assist you. We take pride in our ability to understand our clients' needs and provide tailored solutions that drive success. Join us on this journey, and let's create something amazing together!
            </p>
        </div>
    </section>

    <section id="services" class="py-16 bg-[#F7E6CA] text-[#4E3B2A] text-center">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold mb-6">Our Services</h2>
            <p class="max-w-3xl mx-auto mb-8">
                We provide high-quality services to meet your needs. Our goal is to ensure that our clients receive the best solutions that drive growth and efficiency. Explore our wide range of services designed to cater to businesses of all sizes.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 border rounded-lg shadow-md bg-white text-[#4E3B2A]">
                    <h3 class="text-2xl font-semibold">Consulting Services</h3>
                    <p class="mt-2">Expert advice to help you make informed business decisions. Our consultants bring years of experience to assist you in strategic planning, problem-solving, and implementation of effective solutions.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-md bg-white text-[#4E3B2A]">
                    <h3 class="text-2xl font-semibold">Web Development</h3>
                    <p class="mt-2">Custom-built websites that enhance your online presence. We specialize in creating responsive, fast, and visually appealing websites tailored to your business goals.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-md bg-white text-[#4E3B2A]">
                    <h3 class="text-2xl font-semibold">Digital Marketing</h3>
                    <p class="mt-2">Increase your brand visibility with our digital marketing services. From SEO and content marketing to social media management, we help you reach a wider audience effectively.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-md bg-white text-[#4E3B2A]">
                    <h3 class="text-2xl font-semibold">Graphic Design</h3>
                    <p class="mt-2">Stunning visual designs that communicate your brand message. Our team creates logos, branding materials, and marketing graphics that leave a lasting impression.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-md bg-white text-[#4E3B2A]">
                    <h3 class="text-2xl font-semibold">Software Development</h3>
                    <p class="mt-2">Tailored software solutions to streamline your business operations. From mobile apps to enterprise software, we develop high-quality applications that meet your needs.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-md bg-white text-[#4E3B2A]">
                    <h3 class="text-2xl font-semibold">Customer Support</h3>
                    <p class="mt-2">Reliable and responsive customer support to assist you. We ensure that your customers receive timely and efficient support, improving their overall experience with your business.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-16 bg-[#4E3B2A] text-white text-center">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold mb-6">Contact Us</h2>
            <p class="mb-8">Feel free to reach out for any inquiries or assistance.</p>
            <form class="max-w-lg mx-auto">
                <input type="text" placeholder="Your Name" class="w-full p-3 mb-4 border rounded-lg text-[#4E3B2A]">
                <input type="email" placeholder="Your Email" class="w-full p-3 mb-4 border rounded-lg text-[#4E3B2A]">
                <textarea placeholder="Your Message" class="w-full p-3 mb-4 border rounded-lg text-[#4E3B2A]"></textarea>
                <button type="submit" class="bg-[#F7E6CA] text-[#4E3B2A] px-6 py-3 rounded-lg transition duration-300 ease-in-out hover:bg-white hover:text-[#4E3B2A]">Send Message</button>
            </form>
        </div>
    </section>

    <footer class="bg-[#F7E6CA] text-[#4E3B2A] text-center p-4 mt-auto border-t-4 border-[#4E3B2A]">
        <div class="container mx-auto">
            <p class="text-lg">&copy; 2025 Your Company. All rights reserved.</p>
            <div class="flex justify-center space-x-4 mt-2">
                <a href="#" class="text-[#4E3B2A] hover:text-[#594423]"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-[#4E3B2A] hover:text-[#594423]"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-[#4E3B2A] hover:text-[#594423]"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-[#4E3B2A] hover:text-[#594423]"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>
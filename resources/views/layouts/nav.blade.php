<nav class="bg-[#0a1f44] text-white sticky top-0 z-50 shadow-sm">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <a href="/" class="text-xl font-bold tracking-wide">
                Business<span class="text-gray-300">Consult</span>
            </a>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex items-center space-x-8 text-sm font-medium">
                <li>
                    <a href="/" class="hover:text-gray-300 transition">Home</a>
                </li>
                <li>
                    <a href="/about-us" class="hover:text-gray-300 transition">About</a>
                </li>
                <li>
                    <a href="/services" class="hover:text-gray-300 transition">Services</a>
                </li>
                <li>
                    <a href="/industries" class="hover:text-gray-300 transition">Industries</a>
                </li>
                <li>
                    <a href="/blog" class="hover:text-gray-300 transition">Insights</a>
                </li>
                <li>
                    <a href="/contact" class="hover:text-gray-300 transition">Contact</a>
                </li>
                <li>
                    <a href="/book-consultation"
                       class="bg-white text-[#0a1f44] px-5 py-2 rounded-md font-semibold shadow hover:bg-gray-100 transition">
                        Book Consultation
                    </a>
                </li>
            </ul>

            <!-- Mobile Menu Button -->
            <button id="menuBtn" class="md:hidden focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-[#0a1f44] border-t border-gray-700">
        <ul class="flex flex-col px-6 py-4 space-y-4 text-sm">
            <li><a href="/" class="block hover:text-gray-300">Home</a></li>
            <li><a href="/about-us" class="block hover:text-gray-300">About</a></li>
            <li><a href="/services" class="block hover:text-gray-300">Services</a></li>
            <li><a href="/industries" class="block hover:text-gray-300">Industries</a></li>
            <li><a href="/blog" class="block hover:text-gray-300">Insights</a></li>
            <li><a href="/contact" class="block hover:text-gray-300">Contact</a></li>
            <li>
                <a href="/book-consultation"
                   class="block bg-white text-[#0a1f44] px-4 py-2 rounded-md text-center font-semibold">
                    Book Consultation
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Mobile Menu Toggle Script -->
<script>
    document.getElementById('menuBtn').addEventListener('click', function () {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });
</script>

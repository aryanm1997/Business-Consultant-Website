@extends('layouts.app')
@section('title','Contact Us')

@section('content')

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fadeIn {
    animation: fadeIn 0.6s forwards;
}
.animate-fade-in-up {
    animation: fadeIn 0.6s forwards;
}
.animate-fade-in-up.delay-200 { animation-delay: 0.2s; }
.animate-fade-in-up.delay-400 { animation-delay: 0.4s; }
</style>

<!-- Hero Section -->
<section class="py-32 bg-[#0a1f44] text-white text-center">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-bold leading-tight animate-fadeIn">
            Get in Touch With Us
        </h1>
        <p class="mt-6 text-lg max-w-2xl mx-auto animate-fadeIn" style="animation-delay: 0.2s">
            We’re here to answer your questions and provide the support you need. Reach out today!
        </p>
    </div>
</section>

<!-- Contact Form & Info Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 md:px-12 grid md:grid-cols-2 gap-12 items-start">
        
        <!-- Contact Form -->
        <div class="bg-white p-8 rounded-2xl shadow animate-fadeIn">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Send Us a Message</h2>
            <form action="" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Name</label>
                    <input type="text" name="name" required class="w-full border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-600 focus:outline-none">
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" name="email" required class="w-full border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-600 focus:outline-none">
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Message</label>
                    <textarea name="message" rows="5" required class="w-full border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-600 focus:outline-none"></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                    Send Message
                </button>
            </form>
        </div>

        <!-- Contact Info -->
        <div class="space-y-8 animate-fadeIn delay-200">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Contact Information</h2>
            <div>
                <p class="text-gray-700"><strong>Address:</strong> 123 Business Street, City, Country</p>
            </div>
            <div>
                <p class="text-gray-700"><strong>Phone:</strong> +1 234 567 890</p>
            </div>
            <div>
                <p class="text-gray-700"><strong>Email:</strong> info@business.com</p>
            </div>
            <div>
                <p class="text-gray-700"><strong>Office Hours:</strong> Mon - Fri, 9:00 AM - 6:00 PM</p>
            </div>
        </div>

    </div>
</section>

<!-- Map Section -->
<section class="py-20">
    <div class="container mx-auto px-6 md:px-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center animate-fadeIn">Find Us Here</h2>
        <div class="w-full h-96 rounded-xl overflow-hidden shadow animate-fadeIn delay-200">
            <iframe class="w-full h-full" 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.019123456789!2d-122.41941518468166!3d37.7749297797597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c0b0b0b0b%3A0x123456789abcdef!2sBusiness+Address!5e0!3m2!1sen!2sus!4v1699999999999" 
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

@endsection

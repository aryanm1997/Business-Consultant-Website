@extends('layouts.app')
@section('title','About Us')

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
.animate-fade-in-up.delay-200 {
    animation-delay: 0.2s;
}
</style>

<!-- Hero Section -->
<section class="py-32 bg-[#0a1f44] text-white text-center">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-bold leading-tight animate-fadeIn">
            About Our Company
        </h1>
        <p class="mt-6 text-lg max-w-2xl mx-auto animate-fadeIn" style="animation-delay: 0.2s">
            Helping businesses grow through strategic consulting, operational optimization, and data-driven decisions.
        </p>
        <a href="/book-consultation"
           class="mt-10 inline-block bg-white text-[#0a1f44] px-8 py-3 rounded font-semibold hover:bg-gray-100 transition animate-fadeIn"
           style="animation-delay: 0.4s">
            Book a Consultation
        </a>
    </div>
</section>

<!-- About Content Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 md:px-12 text-center max-w-4xl">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 animate-fadeIn">Who We Are</h2>
        <p class="text-gray-600 leading-relaxed animate-fadeIn" style="animation-delay: 0.2s">
            We are a team of experienced business consultants dedicated to helping companies achieve sustainable growth.
            Our expertise spans strategy, operations, and market expansion, enabling businesses to make informed decisions and optimize performance.
        </p>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 md:px-12 grid md:grid-cols-2 gap-10 text-center">
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition animate-fadeIn">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Our Mission</h3>
            <p class="text-gray-600">
                To empower businesses with innovative strategies and practical solutions that maximize growth and efficiency.
            </p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition animate-fadeIn delay-200">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Our Vision</h3>
            <p class="text-gray-600">
                To be the most trusted partner for businesses worldwide, known for excellence, integrity, and impactful results.
            </p>
        </div>
    </div>
</section>

<!-- Core Values Section -->
<section class="py-20 bg-white text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-12 animate-fadeIn">Our Values</h2>
    <div class="grid md:grid-cols-4 gap-6 max-w-5xl mx-auto">
        @foreach (['Integrity','Innovation','Collaboration','Excellence'] as $value)
            <div class="bg-gray-50 border rounded-lg p-6 font-medium text-gray-700 hover:shadow-lg transition transform hover:scale-105 animate-fadeIn"
                 style="animation-delay: {{ $loop->index * 100 }}ms">
                {{ $value }}
            </div>
        @endforeach
    </div>
</section>

<!-- CTA Section -->
<section class="bg-[#0a1f44] text-white py-16 text-center">
    <h2 class="text-3xl font-bold mb-6 animate-fadeIn">
        Ready to Transform Your Business?
    </h2>
    <a href="/book-consultation"
       class="inline-block bg-white text-[#0a1f44] px-8 py-3 rounded font-semibold hover:bg-gray-100 transition animate-fadeIn"
       style="animation-delay: 0.2s">
        Schedule a Consultation
    </a>
</section>

@endsection

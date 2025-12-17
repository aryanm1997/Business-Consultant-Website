@extends('layouts.app')
@section('title','Services')

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
.animate-fade-in-up.delay-400 {
    animation-delay: 0.4s;
}
</style>

<!-- Hero Section -->
<section class="py-32 bg-[#0a1f44] text-white text-center">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-bold leading-tight animate-fadeIn">
            Our Services
        </h1>
        <p class="mt-6 text-lg max-w-2xl mx-auto animate-fadeIn" style="animation-delay: 0.2s">
            We offer tailored solutions to help businesses grow, optimize operations, and succeed in a competitive market.
        </p>
        <a href="/book-consultation"
           class="mt-10 inline-block bg-white text-[#0a1f44] px-8 py-3 rounded font-semibold hover:bg-gray-100 transition animate-fadeIn"
           style="animation-delay: 0.4s">
            Book a Consultation
        </a>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 text-center max-w-5xl">
        <h2 class="text-3xl font-bold text-gray-800 mb-12 animate-fadeIn">What We Offer</h2>
        <div class="grid md:grid-cols-3 gap-8">
            @php
                $services = [
                    ['title' => 'Business Consulting', 'description' => 'Expert advice to streamline operations, increase efficiency, and drive growth.'],
                    ['title' => 'Strategy Planning', 'description' => 'Customized strategies to align your business goals with measurable outcomes.'],
                    ['title' => 'Digital Solutions', 'description' => 'Technology-driven solutions to enhance productivity and customer engagement.'],
                    ['title' => 'Market Research', 'description' => 'In-depth analysis to make data-driven decisions for business expansion.'],
                    ['title' => 'Operational Optimization', 'description' => 'Identify bottlenecks and improve processes for better efficiency.'],
                    ['title' => 'Training & Development', 'description' => 'Upskill teams with targeted programs for improved performance.'],
                ];
            @endphp

            @foreach($services as $index => $service)
                <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition transform hover:scale-105 animate-fadeIn"
                     style="animation-delay: {{ $index * 100 }}ms">
                    <div class="text-blue-600 mb-4">
                        <!-- Simple icon placeholder -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.1046 0 2-.8954 2-2s-.8954-2-2-2-2 .8954-2 2 .8954 2 2 2zM4 20v-2a4 4 0 014-4h8a4 4 0 014 4v2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ $service['title'] }}</h3>
                    <p class="text-gray-600">{{ $service['description'] }}</p>
                </div>
            @endforeach
        </div>
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

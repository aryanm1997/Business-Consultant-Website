@extends('layouts.app')
@section('title','Industries Served')

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
            Industries We Serve
        </h1>
        <p class="mt-6 text-lg max-w-2xl mx-auto animate-fadeIn" style="animation-delay: 0.2s">
            We provide tailored solutions to help businesses across various industries thrive and achieve their goals.
        </p>
        <a href="/book-consultation"
           class="mt-10 inline-block bg-white text-[#0a1f44] px-8 py-3 rounded font-semibold hover:bg-gray-100 transition animate-fadeIn"
           style="animation-delay: 0.4s">
            Book a Consultation
        </a>
    </div>
</section>

<!-- Industry Insights Section (Left-Right Layout) -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 md:px-12 grid md:grid-cols-2 gap-12 items-center">
        
        <!-- Left Column: Industry Icons -->
        <div class="grid grid-cols-3 gap-8 animate-fadeIn">
            @php
                $industryIcons = [
                    ['icon' => '💰', 'label' => 'Finance'],
                    ['icon' => '🏥', 'label' => 'Healthcare'],
                    ['icon' => '💻', 'label' => 'Technology'],
                    ['icon' => '🛒', 'label' => 'Retail'],
                    ['icon' => '🎓', 'label' => 'Education'],
                    ['icon' => '🏭', 'label' => 'Manufacturing'],
                ];
            @endphp

            @foreach($industryIcons as $ind)
                <div class="flex flex-col items-center text-center">
                    <div class="text-blue-600 text-5xl mb-2">{{ $ind['icon'] }}</div>
                    <span class="text-gray-700 font-medium">{{ $ind['label'] }}</span>
                </div>
            @endforeach
        </div>

        <!-- Right Column: Feature List & CTA -->
        <div class="text-left animate-fadeIn delay-200">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                Tailored Solutions for Every Industry
            </h2>
            <p class="text-gray-600 mb-6 leading-relaxed">
                Every industry has unique challenges and opportunities. Our team works closely with clients to understand their specific needs, providing customized strategies that deliver measurable results.
            </p>

            <ul class="space-y-6 text-gray-700">
                <li class="flex items-start gap-3">
                    <span class="text-blue-600 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </span>
                    <span>Industry-specific market research and insights</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-blue-600 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </span>
                    <span>Custom strategies to enhance growth and efficiency</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-blue-600 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </span>
                    <span>Data-driven solutions and digital transformation support</span>
                </li>
            </ul>

            <a href="/book-consultation"
               class="mt-8 inline-block bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Learn More
            </a>
        </div>

    </div>
</section>



<!-- CTA Section -->
<section class="bg-[#0a1f44] text-white py-16 text-center">
    <h2 class="text-3xl font-bold mb-6 animate-fadeIn">
        Ready to Elevate Your Industry Business?
    </h2>
    <a href="/book-consultation"
       class="inline-block bg-white text-[#0a1f44] px-8 py-3 rounded font-semibold hover:bg-gray-100 transition animate-fadeIn"
       style="animation-delay: 0.2s">
        Schedule a Consultation
    </a>
</section>

@endsection

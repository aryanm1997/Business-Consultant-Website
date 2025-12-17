@extends('layouts.app')
@section('title','Insights')

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
            Insights & Thought Leadership
        </h1>
        <p class="mt-6 text-lg max-w-2xl mx-auto animate-fadeIn" style="animation-delay: 0.2s">
            Explore our latest research, articles, and industry insights to stay ahead of business trends.
        </p>
        <a href="/contact"
           class="mt-10 inline-block bg-white text-[#0a1f44] px-8 py-3 rounded font-semibold hover:bg-gray-100 transition animate-fadeIn"
           style="animation-delay: 0.4s">
            Get in Touch
        </a>
    </div>
</section>

<!-- Insights Grid Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 md:px-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-12 text-center animate-fadeIn">Latest Insights</h2>

        <div class="grid md:grid-cols-3 gap-8">
            @php
                $insights = [
                    ['title' => 'Optimizing Business Operations in 2025', 'excerpt' => 'Discover strategies to improve efficiency and performance across industries.', 'image' => 'insight1.webp'],
                    ['title' => 'Digital Transformation Trends', 'excerpt' => 'Key digital trends that are reshaping the business landscape.', 'image' => 'insight2.webp'],
                    ['title' => 'Market Analysis & Growth Opportunities', 'excerpt' => 'Insights into emerging markets and growth strategies.', 'image' => 'insight3.webp'],
                ];
            @endphp

            @foreach($insights as $index => $insight)
                <div class="bg-white rounded-2xl shadow hover:shadow-lg transition transform hover:scale-105 animate-fadeIn"
                     style="animation-delay: {{ $index * 100 }}ms">
                    <img src="{{ asset('images/'.$insight['image']) }}" alt="{{ $insight['title'] }}" class="rounded-t-2xl w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">{{ $insight['title'] }}</h3>
                        <p class="text-gray-600 mb-4">{{ $insight['excerpt'] }}</p>
                        <a href="/insights/{{ Str::slug($insight['title']) }}"
                           class="text-blue-600 font-semibold hover:underline">
                            Read More
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-[#0a1f44] text-white py-16 text-center">
    <h2 class="text-3xl font-bold mb-6 animate-fadeIn">
        Want to Stay Updated with Industry Insights?
    </h2>
    <a href="/subscribe"
       class="inline-block bg-white text-[#0a1f44] px-8 py-3 rounded font-semibold hover:bg-gray-100 transition animate-fadeIn"
       style="animation-delay: 0.2s">
        Subscribe Now
    </a>
</section>

@endsection

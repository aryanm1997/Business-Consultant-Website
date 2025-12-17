@extends('layouts.app')
@section('title','Home')

@section('content')
<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fadeIn { animation: fadeIn 0.6s forwards; }
.animate-fade-in-up { animation: fadeIn 0.6s forwards; }
.animate-fade-in-up.delay-200 { animation-delay: 0.2s; }
.animate-fade-in-up.delay-400 { animation-delay: 0.4s; }
.animate-fade-in-up.delay-600 { animation-delay: 0.6s; }
</style>

<!-- Hero Section -->
<section class="bg-[#0a1f44] text-white py-32 text-center">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-bold animate-fadeIn">
            Strategic Business Consulting
        </h1>
        <p class="mt-4 text-lg max-w-2xl mx-auto animate-fadeIn delay-200">
            Helping businesses scale, optimize operations, and achieve sustainable growth through expert guidance.
        </p>
        <a href="/contact-us"
           class="mt-8 inline-block bg-white text-[#0a1f44] px-8 py-3 rounded font-semibold hover:bg-gray-100 transition animate-fadeIn delay-400">
            Book a Consultation
        </a>
    </div>
</section>

<!-- About Preview -->
<!-- About Section (Left Content, Right Image) -->
<section class="py-2 bg-white">
    <div class="container mx-auto px-4 lg:px-15 grid md:grid-cols-2 gap-9 items-center">
        
        <!-- Left Content -->
        <div class="animate-fade-in-up">
            <span class="text-sm uppercase tracking-widest text-[#0a1f44] font-semibold">About Us</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mt-4 leading-tight">
                Trusted Advisors for Forward-Thinking Businesses
            </h2>
            <p class="mt-6 text-gray-600 leading-relaxed max-w-lg">
                With over a decade of consulting experience, we partner with leadership teams
                to deliver data-driven strategies, optimize operations, and achieve measurable business results.
            </p>
            <a href="/about-us" 
               class="inline-flex items-center mt-8 text-white bg-[#0a1f44] px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Learn More
                <span class="ml-3 flex items-center justify-center w-8 h-8 rounded-full bg-white text-[#0a1f44] group-hover:bg-blue-500 group-hover:text-white transition-all duration-300">→</span>
            </a>
        </div>

        <!-- Right Image -->
        <div class="animate-fade-in-up delay-200">
            <img src="{{ asset('images/about-us-image.webp') }}" 
                 alt="About Us Illustration" 
                 class="rounded-2xl w-full object-cover">
        </div>

    </div>
</section>


<!-- Services Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-800 animate-fadeIn">Our Core Services</h2>
        <p class="mt-4 text-gray-600 max-w-xl mx-auto animate-fadeIn delay-200">
            Tailored consulting services designed to meet your business goals.
        </p>
        <div class="mt-10 grid md:grid-cols-3 gap-8">
            @php
            $services = [
                ['title'=>'Strategy Consulting','desc'=>'Data-driven strategies to guide long-term growth.','icon'=>'💼'],
                ['title'=>'Operations Optimization','desc'=>'Improve efficiency and reduce operational costs.','icon'=>'⚙️'],
                ['title'=>'Market Expansion','desc'=>'Identify opportunities and scale into new markets.','icon'=>'📊'],
            ];
            @endphp

            @foreach($services as $index => $service)
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition transform hover:scale-105 animate-fadeIn" style="animation-delay: {{ $index*150 }}ms">
                <div class="text-4xl mb-4">{{ $service['icon'] }}</div>
                <h3 class="font-semibold text-lg text-gray-800">{{ $service['title'] }}</h3>
                <p class="mt-2 text-gray-600">{{ $service['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Industries Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 text-center">
        <span class="text-sm uppercase tracking-wider text-[#0a1f44] font-semibold">Industries</span>
        <h2 class="mt-3 text-3xl font-bold text-gray-800 animate-fadeIn">Industries We Serve</h2>
        <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
            @foreach(['Finance','Technology','Healthcare','Manufacturing'] as $index => $industry)
                <div class="border rounded-lg py-6 font-medium text-gray-700 transform transition duration-500 ease-in-out hover:border-[#0a1f44] hover:scale-105 opacity-0 animate-fadeIn" style="animation-delay: {{ $index*150 }}ms">
                    {{ $industry }}
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Insights Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold animate-fadeIn">Latest Insights</h2>
        <div class="mt-10 grid md:grid-cols-3 gap-8">
            @php
            $insights = [
                ['title'=>'Optimizing Business Operations','excerpt'=>'Strategies to improve efficiency across industries','image'=>'insight1.webp'],
                ['title'=>'Digital Transformation Trends','excerpt'=>'Key trends reshaping the business landscape','image'=>'insight2.webp'],
                ['title'=>'Market Analysis & Growth','excerpt'=>'Insights into emerging markets and opportunities','image'=>'insight3.webp'],
            ];
            @endphp

            @foreach($insights as $index => $insight)
            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition transform hover:scale-105 animate-fadeIn" style="animation-delay: {{ $index*150 }}ms">
                <img src="{{ asset('images/'.$insight['image']) }}" alt="{{ $insight['title'] }}" class="rounded-t-2xl w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">{{ $insight['title'] }}</h3>
                    <p class="text-gray-600 mb-4">{{ $insight['excerpt'] }}</p>
                    <a href="/insights/{{ Str::slug($insight['title']) }}" class="text-blue-600 font-semibold hover:underline">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-800 animate-fadeIn">What Our Clients Say</h2>
        <div class="mt-10 max-w-3xl mx-auto bg-gray-50 p-8 rounded-2xl shadow animate-fadeIn delay-200">
            <p class="text-gray-600 italic">“Their strategic insights helped us streamline operations and increase profitability.”</p>
            <p class="mt-4 font-semibold text-gray-800">— CEO, GrowthTech Solutions</p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-[#0a1f44] text-white text-center">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold animate-fadeIn">Ready to Transform Your Business?</h2>
        <a href="/book-consultation" class="mt-6 inline-block bg-white text-[#0a1f44] px-8 py-3 rounded font-semibold hover:bg-gray-100 transition animate-fadeIn delay-200">
            Schedule a Consultation
        </a>
    </div>
</section>

@endsection

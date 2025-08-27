@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto px-6 py-12">
        <h1 class="text-3xl font-bold text-blue-600 text-center mb-12">About Us</h1>

        {{-- Section 1 --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-16">
            <!-- Image -->
            <div>
                <img src="{{ asset('images/aboutus1.png') }}" alt="Our Mission" class="w-full rounded-lg shadow-lg">
            </div>
            <!-- Text -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Welcome To H & C</h2>
                <p class="text-gray-600">
                    H&C envisions to provide a wide range of authentic Indian herbs and Ayurveda products, which are made
                    with 100% natural ingredients, without any addition of chemicals or preservatives.
                    All its products are made using sustainably sourced and quality tested ingredients. Their expertise in
                    herbal ingredients is what makes them “HERBAL INGREDINETS EXPERT”
                </p>
            </div>
        </div>

        {{-- Section 2 --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-16">
            <!-- Text -->
            <div>
                <p class="mb-4">
                    Our Facility is <strong>GMP Certified</strong> and follows all the <strong>ISO 9001:2015</strong>
                    compliances.
                    Some of the quality certifications we have are:
                </p>

                <ul class="list-disc list-inside space-y-1">
                    <li>GMP (Good Manufacturing Practice)</li>
                    <li>Kosher (from KLBD)</li>
                    <li>Halal (from Halal India)</li>
                    <li>FSSAI (Food Safety Standards Authority of India)</li>
                </ul>

                <p class="mt-4">
                    Our facility is also registered with <strong>USFDA</strong> as a foreign facility.
                </p>
            </div>
            <!-- Image -->
            <div>
                <img src="{{ asset('images/aboutus2.png') }}" alt="Our Vision" class="w-full rounded-lg shadow-lg">
            </div>
        </div>

        {{-- Section 3 --}}
        <div class="text-gray-600 space-y-4">
            <!-- Section: Who we are -->
            <h2 class="text-2xl font-semibold text-gray-800">Who We Are?</h2>
            <p>
                Started in 2013 as an exporter dealing in natural herbs used for hair care product formulations.
                Our main focus has always been on sourcing and exporting the highest quality of herbs to manufacturers and
                formulators of natural products.
            </p>
            <p>
                With a root-level experience of over 6 years, we have now expanded in multi-folds, serving more than 7
                industries with our wide range of products for different applications.
            </p>
            <p>
                With a successful track record and expertise in the field, we continue to deliver trusted solutions
                worldwide.
            </p>

            <!-- Section: Disclaimer -->
            <h2 class="text-xl font-semibold text-red-600 mt-6">Disclaimer</h2>
            <p>
                The information contained on this website has not been evaluated by the Food and Drug Administration.
                These products are not intended to diagnose, treat, cure, or prevent any disease.
            </p>
            <p>
                If medical attention is indicated, please contact a health professional. Information may have errors or may
                be outdated.
                Some information is from historical sources or represents the opinions of the author.
                The user assumes all risk of use, damage, or injury. We are not liable for any consequential issues.
            </p>
        </div>

    </div>
@endsection

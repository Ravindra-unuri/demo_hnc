@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-6 py-12">
        <h1 class="text-3xl font-bold text-blue-600 text-center mb-10">Contact Us</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <!-- Left Section: Contact Info + Map -->
            <div class="space-y-6">
                <div>
                    <h2 class="text-2xl font-bold mb-3">Get in touch with us & send us a message today!</h2>
                    <p class="text-gray-700">
                        Herbs & Crops Private Limited <br>
                        B/56 Sumel-5, Near Chamanpura Circle, <br>
                        Asarwa, Ahmedabad - 380016, India
                    </p>
                    <p class="mt-3"><strong>Email:</strong>
                        <a href="mailto:eshop.hnw@gmail.com" class="text-blue-600">eshop.hnw@gmail.com</a>
                    </p>
                    <p><strong>Phone:</strong> 9081697971</p>
                </div>

                <!-- Map Embed -->
                <div class="w-full h-64 rounded-lg overflow-hidden shadow">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229.46446956894425!2d72.61255302152988!3d23.04463641427141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8541eaacc0b9%3A0x8c681ef71d462c1c!2sH%26C%20Distributors%20Private%20Limited!5e0!3m2!1sen!2sin!4v1756358531535!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- Right Section: Contact Form -->
            <div>
                <form action="#" method="POST" class="bg-white p-6 rounded-lg shadow space-y-4">
                    @csrf
                    <input type="text" name="name" placeholder="Your Name"
                        class="w-full border p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">

                    <input type="email" name="email" placeholder="Your Email"
                        class="w-full border p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">

                    <input type="text" name="phone" placeholder="Phone Number"
                        class="w-full border p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">

                    <textarea name="message" placeholder="Your Message" rows="5"
                        class="w-full border p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>

                    <button type="submit"
                        class="bg-green-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-600">
                        Send Message
                    </button>
                </form>
            </div>

        </div>
    </div>
@endsection

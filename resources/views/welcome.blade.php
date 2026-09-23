<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmad Gilbran - Teknisi Jaringan & Fiber Optik</title>
    
    <!-- Meta SEO & Social Media (Preview WhatsApp & LinkedIn) -->
    <meta name="description" content="Portofolio Ahmad Gilbran - Pelajar TKJ & Teknisi Jaringan berpengalaman dalam Fiber Optik, OTDR, dan Troubleshooting Jaringan.">
    <meta property="og:title" content="Ahmad Gilbran - Portfolio Teknisi Jaringan">
    <meta property="og:description" content="Lihat pengalaman PKL, proyek Fiber Optik, dan pencapaian LKS Ahmad Gilbran.">
    <meta property="og:image" content="{{ asset('images/splicing.jpeg') }}">
    <meta property="og:url" content="https://portofolio-gilbran-production.up.railway.app/">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Tailwind CSS & Lucide Icons -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        .fade-in { animation: fadeIn 1s ease-in; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 antialiased selection:bg-black selection:text-white">

    <!-- Navbar -->
    <nav class="fixed w-full bg-white/90 backdrop-blur-sm border-b border-gray-100 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="text-xl font-bold tracking-tighter">AGA.</a>
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#about" class="text-gray-600 hover:text-black transition">Tentang Saya</a>
                    <a href="#skills" class="text-gray-600 hover:text-black transition">Keahlian</a>
                    <a href="#experience" class="text-gray-600 hover:text-black transition">Pengalaman</a>
                    <a href="#contact" class="px-5 py-2 bg-black text-white rounded hover:bg-gray-800 transition">Hubungi Saya</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="pt-32 pb-20 px-4 min-h-screen flex items-center fade-in">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-5xl md:text-7xl font-bold tracking-tight mb-4">
                AHMAD GILBRAN AL ANSHARY
            </h1>
            <p class="text-xl md:text-2xl text-gray-500 font-light mb-8">
                Pelajar TKJ | Fiber Optik | Network Troubleshooting
            </p>
            <p class="max-w-2xl mx-auto text-gray-600 mb-10">
                Saya adalah pelajar SMK Muhammadiyah 2 Kota Kediri yang memiliki ketertarikan pada jaringan komputer, fiber optik, splicing, dan troubleshooting jaringan.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
    <a href="#about" class="px-8 py-3 border border-black text-black font-medium rounded">Tentang Saya</a>
    <a href="#contact" class="px-8 py-3 bg-black text-white font-medium rounded">Hubungi Saya</a>
    
    <!-- TOMBOL UNDUH CV -->
    <a href="{{ asset('cv-ahmad-gilbran.pdf') }}" download class="px-8 py-3 bg-emerald-600 text-white font-medium rounded hover:bg-emerald-700 transition inline-flex items-center justify-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg>
        <span>Unduh CV</span>
    </a>
        </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8">Tentang Saya</h2>
            <p class="text-gray-600 text-lg leading-relaxed mb-10">
                Saya merupakan pelajar jurusan Teknik Komputer dan Jaringan yang memiliki ketertarikan pada dunia jaringan komputer dan teknologi. Saya memiliki pengalaman belajar dan praktik dalam fiber optik, splicing, serta troubleshooting jaringan. Saya terus mengembangkan kemampuan teknis dan pengalaman untuk meningkatkan kompetensi di bidang teknologi jaringan.
            </p>
            <div class="inline-block text-left bg-gray-50 p-6 rounded-lg border border-gray-100 shadow-sm w-full md:w-auto">
                <ul class="space-y-3 text-gray-700">
                    <li><strong>Nama:</strong> Ahmad Gilbran Al Anshary</li>
                    <li><strong>Status:</strong> Pelajar</li>
                    <li><strong>Sekolah:</strong> SMK Muhammadiyah 2 Kota Kediri</li>
                    <li><strong>Jurusan:</strong> Teknik Komputer dan Jaringan (TKJ)</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Keahlian</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Skill 1 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition hover:-translate-y-1">
                    <i data-lucide="cable" class="w-8 h-8 mb-4 text-black"></i>
                    <h3 class="font-semibold text-lg mb-2">Fiber Optik</h3>
                    <p class="text-gray-500 text-sm">Instalasi dan pemahaman mendalam mengenai infrastruktur jaringan fiber optik.</p>
                </div>
                <!-- Skill 2 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition hover:-translate-y-1">
                    <i data-lucide="plug" class="w-8 h-8 mb-4 text-black"></i>
                    <h3 class="font-semibold text-lg mb-2">Splicing</h3>
                    <p class="text-gray-500 text-sm">Kemampuan melakukan penyambungan kabel fiber optik menggunakan splicer.</p>
                </div>
                <!-- Skill 3 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition hover:-translate-y-1">
                    <i data-lucide="activity" class="w-8 h-8 mb-4 text-black"></i>
                    <h3 class="font-semibold text-lg mb-2">Network Troubleshooting</h3>
                    <p class="text-gray-500 text-sm">Analisis dan perbaikan masalah konektivitas pada jaringan komputer.</p>
                </div>
                <!-- Skill 4 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition hover:-translate-y-1">
                    <i data-lucide="network" class="w-8 h-8 mb-4 text-black"></i>
                    <h3 class="font-semibold text-lg mb-2">Computer Networking</h3>
                    <p class="text-gray-500 text-sm">Konfigurasi dasar dan menengah untuk topologi jaringan LAN/WAN.</p>
                </div>
            </div>
        </div>
    </section>

   <!-- Experience & Achievement Section -->
<section id="experience" class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Experience -->
        <div>
            <h2 class="text-3xl font-bold mb-8 flex items-center gap-2">
                <i data-lucide="briefcase" class="w-6 h-6"></i> Pengalaman
            </h2>
            <div class="border-l-2 border-gray-200 pl-6 relative space-y-6">
                <div>
                    <div class="absolute w-3 h-3 bg-black rounded-full -left-[7px] top-2"></div>
                    <h3 class="font-bold text-xl">PT Jatara</h3>
                    <p class="text-gray-500 text-sm mb-2">Praktik Kerja Lapangan (PKL) • Teknisi Jaringan</p>
                    <ul class="list-disc list-inside text-gray-600 space-y-1 text-sm mt-2">
                        <li>Penyambungan serat optik (*Fusion Splicing*) & pengukuran OTDR.</li>
                        <li>*Troubleshooting* & perbaikan instalasi kabel LAN / Fiber Optik.</li>
                        <li>Pemasangan & konfigurasi perangkat ONT pelanggan.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Achievement -->
        <div>
            <h2 class="text-3xl font-bold mb-8 flex items-center gap-2">
                <i data-lucide="award" class="w-6 h-6"></i> Prestasi
            </h2>
            <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                <h3 class="font-bold text-xl mb-1">Juara Lomba Kompetensi Siswa (LKS)</h3>
                <p class="text-gray-500 text-sm mb-3">Bidang Teknik Komputer & Jaringan</p>
                <ul class="list-disc list-inside text-gray-600 space-y-1 text-sm">
                    <li>Desain & simulasi topologi jaringan.</li>
                    <li>Pengkabelan terstruktur (*Structured Cabling*).</li>
                    <li>Konfigurasi routing & *network security*.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Gallery / Projects Section -->
<section id="projects" class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-4 flex items-center justify-center gap-2">
            <i data-lucide="image" class="w-6 h-6"></i> Galeri Kegiatan & Proyek
        </h2>
        <p class="text-gray-500 text-center mb-12">Dokumentasi hasil praktikum, kompetisi, dan kegiatan lapangan.</p>

        <div class="grid md:grid-cols-3 gap-6">
            <!-- Foto 1: Splicing -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-md transition">
                <img src="{{ asset('images/splicing.jpeg') }}" alt="Penyambungan Serat Optik" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h4 class="font-bold text-lg mb-1">Penyambungan Serat Optik</h4>
                    <p class="text-gray-600 text-sm">Praktikum penyambungan kabel fiber optik menggunakan Fusion Splicer dengan presisi tinggi.</p>
                </div>
            </div>

            <!-- Foto 2: OTDR -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-md transition">
                <img src="{{ asset('images/otdr.jpeg') }}" alt="Pengujian OTDR" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h4 class="font-bold text-lg mb-1">Pengujian Redaman OTDR</h4>
                    <p class="text-gray-600 text-sm">Pengujian dan analisis kualitas saluran kabel fiber optik untuk memastikan sinyal stabil.</p>
                </div>
            </div>

            <!-- Foto 3: LKS -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-md transition">
                <img src="{{ asset('images/lks.jpeg') }}" alt="Kompetisi LKS TKJ" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h4 class="font-bold text-lg mb-1">Kompetisi LKS TKJ</h4>
                    <p class="text-gray-600 text-sm">Dokumentasi penerimaan kejuaraan LKS bidang teknik jaringan komputer.</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Mari Berdiskusi</h2>
            <p class="text-gray-500 mb-12">Silakan hubungi saya untuk keperluan profesional atau diskusi jaringan.</p>
            
            <form class="max-w-lg mx-auto text-left space-y-4 bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                <div>
                    <label class="block text-sm font-medium mb-1">Nama Lengkap</label>
                    <input type="text" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-black focus:outline-none" placeholder="Masukkan nama Anda">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-black focus:outline-none" placeholder="Masukkan email Anda">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Pesan</label>
                    <textarea rows="4" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-black focus:outline-none" placeholder="Tuliskan pesan Anda di sini..."></textarea>
                </div>
                <button type="button" onclick="alert('Ini adalah versi preview. Fitur form memerlukan setup backend Laravel.')" class="w-full bg-black text-white py-3 rounded-lg hover:bg-gray-800 transition font-medium">Kirim Pesan</button>
            </form>

            <div class="mt-12 flex justify-center space-x-6">
                <!-- Tombol WhatsApp dengan kode negara Indonesia -->
                <a href="https://wa.me/6285946300565" target="_blank" class="flex items-center gap-2 bg-[#25D366] text-white px-6 py-3 rounded-full hover:bg-green-600 transition shadow-sm">
                    <i data-lucide="message-circle" class="w-5 h-5"></i>
                    <span class="font-medium">WhatsApp</span>
                </a>
                <!-- Link Instagram -->
                <a href="https://www.instagram.com/agill06__/" target="_blank" class="flex items-center gap-2 bg-gradient-to-tr from-yellow-400 to-purple-600 text-white px-6 py-3 rounded-full hover:opacity-90 transition shadow-sm">
                    <i data-lucide="instagram" class="w-5 h-5"></i>
                    <span class="font-medium">Instagram</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
<footer class="bg-gray-900 text-white py-8 border-t border-gray-800">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <p class="text-gray-400 text-sm">
            &copy; {{ date('Y') }} <span class="text-white font-semibold">Ahmad Gilbran</span>. All rights reserved.
        </p>
        <p class="text-gray-500 text-xs mt-2">
            Built with Laravel & Tailwind CSS
        </p>
    </div>
</footer>

    <script>
        // Render ikon Lucide
        lucide.createIcons();
    </script>
</body>
</html>
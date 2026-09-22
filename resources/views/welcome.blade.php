<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmad Gilbran Al Anshary | Portfolio</title>
    <meta name="description" content="Portfolio Ahmad Gilbran Al Anshary, pelajar Teknik Komputer dan Jaringan yang memiliki minat pada fiber optik, splicing, dan network troubleshooting.">
    <!-- Tailwind CSS via CDN untuk kemudahan langsung jalan -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
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
                <a href="#about" class="px-8 py-3 border border-black text-black font-medium rounded hover:bg-gray-100 transition">Tentang Saya</a>
                <a href="#contact" class="px-8 py-3 bg-black text-white font-medium rounded hover:bg-gray-800 transition shadow-lg">Hubungi Saya</a>
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
                <div class="border-l-2 border-gray-200 pl-6 relative">
                    <div class="absolute w-3 h-3 bg-black rounded-full -left-[7px] top-2"></div>
                    <h3 class="font-bold text-xl">PT Jatara</h3>
                    <p class="text-gray-500 text-sm mb-2">Praktik Kerja / Pengalaman Industri</p>
                </div>
            </div>
            <!-- Achievement -->
            <div>
                <h2 class="text-3xl font-bold mb-8 flex items-center gap-2">
                    <i data-lucide="award" class="w-6 h-6"></i> Prestasi
                </h2>
                <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                    <div class="flex items-start gap-4">
                        <div class="bg-black p-3 rounded-lg text-white">
                            <i data-lucide="medal" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Juara 1 LKS Tingkat Kabupaten</h3>
                            <p class="text-gray-500 text-sm mt-1">Lomba Kompetensi Siswa bidang IT / Jaringan.</p>
                        </div>
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
                <a href="https://wa.me/6281200000000" target="_blank" class="flex items-center gap-2 bg-[#25D366] text-white px-6 py-3 rounded-full hover:bg-green-600 transition shadow-sm">
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

    <!-- Footer -->
    <footer class="bg-black text-white py-8 text-center text-sm text-gray-400">
        <p>&copy; 2026 Ahmad Gilbran Al Anshary. Dibuat menggunakan Laravel & Tailwind CSS.</p>
    </footer>

    <script>
        // Render ikon Lucide
        lucide.createIcons();
    </script>
</body>
</html>
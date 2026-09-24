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

    <!-- NAVBAR -->
    <nav class="fixed w-full bg-white/90 backdrop-blur-sm border-b border-gray-100 z-40">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="font-bold text-xl tracking-tight">GILBRAN.</span>
                </div>
                <div class="hidden md:flex items-center space-x-8 text-sm font-medium text-gray-600">
                    <a href="#about" class="hover:text-black transition">Tentang Saya</a>
                    <a href="#experience" class="hover:text-black transition">Pengalaman</a>
                    <a href="#tools" class="hover:text-black transition">Tools</a>
                    <a href="#certifications" class="hover:text-black transition">Sertifikasi</a>
                    <a href="#projects" class="hover:text-black transition">Galeri</a>
                    <a href="https://wa.me/6281234567890" target="_blank" class="px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition">Hubungi Saya</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="about" class="pt-32 pb-20 px-4">
        <div class="max-w-4xl mx-auto text-center fade-in">
            <span class="px-3 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full uppercase tracking-wider">Teknik Komputer & Jaringan</span>
            <h1 class="text-4xl sm:text-6xl font-extrabold text-gray-900 mt-6 tracking-tight">
                Ahmad Gilbran
            </h1>
            <p class="mt-4 text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Spesialis Jaringan Komputer, Fiber Optik (*Fusion Splicing* & OTDR), serta Konfigurasi Router & Switch.
            </p>
            
            <!-- Tombol Action Hero -->
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a href="{{ asset('cv-ahmad-gilbran.pdf') }}" download class="px-8 py-3 bg-black text-white font-medium rounded-xl hover:bg-gray-800 transition flex items-center gap-2">
                    <i data-lucide="download" class="w-5 h-5"></i> Unduh CV
                </a>
                <button onclick="openCvModal()" class="px-8 py-3 border border-gray-300 text-gray-800 font-medium rounded-xl hover:bg-gray-100 transition flex items-center gap-2">
                    <i data-lucide="eye" class="w-5 h-5"></i> Intip CV
                </button>
            </div>
        </div>
    </section>

    <!-- EXPERIENCE & ACHIEVEMENT SECTION -->
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

    <!-- TOOLS SECTION -->
    <section id="tools" class="py-16 bg-white border-t border-gray-100">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8 flex items-center justify-center gap-2">
                <i data-lucide="wrench" class="w-6 h-6"></i> Perangkat & Tools Utama
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex items-center gap-3">
                    <i data-lucide="cable" class="w-6 h-6 text-blue-600"></i>
                    <span class="font-semibold text-sm">Fusion Splicer</span>
                </div>
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex items-center gap-3">
                    <i data-lucide="activity" class="w-6 h-6 text-emerald-600"></i>
                    <span class="font-semibold text-sm">OTDR Meter</span>
                </div>
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex items-center gap-3">
                    <i data-lucide="router" class="w-6 h-6 text-indigo-600"></i>
                    <span class="font-semibold text-sm">MikroTik Router</span>
                </div>
                <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex items-center gap-3">
                    <i data-lucide="terminal" class="w-6 h-6 text-gray-800"></i>
                    <span class="font-semibold text-sm">Linux / CLI</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CERTIFICATIONS SECTION -->
    <section id="certifications" class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8 flex items-center justify-center gap-2">
                <i data-lucide="file-check" class="w-6 h-6"></i> Sertifikasi & Lisensi
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="p-6 bg-white rounded-xl border border-gray-200 flex justify-between items-center shadow-sm">
                    <div>
                        <h3 class="font-bold text-lg">Sertifikat PKL PT Jatara</h3>
                        <p class="text-sm text-gray-500">Teknisi Jaringan & Fiber Optik</p>
                    </div>
                    <button onclick="openCvModal()" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-sm font-medium rounded-lg text-gray-700 transition">Lihat Dokumen</button>
                </div>
                <div class="p-6 bg-white rounded-xl border border-gray-200 flex justify-between items-center shadow-sm">
                    <div>
                        <h3 class="font-bold text-lg">Sertifikat Kejuaraan LKS</h3>
                        <p class="text-sm text-gray-500">Kompetensi Teknik Komputer & Jaringan</p>
                    </div>
                    <button onclick="openCvModal()" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-sm font-medium rounded-lg text-gray-700 transition">Lihat Dokumen</button>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY SECTION WITH FILTER -->
    <section id="projects" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 flex items-center justify-center gap-2">
                <i data-lucide="image" class="w-6 h-6"></i> Galeri Kegiatan & Proyek
            </h2>
            <p class="text-gray-500 text-center mb-8">Dokumentasi hasil praktikum, kompetisi, dan kegiatan lapangan.</p>

            <!-- Filter Buttons -->
            <div class="flex justify-center gap-3 mb-10">
                <button onclick="filterGallery('all', this)" class="filter-btn px-5 py-2 rounded-full text-sm font-medium bg-black text-white border border-black transition">Semua</button>
                <button onclick="filterGallery('fiber', this)" class="filter-btn px-5 py-2 rounded-full text-sm font-medium bg-gray-100 text-gray-700 border border-gray-200 hover:bg-gray-200 transition">Fiber Optik</button>
                <button onclick="filterGallery('lks', this)" class="filter-btn px-5 py-2 rounded-full text-sm font-medium bg-gray-100 text-gray-700 border border-gray-200 hover:bg-gray-200 transition">Kompetisi LKS</button>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Foto 1: Splicing -->
                <div class="gallery-item fiber bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-md transition">
                    <img src="{{ asset('images/splicing.jpeg') }}" alt="Penyambungan Serat Optik" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <h4 class="font-bold text-lg mb-1">Penyambungan Serat Optik</h4>
                        <p class="text-gray-600 text-sm">Praktikum penyambungan kabel fiber optik menggunakan Fusion Splicer dengan presisi tinggi.</p>
                    </div>
                </div>

                <!-- Foto 2: OTDR -->
                <div class="gallery-item fiber bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-md transition">
                    <img src="{{ asset('images/otdr.jpeg') }}" alt="Pengujian OTDR" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <h4 class="font-bold text-lg mb-1">Pengujian Redaman OTDR</h4>
                        <p class="text-gray-600 text-sm">Pengujian dan analisis kualitas saluran kabel fiber optik untuk memastikan sinyal stabil.</p>
                    </div>
                </div>

                <!-- Foto 3: LKS -->
                <div class="gallery-item lks bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-md transition">
                    <img src="{{ asset('images/lks.jpeg') }}" alt="Kompetisi LKS TKJ" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <h4 class="font-bold text-lg mb-1">Kompetisi LKS TKJ</h4>
                        <p class="text-gray-600 text-sm">Dokumentasi pengerjaan modul ujian LKS bidang teknik jaringan komputer.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
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

    <!-- MODAL PREVIEW CV -->
    <div id="cvModal" class="fixed inset-0 bg-black/70 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl w-full max-w-4xl h-[85vh] flex flex-col overflow-hidden shadow-2xl relative">
            <div class="p-4 border-b flex justify-between items-center bg-gray-50">
                <h3 class="font-bold text-gray-800">Pratinjau CV - Ahmad Gilbran</h3>
                <button onclick="closeCvModal()" class="p-2 hover:bg-gray-200 rounded-full transition">
                    <i data-lucide="x" class="w-6 h-6 text-gray-600"></i>
                </button>
            </div>
            <div class="flex-1">
                <iframe src="{{ asset('cv-ahmad-gilbran.pdf') }}" class="w-full h-full"></iframe>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Modal Handlers
        function openCvModal() {
            document.getElementById('cvModal').classList.remove('hidden');
        }

        function closeCvModal() {
            document.getElementById('cvModal').classList.add('hidden');
        }

        // Gallery Filter Handler
        function filterGallery(category, btnElement) {
            const items = document.querySelectorAll('.gallery-item');
            const buttons = document.querySelectorAll('.filter-btn');

            buttons.forEach(btn => {
                btn.className = "filter-btn px-5 py-2 rounded-full text-sm font-medium bg-gray-100 text-gray-700 border border-gray-200 hover:bg-gray-200 transition";
            });

            btnElement.className = "filter-btn px-5 py-2 rounded-full text-sm font-medium bg-black text-white border border-black transition";

            items.forEach(item => {
                if (category === 'all' || item.classList.contains(category)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
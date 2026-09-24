<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmad Gilbran - Network & Fiber Optik Specialist</title>

    <!-- Meta SEO & Social Media -->
    <meta name="description" content="Portofolio Ahmad Gilbran - Specialist Network, Fiber Optik Splicing, OTDR, & Troubleshooting Jaringan di Kediri & Sekitarnya.">
    <meta property="og:title" content="Ahmad Gilbran - Network Specialist Portfolio">
    <meta property="og:description" content="Eksplorasi pengalaman PKL PT Jatara, Sertifikasi, Proyek Jaringan, dan Dokumentasi Praktikum Fiber Optik Ahmad Gilbran.">
    <meta property="og:image" content="{{ asset('images/splicing.jpeg') }}">
    <meta property="og:url" content="https://portofolio-gilbran-production.up.railway.app/">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Tailwind CSS & Lucide Icons -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            500: '#0284c7',
                            600: '#0284c7',
                            700: '#0369a1',
                        }
                    }
                }
            }
        }
    </script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glow-effect {
            background: radial-gradient(circle at 50% 20%, rgba(14, 165, 233, 0.15) 0%, rgba(255, 255, 255, 0) 70%);
        }
        .dark .glow-effect {
            background: radial-gradient(circle at 50% 20%, rgba(14, 165, 233, 0.2) 0%, rgba(15, 23, 42, 0) 70%);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 dark:bg-slate-950 dark:text-slate-100 antialiased selection:bg-sky-500 selection:text-white transition-colors duration-300 min-h-screen flex flex-col">

    <!-- TOAST NOTIFICATION -->
    <div id="toast" class="fixed bottom-6 right-6 z-50 transform translate-y-20 opacity-0 transition-all duration-300 pointer-events-none flex items-center gap-3 bg-slate-900 text-white dark:bg-white dark:text-slate-900 px-5 py-3 rounded-2xl shadow-2xl border border-slate-700/50">
        <i data-lucide="check-circle-2" class="w-5 h-5 text-emerald-400 dark:text-emerald-600"></i>
        <span id="toast-message" class="text-sm font-semibold">Teks berhasil disalin!</span>
    </div>

    <!-- NAVBAR -->
    <nav class="fixed top-0 left-0 right-0 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-slate-200/80 dark:border-slate-800/80 z-40 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="#" class="font-extrabold text-lg tracking-tight flex items-center gap-2 group">
                    <div class="w-8 h-8 rounded-xl bg-gradient-to-tr from-sky-500 to-indigo-600 flex items-center justify-center text-white font-bold text-sm shadow-md shadow-sky-500/20 group-hover:scale-105 transition">
                        AG
                    </div>
                    <span class="bg-gradient-to-r from-slate-900 to-slate-700 dark:from-white dark:to-slate-300 bg-clip-text text-transparent">GILBRAN.</span>
                </a>

                <div class="flex items-center space-x-3 sm:space-x-5 text-sm font-medium text-slate-600 dark:text-slate-300">
                    <div class="hidden lg:flex items-center space-x-5 text-xs font-semibold">
                        <a href="#about" class="hover:text-sky-500 dark:hover:text-sky-400 transition">Tentang</a>
                        <a href="#services" class="hover:text-sky-500 dark:hover:text-sky-400 transition">Layanan</a>
                        <a href="#tools" class="hover:text-sky-500 dark:hover:text-sky-400 transition">Tools</a>
                        <a href="#projects-showcase" class="hover:text-sky-500 dark:hover:text-sky-400 transition">Proyek</a>
                        <a href="#coverage" class="hover:text-sky-500 dark:hover:text-sky-400 transition">Wilayah</a>
                        <a href="#testimonials" class="hover:text-sky-500 dark:hover:text-sky-400 transition">Testimoni</a>
                        <a href="#certifications" class="hover:text-sky-500 dark:hover:text-sky-400 transition">Sertifikasi</a>
                    </div>

                    <!-- LinkedIn Link -->
                    <a href="https://www.linkedin.com/in/ahmad-gilbran-900684423?utm_source=share_via&utm_content=profile&utm_medium=member_ios" target="_blank" class="p-2.5 rounded-xl bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 text-sky-600 dark:text-sky-400 transition border border-slate-200 dark:border-slate-700" title="Profil LinkedIn">
                        <i data-lucide="linkedin" class="w-4 h-4"></i>
                    </a>

                    <!-- Dark Mode Toggle -->
                    <button onclick="toggleDarkMode()" class="p-2.5 rounded-xl bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 transition border border-slate-200 dark:border-slate-700" title="Ubah Mode">
                        <i data-lucide="sun" class="w-4 h-4 hidden dark:block text-amber-400"></i>
                        <i data-lucide="moon" class="w-4 h-4 block dark:hidden text-slate-700"></i>
                    </button>

                    <a href="https://wa.me/6285946300565" target="_blank" class="px-4 py-2 rounded-xl bg-slate-900 hover:bg-slate-800 dark:bg-sky-500 dark:hover:bg-sky-400 text-white font-semibold text-xs sm:text-sm shadow-md transition flex items-center gap-2">
                        <i data-lucide="message-square" class="w-4 h-4"></i>
                        <span class="hidden sm:inline">Hubungi WA</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="about" class="relative pt-32 pb-16 px-4 glow-effect overflow-hidden">
        <div class="max-w-4xl mx-auto text-center relative z-10">
            
            <!-- Live Status Badge -->
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-600 dark:text-emerald-400 text-xs font-semibold mb-6">
                <span class="relative flex h-2 w-2">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                Siap Bekerja / Magang (Open for Opportunities)
            </div>

            <h1 class="text-4xl sm:text-6xl font-extrabold text-slate-900 dark:text-white tracking-tight leading-tight">
                Ahmad Gilbran
            </h1>
            
            <p class="mt-2 text-lg sm:text-2xl font-bold bg-gradient-to-r from-sky-600 to-indigo-600 dark:from-sky-400 dark:to-indigo-400 bg-clip-text text-transparent">
                Teknisi Jaringan & Fiber Optik Specialist
            </p>

            <!-- Location Pill -->
            <div class="mt-3 inline-flex items-center gap-1.5 text-xs font-medium text-slate-500 dark:text-slate-400 bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-lg">
                <i data-lucide="map-pin" class="w-3.5 h-3.5 text-sky-500"></i>
                Kediri & Sekitarnya (Jawa Timur) • Terbuka untuk Penempatan Kerja
            </div>

            <p class="mt-4 text-base sm:text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto leading-relaxed">
                Fokus pada penyambungan serat optik presisi tinggi (<em class="not-italic text-slate-900 dark:text-white font-medium">Fusion Splicing</em>), analisa redaman (<em class="not-italic text-slate-900 dark:text-white font-medium">OTDR</em>), serta manajemen Router & Switch MikroTik/Cisco.
            </p>
            
            <!-- Action Buttons -->
            <div class="mt-8 flex flex-wrap justify-center items-center gap-3">
                <a href="{{ asset('cv-ahmad-gilbran.pdf') }}" download class="px-6 py-3 bg-slate-900 hover:bg-slate-800 dark:bg-white dark:hover:bg-slate-100 text-white dark:text-slate-900 font-semibold rounded-2xl shadow-lg transition flex items-center gap-2 text-sm">
                    <i data-lucide="download" class="w-4 h-4"></i> Unduh CV (PDF)
                </a>
                
                <a href="https://www.linkedin.com/in/ahmad-gilbran-900684423?utm_source=share_via&utm_content=profile&utm_medium=member_ios" target="_blank" class="px-6 py-3 bg-sky-600 hover:bg-sky-500 text-white font-semibold rounded-2xl shadow-lg transition flex items-center gap-2 text-sm">
                    <i data-lucide="linkedin" class="w-4 h-4"></i> LinkedIn
                </a>

                <button onclick="openCvModal()" class="px-6 py-3 bg-white dark:bg-slate-900 hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-800 dark:text-slate-200 font-semibold rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm transition flex items-center gap-2 text-sm">
                    <i data-lucide="eye" class="w-4 h-4 text-sky-500"></i> Intip CV
                </button>

                <button onclick="copyToClipboard('ahmadgilbranalanshary@gmail.com', 'Email berhasil disalin!')" class="p-3 bg-white dark:bg-slate-900 hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm transition" title="Salin Email">
                    <i data-lucide="copy" class="w-5 h-5"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- METRICS & KEY STATISTICS COUNTER -->
    <section class="py-10 bg-white dark:bg-slate-900 border-y border-slate-200/60 dark:border-slate-800/60">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <!-- Stat 1 -->
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/60">
                    <div class="text-3xl sm:text-4xl font-extrabold text-sky-600 dark:text-sky-400">200+</div>
                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 mt-1 uppercase tracking-wider">Core Fiber Spliced</p>
                </div>
                <!-- Stat 2 -->
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/60">
                    <div class="text-3xl sm:text-4xl font-extrabold text-indigo-600 dark:text-indigo-400">15+</div>
                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 mt-1 uppercase tracking-wider">Site & OTDR Tested</p>
                </div>
                <!-- Stat 3 -->
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/60">
                    <div class="text-3xl sm:text-4xl font-extrabold text-emerald-600 dark:text-emerald-400">99.9%</div>
                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 mt-1 uppercase tracking-wider">Presisi Redaman dB</p>
                </div>
                <!-- Stat 4 -->
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/60">
                    <div class="text-3xl sm:text-4xl font-extrabold text-amber-600 dark:text-amber-400">10+</div>
                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 mt-1 uppercase tracking-wider">Topologi Dirancang</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES / KAPABILITAS TEKNIS -->
    <section id="services" class="py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sky-500/10 text-sky-600 dark:text-sky-400 text-xs font-bold uppercase tracking-wider mb-3">
                    <i data-lucide="wrench" class="w-4 h-4"></i> Technical Capabilities
                </div>
                <h2 class="text-3xl font-bold">Layanan & Keahlian Lapangan</h2>
                <p class="text-slate-500 dark:text-slate-400 text-sm mt-2">Solusi teknis infrastruktur jaringan dan serat optik yang siap diimplementasikan</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Service 1 -->
                <div class="p-6 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200/80 dark:border-slate-800/80 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-blue-500/10 text-blue-600 dark:text-blue-400 flex items-center justify-center mb-4">
                        <i data-lucide="zap" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Penyambungan Fiber Optik</h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed">
                        Penyambungan core serat optik menggunakan Fusion Splicer dengan estimasi loss redaman di bawah standar 0.1 dB per sambungan.
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="p-6 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200/80 dark:border-slate-800/80 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 flex items-center justify-center mb-4">
                        <i data-lucide="activity" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">OTDR Test & Cleaning</h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed">
                        Analisis grafik jarak, deteksi titik kabel putus (bending/breakage), dan pengukuran total attenuation loss kabel optik.
                    </p>
                </div>

                <!-- Service 3 -->
                <div class="p-6 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200/80 dark:border-slate-800/80 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center mb-4">
                        <i data-lucide="settings text-600" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Setting MikroTik & Cisco</h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed">
                        Konfigurasi Bandwidth Management (Queue), Routing OSPF, Multi-VLAN, Hotspot Voucher, serta pengamanan Firewall NAT.
                    </p>
                </div>

                <!-- Service 4 -->
                <div class="p-6 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200/80 dark:border-slate-800/80 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center mb-4">
                        <i data-lucide="network" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Structured Cabling LAN</h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed">
                        Pengkabelan terstruktur Cat6/Cat5e, crimping konektor RJ45, penataan Patch Panel, serta kerapian Rack Server/OTB.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPERIENCE & ACHIEVEMENT SECTION -->
    <section id="experience" class="py-20 bg-white dark:bg-slate-900 transition-colors duration-300 border-t border-slate-200/60 dark:border-slate-800/60">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Experience -->
            <div>
                <div class="flex items-center gap-3 mb-8">
                    <div class="p-2.5 rounded-xl bg-sky-500/10 text-sky-600 dark:text-sky-400">
                        <i data-lucide="briefcase" class="w-6 h-6"></i>
                    </div>
                    <h2 class="text-2xl font-bold">Pengalaman Kerja</h2>
                </div>

                <div class="border-l-2 border-slate-200 dark:border-slate-800 pl-6 space-y-8 relative ml-3">
                    <div class="relative">
                        <div class="absolute w-3.5 h-3.5 bg-sky-500 rounded-full -left-[31px] top-1.5 ring-4 ring-white dark:ring-slate-900"></div>
                        <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400">PKL (6 Bulan)</span>
                        <h3 class="font-bold text-xl mt-2">PT Jatara</h3>
                        <p class="text-sky-600 dark:text-sky-400 font-medium text-sm mb-3">Teknisi Jaringan & Fiber Optik</p>
                        <ul class="space-y-2 text-slate-600 dark:text-slate-400 text-sm">
                            <li class="flex items-start gap-2">
                                <i data-lucide="check" class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5"></i>
                                <span>Penyambungan kabel serat optik menggunakan <strong>Fusion Splicer</strong>.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check" class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5"></i>
                                <span>Pengukuran redaman & lokasi titik putus kabel menggunakan <strong>OTDR</strong>.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check" class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5"></i>
                                <span>Troubleshooting gangguan jaringan LAN & instalasi modem ONT pelanggan.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Achievement -->
            <div>
                <div class="flex items-center gap-3 mb-8">
                    <div class="p-2.5 rounded-xl bg-amber-500/10 text-amber-600 dark:text-amber-400">
                        <i data-lucide="award" class="w-6 h-6"></i>
                    </div>
                    <h2 class="text-2xl font-bold">Prestasi & Kompetisi</h2>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800/80 shadow-sm">
                    <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-amber-500/10 text-amber-600 dark:text-amber-400">Juara LKS TKJ</span>
                    <h3 class="font-bold text-xl mt-3">Lomba Kompetensi Siswa (LKS)</h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm mb-4">Bidang Teknik Komputer & Jaringan</p>
                    <ul class="space-y-2 text-slate-600 dark:text-slate-400 text-sm">
                        <li class="flex items-start gap-2">
                            <i data-lucide="chevron-right" class="w-4 h-4 text-sky-500 shrink-0 mt-0.5"></i>
                            <span>Desain topologi jaringan kompleks & subnetting IP.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i data-lucide="chevron-right" class="w-4 h-4 text-sky-500 shrink-0 mt-0.5"></i>
                            <span>Pengkabelan terstruktur (Structured Cabling Cat6/RJ45).</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i data-lucide="chevron-right" class="w-4 h-4 text-sky-500 shrink-0 mt-0.5"></i>
                            <span>Konfigurasi Routing, VLAN, dan Firewall Security.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- TOOLS & SKILLS SECTION (BENTO GRID) -->
    <section id="tools" class="py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Perangkat & Keahlian Utama</h2>
                <p class="text-slate-500 dark:text-slate-400 text-sm mt-2">Tools dan perangkat keras yang dikuasai secara profesional</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Tool 1 -->
                <div class="p-5 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200/80 dark:border-slate-800/80 shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="w-10 h-10 rounded-xl bg-blue-500/10 text-blue-600 dark:text-blue-400 flex items-center justify-center mb-4">
                        <i data-lucide="cable" class="w-5 h-5"></i>
                    </div>
                    <h4 class="font-bold text-base">Fusion Splicer</h4>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Penyambungan Serat Optik</p>
                    <span class="inline-block mt-3 text-[10px] font-bold uppercase tracking-wider text-emerald-600 dark:text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded">Tingkat Mahir</span>
                </div>

                <!-- Tool 2 -->
                <div class="p-5 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200/80 dark:border-slate-800/80 shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 flex items-center justify-center mb-4">
                        <i data-lucide="activity" class="w-5 h-5"></i>
                    </div>
                    <h4 class="font-bold text-base">OTDR Meter</h4>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Pengujian Redaman Sinyal</p>
                    <span class="inline-block mt-3 text-[10px] font-bold uppercase tracking-wider text-emerald-600 dark:text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded">Tingkat Mahir</span>
                </div>

                <!-- Tool 3 -->
                <div class="p-5 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200/80 dark:border-slate-800/80 shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="w-10 h-10 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center mb-4">
                        <i data-lucide="router" class="w-5 h-5"></i>
                    </div>
                    <h4 class="font-bold text-base">MikroTik Router</h4>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Routing, VLAN, Bandwidth</p>
                    <span class="inline-block mt-3 text-[10px] font-bold uppercase tracking-wider text-sky-600 dark:text-sky-400 bg-sky-500/10 px-2 py-0.5 rounded">Menengah</span>
                </div>

                <!-- Tool 4 -->
                <div class="p-5 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200/80 dark:border-slate-800/80 shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="w-10 h-10 rounded-xl bg-purple-500/10 text-purple-600 dark:text-purple-400 flex items-center justify-center mb-4">
                        <i data-lucide="terminal" class="w-5 h-5"></i>
                    </div>
                    <h4 class="font-bold text-base">Linux / CLI</h4>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Basic Server & Command Line</p>
                    <span class="inline-block mt-3 text-[10px] font-bold uppercase tracking-wider text-sky-600 dark:text-sky-400 bg-sky-500/10 px-2 py-0.5 rounded">Menengah</span>
                </div>
            </div>
        </div>
    </section>

    <!-- PROYEK JARINGAN (PROJECTS SHOWCASE SECTION) -->
    <section id="projects-showcase" class="py-20 bg-white dark:bg-slate-900 border-t border-slate-200/60 dark:border-slate-800/60 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sky-500/10 text-sky-600 dark:text-sky-400 text-xs font-bold uppercase tracking-wider mb-3">
                    <i data-lucide="folder-git-2" class="w-4 h-4"></i> Project Portfolio
                </div>
                <h2 class="text-3xl font-bold">Proyek Jaringan & Implementasi</h2>
                <p class="text-slate-500 dark:text-slate-400 text-sm mt-2">Daftar proyek teknis yang pernah dirancang dan diimplementasikan</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <!-- Proyek 1 -->
                <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800/80 shadow-sm hover:shadow-md transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 rounded-lg bg-blue-500/10 text-blue-600 dark:text-blue-400 text-xs font-bold">FTTH & Fiber Optik</span>
                            <span class="text-xs font-medium text-slate-400 flex items-center gap-1"><i data-lucide="check-circle" class="w-3.5 h-3.5 text-emerald-500"></i> Selesai</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Desain & Instalasi Jaringan FTTH (Fiber to the Home)</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-4">
                            Perancangan alur kable serat optik dari ODC ke ODP, penyambungan core presisi menggunakan Fusion Splicer, serta instalasi dan pembacaan signal redaman ONT pelanggan.
                        </p>
                    </div>
                    <div>
                        <div class="flex flex-wrap gap-2 pt-4 border-t border-slate-200/60 dark:border-slate-800/60">
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-md bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">Fusion Splicer</span>
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-md bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">OTDR</span>
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-md bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">OPM</span>
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-md bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">ONT Setup</span>
                        </div>
                    </div>
                </div>

                <!-- Proyek 2 -->
                <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800/80 shadow-sm hover:shadow-md transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 rounded-lg bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 text-xs font-bold">MikroTik Router</span>
                            <span class="text-xs font-medium text-slate-400 flex items-center gap-1"><i data-lucide="check-circle" class="w-3.5 h-3.5 text-emerald-500"></i> Selesai</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Manajemen Hotspot & Bandwidth Queue MikroTik</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-4">
                            Konfigurasi RouterBOARD MikroTik untuk pembagian bandwidth otomatis (Queue Tree), pembuatan sistem login Hotspot Voucher (User Manager), serta pengamanan Port & Firewall.
                        </p>
                    </div>
                    <div>
                        <div class="flex flex-wrap gap-2 pt-4 border-t border-slate-200/60 dark:border-slate-800/60">
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-md bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">RouterOS</span>
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-md bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">Winbox</span>
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-md bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">Queue Tree</span>
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-md bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">Firewall NAT</span>
                        </div>
                    </div>
                </div>

                <!-- Proyek 3 -->
                <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800/80 shadow-sm hover:shadow-md transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 rounded-lg bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 text-xs font-bold">Cisco Network</span>
                            <span class="text-xs font-medium text-slate-400 flex items-center gap-1"><i data-lucide="check-circle" class="w-3.5 h-3.5 text-emerald-500"></i> LKS TKJ</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Simulasi Topologi Enterprise (Multi-VLAN & OSPF)</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-4">
                            Perancangan arsitektur jaringan skala menengah menggunakan Cisco Packet Tracer: konfigurasi Multi-VLAN, Inter-VLAN Routing, Dynamic Routing OSPF, dan Access Control List (ACL).
                        </p>
                    </div>
                    <div>
                        <div class="flex flex-wrap gap-2 pt-4 border-t border-slate-200/60 dark:border-slate-800/60">
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-md bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">Cisco Packet Tracer</span>
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-md bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">Multi-VLAN</span>
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-md bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">OSPF Routing</span>
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-md bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">ACL Security</span>
                        </div>
                    </div>
                </div>

                <!-- Proyek 4 -->
                <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800/80 shadow-sm hover:shadow-md transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 rounded-lg bg-purple-500/10 text-purple-600 dark:text-purple-400 text-xs font-bold">Linux Server</span>
                            <span class="text-xs font-medium text-slate-400 flex items-center gap-1"><i data-lucide="check-circle" class="w-3.5 h-3.5 text-emerald-500"></i> Home Lab</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Setup Web & DNS Server Berbasis Ubuntu Server</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-4">
                            Deployment server lokal menggunakan OS Ubuntu Server CLI: instalasi Apache/Nginx Web Server, konfigrasi domain lokal BIND9 DNS Server, serta monitoring log lalu lintas jaringan.
                        </p>
                    </div>
                    <div>
                        <div class="flex flex-wrap gap-2 pt-4 border-t border-slate-200/60 dark:border-slate-800/60">
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-md bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">Ubuntu Server</span>
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-md bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">Apache/Nginx</span>
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-md bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">BIND9 DNS</span>
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-md bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">SSH & CLI</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COVERAGE AREA / WILAYAH OPERASIONAL -->
    <section id="coverage" class="py-16 bg-slate-50 dark:bg-slate-950 border-t border-slate-200/60 dark:border-slate-800/60 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4">
            <div class="p-8 rounded-3xl bg-gradient-to-r from-sky-900 to-slate-900 text-white shadow-xl relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="relative z-10 max-w-xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sky-500/20 text-sky-300 text-xs font-bold uppercase tracking-wider mb-3">
                        <i data-lucide="map-pin" class="w-4 h-4"></i> Coverage & Relocation
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-white">Wilayah Jangkauan Operasional</h2>
                    <p class="text-slate-300 text-sm mt-3 leading-relaxed">
                        Berbasis di <strong class="text-white">Kediri & Sekitarnya (Nganjuk, Blitar, Tulungagung, Jombang)</strong>. Siap ditugaskan untuk proyek *on-site*, perawatan rutin jaringan fiber optik, maupun <strong class="text-sky-300">Penempatan Kerja di Seluruh Wilayah Indonesia</strong>.
                    </p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="text-xs bg-white/10 backdrop-blur-md px-3 py-1 rounded-lg border border-white/10 text-sky-200">📍 Kediri Raya</span>
                        <span class="text-xs bg-white/10 backdrop-blur-md px-3 py-1 rounded-lg border border-white/10 text-sky-200">📍 Nganjuk</span>
                        <span class="text-xs bg-white/10 backdrop-blur-md px-3 py-1 rounded-lg border border-white/10 text-sky-200">📍 Blitar</span>
                        <span class="text-xs bg-white/10 backdrop-blur-md px-3 py-1 rounded-lg border border-white/10 text-sky-200">📍 Tulungagung</span>
                        <span class="text-xs bg-white/10 backdrop-blur-md px-3 py-1 rounded-lg border border-white/10 text-sky-200">📍 Jombang</span>
                        <span class="text-xs bg-emerald-500/30 text-emerald-300 px-3 py-1 rounded-lg border border-emerald-500/30 font-semibold">✈️ Ready for Relocation</span>
                    </div>
                </div>
                <div class="relative z-10 shrink-0">
                    <a href="https://wa.me/6285946300565" target="_blank" class="px-6 py-3.5 bg-sky-500 hover:bg-sky-400 text-white font-bold rounded-2xl shadow-lg transition flex items-center gap-2 text-sm">
                        <i data-lucide="message-square" class="w-4 h-4"></i> Diskusi Proyek Lapangan
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION (5 ORANG REKOMENDASI) -->
    <section id="testimonials" class="py-20 bg-white dark:bg-slate-900 border-t border-slate-200/60 dark:border-slate-800/60 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-wider mb-3">
                    <i data-lucide="quote" class="w-4 h-4"></i> Testimonials & Endorsements
                </div>
                <h2 class="text-3xl font-bold">Ulasan & Rekomendasi Profesional</h2>
                <p class="text-slate-500 dark:text-slate-400 text-sm mt-2">Ulasan dari pembimbing lapangan, guru, rekan kerja, dan mitra jaringan</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Testimoni 1 -->
                <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800/80 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 mb-3">
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 text-xs italic leading-relaxed mb-4">
                            "Gilbran memiliki ketelitian tinggi saat melakukan fusion splicing core fiber. Hasil redamannya selalu presisi dan memenuhi standar teknis industri PT Jatara."
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-200/60 dark:border-slate-800/60 flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-sky-500/20 text-sky-600 dark:text-sky-400 flex items-center justify-center font-bold text-xs">HP</div>
                        <div>
                            <h4 class="font-bold text-sm">Bp. Ulil</h4>
                            <p class="text-[11px] text-slate-500 dark:text-slate-400">Senior Field Engineer • PT Jatara</p>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 2 -->
                <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800/80 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 mb-3">
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 text-xs italic leading-relaxed mb-4">
                            "Dedikasi Gilbran dalam menguasai topologi Cisco dan MikroTik sangat luar biasa. Terbukti dengan pencapaiannya pada ajang LKS TKJ."
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-200/60 dark:border-slate-800/60 flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-amber-500/20 text-amber-600 dark:text-amber-400 flex items-center justify-center font-bold text-xs">RW</div>
                        <div>
                            <h4 class="font-bold text-sm">Bp. Dafa alrafi, S.Kom.</h4>
                            <p class="text-[11px] text-slate-500 dark:text-slate-400">Guru Pembimbing LKS TKJ</p>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 3 -->
                <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800/80 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 mb-3">
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 text-xs italic leading-relaxed mb-4">
                            "Sangat cepat dan fleksibel diajak kerja tim di lapangan, terutama saat penanganan gangguan titik putus kabel optik yang butuh eksekusi cepat."
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-200/60 dark:border-slate-800/60 flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-indigo-500/20 text-indigo-600 dark:text-indigo-400 flex items-center justify-center font-bold text-xs">DA</div>
                        <div>
                            <h4 class="font-bold text-sm">Mas Muhammad haidar</h4>
                            <p class="text-[11px] text-slate-500 dark:text-slate-400">Field Technician • Partner Lapangan</p>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 4 -->
                <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800/80 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 mb-3">
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 text-xs italic leading-relaxed mb-4">
                            "Konfigurasi router MikroTik dan skema voucher dari Gilbran membuat koneksi WiFi cafe kami sangat stabil tanpa lag sama sekali."
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-200/60 dark:border-slate-800/60 flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-emerald-500/20 text-emerald-600 dark:text-emerald-400 flex items-center justify-center font-bold text-xs">BS</div>
                        <div>
                            <h4 class="font-bold text-sm">Bp. Imam tohari</h4>
                            <p class="text-[11px] text-slate-500 dark:text-slate-400">Owner RT RW NET</p>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 5 -->
                <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800/80 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 mb-3">
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 text-xs italic leading-relaxed mb-4">
                            "Pemahaman praktis Gilbran mengenai pengkabelan terstruktur Cat6, VLAN, dan penggunaan OTDR sangat menonjol di antara teman seangkatannya."
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-200/60 dark:border-slate-800/60 flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-purple-500/20 text-purple-600 dark:text-purple-400 flex items-center justify-center font-bold text-xs">AS</div>
                        <div>
                            <h4 class="font-bold text-sm">Bp. Agus Susanto, S.Kom.</h4>
                            <p class="text-[11px] text-slate-500 dark:text-slate-400">Kepala Laboratorium TKJ & Kepala sekolah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CERTIFICATIONS SECTION -->
    <section id="certifications" class="py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Sertifikasi & Lisensi Dokumen</h2>
                <p class="text-slate-500 dark:text-slate-400 text-sm mt-2">Bukti otentik kualifikasi kompetensi teknis</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <!-- Cert 1 -->
                <div class="p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800/80 flex justify-between items-center shadow-sm">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-sky-500/10 text-sky-600 dark:text-sky-400 flex items-center justify-center shrink-0">
                            <i data-lucide="file-check" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-base">Sertifikat PKL PT Jatara</h3>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Nilai Sangat Baik • Fiber Optik & LAN</p>
                        </div>
                    </div>
                    <button onclick="openCvModal()" class="px-4 py-2 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 text-xs font-semibold rounded-xl border border-slate-200 dark:border-slate-700 transition">
                        Buka PDF
                    </button>
                </div>

                <!-- Cert 2 -->
                <div class="p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800/80 flex justify-between items-center shadow-sm">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center shrink-0">
                            <i data-lucide="award" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-base">Sertifikat Kejuaraan LKS</h3>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Kompetensi Teknik Komputer & Jaringan</p>
                        </div>
                    </div>
                    <button onclick="openCvModal()" class="px-4 py-2 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 text-xs font-semibold rounded-xl border border-slate-200 dark:border-slate-700 transition">
                        Buka PDF
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY SECTION WITH FILTER -->
    <section id="projects" class="py-20 bg-white dark:bg-slate-900 border-t border-slate-200/60 dark:border-slate-800/60 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold">Galeri Dokumentasi Lapangan</h2>
                <p class="text-slate-500 dark:text-slate-400 text-sm mt-2">Foto asli kegiatan praktikum, pengujian alat, dan kompetisi</p>
            </div>

            <!-- Filter Buttons -->
            <div class="flex justify-center gap-2 mb-10">
                <button onclick="filterGallery('all', this)" class="filter-btn px-5 py-2 rounded-xl text-xs font-bold bg-slate-900 dark:bg-white text-white dark:text-slate-900 transition shadow-sm">Semua</button>
                <button onclick="filterGallery('fiber', this)" class="filter-btn px-5 py-2 rounded-xl text-xs font-semibold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 border border-slate-200 dark:border-slate-700 hover:bg-slate-200 dark:hover:bg-slate-700 transition">Fiber Optik</button>
                <button onclick="filterGallery('lks', this)" class="filter-btn px-5 py-2 rounded-xl text-xs font-semibold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 border border-slate-200 dark:border-slate-700 hover:bg-slate-200 dark:hover:bg-slate-700 transition">Kompetisi LKS</button>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Foto 1 -->
                <div class="gallery-item fiber group bg-slate-50 dark:bg-slate-950 rounded-2xl overflow-hidden border border-slate-200/80 dark:border-slate-800/80 shadow-sm hover:shadow-xl transition duration-300">
                    <div class="overflow-hidden h-52 relative">
                        <img src="{{ asset('images/splicing.jpeg') }}" alt="Penyambungan Fiber Optik" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <span class="absolute top-3 left-3 bg-slate-900/80 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-1 rounded-lg">Splicing</span>
                    </div>
                    <div class="p-5">
                        <h4 class="font-bold text-base mb-1">Fusion Splicing Practice</h4>
                        <p class="text-slate-500 dark:text-slate-400 text-xs leading-relaxed">Proses penyambungan kabel fiber optik inti kaca menggunakan Fusion Splicer presisi.</p>
                    </div>
                </div>

                <!-- Foto 2 -->
                <div class="gallery-item fiber group bg-slate-50 dark:bg-slate-950 rounded-2xl overflow-hidden border border-slate-200/80 dark:border-slate-800/80 shadow-sm hover:shadow-xl transition duration-300">
                    <div class="overflow-hidden h-52 relative">
                        <img src="{{ asset('images/otdr.jpeg') }}" alt="Pengujian OTDR" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <span class="absolute top-3 left-3 bg-slate-900/80 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-1 rounded-lg">Measurement</span>
                    </div>
                    <div class="p-5">
                        <h4 class="font-bold text-base mb-1">OTDR Attenuation Test</h4>
                        <p class="text-slate-500 dark:text-slate-400 text-xs leading-relaxed">Pengukuran grafik redaman dB/km pada kabel jaringan optik sebelum komisi.</p>
                    </div>
                </div>

                <!-- Foto 3 -->
                <div class="gallery-item lks group bg-slate-50 dark:bg-slate-950 rounded-2xl overflow-hidden border border-slate-200/80 dark:border-slate-800/80 shadow-sm hover:shadow-xl transition duration-300">
                    <div class="overflow-hidden h-52 relative">
                        <img src="{{ asset('images/lks.jpeg') }}" alt="Kompetisi LKS TKJ" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <span class="absolute top-3 left-3 bg-slate-900/80 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-1 rounded-lg">LKS TKJ</span>
                    </div>
                    <div class="p-5">
                        <h4 class="font-bold text-base mb-1">LKS Network Competition</h4>
                        <p class="text-slate-500 dark:text-slate-400 text-xs leading-relaxed">Dokumentasi pengerjaan konfigurasi router dan pengkabelan terstruktur.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="mt-auto bg-slate-900 text-white py-12 border-t border-slate-800">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <div class="flex justify-center items-center gap-4 mb-6">
                <a href="https://www.linkedin.com/in/ahmad-gilbran-900684423?utm_source=share_via&utm_content=profile&utm_medium=member_ios" target="_blank" class="p-3 rounded-full bg-slate-800 hover:bg-sky-600 transition text-white">
                    <i data-lucide="linkedin" class="w-5 h-5"></i>
                </a>
                <a href="https://wa.me/6285946300565" target="_blank" class="p-3 rounded-full bg-slate-800 hover:bg-emerald-600 transition text-white">
                    <i data-lucide="message-square" class="w-5 h-5"></i>
                </a>
                <button onclick="copyToClipboard('ahmadgilbranalanshary@gmail.com', 'Email berhasil disalin!')" class="p-3 rounded-full bg-slate-800 hover:bg-indigo-600 transition text-white" title="Salin Email">
                    <i data-lucide="mail" class="w-5 h-5"></i>
                </button>
            </div>
            <p class="text-slate-400 text-sm">
                &copy; {{ date('Y') }} <span class="text-white font-semibold">Ahmad Gilbran</span>. Specialist Network & Fiber Optik Kediri.
            </p>
            <p class="text-slate-500 text-xs mt-2">
                Built with Laravel, Tailwind CSS & Railway
            </p>
        </div>
    </footer>

    <!-- MODAL PREVIEW CV -->
    <div id="cvModal" class="fixed inset-0 bg-slate-950/80 backdrop-blur-md z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white dark:bg-slate-900 rounded-3xl w-full max-w-4xl h-[85vh] flex flex-col overflow-hidden shadow-2xl relative border border-slate-200 dark:border-slate-800">
            <div class="p-4 border-b dark:border-slate-800 flex justify-between items-center bg-slate-50 dark:bg-slate-800/50">
                <div class="flex items-center gap-2">
                    <i data-lucide="file-text" class="w-5 h-5 text-sky-500"></i>
                    <h3 class="font-bold text-slate-800 dark:text-slate-100 text-sm">Pratinjau CV - Ahmad Gilbran.pdf</h3>
                </div>
                <button onclick="closeCvModal()" class="p-2 hover:bg-slate-200 dark:hover:bg-slate-700 rounded-full transition">
                    <i data-lucide="x" class="w-5 h-5 text-slate-600 dark:text-slate-300"></i>
                </button>
            </div>
            <div class="flex-1 bg-slate-100 dark:bg-slate-950">
                <iframe src="{{ asset('cv-ahmad-gilbran.pdf') }}" class="w-full h-full"></iframe>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script>
        // Init Lucide Icons
        lucide.createIcons();

        // Dark Mode
        function toggleDarkMode() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        }

        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        // Modal
        function openCvModal() {
            document.getElementById('cvModal').classList.remove('hidden');
        }
        function closeCvModal() {
            document.getElementById('cvModal').classList.add('hidden');
        }

        // Gallery Filter
        function filterGallery(category, btnElement) {
            const items = document.querySelectorAll('.gallery-item');
            const buttons = document.querySelectorAll('.filter-btn');

            buttons.forEach(btn => {
                btn.className = "filter-btn px-5 py-2 rounded-xl text-xs font-semibold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 border border-slate-200 dark:border-slate-700 hover:bg-slate-200 dark:hover:bg-slate-700 transition";
            });

            btnElement.className = "filter-btn px-5 py-2 rounded-xl text-xs font-bold bg-slate-900 dark:bg-white text-white dark:text-slate-900 transition shadow-sm";

            items.forEach(item => {
                if (category === 'all' || item.classList.contains(category)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Copy to Clipboard + Toast
        function copyToClipboard(text, message) {
            navigator.clipboard.writeText(text);
            const toast = document.getElementById('toast');
            const toastMsg = document.getElementById('toast-message');
            
            toastMsg.innerText = message;
            toast.classList.remove('translate-y-20', 'opacity-0');
            
            setTimeout(() => {
                toast.classList.add('translate-y-20', 'opacity-0');
            }, 2500);
        }
    </script>
</body>
</html>
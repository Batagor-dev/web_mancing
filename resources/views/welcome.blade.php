<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Komunitas Mancing Indonesia</title>
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link
            crossorigin=""
            href="https://fonts.gstatic.com"
            rel="preconnect"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"
        />
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <script id="tailwind-config">
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: "#0284c7", // Sky 600
                            "primary-dark": "#0369a1", // Sky 700
                            secondary: "#0ea5e9",
                            "background-light": "#ffffff",
                            "surface-light": "#f8fafc", // Slate 50
                            "border-light": "#e2e8f0", // Slate 200
                            "text-main": "#0f172a", // Slate 900
                            "text-muted": "#64748b", // Slate 500
                        },
                        fontFamily: {
                            display: ["Spline Sans", "sans-serif"],
                        },
                        borderRadius: {
                            DEFAULT: "1rem",
                            lg: "1.5rem",
                            xl: "2rem",
                            full: "9999px",
                        },
                    },
                },
            };
        </script>
    </head>
    <body
        class="bg-background-light text-text-main font-display overflow-x-hidden antialiased selection:bg-primary selection:text-white"
    >
        <div class="relative flex min-h-screen flex-col">
            <header
                class="fixed top-0 z-50 w-full border-b border-white/10 bg-black/20 backdrop-blur-md"
            >
                <div
                    class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6 lg:px-8"
                >
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-white/20 text-white backdrop-blur-sm"
                        >
                            <span
                                class="material-symbols-outlined"
                                style="font-size: 24px"
                                >sailing</span
                            >
                        </div>
                        <span
                            class="text-xl font-bold tracking-tight text-white drop-shadow-sm"
                            >Komunitas Mancing</span
                        >
                    </div>
                    <nav class="hidden md:flex items-center gap-8">
                        <a
                            class="text-sm font-medium text-white hover:text-white/80 transition-colors drop-shadow-sm"
                            href="#beranda"
                            >Beranda</a
                        >
                        <a
                            class="text-sm font-medium text-white hover:text-white/80 transition-colors drop-shadow-sm"
                            href="#tentang"
                            >Tentang</a
                        >
                        <a
                            class="text-sm font-medium text-white hover:text-white/80 transition-colors drop-shadow-sm"
                            href="#event"
                            >Event</a
                        >
                        <a
                            class="text-sm font-medium text-white hover:text-white/80 transition-colors drop-shadow-sm"
                            href="#galeri"
                            >Galeri</a
                        >
                        <a
                            class="text-sm font-medium text-white hover:text-white/80 transition-colors drop-shadow-sm"
                            href="#kontak"
                            >Kontak</a
                        >
                    </nav>
                    <div class="flex items-center gap-4">
                        <button
                            class="hidden sm:flex h-10 items-center justify-center rounded-full bg-white px-6 text-sm font-bold text-primary transition-transform hover:scale-105 hover:bg-gray-100 shadow-lg"
                        >
                            Gabung
                        </button>
                        <button class="flex md:hidden text-white">
                            <span class="material-symbols-outlined">menu</span>
                        </button>
                    </div>
                </div>
            </header>
            <section class="relative" id="beranda">
                <div
                    class="relative min-h-[600px] md:min-h-[700px] flex items-center justify-center overflow-hidden"
                >
                    <div class="absolute inset-0 z-0">
                        <img
                            alt="Scenic view of a calm blue lake with mountains"
                            class="h-full w-full object-cover brightness-[0.85]"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBazxgzAVp4gMFetGuglyAF6ZjHEw_gETJ2AhgxWSj5f71dKonGUNQA5y1UYujlCisLPFMo-QcZW7PDvMWQfAUQ-_JemkyQ0vrkGAxeG271On0x8YW9PkGtlM0Sgo8lOq2n6BtGcNp5WdmEaJJP6UYX0KmGGCNq-FquytojwrLHId-rPS6uNsdyWqKcr2zWKzx1zO1aO38ui-3z-1VkjZ74ZD48bHIEhQ5OhbmXy4d7PKGvwdOmHcV1MZ0XupuiW53cBfm0QgPp-2M"
                        />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-background-light via-transparent to-black/30"
                        ></div>
                    </div>
                    <div
                        class="relative z-10 container mx-auto px-6 text-center mt-20"
                    >
                        <span
                            class="inline-block rounded-full bg-white/20 border border-white/40 px-4 py-1.5 text-sm font-medium text-white mb-6 backdrop-blur-md shadow-sm"
                        >
                            Komunitas No. 1 di Indonesia
                        </span>
                        <h1
                            class="mx-auto max-w-4xl text-4xl font-black leading-tight tracking-tight text-white md:text-6xl lg:text-7xl mb-6 drop-shadow-lg"
                        >
                            Taklukan Samudera <br />
                            <span class="text-sky-200">Bersama Kami</span>
                        </h1>
                        <p
                            class="mx-auto max-w-2xl text-lg text-white/90 md:text-xl mb-10 leading-relaxed drop-shadow-md font-medium"
                        >
                            Bergabunglah dengan ribuan pemancing dari seluruh
                            nusantara. Temukan spot rahasia, pelajari teknik
                            terbaru, dan rasakan persaudaraan tanpa batas.
                        </p>
                        <div
                            class="flex flex-col sm:flex-row items-center justify-center gap-4"
                        >
                            <button
                                class="h-12 px-8 rounded-full bg-primary text-white font-bold text-base hover:bg-primary-dark transition-all w-full sm:w-auto shadow-lg shadow-sky-900/20"
                            >
                                Mulai Sekarang
                            </button>
                            <button
                                class="h-12 px-8 rounded-full border border-white/60 bg-white/10 text-white font-semibold text-base hover:bg-white/20 backdrop-blur-md transition-all w-full sm:w-auto flex items-center justify-center gap-2"
                            >
                                <span
                                    class="material-symbols-outlined"
                                    style="font-size: 20px"
                                    >play_circle</span
                                >
                                Tonton Video
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="relative -mt-16 z-20 px-6">
                <div class="mx-auto max-w-7xl">
                    <div
                        class="grid grid-cols-2 md:grid-cols-4 gap-4 p-4 rounded-3xl bg-white border border-border-light shadow-xl"
                    >
                        <div
                            class="flex flex-col items-center justify-center p-4 text-center"
                        >
                            <p
                                class="text-3xl md:text-4xl font-black text-primary"
                            >
                                500+
                            </p>
                            <p class="text-sm font-medium text-text-muted mt-1">
                                Anggota Aktif
                            </p>
                        </div>
                        <div
                            class="flex flex-col items-center justify-center p-4 text-center border-l border-border-light"
                        >
                            <p
                                class="text-3xl md:text-4xl font-black text-primary"
                            >
                                50+
                            </p>
                            <p class="text-sm font-medium text-text-muted mt-1">
                                Event Tahunan
                            </p>
                        </div>
                        <div
                            class="flex flex-col items-center justify-center p-4 text-center border-l border-border-light"
                        >
                            <p
                                class="text-3xl md:text-4xl font-black text-primary"
                            >
                                120+
                            </p>
                            <p class="text-sm font-medium text-text-muted mt-1">
                                Spot Terpetakan
                            </p>
                        </div>
                        <div
                            class="flex flex-col items-center justify-center p-4 text-center border-l border-border-light"
                        >
                            <p
                                class="text-3xl md:text-4xl font-black text-primary"
                            >
                                85+
                            </p>
                            <p class="text-sm font-medium text-text-muted mt-1">
                                Spesies Ikan
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 px-6 bg-background-light" id="tentang">
                <div class="mx-auto max-w-7xl">
                    <div class="flex flex-col lg:flex-row gap-16 items-start">
                        <div class="flex-1 space-y-8">
                            <div>
                                <h2
                                    class="text-primary font-bold tracking-wider uppercase text-sm mb-2"
                                >
                                    Tentang Kami
                                </h2>
                                <h3
                                    class="text-3xl md:text-4xl font-bold text-text-main leading-tight"
                                >
                                    Lebih Dari Sekadar <br />Hobi Mancing
                                </h3>
                            </div>
                            <p class="text-text-muted text-lg leading-relaxed">
                                Kami adalah sekumpulan hobiis yang berdedikasi
                                untuk melestarikan alam sambil menikmati
                                olahraga memancing. Didirikan tahun 2015, kami
                                fokus pada teknik mancing yang berkelanjutan dan
                                kebersamaan.
                            </p>
                            <div class="space-y-6">
                                <div class="flex gap-4">
                                    <div
                                        class="flex-shrink-0 h-12 w-12 rounded-2xl bg-sky-50 border border-sky-100 flex items-center justify-center text-primary"
                                    >
                                        <span class="material-symbols-outlined"
                                            >groups</span
                                        >
                                    </div>
                                    <div>
                                        <h4
                                            class="text-text-main font-bold text-lg"
                                        >
                                            Persaudaraan
                                        </h4>
                                        <p class="text-text-muted mt-1 text-sm">
                                            Membangun jaringan pertemanan antar
                                            pemancing dari seluruh nusantara
                                            tanpa memandang status.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div
                                        class="flex-shrink-0 h-12 w-12 rounded-2xl bg-sky-50 border border-sky-100 flex items-center justify-center text-primary"
                                    >
                                        <span class="material-symbols-outlined"
                                            >eco</span
                                        >
                                    </div>
                                    <div>
                                        <h4
                                            class="text-text-main font-bold text-lg"
                                        >
                                            Konservasi Alam
                                        </h4>
                                        <p class="text-text-muted mt-1 text-sm">
                                            Menjaga ekosistem perairan dengan
                                            prinsip catch and release untuk
                                            spesies tertentu.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div
                                        class="flex-shrink-0 h-12 w-12 rounded-2xl bg-sky-50 border border-sky-100 flex items-center justify-center text-primary"
                                    >
                                        <span class="material-symbols-outlined"
                                            >school</span
                                        >
                                    </div>
                                    <div>
                                        <h4
                                            class="text-text-main font-bold text-lg"
                                        >
                                            Edukasi Teknik
                                        </h4>
                                        <p class="text-text-muted mt-1 text-sm">
                                            Workshop rutin tentang alat, teknik
                                            casting, jigging, dan spot mancing
                                            terbaik.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 w-full relative">
                            <div
                                class="relative rounded-[2.5rem] overflow-hidden border border-border-light shadow-2xl"
                            >
                                <img
                                    class="w-full h-[600px] object-cover hover:scale-105 transition-transform duration-700"
                                    data-alt="Group of friends fishing on a boat in deep blue water during a sunny day"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8MNw3ab8RHgYLelG4dcspXFaLh5GZNhi8dwP_m1-zUwCVZUakJV6vu3qVYfBu8y2F4vZOBnlfMINmXE5-eM_6OqOb5E19h8qSlS4vN9D1I7p-zgNbetPxqxsGKkhoTOBUiGn4AqmcfMkPw2f7KcjjVI1wnurAZakja-_382S1EFoGDai_2tk4msV5grZenrynj74Uc3BQPxQZLJ5SGiR5WQfy3fFrVLE2JfmjE0yOWX3kJM7bnet7n_jbG4jzXfHkWpbYfzWf6fc"
                                />
                                <div
                                    class="absolute bottom-0 left-0 right-0 p-8 bg-gradient-to-t from-black/80 to-transparent"
                                >
                                    <blockquote
                                        class="text-white font-medium italic border-l-4 border-primary pl-4"
                                    >
                                        "Mancing bukan soal seberapa banyak ikan
                                        yang didapat, tapi tentang ketenangan
                                        jiwa dan kebersamaan."
                                    </blockquote>
                                    <div class="mt-4 flex items-center gap-3">
                                        <img
                                            alt="Member Avatar"
                                            class="w-10 h-10 rounded-full border-2 border-white"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuABtKRmYPSTFVtBgUby4fkfggR2mXPJEuZs-udXAuzfZe_rRNoeumrbhJv9RfXiiGUrT6_ZXUjF1qerdMi6KvPKFDqI5O50RbweITPExQ8wzgP1RkiKRIP8ObkXcfPoGsLPlHEDh_43mqVmrFnkQNESC7tTvt7SyEUqAIZrkyAFD9vaj2wGXaDKTivEnxCe0K0g_hSBSXAlWcYPhX1_ZEzet6i1U7z12NLEnsT2ZGYvNSUj5zCeB2LDPWvfpe_vM3J91TJ5v3RWrno"
                                        />
                                        <div>
                                            <p
                                                class="text-white text-sm font-bold"
                                            >
                                                Budi Santoso
                                            </p>
                                            <p class="text-white/80 text-xs">
                                                Ketua Komunitas
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="absolute -z-10 -top-10 -right-10 w-64 h-64 bg-primary/10 rounded-full blur-3xl"
                            ></div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="py-24 px-6 bg-surface-light border-y border-border-light"
                id="event"
            >
                <div class="mx-auto max-w-7xl">
                    <div
                        class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6"
                    >
                        <div>
                            <h2
                                class="text-primary font-bold tracking-wider uppercase text-sm mb-2"
                            >
                                Jadwal Kami
                            </h2>
                            <h3
                                class="text-3xl md:text-4xl font-bold text-text-main"
                            >
                                Event Mancing Bareng
                            </h3>
                        </div>
                        <a
                            class="text-primary hover:text-primary-dark font-medium flex items-center gap-2 group"
                            href="#"
                        >
                            Lihat Semua Event
                            <span
                                class="material-symbols-outlined group-hover:translate-x-1 transition-transform"
                                >arrow_forward</span
                            >
                        </a>
                    </div>
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"
                    >
                        <div
                            class="group bg-white border border-border-light rounded-3xl overflow-hidden hover:border-primary/50 hover:shadow-lg transition-all"
                        >
                            <div class="relative h-48 overflow-hidden">
                                <img
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    data-alt="Fishing boat on calm blue sea at sunrise"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7fNxBqa0Xd_FOCAwcWRDIeBsm7n9Ph9UT9vnI5I2cEkh8TmpAuRyfEPzf71ubEUs-I8epY6tTbcZdL8k1dKVVAV1lFCvmzRPnquyF8zfosruxvBQE3r1bA43Mkl-4yAO3jhYnrlJCX7O2VsXg3vTV5msafJgggsYQMZ9ewPW5YU-ZDrF5apaJBmWhbp92uKg_WbANt6DLUThLw-FUNG5kEXm7roXTN_6xtaiFqsv0nvb1_93E7FHuTxZbGq9s2OQlXNhGrnKh3xU"
                                />
                                <div
                                    class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-primary font-bold px-3 py-1 rounded-lg text-sm shadow-sm"
                                >
                                    15 Okt 2023
                                </div>
                            </div>
                            <div class="p-6">
                                <div
                                    class="flex items-center gap-2 text-text-muted text-sm mb-3"
                                >
                                    <span
                                        class="material-symbols-outlined text-primary"
                                        style="font-size: 18px"
                                        >location_on</span
                                    >
                                    <span data-location="Jakarta"
                                        >Kepulauan Seribu, Jakarta</span
                                    >
                                </div>
                                <h4
                                    class="text-xl font-bold text-text-main mb-2"
                                >
                                    Deep Sea Fishing Tournament
                                </h4>
                                <p
                                    class="text-text-muted text-sm mb-6 line-clamp-2"
                                >
                                    Kompetisi mancing laut dalam tahunan dengan
                                    hadiah utama perahu karet dan perlengkapan
                                    pro.
                                </p>
                                <button
                                    class="w-full h-10 rounded-xl border border-primary text-primary bg-transparent text-sm font-bold hover:bg-primary hover:text-white transition-all"
                                >
                                    Daftar Sekarang
                                </button>
                            </div>
                        </div>
                        <div
                            class="group bg-white border border-border-light rounded-3xl overflow-hidden hover:border-primary/50 hover:shadow-lg transition-all"
                        >
                            <div class="relative h-48 overflow-hidden">
                                <img
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    data-alt="Peaceful freshwater lake surrounded by green trees"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCixPKc4j0v2k8oQny3YPRXe77FB25ocn4sEXNSnYwvbOBMu03F3GzvIi7XpnuQ3LC9xGE1mYncfkVB2tI1SlVOLP2VfPQF60sUf02rUlYz-cJ1SoEWh_PZT45TuHu22gr6hoMYggKXSHVAD8LbqPrbZ5hpHc-VQebbK8LzxF0nUMIPfz5DJxp5aSXhr4iJqD0Mec5kba_xCk5Q2af0sa6lJKXcBLsEJSf0KoS2uM4tXP2u6vDtwQC3pdyD09tP59y0ZG3OnESYvlk"
                                />
                                <div
                                    class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-primary font-bold px-3 py-1 rounded-lg text-sm shadow-sm"
                                >
                                    22 Okt 2023
                                </div>
                            </div>
                            <div class="p-6">
                                <div
                                    class="flex items-center gap-2 text-text-muted text-sm mb-3"
                                >
                                    <span
                                        class="material-symbols-outlined text-primary"
                                        style="font-size: 18px"
                                        >location_on</span
                                    >
                                    <span data-location="Purwakarta"
                                        >Waduk Jatiluhur, Purwakarta</span
                                    >
                                </div>
                                <h4
                                    class="text-xl font-bold text-text-main mb-2"
                                >
                                    Freshwater Casting Clinic
                                </h4>
                                <p
                                    class="text-text-muted text-sm mb-6 line-clamp-2"
                                >
                                    Belajar teknik casting air tawar bersama
                                    expert. Cocok untuk pemula yang ingin
                                    meningkatkan skill.
                                </p>
                                <button
                                    class="w-full h-10 rounded-xl border border-primary text-primary bg-transparent text-sm font-bold hover:bg-primary hover:text-white transition-all"
                                >
                                    Daftar Sekarang
                                </button>
                            </div>
                        </div>
                        <div
                            class="group bg-white border border-border-light rounded-3xl overflow-hidden hover:border-primary/50 hover:shadow-lg transition-all"
                        >
                            <div class="relative h-48 overflow-hidden">
                                <img
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    data-alt="People cleaning up trash on a beach coastline"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJMrc6_1EKLrZAcw7MLZDTW_c6IB7rqcdLJU-n60N-vCxNkKIWoWC78R-TfM8OlauPAa8M54V373xkzUUH9RxRmUcpi--JI8NakvRgLZSfVk4elCWA6OPwTRxO34QCLK0DtVb5dmpuC9rCYgGm-pEOwg09AyM4b6yqakwABRfGJUY0052HJPtPRZkw88T9-Lq4agQNEdQ2ZR-cZTE6TZnEKs4DXIQ6NfUSrifbWl3vOkgHGchaKWk6gvUF-eWm-toxVri2vbiTZ7I"
                                />
                                <div
                                    class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-primary font-bold px-3 py-1 rounded-lg text-sm shadow-sm"
                                >
                                    05 Nov 2023
                                </div>
                            </div>
                            <div class="p-6">
                                <div
                                    class="flex items-center gap-2 text-text-muted text-sm mb-3"
                                >
                                    <span
                                        class="material-symbols-outlined text-primary"
                                        style="font-size: 18px"
                                        >location_on</span
                                    >
                                    <span data-location="Bali"
                                        >Pantai Kuta, Bali</span
                                    >
                                </div>
                                <h4
                                    class="text-xl font-bold text-text-main mb-2"
                                >
                                    Beach Cleanup &amp; Surf Fishing
                                </h4>
                                <p
                                    class="text-text-muted text-sm mb-6 line-clamp-2"
                                >
                                    Gerakan bersih pantai dilanjutkan dengan
                                    sesi surf fishing santai saat sunset.
                                </p>
                                <button
                                    class="w-full h-10 rounded-xl border border-primary text-primary bg-transparent text-sm font-bold hover:bg-primary hover:text-white transition-all"
                                >
                                    Daftar Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 px-6 bg-white" id="galeri">
                <div class="mx-auto max-w-7xl">
                    <div class="text-center mb-16">
                        <h2
                            class="text-primary font-bold tracking-wider uppercase text-sm mb-2"
                        >
                            Galeri Tangkapan
                        </h2>
                        <h3
                            class="text-3xl md:text-4xl font-bold text-text-main"
                        >
                            Hall of Fame
                        </h3>
                        <p class="text-text-muted mt-4 max-w-2xl mx-auto">
                            Momen terbaik anggota kami saat menaklukkan monster
                            air. Bagikan fotomu dan jadilah inspirasi bagi
                            pemancing lainnya.
                        </p>
                    </div>
                    <div
                        class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 auto-rows-[200px]"
                    >
                        <div
                            class="col-span-2 row-span-2 rounded-3xl overflow-hidden relative group shadow-md"
                        >
                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Man holding a large fish on a boat with blue ocean background"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAXzjFwBDkzEGhI9_sNrbz_wNNJGckCbdN8Jxq1bo3t6byE8vB-tjA8O2XVUx66W1qchtAbyk8LjMVAEFHjnwhTJc5b0MPd5zGDI3aWHb55e6KvY7Voz_4qYaLLgdDg5Gj-aetUq5hm3qWSZjXWzX8aOYHrZf1-6RwQr20F_d7J-IG5mwcQbTP0PZLpdfG3xWuuoBb5W9Nc7vxrWIc3DsFVa_-xXSHZq0Z_uUYZxgH-OpsR5EqPHbO7zvGc0kodKdvWwKk2iFcAWsQ"
                            />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6"
                            >
                                <p class="text-white font-medium">
                                    Giant Trevally - 25kg
                                </p>
                            </div>
                        </div>
                        <div
                            class="rounded-3xl overflow-hidden relative group shadow-md"
                        >
                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Close up of a fishing reel and rod against water"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAyQNt-MKwKux7A4csz384j9LtcYXlzETbbSiCcgQ3COhO4q6iPjaPUXSRLQRRg4KHaATPZjCXBrWD91m0rXzY8EAqxBNzoTYRFh9LO_G7RG2cW59-_pttqyckyTDJ7C-tOMMml1gJX48tyqgsSobdUI6GKsIu95_WGnDzG296nWH6SuMiRaSAgNL1lu3Djl1QF-aq_AElBMt6eQMTKXIGfESoq0WJfbG5rQb3VXUgaPRXxNux8IXWLN9U4JhtFG-8fUefkrpxN6tA"
                            />
                        </div>
                        <div
                            class="rounded-3xl overflow-hidden relative group shadow-md"
                        >
                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Sunset fishing silhouette on a pier"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGI5H351YGPiTFp7efkJjKFIlvtbbOORzXQg6eDsf516irI0O2q2AtdczPXdxjYgo0EVUsO_e-Vk_yJOyMWxZhQeiF-hn8gjrDayciPsU3MAyIHheWr6b0HeFzrIRcNXQPJ13azPTUDI9RND9wGAn-oqo_fq33JJe_mGwdXETTr9kBXSbJbA4569YT5rPZLWHRiGJx1zgUjMficW6qBhfooT9ymjAkK7ILmX_eSkfXZFUQbSHoRkXNPeRXJ892AdY5Hxp9mSDlnGM"
                            />
                        </div>
                        <div
                            class="col-span-2 row-span-1 rounded-3xl overflow-hidden relative group shadow-md"
                        >
                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Wide shot of a fishing tournament with many boats"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCfzj54BM8M2_6VbATqWws2C2EfZdDbDCDjn4KWKb35FHiPdbDsz8aXZgoO2gfiLUbyTl-27oYF9YTBc5SsOSVpl7TD5qktCnRsx2UdBrn1gy3fbWtvy5PDLzcnB5_tHR0P6wTxqkaXyeupZOQ1AX7SPKEuOSczPQzigtx_SG2YBwPBslDZUVswnUCr25iRzAqyy5D3mvJ3MucfVcWPyheti3s2x1tvP9JNzbymyKKncXrieGAFpr4HyH8DWddNc8eqRibiuJy9Tw0"
                            />
                        </div>
                        <div
                            class="col-span-1 row-span-2 rounded-3xl overflow-hidden relative group shadow-md"
                        >
                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Vertical shot of a fisherman casting a line"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDwZ3gVLE8f9R_0NZM96dqubcyo4LDHOn1B79LT2YiCGASnqReG0BIwlPIYkdxes7Y4uOos12PggbvlbI0meq5Stbg7vpu6sYzaMAVxT0BIb5NwpZM4RBI6lpkala0C0feqACNG1foVPkOK2KlJod24azlUoyKNyXNcLpbSdlt82Z7SlQnDk4UGUuQuh0BimaJ_exTm8573bvJuxxiX9PXEJJ9wO_y2BJt6uif7-DBLhXoX6ZeBDeHHrKJRI17oNU9NA-spwSVzKvI"
                            />
                        </div>
                        <div
                            class="rounded-3xl overflow-hidden relative group shadow-md"
                        >
                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Freshly caught fish on a measuring board"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1KRMaKRlzC-kxNzVsMP9nvLdMMy0hKJi4UmctIt89wJtErej8uiycRCN4VZCjlohWbfIM932huBUcezD81iwV7X6uCZDMtaQz9YnhutJ9JqbYo0lcDg8O6_lU9BubpeANhJPLE4NqpAvnnMhXnDDrJhsQB3qBwzJq4QRFID2LAkk33uz7BDRoOQnBrX5fRYcPWMF6ePwO_U-FMt9lT7N5uF04MsHOU2o6yK7eacQC9w4bFe4lz_yTuzjHJtI21FT_zzAhlLpQI6U"
                            />
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 px-6 relative overflow-hidden bg-sky-50">
                <div
                    class="absolute inset-0 opacity-5"
                    style="
                        background-image: radial-gradient(
                            #0284c7 1px,
                            transparent 1px
                        );
                        background-size: 30px 30px;
                    "
                ></div>
                <div
                    class="mx-auto max-w-4xl relative z-10 text-center bg-white border border-white p-10 md:p-16 rounded-[3rem] shadow-xl"
                >
                    <h2
                        class="text-3xl md:text-5xl font-black text-text-main mb-6"
                    >
                        Siap Untuk Petualangan Baru?
                    </h2>
                    <p class="text-text-muted text-lg mb-10 max-w-2xl mx-auto">
                        Dapatkan akses ke event eksklusif, diskon alat pancing,
                        dan komunitas yang suportif. Daftar sekarang, gratis!
                    </p>
                    <form
                        class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto"
                    >
                        <input
                            class="flex-1 h-14 rounded-full bg-slate-50 border-border-light text-text-main placeholder-text-muted focus:border-primary focus:ring-1 focus:ring-primary px-6 shadow-inner"
                            placeholder="Masukkan alamat email Anda"
                            type="email"
                        />
                        <button
                            class="h-14 px-8 rounded-full bg-primary text-white font-bold text-base hover:bg-primary-dark transition-all whitespace-nowrap shadow-lg shadow-sky-500/30"
                            type="button"
                        >
                            Gabung Gratis
                        </button>
                    </form>
                    <p class="text-slate-400 text-sm mt-4">
                        Kami menghormati privasi Anda. Unsubscribe kapan saja.
                    </p>
                </div>
            </section>
            <footer
                class="bg-slate-900 border-t border-slate-800 pt-16 pb-8 px-6"
                id="kontak"
            >
                <div class="mx-auto max-w-7xl">
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16"
                    >
                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-full bg-primary text-white"
                                >
                                    <span class="material-symbols-outlined"
                                        >sailing</span
                                    >
                                </div>
                                <span class="text-xl font-bold text-white"
                                    >Komunitas Mancing</span
                                >
                            </div>
                            <p class="text-slate-400 text-sm leading-relaxed">
                                Wadah bagi para pemancing Indonesia untuk
                                berbagi pengalaman, menjaga kelestarian alam,
                                dan mempererat tali persaudaraan.
                            </p>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-6">Navigasi</h4>
                            <ul class="space-y-3 text-sm text-slate-400">
                                <li>
                                    <a
                                        class="hover:text-primary transition-colors"
                                        href="#"
                                        >Beranda</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="hover:text-primary transition-colors"
                                        href="#"
                                        >Tentang Kami</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="hover:text-primary transition-colors"
                                        href="#"
                                        >Event</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="hover:text-primary transition-colors"
                                        href="#"
                                        >Galeri</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-6">
                                Kontak Kami
                            </h4>
                            <ul class="space-y-4 text-sm text-slate-400">
                                <li class="flex items-center gap-3">
                                    <span
                                        class="material-symbols-outlined text-primary"
                                        style="font-size: 20px"
                                        >mail</span
                                    >
                                    <span>hello@komunitasmancing.id</span>
                                </li>
                                <li class="flex items-center gap-3">
                                    <span
                                        class="material-symbols-outlined text-primary"
                                        style="font-size: 20px"
                                        >call</span
                                    >
                                    <span>+62 812 3456 7890</span>
                                </li>
                                <li class="flex items-center gap-3">
                                    <span
                                        class="material-symbols-outlined text-primary"
                                        style="font-size: 20px"
                                        >location_on</span
                                    >
                                    <span
                                        >Jl. Pesisir No. 45, Jakarta Utara</span
                                    >
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-6">
                                Ikuti Kami
                            </h4>
                            <div class="flex gap-4">
                                <a
                                    class="h-10 w-10 rounded-full bg-slate-800 flex items-center justify-center text-white hover:bg-primary hover:text-white transition-colors"
                                    href="#"
                                >
                                    <svg
                                        aria-hidden="true"
                                        class="w-5 h-5"
                                        fill="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            clip-rule="evenodd"
                                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                            fill-rule="evenodd"
                                        ></path>
                                    </svg>
                                </a>
                                <a
                                    class="h-10 w-10 rounded-full bg-slate-800 flex items-center justify-center text-white hover:bg-primary hover:text-white transition-colors"
                                    href="#"
                                >
                                    <svg
                                        aria-hidden="true"
                                        class="w-5 h-5"
                                        fill="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            clip-rule="evenodd"
                                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.991.218 2.815.888a4.433 4.433 0 011.57 1.57c.7.824.868 1.75.917 2.815.046 1.024.06 1.379.06 3.808 0 2.43-.013 2.784-.06 3.808-.049 1.064-.218 1.991-.888 2.815a4.433 4.433 0 01-1.57 1.57c-.824.7-1.75.868-2.815.917-1.024.046-1.379.06-3.808.06-2.43 0-2.784-.013-3.808-.06-1.064-.049-1.991-.218-2.815-.888a4.433 4.433 0 01-1.57-1.57c-.7-.824-.868-1.75-.917-2.815-.046-1.024-.06-1.379-.06-3.808 0-2.43.013-2.784.06-3.808.049-1.064.218-1.991.888-2.815a4.433 4.433 0 011.57-1.57c.824-.7 1.75-.868 2.815-.917 1.024-.046 1.379-.06 3.808-.06zm-1.087 3.772a8.949 8.949 0 00-3.375.375 5.357 5.357 0 00-2.26 1.474 5.357 5.357 0 00-1.474 2.26 8.949 8.949 0 00-.375 3.375c0 1.258.01 1.577.057 2.658.046 1.042.22 1.758.625 2.254.496.505 1.13.792 2.254.838 1.082.047 1.4.057 2.658.057 1.258 0 1.577-.01 2.658-.057 1.042-.046 1.758-.22 2.254-.625.505-.496.792-1.13.838-2.254.047-1.082.057-1.4.057-2.658 0-1.258-.01-1.577-.057-2.658-.046-1.042-.22-1.758-.625-2.254-.496-.505-1.13-.792-2.254-.838-1.082-.047-1.4-.057-2.658-.057zM12 7.21a4.79 4.79 0 110 9.58 4.79 4.79 0 010-9.58zm0 1.6a3.19 3.19 0 100 6.38 3.19 3.19 0 000-6.38zm5.385-2.484a1.067 1.067 0 110 2.134 1.067 1.067 0 010-2.134z"
                                            fill-rule="evenodd"
                                        ></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-500"
                    >
                        <p>
                            © 2023 Komunitas Mancing Indonesia. All rights
                            reserved.
                        </p>
                        <div class="flex gap-6">
                            <a class="hover:text-primary" href="#"
                                >Privacy Policy</a
                            >
                            <a class="hover:text-primary" href="#"
                                >Terms of Service</a
                            >
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>

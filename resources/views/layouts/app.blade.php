<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Unitas Movers — Professional Moving Company')</title>
    <meta name="description" content="@yield('meta_description', 'Professional movers in Calgary. Licensed, insured, affordable. Local & long-distance moving, packing, storage. Free quotes — call (403) 800-2747.')">
    <meta name="robots" content="@yield('robots', 'index, follow')">

    <link rel="canonical" href="@yield('canonical', url()->current())">

    {{-- Local SEO Geo Tags --}}
    <meta name="geo.region" content="CA-AB">
    <meta name="geo.placename" content="Calgary">
    <meta name="geo.position" content="51.0447;-114.0719">
    <meta name="ICBM" content="51.0447, -114.0719">

    {{-- Favicon & Apple Touch Icon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <meta name="theme-color" content="#5934ff">

    {{-- Open Graph --}}
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:site_name" content="Unitas Movers">
    <meta property="og:title" content="@yield('title', 'Unitas Movers — Professional Moving Company')">
    <meta property="og:description" content="@yield('meta_description', 'Professional movers in Calgary. Licensed, insured, affordable. Local & long-distance moving, packing, storage. Free quotes — call (403) 800-2747.')">
    <meta property="og:url" content="@yield('canonical', url()->current())">
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))">
    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Unitas Movers — Professional Moving Company')">
    <meta name="twitter:description" content="@yield('meta_description', 'Professional movers in Calgary. Licensed, insured, affordable. Local & long-distance moving, packing, storage. Free quotes — call (403) 800-2747.')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/og-default.jpg'))">

    <style>[x-cloak] { display: none !important; }</style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('schema')
</head>
<body class="bg-white text-dark font-sans antialiased">
    {{-- Navbar --}}
    <nav class="fixed top-0 inset-x-0 z-50 bg-white/80 backdrop-blur-xl border-b border-gray-200/50 transition-all" x-data="{ mobileOpen: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-[72px]">
                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center space-x-2.5">
                    <div class="w-9 h-9 bg-primary rounded-xl flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    </div>
                    <span class="text-dark font-bold text-xl tracking-tight">Unitas Movers</span>
                </a>

                {{-- Desktop Nav --}}
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="{{ route('services.index') }}" class="text-gray-500 hover:text-dark text-[15px] font-medium transition-colors">Services</a>
                    <a href="{{ route('areas.index') }}" class="text-gray-500 hover:text-dark text-[15px] font-medium transition-colors">Areas</a>
                    <a href="{{ route('routes.index') }}" class="text-gray-500 hover:text-dark text-[15px] font-medium transition-colors">Routes</a>
                    <a href="{{ route('pricing') }}" class="text-gray-500 hover:text-dark text-[15px] font-medium transition-colors">Pricing</a>
                    <a href="{{ route('blog.index') }}" class="text-gray-500 hover:text-dark text-[15px] font-medium transition-colors">Blog</a>
                    <a href="{{ route('about') }}" class="text-gray-500 hover:text-dark text-[15px] font-medium transition-colors">About</a>
                </div>

                <div class="hidden lg:flex items-center space-x-4">
                    <a href="tel:+14038002747" class="text-dark font-semibold text-sm flex items-center hover:text-primary transition-colors">
                        <svg class="w-4 h-4 mr-1.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        (403) 800-2747
                    </a>
                    <a href="{{ route('quote.create') }}" class="bg-primary hover:bg-primary-dark text-white px-6 py-2.5 rounded-xl font-semibold text-sm transition-all shadow-[0_4px_15px_rgba(89,52,255,0.3)] hover:shadow-[0_6px_20px_rgba(89,52,255,0.4)]">
                        Get Free Quote
                    </a>
                </div>

                {{-- Mobile Hamburger --}}
                <button @click="mobileOpen = !mobileOpen" class="lg:hidden text-dark p-2 rounded-lg hover:bg-gray-100 transition">
                    <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    <svg x-show="mobileOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            {{-- Mobile Menu --}}
            <div x-show="mobileOpen" x-transition.opacity class="lg:hidden pb-6">
                <div class="flex flex-col space-y-1 pt-2">
                    <a href="{{ route('services.index') }}" class="text-gray-700 hover:text-primary hover:bg-primary-50 px-4 py-2.5 rounded-xl text-sm font-medium transition">Services</a>
                    <a href="{{ route('areas.index') }}" class="text-gray-700 hover:text-primary hover:bg-primary-50 px-4 py-2.5 rounded-xl text-sm font-medium transition">Areas</a>
                    <a href="{{ route('routes.index') }}" class="text-gray-700 hover:text-primary hover:bg-primary-50 px-4 py-2.5 rounded-xl text-sm font-medium transition">Routes</a>
                    <a href="{{ route('pricing') }}" class="text-gray-700 hover:text-primary hover:bg-primary-50 px-4 py-2.5 rounded-xl text-sm font-medium transition">Pricing</a>
                    <a href="{{ route('blog.index') }}" class="text-gray-700 hover:text-primary hover:bg-primary-50 px-4 py-2.5 rounded-xl text-sm font-medium transition">Blog</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-primary hover:bg-primary-50 px-4 py-2.5 rounded-xl text-sm font-medium transition">About</a>
                    <div class="pt-3 px-4 space-y-3">
                        <a href="tel:+14038002747" class="flex items-center text-primary font-semibold text-sm">
                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            (403) 800-2747
                        </a>
                        <a href="{{ route('quote.create') }}" class="block bg-primary text-white py-3 rounded-xl font-semibold text-sm text-center shadow-[0_4px_15px_rgba(89,52,255,0.3)]">Get Free Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{-- Spacer for fixed nav --}}
    <div class="h-[72px]"></div>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-dark-secondary text-white pt-20 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-16 border-b border-white/10">
                {{-- Brand --}}
                <div class="lg:col-span-1">
                    <div class="flex items-center space-x-2.5 mb-5">
                        <div class="w-9 h-9 bg-primary rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                        </div>
                        <span class="text-white font-bold text-xl tracking-tight">Unitas Movers</span>
                    </div>
                    <p class="text-white/50 text-sm leading-relaxed">Calgary's trusted moving company. Licensed, insured, affordable, and flexible.</p>
                    <div class="flex space-x-3 mt-5">
                        <a href="#" class="w-9 h-9 rounded-xl bg-white/5 hover:bg-primary/20 flex items-center justify-center transition" aria-label="Facebook">
                            <svg class="w-4 h-4 text-white/60" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-xl bg-white/5 hover:bg-primary/20 flex items-center justify-center transition" aria-label="Instagram">
                            <svg class="w-4 h-4 text-white/60" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-xl bg-white/5 hover:bg-primary/20 flex items-center justify-center transition" aria-label="Google">
                            <svg class="w-4 h-4 text-white/60" fill="currentColor" viewBox="0 0 24 24"><path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Services --}}
                <div>
                    <h4 class="font-semibold text-xs uppercase tracking-widest text-white/40 mb-5">Services</h4>
                    <ul class="space-y-3 text-sm text-white/60">
                        <li><a href="{{ route('services.show', 'local-moving') }}" class="hover:text-white transition">Local Moving</a></li>
                        <li><a href="{{ route('services.show', 'long-distance-moving') }}" class="hover:text-white transition">Long Distance</a></li>
                        <li><a href="{{ route('services.show', 'commercial-moving') }}" class="hover:text-white transition">Commercial Moving</a></li>
                        <li><a href="{{ route('services.show', 'packing-unpacking') }}" class="hover:text-white transition">Packing & Unpacking</a></li>
                        <li><a href="{{ route('services.show', 'piano-moving') }}" class="hover:text-white transition">Piano Moving</a></li>
                        <li><a href="{{ route('services.show', 'storage-solutions') }}" class="hover:text-white transition">Storage Solutions</a></li>
                    </ul>
                </div>

                {{-- Areas --}}
                <div>
                    <h4 class="font-semibold text-xs uppercase tracking-widest text-white/40 mb-5">Areas Served</h4>
                    <ul class="space-y-3 text-sm text-white/60">
                        <li><a href="{{ route('areas.show', 'nw-calgary') }}" class="hover:text-white transition">NW Calgary</a></li>
                        <li><a href="{{ route('areas.show', 'ne-calgary') }}" class="hover:text-white transition">NE Calgary</a></li>
                        <li><a href="{{ route('areas.show', 'sw-calgary') }}" class="hover:text-white transition">SW Calgary</a></li>
                        <li><a href="{{ route('areas.show', 'se-calgary') }}" class="hover:text-white transition">SE Calgary</a></li>
                        <li><a href="{{ route('areas.show', 'airdrie') }}" class="hover:text-white transition">Airdrie</a></li>
                        <li><a href="{{ route('areas.show', 'cochrane') }}" class="hover:text-white transition">Cochrane</a></li>
                    </ul>
                </div>

                {{-- Company --}}
                <div>
                    <h4 class="font-semibold text-xs uppercase tracking-widest text-white/40 mb-5">Company</h4>
                    <ul class="space-y-3 text-sm text-white/60">
                        <li><a href="{{ route('about') }}" class="hover:text-white transition">About Us</a></li>
                        <li><a href="{{ route('about.licensed-insured') }}" class="hover:text-white transition">Licensed & Insured</a></li>
                        <li><a href="{{ route('pricing') }}" class="hover:text-white transition">Pricing</a></li>
                        <li><a href="{{ route('reviews') }}" class="hover:text-white transition">Reviews</a></li>
                        <li><a href="{{ route('faq') }}" class="hover:text-white transition">FAQ</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact</a></li>
                        <li><a href="{{ route('blog.index') }}" class="hover:text-white transition">Blog</a></li>
                        <li><a href="{{ route('privacy') }}" class="hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="{{ route('terms') }}" class="hover:text-white transition">Terms of Service</a></li>
                        <li><a href="{{ route('site-map') }}" class="hover:text-white transition">Site Map</a></li>
                    </ul>
                </div>

                {{-- Contact --}}
                <div>
                    <h4 class="font-semibold text-xs uppercase tracking-widest text-white/40 mb-5">Contact</h4>
                    <ul class="space-y-4 text-sm text-white/60">
                        <li class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <a href="tel:+14038002747" class="hover:text-white transition">(403) 800-2747</a>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <a href="mailto:info@unitasmovers.ca" class="hover:text-white transition">info@unitasmovers.ca</a>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <span>Calgary, Alberta, Canada</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Bottom bar --}}
            <div class="flex flex-col md:flex-row justify-between items-center pt-8 text-sm text-white/30">
                <p>&copy; {{ date('Y') }} Unitas Movers. All rights reserved.</p>
                <p class="mt-2 md:mt-0">Professional moving solutions for Calgary and area.</p>
            </div>
        </div>
    </footer>

    {{-- Mobile Sticky CTA Bar --}}
    <div class="fixed bottom-0 inset-x-0 bg-white lg:hidden z-40 border-t border-gray-200 safe-bottom shadow-[0_-4px_20px_rgba(0,0,0,0.08)]">
        <div class="flex">
            <a href="tel:+14038002747" class="flex-1 flex items-center justify-center py-3.5 text-dark font-semibold text-sm border-r border-gray-100">
                <svg class="w-4 h-4 mr-1.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                Call Now
            </a>
            <a href="{{ route('quote.create') }}" class="flex-1 flex items-center justify-center py-3.5 bg-primary text-white font-semibold text-sm">
                <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                Free Quote
            </a>
        </div>
    </div>

    {{-- Scroll Reveal Observer --}}
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

        document.querySelectorAll('[data-reveal]').forEach(el => observer.observe(el));
    });

    // Animated counter
    function animateCounter(el, target, duration = 2000) {
        let start = 0;
        const step = (timestamp) => {
            if (!start) start = timestamp;
            const progress = Math.min((timestamp - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.floor(eased * target).toLocaleString();
            if (progress < 1) requestAnimationFrame(step);
            else el.textContent = target.toLocaleString() + (el.dataset.suffix || '');
        };
        requestAnimationFrame(step);
    }
    </script>

    @yield('scripts')
</body>
</html>

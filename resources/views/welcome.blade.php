<!DOCTYPE html>
<html lang="en" class="h-full bg-stone-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AURA | Luxury Beauty & Jewelry Boutique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <link rel="icon" href="{{ asset('images/logo.jpg') }}" type="image/jpeg">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        rosewood: {
                             50: '#faf5f5',
                            100: '#f6eded',
                            200: '#eee0e0',
                            300: '#dfc9c9',
                            400: '#cbabac',
                            500: '#b28789',
                            600: '#9b6c6f',
                            700: '#815558',
                            800: '#6d484a',
                            900: '#5c3f41',
                        },
                        blush: '#F9ECEC',
                        champagne: '#F4E8D7',
                        gold: '#D4AF37',
                    },
                    fontFamily: {
                        serif: ['Cormorant Garamond', 'serif'],
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .glass-panel {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }


    </style>
</head>
<body class="font-sans text-stone-800 antialiased min-h-full flex flex-col selection:bg-rosewood-200">
    <div class="bg-rosewood-900 text-rosewood-100 text-xs py-2 px-4 text-center tracking-widest uppercase font-medium">
        Free Worldwide Shipping on Orders Over GH₵75 | Complimentary Gift Box Included
    </div>

    <header class="sticky top-0 z-30 glass-panel border-b border-rosewood-100/60 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="lg:hidden p-2 text-stone-600 hover:text-rosewood-800 focus:outline-none">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>

                <!-- Brand Logo -->
                <a href="#" class="flex flex-col items-center group">
                    <span class="font-serif text-3xl sm:text-4xl tracking-widest font-bold text-rosewood-900 group-hover:text-rosewood-700 transition">AURA</span>
                    <span class="text-[9px] tracking-[0.3em] uppercase text-rosewood-500 -mt-1 font-semibold">Boutique</span>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center space-x-8 text-sm font-medium tracking-wider uppercase text-stone-700">
                    <button onclick="navigateTo('home')" class="category-nav-link hover:text-rosewood-600 transition py-1 border-b-2 border-transparent hover:border-rosewood-500">Home</button>
                    <button onclick="navigateTo('category', 'Jewelry')" class="category-nav-link hover:text-rosewood-600 transition py-1 border-b-2 border-transparent hover:border-rosewood-500">Jewelry</button>
                    <button onclick="navigateTo('category', 'Lip Care')" class="category-nav-link hover:text-rosewood-600 transition py-1 border-b-2 border-transparent hover:border-rosewood-500">Lip Care</button>
                    <button onclick="navigateTo('category', 'Handbags')" class="category-nav-link hover:text-rosewood-600 transition py-1 border-b-2 border-transparent hover:border-rosewood-500">Handbags</button>
                    <button onclick="navigateTo('category', 'Hair & Wigs')" class="category-nav-link hover:text-rosewood-600 transition py-1 border-b-2 border-transparent hover:border-rosewood-500">Hair & Wigs</button>
                </nav>

                <!-- Header Action Icons -->
                <div class="flex items-center space-x-4">
                    <!-- Search Input Wrapper -->
                    <div class="relative hidden sm:block">
                        <input type="text" id="search-input" placeholder="Search luxury items..." 
                            class="w-44 lg:w-60 pl-9 pr-4 py-2 text-xs rounded-full bg-rosewood-50/60 border border-rosewood-200/60 focus:outline-none focus:border-rosewood-400 focus:ring-1 focus:ring-rosewood-300 transition-all">
                        <i data-lucide="search" class="w-4 h-4 text-rosewood-400 absolute left-3 top-2.5"></i>
                    </div>

                    <!-- User Account Icon -->
                    <button class="p-2 text-stone-700 hover:text-rosewood-600 transition rounded-full hover:bg-rosewood-50">
                        <i data-lucide="user" class="w-5 h-5"></i>
                    </button>

                    <!-- Cart Link Trigger Icon -->
                    <button onclick="navigateTo('cart')" class="relative p-2 text-stone-700 hover:text-rosewood-600 transition rounded-full hover:bg-rosewood-50">
                        <i data-lucide="shopping-bag" class="w-5 h-5"></i>
                        <span id="cart-badge" class="absolute top-1 right-1 bg-rosewood-700 text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center transform scale-0 transition-transform duration-300">0</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Search Bar (Only Visible on Small Screens) -->
        <div class="px-4 pb-3 sm:hidden">
            <div class="relative">
                <input type="text" id="mobile-search-input" placeholder="Search catalog..." 
                    class="w-full pl-9 pr-4 py-2 text-xs rounded-full bg-rosewood-50 border border-rosewood-200 focus:outline-none focus:border-rosewood-400">
                <i data-lucide="search" class="w-4 h-4 text-rosewood-400 absolute left-3 top-2.5"></i>
            </div>
        </div>
    </header>

    <!-- PAGE CONTAINER WRAPPER FOR SPA ROUTING -->
    <div id="page-container" class="flex-grow flex flex-col min-h-[70vh]">
        
        <!-- HOME PAGE VIEW -->
        <div id="view-home" class="page-view flex-grow">
            <section class="relative bg-gradient-to-r from-blush via-rosewood-50 to-champagne/40 py-16 lg:py-24 overflow-hidden border-b border-rosewood-100">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                        <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                            <span class="inline-block px-3 py-1 bg-rosewood-100 text-rosewood-800 text-xs font-semibold uppercase tracking-widest rounded-full">New Autumn '26 Arrival</span>
                            <h1 class="font-serif text-4xl sm:text-6xl text-rosewood-900 font-bold leading-tight">Elegance Crafted For Your Daily Grace</h1>
                            <p class="text-stone-600 text-base sm:text-lg max-w-xl mx-auto lg:mx-0 font-light leading-relaxed">
                                Discover curated beaded arm candy, high-shine lip treatments, statement Italian leather vanity bags, and undetectable lace wigs tailored for modern luxury.
                            </p>
                            <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                                <button onclick="navigateTo('category', 'All')" class="w-full sm:w-auto px-8 py-3.5 bg-rosewood-800 hover:bg-rosewood-900 text-white font-medium text-xs uppercase tracking-widest rounded-full shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                                    Explore Collection
                                </button>
                                <button onclick="navigateTo('category', 'Jewelry')" class="w-full sm:w-auto px-8 py-3.5 bg-white border border-rosewood-300 text-rosewood-800 hover:bg-rosewood-50 font-medium text-xs uppercase tracking-widest rounded-full transition text-center">
                                    Shop Jewelry
                                </button>
                            </div>
                        </div>

                        <!-- Hero Image Grid Collage -->
                        <div class="lg:col-span-5 grid grid-cols-2 gap-3 relative">
                            <div class="space-y-3">
                                <div class="h-48 sm:h-64 rounded-2xl overflow-hidden shadow-md group cursor-pointer" onclick="navigateTo('category', 'Jewelry')">
                                    <img src="{{ asset('images/p1.jpg') }}" alt="Jewelry Set" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                </div>
                                <div class="h-36 sm:h-44 rounded-2xl overflow-hidden shadow-md group cursor-pointer" onclick="navigateTo('category', 'Lip Care')">
                                    <img src="{{ asset('images/p5.jpg') }}" alt="Lip Oil" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                </div>
                            </div>
                            <div class="space-y-3 pt-6">
                                <div class="h-36 sm:h-44 rounded-2xl overflow-hidden shadow-md group cursor-pointer" onclick="navigateTo('category', 'Handbags')">
                                    <img src="{{ asset('images/p8.jpg') }}" alt="Luxury Handbag" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                </div>
                                <div class="h-48 sm:h-64 rounded-2xl overflow-hidden shadow-md group cursor-pointer" onclick="navigateTo('category', 'Hair & Wigs')">
                                    <img src="{{ asset('images/p10.jpg') }}" alt="Glam Wig Styling" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Featured Categories Grid -->
            <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <h2 class="font-serif text-3xl font-bold text-center text-rosewood-900 mb-10">Explore Our Collections</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div onclick="navigateTo('category', 'Jewelry')" class="group relative rounded-3xl overflow-hidden h-80 cursor-pointer shadow-md">
                        <img src="{{ asset('images/p3.jpg') }}" alt="Jewelry collection" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-6">
                            <h3 class="font-serif text-2xl font-bold text-white">Jewelry</h3>
                            <p class="text-xs text-rosewood-200 mt-1">Bracelets, chains & pendants</p>
                        </div>
                    </div>
                    <div onclick="navigateTo('category', 'Lip Care')" class="group relative rounded-3xl overflow-hidden h-80 cursor-pointer shadow-md">
                        <img src="{{ asset('images/p6.jpg') }}" alt="Lip Care collection" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-6">
                            <h3 class="font-serif text-2xl font-bold text-white">Lip Care</h3>
                            <p class="text-xs text-rosewood-200 mt-1">High-shine glosses & treatments</p>
                        </div>
                    </div>
                    <div onclick="navigateTo('category', 'Handbags')" class="group relative rounded-3xl overflow-hidden h-80 cursor-pointer shadow-md">
                        <img src="{{ asset('images/p9.jpg') }}" alt="Handbags collection" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-6">
                            <h3 class="font-serif text-2xl font-bold text-white">Handbags</h3>
                            <p class="text-xs text-rosewood-200 mt-1">Italian leather & vanity trunks</p>
                        </div>
                    </div>
                    <div onclick="navigateTo('category', 'Hair & Wigs')" class="group relative rounded-3xl overflow-hidden h-80 cursor-pointer shadow-md">
                        <img src="{{ asset('images/p10.jpg') }}" alt="Hair and Wigs collection" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-6">
                            <h3 class="font-serif text-2xl font-bold text-white">Hair & Wigs</h3>
                            <p class="text-xs text-rosewood-200 mt-1">HD lace frontals & human hair</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- DEDICATED CATEGORY PAGE VIEW -->
        <div id="view-category" class="page-view hidden flex-grow max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex items-center space-x-2 text-xs text-stone-500 mb-6">
                <button onclick="navigateTo('home')" class="hover:text-rosewood-700">Home</button>
                <span>/</span>
                <span id="category-breadcrumb" class="font-semibold text-rosewood-900">Category</span>
            </div>

            <div class="mb-8 bg-rosewood-50 p-8 rounded-3xl border border-rosewood-100 flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h1 id="category-page-title" class="font-serif text-3xl sm:text-4xl font-bold text-rosewood-900">Collection</h1>
                    <p id="category-page-subtitle" class="text-xs sm:text-sm text-stone-600 mt-1">Hand-picked luxury selections crafted for you.</p>
                </div>
                <button onclick="navigateTo('home')" class="self-start md:self-auto px-5 py-2.5 bg-white border border-stone-200 rounded-full text-xs font-medium text-stone-700 hover:bg-stone-50 flex items-center space-x-2">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    <span>Back to Home</span>
                </button>
            </div>

            <!-- Filter Controls Bar -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 pb-8 border-b border-stone-200">
                <div id="category-pills" class="flex items-center space-x-2 overflow-x-auto hide-scrollbar py-1">
                    <button onclick="navigateTo('category', 'All')" class="cat-pill px-5 py-2 rounded-full text-xs font-semibold uppercase tracking-wider transition-all">All</button>
                    <button onclick="navigateTo('category', 'Jewelry')" class="cat-pill px-5 py-2 rounded-full text-xs font-semibold uppercase tracking-wider transition-all">Jewelry</button>
                    <button onclick="navigateTo('category', 'Lip Care')" class="cat-pill px-5 py-2 rounded-full text-xs font-semibold uppercase tracking-wider transition-all">Lip Care</button>
                    <button onclick="navigateTo('category', 'Handbags')" class="cat-pill px-5 py-2 rounded-full text-xs font-semibold uppercase tracking-wider transition-all">Handbags</button>
                    <button onclick="navigateTo('category', 'Hair & Wigs')" class="cat-pill px-5 py-2 rounded-full text-xs font-semibold uppercase tracking-wider transition-all">Hair & Wigs</button>
                </div>

                <div class="flex flex-wrap items-center gap-4">
                    <div class="flex items-center space-x-2 bg-white px-3 py-1.5 rounded-full border border-stone-200 text-xs">
                        <span class="text-stone-500">Max Price:</span>
                        <span id="price-display" class="font-bold text-rosewood-800">GH₵160</span>
                        <input type="range" id="price-range" min="10" max="160" value="160" class="w-24 accent-rosewood-700 cursor-pointer">
                    </div>

                    <select id="sort-select" class="bg-white border border-stone-200 text-stone-700 text-xs rounded-full px-4 py-2 focus:outline-none focus:border-rosewood-400">
                        <option value="featured">Featured First</option>
                        <option value="low-high">Price: Low to High</option>
                        <option value="high-low">Price: High to Low</option>
                    </select>
                </div>
            </div>

            <!-- Category Grid -->
            <div id="product-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 pt-8"></div>

            <div id="empty-state" class="hidden text-center py-16">
                <i data-lucide="package-open" class="w-12 h-12 text-rosewood-300 mx-auto mb-3"></i>
                <h3 class="font-serif text-xl font-semibold text-stone-700">No boutique products found</h3>
                <p class="text-xs text-stone-500 mt-1">Try adjusting your filters or search keywords.</p>
                <button onclick="resetFilters()" class="mt-4 px-6 py-2 bg-rosewood-800 text-white text-xs uppercase tracking-wider rounded-full">Reset Filters</button>
            </div>
        </div>

        <!-- FULL PRODUCT DETAIL PAGE VIEW -->
        <div id="view-product" class="page-view hidden flex-grow max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex items-center space-x-2 text-xs text-stone-500 mb-6">
                <button onclick="navigateTo('home')" class="hover:text-rosewood-700">Home</button>
                <span>/</span>
                <button id="p-detail-cat-link" onclick="navigateTo('category', 'All')" class="hover:text-rosewood-700">Category</button>
                <span>/</span>
                <span id="p-detail-breadcrumb" class="font-semibold text-rosewood-900">Item Detail</span>
            </div>

            <div class="bg-white rounded-3xl border border-stone-100 shadow-xl overflow-hidden p-6 lg:p-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                    <div class="lg:col-span-6 bg-rosewood-50 rounded-2xl overflow-hidden h-96 sm:h-[480px] relative">
                        <img id="p-detail-img" src="" class="w-full h-full object-cover">
                        <span id="p-detail-badge" class="absolute top-4 left-4 bg-white/90 text-rosewood-900 text-[10px] uppercase tracking-widest font-bold px-3 py-1 rounded-full shadow-sm"></span>
                    </div>

                    <div class="lg:col-span-6 flex flex-col justify-between space-y-6">
                        <div>
                            <span id="p-detail-category" class="text-xs uppercase tracking-widest font-semibold text-rosewood-500"></span>
                            <h1 id="p-detail-title" class="font-serif text-3xl sm:text-4xl font-bold text-stone-800 mt-2"></h1>
                            <p id="p-detail-price" class="text-2xl font-bold text-rosewood-800 mt-3"></p>
                            
                            <div class="border-t border-b border-stone-100 py-4 my-6">
                                <p id="p-detail-desc" class="text-sm text-stone-600 leading-relaxed"></p>
                            </div>

                            <div class="space-y-4">
                                <label class="block text-xs font-semibold uppercase tracking-wider text-stone-700">Variants / Style</label>
                                <div id="p-detail-variants" class="flex flex-wrap gap-2"></div>

                                <div class="pt-4">
                                    <label class="block text-xs font-semibold uppercase tracking-wider text-stone-700 mb-2">Quantity</label>
                                    <div class="flex items-center space-x-3">
                                        <button onclick="adjustDetailQty(-1)" class="w-9 h-9 rounded-full border border-stone-300 flex items-center justify-center text-stone-600 hover:bg-stone-100 font-bold">-</button>
                                        <span id="p-detail-qty" class="text-sm font-semibold w-8 text-center">1</span>
                                        <button onclick="adjustDetailQty(1)" class="w-9 h-9 rounded-full border border-stone-300 flex items-center justify-center text-stone-600 hover:bg-stone-100 font-bold">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6 flex flex-col sm:flex-row gap-4">
                            <button onclick="addDetailToCart()" class="flex-1 py-4 bg-rosewood-800 hover:bg-rosewood-900 text-white font-medium text-xs uppercase tracking-widest rounded-full shadow-lg transition">
                                Add To Shopping Bag
                            </button>
                            <button onclick="history.back()" class="px-6 py-4 bg-stone-100 text-stone-700 font-medium text-xs uppercase tracking-widest rounded-full hover:bg-stone-200 transition">
                                Back
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CART PAGE VIEW -->
        <div id="view-cart" class="page-view hidden flex-grow max-w-5xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
            <h1 class="font-serif text-3xl sm:text-4xl font-bold text-rosewood-900 mb-6">Your Shopping Bag</h1>
            <div id="page-cart-container" class="bg-white rounded-3xl border border-stone-100 p-6 shadow-md"></div>
        </div>

        <!-- CHECKOUT PAGE VIEW -->
        <div id="view-checkout" class="page-view hidden flex-grow max-w-4xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-white rounded-3xl border border-stone-100 p-8 shadow-xl">
                <h1 class="font-serif text-3xl font-bold text-rosewood-900 mb-6">Checkout & Shipping</h1>
                <form id="checkout-form" onsubmit="submitOrder(event)" class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-medium text-stone-700 mb-1">First Name</label>
                            <input type="text" required class="w-full px-4 py-2.5 text-xs rounded-xl border border-stone-200 focus:outline-none focus:border-rosewood-500">
                        </div>
                        <div>
                            <label class="block text-xs font-medium text-stone-700 mb-1">Last Name</label>
                            <input type="text" required class="w-full px-4 py-2.5 text-xs rounded-xl border border-stone-200 focus:outline-none focus:border-rosewood-500">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-stone-700 mb-1">Shipping Address</label>
                        <input type="text" required class="w-full px-4 py-2.5 text-xs rounded-xl border border-stone-200 focus:outline-none focus:border-rosewood-500">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-stone-700 mb-1">Credit Card Number</label>
                        <input type="text" required placeholder="•••• •••• •••• ••••" class="w-full px-4 py-2.5 text-xs rounded-xl border border-stone-200 focus:outline-none focus:border-rosewood-500">
                    </div>
                    <button type="submit" class="w-full py-4 bg-rosewood-800 text-white text-xs uppercase tracking-widest font-semibold rounded-full shadow-md hover:bg-rosewood-900 transition">
                        Place Order Now
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Quickview Modal remains available for instant preview -->
    <div id="quickview-modal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-stone-900/60 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-3xl w-full overflow-hidden shadow-2xl relative transform transition-all">
            <button id="close-modal-btn" class="absolute top-4 right-4 z-10 w-8 h-8 bg-stone-100 hover:bg-stone-200 text-stone-600 rounded-full flex items-center justify-center transition">
                <i data-lucide="x" class="w-4 h-4"></i>
            </button>

            <div class="grid grid-cols-1 md:grid-cols-2">
                <!-- Modal Image -->
                <div class="h-72 md:h-full bg-rosewood-50 relative">
                    <img id="modal-img" src="" alt="" class="w-full h-full object-cover">
                    <span id="modal-badge" class="absolute top-4 left-4 bg-white/90 text-rosewood-900 text-[10px] uppercase tracking-widest font-bold px-3 py-1 rounded-full shadow-sm"></span>
                </div>

                <!-- Modal Content -->
                <div class="p-6 md:p-8 flex flex-col justify-between space-y-6">
                    <div>
                        <p id="modal-category" class="text-xs uppercase tracking-widest font-semibold text-rosewood-500 mb-1"></p>
                        <h2 id="modal-title" class="font-serif text-2xl font-bold text-stone-800"></h2>
                        <p id="modal-price" class="text-xl font-bold text-rosewood-800 mt-2"></p>

                        <p id="modal-description" class="text-xs text-stone-600 leading-relaxed mt-4 border-t border-stone-100 pt-4"></p>

                        <!-- Variant Option Selector -->
                        <div id="variant-section" class="mt-4">
                            <label class="block text-xs font-semibold uppercase tracking-wider text-stone-700 mb-2">Options / Variants</label>
                            <div id="variant-options" class="flex flex-wrap gap-2"></div>
                        </div>

                        <!-- Quantity Selector -->
                        <div class="mt-6">
                            <label class="block text-xs font-semibold uppercase tracking-wider text-stone-700 mb-2">Quantity</label>
                            <div class="flex items-center space-x-3">
                                <button id="modal-qty-minus" class="w-8 h-8 rounded-full border border-stone-300 flex items-center justify-center text-stone-600 hover:bg-stone-100 font-bold">-</button>
                                <span id="modal-qty-val" class="text-sm font-semibold w-6 text-center">1</span>
                                <button id="modal-qty-plus" class="w-8 h-8 rounded-full border border-stone-300 flex items-center justify-center text-stone-600 hover:bg-stone-100 font-bold">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Actions -->
                    <button id="modal-add-btn" class="w-full py-3.5 bg-rosewood-800 hover:bg-rosewood-900 text-white font-medium text-xs uppercase tracking-widest rounded-full shadow-lg transition">
                        Add To Bag
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="cart-drawer-backdrop" class="fixed inset-0 z-50 bg-stone-900/50 backdrop-blur-xs hidden transition-opacity"></div>
    <div id="cart-drawer" class="fixed top-0 right-0 bottom-0 z-50 w-full max-w-md bg-white shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
        
        <!-- Drawer Header -->
        <div class="p-6 border-b border-stone-100 flex items-center justify-between bg-rosewood-50/50">
            <div class="flex items-center space-x-2">
                <i data-lucide="shopping-bag" class="w-5 h-5 text-rosewood-800"></i>
                <h3 class="font-serif text-xl font-bold text-rosewood-900">Your Shopping Bag</h3>
            </div>
            <button id="close-cart-btn" class="p-2 text-stone-400 hover:text-stone-700 rounded-full hover:bg-stone-100">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>

        <!-- Drawer Item List -->
        <div id="cart-items-container" class="flex-grow overflow-y-auto p-6 space-y-4">
            <!-- Dynamic Cart Items -->
        </div>

        <!-- Drawer Footer & Checkout -->
        <div class="p-6 border-t border-stone-100 bg-stone-50 space-y-4">
            <div class="space-y-2 text-xs text-stone-600">
                <div class="flex justify-between">
                    <span>Subtotal</span>
                    <span id="cart-subtotal" class="font-bold text-stone-800">GH₵0.00</span>
                </div>
                <div class="flex justify-between text-emerald-700">
                    <span>Shipping</span>
                    <span>FREE</span>
                </div>
                <div class="flex justify-between text-base font-bold text-rosewood-900 pt-2 border-t border-stone-200">
                    <span>Total</span>
                    <span id="cart-total">GH₵0.00</span>
                </div>
            </div>

            <button onclick="handleCheckout()" class="w-full py-4 bg-rosewood-800 hover:bg-rosewood-900 text-white text-xs uppercase tracking-widest font-semibold rounded-full shadow-lg transition flex items-center justify-center space-x-2">
                <span>Proceed To Checkout</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </button>
        </div>
    </div>

    <div id="toast" class="fixed bottom-5 right-5 z-50 bg-rosewood-900 text-white px-5 py-3 rounded-2xl shadow-xl flex items-center space-x-3 transform translate-y-20 opacity-0 transition-all duration-300">
        <i data-lucide="check-circle" class="w-5 h-5 text-rosewood-300"></i>
        <span id="toast-message" class="text-xs font-medium">Item added to your bag</span>
    </div>

    <footer class="bg-rosewood-900 text-rosewood-100 mt-20 border-t border-rosewood-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="space-y-3">
                    <span class="font-serif text-2xl font-bold tracking-widest text-white">AURA</span>
                    <p class="text-xs text-rosewood-300 leading-relaxed">
                        Curating artisanal charm bracelets, high-gloss lip treats, statement handbag vanity cases, and lace frontal wigs for effortless luxury.
                    </p>
                </div>
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-white mb-4">Shop Collections</h4>
                    <ul class="space-y-2 text-xs text-rosewood-300">
                        <li><a href="#" class="hover:text-white transition">Arm Candy & Chains</a></li>
                        <li><a href="#" class="hover:text-white transition">Gloss & Lip Treatments</a></li>
                        <li><a href="#" class="hover:text-white transition">Patent Handbags</a></li>
                        <li><a href="#" class="hover:text-white transition">HD Frontal Wigs</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-white mb-4">Boutique Services</h4>
                    <ul class="space-y-2 text-xs text-rosewood-300">
                        <li><a href="#" class="hover:text-white transition">Worldwide Delivery</a></li>
                        <li><a href="#" class="hover:text-white transition">Returns & Exchanges</a></li>
                        <li><a href="#" class="hover:text-white transition">Custom Jewelry Orders</a></li>
                        <li><a href="#" class="hover:text-white transition">Sizing & Wig Care Guide</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-white mb-4">Stay Connected</h4>
                    <p class="text-xs text-rosewood-300 mb-3">Subscribe for exclusive capsule drops and VIP discounts.</p>
                    <div class="flex">
                        <input type="email" placeholder="Enter your email" class="bg-rosewood-800 text-white text-xs px-3 py-2 rounded-l-full focus:outline-none w-full">
                        <button class="bg-rosewood-600 hover:bg-rosewood-500 px-4 py-2 rounded-r-full text-xs font-bold uppercase tracking-wider">Join</button>
                    </div>
                </div>
            </div>
            <div class="border-t border-rosewood-800 mt-10 pt-6 text-center text-[10px] text-rosewood-400">
                &copy; 2026 AURA Luxury Boutique. All Rights Reserved.
            </div>
            <div class="flex justify-center gap-4">
  <a href="https://facebook.com" class="w-10 h-10 rounded-full bg-[#3b5998] flex items-center justify-center text-white hover:opacity-80 transition">
    <i class="fa-brands fa-facebook-f"></i>
  </a>
  <a href="https://twitter.com" class="w-10 h-10 rounded-full bg-black flex items-center justify-center text-white hover:opacity-80 transition">
    <i class="fa-brands fa-x-twitter"></i>
</a>
  <a href="https://instagram.com" class="w-10 h-10 rounded-full flex items-center justify-center text-white hover:opacity-80 transition"
     style="background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);">
    <i class="fa-brands fa-instagram"></i>
  </a>
  <a href="https://linked-in.com" class="w-10 h-10 rounded-full bg-[#0077b5] flex items-center justify-center text-white hover:opacity-80 transition">
    <i class="fa-brands fa-linkedin-in"></i>
  </a>
  <a href="https://youtube.com" class="w-10 h-10 rounded-full bg-[#ff0000] flex items-center justify-center text-white hover:opacity-80 transition">
    <i class="fa-brands fa-youtube"></i>
  </a>
</div>
        </div>
    </footer>

    <script>
        // 1. PRODUCT CATALOG DATA
        const products = [
            {
                id: 1,
                name: "Bead & Charm Bracelet Stack",
                category: "Jewelry",
                price: 24.99,
                rating: 4.9,
                badge: "Best Seller",
                image: "{{ asset('images/p1.jpg') }}",
                description: "Handcrafted multi-colored glass beads with star, moon, and spider charms on stretchy elastic cord. Perfect for stacking and personalizing your wrist accent.",
                variants: ["Cosmic Violet", "Candy Pink", "Ocean Breeze", "Goth Spider Red"]
            },
            {
                id: 2,
                name: "7-Piece Bohemian Gold Layered Set",
                category: "Jewelry",
                price: 34.99,
                rating: 5.0,
                badge: "Trending",
                image: "{{ asset('images/p3.jpg') }}",
                description: "Elegant 7-piece set with pave rhinestones, pearl beads, infinity charms, and encrusted heart pendants plated in 18k radiant gold.",
                variants: ["18k Gold Finish", "Rose Gold Edition"]
            },
            {
                id: 3,
                name: "Silver Curb Link Chain Stack",
                category: "Jewelry",
                price: 42.00,
                rating: 4.8,
                badge: "Essential",
                image: "{{ asset('images/p4.jpg') }}",
                description: "Heavy-duty 925 sterling silver plated Figaro and curb link stackable bracelet set on a plush display cylinder.",
                variants: ["7 inch", "8 inch", "Custom Length"]
            },
            {
                id: 4,
                name: "Shegla Hydrating High-Shine Lip Gloss",
                category: "Lip Care",
                price: 18.50,
                rating: 4.9,
                badge: "Viral Pick",
                image: "{{ asset('images/p5.jpg') }}",
                description: "Glassy, non-sticky lip oil gloss enriched with hyaluronic acid and rosehip extract for mirror-like shine and deep moisture.",
                variants: ["Clear Crystal", "Soft Petal Pink", "Berry Sheen"]
            },
            {
                id: 5,
                name: "Love Queen Color Lip Oils Collection",
                category: "Lip Care",
                price: 15.00,
                rating: 4.7,
                badge: "Popular",
                image: "{{ asset('images/p6.jpg') }}",
                description: "Vibrant candy tint lip oil tubes with large cushion wand applicators. Delivers nourishing tint and soothing vitamin E.",
                variants: ["Strawberry Red", "Peach Mango", "Electric Pink", "Grape Punch", "Minty Glow"]
            },
            {
                id: 6,
                name: "Rhode Peptide Lip Tint Set",
                category: "Lip Care",
                price: 22.00,
                rating: 5.0,
                badge: "Must-Have",
                image: "{{ asset('images/p7.jpg') }}",
                description: "Restorative peptide treatment tints that cushion lips with silky hydration and rich tone. Leaves lips naturally plumped and soft.",
                variants: ["Ribbon", "Toast", "Raspberry Jelly", "Espresso"]
            },
            {
                id: 7,
                name: "Burgundy Patent Leather East-West Bag",
                category: "Handbags",
                price: 89.99,
                rating: 4.9,
                badge: "Luxury",
                image: "{{ asset('images/p8.jpg') }}",
                description: "Ultra-sleek East-West structured shoulder bag in glossy deep burgundy patent leather featuring sculpted gold hardware.",
                variants: ["Wine Burgundy", "Noir Gloss"]
            },
            {
                id: 8,
                name: "Luxury Quilted Vanity Bag",
                category: "Handbags",
                price: 110.00,
                rating: 5.0,
                badge: "Exclusive",
                image: "{{ asset('images/p9.jpg') }}",
                description: "Quilted leather vanity trunk box with woven gold chain strap and top handle. Designed for stylish evening carry.",
                variants: ["Blush Pink", "Classic Black", "Champagne Gold"]
            },
            {
                id: 9,
                name: "Sleek HD Lace Frontal Bob Wig",
                category: "Hair & Wigs",
                price: 150.00,
                rating: 5.0,
                badge: "Top Tier",
                image: "{{ asset('images/p10.jpg') }}",
                description: "100% Virgin Human Hair 13x4 HD lace frontal unit with pre-plucked hairline and natural edge baby hairs. Silky bone straight finish.",
                variants: ["12 Inches", "14 Inches", "16 Inches"]
            }
        ];

        // 2. STATE & ROUTING MANAGEMENT
        let cart = [];
        let activeCategory = "All";
        let maxPriceFilter = 160;
        let searchQuery = "";
        let sortOption = "featured";
        let detailProduct = null;
        let detailQty = 1;
        let detailSelectedVariant = "";

        function navigateTo(viewName, param = null) {
            document.querySelectorAll('.page-view').forEach(view => view.classList.add('hidden'));
            window.scrollTo({ top: 0, behavior: 'smooth' });

            if (viewName === 'home') {
                document.getElementById('view-home').classList.remove('hidden');
            } else if (viewName === 'category') {
                activeCategory = param || 'All';
                document.getElementById('view-category').classList.remove('hidden');
                document.getElementById('category-breadcrumb').textContent = activeCategory;
                document.getElementById('category-page-title').textContent = activeCategory === 'All' ? 'All Collections' : activeCategory;
                renderProducts();
            } else if (viewName === 'product') {
                detailProduct = products.find(p => p.id === param);
                if (detailProduct) {
                    detailQty = 1;
                    detailSelectedVariant = detailProduct.variants[0];
                    
                    document.getElementById('p-detail-img').src = detailProduct.image;
                    document.getElementById('p-detail-badge').textContent = detailProduct.badge;
                    document.getElementById('p-detail-category').textContent = detailProduct.category;
                    document.getElementById('p-detail-title').textContent = detailProduct.name;
                    document.getElementById('p-detail-price').textContent = `$${detailProduct.price.toFixed(2)}`;
                    document.getElementById('p-detail-desc').textContent = detailProduct.description;
                    document.getElementById('p-detail-breadcrumb').textContent = detailProduct.name;
                    document.getElementById('p-detail-qty').textContent = detailQty;
                    
                    document.getElementById('p-detail-cat-link').onclick = () => navigateTo('category', detailProduct.category);
                    
                    const varContainer = document.getElementById('p-detail-variants');
                    varContainer.innerHTML = detailProduct.variants.map((v, i) => `
                        <button onclick="selectDetailVariant('${v}', this)" class="detail-var-btn text-xs px-4 py-2 rounded-full border ${i === 0 ? 'bg-rosewood-800 text-white border-rosewood-800' : 'bg-stone-50 text-stone-700 border-stone-200'} transition">
                            ${v}
                        </button>
                    `).join('');

                    document.getElementById('view-product').classList.remove('hidden');
                }
            } else if (viewName === 'cart') {
                renderCartPage();
                document.getElementById('view-cart').classList.remove('hidden');
            } else if (viewName === 'checkout') {
                document.getElementById('view-checkout').classList.remove('hidden');
            }

            lucide.createIcons();
        }

        function renderProducts() {
            let filtered = products.filter(p => {
                const matchCat = activeCategory === "All" || p.category === activeCategory;
                const matchPrice = p.price <= maxPriceFilter;
                const matchSearch = p.name.toLowerCase().includes(searchQuery.toLowerCase()) || 
                                    p.description.toLowerCase().includes(searchQuery.toLowerCase());
                return matchCat && matchPrice && matchSearch;
            });

            if (sortOption === "low-high") {
                filtered.sort((a, b) => a.price - b.price);
            } else if (sortOption === "high-low") {
                filtered.sort((a, b) => b.price - a.price);
            }

            const productGrid = document.getElementById('product-grid');
            const emptyState = document.getElementById('empty-state');

            if (!productGrid) return;

            if (filtered.length === 0) {
                productGrid.innerHTML = '';
                emptyState.classList.remove('hidden');
                return;
            }

            emptyState.classList.add('hidden');
            productGrid.innerHTML = filtered.map(product => `
                <div class="bg-white rounded-3xl overflow-hidden border border-stone-100 shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <!-- Product Image Box -->
                        <div class="relative h-64 overflow-hidden bg-rosewood-50 cursor-pointer" onclick="navigateTo('product', ${product.id})">
                            <img src="${product.image}" alt="${product.name}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-md text-rosewood-900 text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full shadow-sm">
                                ${product.badge}
                            </span>
                        </div>

                        <!-- Card Content -->
                        <div class="p-6">
                            <div class="flex items-center justify-between text-xs text-stone-500 mb-1">
                                <span>${product.category}</span>
                                <span class="flex items-center text-amber-500 font-semibold">
                                    ★ ${product.rating}
                                </span>
                            </div>
                            <h3 onclick="navigateTo('product', ${product.id})" class="font-serif text-lg font-bold text-stone-800 hover:text-rosewood-700 transition line-clamp-1 cursor-pointer">${product.name}</h3>
                            <p class="text-xs text-stone-500 mt-2 line-clamp-2 leading-relaxed">${product.description}</p>
                        </div>
                    </div>

                    <!-- Card Footer -->
                    <div class="px-6 pb-6 pt-2 flex items-center justify-between border-t border-stone-50 mt-auto">
                        <span class="text-lg font-bold text-rosewood-900">$${product.price.toFixed(2)}</span>
                        <button onclick="quickAddToCart(${product.id})" class="px-4 py-2 bg-rosewood-100 hover:bg-rosewood-800 text-rosewood-900 hover:text-white rounded-full text-xs font-semibold uppercase tracking-wider transition duration-300">
                            Add To Bag
                        </button>
                    </div>
                </div>
            `).join('');

            document.querySelectorAll('.cat-pill').forEach(pill => {
                if (pill.textContent.trim().toLowerCase() === activeCategory.toLowerCase()) {
                    pill.className = "cat-pill px-5 py-2 rounded-full text-xs font-semibold uppercase tracking-wider bg-rosewood-800 text-white transition-all shadow-sm";
                } else {
                    pill.className = "cat-pill px-5 py-2 rounded-full text-xs font-semibold uppercase tracking-wider bg-white text-stone-600 hover:bg-rosewood-100 border border-stone-200 transition-all";
                }
            });

            lucide.createIcons();
        }

        function selectDetailVariant(val, btn) {
            detailSelectedVariant = val;
            document.querySelectorAll('.detail-var-btn').forEach(b => {
                b.className = "detail-var-btn text-xs px-4 py-2 rounded-full border bg-stone-50 text-stone-700 border-stone-200 transition";
            });
            btn.className = "detail-var-btn text-xs px-4 py-2 rounded-full border bg-rosewood-800 text-white border-rosewood-800 transition";
        }

        function adjustDetailQty(delta) {
            if (detailQty + delta >= 1) {
                detailQty += delta;
                document.getElementById('p-detail-qty').textContent = detailQty;
            }
        }

        function addDetailToCart() {
            if (detailProduct) {
                addToCart(detailProduct, detailSelectedVariant, detailQty);
            }
        }

        function renderCartPage() {
            const container = document.getElementById('page-cart-container');
            if (cart.length === 0) {
                container.innerHTML = `
                    <div class="text-center py-16">
                        <i data-lucide="shopping-bag" class="w-16 h-16 text-rosewood-300 mx-auto mb-4"></i>
                        <h2 class="font-serif text-2xl font-bold text-stone-800">Your bag is completely empty</h2>
                        <button onclick="navigateTo('category', 'All')" class="mt-6 px-8 py-3 bg-rosewood-800 text-white text-xs uppercase tracking-widest font-semibold rounded-full">Explore Boutique</button>
                    </div>
                `;
                return;
            }

            const sub = cart.reduce((sum, item) => sum + (item.price * item.qty), 0);
            container.innerHTML = `
                <div class="space-y-4">
                    ${cart.map((item, index) => `
                        <div class="flex items-center justify-between p-4 bg-stone-50 rounded-2xl">
                            <div class="flex items-center space-x-4">
                                <img src="${item.image}" class="w-16 h-16 object-cover rounded-xl">
                                <div>
                                    <h4 class="font-serif text-base font-bold text-stone-800">${item.name}</h4>
                                    <span class="text-xs text-rosewood-600 font-semibold">${item.variant}</span>
                                    <p class="text-xs text-stone-600 mt-1">$${item.price.toFixed(2)} each</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center border border-stone-300 rounded-full bg-white px-2 py-1">
                                    <button onclick="changeCartQty(${index}, -1)" class="px-2 font-bold">-</button>
                                    <span class="text-xs px-2 font-semibold">${item.qty}</span>
                                    <button onclick="changeCartQty(${index}, 1)" class="px-2 font-bold">+</button>
                                </div>
                                <span class="font-bold text-rosewood-900">$${(item.price * item.qty).toFixed(2)}</span>
                            </div>
                        </div>
                    `).join('')}
                    <div class="pt-6 border-t border-stone-200 flex flex-col sm:flex-row justify-between items-center gap-4">
                        <span class="text-xl font-serif font-bold text-rosewood-900">Total: $${sub.toFixed(2)}</span>
                        <button onclick="navigateTo('checkout')" class="w-full sm:w-auto px-8 py-3.5 bg-rosewood-800 text-white text-xs uppercase tracking-widest font-semibold rounded-full shadow-md hover:bg-rosewood-900">Proceed to Checkout</button>
                    </div>
                </div>
            `;
            lucide.createIcons();
        }

        function submitOrder(e) {
            e.preventDefault();
            showToast("Thank you! Your order has been placed successfully.");
            cart = [];
            updateCartUI();
            navigateTo('home');
        }

        function resetFilters() {
            activeCategory = "All";
            maxPriceFilter = 160;
            searchQuery = "";
            document.getElementById('price-range').value = 160;
            document.getElementById('price-display').textContent = "$160";
            document.getElementById('search-input').value = "";
            document.getElementById('mobile-search-input').value = "";
            renderProducts();
        }

        function quickAddToCart(productId) {
            const prod = products.find(p => p.id === productId);
            addToCart(prod, prod.variants[0], 1);
        }

        function addToCart(product, variant, qty) {
            const existing = cart.find(item => item.id === product.id && item.variant === variant);
            if (existing) {
                existing.qty += qty;
            } else {
                cart.push({
                    id: product.id,
                    name: product.name,
                    price: product.price,
                    image: product.image,
                    variant: variant,
                    qty: qty
                });
            }
            updateCartUI();
            showToast(`Added ${product.name} to your bag`);
        }

        function updateCartUI() {
            const totalCount = cart.reduce((acc, item) => acc + item.qty, 0);
            const cartBadge = document.getElementById('cart-badge');
            cartBadge.textContent = totalCount;
            if (totalCount > 0) {
                cartBadge.classList.remove('scale-0');
            } else {
                cartBadge.classList.add('scale-0');
            }

            const sub = cart.reduce((sum, item) => sum + (item.price * item.qty), 0);
            if (document.getElementById('cart-subtotal')) {
                document.getElementById('cart-subtotal').textContent = `$${sub.toFixed(2)}`;
                document.getElementById('cart-total').textContent = `$${sub.toFixed(2)}`;
            }

            if (!document.getElementById('view-cart').classList.contains('hidden')) {
                renderCartPage();
            }
        }

        function changeCartQty(index, delta) {
            cart[index].qty += delta;
            if (cart[index].qty <= 0) {
                cart.splice(index, 1);
            }
            updateCartUI();
        }

        function showToast(msg) {
            const toast = document.getElementById('toast');
            document.getElementById('toast-message').textContent = msg;
            toast.classList.remove('translate-y-20', 'opacity-0');
            setTimeout(() => {
                toast.classList.add('translate-y-20', 'opacity-0');
            }, 3000);
        }

        document.addEventListener('DOMContentLoaded', () => {
            navigateTo('home');

            const handleSearch = (e) => {
                searchQuery = e.target.value;
                if (document.getElementById('view-category').classList.contains('hidden')) {
                    navigateTo('category', 'All');
                } else {
                    renderProducts();
                }
            };

            document.getElementById('search-input').addEventListener('input', handleSearch);
            document.getElementById('mobile-search-input').addEventListener('input', handleSearch);

            document.getElementById('price-range').addEventListener('input', (e) => {
                maxPriceFilter = parseFloat(e.target.value);
                document.getElementById('price-display').textContent = `$${maxPriceFilter}`;
                renderProducts();
            });

            document.getElementById('sort-select').addEventListener('change', (e) => {
                sortOption = e.target.value;
                renderProducts();
            });

            lucide.createIcons();
        });
    </script>
</body>
</html>
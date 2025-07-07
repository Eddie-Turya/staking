<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeemX | Premium Crypto Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            min-height: 100vh;
        }
        .glass-card {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            background-color: rgba(30, 41, 59, 0.5);
        }
        .gradient-border {
            position: relative;
        }
        .gradient-border::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 1rem;
            padding: 2px;
            background: linear-gradient(45deg, #ec4899, #8b5cf6, #3b82f6);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
        }
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(139, 92, 246, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(139, 92, 246, 0); }
            100% { box-shadow: 0 0 0 0 rgba(139, 92, 246, 0); }
        }
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .feature-btn {
            transition: all 0.3s ease;
        }
        .feature-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body class="text-gray-100">
    <div class="container mx-auto px-4 py-6 max-w-6xl">
        <!-- Header -->
        <header class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold">
                    <span id="greeting">Good morning</span>, <span class="text-purple-400">Grapher</span> 👋
                </h1>
                <p class="text-gray-400">Welcome back to your dashboard</p>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <button class="p-2 rounded-full bg-white/10 hover:bg-white/20 transition">
                        <i data-lucide="bell"></i>
                    </button>
                    <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-pink-500"></span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="h-10 w-10 rounded-full bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center">
                        <span class="font-bold">G</span>
                    </div>
                    <i data-lucide="chevron-down" class="w-4 h-4"></i>
                </div>
            </div>
        </header>

        <!-- Combined Wallet Section -->
        <div class="gradient-border rounded-xl mb-8">
            <div class="glass-card rounded-xl p-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <p class="text-gray-400 mb-1">Your Wallet Value</p>
                        <div class="flex items-end">
                            <h2 class="text-3xl font-bold">$23,245.<span class="text-gray-400">00</span></h2>
                            <div class="flex items-center text-green-400 ml-4">
                                <i data-lucide="trending-up" class="w-5 h-5 mr-1"></i>
                                <span>+2.4% today</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4 mb-6 md:mb-0">
                        <div class="bg-white/5 rounded-lg p-3 text-center">
                            <p class="text-xs text-gray-400 mb-1">BeemX</p>
                            <p class="text-lg font-bold text-purple-400">4.9M</p>
                        </div>
                        <div class="bg-white/5 rounded-lg p-3 text-center">
                            <p class="text-xs text-gray-400 mb-1">NFTs</p>
                            <p class="text-lg font-bold text-blue-400">21</p>
                        </div>
                        <div class="bg-white/5 rounded-lg p-3 text-center">
                            <p class="text-xs text-gray-400 mb-1">Staked</p>
                            <p class="text-lg font-bold text-pink-400">1.25M</p>
                        </div>
                    </div>
                    
                    <button class="gradient-border rounded-full w-full md:w-auto">
                        <div class="bg-gradient-to-r from-fuchsia-500 via-purple-600 to-blue-500 rounded-full px-6 py-3 text-md font-semibold flex items-center justify-center pulse-animation hover:scale-105 transition-transform">
                            <i data-lucide="gift" class="w-5 h-5 mr-2"></i>
                            Claim Pre-Sale
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <!-- Core Features - Horizontal Row -->
        <h2 class="text-xl font-bold mb-4">Core Features</h2>
        <div class="flex flex-col sm:flex-row gap-4 mb-8 overflow-x-auto pb-4">
            <div class="glass-card rounded-xl p-5 flex-1 min-w-[200px] feature-btn hover:bg-purple-500/10 border border-transparent hover:border-purple-500/30">
                <div class="h-12 w-12 rounded-xl bg-purple-500/10 flex items-center justify-center mb-3">
                    <i data-lucide="repeat-2" class="w-6 h-6 text-purple-400"></i>
                </div>
                <h3 class="font-semibold mb-1">BeemX Swap</h3>
                <p class="text-gray-400 text-xs">Instant token exchange</p>
                <div class="mt-3 flex justify-end">
                    <span class="text-xs px-2 py-1 rounded-full bg-purple-500/20 text-purple-400">New</span>
                </div>
            </div>
            
            <div class="glass-card rounded-xl p-5 flex-1 min-w-[200px] feature-btn hover:bg-blue-500/10 border border-transparent hover:border-blue-500/30">
                <div class="h-12 w-12 rounded-xl bg-blue-500/10 flex items-center justify-center mb-3">
                    <i data-lucide="landmark" class="w-6 h-6 text-blue-400"></i>
                </div>
                <h3 class="font-semibold mb-1">BeemX DAO</h3>
                <p class="text-gray-400 text-xs">Governance voting</p>
                <div class="mt-3 flex justify-end">
                    <span class="text-xs px-2 py-1 rounded-full bg-blue-500/20 text-blue-400">Live</span>
                </div>
            </div>
            
            <div class="glass-card rounded-xl p-5 flex-1 min-w-[200px] feature-btn hover:bg-pink-500/10 border border-transparent hover:border-pink-500/30">
                <div class="h-12 w-12 rounded-xl bg-pink-500/10 flex items-center justify-center mb-3">
                    <i data-lucide="bar-chart-2" class="w-6 h-6 text-pink-400"></i>
                </div>
                <h3 class="font-semibold mb-1">BeemX Staking</h3>
                <p class="text-gray-400 text-xs">Earn rewards</p>
                <div class="mt-3 flex justify-end">
                    <span class="text-xs px-2 py-1 rounded-full bg-pink-500/20 text-pink-400">APY 12.5%</span>
                </div>
            </div>
            
            <div class="glass-card rounded-xl p-5 flex-1 min-w-[200px] feature-btn hover:bg-green-500/10 border border-transparent hover:border-green-500/30">
                <div class="h-12 w-12 rounded-xl bg-green-500/10 flex items-center justify-center mb-3">
                    <i data-lucide="shield" class="w-6 h-6 text-green-400"></i>
                </div>
                <h3 class="font-semibold mb-1">BeemX Vault</h3>
                <p class="text-gray-400 text-xs">Secure storage</p>
                <div class="mt-3 flex justify-end">
                    <span class="text-xs px-2 py-1 rounded-full bg-green-500/20 text-green-400">Secure</span>
                </div>
            </div>
            
            <div class="glass-card rounded-xl p-5 flex-1 min-w-[200px] feature-btn hover:bg-yellow-500/10 border border-transparent hover:border-yellow-500/30">
                <div class="h-12 w-12 rounded-xl bg-yellow-500/10 flex items-center justify-center mb-3">
                    <i data-lucide="users" class="w-6 h-6 text-yellow-400"></i>
                </div>
                <h3 class="font-semibold mb-1">BeemX Social</h3>
                <p class="text-gray-400 text-xs">Connect & earn</p>
                <div class="mt-3 flex justify-end">
                    <span class="text-xs px-2 py-1 rounded-full bg-yellow-500/20 text-yellow-400">Beta</span>
                </div>
            </div>
        </div>

        <!-- Featured NFTs - 2x2 Grid -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Featured NFTs</h2>
            <a href="#" class="text-sm text-purple-400 flex items-center hover:text-purple-300 transition">
                View all <i data-lucide="chevron-right" class="w-4 h-4 ml-1"></i>
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
            <!-- NFT 1 -->
            <div class="glass-card rounded-xl overflow-hidden group cursor-pointer transition-all hover:scale-[1.02]">
                <div class="relative overflow-hidden h-48">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/30 to-blue-500/30 flex items-center justify-center">
                        <div class="h-32 w-32 rounded-full bg-purple-500/20 blur-xl"></div>
                    </div>
                    <div class="relative z-10 h-full flex items-center justify-center floating">
                        <div class="h-40 w-40 rounded-xl bg-gradient-to-br from-purple-500 to-blue-500 flex items-center justify-center text-white text-4xl font-bold">
                            CB
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4 opacity-0 group-hover:opacity-100 transition">
                        <div class="flex space-x-2">
                            <button class="bg-white/10 hover:bg-white/20 rounded-full p-2 transition">
                                <i data-lucide="eye" class="w-4 h-4"></i>
                            </button>
                            <button class="bg-white/10 hover:bg-white/20 rounded-full p-2 transition">
                                <i data-lucide="heart" class="w-4 h-4"></i>
                            </button>
                            <button class="bg-white/10 hover:bg-white/20 rounded-full p-2 transition">
                                <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold">Cosmic Beem</h3>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-sm text-gray-400">#1234</span>
                        <span class="text-sm font-medium text-purple-400">1.2 ETH</span>
                    </div>
                </div>
            </div>
            
            <!-- NFT 2 -->
            <div class="glass-card rounded-xl overflow-hidden group cursor-pointer transition-all hover:scale-[1.02]">
                <div class="relative overflow-hidden h-48">
                    <div class="absolute inset-0 bg-gradient-to-br from-pink-500/30 to-yellow-500/30 flex items-center justify-center">
                        <div class="h-32 w-32 rounded-full bg-pink-500/20 blur-xl"></div>
                    </div>
                    <div class="relative z-10 h-full flex items-center justify-center floating">
                        <div class="h-40 w-40 rounded-xl bg-gradient-to-br from-pink-500 to-yellow-500 flex items-center justify-center text-white text-4xl font-bold">
                            DL
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4 opacity-0 group-hover:opacity-100 transition">
                        <div class="flex space-x-2">
                            <button class="bg-white/10 hover:bg-white/20 rounded-full p-2 transition">
                                <i data-lucide="eye" class="w-4 h-4"></i>
                            </button>
                            <button class="bg-white/10 hover:bg-white/20 rounded-full p-2 transition">
                                <i data-lucide="heart" class="w-4 h-4"></i>
                            </button>
                            <button class="bg-white/10 hover:bg-white/20 rounded-full p-2 transition">
                                <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold">Digital Legacy</h3>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-sm text-gray-400">#5678</span>
                        <span class="text-sm font-medium text-pink-400">0.8 ETH</span>
                    </div>
                </div>
            </div>
            
            <!-- NFT 3 -->
            <div class="glass-card rounded-xl overflow-hidden group cursor-pointer transition-all hover:scale-[1.02]">
                <div class="relative overflow-hidden h-48">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-500/30 to-teal-500/30 flex items-center justify-center">
                        <div class="h-32 w-32 rounded-full bg-green-500/20 blur-xl"></div>
                    </div>
                    <div class="relative z-10 h-full flex items-center justify-center floating">
                        <div class="h-40 w-40 rounded-xl bg-gradient-to-br from-green-500 to-teal-500 flex items-center justify-center text-white text-4xl font-bold">
                            EN
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4 opacity-0 group-hover:opacity-100 transition">
                        <div class="flex space-x-2">
                            <button class="bg-white/10 hover:bg-white/20 rounded-full p-2 transition">
                                <i data-lucide="eye" class="w-4 h-4"></i>
                            </button>
                            <button class="bg-white/10 hover:bg-white/20 rounded-full p-2 transition">
                                <i data-lucide="heart" class="w-4 h-4"></i>
                            </button>
                            <button class="bg-white/10 hover:bg-white/20 rounded-full p-2 transition">
                                <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold">Ethereal Nexus</h3>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-sm text-gray-400">#9012</span>
                        <span class="text-sm font-medium text-green-400">1.5 ETH</span>
                    </div>
                </div>
            </div>
            
            <!-- NFT 4 -->
            <div class="glass-card rounded-xl overflow-hidden group cursor-pointer transition-all hover:scale-[1.02]">
                <div class="relative overflow-hidden h-48">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-500/30 to-orange-500/30 flex items-center justify-center">
                        <div class="h-32 w-32 rounded-full bg-red-500/20 blur-xl"></div>
                    </div>
                    <div class="relative z-10 h-full flex items-center justify-center floating">
                        <div class="h-40 w-40 rounded-xl bg-gradient-to-br from-red-500 to-orange-500 flex items-center justify-center text-white text-4xl font-bold">
                            QP
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4 opacity-0 group-hover:opacity-100 transition">
                        <div class="flex space-x-2">
                            <button class="bg-white/10 hover:bg-white/20 rounded-full p-2 transition">
                                <i data-lucide="eye" class="w-4 h-4"></i>
                            </button>
                            <button class="bg-white/10 hover:bg-white/20 rounded-full p-2 transition">
                                <i data-lucide="heart" class="w-4 h-4"></i>
                            </button>
                            <button class="bg-white/10 hover:bg-white/20 rounded-full p-2 transition">
                                <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold">Quantum Pixel</h3>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-sm text-gray-400">#3456</span>
                        <span class="text-sm font-medium text-orange-400">2.1 ETH</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Market Prices -->
        <div class="glass-card rounded-xl p-6 mb-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold">Market Prices</h2>
                <a href="#" class="text-sm text-blue-400 flex items-center hover:text-blue-300 transition">
                    View all <i data-lucide="chevron-right" class="w-4 h-4 ml-1"></i>
                </a>
            </div>
            <div class="space-y-3">
                <div class="flex justify-between items-center py-2 border-b border-white/10">
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-yellow-500/10 flex items-center justify-center mr-3">
                            <i data-lucide="bitcoin" class="text-yellow-400 w-4 h-4"></i>
                        </div>
                        <span>Bitcoin</span>
                    </div>
                    <div class="flex items-center">
                        <span class="font-medium mr-3">$108,477</span>
                        <span class="text-sm px-2 py-1 rounded bg-green-500/20 text-green-400 flex items-center">
                            <i data-lucide="trending-up" class="w-3 h-3 mr-1"></i> 2.3%
                        </span>
                    </div>
                </div>
                
                <div class="flex justify-between items-center py-2 border-b border-white/10">
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-500/10 flex items-center justify-center mr-3">
                            <i data-lucide="diamond" class="text-gray-400 w-4 h-4"></i>
                        </div>
                        <span>Ethereum</span>
                    </div>
                    <div class="flex items-center">
                        <span class="font-medium mr-3">$2,535.62</span>
                        <span class="text-sm px-2 py-1 rounded bg-green-500/20 text-green-400 flex items-center">
                            <i data-lucide="trending-up" class="w-3 h-3 mr-1"></i> 1.8%
                        </span>
                    </div>
                </div>
                
                <div class="flex justify-between items-center py-2 border-b border-white/10">
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-blue-500/10 flex items-center justify-center mr-3">
                            <i data-lucide="circle" class="text-blue-400 w-4 h-4"></i>
                        </div>
                        <span>XRP</span>
                    </div>
                    <div class="flex items-center">
                        <span class="font-medium mr-3">$2.34</span>
                        <span class="text-sm px-2 py-1 rounded bg-red-500/20 text-red-400 flex items-center">
                            <i data-lucide="trending-down" class="w-3 h-3 mr-1"></i> 0.5%
                        </span>
                    </div>
                </div>
                
                <div class="flex justify-between items-center py-2 border-b border-white/10">
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-yellow-500/10 flex items-center justify-center mr-3">
                            <i data-lucide="circle" class="text-yellow-400 w-4 h-4"></i>
                        </div>
                        <span>BNB</span>
                    </div>
                    <div class="flex items-center">
                        <span class="font-medium mr-3">$659.26</span>
                        <span class="text-sm px-2 py-1 rounded bg-green-500/20 text-green-400 flex items-center">
                            <i data-lucide="trending-up" class="w-3 h-3 mr-1"></i> 3.1%
                        </span>
                    </div>
                </div>
                
                <div class="flex justify-between items-center py-2">
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-purple-500/10 flex items-center justify-center mr-3">
                            <i data-lucide="circle" class="text-purple-400 w-4 h-4"></i>
                        </div>
                        <span>Solana</span>
                    </div>
                    <div class="flex items-center">
                        <span class="font-medium mr-3">$151.62</span>
                        <span class="text-sm px-2 py-1 rounded bg-green-500/20 text-green-400 flex items-center">
                            <i data-lucide="trending-up" class="w-3 h-3 mr-1"></i> 5.7%
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Navigation (Mobile) -->
    <div class="fixed bottom-0 left-0 right-0 bg-gray-900/80 backdrop-blur-md border-t border-white/10 md:hidden">
        <div class="flex justify-around items-center p-3">
            <a href="#" class="flex flex-col items-center text-purple-400">
                <i data-lucide="home" class="w-5 h-5"></i>
                <span class="text-xs mt-1">Home</span>
            </a>
            <a href="#" class="flex flex-col items-center text-gray-400">
                <i data-lucide="image" class="w-5 h-5"></i>
                <span class="text-xs mt-1">NFTs</span>
            </a>
            <a href="#" class="flex flex-col items-center text-gray-400">
                <i data-lucide="users" class="w-5 h-5"></i>
                <span class="text-xs mt-1">Referrals</span>
            </a>
            <a href="#" class="flex flex-col items-center text-gray-400">
                <i data-lucide="award" class="w-5 h-5"></i>
                <span class="text-xs mt-1">Rewards</span>
            </a>
            <a href="#" class="flex flex-col items-center text-gray-400">
                <i data-lucide="settings" class="w-5 h-5"></i>
                <span class="text-xs mt-1">Settings</span>
            </a>
        </div>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Update greeting based on time
        function updateGreeting() {
            const hour = new Date().getHours();
            const greeting = document.getElementById('greeting');
            
            if (hour < 12) {
                greeting.textContent = 'Good morning';
            } else if (hour < 18) {
                greeting.textContent = 'Good afternoon';
            } else {
                greeting.textContent = 'Good evening';
            }
        }
        
        updateGreeting();
        
        // Simulate live price updates
        function updatePrices() {
            const prices = document.querySelectorAll('.market-price');
            prices.forEach(price => {
                const current = parseFloat(price.textContent.replace('$', '').replace(',', ''));
                const change = (Math.random() * 0.02 - 0.01) * current;
                const newPrice = current + change;
                price.textContent = '$' + newPrice.toLocaleString(undefined, {maximumFractionDigits: 2});
            });
            
            setTimeout(updatePrices, 3000);
        }
        
        // Uncomment to enable live price updates
        // updatePrices();
    </script>
</body>
</html>

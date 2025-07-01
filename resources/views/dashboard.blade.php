<!DOCTYPE html>
<html lang="es" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: #f3f4f6;
        }
        
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px -2px rgba(0, 0, 0, 0.1);
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .simple-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
            border: 1px solid #e5e7eb;
        }

        .simple-button {
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 14px;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-blue {
            background: #3b82f6;
            color: white;
        }

        .btn-blue:hover {
            background: #2563eb;
        }

        .btn-green {
            background: #10b981;
            color: white;
        }

        .btn-green:hover {
            background: #059669;
        }

        .header-simple {
            background: white;
            border-bottom: 1px solid #e5e7eb;
            padding: 16px 0;
        }

        .activation-notice {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: rgba(0, 0, 0, 0.85);
            color: white;
            padding: 12px 16px;
            border-radius: 6px;
            font-size: 13px;
            max-width: 250px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .activation-notice .title {
            font-weight: 600;
            margin-bottom: 2px;
        }

        .activation-notice .subtitle {
            color: #d1d5db;
            font-size: 12px;
        }

        .simple-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 12px;
            padding: 32px;
            margin-bottom: 24px;
            position: relative;
            overflow: hidden;
        }

        .simple-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.1);
        }

        .simple-hero-content {
            position: relative;
            z-index: 1;
        }

        .dark .simple-card {
            background: #1f2937;
            border-color: #374151;
        }

        .dark body {
            background-color: #111827;
        }

        .dark .header-simple {
            background: #1f2937;
            border-color: #374151;
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 min-h-screen">
    <!-- Header -->
    <header class="header-simple">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="font-semibold text-2xl text-gray-900 dark:text-white">
                        Panel de Control
                    </h1>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-1">Bienvenido de vuelta, es genial verte</p>
                </div>
                <div class="hidden md:flex items-center space-x-3">
                    <div class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        30 Jun 2025
                    </div>
                    <button id="themeToggle" class="p-2 rounded-md bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                        <svg id="sunIcon" class="w-4 h-4 text-gray-600 dark:text-gray-300 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        <svg id="moonIcon" class="w-4 h-4 text-gray-600 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Hero Section -->
            <div class="simple-hero">
                <div class="simple-hero-content">
                    <div class="flex flex-col md:flex-row items-center justify-between">
                        <div class="text-white mb-6 md:mb-0">
                            <h2 class="text-3xl md:text-4xl font-bold mb-3">
                                ¡Bienvenido! 👋
                            </h2>
                            <p class="text-lg md:text-xl text-white text-opacity-90 mb-4">
                                Todo está funcionando perfectamente
                            </p>
                            <div class="flex items-center space-x-2 text-white text-opacity-80 text-sm">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Sistema activo</span>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 bg-white bg-opacity-20 rounded-full flex items-center justify-center animate-float">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                
                <!-- Home Navigation Card -->
                <div class="group">
                    <div class="simple-card p-6 card-hover">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-blue-500 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                            </div>
                            <div class="text-right">
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-indigo-500 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Página Principal</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm">Accede a la página principal de la aplicación</p>
                        <a href="/home" class="inline-flex items-center justify-center w-full bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-medium py-2 px-4 rounded-lg shadow-sm hover:shadow-md transition-all duration-200">
                            <span>Página Principal</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Windows Activation Notice -->
    <div class="activation-notice">
        <div class="title">Activar Windows</div>
        <div class="subtitle">Ve a Configuración para activar Windows.</div>
    </div>

    <script>
        // Dark mode toggle
        const themeToggle = document.getElementById('themeToggle');
        const html = document.documentElement;
        
        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
        });
        
        // Load saved theme
        if (localStorage && localStorage.getItem('theme') === 'light') {
            html.classList.remove('dark');
        }
        
        // Add interactive effects
        document.querySelectorAll('button, a').forEach(element => {
            element.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-1px)';
            });
            
            element.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        
        // Add click animation to cards
        document.querySelectorAll('.card-hover').forEach(card => {
            card.addEventListener('click', function() {
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 100);
            });
        });
    </script>
</body>
</html>
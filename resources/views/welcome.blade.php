<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TiendaVirtual - Tu tienda online favorita</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(99, 102, 241, 0.4); }
            50% { box-shadow: 0 0 40px rgba(99, 102, 241, 0.8); }
        }
        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }
        .gradient-text {
            background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="min-h-screen overflow-hidden">
    <!-- Fondo animado con gradientes -->
    <div class="fixed inset-0 bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900">
        <div class="absolute inset-0 bg-gradient-to-tl from-blue-600/20 via-purple-600/20 to-pink-600/20"></div>
        <!-- Círculos decorativos animados -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-blue-400/30 to-purple-400/30 rounded-full blur-3xl float-animation"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-r from-pink-400/30 to-red-400/30 rounded-full blur-3xl float-animation" style="animation-delay: -3s;"></div>
        <div class="absolute top-3/4 left-1/2 w-64 h-64 bg-gradient-to-r from-green-400/30 to-blue-400/30 rounded-full blur-3xl float-animation" style="animation-delay: -1.5s;"></div>
    </div>

    <!-- Contenido principal -->
    <div class="relative z-10 min-h-screen flex items-center justify-center px-4">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Logo/Icono principal -->
            <div class="mb-8 flex justify-center">
                <div class="bg-white/10 backdrop-blur-lg rounded-full p-6 pulse-glow">
                    <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M7 4V2C7 1.45 7.45 1 8 1H16C16.55 1 17 1.45 17 2V4H20C20.55 4 21 4.45 21 5S20.55 6 20 6H19V19C19 20.1 18.1 21 17 21H7C5.9 21 5 20.1 5 19V6H4C3.45 6 3 5.55 3 5S3.45 4 4 4H7ZM9 3V4H15V3H9ZM7 6V19H17V6H7Z"/>
                        <path d="M9 8V17H11V8H9ZM13 8V17H15V8H13Z"/>
                    </svg>
                </div>
            </div>

            <!-- Título principal -->
            <h1 class="text-6xl md:text-7xl font-black text-white mb-6 leading-tight">
                <span class="gradient-text">Tienda</span>
                <span class="text-white">Virtual</span>
            </h1>

            <!-- Subtítulo -->
            <p class="text-xl md:text-2xl text-gray-200 mb-4 font-light">
                Descubre miles de productos increíbles
            </p>
            <p class="text-lg text-gray-300 mb-12 max-w-2xl mx-auto">
                Ofertas exclusivas, envío gratis, y la mejor experiencia de compra online. 
                Únete a más de 10,000 clientes satisfechos.
            </p>

            <!-- Características destacadas -->
            <div class="grid md:grid-cols-3 gap-6 mb-12 max-w-3xl mx-auto">
                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 text-center hover:bg-white/20 transition-all duration-300">
                    <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 7V9C15 10.1 14.1 11 13 11V22H11V16H9V22H7V11C5.9 11 5 10.1 5 9V7H3V9C3 11.2 4.8 13 7 13V22C7 22.6 7.4 23 8 23H10C10.6 23 11 22.6 11 22V18H13V22C13 22.6 13.4 23 14 23H16C16.6 23 17 22.6 17 22V13C19.2 13 21 11.2 21 9Z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold mb-2">Envío Gratis</h3>
                    <p class="text-gray-300 text-sm">En compras mayores a $50.000</p>
                </div>

                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 text-center hover:bg-white/20 transition-all duration-300">
                    <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 1L3 5V11C3 16.55 6.84 21.74 12 23C17.16 21.74 21 16.55 21 11V5L12 1ZM10 17L6 13L7.41 11.59L10 14.17L16.59 7.58L18 9L10 17Z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold mb-2">Compra Segura</h3>
                    <p class="text-gray-300 text-sm">Transacciones 100% protegidas</p>
                </div>

                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 text-center hover:bg-white/20 transition-all duration-300">
                    <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12S6.48 22 12 22 22 17.52 22 12 17.52 2 12 2ZM13 17H11V15H13V17ZM13 13H11V7H13V13Z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold mb-2">Soporte 24/7</h3>
                    <p class="text-gray-300 text-sm">Atención al cliente siempre disponible</p>
                </div>
            </div>

            <!-- Botones de acción -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-8">
                <a href="{{route('register')}}" class="group relative px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-full shadow-2xl hover:shadow-indigo-500/50 transition-all duration-300 transform hover:scale-105 hover:from-indigo-500 hover:to-purple-500">
                    <span class="relative z-10">Crear Cuenta Gratis</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-indigo-400 to-purple-400 rounded-full blur opacity-75 group-hover:opacity-100 transition-opacity duration-300"></div>
                </a>
                
                <a href="{{route('login')}}" class="px-8 py-4 bg-white/10 backdrop-blur-lg text-white font-semibold rounded-full border border-white/20 hover:bg-white/20 transition-all duration-300 transform hover:scale-105">
                    Iniciar Sesión
                </a>
            </div>

            <!-- Estadísticas sociales -->
            <div class="flex justify-center items-center space-x-8 text-gray-300">
                <div class="text-center">
                    <div class="text-2xl font-bold text-white">10K+</div>
                    <div class="text-sm">Clientes</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-white">50K+</div>
                    <div class="text-sm">Productos</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-white">4.9★</div>
                    <div class="text-sm">Calificación</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Elementos decorativos adicionales -->
    <div class="absolute top-10 left-10 w-20 h-20 border border-white/20 rounded-full"></div>
    <div class="absolute bottom-10 right-10 w-16 h-16 border border-white/20 rounded-full"></div>
    <div class="absolute top-1/2 left-10 w-2 h-2 bg-white/50 rounded-full"></div>
    <div class="absolute top-1/4 right-20 w-2 h-2 bg-white/50 rounded-full"></div>
    <div class="absolute bottom-1/3 left-1/4 w-1 h-1 bg-white/50 rounded-full"></div>

    <script>
        // Efecto de partículas sutiles en el cursor
        document.addEventListener('mousemove', function(e) {
            if (Math.random() > 0.95) {
                const particle = document.createElement('div');
                particle.className = 'fixed w-1 h-1 bg-white/30 rounded-full pointer-events-none z-50';
                particle.style.left = e.clientX + 'px';
                particle.style.top = e.clientY + 'px';
                document.body.appendChild(particle);
                
                setTimeout(() => {
                    particle.style.transition = 'all 1s ease-out';
                    particle.style.transform = 'translateY(-50px)';
                    particle.style.opacity = '0';
                    setTimeout(() => particle.remove(), 1000);
                }, 10);
            }
        });

        // Efecto hover en los botones
        document.querySelectorAll('a[href]').forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05) translateY(-2px)';
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1) translateY(0)';
            });
        });
    </script>
</body>
</html>
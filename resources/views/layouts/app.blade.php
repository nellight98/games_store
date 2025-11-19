<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Games Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <!-- Header -->
    <header class="bg-gray-800 border-b border-gray-700 sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="text-xl font-bold text-orange-500">
                        NEW GAMES
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/games" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 transition">
                            МАГАЗИН
                        </a>
                        <a href="/library" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 transition">
                            БИБЛИОТЕКА
                        </a>
                        <a href="/community" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 transition">
                            СООБЩЕСТВО
                        </a>
                    </div>
                </div>

                <!-- User Menu -->
                <div class="flex items-center space-x-4">
                    <a href="/wishlist" class="text-gray-300 hover:text-white text-sm">
                        🤍 ЖЕЛАЕМОЕ
                    </a>
                    <a href="/cart" class="text-gray-300 hover:text-white text-sm">
                        🛒 КОРЗИНА
                    </a>

                    <a href="/login" class="text-gray-300 hover:text-white">Войти</a>
                    <a href="/register" class="bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded-md text-sm font-medium transition">
                        Регистрация
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')  <!-- ИЗМЕНИЛ НА @yield -->
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 border-t border-gray-700 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center text-gray-400">
                <p>© 2024 New Games Store. Все права защищены.</p>
            </div>
        </div>
    </footer>
</body>
</html>

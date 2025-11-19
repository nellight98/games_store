<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Games Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'black': '#000000',
                        'dark': '#010100',
                        'gray-850': '#282828',
                        'gray-800': '#2C2C2C',
                        'gray-750': '#383838',
                        'gray-700': '#3C3C3C',
                        'gray-600': '#4E4E4E',
                        'purple-800': '#5D3999',
                        'purple-500': '#9676CC',
                        'purple-400': '#985AFF',
                        'purple-300': '#A17IF0',
                        'gray-400': '#868686',
                        'gray-200': '#C1C1C1',
                        'gray-100': '#D9D9D9',
                        'gray-50': '#E8E8E8',
                        'white': '#FFFFFF',
                        'accent': '#985AFF',
                        'success': '#5D3999',
                    }
                }
            }
        }
    </script>
    <style>
    .hero-bg {
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.9) 0%, rgba(93, 57, 153, 0.7) 100%);
    }

    .game-card {
        background: linear-gradient(145deg, #3C3C3C 0%, #2C2C2C 100%);
        border: 1px solid #4E4E4E;
    }

    .slider-container {
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .slider-container::-webkit-scrollbar {
        display: none;
    }

    .category-chip {
        background: linear-gradient(135deg, #5D3999 0%, #985AFF 100%);
    }

    .game-image {
        background: linear-gradient(45deg, #2a2a2a 0%, #3a3a3a 100%);
    }

    .search-container {
        background: rgba(44, 44, 44, 0.95);
        backdrop-filter: blur(10px);
    }

    /* Исправления для шапки */
    .header-menu-item {
        padding: 8px 16px;
        margin: 0 2px;
        font-weight: 600;
        border-radius: 6px;
        transition: all 0.2s ease-in-out;
    }

    .header-user-item {
        padding: 8px 12px;
        margin: 0 2px;
        font-weight: 600;
        border-radius: 6px;
        transition: all 0.2s ease-in-out;
    }
</style>

</head>
<body class="bg-gray-800 text-white min-h-screen">
    <!-- Header - ИСПРАВЛЕНА С ОДИНАКОВЫМИ ЭФФЕКТАМИ ПРИ НАВЕДЕНИИ -->
    <header class="bg-gray-800 border-b border-gray-850 sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center flex-shrink-0">
                    <a href="/" class="text-xl font-bold text-accent flex items-center hover:opacity-80 transition">
                        <i class="fas fa-gamepad mr-2"></i>
                        NEW GAMES
                    </a>
                </div>

                <!-- Search Bar - УВЕЛИЧЕНА С ПРАВИЛЬНОЙ ИКОНКОЙ -->
                <div class="hidden lg:block flex-1 max-w-2xl mx-8">
                    <div class="relative">
                        <input
                            type="text"
                            placeholder="Поиск игр, друзей, категорий..."
                            class="w-full bg-gray-750 border border-gray-600 rounded-lg px-4 py-2 pr-10 text-white placeholder-gray-400 focus:outline-none focus:border-accent transition text-sm"
                        >
                        <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-white transition">
                            <i class="fas fa-search text-sm"></i>
                        </button>
                    </div>
                </div>

                <!-- Desktop Menu - ВЫРОВНЕНО С ОДИНАКОВЫМИ ЭФФЕКТАМИ -->
                <div class="hidden md:flex items-center space-x-0">
                    <a href="/games" class="header-menu-item rounded text-sm text-gray-200 hover:text-white hover:bg-gray-750 transition">
                        МАГАЗИН
                    </a>
                    <a href="/library" class="header-menu-item rounded text-sm text-gray-200 hover:text-white hover:bg-gray-750 transition">
                        БИБЛИОТЕКА
                    </a>
                    <a href="/friends" class="header-menu-item rounded text-sm text-gray-200 hover:text-white hover:bg-gray-750 transition">
                        ДРУЗЬЯ
                    </a>
                    <a href="/community" class="header-menu-item rounded text-sm text-gray-200 hover:text-white hover:bg-gray-750 transition">
                        СООБЩЕСТВО
                    </a>
                </div>

                <!-- User Menu - ВЫРОВНЕНО С ОДИНАКОВЫМИ ЭФФЕКТАМИ -->
                <div class="flex items-center space-x-2">
                    <a href="/wishlist" class="header-user-item rounded text-sm text-gray-200 hover:text-white hover:bg-gray-750 transition hidden sm:block">
                        ЖЕЛАЕМОЕ
                    </a>
                    <a href="/cart" class="header-user-item rounded text-sm text-gray-200 hover:text-white hover:bg-gray-750 transition hidden sm:block">
                        КОРЗИНА
                    </a>

                    <a href="/login" class="header-user-item rounded text-sm text-gray-200 hover:text-white hover:bg-gray-750 transition">ВОЙТИ</a>
                    <a href="/register" class="bg-accent hover:bg-purple-500 px-3 py-1.5 rounded text-xs font-semibold transition transform hover:scale-105">
                        РЕГИСТРАЦИЯ
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Mobile Search - ТАКЖЕ ИСПРАВЛЕНА -->
    <div class="lg:hidden bg-gray-800 border-b border-gray-750 p-4">
        <div class="relative">
            <input
                type="text"
                placeholder="Поиск игр..."
                class="w-full bg-gray-750 border border-gray-600 rounded-lg px-4 py-2 pr-10 text-white placeholder-gray-400 focus:outline-none focus:border-accent transition"
            >
            <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-white">
                <i class="fas fa-search text-sm"></i>
            </button>
        </div>
    </div>

<!-- Hero Slider - С КАЧЕСТВЕННЫМИ КАРТИНКАМИ -->
<section class="hero-bg py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="relative">
            <div id="slider" class="slider-container flex overflow-x-auto gap-6 pb-4 snap-x snap-mandatory scroll-smooth">
                @php
                    $steamAppIds = [
                        1245620, // ELDEN RING
                        570,     // DOTA 2
                        1086940, // ASTRONEER
                        578080,  // PUBG
                        1091500  // Cyberpunk 2077
                    ];
                @endphp
                @foreach($featuredGames->take(5) as $game)
                <div class="flex-shrink-0 w-full md:w-2/3 lg:w-1/2 snap-center">
                    <div class="game-card rounded-xl overflow-hidden shadow-2xl">
                        <div class="relative">
                            <!-- КАЧЕСТВЕННЫЕ картинки из Steam -->
                            <div class="w-full h-64 md:h-80 relative overflow-hidden">
                                <img
                                    src="https://cdn.cloudflare.steamstatic.com/steam/apps/{{ $steamAppIds[$loop->index] }}/library_hero.jpg"
                                    alt="{{ $game->title }}"
                                    class="w-full h-full object-cover"
                                    onerror="this.src='https://cdn.cloudflare.steamstatic.com/steam/apps/{{ $steamAppIds[$loop->index] }}/header.jpg'"
                                >
                            </div>

                            <!-- Game Info Overlay -->
                            <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black via-black/80 to-transparent">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="font-bold text-white text-xl mb-2">{{ $game->title }}</h3>
                                        <div class="flex items-center space-x-4 text-sm">
                                            @if($game->is_free)
                                                <span class="bg-green-600 text-white px-3 py-1 rounded-full font-bold">БЕСПЛАТНО</span>
                                            @elseif($game->discount_price)
                                                <div class="flex items-center space-x-2">
                                                    <span class="text-green-400 font-bold text-lg">{{ number_format($game->discount_price, 0) }} ₽</span>
                                                    <span class="text-gray-400 line-through text-sm">{{ number_format($game->price, 0) }} ₽</span>
                                                </div>
                                            @else
                                                <span class="text-white font-bold text-lg">{{ number_format($game->price, 0) }} ₽</span>
                                            @endif
                                            <span class="text-yellow-400">
                                                <i class="fas fa-star"></i> 4.8
                                            </span>
                                        </div>
                                    </div>
                                    <a href="/game/{{ $game->id }}" class="bg-accent hover:bg-purple-500 text-white px-6 py-3 rounded-lg font-semibold transition transform hover:scale-105">
                                        Подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Slider Controls -->
            <button id="sliderPrev" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-gray-800 hover:bg-gray-700 text-white w-10 h-10 rounded-full flex items-center justify-center shadow-lg transition opacity-80 hover:opacity-100">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button id="sliderNext" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-gray-800 hover:bg-gray-700 text-white w-10 h-10 rounded-full flex items-center justify-center shadow-lg transition opacity-80 hover:opacity-100">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

    <!-- Quick Categories -->
    <section class="py-6 bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex overflow-x-auto gap-3 pb-2 slider-container">
                @php
                    $quickCategories = [
                        ['name' => 'Экшен', 'icon' => 'fire', 'color' => 'red'],
                        ['name' => 'RPG', 'icon' => 'dragon', 'color' => 'green'],
                        ['name' => 'Стратегия', 'icon' => 'chess', 'color' => 'blue'],
                        ['name' => 'Шутеры', 'icon' => 'crosshairs', 'color' => 'orange'],
                        ['name' => 'Приключения', 'icon' => 'map', 'color' => 'purple'],
                        ['name' => 'Симуляторы', 'icon' => 'car', 'color' => 'yellow'],
                        ['name' => 'Гонки', 'icon' => 'flag-checkered', 'color' => 'pink'],
                        ['name' => 'Спорт', 'icon' => 'running', 'color' => 'teal'],
                    ];
                @endphp
                @foreach($quickCategories as $category)
                <a href="/games?category={{ urlencode($category['name']) }}" class="flex-shrink-0 bg-gray-750 hover:bg-gray-700 text-gray-200 px-4 py-2 rounded-lg transition transform hover:scale-105 flex items-center space-x-2">
                    <i class="fas fa-{{ $category['icon'] }} text-{{ $category['color'] }}-400"></i>
                    <span class="text-sm font-medium">{{ $category['name'] }}</span>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- New Releases & Popular - С КАЧЕСТВЕННЫМИ КАРТИНКАМИ -->
    <section class="py-12 bg-gray-850">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- New Releases -->
                <div class="lg:col-span-2">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-white">НОВЫЕ РЕЛИЗЫ</h2>
                        <a href="/games?sort=new" class="text-accent hover:text-purple-300 transition text-sm">Все новинки →</a>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @php
                            $newReleaseApps = [1245620, 570, 1086940, 578080]; // ELDEN RING, DOTA 2, ASTRONEER, PUBG
                        @endphp
                        @foreach($featuredGames->take(4) as $game)
                        <div class="game-card rounded-lg overflow-hidden hover:shadow-purple-500/20 transition-all duration-300 group">
                            <div class="flex">
                                <!-- КАЧЕСТВЕННЫЕ картинки для новых релизов (616x353) -->
                                <div class="w-32 h-24 flex-shrink-0 relative overflow-hidden">
                                    <img
                                        src="https://cdn.cloudflare.steamstatic.com/steam/apps/{{ $newReleaseApps[$loop->index] }}/capsule_616x353.jpg"
                                        alt="{{ $game->title }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-300"
                                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                                    >
                                    <div class="game-image w-full h-full flex items-center justify-center absolute inset-0" style="display: none;">
                                        <i class="fas fa-gamepad text-xl text-white opacity-50"></i>
                                    </div>
                                </div>
                                <div class="p-4 flex-1">
                                    <h3 class="font-bold text-white mb-1">{{ $game->title }}</h3>
                                    <p class="text-gray-400 text-xs mb-2 line-clamp-2">{{ Str::limit($game->description, 60) }}</p>
                                    <div class="flex items-center justify-between">
                                        @if($game->is_free)
                                            <span class="text-green-400 font-bold text-sm">Бесплатно</span>
                                        @else
                                            <span class="text-white font-bold text-sm">{{ number_format($game->price, 0) }} ₽</span>
                                        @endif
                                        <div class="flex space-x-1">
                                            <span class="bg-gray-700 text-gray-300 px-1 py-0.5 rounded text-xs" title="Windows">
                                                <i class="fab fa-windows"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Friends Activity (остается без изменений) -->
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-white">АКТИВНОСТЬ ДРУЗЕЙ</h2>
                        <a href="/friends" class="text-accent hover:text-purple-300 transition text-sm">Все друзья →</a>
                    </div>
                    <div class="space-y-3">
                        @php
                            $friends = [
                                ['name' => 'Алексей', 'game' => 'DOTA 2', 'status' => 'online', 'time' => '2 ч'],
                                ['name' => 'Мария', 'game' => 'ASTRONEER', 'status' => 'online', 'time' => '1 ч'],
                                ['name' => 'Дмитрий', 'game' => 'Cyberpunk 2077', 'status' => 'away', 'time' => '5 ч'],
                                ['name' => 'Светлана', 'game' => 'The Witcher 3', 'status' => 'offline', 'time' => '1 д'],
                            ];
                        @endphp
                        @foreach($friends as $friend)
                        <div class="game-card p-3 rounded-lg hover:bg-gray-700 transition">
                            <div class="flex items-center space-x-3">
                                <div class="relative">
                                    <div class="w-10 h-10 bg-accent rounded-full flex items-center justify-center text-white font-bold">
                                        {{ strtoupper(substr($friend['name'], 0, 1)) }}
                                    </div>
                                    <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-{{ $friend['status'] == 'online' ? 'green' : ($friend['status'] == 'away' ? 'yellow' : 'gray') }}-500 rounded-full border-2 border-gray-800"></div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center space-x-2">
                                        <span class="text-white font-medium text-sm truncate">{{ $friend['name'] }}</span>
                                        <span class="text-gray-400 text-xs">{{ $friend['time'] }}</span>
                                    </div>
                                    <div class="text-gray-300 text-xs truncate">{{ $friend['game'] }}</div>
                                </div>
                                <button class="text-gray-400 hover:text-accent transition">
                                    <i class="fas fa-comment"></i>
                                </button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular with Friends - С КАЧЕСТВЕННЫМИ КАРТИНКАМИ -->
    <section class="py-12 bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-bold text-white flex items-center">
                    <i class="fas fa-user-friends mr-3 text-accent"></i>
                    ПОПУЛЯРНО У ДРУЗЕЙ
                </h2>
                <a href="/games?friends=true" class="text-accent hover:text-purple-300 transition">Все рекомендации →</a>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
                @php
                    $popularApps = [1245620, 570, 1086940, 578080, 1091500, 292030]; // ELDEN RING, DOTA 2, ASTRONEER, PUBG, Cyberpunk, The Witcher 3
                @endphp
                @foreach($featuredGames->take(6) as $game)
                <div class="game-card rounded-lg overflow-hidden hover:shadow-green-500/20 transition-all duration-300 group">
                    <div class="relative">
                        <!-- КАЧЕСТВЕННЫЕ картинки для популярного у друзей (616x353) -->
                        <div class="aspect-[3/4] relative overflow-hidden">
                            <img
                                src="https://cdn.cloudflare.steamstatic.com/steam/apps/{{ $popularApps[$loop->index] }}/capsule_616x353.jpg"
                                alt="{{ $game->title }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                            >
                            <div class="game-image w-full h-full flex items-center justify-center absolute inset-0" style="display: none;">
                                <i class="fas fa-gamepad text-2xl text-white opacity-50"></i>
                            </div>
                        </div>
                        <div class="absolute top-2 right-2 bg-green-600 text-white px-2 py-1 rounded text-xs font-bold">
                            {{ $loop->index + 3 }} друзей
                        </div>
                    </div>
                    <div class="p-3">
                        <h3 class="font-bold text-white text-sm mb-2 line-clamp-2">{{ $game->title }}</h3>
                        <div class="flex items-center justify-between text-xs">
                            @if($game->is_free)
                                <span class="text-green-400 font-bold">Бесплатно</span>
                            @else
                                <span class="text-white">{{ number_format($game->price, 0) }} ₽</span>
                            @endif
                            <div class="text-yellow-400">
                                <i class="fas fa-star"></i> 4.8
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Winter Sale Banner - С РАБОЧИМ ТАЙМЕРОМ -->
    <section class="py-16 bg-gradient-to-r from-purple-900 via-purple-800 to-indigo-900 relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="absolute -right-20 -top-20 w-64 h-64 bg-white rounded-full opacity-10"></div>
        <div class="absolute -left-20 -bottom-20 w-64 h-64 bg-white rounded-full opacity-10"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="flex justify-center mb-6">
                <div class="bg-white/20 backdrop-blur-sm rounded-full px-6 py-2 inline-flex items-center space-x-2">
                    <i class="fas fa-snowflake text-white animate-pulse"></i>
                    <span class="text-white font-semibold text-sm">ЗИМНЯЯ РАСПРОДАЖА 2025</span>
                </div>
            </div>

            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 drop-shadow-lg">
                ЗИМНИЕ СКИДКИ ДО <span class="text-yellow-300">90%</span>
            </h2>

            <p class="text-gray-100 text-lg md:text-xl mb-6 max-w-3xl mx-auto leading-relaxed">
                Самое время пополнить свою коллекцию! Тысячи игр со скидками, эксклюзивные предложения
                и зимние сюрпризы ждут вас. Успейте купить до конца года!
            </p>

            <!-- Рабочий таймер обратного отсчета -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-8">
                <div id="countdown" class="flex items-center space-x-4 text-white/90">
                    <div class="text-center bg-white/10 backdrop-blur-sm rounded-lg p-3 min-w-16">
                        <div id="days" class="text-2xl font-bold">15</div>
                        <div class="text-xs">ДНЕЙ</div>
                    </div>
                    <div class="text-2xl">:</div>
                    <div class="text-center bg-white/10 backdrop-blur-sm rounded-lg p-3 min-w-16">
                        <div id="hours" class="text-2xl font-bold">23</div>
                        <div class="text-xs">ЧАСА</div>
                    </div>
                    <div class="text-2xl">:</div>
                    <div class="text-center bg-white/10 backdrop-blur-sm rounded-lg p-3 min-w-16">
                        <div id="minutes" class="text-2xl font-bold">47</div>
                        <div class="text-xs">МИНУТ</div>
                    </div>
                    <div class="text-2xl">:</div>
                    <div class="text-center bg-white/10 backdrop-blur-sm rounded-lg p-3 min-w-16">
                        <div id="seconds" class="text-2xl font-bold">12</div>
                        <div class="text-xs">СЕКУНД</div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/games?discounts=true" class="bg-white text-purple-900 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition transform hover:scale-105 shadow-lg flex items-center justify-center space-x-2">
                    <i class="fas fa-gift"></i>
                    <span>СМОТРЕТЬ СКИДКИ</span>
                </a>
                <a href="/games?specials=true" class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-white hover:text-purple-900 transition transform hover:scale-105 shadow-lg flex items-center justify-center space-x-2">
                    <i class="fas fa-star"></i>
                    <span>ВСЕ АКЦИИ</span>
                </a>
            </div>

            <p class="text-gray-300 text-sm mt-6">
                🔥 Более 10,000 игр участвуют в распродаже • Акция действует до 31 декабря 2025
            </p>
        </div>
    </section>

    <!-- Top Categories - УМЕНЬШЕННЫЙ -->
    <section class="py-8 bg-gray-850">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-xl font-bold text-white mb-4 text-center">ПОПУЛЯРНЫЕ КАТЕГОРИИ</h2>
            <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-8 gap-3">
                @php
                    $topCategories = [
                        ['name' => 'Шутеры', 'icon' => 'crosshairs', 'color' => 'red'],
                        ['name' => 'RPG', 'icon' => 'dragon', 'color' => 'green'],
                        ['name' => 'Стратегия', 'icon' => 'chess', 'color' => 'blue'],
                        ['name' => 'Приключения', 'icon' => 'map', 'color' => 'purple'],
                        ['name' => 'Симуляторы', 'icon' => 'car', 'color' => 'yellow'],
                        ['name' => 'Гонки', 'icon' => 'flag-checkered', 'color' => 'pink'],
                        ['name' => 'Хоррор', 'icon' => 'ghost', 'color' => 'orange'],
                        ['name' => 'Инди', 'icon' => 'gamepad', 'color' => 'teal'],
                    ];
                @endphp
                @foreach($topCategories as $category)
                <a href="/games?category={{ urlencode($category['name']) }}" class="game-card p-3 rounded-lg text-center hover:scale-105 transition transform group">
                    <div class="w-10 h-10 bg-{{ $category['color'] }}-500 rounded-full flex items-center justify-center mx-auto mb-2 group-hover:scale-110 transition">
                        <i class="fas fa-{{ $category['icon'] }} text-white text-sm"></i>
                    </div>
                    <h3 class="font-bold text-white text-xs mb-1">{{ $category['name'] }}</h3>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Recently Updated - С КАЧЕСТВЕННЫМИ КАРТИНКАМИ -->
    <section class="py-12 bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-bold text-white">НЕДАВНО ОБНОВЛЕННЫЕ</h2>
                <a href="/games?updated=true" class="text-accent hover:text-purple-300 transition">Все обновления →</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $updatedApps = [1245620, 570, 1086940, 578080]; // ELDEN RING, DOTA 2, ASTRONEER, PUBG
                @endphp
                @foreach($featuredGames->take(4) as $game)
                <div class="game-card rounded-lg overflow-hidden hover:shadow-blue-500/20 transition-all duration-300 group">
                    <div class="relative">
                        <!-- КАЧЕСТВЕННЫЕ картинки для обновленных игр (616x353) -->
                        <div class="aspect-video relative overflow-hidden">
                            <img
                                src="https://cdn.cloudflare.steamstatic.com/steam/apps/{{ $updatedApps[$loop->index] }}/capsule_616x353.jpg"
                                alt="{{ $game->title }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                            >
                            <div class="game-image w-full h-full flex items-center justify-center absolute inset-0" style="display: none;">
                                <i class="fas fa-sync-alt text-3xl text-blue-400 opacity-70"></i>
                            </div>
                        </div>
                        <div class="absolute top-2 left-2 bg-blue-600 text-white px-2 py-1 rounded text-xs font-bold">
                            ОБНОВЛЕНО
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-white mb-2">{{ $game->title }}</h3>
                        <p class="text-gray-400 text-xs mb-3">Новое обновление • 2 дня назад</p>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-blue-400">
                                <i class="fas fa-download"></i> 1.2 GB
                            </span>
                            <a href="/game/{{ $game->id }}" class="text-accent hover:text-purple-300 transition">
                                Смотреть
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Game Downloads Manager - С КАЧЕСТВЕННЫМИ КАРТИНКАМИ -->
    <section class="py-12 bg-gray-850">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-bold text-white flex items-center">
                    <i class="fas fa-download mr-3 text-green-400"></i>
                    МЕНЕДЖЕР ЗАГРУЗОК
                </h2>
                <a href="/downloads" class="text-accent hover:text-purple-300 transition">Все загрузки →</a>
            </div>
            <div class="game-card rounded-xl p-6">
                <div class="space-y-4">
                    <!-- Active Download -->
                    <div class="flex items-center justify-between p-4 bg-gray-750 rounded-lg">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 rounded overflow-hidden flex-shrink-0">
                                <img
                                    src="https://cdn.cloudflare.steamstatic.com/steam/apps/1091500/capsule_616x353.jpg"
                                    alt="Cyberpunk 2077"
                                    class="w-full h-full object-cover"
                                >
                            </div>
                            <div>
                                <h3 class="font-bold text-white">Cyberpunk 2077</h3>
                                <p class="text-gray-400 text-sm">Установка • 65%</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-green-400 text-sm font-bold">65%</div>
                            <div class="text-gray-400 text-xs">2.1 GB/s</div>
                        </div>
                    </div>

                    <!-- Queued Downloads -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @php
                            $downloadApps = [1245620, 570]; // ELDEN RING, DOTA 2
                        @endphp
                        @foreach($featuredGames->take(2) as $game)
                        <div class="flex items-center justify-between p-3 bg-gray-700 rounded-lg">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded overflow-hidden flex-shrink-0">
                                    <img
                                        src="https://cdn.cloudflare.steamstatic.com/steam/apps/{{ $downloadApps[$loop->index] }}/capsule_616x353.jpg"
                                        alt="{{ $game->title }}"
                                        class="w-full h-full object-cover"
                                    >
                                </div>
                                <div>
                                    <h3 class="font-bold text-white text-sm">{{ $game->title }}</h3>
                                    <p class="text-gray-400 text-xs">В очереди</p>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-accent transition">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        @endforeach
                    </div>

                    <!-- Download Stats -->
                    <div class="flex items-center justify-between pt-4 border-t border-gray-700">
                        <div class="text-sm text-gray-400">
                            <i class="fas fa-hdd mr-1"></i>
                            125 GB свободно
                        </div>
                        <button class="bg-accent hover:bg-purple-500 text-white px-4 py-2 rounded text-sm transition">
                            Управление загрузками
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 border-t border-gray-850 py-8 mt-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-gray-400">
                <p>© 2025 New Games Store. Все права защищены.</p>
                <p class="text-sm mt-2">Все торговые марки являются собственностью соответствующих владельцев.</p>
            </div>
        </div>
    </footer>

    <script>
        // Slider functionality
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('slider');
            const prevBtn = document.getElementById('sliderPrev');
            const nextBtn = document.getElementById('sliderNext');
            let autoScrollInterval;
            let currentSlide = 0;

            function getSlideCount() {
                return slider.children.length;
            }

            function scrollToSlide(index) {
                const slideWidth = slider.clientWidth;
                currentSlide = index;
                slider.scrollTo({
                    left: index * slideWidth,
                    behavior: 'smooth'
                });
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % getSlideCount();
                scrollToSlide(currentSlide);
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + getSlideCount()) % getSlideCount();
                scrollToSlide(currentSlide);
            }

            // Event listeners
            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);

            // Auto-scroll
            function startAutoScroll() {
                autoScrollInterval = setInterval(nextSlide, 5000);
            }

            function stopAutoScroll() {
                clearInterval(autoScrollInterval);
            }

            // Start auto-scroll
            startAutoScroll();

            // Pause auto-scroll on hover
            slider.addEventListener('mouseenter', stopAutoScroll);
            slider.addEventListener('mouseleave', startAutoScroll);
            prevBtn.addEventListener('mouseenter', stopAutoScroll);
            nextBtn.addEventListener('mouseenter', stopAutoScroll);
            prevBtn.addEventListener('mouseleave', startAutoScroll);
            nextBtn.addEventListener('mouseleave', startAutoScroll);

            // Update current slide on scroll
            slider.addEventListener('scroll', function() {
                currentSlide = Math.round(slider.scrollLeft / slider.clientWidth);
            });

            // Countdown Timer for Winter Sale
            function updateCountdown() {
                const now = new Date();
                const newYear = new Date(now.getFullYear() + 1, 0, 1); // 1 января следующего года
                const diff = newYear - now;

                const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((diff % (1000 * 60)) / 1000);

                document.getElementById('days').textContent = days.toString().padStart(2, '0');
                document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
                document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
                document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
            }

            // Update countdown every second
            updateCountdown();
            setInterval(updateCountdown, 1000);
        });
    </script>
</body>
</html>

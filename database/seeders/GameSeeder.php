<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        $games = [
            [
                'title' => 'ASTRONEER',
                'description' => 'Игра приключенцев в открытом космосе с исследованием планет и созданием баз.',
                'price' => 599.00,
                'discount_price' => 399.00,
                'image' => 'https://picsum.photos/400/300?random=1',
                'developer' => 'System Era Softworks',
                'publisher' => 'System Era Softworks',
                'release_date' => '2019-02-06',
                'categories' => json_encode(['Приключения', 'Песочница']),
                'tags' => json_encode(['открытый мир', 'космос', 'мультиплеер']),
                'is_featured' => true,
                'is_free' => false,
            ],
            [
                'title' => 'DOTA 2',
                'description' => 'Бесплатная MOBA игра с миллионами игроков по всему миру.',
                'price' => 0.00,
                'discount_price' => null,
                'image' => 'https://picsum.photos/400/300?random=2',
                'developer' => 'Valve',
                'publisher' => 'Valve',
                'release_date' => '2013-07-09',
                'categories' => json_encode(['Стратегия', 'Экшен']),
                'tags' => json_encode(['MOBA', 'мультиплеер', 'соревновательный']),
                'is_featured' => true,
                'is_free' => true,
            ],
            [
                'title' => 'STELLARIS',
                'description' => 'Глобальная космическая стратегия с исследованием галактики.',
                'price' => 799.00,
                'discount_price' => 599.00,
                'image' => 'https://picsum.photos/400/300?random=3',
                'developer' => 'Paradox Development Studio',
                'publisher' => 'Paradox Interactive',
                'release_date' => '2016-05-09',
                'categories' => json_encode(['Стратегия', 'Симулятор']),
                'tags' => json_encode(['космос', 'стратегия', '4X']),
                'is_featured' => false,
                'is_free' => false,
            ],
            [
                'title' => 'PUBG: BATTLEGROUNDS',
                'description' => 'Королевская битва в реалистичном стиле.',
                'price' => 0.00,
                'discount_price' => null,
                'image' => 'https://picsum.photos/400/300?random=4',
                'developer' => 'KRAFTON, Inc.',
                'publisher' => 'KRAFTON, Inc.',
                'release_date' => '2017-12-20',
                'categories' => json_encode(['Экшен', 'Шутер']),
                'tags' => json_encode(['королевская битва', 'мультиплеер', 'выживание']),
                'is_featured' => true,
                'is_free' => true,
            ],
            [
                'title' => 'Cyberpunk 2077',
                'description' => 'Ролевая игра в открытом мире будущего.',
                'price' => 1999.00,
                'discount_price' => 1299.00,
                'image' => 'https://picsum.photos/400/300?random=5',
                'developer' => 'CD Projekt Red',
                'publisher' => 'CD Projekt',
                'release_date' => '2020-12-10',
                'categories' => json_encode(['RPG', 'Экшен']),
                'tags' => json_encode(['киберпанк', 'открытый мир', 'сюжетная']),
                'is_featured' => true,
                'is_free' => false,
            ],
            [
                'title' => 'The Witcher 3',
                'description' => 'Эпическая RPG с богатым миром и сюжетом.',
                'price' => 1499.00,
                'discount_price' => 499.00,
                'image' => 'https://picsum.photos/400/300?random=6',
                'developer' => 'CD Projekt Red',
                'publisher' => 'CD Projekt',
                'release_date' => '2015-05-19',
                'categories' => json_encode(['RPG', 'Приключения']),
                'tags' => json_encode(['фэнтези', 'открытый мир', 'сюжетная']),
                'is_featured' => true,
                'is_free' => false,
            ],
            [
                'title' => 'Minecraft',
                'description' => 'Песочница с безграничными возможностями.',
                'price' => 0.00,
                'discount_price' => null,
                'image' => 'https://picsum.photos/400/300?random=7',
                'developer' => 'Mojang Studios',
                'publisher' => 'Xbox Game Studios',
                'release_date' => '2011-11-18',
                'categories' => json_encode(['Песочница', 'Приключения']),
                'tags' => json_encode(['создание', 'выживание', 'мультиплеер']),
                'is_featured' => true,
                'is_free' => true,
            ],
            [
                'title' => 'Counter-Strike 2',
                'description' => 'Культовый тактический шутер.',
                'price' => 0.00,
                'discount_price' => null,
                'image' => 'https://picsum.photos/400/300?random=8',
                'developer' => 'Valve',
                'publisher' => 'Valve',
                'release_date' => '2023-09-27',
                'categories' => json_encode(['Шутер', 'Экшен']),
                'tags' => json_encode(['тактический', 'мультиплеер', 'командный']),
                'is_featured' => true,
                'is_free' => true,
            ]
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}

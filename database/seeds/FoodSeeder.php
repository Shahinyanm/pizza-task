<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
            [
                'name' => 'Diablo',
                'type' => 'pizza',
                'description' => 'Ham, mushrooms, bitter & red pepper, cheese, white sauce "Majorio".',
                'price' => 20.00,
                'image' => Storage::url('images/pizza-1.jpg')
            ],
            [
                'name' => 'Altono',
                'type' => 'pizza',
                'description' => 'Semi-smoked sausage, ham, cheese, white sauce "Majorio".',
                'price' => 29.00,
                'image' => Storage::url('images/pizza-2.jpg')
            ],
            [
                'name' => 'Vegetarian',
                'type' => 'pizza',
                'description' => 'Mushrooms, tomatoes, marinated corn, Bulgarian pepper, cheese, white sauce "Majorio".',
                'price' => 25.00,
                'image' => Storage::url('images/pizza-3.jpg')
            ],
            [
                'name' => 'Venice',
                'type' => 'pizza',
                'description' => 'Mushrooms, chicken brisket, cheese, white sauce "Majorio".',
                'price' => 22.00,
                'image' => Storage::url('images/pizza-4.jpg')
            ],
            [
                'name' => 'Assorti',
                'type' => 'pizza',
                'description' => 'Semi-smoked sausage, mushrooms, tomatoes, cheese,dill, white sauce "majorio".',
                'price' => 20.00,
                'image' => Storage::url('images/pizza-5.jpg')
            ],
            [
                'name' => 'Monako',
                'type' => 'pizza',
                'description' => 'Tomatoes, pork fillet, ham, chicken brisket, Bulg. pepper, cheese, white sauce "majorio".',
                'price' => 25.00,
                'image' => Storage::url('images/pizza-6.jpg')
            ],
            [
                'name' => 'Pepperoni',
                'type' => 'pizza',
                'description' => 'Sausage Pepperoni, bitter and Bulgarian pepper, tomatoes, cheese, white sauce "majorio".',
                'price' => 25.00,
                'image' => Storage::url('images/pizza-7.jpg')
            ],
            [
                'name' => 'Siciliana',
                'type' => 'pizza',
                'description' => 'beef, cheese "Mozzarella ", spices.',
                'price' => 18.00,
                'image' => Storage::url('images/pizza-8.jpg')
            ],
            [
                'name' => 'Orange Juice',
                'type' => 'drinks',
                'description' => '0.5l.',
                'price' => 5.00,
                'image' => Storage::url('images/drink-1.jpg')
            ],
            [
                'name' => 'Mango Juice',
                'type' => 'drinks',
                'description' => '0.5l.',
                'price' => 5.00,
                'image' => Storage::url('images/drink-6.jpg')
            ],
            [
                'name' => 'Beer Korona',
                'type' => 'drinks',
                'description' => '0.5l.',
                'price' => 7.00,
                'image' => Storage::url('images/drink-4.jpg')
            ],
            [
                'name' => 'Lemonade',
                'type' => 'drinks',
                'description' => '0.5l.',
                'price' => 3.00,
                'image' => Storage::url('images/drink-5.jpg')
            ],
            [
                'name' => 'Mockito',
                'type' => 'drinks',
                'description' => '1l.',
                'price' => 10.00,
                'image' => Storage::url('images/drink-7.jpg')
            ],
            [
                'name' => 'Fusilli',
                'type' => 'pasta',
                'description' => 'mushrooms, bacon, pepperoni, tomato, Fusilli, white pepper, onion, white wine, "Parmesan" cheese, garlic.',
                'price' => 15,
                'image' => Storage::url('images/pasta-1.jpg')
            ],
            [
                'name' => 'Farfalle',
                'type' => 'pasta',
                'description' => 'Pork fillet, Bulgarian pepper, celery, sesame, onion, white wine, "Parmesan" cheese, farfalle , garlic.',
                'price' => 12,
                'image' => Storage::url('images/pasta-2.jpg')
            ],
            [
                'name' => 'Bolognese',
                'type' => 'pasta',
                'description' => 'In Bologna ragù alla bolognese is traditionally paired and served with tagliatelle made with eggs and northern Italy`s soft wheat flour. Acceptable alternatives to fresh tagliatelle include other broad flat pasta shapes, such as pappardelle or fettuccine, and tube shapes, such as rigatoni and penne.',
                'price' => 15,
                'image' => Storage::url('images/pasta-3.jpg')
            ]
        ]);
    }
}

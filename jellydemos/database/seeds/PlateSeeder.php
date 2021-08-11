<?php

use Illuminate\Database\Seeder;

class PlateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plates = [
            [
                'category' => 'Prime Steaks',
                'name' => 'Filet',
                'description' => "7 oz. Center Cut10 oz. Double cut",
                'price' => 14.49,
            ],
            [
                'category' => 'Prime Steaks',
                'name' => 'Boine in filet',
                'description' => "10 oz Greg Norman Ranch, Australia",
                'price' => 20.50,
            ],
            [
                'category' => 'Prime Steaks',
                'name' => 'New York Strip',
                'description' => "9 oz. Center Cut12 oz. Double cut oz",
                'price' => 9.99,
            ],
            [
                'category' => 'Prime Steaks',
                'name' => 'Porterhouse',
                'description' => "7 oz. Center Cut10 oz. Double cut",
                'price' => 7.99,
            ],
            [
                'category' => 'Prime Steaks',
                'name' => 'Delmonico',
                'description' => "10 oz Greg Norman Ranch, Australia",
                'price' => 17.99,
            ],
            [
                'category' => 'Drinks & Wines',
                'name' => 'Raimat Abadia',
                'description' => "Complex, Dark Cherry, Spice, bodied",
                'price' => 8.50,
            ],
            [
                'category' => 'Drinks & Wines',
                'name' => 'Eden Chardonnay',
                'description' => "Elegant, Lemon, Vanilla, bodied",
                'price' => 15.50,
            ],
            [
                'category' => 'Drinks & Wines',
                'name' => 'Mailly Brut Reserva',
                'description' => "Dry, Toast, Citrus, Medium-bodied ",
                'price' => 17.50,
            ],
            [
                'category' => 'Drinks & Wines',
                'name' => 'Leon V de Armenia',
                'description' => "Crisp, Citrus, Full-bodied",
                'price' => 12.50,
            ],
            [
                'category' => 'Drinks & Wines',
                'name' => 'Caberenet Sauvignon',
                'description' => "Intense, Cherry, Chocolate, Full-bodied",
                'price' => 30.50,
            ],
            [
                'category' => 'Desserts',
                'name' => 'Creme Brulee',
                'description' => "Creme Anglaise, Vanilla Bean Ice Cream ",
                'price' => 7.49,
            ],
            [
                'category' => 'Desserts',
                'name' => 'Warm chocolate',
                'description' => "Amarena Cherries, Kirsch Cream",
                'price' => 6.50,
            ],
            [
                'category' => 'Desserts',
                'name' => 'Cheese cake',
                'description' => "Cheese creme, ice cream, strawberry ",
                'price' => 4.50,
            ],
            [
                'category' => 'Desserts',
                'name' => 'Apple Turnover',
                'description' => "Creme Anglaise, Vanilla Bean Ice Cream",
                'price' => 7.99,
            ],
            [
                'category' => 'Desserts',
                'name' => 'Sorbet with fruit',
                'description' => "Lemon, organge, strawberry or mango",
                'price' => 8.50,
            ],
        ];

        foreach ($plates as $plate) {
            DB::table('plates')->insert($plate);
        }
    }
}

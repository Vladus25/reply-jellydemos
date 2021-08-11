<?php

use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slides = [
            [
                'category' => 'slide',
                'img' => 'main-1.jpg',
            ],
            [
                'category' => 'slide',
                'img' => 'main-2.jpg',
            ],
            [
                'category' => 'slide',
                'img' => 'main-3.jpg',
            ],
            [
                'category' => 'text-slide',
                'img' => 'Welcome to restaurant',
            ],
            [
                'category' => 'text-slide',
                'img' => 'Elixir exclusively food',
            ],
            [
                'category' => 'text-slide',
                'img' => 'The soul food & bistro',
            ],
        ];

        foreach ($slides as $slide) {
            DB::table('slides')->insert($slide);
        }
    }
}

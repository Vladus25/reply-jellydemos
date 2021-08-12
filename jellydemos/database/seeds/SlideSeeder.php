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
                'category' => 'Slide',
                'img' => 'main-1.jpg',
            ],
            [
                'category' => 'Slide',
                'img' => 'main-2.jpg',
            ],
            [
                'category' => 'Slide',
                'img' => 'main-3.jpg',
            ],
            [
                'category' => 'Text-slide',
                'text' => 'Welcome to restaurant',
            ],
            [
                'category' => 'Text-slide',
                'text' => 'Elixir exclusively food',
            ],
            [
                'category' => 'Text-slide',
                'text' => 'The soul food & bistro',
            ],
        ];

        foreach ($slides as $slide) {
            DB::table('slides')->insert($slide);
        }
    }
}

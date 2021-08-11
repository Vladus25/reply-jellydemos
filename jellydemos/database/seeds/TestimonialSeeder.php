<?php

use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testimonials = [
            [
                'author' => 'Alexander Smith',
                'description' => "Applicake chocolate cake wafer toffee pie soufflé wafer. Tart marshmallow wafer macaroon cheesecake jelly. Gingerbread cookie soufflé sweet roll sweet roll jelly-o.",
            ],
            [
                'author' => 'John Berthier',
                'description' => '"Awesome to work with. Incredibly organized, easy to communicate with, responsive with next iterations, and beautiful work. It’s great to work with someone so open-minded and responsive. Thank you!"',
            ],
            [
                'author' => 'Carolyn Meyer',
                'description' => '“Your designs were exactly what Josef had always imagined — clear, clean, continuous, with a focus on stylistic elements. It was a major help for us. Thank you so much for your work on this project."',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            DB::table('testimonials')->insert($testimonial);
        }
    }
}

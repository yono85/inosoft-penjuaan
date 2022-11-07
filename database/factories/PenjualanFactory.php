<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PenjualanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'kategori'  =>  1,
            'tahun'     =>  2015,
            'warna'     =>  'Hitam',
            'harga'     =>  12000000
        ];
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = [
            'far fa-address-card',
            'fas fa-align-justify',
            'far fa-angry',
            'fas fa-baby-carriage',
            'fas fa-award',
            'fas fa-balance-scale',
            'fas fa-bath',
            'fas fa-bell',
            'fas fa-bomb',
            'fas fa-book-open',
            'fas fa-bullhorn',
            'fas fa-candy-cane',
            'fas fa-car',
            'fas fa-chart-line',
            'fas fa-cat'
        ];
        
        foreach ($values as $key => $value) {
            DB::table('labels')->insert([
                'user' => 1,
                'name' => Str::random(6),
                'value' => $value
            ]);
        }
    }
}

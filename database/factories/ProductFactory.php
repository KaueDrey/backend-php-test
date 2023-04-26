<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $random = random_int(1, 30);
        return [
            'name' => 'Product ' . $random,
            'code' => 'code ' . $random,
            'price' => $random,
            'qty' => $random,
            'brand' => 'brand' . $random,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Ropa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ropa>
 */
class RopaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $clothes = [
            'T-shirt',
            'Jeans',
            'Jacket',
            'Sweater',
            'Skirt',
            'Dress',
            'Pants',
            'Shorts',
            'Blouse',
            'Coat',
            'Socks',
            'Shoes',
            'Hat',
            'Scarf',
            'Gloves',
            'Sweatshirt',
            'Cardigan',
            'Tank top',
            'Pajamas',
            'Suit',
        ];
        return [
            //
            'codigobarra' => $this->faker->unique()->ean13(),
            'nombre' => $this->faker->randomElement($clothes),
            'Marca' => $this->faker->word(),
            'talla' => $this->faker->randomElement(['XS', 'S', 'M', 'L', 'XL']),
            'color' => $this->faker->randomElement(['Rojo', 'Azul', 'Verde', 'Amarillo', 'Blanco', 'Rosado', 'Multicolor', 'Otro']),
            'precio' => $this->faker->numberBetween(100, 9000),

        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Estoque;

class EstoqueFactory extends Factory
{
    protected $model = Estoque::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome_produto' => fake()->name(),
            'quantidade' => fake()->integer(),
            'criado_em' => now(),
            'codigo_produto' => fake()->integer()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class EstoqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = \App\Models\Estoque::class;


    public function definition()
    {
        return [
            //
            'nome_produto' => 'teste',
            'quantidade' => random_int(0, 20)

        ];
    }
}

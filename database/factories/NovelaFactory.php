<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Novela;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Novela>
 */
class NovelaFactory extends Factory
{
    protected $model = Novela::class; // modelo que a factory gera

    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'descricao' => $this->faker->text(100),
            'inicio_exibicao' => $this->faker->date(),
            'fim_exibicao' => $this->faker->date(),
            'topo_audiencia' => $this->faker->randomFloat(2, 0, 100),
            'qtd_capitulos' => $this->faker->numberBetween(1, 200),
        ];
    }
}

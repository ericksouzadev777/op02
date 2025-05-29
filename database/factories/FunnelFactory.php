<?php

namespace Database\Factories;

use App\Models\Funnel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Funnel>
 */
class FunnelFactory extends Factory
{
    protected $model = Funnel::class;

    public function definition()
    {
        return [
            'name'           => $this->faker->sentence(3),
            'initial_amount' => $this->faker->randomFloat(2, 0, 50),
            'order'          => 0,
            'active'         => true,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Funnel;
use App\Models\FunnelStep;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FunnelStep>
 */
class FunnelStepFactory extends Factory
{
    protected $model = FunnelStep::class;

    public function definition()
    {
        return [
            'funnel_id' => Funnel::factory(),
            'name'      => $this->faker->sentence(4),
            'icon'      => '✔️',
            'amount'    => $this->faker->randomFloat(2, 1, 10),
            'order'     => 0,
            'active'    => true,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\FunnelResponse;
use App\Models\FunnelStep;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FunnelResponse>
 */
class FunnelResponseFactory extends Factory
{
    protected $model = FunnelResponse::class;

    public function definition()
    {
        return [
            'user_id'         => User::factory(),
            'funnel_step_id'  => FunnelStep::factory(),
            'answered'        => true,
        ];
    }
}

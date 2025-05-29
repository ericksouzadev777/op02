<?php

namespace Database\Seeders;

use App\Models\Funnel;
use App\Models\StatusAlert;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FunnelFixedSeeder extends Seeder
{
    public function run(): void
    {
        StatusAlert::create();
        // 1. Cria o funil principal
        $funnel = Funnel::create([
            'name'           => 'Funil de Demonstração',
            'initial_amount' => 0,
            'order'          => 1,
            'active'         => true,
        ]);

        // 2. Valores de cada uma das 7 etapas (total = 1650)
        $stepValues = [200, 250, 150, 300, 200, 300, 250];

        foreach ($stepValues as $index => $value) {
            // 2.1 Cria a etapa
            $step = $funnel->steps()->create([
                'name'   => 'Etapa ' . ($index + 1),
                'icon'   => '✔️',
                'amount' => $value,
                'order'  => $index + 1,
                'active' => true,
            ]);

            // 2.2 Calcula valor base e “resto” para as 5 opções
            $baseOpt   = intdiv($value, 5);
            $remainder = $value % 5;

            for ($j = 1; $j <= 5; $j++) {
                $optAmount = $baseOpt + ($j <= $remainder ? 1 : 0);

                // 2.3 Cria cada uma das 5 opções (perguntas)
                $step->options()->create([
                    'name'   => "Pergunta {$index}.{$j}",
                    'amount' => $optAmount,
                    'order'  => $j,
                    'active' => true,
                ]);
            }
        }
    }
}

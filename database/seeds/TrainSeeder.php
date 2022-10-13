<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'azienda' => 'Trenitalia',
                'stazione_partenza' => 'Milano',
                'stazione_arrivo' => 'Lecce',
                'orario_partenza' => '11:00',
                'orario_arrivo' => '08:20',
                'codice_treno' => rand(10000, 99999),
                'numero_carrozze' => rand(4, 10),
                'in_orario' => false,
            ],
            [
                'azienda' => 'Italo',
                'stazione_partenza' => 'Venezia',
                'stazione_arrivo' => 'Roma',
                'orario_partenza' => '21:30',
                'orario_arrivo' => '6:20',
                'codice_treno' => rand(10000, 99999),
                'numero_carrozze' => rand(4, 10),
                'in_orario' => true,
                'cancellato' => false,
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_partenza' => 'Roma',
                'stazione_arrivo' => 'Milano',
                'orario_partenza' => '06:37:00',
                'orario_arrivo' => '12:45:00',
                'codice_treno' => rand(10000, 99999),
                'numero_carrozze' => rand(4, 10),
                'in_orario' => false,
                'cancellato' => true,
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_partenza' => 'Piacezza',
                'stazione_arrivo' => 'Napoli',
                'orario_partenza' => '09:00',
                'orario_arrivo' => '18:00',
                'codice_treno' => rand(10000, 99999),
                'numero_carrozze' => rand(4, 10),
                'in_orario' => true,
            ],
            [
                'azienda' => 'Italo',
                'stazione_partenza' => 'Bari',
                'stazione_arrivo' => 'Torino',
                'orario_partenza' => '14:20',
                'orario_arrivo' => '22:10',
                'codice_treno' => rand(10000, 99999),
                'numero_carrozze' => rand(4, 10),
                'in_orario' => false,
                'cancellato' => true,
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_partenza' => 'Firenze',
                'stazione_arrivo' => 'Cosenza',
                'orario_partenza' => '05:30',
                'orario_arrivo' => '13:50',
                'codice_treno' => rand(10000, 99999),
                'numero_carrozze' => rand(4, 10),
                'in_orario' => false,
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_partenza' => 'Teramo',
                'stazione_arrivo' => 'Genova',
                'orario_partenza' => '18:40',
                'orario_arrivo' => '10:50',
                'codice_treno' => rand(10000, 99999),
                'numero_carrozze' => rand(4, 10),
                'in_orario' => false,
                'cancellato' => true
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda']; 
            $newTrain->stazione_partenza = $train['stazione_partenza'];
            $newTrain->stazione_arrivo = $train['stazione_arrivo'];
            $newTrain->orario_partenza = $train['orario_partenza'];
            $newTrain->orario_arrivo = $train['orario_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            if (isset($train['cancellato']))
                $newTrain->cancellato = $train['cancellato'];

            $newTrain->save();
        }
    }
}

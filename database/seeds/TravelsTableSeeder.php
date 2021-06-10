<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){

            $new_travel = new Travel();

            $new_travel->luogo = 'IBIZA';
            $new_travel->durata = 20;
            $new_travel->numero_persone = 3;
            $new_travel->prezzo = 30000;
            $new_travel->data_inizio = '2021/08/11';
            $new_travel->data_fine = '2021/08/31';
            $new_travel->save();
        }
    }
}

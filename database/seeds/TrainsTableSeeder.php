<?php

use Illuminate\Database\Seeder;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Train();
        $data->Azienda = "Trenitalia";
        $data->Stazione_di_partenza = 'Milano';
        $data->Stazione_di_arrivo = 'Genova';
        $data->Orario_di_partenza = '2022-07-30 09:35:00';
        $data->Orario_di_arrivo = '2022-07-30 12:35:00';
        $data->Codice_Treno = '1245923';
        $data->Numero_Carrozze = '6';
        $data->In_orario = '1';
        $data->Cancellato = '0';

        $data->save();
    }
}

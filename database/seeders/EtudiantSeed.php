<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtudiantSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $etudiantData = [
            [
                'name'=>'marie',
                'surname'=>'ange alece',
                'level'=>'Master'
            ],
            [
                'name'=>'Kone',
                'surname'=>'ange lucie',
                'level'=>'Master'
            ],
            [
                'name'=>'Koffi',
                'surname'=>'chris luc',
                'level'=>'Master'
            ],


        ];
        DB::table('etudiants')->insert($etudiantData);
    }
}

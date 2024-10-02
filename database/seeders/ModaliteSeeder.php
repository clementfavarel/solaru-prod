<?php

namespace Database\Seeders;

use App\Models\Formation;
use App\Models\Modalite;
use Illuminate\Database\Seeder;

class ModaliteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $formation = Formation::where('titre', 'Concevoir et animer une formation avec une pédagogie active')->first();

        if ($formation) {
            // Insertion des modalités pour cette formation
            Modalite::create([
                'formation_id' => $formation->id,
                'modalite' => 'Présentiel',
                'duree_heures' => 35.00,
                'duree_jours' => 5.00,
                'details' => '35 heures en présentiel.',
            ]);

            Modalite::create([
                'formation_id' => $formation->id,
                'modalite' => 'Blended Learning',
                'duree_heures' => 35.00,
                'duree_jours' => 5.00,
                'details' => '21 heures en digital learning + 14 heures en présentiel.',
            ]);

            Modalite::create([
                'formation_id' => $formation->id,
                'modalite' => 'Full Digital',
                'duree_heures' => 35.00,
                'duree_jours' => 5.00,
                'details' => '35 heures en digital learning avec accompagnement individualisé.',
            ]);
        }
    }
}

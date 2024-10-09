<?php

namespace Database\Seeders;

use App\Models\Formation;
use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Formation::create([
            'img_src' => '/img/formation1.webp',
            'titre' => 'Concevoir et animer une formation avec une pédagogie active',
            'description' => 'Formation intensive de 5 jours, avec trois modalités disponibles.',
            'objectifs' => 'Préparer et définir une action de formation en pédagogie active, concevoir des supports attractifs, animer des séquences pédagogiques.',
            'contenu' => 'Ingénierie pédagogique, création de supports, animation, évaluation, gestion de groupe.',
            'prerequis' => '3 ans d\'expérience minimum, niveau Bac+2.',
            'niveau' => 'Bac+2',
            'profils_stagiaires' => 'Professionnels ayant un projet concret de formation.',
            'suivi_exploitation' => 'Feuilles de présence, QCM, mises en situation, certificats de réalisation.',
            'acces_handicap' => true,
        ]);
    }
}

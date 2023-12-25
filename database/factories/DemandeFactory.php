<?php

namespace Database\Factories;

use App\Models\Offre;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Demande>
 */
class DemandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::all()->random();
        $offre = Offre::all()->random();

        return [

            'date_demande' => fake()->dateTimeBetween('now'),
            'statut_demande' => fake()->randomElement(['en attente', 'payée', 'annulé']),

            'user_id' => $user->id,
            'offre_id' => $offre->id,
        ];
    }
}

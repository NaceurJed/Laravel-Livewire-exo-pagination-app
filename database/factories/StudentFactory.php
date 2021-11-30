<?php

namespace Database\Factories;

use App\Models\Student; // c'est à ajouter
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class; // c'est à ajouter
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->email,
            // 'age' => $this->faker->numberBetween(14, 25)
            //On va changer la fréquence d'adulte et de mineurs (on veut 75% adulte et le reste mineur):
            'age' => $this->faker->boolean(75) ? $this->faker->numberBetween(18, 25) : $this->faker->numberBetween(14, 17)
        ];
    }
}

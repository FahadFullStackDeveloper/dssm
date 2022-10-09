<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Fahad Amin',
            'email' => 'admin@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('asdasdasd'), // password
            'remember_token' => Str::random(10),
        ];
    }
}

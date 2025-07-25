<?php

namespace Database\Factories;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Listing::class;
    
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(), 
            'tags' => 'laravel,api,backend', 
            'company' => $this->faker->company(), 
            'location' => $this->faker->city(), 
            'email' => $this->faker->companyEmail(), 
            'website' => $this->faker->url(), 
            'description' => $this->faker->paragraph(5),
        ];
    }
}

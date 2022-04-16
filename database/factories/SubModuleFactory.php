<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Module;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubModule>
 */
class SubModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $modules = Module::all()->pluck('id')->toArray();
        // dd($modules);
        return [
            'module_id' => $this->faker->randomElement($modules),
            'name' => $this->faker->word(),
        ];
    }
}

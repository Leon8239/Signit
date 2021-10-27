<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Visitor;

class VisitorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Visitor::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'comments'=>$this->faker->realText(500)
        ];
    }
}

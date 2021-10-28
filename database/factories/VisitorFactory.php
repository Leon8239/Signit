<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Visitor;
use App\Models\User;

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
            'user_id' => User::factory(1)->create()->first(),
            'comments' => $this->faker->realText(500)
        ];
    }
}

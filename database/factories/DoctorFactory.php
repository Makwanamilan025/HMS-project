<?php
namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    protected $model = Doctor::class;

    public function definition()
    {
        return [
            'department_id' => Department::factory(),
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'image' => $this->faker->imageUrl(640, 480, 'people', true, 'Doctor'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}



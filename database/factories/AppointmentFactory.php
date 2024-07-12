<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    public function definition()
    {
        return [
            'department_id' => Department::factory(),
            'doctor_id' => Doctor::factory(),
            'name' => $this->faker->name,
            'mobile' => $this->faker->regexify('\d{8}'),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'address' => $this->faker->address,
            'blad_grup' => $this->faker->randomElement(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']),
            'bod' => $this->faker->date,
            'date_time' => $this->faker->dateTime,
            'is_conform' => $this->faker->boolean(0),
        ];
    }
    
}

<?php

namespace Database\Factories;


use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{

    protected $model = Persona::class;


    public function definition()
    {
        return [
            'tipopersona'=>$this->faker->randomElement(['Administrador','Empleado','Cliente']),
            'nombre'=>$this->faker->paragraph,
            'tipodocumento'=>$this->faker->randomElement(['CC','TI','PAS','CE']),
            'numerodocumento'=>$this->faker->paragraph,
            'direccion'=>$this->faker->paragraph,
            'telefono'=>$this->faker->paragraph,
            'email'=>$this->faker->email
        ];
    }
}

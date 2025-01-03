<?php

namespace Database\Factories;

use App\Models\Uyeler;
use Illuminate\Database\Eloquent\Factories\Factory;


class UyelerFactory extends Factory
{
    protected $model = Uyeler::class;
    public function definition():array
    {
        return [
            'ad' => $this->faker->name,
            'soyad' => $this->faker->lastName,
            'sehir' => $this->faker->city,
            'dogum_yili' => $this->faker->date,
            'mail' => $this->faker->email,
            'telefon' => $this->faker->randomNumber(7),
            'yetki' => $this->faker->randomElement(['Başkan', 'Üye','Görevli']),
        ];
    }

}

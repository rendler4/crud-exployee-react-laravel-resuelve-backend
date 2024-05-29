<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    
    protected $table = 'empleados';

    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'apellido',
        'razon_social',
        'cedula',
        'telefono',
        'pais',
        'ciudad',
    ];

    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellido' => 'required',
            'razon_social' => 'required',
            'cedula' => 'required',
            'telefono' => 'required',
            'pais' => 'required',
            'ciudad' => 'required',
        ];
    }

    public static function createMany(array $data)
    {
        foreach ($data as $attributes) {
            self::create($attributes);
        }
    }
}

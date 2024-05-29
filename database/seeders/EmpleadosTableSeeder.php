<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleado;
class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Empleado::createMany([
            [
                'nombre' => 'Juan',
                'apellido' => 'Pérez',
                'razon_social' => 'ABC Company',
                'cedula' => '1234567890',
                'telefono' => '+1234567890',
                'pais' => 'Estados Unidos',
                'ciudad' => 'Nueva York',
            ],
            [
                'nombre' => 'María',
                'apellido' => 'García',
                'razon_social' => 'XYZ Corporation',
                'cedula' => '0987654321',
                'telefono' => '+0987654321',
                'pais' => 'España',
                'ciudad' => 'Madrid',
            ],
            [
                'nombre' => 'Pedro',
                'apellido' => 'Rodríguez',
                'razon_social' => '123 Corporation',
                'cedula' => '1357924680',
                'telefono' => '+1357924680',
                'pais' => 'Francia',
                'ciudad' => 'París',
            ],
            [
                'nombre' => 'Luisa',
                'apellido' => 'López',
                'razon_social' => '456 Company',
                'cedula' => '2468013579',
                'telefono' => '+2468013579',
                'pais' => 'Italia',
                'ciudad' => 'Roma',
            ],
            [
                'nombre' => 'Carlos',
                'apellido' => 'Martínez',
                'razon_social' => 'DEF Inc.',
                'cedula' => '9876543210',
                'telefono' => '+9876543210',
                'pais' => 'Alemania',
                'ciudad' => 'Berlín',
            ],
            [
                'nombre' => 'Ana',
                'apellido' => 'Sánchez',
                'razon_social' => 'GHI Ltd.',
                'cedula' => '5432109876',
                'telefono' => '+5432109876',
                'pais' => 'Reino Unido',
                'ciudad' => 'Londres',
            ],
            [
                'nombre' => 'José',
                'apellido' => 'Hernández',
                'razon_social' => 'JKL Corp.',
                'cedula' => '1594872630',
                'telefono' => '+1594872630',
                'pais' => 'Australia',
                'ciudad' => 'Sídney',
            ],
            [
                'nombre' => 'Laura',
                'apellido' => 'Díaz',
                'razon_social' => 'MNO Enterprises',
                'cedula' => '7531902468',
                'telefono' => '+7531902468',
                'pais' => 'Canadá',
                'ciudad' => 'Toronto',
            ],
            [
                'nombre' => 'Eduardo',
                'apellido' => 'Gómez',
                'razon_social' => 'PQR Co.',
                'cedula' => '3698521470',
                'telefono' => '+3698521470',
                'pais' => 'Brasil',
                'ciudad' => 'São Paulo',
            ],
            [
                'nombre' => 'Isabel',
                'apellido' => 'Torres',
                'razon_social' => 'STU Ltd.',
                'cedula' => '0246813579',
                'telefono' => '+0246813579',
                'pais' => 'Japón',
                'ciudad' => 'Tokio',
            ],
            [
                'nombre' => 'Miguel',
                'apellido' => 'Ruiz',
                'razon_social' => 'VWX Corporation',
                'cedula' => '8642013579',
                'telefono' => '+8642013579',
                'pais' => 'India',
                'ciudad' => 'Mumbai',
            ],
            [
                'nombre' => 'Carmen',
                'apellido' => 'Gutiérrez',
                'razon_social' => 'YZA Inc.',
                'cedula' => '9753186420',
                'telefono' => '+9753186420',
                'pais' => 'China',
                'ciudad' => 'Pekín',
            ],
            [
                'nombre' => 'Diego',
                'apellido' => 'Fernández',
                'razon_social' => 'BCD Enterprises',
                'cedula' => '7305829614',
                'telefono' => '+7305829614',
                'pais' => 'Argentina',
                'ciudad' => 'Buenos Aires',
            ],
            [
                'nombre' => 'Sofía',
                'apellido' => 'González',
                'razon_social' => 'LMN Ltd.',
                'cedula' => '5849302716',
                'telefono' => '+5849302716',
                'pais' => 'México',
                'ciudad' => 'Ciudad de México',
            ],
            [
                'nombre' => 'Alejandro',
                'apellido' => 'Martín',
                'razon_social' => 'OPQ Company',
                'cedula' => '3095827461',
                'telefono' => '+3095827461',
                'pais' => 'Rusia',
                'ciudad' => 'Moscú',
            ],
            [
                'nombre' => 'Lucía',
                'apellido' => 'Hernández',
                'razon_social' => 'RST Enterprises',
                'cedula' => '6428103975',
                'telefono' => '+6428103975',
                'pais' => 'Corea del Sur',
                'ciudad' => 'Seúl',
            ],
            [
                'nombre' => 'Manuel',
                'apellido' => 'Díaz',
                'razon_social' => 'UVW Co.',
                'cedula' => '5384719206',
                'telefono' => '+5384719206',
                'pais' => 'Sudáfrica',
                'ciudad' => 'Ciudad del Cabo',
            ],
            [
                'nombre' => 'Valentina',
                'apellido' => 'López',
                'razon_social' => 'XYZ Ltd.',
                'cedula' => '1845209376',
                'telefono' => '+1845209376',
                'pais' => 'Egipto',
                'ciudad' => 'El Cairo',
            ],
            [
                'nombre' => 'Gabriel',
                'apellido' => 'Sánchez',
                'razon_social' => 'ABC Corporation',
                'cedula' => '9273501864',
                'telefono' => '+9273501864',
                'pais' => 'Suiza',
                'ciudad' => 'Zúrich',
            ],
            [
                'nombre' => 'Elena',
                'apellido' => 'Torres',
                'razon_social' => '123 Enterprises',
                'cedula' => '7294830152',
                'telefono' => '+7294830152',
                'pais' => 'Portugal',
                'ciudad' => 'Lisboa',
            ],
        ]);
    }
}

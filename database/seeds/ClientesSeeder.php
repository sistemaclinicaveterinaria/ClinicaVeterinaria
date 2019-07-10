<?php

use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Clientes::class)->create([
        'rut_cliente' => '200646297',
        'nom_cliente' => 'Bayron',
        'apePat_cliente' => 'Narvaez',
        'apeMat_cliente' => 'Uribe',
        'dire_cliente' => 'San Diego 1193',
        'ciudad_cliente' => 'Puerto Montt',
        'telefono_cliente' => '72452997',
        'email_cliente' => 'bayron@correo.cl',
        ]);   
        factory(App\Clientes::class,50)->create();
    }
}

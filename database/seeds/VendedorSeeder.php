<?php

use Illuminate\Database\Seeder;
use App\Vendedor;
use Illuminate\Support\Facades\DB;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('vendedors')->truncate();

            Vendedor::create([
                'nombre'=>'Ramon',
                'apellido'=>'Lopez',
                'ventas'=>20,
            ]);
        }
    }
}

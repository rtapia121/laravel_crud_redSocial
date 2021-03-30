<?php

use Illuminate\Database\Seeder;
use App\Comentarios;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i <= 10; $i++){
            Comentarios::create([
                'id_usuario' => $i,
                'comentario' => "agregando comentarios chidos con seeder".$i
            ]);
        }
    }
}

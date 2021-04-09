<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('foto');
            $table->timestamps();
        });

        $categories = [    
                ['name'=>'Ropa','foto'=>'ropa.png'],
                ['name'=>'Informática','foto'=>'informatica.png'],
                ['name'=>'Móviles','foto'=>'moviles.png'],
                ['name'=>'Deportes','foto'=>'deportes.png'],
                ['name'=>'Muebles','foto'=>'muebles.png'],
                ['name'=>'Cine y música','foto'=>'cinemusica.png'],
                ['name'=>'Libros','foto'=>'libros.png'],
                ['name'=>'Coches y motos','foto'=>'cochesmotos.png'],
                ['name'=>'Bicicletas','foto'=>'bicicletas.png'],
                ['name'=>'Coleccionismo','foto'=>'coleccionismo.png']
        ];

        foreach ($categories as $category) {
            $c = new Category();
            $c->name = $category['name'];
            $c->foto = $category['foto'];
            $c->save();
        }   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}

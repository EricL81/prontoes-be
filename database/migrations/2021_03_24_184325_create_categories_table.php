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
                ['name'=>'Ropa','foto'=>'ropa.jpg'],
                ['name'=>'Informática','foto'=>'informatica.jpg'],
                ['name'=>'Móviles','foto'=>'moviles.jpg'],
                ['name'=>'Deportes','foto'=>'deportes.jpg'],
                ['name'=>'Muebles','foto'=>'muebles.jpg'],
                ['name'=>'Cine y música','foto'=>'cineymusica.jpg'],
                ['name'=>'Libros','foto'=>'libros.jpg'],
                ['name'=>'Coches y motos','foto'=>'cochesymotos.jpg'],
                ['name'=>'Bicicletas','foto'=>'bicicletas.jpg'],
                ['name'=>'Coleccionismo','foto'=>'coleccionismo.jpg']
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

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
            $table->string('logo');
            $table->string('foto');
            $table->timestamps();
        });

        $categories = [    
                ['name'=>'Ropa','logo'=>'ropa.png','foto'=>'ropa.jpg'],
                ['name'=>'Informática','logo'=>'informatica.png','foto'=>'informatica.jpg'],
                ['name'=>'Móviles','logo'=>'moviles.png','foto'=>'moviles.jpg'],
                ['name'=>'Deportes','logo'=>'deportes.png','foto'=>'deportes.jpg'],
                ['name'=>'Muebles','logo'=>'muebles.png','foto'=>'muebles.jpg'],
                ['name'=>'Cine y música','logo'=>'cinemusica.png','foto'=>'cinemusica.jpg'],
                ['name'=>'Libros','logo'=>'libros.png','foto'=>'libros.jpg'],
                ['name'=>'Coches y motos','logo'=>'cochesmotos.png','foto'=>'cochesmotos.jpg'],
                ['name'=>'Bicicletas','logo'=>'bicicletas.png','foto'=>'bicicletas.jpg'],
                ['name'=>'Coleccionismo','logo'=>'coleccionismo.png','foto'=>'coleccionismo.jpg']
        ];

        foreach ($categories as $category) {
            $c = new Category();
            $c->name = $category['name'];
            $c->logo = $category['logo'];
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

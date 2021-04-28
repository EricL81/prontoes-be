<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnFotoInCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->renameColumn('foto', 'logo');
        });
        $categories = [    
            ['name'=>'Ropa','logo'=>'ropa.png'],
            ['name'=>'Informática','logo'=>'informatica.png'],
            ['name'=>'Móviles','logo'=>'moviles.png'],
            ['name'=>'Deportes','logo'=>'deportes.png'],
            ['name'=>'Muebles','logo'=>'muebles.png'],
            ['name'=>'Cine y música','logo'=>'cinemusica.png'],
            ['name'=>'Libros','logo'=>'libros.png'],
            ['name'=>'Coches y motos','logo'=>'cochesmotos.png'],
            ['name'=>'Bicicletas','logo'=>'bicicletas.png'],
            ['name'=>'Coleccionismo','logo'=>'coleccionismo.png']
    ];
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->renameColumn('logo', 'foto');

        });
    }
}

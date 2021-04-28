<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnFotoInCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('foto')->after('logo');
        });

        $categories = [    
            ['foto'=>'ropa.jpg'],
            ['foto'=>'informatica.jpg'],
            ['foto'=>'moviles.jpg'],
            ['foto'=>'deportes.jpg'],
            ['foto'=>'muebles.jpg'],
            ['foto'=>'cinemusica.jpg'],
            ['foto'=>'libros.jpg'],
            ['foto'=>'cochesmotos.jpg'],
            ['foto'=>'bicicletas.jpg'],
            ['foto'=>'coleccionismo.jpg'],
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
            $table->dropColumn('foto');
        });
    }
}

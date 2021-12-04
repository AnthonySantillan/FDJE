<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            //relacion con la tabla usuarios
            $table->foreignId('user_id')->constrained('users')
                ->comment('para obtener la informacion del usuario');
            $table->text('dia');
=======
            $table->date('dia');
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e

            $table->text('ayunas');
            $table->text('nph_lantus');
            $table->text('rapida_ultra_rap');
<<<<<<< HEAD

            $table->text('media_manana');
            $table->text('rapida_ultra_rap_m');

            $table->text('almuerzo');
            $table->text('rapida_ultra_rap_a');

            $table->text('media_tarde');
            $table->text('rapida_ultra_rap_t');

            $table->text('merienda');
            $table->text('rapida_ultra_rap_md');
=======
            $table->text('correcion');

            $table->text('media_mañana');
            $table->text('rapida_ultra_rap_m');
            $table->text('correcion_m');

            $table->text('almuerzo');
            $table->text('rapida_ultra_rap_a');
            $table->text('correcion_a');

            $table->text('media_tarde');
            $table->text('rapida_ultra_rap_t');
            $table->text('correcion_t');

            $table->text('merienda');
            $table->text('rapida_ultra_rap_md');
            $table->text('correcion_md');
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
            $table->text('nph_lantus_md');

            $table->text('dormir');
            $table->text('madrugada');
<<<<<<< HEAD
            $table->text('correcion_total');

=======
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papers');
    }
}

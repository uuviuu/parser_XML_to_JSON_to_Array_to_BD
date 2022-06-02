<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parsers', function (Blueprint $table) {
            // $table->id();

            $table->string('id')->nullable()->default('');
            $table->string('dealer')->nullable()->default('');
            $table->string('category')->nullable()->default('');
            $table->string('type')->nullable()->default('');
            $table->string('year')->nullable()->default('');
            $table->string('brand')->nullable()->default('');
            $table->string('model')->nullable()->default('');
            $table->string('generation')->nullable()->default('');
            $table->string('bodyconfiguration')->nullable()->default('');
            $table->string('modification')->nullable()->default('');
            $table->string('enginetype')->nullable()->default('');
            $table->string('enginevolume')->nullable()->default('');
            $table->string('enginepower')->nullable()->default('');
            $table->string('bodytype')->nullable()->default('');
            $table->string('bodydoorcount')->nullable()->default('');
            $table->string('bodycolor')->nullable()->default('');
            $table->string('bodycolormetallic')->nullable()->default('');
            $table->string('drivetype')->nullable()->default('');
            $table->string('gearboxtype')->nullable()->default('');
            $table->string('steeringwheel')->nullable()->default('');
            $table->string('mileage')->nullable()->default('');
            $table->string('mileageunit')->nullable()->default('');
            $table->string('price')->nullable()->default('');
            $table->string('specialoffer')->nullable()->default('');
            $table->string('availability')->nullable()->default('');
            $table->string('ptstype')->nullable()->default('');
            $table->string('photocount')->nullable()->default('');
            $table->string('ownerscount')->nullable()->default('');
            $table->string('vehiclecondition')->nullable()->default('');
            $table->string('acquisitionsource')->nullable()->default('');
            $table->string('acquisitiondate')->nullable()->default('');
            $table->string('complectation')->nullable()->default('');
            $table->string('gearboxgearcount')->nullable()->default('');
            $table->string('country')->nullable()->default('');
            $table->string('maximumpermittedmass')->nullable()->default('');

            $table->softDeletes();
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
        Schema::dropIfExists('parsers');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->string('id', 30); // NIC
	        $table->float('weight');
	        $table->float('height');
	        $table->enum('gender', ['male', 'female']);
	        $table->enum('blood_group', ['AB', 'O', 'A', 'B']);
	        $table->enum('blood_type', ['positive', 'negative']);
	        $table->string('first_name');
	        $table->string('last_name');
	        $table->string('telephone');
	        $table->string('password');
	        $table->primary('id');
	        $table->rememberToken();
	        $table->timestamps();
        });

        Schema::create('doners', function (Blueprint $table){
        	$table->string('doner_id', 30)->primary();
        	$table->longText('medical');
        	$table->foreign('doner_id')->references('id')->on('persons')->onDelete('cascade');
        	$table->timestamps();
        });

	    Schema::create('hospitals', function (Blueprint $table){
		    $table->string('id', 30)->primary();
		    $table->string('name');
		    $table->string('telephone');
		    $table->string('password');
		    $table->rememberToken();
		    $table->timestamps();
	    });

	    Schema::create('patients', function (Blueprint $table){
		    $table->increments('id');
		    $table->text('disease');
		    $table->string('patient_id', 30);
		    $table->string('hospital_id', 30);
		    $table->boolean('discharged');
		    $table->foreign('patient_id')->references('id')->on('persons')->onDelete('cascade');
		    $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
		    $table->timestamps();
	    });

	    Schema::create('person_addresses', function (Blueprint $table){
		    $table->increments('id');
	    	$table->string('person_id', 30);
	    	$table->string('street');
	    	$table->string('house_no');
	    	$table->string('town');
	    	$table->string('province');
		    $table->foreign('person_id')->references('id')->on('persons')->onDelete('cascade');
		    $table->timestamps();
	    });

	    Schema::create('hospital_addresses', function (Blueprint $table){
	    	$table->increments('id');
		    $table->string('hospital_id', 30);
		    $table->string('street');
		    $table->string('house_no');
		    $table->string('town');
		    $table->string('province');
		    $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
		    $table->timestamps();
	    });

	    Schema::create('hospital_blood_banks', function (Blueprint $table){
		    $table->string('hospital_id', 30);
		    $table->enum('blood_group', ['AB', 'O', 'A', 'B']);
		    $table->enum('blood_type', ['positive', 'negative']);
		    $table->float('amount');
		    $table->date('last_update');
		    $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
		    $table->timestamps();
	    });

	    Schema::create('blood_banks', function (Blueprint $table){
		    $table->string('id',30)->unique()->primary();
		    $table->string('name');
		    $table->string('telephone');
		    $table->string('password');
		    $table->rememberToken();
		    $table->timestamps();
	    });

	    Schema::create('blood_bank_addresses', function (Blueprint $table){
	    	$table->increments('id');
		    $table->string('bloodbank_id', 30);
		    $table->string('street');
		    $table->string('house_no');
		    $table->string('town');
		    $table->string('province');
		    $table->foreign('bloodbank_id')->references('id')->on('blood_banks')->onDelete('cascade');
		    $table->timestamps();
	    });

	    Schema::create('blood_bank_storage', function (Blueprint $table){
	    	$table->increments('id');
		    $table->string('bloodbank_id', 30);
		    $table->enum('blood_group', ['AB', 'O', 'A', 'B']);
		    $table->enum('blood_type', ['positive', 'negative']);
		    $table->float('capacity');
		    $table->float('amount');
		    $table->date('last_update');
		    $table->foreign('bloodbank_id')->references('id')->on('blood_banks')->onDelete('cascade');
		    $table->timestamps();
	    });

	    Schema::create('donations', function (Blueprint $table){
	    	$table->increments('id');
	    	$table->float('amount');
	    	$table->string('doner_id',30);
	    	$table->date('donation_date');
		    $table->foreign('doner_id')->references('id')->on('persons')->onDelete('cascade');
	    });

	    Schema::create('blood_transfer', function (Blueprint $table){
	    	$table->increments('id');
	    	$table->string('bloodbank_id', 30);
	    	$table->date('date');
		    $table->enum('blood_group', ['AB', 'O', 'A', 'B']);
		    $table->enum('blood_type', ['positive', 'negative']);
		    $table->float('amount');
		    $table->foreign('bloodbank_id')->references('id')->on('blood_banks')->onDelete('cascade');
		    $table->timestamps();
	    });

	    Schema::create('blood_quota_receives', function (Blueprint $table){
	    	$table->increments('id');
	    	$table->string('hospital_id',30);
	    	$table->string('bloodbank_id', 30);
		    $table->date('date');
		    $table->enum('blood_group', ['AB', 'O', 'A', 'B']);
		    $table->enum('blood_type', ['positive', 'negative']);
		    $table->float('amount');
		    $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
		    $table->timestamps();
	    });

	    Schema::create('blood_receives', function (Blueprint $table){
	    	$table->increments('id', 30);
		    $table->string('hospital_id', 30);
		    $table->string('patient_id', 30);
		    $table->float('amount');
		    $table->foreign('patient_id')->references('id')->on('persons')->onDelete('cascade');
		    $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
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
        Schema::dropIfExists('doners');
        Schema::dropIfExists('persons');
        Schema::dropIfExists('patients');
        Schema::dropIfExists('person_addresses');
        Schema::dropIfExists('hospitals');
        Schema::dropIfExists('hospital_addresses');
        Schema::dropIfExists('hospital_blood_banks');
        Schema::dropIfExists('blood_banks');
        Schema::dropIfExists('blood_bank_addresses');
        Schema::dropIfExists('blood_bank_storage');
        Schema::dropIfExists('donations');
        Schema::dropIfExists('blood_transfer');
        Schema::dropIfExists('blood_quota_receives');
        Schema::dropIfExists('blood_receives');
    }

}

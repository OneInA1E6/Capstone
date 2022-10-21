<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playing', function (Blueprint $table) {

            $table->id();   //default way to make an id
            //$table->bigIncrements('identity'); 	                // Incrementing ID using a "big integer" equivalent.
            $table->bigInteger('votes'); 	                // BIGINT equivalent to the table
            $table->binary('data'); 	                    // BLOB equivalent to the table
            $table->boolean('confirmed'); 	                // BOOLEAN equivalent to the table
            $table->char('name', 4); 	                    // CHAR equivalent with a length
            $table->date('want_to_be_created_at'); 	                // DATE equivalent to the table
            $table->dateTime('wasnt_actually_created_at'); 	            // DATETIME equivalent to the table
            $table->decimal('amount', 5, 2); 	            // DECIMAL equivalent with a precision and scale
            $table->double('column', 15, 8); 	            // DOUBLE equivalent with precision, 15 digits in total and 8 after the decimal point
            $table->enum('choices', array('foo', 'bar')); 	// ENUM equivalent to the table
            $table->float('another_amount'); 	                    // FLOAT equivalent to the table
            //$table->increments('identification'); 	                    // Incrementing ID to the table (primary key).
            $table->integer('votes_but_worse'); 	                    // INTEGER equivalent to the table
            $table->longText('description'); 	            // LONGTEXT equivalent to the table
            $table->mediumInteger('numbers'); 	            // MEDIUMINT equivalent to the table
            $table->mediumText('description_but_medium'); 	            // MEDIUMTEXT equivalent to the table
            $table->morphs('taggable'); 	                // Adds INTEGER taggable_id and STRING taggable_type
            $table->nullableTimestamps(); 	                // Same as timestamps(), except allows NULLs
            $table->smallInteger('votes_but_never'); 	                // SMALLINT equivalent to the table
            $table->tinyInteger('numb'); 	            // TINYINT equivalent to the table
            $table->softDeletes(); 	                        // Adds deleted_at column for soft deletes
            $table->string('email'); 	                    // VARCHAR equivalent column
            $table->string('name_of_my_first_child', 100); 	                // VARCHAR equivalent with a length
            $table->text('description_but_in_text'); 	                // TEXT equivalent to the table
            $table->time('sunrise'); 	                    // TIME equivalent to the table
            //$table->timestamp('added_on'); 	                // TIMESTAMP equivalent to the table
            //$table->timestamps(); 	                        // Adds created_at and updated_at columns
            $table->rememberToken(); 	                    // Adds remember_token as VARCHAR(100) NULL

            // Other useful modifiers
            //->nullable() 	Designate that the column allows NULL values
            //->default($value) 	Declare a default value for a column
            //->unsigned() 	Set INTEGER to UNSIGNED
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playing');
    }
};

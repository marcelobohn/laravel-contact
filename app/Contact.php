<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function up() 
    { 
        Schema::create('contacts', function (Blueprint $table) { 
            $table->increments('id'); 
            $table->string('name'); 
            $table->string('contact'); 
            $table->string('email'); 
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
        Schema::dropIfExists('contacts'); 
    } 
}

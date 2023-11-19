<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'text'];
    

    public function up(){
    Schema::create('articles', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->timestamps();
        $table->unsignedInteger('user_id');
        $table->string('title');
        $table->string('text');
    });
}
}

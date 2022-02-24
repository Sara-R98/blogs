<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title') ;
            $table->string('slug') ;
            //دسته بندی رو اینجا نمیذاریم چون رابطه از نوع چند به چنده 
            // یعنی که یک پست میتونه چندین دسته بندی داشته باشه ویک دسته بندی میتونه متعلق به چندین پست باشه
            //برای همین نیاز به یک pivot table داریم  
            $table->string('banner') ;
            $table->longText('content');
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
        Schema::dropIfExists('posts');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Init extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // @link http://help.baidu.com/question?prod_en=zhidao&class=611&id=1001210
        Schema::create('asks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question_id',32)->unique();
            $table->string('title');
            $table->text('content');
            $table->string('pictures');
            $table->integer('cid')->unsigned()->default(0);
            $table->string('cname');
            $table->tinyInteger('anonymous');
            $table->string('hit_keywords');
            $table->string('hit_cids');
            $table->string('lbs_province');
            $table->string('lbs_city');
            $table->string('lbs_district');
            $table->string('lbs_street');
            $table->integer('create_time')->unsigned();
            $table->integer('appkey')->unsigned();
            $table->string('appname');
            $table->string('uid');
            $table->string('uname');
            $table->timestamps();
            $table->softDeletes();
        });
        //@link http://help.baidu.com/question?prod_en=zhidao&class=611&id=1001213
        Schema::create('appends', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question_id',32)->unique();
            $table->integer('reply_id')->unsigned()->default(0);
            $table->integer('reask_id')->unsigned()->default(0);
            $table->text('content');
            $table->string('pictures');
            $table->integer('create_time')->unsigned();
            $table->integer('appkey')->unsigned();
            $table->string('appname');
            $table->string('uid');
            $table->string('uname');
            $table->timestamps();
            $table->softDeletes();
        });
        //@link http://help.baidu.com/question?prod_en=zhidao&class=611&id=1001212
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question_id',32)->unique();
            $table->integer('reply_id')->unsigned()->default(0);
            $table->integer('evaluate_type')->unsigned()->default(0);
            $table->integer('create_time')->unsigned();
            $table->integer('appkey')->unsigned();
            $table->string('appname');
            $table->string('uid');
            $table->string('uname');
            $table->timestamps();
            $table->softDeletes();
        });
        //@link http://help.baidu.com/question?prod_en=zhidao&class=611&id=1001211
        Schema::create('deletes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question_id',32)->unique();
            $table->tinyInteger('reason')->unsigned();
            $table->integer('create_time')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
        //@link http://help.baidu.com/question?prod_en=zhidao&class=611&id=1001644
        Schema::create('qualities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question_id',32)->unique();
            $table->integer('reply_id')->unsigned()->default(0);
            $table->tinyInteger('high_type');
            $table->string('refuse_reason');
            $table->timestamps();
            $table->softDeletes();
        });

        //用户提交的回答
        Schema::create('replies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question_id',32);
            $table->integer('reply_id')->unsigned()->default(0);
            $table->string('title');
            $table->text('content');
            $table->integer('user_id')->unsigned()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('asks');
        Schema::drop('appends');
        Schema::drop('comments');
        Schema::drop('deletes');
        Schema::drop('qualities');
        Schema::drop('replies');
    }
}

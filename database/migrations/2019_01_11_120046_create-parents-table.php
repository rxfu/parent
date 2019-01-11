<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('parents', function (Blueprint $table) {
			$table->increments('id');
			$table->string('xh', 15)->comment('学号');
			$table->string('xm', 40)->comment('学生姓名');
			$table->string('zjlx', 24)->comment('学生身份证件类型');
			$table->string('zjhm', 18)->comment('学生身份证件号码');
			$table->string('sfzz', 2)->comment('学生是否在职');
			$table->string('rxrq', 8)->comment('入学日期');
			$table->string('xjzt', 24)->comment('学籍状态');
			$table->string('fmxm1', 40)->comment('父母或监护人1姓名');
			$table->string('fmzjlx1', 24)->comment('父母或监护人1身份证件类型');
			$table->string('fmzjhm1', 18)->comment('父母或监护人1身份证件号码');
			$table->string('fmxm2', 40)->comment('父母或监护人2姓名');
			$table->string('fmzjlx2', 24)->comment('父母或监护人2身份证件类型');
			$table->string('fmzjhm2', 18)->comment('父母或监护人2身份证件号码');
			$table->string('mm', 128)->comment('学生密码');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('parents');
	}
}

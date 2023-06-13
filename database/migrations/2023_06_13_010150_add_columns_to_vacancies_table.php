<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::table('vacancies', function (Blueprint $table) {
			$table->string('title');
			$table->string('company');
			$table->date('apply_deadline');
			$table->text('job_description');
			$table->string('image');
			$table->integer('published')->default(1);
			$table->foreignId('salary_id')->constrained()->onDelete('cascade');
			$table->foreignId('category_id')->constrained()->onDelete('cascade');
			$table->foreignId('user_id')->constrained()->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::table('vacancies', function (Blueprint $table) {
			$table->dropColumn('title');
			$table->dropColumn('company');
			$table->dropColumn('apply_deadline');
			$table->dropColumn('job_description');
			$table->dropColumn('image');
			$table->dropColumn('published');
			$table->dropForeign(['salary_id']);
			$table->dropColumn('salary_id');
			$table->dropForeign(['category_id']);
			$table->dropColumn('category_id');
			$table->dropForeign(['user_id']);
			$table->dropColumn('user_id');
		});
	}
};

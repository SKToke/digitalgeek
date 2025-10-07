<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('c_course_type')->nullable()->after('course_type'); // recorded, session, live
            $table->string('c_class_starts')->nullable()->after('c_course_type');
            $table->string('c_class_time')->nullable()->after('c_class_starts');
            $table->integer('c_number_of_class')->nullable()->after('c_class_time');
            $table->integer('c_batch_number')->nullable()->after('c_number_of_class');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn([
                'c_course_type',
                'c_class_starts',
                'c_class_time',
                'c_number_of_class',
                'c_batch_number',
            ]);
        });
    }
};

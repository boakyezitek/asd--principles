<?php

namespace Database\Seeders;

use DB;
use Schema;
use Illuminate\Database\Seeder;

abstract class BaseSeeder extends Seeder
{
    protected const TABLE = '';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        static::down();
        static::up();
    }

    public static function up(): void
    {
        static::down();

        // Do Something after clean slate
    }

    public static function down(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::transaction(function () {
            DB::table(static::TABLE)->truncate();
        });

        Schema::enableForeignKeyConstraints();
    }
}

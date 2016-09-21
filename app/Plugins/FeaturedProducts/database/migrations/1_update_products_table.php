<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class UpdateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('products') && !Schema::hasColumn('products', 'featured')) {

            Schema::table('products', function ($table) {
                $table->boolean('featured')->default(false)->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasColumn('products', 'featured')) {

            Schema::table('products', function ($table) {
                $table->dropColumn(['featured']);
            });

        }
    }
}

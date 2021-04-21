<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDgoApisecurityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dgo_apisecurity', function (Blueprint $table) {
            $table->bigIncrements('id');
			// This is from .env; e.g. 
			// APP_KEY=base64:hclAQJ83KxowJ6t/kCyf4JBPjR6qSpuWzQAQgaq1+jQ=
			// and we run md5($app_key) to get a 32 char MD5 hash
			// because base64 has an annoying backslash!
			$table->string('api_key');
			// This is from company.systemid
			$table->string('company_systemid');
            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dgo_apisecurity');
    }
}

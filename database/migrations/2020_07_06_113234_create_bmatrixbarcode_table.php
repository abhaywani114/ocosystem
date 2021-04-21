<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBmatrixbarcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* Table to store all the barcode combinations for a single bmatrix.
		 * These barcodes will be applied to all the products within a
		 * specified subcategory. e.g.
		 *	subcategory = dress
		 *	color  = white, red
		 *	attrib = size;     attribitem = S,M,L
		 *	attrib = material; attribitem = nylon,cotton,tetron
		 * Total combination: 2(color) x 3(size) x 3(material) = 18 barcodes */
        Schema::create('bmatrixbarcode', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to bmatrix.id
			$table->integer('bmatrix_id')->unsigned();
			/* This is a partial barcode, consisting of the 4 FKs below:
				$bmatrix->id.
				$color->id.
				$bmatrixattrib->id.
				$bmatrixattribitem->id */
			$table->string('pbarcode');
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
        Schema::dropIfExists('bmatrixbarcode');
    }
}

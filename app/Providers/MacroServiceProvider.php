<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PhpParser\Node\Expr\Array_;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public static function deleteButton($anArray)
    {

        return
       ' <p data-field="deleted" class="text-danger bg-redcrab1 '.$anArray['class'].' ">
            <i class="fas fa-times text-white bg-red-redcrab2"></i>
            <span style = "display:none;"><span>
        </p>';
    }

    public static function lobster($anArray){

        $bgColor = $anArray['bgColor'] ?? 'white';

        $message = $anArray['message'] ?? 'Please click on OK button proceed!';

        

    }

    public static  function abalone( $anArray=[])
    {
        $class = $anArray['class'] ?? '';
        $id = $anArray['id'] ?? '';
        
        return '
        

        <!-- The Modal -->
        <div class="modal abalone '.$class.'" id="'.$id.'">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Modal body..
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
        </div>
        ';
    }
}

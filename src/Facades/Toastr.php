<?php 

namespace Sargilla\Toastr\Facades;

use Illuminate\Support\Facades\Facade;

class Toastr extends Facade {

    public static function getFacadeAccessor()
    {
        return 'Sargilla\Toastr\Toastr';
    }

} 
<?php
    namespace PayamResan\Package\Laravel\Facade;

    use Illuminate\Support\Facades\Facade;

    class PayamResanFacade extends Facade
    {
        protected static function getFacadeAccessor()
        {
            return 'PayamResan';
        }
    }
?>

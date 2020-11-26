<?php namespace Khachik\Laravel7Salesforce;

use Illuminate\Support\Facades\Facade;

/**
 * Class SalesforceFacade
 * @package  Khachik\Laravel7Salesforce
 *
 * Facade for the Salesforce service
 */
class SalesforceFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'salesforce';
    }
}

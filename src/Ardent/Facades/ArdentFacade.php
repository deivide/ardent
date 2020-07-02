<?php namespace LaravelArdent\Ardent\Facades;

use Illuminate\Support\Facades\Facade;

class ArdentFacade extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'ardent'; }

}

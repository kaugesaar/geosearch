<?php namespace Geosearch\Providers;

use Illuminate\Routing\FilterServiceProvider as ServiceProvider;

class FilterServiceProvider extends ServiceProvider {

	/**
	 * The filters that should run before all requests.
	 *
	 * @var array
	 */
	protected $before = [
		'Geosearch\Http\Filters\MaintenanceFilter',
	];

	/**
	 * The filters that should run after all requests.
	 *
	 * @var array
	 */
	protected $after = [
		//
	];

	/**
	 * All available route filters.
	 *
	 * @var array
	 */
	protected $filters = [
		'auth' => 'Geosearch\Http\Filters\AuthFilter',
		'auth.basic' => 'Geosearch\Http\Filters\BasicAuthFilter',
		'csrf' => 'Geosearch\Http\Filters\CsrfFilter',
		'guest' => 'Geosearch\Http\Filters\GuestFilter',
	];

}
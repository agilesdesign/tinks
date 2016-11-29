<?php

namespace Tinks\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Tinks\Http\Middleware\SetTurbolinksHeader;

class TinksServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		// https://laracasts.com/discuss/channels/general-discussion/register-middleware-via-service-provider?page=3
		Route::prependMiddlewareToGroup('web', SetTurbolinksHeader::class);
	}
}

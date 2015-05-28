<?php namespace RobBrazier\Clicky\Components;

use Cms\Classes\ComponentBase;
use RobBrazier\Clicky\Models\Settings;

class Clicky extends ComponentBase
{
	public function componentDetails()
	{
		return [
			'name' => 'Clicky Analytics Tracker',
			'description' => 'Places a Clicky tracking code.'
		];
	}

	public function siteId()
	{
        return Settings::get('site_id');
	}

	public function trackingType()
	{
		return Settings::get('tracking_type');
	}
}
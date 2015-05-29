<?php namespace RobBrazier\Clicky;

class Plugin extends \System\Classes\PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Clicky Analytics',
            'description' => 'Provides a Clicky tracking script. Inspired by RainLab\GoogleAnalytics.',
            'author'      => 'Rob Brazier',
            'icon'        => 'icon-bar-chart-o'
        ];
    }

    public function registerComponents()
    {
        return [
            'RobBrazier\Clicky\Components\Clicky' => 'clicky'
        ];
    }

    public function registerSettings()
    {
        return [
            'config' => [
                'label' => 'Clicky Analytics',
                'icon' => 'icon-bar-chart-o',
                'description' => 'Configure Clicky tracking options.',
                'class' => 'RobBrazier\Clicky\Models\Settings',
                'order' => 600
            ]
        ];
    }

}

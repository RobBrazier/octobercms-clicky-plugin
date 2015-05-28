<?php namespace RobBrazier\Clicky\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'robbrazier_clicky_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
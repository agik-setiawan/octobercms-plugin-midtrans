<?php namespace JK\Midtrans\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'midtrans_setting';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
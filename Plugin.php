<?php namespace Jk\Midtrans;

use Backend;
use System\Classes\PluginBase;
use JK\Midtrans\Models\Settings;

/**
 * Midtrans Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Midtrans',
            'description' => 'No description provided yet...',
            'author'      => 'Jk',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
       
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Jk\Midtrans\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'jk.midtrans.some_permission' => [
                'tab' => 'Midtrans',
                'label' => 'Some permission'
            ],
        ];
    }

     /**
     * register settings
     *
     * @return void
     */
    public function registerSettings()
    {
        return [
            'midtarns_settings' => [
                'label' => 'Midtrans Settings',
                'description' => 'Setup Client Key, Server Key in Midtrans',
                'icon' => 'icon-cube',
                'category' => 'Midtrans',
                'order' => 500,
                'class' => 'JK\Midtrans\Models\Settings',
            ]
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'midtrans' => [
                'label'       => 'Midtrans',
                'url'         => Backend::url('jk/midtrans/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['jk.midtrans.*'],
                'order'       => 500,
            ],
        ];
    }

     /**
     * global function or filter
     *
     * @return void
     */
    public function registerMarkupTags(){
        return[
            'functions' =>[
                'midtrans_server_key'=>function(){
                    return Settings::get('server_key');
                },
                'midtrans_client_key'=>function(){
                    return Settings::get('client_key');
                },
                'midtrans_merchant_id'=>function(){
                    return Settings::get('merchant_id');
                },
            ],
        ];
    }

}

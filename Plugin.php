<?php namespace Pensoft\CitationTool;

use Backend;
use System\Classes\PluginBase;

/**
 * CitationTool Plugin Information File
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
            'name'        => 'CitationTool',
            'description' => 'No description provided yet...',
            'author'      => 'Pensoft',
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
     * @return void
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
        return [
            'Pensoft\CitationTool\Components\Form' => 'AddCitationForm',
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
            'pensoft.citationtool.some_permission' => [
                'tab' => 'CitationTool',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'citationtool' => [
                'label'       => 'Citation Tool',
                'url'         => Backend::url('pensoft/citationtool/citations'),
                'icon'        => 'icon-align-justify',
                'permissions' => ['pensoft.citationtool.*'],
                'order'       => 500,
            ],
        ];
    }
}

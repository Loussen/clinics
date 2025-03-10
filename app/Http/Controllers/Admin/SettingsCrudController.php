<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SettingsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SettingsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SettingsCrudController extends CrudController
{
//    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
//    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
//    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
//    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Settings::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/settings');
        CRUD::setEntityNameStrings('settings', 'settings');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(SettingsRequest::class);
        CRUD::field('address')->type('textarea');
        CRUD::field('phone')->wrapper(['class' => 'form-group col-md-6']);
        CRUD::field('email')->wrapper(['class' => 'form-group col-md-6']);
        CRUD::field('map')->type('textarea');
        $subfieldsSocialProfileInfo[] = [
            'name'        => 'social_network',
            'type'        => 'select2_from_array',
            'options'     => ['facebook' => 'Facebook', 'instagram' => 'Instagram', 'youtube' => 'YouTube'],
            'allows_null' => false,
            'default'     => 'one',
            'wrapper'     => [
                'class' => 'form-group col-md-4'
            ],
        ];

        $subfieldsSocialProfileInfo[] = [
            'name'        => 'link',
            'type'        => 'url',
            'wrapper'     => [
                'class' => 'form-group col-md-8'
            ],
        ];

        CRUD::addField([
            'name'          => 'social_profiles',
            'type'          => "repeatable",
            'subfields'     => $subfieldsSocialProfileInfo,
            'max_rows'      => 10,
            'min_rows'      => 1,
            'init_rows'     => 1,
        ]);

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}

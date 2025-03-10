<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DoctorsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class DoctorsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DoctorsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Doctors::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/doctors');
        CRUD::setEntityNameStrings('doctors', 'doctors');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('full_name')->wrapper(['class' => 'form-group col-md-6']);
        CRUD::column('speciality')->wrapper(['class' => 'form-group col-md-6']);
        CRUD::addColumn([
            'name'        => 'hospital',
            'type'        => 'select2',
            'allows_null' => true,
            'attribute'   => 'name',
            'wrapper'     => ['class' => 'form-group col-md-6']
        ]);
        CRUD::addColumn([
            'name' => 'image',
            'type' => 'image',
            'upload' => true,
            'crop' => true,
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

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
        CRUD::setValidation(DoctorsRequest::class);
        CRUD::field('full_name')->wrapper(['class' => 'form-group col-md-6']);
        CRUD::field('speciality')->wrapper(['class' => 'form-group col-md-6']);
        CRUD::addField([
            'name'        => 'hospital',
            'type'        => 'select2',
            'allows_null' => true,
            'attribute'   => 'name',
            'wrapper'     => ['class' => 'form-group col-md-6']
        ]);
        CRUD::addField([
            'name' => 'image',
            'type' => 'image',
            'upload' => true,
            'crop' => true,
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);
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
        CRUD::field('description')->type('tinymce');

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

    protected function autoSetupShowOperation()
    {
        CRUD::column('full_name');
        CRUD::column('speciality');
        CRUD::addColumn([
            'name'        => 'hospital',
            'type'        => 'select2',
            'allows_null' => true,
            'attribute'   => 'name',
        ]);
        CRUD::addColumn([
            'name' => 'image',
            'type' => 'image',
            'upload' => true,
            'crop' => true,
        ]);
        $subfieldsSocialProfileInfo[] = [
            'name'        => 'social_network',
            'type'        => 'select2_from_array',
            'options'     => ['facebook' => 'Facebook', 'instagram' => 'Instagram', 'youtube' => 'YouTube'],
            'allows_null' => false,
            'default'     => 'one',
        ];

        $subfieldsSocialProfileInfo[] = [
            'name'        => 'link',
            'type'        => 'url',
        ];

        CRUD::addColumn([
            'name'          => 'social_profiles',
            'type'          => "repeatable",
            'subfields'     => $subfieldsSocialProfileInfo,
            'max_rows'      => 10,
            'min_rows'      => 1,
            'init_rows'     => 1,
        ]);
        CRUD::column('description')->type('tinymce');
    }
}

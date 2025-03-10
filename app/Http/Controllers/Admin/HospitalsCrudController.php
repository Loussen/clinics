<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\HospitalsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\Pro\Http\Controllers\Operations\DropzoneOperation;

/**
 * Class HospitalsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class HospitalsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    use DropzoneOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Hospitals::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/hospitals');
        CRUD::setEntityNameStrings('hospitals', 'hospitals');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name');
        CRUD::column('short_description');
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
        CRUD::setValidation(HospitalsRequest::class);
        CRUD::field('name')->wrapper(['class' => 'form-group col-md-4']);
        CRUD::field('short_description')->type('textarea')->wrapper(['class' => 'form-group col-md-8']);
        CRUD::field('description')->type('tinymce');
        CRUD::addField([
            'name' => 'image',
            'type' => 'image',
            'upload' => true,
            'crop' => true,
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);
        CRUD::addField([
            'name' => 'gallery',
            'type' => 'dropzone',
            'disk' => 'hospitals_gallery',
            'withFiles'    => true,
        ]);
        CRUD::field('map')->type('textarea');


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
        CRUD::setValidation(HospitalsRequest::class);
        CRUD::column('name')->wrapper(['class' => 'form-group col-md-4']);
        CRUD::column('short_description')->type('textarea')->wrapper(['class' => 'form-group col-md-8']);
        CRUD::column('description')->type('tinymce');
        CRUD::addColumn([
            'name' => 'image',
            'type' => 'image',
            'upload' => true,
            'crop' => true,
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);
        CRUD::addColumn([
            'name' => 'gallery',
            'type' => 'dropzone',
            'disk' => 'hospitals_gallery',
            'withFiles'    => true,
        ]);
        CRUD::column('map')->type('textarea');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TestimonialsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TestimonialsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TestimonialsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Testimonials::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/testimonials');
        CRUD::setEntityNameStrings('testimonials', 'testimonials');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('person_name');
        CRUD::column('person_position');
        CRUD::addColumn([
            'name' => 'person_image',
            'type' => 'image',
            'upload' => true,
            'crop' => true,
        ]);
        CRUD::column('description');

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
        CRUD::setValidation(TestimonialsRequest::class);
        CRUD::field('person_name')->wrapper(['class' => 'form-group col-md-6']);
        CRUD::field('person_position')->wrapper(['class' => 'form-group col-md-6']);
        CRUD::addField([
            'name' => 'person_image',
            'type' => 'image',
            'prefix' => 'storage/',
            'upload' => true,
            'crop' => true,
            'wrapper' => ['class' => 'form-group col-md-6'],
            'hint' => '90x90'
        ]);
        CRUD::field('description')->type('textarea')->wrapper(['class' => 'form-group col-md-6']);

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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FeaturesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FeaturesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FeaturesCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Features::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/features');
        CRUD::setEntityNameStrings('features', 'features');
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
        CRUD::setValidation(FeaturesRequest::class);
        CRUD::field('title');
        CRUD::field('description')->type('textarea');
        CRUD::addField([
            'name' => 'image',
            'type' => 'image',
            'upload' => true,
            'crop' => true,
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);
        $subfieldsFeatures[] = [
            'name'        => 'title',
            'wrapper'     => [
                'class' => 'form-group col-md-4'
            ],
        ];
        $subfieldsFeatures[] = [
            'name'        => 'description',
            'type'        => 'textarea',
            'wrapper'     => [
                'class' => 'form-group col-md-4'
            ],
        ];
        $subfieldsFeatures[] = [
            'name'        => 'icon',
            'type'        => 'icon_picker',
            'iconset'     => 'fontawesome',
            'wrapper'     => [
                'class' => 'form-group col-md-4'
            ],
        ];
        CRUD::addField([
            'name'          => 'features',
            'type'          => "repeatable",
            'subfields'     => $subfieldsFeatures,
            'max_rows'      => 4,
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LocationRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class LocationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class LocationCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Location::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/location');
        CRUD::setEntityNameStrings('location', 'locations');
    }

    function getFieldsData()
    {
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Miniature',
            'type' => 'image',
            'prefix' => 'storage/',
            'height' => '80px',
            'width' => 'auto',
        ]);
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->setValidation([
            'name' => 'required|min:2',
        ]);
        CRUD::column('name')->label('Nom');
        $this->getFieldsData();
        CRUD::column('description');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
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
        CRUD::setValidation(LocationRequest::class);
        $this->crud->setValidation([
            'name' => 'required|min:2|max:255',
        ]);
        CRUD::field('user_id')->label('Utilisateur');
        CRUD::field('name')->label('Nom');
        CRUD::addField([
            // Photo
            'name' => 'image',
            'key' => 'image_up',
            'label' => 'Images',
            'type' => 'upload_multiple',
            'prefix' => 'storage/',
            'upload' => true,
            'temporary' => 10,
        ]);
        CRUD::field('description')->type('textarea');
        $this->crud->addField([
            // select_from_array
            'name' => 'category',
            'label' => 'Catégorie',
            'type' => 'select_from_array',
            'options' => [
                'Vente' => 'Vente',
                'Location' => 'Location',
            ],
            'allows_null' => false,
            'default' => 'Autre',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);
        $this->crud->addField([
            // radio
            'name' => 'status', // the name of the db column
            'label' => 'Activé', // the input label
            'type' => 'radio',
            'options' => [
                // the key will be stored in the db, the value will be shown as label;
                1 => 'Oui',
                0 => 'Non',
            ],
            // optional
            'default' => '0',
            'inline' => true, // show the radios all on the same line?
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
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

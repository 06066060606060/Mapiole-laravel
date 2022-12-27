<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BlogsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class BlogsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BlogsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Blogs::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/blogs');
        CRUD::setEntityNameStrings('blogs', 'blogs');
    }


    function getFieldsData()
    {
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Image',
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
        CRUD::column('titre');
        CRUD::column('contenu');
        $this->getFieldsData();

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
        CRUD::setValidation(BlogsRequest::class);
        $this->crud->setValidation([
            'titre' => 'required|min:2|max:255',
        ]);
        CRUD::field('titre')->type('text')->label('Titre');
        $this->crud->addField([
            'name' => 'contenu',
            'label' => 'Contenu',
            'type' => 'textarea',
            'placeholder' => 'Your text text here',
        ]);
        CRUD::addField([
            // Photo
            'name' => 'image',
            'key' => 'image_up',
            'label' => 'Images',
            'type' => 'upload_multiple',
            'prefix' => 'storage/',
            'upload' => true,
            'temporary' => 10,
              'wrapper'   => [ 
                 'class'      => 'form-group w-52 pl-3'
              ], // change the HTML attributes for the field wrapper - mostly for resizing fields 
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

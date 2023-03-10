<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PagesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PagesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PagesCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
   // use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    //use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Pages::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/pages');
        CRUD::setEntityNameStrings('pages', 'pages');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->orderBy('id', 'asc');
        $this->crud->addColumn([
            'name'    => 'label',
            'label'   => 'Pages',
            'type'    => 'text',
            'wrapper' => [
                'element' => 'span',
                'class' => function ($crud, $column, $entry, $related_key) {
                            return 'ml-4 badge badge-warning';
                        }
                  ]
            ]);
        CRUD::column('title')->type('text')->label('Titre');
        CRUD::column('content')->label('Contenu');
        //if id = 1 then show a button




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

        CRUD::setValidation(PagesRequest::class);
     //   CRUD::field('label')->type('text')->label('label');
        CRUD::field('title')->type('text')->label('Titre');
        $this->crud->addField([
            'name' => 'content',
            'label' => 'Contenu',
            'type' => 'summernote',
            'placeholder' => 'Your text text here',
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
     
        CRUD::setValidation(PagesRequest::class);
        
      //  CRUD::field('label')->type('text')->label('label');

        CRUD::field('title')->type('text')->label('Titre');
        $this->crud->addField([
            'name' => 'content',
            'label' => 'Contenu',
            'type' => 'summernote',
            'placeholder' => 'Your text text here',
        ]);
    }
}

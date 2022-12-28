<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VenteRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class VenteCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class VenteCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
  //  use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Vente::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/vente');
        CRUD::setEntityNameStrings('vente', 'ventes');
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
        CRUD::column('name')->label('Titre');
        $this->getFieldsData();
        CRUD::column('description');
        $this->crud->addColumn([
            'name'    => 'status',
            'label'   => 'Activé',
            'type'    => 'text',
            'wrapper' => [
                'element' => 'span',
                'class' => function ($crud, $column, $entry, $related_key) {
                    if ($entry->active == 'Oui') {
                            return 'ml-4 badge badge-primary';
                        } else {
                            return 'ml-4 badge badge-danger';
                        }
                },  ]
            ]);
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
        CRUD::setValidation(VenteRequest::class);
        CRUD::field('user_id')->label('Utilisateur');

        CRUD::addField([
            'name' => 'user_id',
            'label' => 'Utilisateur',
            'attributes' => [
                'class'       => 'form-control ',
              ], // change the HTML attributes of your input
              'wrapper'   => [ 
                 'class'      => 'form-group col-xs-2 pl-3 pt-2'
              ], // change the HTML attributes for the field wrapper - mostly for resizing fields 
        ]);
        CRUD::addField([
            'name' => 'name',
            'label' => 'titre de l\'annonce',
            'attributes' => [
                'class'       => 'form-control ',
              ], // change the HTML attributes of your input
              'wrapper'   => [ 
                 'class'      => 'form-group col-xs-3 pl-3 pt-2'
              ], // change the HTML attributes for the field wrapper - mostly for resizing fields 
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
        CRUD::field('description')->type('textarea');

        CRUD::addField(['name' => 'prix', 'type' => 'number', 'label' => 'Prix / mois', 'wrapper' => [ 'class' => 'form-group col-md pl-3'],]);
        CRUD::addField(['name' => 'surface', 'type' => 'number', 'label' => 'Surface m3', 'wrapper' => [ 'class' => 'form-group col-md pl-3'],]);
        CRUD::addField(['name' => 'nb_piece', 'type' => 'number', 'label' => 'Nb pièces', 'wrapper' => [ 'class' => 'form-group col-md pl-3'],]);
        CRUD::addField(['name' => 'nb_chambre', 'type' => 'number', 'label' => 'Nb chambres', 'wrapper' => [ 'class' => 'form-group col-md pl-3'],]);
        CRUD::addField(['name' => 'nb_salle_bain', 'type' => 'number', 'label' => 'Nb salle de bain', 'wrapper' => [ 'class' => 'form-group col-md pl-3'],]);
        CRUD::addField(['name' => 'nb_toilette', 'type' => 'number', 'label' => 'Nb toilette', 'wrapper' => [ 'class' => 'form-group col-md pl-3'],]);
        $this->crud->addField([   // CustomHTML
            'name'  => 'separator',
            'type'  => 'custom_html',
            'value' => '<hr>'
        ],);

        $this->crud->addField([
            // select_from_array
            'name' => 'terrasse',
            'label' => 'terrasse/balcon',
            'type' => 'select_from_array',
            'wrapper' => [ 'class' => 'form-group col-md pl-3'],
            'options' => [
                // the key will be stored in the db, the value will be shown as label;
                1 => 'Oui',
                0 => 'Non',
            ],
            // optional
            'default' => '0',
            'inline' => true, // show the radios all on the same line?
        ]);
        $this->crud->addField([
            // select_from_array
            'name' => 'garage',
            'label' => 'garage',
            'type' => 'select_from_array',
            'wrapper' => [ 'class' => 'form-group col-md pl-3'],
            'options' => [
                // the key will be stored in the db, the value will be shown as label;
                1 => 'Oui',
                0 => 'Non',
            ],
            // optional
            'default' => '0',
            'inline' => true, // show the radios all on the same line?
        ]);
        $this->crud->addField([
            // select_from_array
            'name' => 'parking',
            'label' => 'parking',
            'wrapper' => [ 'class' => 'form-group col-md pl-3'],
            'type' => 'select_from_array',
            'options' => [
                // the key will be stored in the db, the value will be shown as label;
                1 => 'Oui',
                0 => 'Non',
            ],
            // optional
            'default' => '0',
            'inline' => true, // show the radios all on the same line?
        ]);
        $this->crud->addField([
            // select_from_array
            'name' => 'piscine',
            'label' => 'piscine',
            'wrapper' => [ 'class' => 'form-group col-md pl-3'],
            'type' => 'select_from_array',
            'options' => [
                // the key will be stored in the db, the value will be shown as label;
                1 => 'Oui',
                0 => 'Non',
            ],
            // optional
            'default' => '0',
            'inline' => true, // show the radios all on the same line?
        ]);
        $this->crud->addField([
            // select_from_array
            'name' => 'jardin',
            'label' => 'jardin',
            'wrapper' => [ 'class' => 'form-group col-md pl-3'],
            'type' => 'select_from_array',
            'options' => [
                // the key will be stored in the db, the value will be shown as label;
                1 => 'Oui',
                0 => 'Non',
            ],
            // optional
            'default' => '0',
            'inline' => true, // show the radios all on the same line?
        ]);
      
        CRUD::addField(['name' => 'adresse', 'type' => 'text', 'label' => 'Adresse']);
        CRUD::addField(['name' => 'ville', 'type' => 'text', 'label' => 'Ville', 'wrapper' => [ 'class' => 'form-group col-md pl-3'],]);
        CRUD::addField(['name' => 'code_postal', 'type' => 'text', 'label' => 'Code postal', 'wrapper' => [ 'class' => 'form-group col-md pl-3'],]);
        CRUD::addField(['name' => 'telephone', 'type' => 'text', 'label' => 'Téléphone', 'wrapper' => [ 'class' => 'form-group col-md pl-3'],]);
        
        $this->crud->addField([
            // radio
            'name' => 'status', // the name of the db column
            'label' => 'Activé', // the input label
            'type' => 'radio',
            'options' => [
                // the key will be stored in the db, the value will be shown as label;
                'Oui' => 'Oui',
                'Non' => 'Non',
            ],
            // optional
            'default' => 'Oui',
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

{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
@include('backpack-database-notifications::sidebarMenuItem')

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-archive nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('location') }}"><i class="nav-icon la la-home"></i> Locations</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('vente') }}"><i class="nav-icon la la-sign"></i> Ventes</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('messages') }}"><i class="nav-icon la la-envelope"></i> Messages</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i><span>Utilisateurs</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('location/import') }}"><i class="nav-icon lar la-file-excel  "></i> <span> Importer Excel</span></a></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-cog"></i> Parametres</a>
    <ul class="nav-dropdown-items">
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('pages') }}"><i class="nav-icon la la-file"></i>Pages</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('blogs') }}"><i class="nav-icon la la-th-list"></i> Blogs</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon la la-tools'></i> <span>Avancés</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>Fichiers</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('backup') }}"><i class="nav-icon la la-hdd-o"></i> Sauvegardes</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('emails') }}"><i class="nav-icon la la-envelope"></i>Contenu emails</a></li>
    </ul>
</li>




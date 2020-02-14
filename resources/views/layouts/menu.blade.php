
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Пользователи</span></a>
</li>

<li class="{{ Request::is('serials*') ? 'active' : '' }}">
    <a href="{{ route('serials.index') }}"><i class="fa fa-edit"></i><span>Сериалы</span></a>
</li>

<li class="{{ Request::is('seasons*') ? 'active' : '' }}">
    <a href="{{ route('seasons.index') }}"><i class="fa fa-edit"></i><span>Сезоны</span></a>
</li>


<li class="{{ Request::is('seriyas*') ? 'active' : '' }}">
    <a href="{{ route('seriyas.index') }}"><i class="fa fa-edit"></i><span>Серии</span></a>
</li>

<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>


<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>


@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.dash') ? 'actived' : '' }}" href="{{ route(ADMIN . '.dash') }}">
        <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.users') ? 'actived' : '' }}" href="{{ route(ADMIN . '.users.index') }}">
        <span class="icon-holder">
            <i class="c-brown-500 ti-user"></i>
        </span>
        <span class="title">Users</span>
    </a>
</li>

<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.categories') ? 'actived' : '' }}" href="{{ route(ADMIN . '.categories.index') }}">
        <span class="icon-holder">
            <i class='c-amber-500 ti-layout-grid2-alt'></i>
        </span>
        <span class="title">{{trans('app.categories')}}</span>
    </a>
</li>

<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.products') ? 'actived' : '' }}" href="{{ route(ADMIN . '.posts.index') }}">
        <span class="icon-holder">
            <i class='c-indigo-500 fa fa-shopping-cart'></i>
        </span>
        <span class="title">{{ trans('app.posts') }}</span>
    </a>
</li>

<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.orders') ? 'actived' : '' }}" href="{{ route(ADMIN . '.orders.index') }}">
        <span class="icon-holder">
            <i class='c-indigo-500 fa fa-shopping-cart'></i>
        </span>
        <span class="title">{{ trans('app.orders') }}</span>
    </a>
</li>


<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.banners') ? 'actived' : '' }}" href="{{ route(ADMIN . '.banners.index') }}">
        <span class="icon-holder">
            <i class='c-pink-500 ti-gift'></i>
        </span>
        <span class="title">{{trans('app.banners')}}</span>
    </a>
</li>

<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.positions') ? 'actived' : '' }}" href="{{ route(ADMIN . '.positions.index') }}">
        <span class="icon-holder">
            <i class='c-pink-500 ti-gift'></i>
        </span>
        <span class="title">{{trans('app.positions')}}</span>
    </a>
</li>

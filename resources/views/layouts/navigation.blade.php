<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"> 
    <x-nav-link :href="rout('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard')}}
    </x-nav-link>

    <x-nav-link :href="rout('proyectos.index')" :active="request()->routeIs('proyectos.index')">
        {{ __('proyectos')}}
    </x-nav-link>
</div>
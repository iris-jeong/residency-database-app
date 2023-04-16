@props(['title', 'route'])

<li class="{{ request()->routeIs($route) ? 'current' : ''}}">
    <a href="{{ route($route) }}" title="{{ $title }}">
        {{ $title }}
    </a>
</li>
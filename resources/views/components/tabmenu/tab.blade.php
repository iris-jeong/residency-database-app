@props(['title', 'route'])

<li class="{{ request()->url() === $route ? 'current' : ''}}">
    <a href="{{ $route }}" title="{{ $title }}">
        {{ $title }}
    </a>
</li>
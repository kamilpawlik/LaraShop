<ul>
@foreach($items as $item)
    <li>
        <a href="{{ $item->url }}">{{ $item->label }}</a>
        <ul>
            @foreach($item->children as $children)
                <a href="{{ $item->url }}">{{ $item->label }}</a>
            @endforeach
        </ul>
    </li>
    @endforeach
</ul>
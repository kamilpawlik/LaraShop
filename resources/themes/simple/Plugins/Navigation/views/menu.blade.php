<ul class="nav navbar-nav">
    @foreach($items as $item)
        <li @if(count($item->children)) class="dropdown" @endif>
            <a href="{{ $item->url }}" @if(count($item->children)) class="dropdown-toggle" data-toggle="dropdown" @endif>
                {{ $item->label }}
                @if(count($item->children))
                    <b class="caret"></b>
                @endif

            </a>
            @if(count($item->children))
                <ul class="dropdown-menu">
                    @foreach($item->children as $children)
                        <li><a class="list" href="{{ $children->url }}">{{ $children->label }}</a></li>
                    @endforeach
                </ul>
            @endif

        </li>
    @endforeach
</ul>

<header class="clearfix">
    <div class="hgroup clearfix">
        <img class="logo" src="/img/logo.png">
        <h1>{{ $page->community->name }}</h1>
        <nav>
            <ul>
                @foreach ($page->menu as $item)
                    <li><a href="{{ $item->url }}">{{ $item->title }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
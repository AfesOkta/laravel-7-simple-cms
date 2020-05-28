<div class="row">
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand text-capitalize text-center" data-toggle="tooltip" data-bs-tooltip="" href="/" title="Home" style="padding-top: 0px;">Home</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Upcoming Events</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Calendar Entrance</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Outher Pages</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('contact')}}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

{{--<nav class="navbar navbar-menu is-light">--}}
{{--    <div class="container">--}}
{{--        <div id="menu" class="navbar-menu">--}}

{{--            <div class="navbar-start">--}}
{{--				<a class="navbar-item" href="#">--}}
{{--						Home--}}
{{--				</a>--}}
{{--                @foreach (getMenu() as $p)--}}
{{--                    @if ($p->children->count() > 0)--}}
{{--                        <div class="navbar-item has-dropdown is-hoverable">--}}
{{--                            <div class="navbar-link">--}}
{{--                                <a class="navbar-item {{ active($p) }}" href="{{ $p->link }}">--}}
{{--                                    {{ $p->title }}--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="navbar-dropdown">--}}
{{--                                @foreach ($p->children as $child)--}}
{{--                                    <a class="navbar-item {{ active($child) }}" href="{{ $child->link }}">--}}
{{--                                        {{ $child->title }}--}}
{{--                                    </a>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @else--}}
{{--                        <a class="navbar-item" href="{{ $p->link }}">--}}
{{--                            {{ $p->title }}--}}
{{--                        </a>--}}
{{--                    @endif--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--            <div class="navbar-end">--}}
{{--                <div class="navbar-item">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

<div id="header">
    <div class="container">
        <div role="navigation" class="navbar navbar-custom navbar-fixed-top affix-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a href="{{ route('home') }}" class="navbar-brand-logo nav-brand-logo"> </a>
                    <div class="logo">
                        <a href="{{ route('home') }}" class="navbar-brand-logo nav-brand-logo">
                            <img src="" width="40px" height="40px">
                        </a>
                        <a
                                href="{{ route('home') }}"
                                style="display: inline; font-family:'HTNeonW01-Regular&quot'">
                        </a>
                    </div>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="{{ route('home') }}">
                                Гороскопы
                            </a>
                        </li>
                        {{--<li><a href="#">Гадания</a></li>--}}
                        {{--<li><a href="/blog">Блог</a></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
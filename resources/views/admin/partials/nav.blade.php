<nav class="navbar navbar-inverse  sti">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand navi" href="{{route('home')}}">tienda guillospy</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">

                <li><a href="#">Categoria</a></li>
                <li><a href="#">producto</a></li>
                <li><a href="#">ordenes</a></li>



                @include('admin.partials.menu-user')
            </ul>
        </div>
    </div>
</nav>
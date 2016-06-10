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

                <li><a href="#">Conocenos</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">portafolio</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">categorias <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">





                    </ul>
                </li>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <li><a href="{{route('carrito')}}"><i class="fa fa-shopping-cart"></i></a></li>
                @include('store.partials.menu-user')
            </ul>
        </div>
    </div>
</nav>
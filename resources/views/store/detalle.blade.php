@extends('store.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-shopping-cart"></i> Detalle del pedido</h1>
        </div>

        <div class="page col-md-offset-1 col-md-10">
            <div class="table-responsive">
                <h3 class="cart-color">Datos del usuario</h3>
                <br><br><br>
                <table class="table  table-hover table-bordered cart-color1">
                    <tr><td>Nombre:</td><td>{{ Auth::user()->nombre . " " . Auth::user()->guillermo }}</td></tr>
                    <tr><td>Usuario:</td><td>{{ Auth::user()->user }}</td></tr>
                    <tr><td>Correo:</td><td>{{ Auth::user()->email }}</td></tr>
                    <tr><td>Direccion:</td><td>{{ Auth::user()->direccion }}</td></tr>
                </table>
            </div>
            <div class="table-responsive">
                <h3 class="cart-color">Datos del pedido</h3>
                <br>
                <br>
                <table class="table  table-hover table-bordered">
                    <tr class="cart-color1">
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>
                    @foreach($cart as $item)
                        <tr class="tabla-color cart-color2">
                            <td>{{ $item->name }}</td>
                            <td>${{ number_format($item->price,2) }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>${{ number_format($item->price * $item->quantity,2) }}</td>
                        </tr>
                    @endforeach
                </table><hr>
                <h3>
					<span class="label label-success">
						Total: ${{ number_format($total, 2) }}
					</span>
                </h3><hr>
                <p>
                    <a href="" class="btn btn-primary">
                        <i class="fa fa-chevron-circle-left"></i> Regresar
                    </a>

                    <a href="{{route('payment')}}" class="btn btn-warning">
                        Pagar con <i class="fa fa-cc-paypal fa-2x"></i>
                    </a>
                </p>
            </div>
        </div>
    </div>

@stop
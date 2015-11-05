
@extends('store.template')
@section('content')

    @if(\Session::has('message'))
        @include('store.partials.mensages')
    @endif
    @include('store.partials.slider')


    <div class="container-fluid">
        <div id="demo">
            @foreach($products as $product)
                <div class="product white-panel">
                    <h3 class="text-center text-catalogo">{{ $product->name }}</h3><hr>
                    <img src="productos/{{ $product->path }}">
                    <div class="product-info">
                        <p class="text-center text2-catalogo">{{ $product->extract }}</p>
                        <h3 class="text-center"><span class="label label-success">Precio: ${{ number_format($product->price,2) }}</span></h3>
                        <p class="text-center">
                            <a class="btn btn-warning" href="{{route('cart-add',$product->slug)}}">
                                <i class="fa fa-cart-plus"></i> La quiero
                            </a>
                            <a class="btn btn-primary" href="{{ route('detalle', $product->slug) }}"><i class="fa fa-chevron-circle-right"></i> Leer mas</a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>







@stop

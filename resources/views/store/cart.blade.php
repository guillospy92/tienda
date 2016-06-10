@extends('store.template')

@section('content')

    <br><br>
 @if(count($cart))
     <div class="container text-center cart-table ">

         <div class="page-header">
             <h1 class="text-catalogo"><i class="fa fa-shopping-cart"></i> mi carrito</h1>
         </div>
         <p><a class="btn btn-danger btn-lg" href="{{route('cart-eliminar')}}"><i class="fa fa-trash  apartar"></i>vaciar carrito</a></p>

         <div class="table-responsive">

             <table class="table table-bordered  cart-color">

                 <thead>
                 <tr class="cart-color">
                     <th>Imagen</th>
                     <th>Producto</th>
                     <th>Precio</th>
                     <th>cantidad</th>
                     <th>Subtotal</th>
                     <th>quitar</th>
                 </tr>

                 </thead>

                 <tbody>

                 @foreach($cart as $item)
                     <tr class="cart-color1">
                         <td><img src="../productos/{{$item->path}}" alt=""></td>
                         <td>{{$item->name}}</td>
                         <td>${{number_format($item->price,2)}}</td>
                         <td>
                             <input
                                     type="number"
                                     min="1"
                                     max="100"
                                     value="{{ $item->quantity }}"
                                     id="product_{{ $item->id }}"
                                     >
                             <a
                                     href="#"
                                     class="btn btn-warning btn-sm btn-update-item"
                                     data-href="{{ route('cart-update', $item->slug) }}"
                                     data-id = "{{ $item->id }}"
                                     >
                                 <i class="fa fa-refresh"></i>
                             </a>
                         </td>

                         <td>{{number_format($item->quantity * $item->price,2 )}}</td>
                         <td><a href="{{route('cart-delete',$item->slug)}}" class="btn btn-danger btn-sm" href=""><i class="fa fa-remove"></i></a></td>








                     </tr>

                 @endforeach
                 </tbody>



             </table>
             <hr>
             <h3><span class="label label-success">Total:{{number_format($total,2)}}</span></h3>
         </div>


         <hr>
         <p class="text-center">
             <a class="btn btn-lg btn-danger" href="{{route('home')}}">seguir comprando</a>
             <a class="btn btn-lg btn-success" href="{{route('orden-detalle')}}">continuar</a>

         </p>




     </div>

 @else
     <h3 class="text-center">no tienes ningun producto asignado :( </h3>
     <p class="text-center"><a class="btn btn-lg btn-warning " href="{{route('home')}}">comprar</a></p>
     <br><br><br>
    @endif

    @stop

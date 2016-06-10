<div class="alert alert-info alert-dismissible text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h2><strong><i class="fa fa-info-circle"></i></strong> {{ \Session::get('message') }}</h2>
</div>

@foreach($user as $use)
    <tr>
        <td><a href="" class="btn btn-sm"><i class="fa  fa-refresh fa-2x"></i></a></td>
        <td><a href="" class="btn btn-sm "><i class="fa fa-trash fa-2x"></i></a></td>
        <td>{{$use->nombre}}</td>
        <td>{{$use->user}}</td>
        <td>{{$use->direccion}}</td>
        <td>{{$use->email}}</td>


    </tr>
@endforeach


@foreach($product as $pr)
    <tr>
        <td><a href="" class="btn btn-sm"><i class="fa  fa-refresh fa-2x"></i></a></td>
        <td><a href="" class="btn btn-sm "><i class="fa fa-trash fa-2x"></i></a></td>
        <td>{{$pr->name}}</td>
        <td>{{$pr->description}}</td>
        <td>{{$pr->price}}</td>
        <td>{{$pr->extract}}</td>


    </tr>
@endforeach

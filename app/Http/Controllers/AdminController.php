<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\User;
use App\Product;
use App\Order;
use App\OrderItem;
use App\Http\Requests\CategoryRequest;
use Session;
use Redirect;
use App\Http\Requests\UserRequest;



class AdminController extends Controller
{

    public function indexfacebook(){

        OAuth::login('facebook', function($user, $details) {
            $user->nombre = $details->full_name;
            $user->email = $details->email;
            $user->save();
        });
        dd(Auth::user());
    }


    public function obtener()
    {

        $category = Category::all();
        return response()->json($category->toArray());

    }


    public function index (){
        $category = Category::paginate(10);
        $product = Product::paginate(10);
        $user = User::paginate(10);
        $order = Order::orderBy('id','desc')->paginate(10);
        $est = Category::select('name')->get()->toArray();
        $est = Category::lists('name', 'id');

        return view ('admin.index',compact('category','product','user','order','est'));
    }


    public function store(CategoryRequest $request){

        if($request->ajax()){

            Category::create($request->all());

            return response()->json(["mensaje"=>"creado"]);
        }

    }


    public function edit($id){

    $category=Category::find($id);
        return response()->json($category->toArray());
    }


    public function update(Request $request,$id){

        $category=Category::find($id);
        $category->fill($request->all());
        $category->save();
        return response()->json([
            "mensaje"=>"listo"
        ]);



    }


    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json(["mensaje"=>"borrado"]);
    }

    public function obtenerproductos(){
        $product = Product::with('categorie')->get();
        return response()->json($product->toArray());
    }

    public function storeproducto(Request $request){
        Product::create($request->all());
        return Redirect::to('admin/category');
    }

    public function productodelete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        Session::flash('mesage','Producto Eliminado Correctamente');
        return Redirect::to('admin/category');
    }


    public function editproduct($id){

        $producto=Product::find($id);
        $category = Category::paginate(2);
        $product = Product::paginate(10);
        $user = User::paginate(10);
        $order = Order::paginate(10);

        $est = Category::lists('name', 'id');


        return view ('admin.edit',compact('producto','category','product','user','order','est'));

    }

    public function updateproduct (Request $request, $id){

        $product=Product::find($id);
        $product->fill($request->all());
        $product->save();
        Session::flash('mesage','producto actualizado correctamente');
        return \Redirect::to('admin/category');

    }


    public function elimarusuario($id){

        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('mesages','usuario Eliminado Correctamente');
        return Redirect::to('admin/category');



    }


    public function storeuser(UserRequest $request){

        $data = [
            'nombre'          => $request->get('nombre'),
            'apellido'     => $request->get('apellido'),
            'email'         => $request->get('email'),
            'user'          => $request->get('user'),
            'password'      => $request->get('password'),
            'type'          => $request->get('type'),
            'active'        => $request->has('active') ? 1 : 0,
            'direccion'       => $request->get('direccion')
        ];

        $user = User::create($data);

        Session::flash('mesages','usuario creado Correctamente');
        return Redirect::to('admin/category');



    }

    public function edituser($id){

        $usu=User::find($id);

        $category = Category::paginate(2);
        $product = Product::paginate(10);
        $user = User::paginate(10);
        $order = Order::paginate(10);




        return view ('admin.updateuser',compact('usu','category','product','user','order'));


    }


    public function updateuser(Request $request,$id)
    {
        $usu=User::find($id);
        $this->validate($request, [
            'nombre'      => 'required|max:100',
            'apellido' => 'required|max:100',
            'email'     => 'required|email',
            'user'      => 'required|min:4|max:20',
            'password'  => ($request->get('password') != "") ? 'required|confirmed' : "",
            'type'      => 'required|in:user,admin',
        ]);

        $usu->nombre = $request->get('nombre');
        $usu->apellido = $request->get('apellido');
        $usu->email = $request->get('email');
        $usu->user = $request->get('user');
        $usu->type = $request->get('type');
        $usu->direccion = $request->get('direccion');
        $usu->active = $request->has('active') ? 1 : 0;
        if($request->get('password') != "") $usu->password = $request->get('password');

        $updated = $usu->save();

        Session::flash('mesages','usuario actualizado Correctamente');
        return Redirect::to('admin/category');
    }

    public function elimarorden($id){

        $order = Order::findOrFail($id);
        $order->delete();
        Session::flash('mesas','orden Eliminado Correctamente');
        return Redirect::to('admin/category');


    }


    public function ordenget(Request $request){

        $items = OrderItem::with('product')->where('order_id', $request->get('order_id'))->get();
        return response()->json($items->toArray());
    }


}


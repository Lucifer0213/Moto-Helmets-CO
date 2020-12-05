<?php

namespace App\Http\Controllers;
use App\Order;
use App\Person;
use App\Product;
use App\MethodPayment;
use Illuminate\Http\Request;

class OrderController extends Controller
{
     public function index()
    {
        $orders = Order::all();
        return \View::make('admin/orders/index', compact('orders'));
    }
    public function create()
    {
        $products = Product::all();
        $statuses = getStatusOrdersArray();
        $persons=Person::all();
        $methodpayments= MethodPayment::all();
        $url= config('app.url').'admin/orders';
        return \View::make('admin/orders/create', compact('statuses','persons','products','methodpayments','url'));

    }

    public function store(Request $request)
    {
        $order = $this->saveOrder($request, $request->arrProducts);
        $productOrder = $this->saveProductOrder($order, $request->arrProducts, $request->price); 
        if(!isset($order['error']) && !isset($productOrder['error']) ){
            $resp = [
                'success'=> true,
                'message'=>'inserción Correcta'
            ];
            return response()->json($resp);
        } else{
            $resp =[
                'error'=>true,
                'message'=> 'Error Creando el producto'
            ];
            return response()->json($resp);
        }    
    }

    public function saveOrder($request, $arrQuantityPrice)
    { 
        try{
            // dd($arrQuantityPrice);
            $totalCompra = 0;

            foreach ($arrQuantityPrice as $quantityXPrice) {
                $totalCompra += ($quantityXPrice['price'] * $quantityXPrice['quantity_to_buy']);
            }

            $order = new Order;
            $order->dateOrder = $request->dateOrder;
            $order->total = $totalCompra;
            $order->observations = $request->observations;
            $order->person_id = $request->person_id;
            $order->method_id = $request->method_id;
            $order->status = "Activo";
            
            $order->save();
            return $order;
        }catch(\Exception $e){
            $resp = [
                'error' => true,
                'message' => 'Error  Insertando el producto('.$e->getMessage().')'
            ];
            return $resp;
        }
    }
    public function saveProductOrder($order, $arrProducts, $price)
    {
        try{
            // dd($arrProducts[0]['quantity_to_buy'], $arrProducts[0]);
            foreach($arrProducts as $product){

                $order->products()->attach($product['id'],['price' => $product['price'], 'quantity' => $product['quantity_to_buy']]);
            }
            
            return true;
        }catch(\Exception $e){
            $resp = [
                'error' => true,
                'message' => 'Error  Insertando el producto('.$e->getMessage().')'
            ];
            return $resp;
        }
    }

    public function edit($id)
    {
    	$order = Order::find($id);
        $statuses = getStatusOrdersArray(); 
        $persons = Person::all(); 	
        $methodpayments = MethodPayment::all(); 	
        return \View::make('admin/orders/edit', compact('order','statuses','persons','methodpayments'));
    }
    public function update($id, Request $request)
    {
        
        $this->validate($request,[
            'dateOrder' => 'required|date',
            'total' => 'required|numeric',
            'observations' => 'required',
            'person_id' => 'required',
            'method_id' => 'required',
            'status' => 'required'
        ]);
    	$order = Order::find($id);
    	$order->dateOrder = $request->dateOrder;
        $order->total = $request->total;
        $order->observations = $request->observations;
        $order->person_id = $request->person_id;
        $order->method_id = $request->method_id;
    	$order->status = $request->status;
        $order->save();
        $order->products()->detach($product['id']);
        $order = $this->saveProductOrder($request);
    	return redirect('admin/orders')->with('info','Orden Actualizada Satisfatoriamente');
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->back()->with('info','Orden Eliminada Correctamente');
    }

    
    public function show()
    {
        $orders = Order::onlyTrashed()->get();
    	return \View::make('admin/orders/paper_bin', compact('orders'));
    }
    
    public function restore($id)
    {
        Order::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->back()->with('info','Orden Restablecida Correctamente');
    }

    public function forcedelete($id)
    {
        Order::onlyTrashed()->find($id)->forcedelete();
        return redirect()->back()->with('info','Orden Eliminada Permanentemente');
    }
}

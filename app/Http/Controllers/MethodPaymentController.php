<?php

namespace App\Http\Controllers;
use App\MethodPayment;
use App\Order;
use Illuminate\Http\Request;

class MethodPaymentController extends Controller
{
	public function index()
    {
        $methodpayments = MethodPayment::all();
        return \View::make('admin/methodpayments/index', compact('methodpayments'));
    }

    public function create()
    {
        $orders = Order::all();
        $statuses = getStatusMethodPaymentsArray();
        $url=config('app.url').'admin/methodpayments';
        return \View::make('admin/methodpayments/create', compact('statuses','orders','url'));
    }

    public function store(Request $request)
    {


        $methodpayment = $this->saveMethodPayment($request); // Esta 
        $orderMethodPayment = $this->saveOrderMethodPayment($methodpayment, $request->arrOrders, $request->consignment_number);
        // dd($methodpayment, $request->arrOrders,  $request->consignment_number);
        if(!isset($methodpayment['error']) && !isset($orderMethodPayment['error']) ){
            $resp = [
                'success' => true,
                'message'=>'Inserción Correcta'
            ];
            return response()->json($resp);
        }else{
            $resp = [
                'error'=>true,
                'message'=>'Error Creando La Orden'
            ];
            return response()->json($resp);
        }
    }


    public function saveMethodPayment($request)
    {
        try{
            $methodpayment = new MethodPayment;
            $methodpayment->name = $request->name;
            $methodpayment->status = $request->status;
            $methodpayment->save();
            return $methodpayment;
        }catch(\Exception $e){
            $request = [
                'error' => true,
                'message' => 'Error insertando la orden('.$e->getMessage().')'
            ];
            return $resp;
        }
    }
    
    public function saveOrderMethodPayment($methodpayment, $arrOrders, $consignment_number)
    {
        try{
            // dd($methodpayment, $arrOrder);
            foreach($arrOrders as $orders){
                $methodpayment->orders()->attach($order['id'],['consignment_number'=> $consignment_number], ['value'=> $orders['total']]);

            }
            return true;
            }catch(\Exception $e){
                $resp = [
                    'error' => true,
                    'message' =>'Error Insertando el detalle de  la orden('.$e->getMessage().')'
                ];
                return $resp;
            }
    }

    public function edit($id)
    {
        $methodpayment = MethodPayment::find($id);
        $statuses = getStatusMethodPaymentsArray();
        return \View::make('admin/methodpayments/edit', compact('methodpayment', 'statuses'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'status'     => 'required'
        ]);
        
        $methodpayment = MethodPayment::find($id);
        $methodpayment->name = $request->name;
        $methodpayment->status = $request->status;
        $methodpayment->save();
        return redirect('admin/methodpayments')->with('info', 'Metodo de pago Actualizado Satisfatoriamente');
    }

    public function destroy($id)
    {
        $methodpayment = MethodPayment::find($id);
        $methodpayment->delete();
        return redirect()->back()->with('info', 'Metodo de pago Eliminado Correctamente');
    }

    public function show()
    {
        $methodpayments = MethodPayment::onlyTrashed()->get();
        return \View::make('admin/methodpayments/paper_bin', compact('methodpayments'));
    }

    public function restore($id)
    {
        MethodPayment::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->back()->with('info', 'Metodo de pago Restablecido Correctamente');
    }

    public function forcedelete($id)
    {
        MethodPayment::onlyTrashed()->find($id)->forcedelete();
        return redirect()->back()->with('info', 'Metodo de pago Eliminado Permanentemente');
    }
    
}

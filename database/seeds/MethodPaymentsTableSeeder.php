<?php

use App\MethodPayment;
use Illuminate\Database\Seeder;

class MethodPaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $methodpayments = array(
        	['tipopago' => 'Efectivo'],
        	['tipopago' => 'Tarjeta'],

        );
        foreach ($methodpayments as $value) {
        	$methodpayments = new MethodPayment;
        	$methodpayments->tipopago = $value['tipopago'];
            $methodpayments->status = 'Activo';
            $methodpayments->consignment_number = '12255';
        	$methodpayments->save();
        }
    }
}

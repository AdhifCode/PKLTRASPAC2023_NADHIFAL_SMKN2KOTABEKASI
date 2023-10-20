<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {

        $customers = Customer::all();
        $customers = Customer::with('product')->OrderBy('id')->get();
        return response()->json($customers);
    }

    public function exportpdf(){
        $data = Customer::orderBy('name')->get();
        $html ='<h1>Customer Data</h1>
        <table border="1">
        <tr>
        <td><h2> Name</h2></td>
        <td><h2> Email</h2></td>
        <td><h2> Favorite Produk</h2></td>
        </tr>
        ';
         foreach ($data as $key => $customers) {
            $html .= '<tr>';
            $html .= '<td>'.$customers->name.'</td>';
            $html .= '<td>'.$customers->email.'</td>';
            $html .= '<td>'.$customers->product->title.'</td>';
            $html .= '</tr>';
        }
        '</table>';
    
        $pdf=Pdf::loadHTML($html);
        $pdfname = 'customer.pdf';
        $pdf->save(rtrim(app()->basePath('public/pdf/' . $pdfname)));
        return $pdf->download($pdfname);
        
    }

    public function show($id)
    {
        $customer = Customer::find($id);

        return response()->json($customer);
    }
}

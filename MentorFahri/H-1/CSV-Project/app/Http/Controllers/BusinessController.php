<?php

namespace App\Http\Controllers;

use App\Imports\BusinessImport;
use App\Models\Business;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BusinessController extends Controller
{
    public function index()
    {
        $data = Business::all();

        return view('welcome', ['data' => $data]);
    }
    public function importExcel(Request $request){
        $file=$request->file('file');
        $validasi=Validator::make($request->all(), [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        if($validasi->fails()){
            return [
                'message' => 'Gagal Import',
            ];
        }else{
            $nama_file = $file->getClientOriginalName();

		    $file->move('csv/Imported',$nama_file);

		
		    Excel::import(new BusinessImport(), $file());
            return redirect('/');

        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use App\Models\Product;

class ProductController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        //Menampiplkan Data sesuai limit
        // $products = Product::limit(10);
        //Menampilkan Seluruh data
        $products = Product::all();
        return response()->json($products);
    }
    
    public function baru(){
        dd("test");
    }

    public function exportpdf(){
        $data = Product::orderBy('title')->get();
        $html ='<h1>Product Data</h1>
        <table border="1">
        <tr>
        <td><h2> Title</h2></td>
        <td><h2> Price</h2></td>
        <td><h2> Photo</h2></td>
        <td><h2> Description</h2></td>
        </tr>
        ';
         foreach ($data as $key => $products) {
            $html .= '<tr>';
            $html .= '<td>'.$products->title.'</td>';
            $html .= '<td>'.$products->price.'</td>';
            $html .= '<td>'.$products->photo.'</td>';
            $html .= '<td>'.$products->description.'</td>';
            $html .= '</tr>';
        }
        '</table>';
        // $pdf =  loadView('.pdf', $data);

        
        $pdf=Pdf::loadHTML($html);
        return $pdf->download('product.pdf');
        // return $pdf->stream();
    }
    public function exportexcel(){
        $data = Product::orderBy('title')->get();


        $spreadsheet = new Spreadsheet();
        $sheet= $spreadsheet->getActiveSheet();
        $tableHead=[
            'font'=>[
                'color'=>[
                    'rgb'=>'FFFFFF'
                    ],
                ],
                'fill'=>[
                    'fillType'=>Fill::FILL_SOLID,
                    'startColor'=>[
                        'rgb'=>'000000'
                    ]

                ],
                ];
        $evenRow=[
            'fill'=>[
                'fillType'=>Fill::FILL_SOLID,
                'startColor'=>[
                    'rgb'=>'BDBDBD'
                    ]
                ],
        ];
        $oddRow=[
            'fill'=>[
                'fillType'=>Fill::FILL_SOLID,
                'startColor'=>[
                    'rgb'=>'FFFFFF'
                    ]
                ],
        ];

        $spreadsheet->getDefaultStyle()->getFont()->setName('Arial')->setSize(12); //set style font default
        $spreadsheet->getActiveSheet()->setCellValue('A1', 'Product Data');
        $spreadsheet->getActiveSheet()->mergeCells("A1:E1"); //ubah width>>>dari a1 - d1 buat judul

        $spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);//style judul
        $spreadsheet->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(5);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(25);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(15);
        $sheet->setCellValue('A2', "Id");
        $sheet->setCellValue('B2', "Title");
        $sheet->setCellValue('C2', "Price");
        $sheet->setCellValue('D2', "Photo");
        $sheet->setCellValue('E2', "Description");
        $row = 3;

        //STYLE TEXT TIAP CELL BAWAH JUDUL
        $spreadsheet->getActiveSheet()->getStyle('A2:E2')->getFont()->setSize(12);
        $spreadsheet->getActiveSheet()->getStyle('A2:E2')->getFont()->setBold(true);

        //loop datanya
        $spreadsheet->getActiveSheet()->getStyle('A2:E2')->applyFromArray($tableHead);
        foreach ($data as $products) {
            $sheet->setCellValue('A' . $row, $products->id);
            $sheet->setCellValue('B' . $row, $products->title);
            $sheet->setCellValue('C' . $row, $products->price);
            $sheet->setCellValue('D' . $row, $products->photo);
            $sheet->setCellValue('E' . $row, $products->description);

            //style backgroundnya ambil dari event&odd row
            $rowStyle = ($row % 2 == 0) ? $evenRow : $oddRow;
            $spreadsheet->getActiveSheet()->getStyle('A' . $row . ':E' . $row)->applyFromArray($rowStyle);
            // Set alignment pada seluruh data 
            $spreadsheet->getActiveSheet()->getStyle('A' . $row . ':E' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);

            $row++;
        }
        $writer = new Xlsx($spreadsheet);

        // Menyimpan hasil spreadsheet ke dalam file
        $filename = 'Product_data.xlsx';
        $writer->save($filename);
        return response()->download($filename);

    }

    public function store(Request $request)
    {
        //Validasi

        // $this->validate($request,[
        //     'title' => 'required',
        //     'price' => 'required',
        //     'photo' => 'required',
        //     'description' => 'required',
        // ]);

        $product = new Product();

        // Data Gambar
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $allowedFileExtension = ['pdf','jpg','png','jpeg'];
            $extention = $file->getClientOriginalExtension();
            $check = in_array($extention, $allowedFileExtension);

            if($check){
                $name = time() . $file->getClientOriginalName();
                $file->move('images', $name);
                $product->photo = $name;
            }
        }

        // Data teks
        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->description = $request->input('description');

        $product->save();
        return response()->json($product);
    }

    public function show($id)
    {
        //Memberi 1 item dari Products Table
        $product = Product::find($id);

        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        //Update - ID
        //Validasi

        $this->validate($request,[
            'title' => 'required',
            'price' => 'required',
            'photo' => 'required',
            'description' => 'required',
        ]);

        $product = Product::find($id);

        // Data Gambar
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $allowedFileExtension = ['pdf','jpg','png','jpeg'];
            $extention = $file->getClientOriginalExtension();
            $check = in_array($extention, $allowedFileExtension);

            if($check){
                $name = time() . $file->getClientOriginalName();
                $file->move('images', $name);
                $product->photo = $name;
            }
        }

        // Data teks
        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->description = $request->input('description');

        $product->save();

        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json("Product  Sudah Ter-Delete");
        
    }
}

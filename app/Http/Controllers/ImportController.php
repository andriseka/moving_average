<?php

namespace App\Http\Controllers;

use App\Imports\StockImport;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class ImportController extends Controller
{
    public function index()
    {
        return view('import.index');
    }

    public function store(Request $request)
    {

        //validator
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:txt,csv,xlsx'
        ]);

        if($validator->fails()) {

            $response = [
                'status' => 400,
                'message' => $validator->errors()
            ];

            return response($response);

        }

        // check data
        $stock = new Stock();

        if (!empty($stock)) {

            $stock->truncate();

        }


        $file = $request->file;

        Excel::queueImport(new StockImport(), $file);

        $response = [
            'status' => 200,
            'message' => 'Import berhasil'
        ];

        return response($response);

    }
}

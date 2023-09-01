<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        logger($request);
        //******************** 1 Basic Validation ******************************
//        $validated = $request->validate([
//            'sap' => 'required',
//            'firstname' => 'required',
//            'lastname' => 'required',
//            'division' => 'required|numeric|min:1',
//        ]);
//        return redirect()->back();

        //*********************** 2  Basic Validation Customizing The Error Messages ***************************
        $rules =[
            'sap' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'division' => 'required|numeric|min:1',
        ];
        $messages = [
            'sap.*' => 'กรุณาระบุข้อมูลรหัสเจ้าหน้าที่',
            'firstname.*' => 'กรุณาระบุข้อมูลชื่อ',
            'lastname.*' => 'กรุณาระบุข้อมูลนามสกุล',
            'division.*' => 'กรุณาระบุข้อมูลสังกัด',
        ];

        $validator=Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        return 'Validate Pass';

    }

    //*********************** 3  Form Request Validation ***************************
    public function store2(EmployeePostRequest $request)
    {
        $validated = $request->validated();
        return '#Validate Pass#';
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

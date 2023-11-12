<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $staffMembers = Staff::all();

        return view('index', ['staffMembers' => $staffMembers]);
    }




    public function add()
    {
        return view('add');
    }


    public function saveAdd(Request $request)
    {

        $inputData = $request->all();
        $newStaff = Staff::create( $inputData);
        session()->flash('success', 'Thêm thành công!');


        return redirect()->route('index');
    }




    public function edit($id)
    {
        $record = Staff::find($id);
    return view('edit', ['record' => $record]);
    }

    public function update(Request $request, $id)
    {
        $inputData = $request->all();
        $staffMember =  Staff::find($id);
        $staffMember->update( $inputData);
        session()->flash('success', 'Cập nhật thành công!');

        return redirect()->route('index');
    }

    public function delete(Request $request, $id)
    {
        $staffMember = Staff::find($id);
        $staffMember->delete();

        session()->flash('success', 'Xóa thành công!');

        return redirect()->route('index');
    }
}
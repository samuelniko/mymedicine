<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $listdata= DB::select(DB::raw('select * from medicines'));

        // $listdata=DB::table('medicines')->get();

        // //Eloquent
        $listdata= Medicine::all();
        // dd($listdata);

        return view('medicine.index',compact('listdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("medicine.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Medicine();
        $data->generic_name=$request->get('name');
        $data->form=$request->get('form');
        $data->restriction_formula=$request->get('formula');
        $data->description=$request->get('deskripsi');
        $data->faskes_tk1=$request->get('tk1');
        $data->faskes_tk2=$request->get('tk2');
        $data->faskes_tk3=$request->get('tk3');
        $data->price=$request->get('price');
        $data->save();
        return redirect()->route('kategori.index')->with('status','Category is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show($medicine)
    {
        $res = Medicine::find($medicine);
        $message="";
        if($res){
            $message= $res;
        }
        else {
            $message = NULL;
        }

        return view ('medicine.show',compact('message'));
        // return view ('medicine.show',compact('message'));
        // dd($res);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        $this->authorize('delete-permission', $medicine);
        try {
            $medicine->delete();
            return redirect()->route('medicine.index')->with('status','Medicine data is Deleted');
        } catch (\PDOException $e){
            $msg='Failed';

            return redirect()->route('medicine.index')->with('error',$msg);
        }
        dd($medicine);
    }
}

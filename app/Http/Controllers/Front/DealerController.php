<?php

namespace App\Http\Controllers\Front;

error_reporting(1);

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $school_year = DB::table('school_year')->orderBy('year_id', 'desc')->first();
        $batch = DB::table('dealer_material_request')
                        ->join('dealer_book_fund', 'dealer_material_request.bookfund_id','=','dealer_book_fund.bookfund_id')
                        ->join('school_year','dealer_book_fund.year_id','=','school_year.year_id')
                        ->join('department','dealer_material_request.department_id','=','department.department_id')
                        ->where('school_year.year','=',$school_year->year)
                        ->orderBy('dealer_material_request.materialrequest_date_requested','desc')
                        ->get();
        return view('front/contents/dealerindex',array('school_year'=>$school_year,'batch'=>$batch));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dealerProfile(){
        return view('front/contents/dealerprofile');
    }

    public function updateProfile(Request $request){
    /*    $this->validate($request, [
            'dealer_name' => 'required|string',
            'dealer_contact_fullname' => 'required|string',
            'dealer_contact_no' => 'required|numeric|between:7,12',
            'dealer_address' => 'required'
            ]);*/
        $updateprofile = DB::table('dealer')
        ->where('user_id', Auth::user()->id)
        ->update(['dealer_name' => $request->dealer_name,'dealer_contact_fullname'=>$request->dealer_contact_fullname,'dealer_contact_no'=>$request->dealer_contact_no,'dealer_address'=>$request->dealer_address,'dealer_flag'=>1]);         
        return \Redirect::back()->with('success', ['msg' => "Success"]);
        
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

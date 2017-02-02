<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;

class BookFundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $department = DB::table('department')->get();
        $school_year = DB::table('school_year')->orderBy('year_id', 'desc')->get();
        return view('front/contents/bookfund',array('department'=>$department,'school_year'=>$school_year));
    }

    public function getFundData(Request $request){
        $getBookDetails = DB::table('book_fund')
        ->select('*')
        ->join('school_year','book_fund.year_id','=','school_year.year_id')
        ->where('book_fund.department_id','=',$request->department_id)
         ->where('school_year.year_id','=',$request->year_id)
        ->get();


          $response = array(
            'data'=>$getBookDetails
        );
        return \Response::json($response);
    }

    public function bookFundDetails($id){
           $BookDetails = DB::table('book_fund')
        ->select('*')
        ->join('school_year','book_fund.year_id','=','school_year.year_id')
        ->join('material_request','book_fund.bookfund_id','=','material_request.bookfund_id')
        ->join('book_details','material_request.materialrequest_id','=','book_details.bookrequest_id')
        ->join('user','user.id','=','material_request.user_id')
        ->join('faculty_user','faculty_user.user_id','=','user.id')
        ->join('book_status','book_status.bookstatus_id','=','book_details.bookstatus_id')
        ->where('book_fund.department_id','=',$id)
        ->get();

         return view('front/contents/bookfunddetails',array('BookDetails'=>$BookDetails));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

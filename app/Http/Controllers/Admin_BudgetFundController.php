<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;

class Admin_BudgetFundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/contents/adminbudgetfund');

    }

    public function add_budgetfund()
    {
        $department = DB::table('department')
        ->select('*')
        ->where('department_flag','=',1)
        ->get();
        $school_year = DB::table('school_year')
        ->select('*')
        ->where('year_flag','=',1)
        ->get();
        return view('admin/contents/adminbudgetfund_addfund',array('department'=>$department, 'school_year'=>$school_year));
    }

    public function getBudgetfundRecords(Request $request)
    {
        $book_fund = DB::table('book_fund')
        ->join('school_year','book_fund.year_id','=','school_year.year_id')
        ->select('*')
        ->where('book_fund.department_id','=',$request->institute_id)
        ->orderby('book_fund.bookfund_id','desc')
        ->get();
        // dd($book_fund);
        return $book_fund;
    }
    
    public function latestforadd(Request $request)
    {
        $institute_id = $request->institute_id;
        $Active_SY = DB::table('school_year')
        ->select('*')
        ->where('year_flag','=',1)
        ->get();
        $latest_budget=DB::table('book_fund')
        ->select('*')
        ->where('department_id','=',$institute_id)
        ->where('year_id','=',$Active_SY[0]->year_id)
        ->orderby('bookfund_id','desc')
        ->get();
        dd($latest_budget);
        $data['school_year']=$Active_SY;

        dd($institute_id);       
        return $book_fund;
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

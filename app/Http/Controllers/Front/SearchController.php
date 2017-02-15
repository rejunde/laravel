<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $getSteps = DB::table('book_steps')
        ->select('*')
        ->where('booksteps_status','=','0')
        ->orderBy('booksteps_position','ASC')
        ->get()
        ;
        return view('front/contents/search',array('steps'=>json_decode(json_encode($getSteps),true)));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function searchResult($searchdata){
            $searchresult = DB::table('book_details')
            ->select('*')
            ->join('material_request','book_details.bookrequest_id','=','material_request.materialrequest_id')
            ->join('book_steps','book_details.booksteps_id','=','book_steps.booksteps_id')
              ->join('faculty_user','material_request.user_id','=','faculty_user.user_id')
              ->join('department','faculty_user.faculty_department_id','=','department.department_id')
            ->where('book_details.bookdetails_author','like','%'.$searchdata.'%')
            ->orwhere('book_details.bookdetails_title','like','%'.$searchdata.'%')
            ->get();
          $response = array(
            'data'=>$searchresult,
            'count'=>count($searchresult)
        );
        return \Response::json($response);
      
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

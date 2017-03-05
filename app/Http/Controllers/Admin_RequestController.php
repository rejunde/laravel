<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;

class Admin_RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $books = DB::table('book_details')
       ->join('book_steps','book_details.booksteps_id','=','book_steps.booksteps_id')
       ->join('material_request','book_details.bookrequest_id','=','material_request.materialrequest_id')
       ->join('faculty_user','material_request.user_id','=','faculty_user.user_id')
       ->join('department','faculty_user.faculty_department_id','=','department.department_id')
       ->select('*')
       ->get();
       //var_dump($books);
       $steps = DB::table('book_steps')
       ->select('*')
       ->get();
       return view('admin/contents/adminrequest',array('books'=>$books, 'steps'=>$steps));

   }

   public function add_request()
   {
     $department = DB::table('department')
     ->select('*')
     ->where('department_flag','=',1)
     ->get();
     return view('admin/contents/adminrequest_addrequest',array('department'=>$department));

 }

 public function get_all_faculty()
 {
   $all_faculty = DB::table('faculty_user')
   ->select('faculty_fullname')
   ->get();
   $all=json_encode($all_faculty);
   return $all;
}

public function get_faculty_byname(Request $request)
{
   $faculty = DB::table('faculty_user')
   ->join('user','faculty_user.user_id','=','user.id')
   ->select('*')
   ->where('faculty_user.faculty_fullname','=',$request->faculty_name)
   ->get();
   $data=json_encode($faculty);
   return $data;
}

public function update_book_details(Request $request)
{
    // dd($request->steps);
  $data['bookdetails_remarks']=$request->remarks;
  $data['booksteps_id']=$request->steps;
            DB::table('book_details')
            ->where('bookdetails_id',$request->bookID)
            ->update($data);
   return 1;
}

public function get_book_details(Request $request)
{

   $book = DB::table('book_details')
   ->join('book_steps','book_details.booksteps_id','=','book_steps.booksteps_id')
   ->join('material_request','book_details.bookrequest_id','=','material_request.materialrequest_id')
   ->join('faculty_user','material_request.user_id','=','faculty_user.user_id')
   ->join('department','faculty_user.faculty_department_id','=','department.department_id')
   ->where('book_details.bookdetails_id','=',$request->bookd_id)
   ->select('*')
   ->get();


   $response = array(
    'book'=>$book
    );

   $data=json_encode($response);

   return $data;
}


public function save_request(Request $request)
{
    $data['user_id'] = $request->faculty_id;
    $data['department_id'] = $request->institute_id;
    $data['materialrequest_date_requested'] = date('Y-m_d');
    $data['materialrequest_flag']=1;
    $data['bookfund_id']=1;
    // $insert_request=$this->db->insert('material_request', $data);
    $insert_id = DB::table('material_request')->insertGetId(
        $data);


    
    foreach($request->rowData as $key=>$value)
    {   
        if($key!=0)
        {


            $book['bookrequest_id']=$insert_id;
            $book['bookdetails_author']=$value[1];
            $book['bookdetails_title']=$value[0];
            $book['bookdetails_volume_edition']=$value[2];
            $book['bookdetails_year_published']=$value[4];
            $book['bookdetails_publisher']=$value[3];
            $book['bookdetails_isbn_issn']=$value[5];
            $book['bookdetails_type']=$value[6];
            $book['booksteps_id']=1;

            DB::table('book_details')->insert(
                $book);
        }
    }

    return 1;
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

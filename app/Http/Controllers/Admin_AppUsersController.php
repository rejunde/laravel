<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;
use Hash;

class Admin_AppUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $test=Hash::make('secretpassword');
        // $check=Hash::check('secretpassword',$test);
        // dd($check);
        $admins= DB::table('admin_user')
        ->join('user','admin_user.user_id','=','user.id')
        ->select('*')
        ->get();
        return view('admin/contents/adminappusers',array('admins'=>$admins));

    }

    public function faculty()
    {
        // $test=Hash::make('secretpassword');
        // $check=Hash::check('secretpassword',$test);
        // dd($check);
        $faculties = DB::table('faculty_user')
        ->join('user','faculty_user.user_id','=','user.id')
        ->join('department','faculty_user.faculty_department_id','=','department.department_id')
        ->select('*')
        ->get();
        return view('admin/contents/adminappusers_faculty',array('faculties'=>$faculties));

    }

    public function dealer()
    {
        // $test=Hash::make('secretpassword');
        // $check=Hash::check('secretpassword',$test);
        // dd($check);
        $faculties = DB::table('faculty_user')
        ->join('user','faculty_user.user_id','=','user.id')
        ->join('department','faculty_user.faculty_department_id','=','department.department_id')
        ->select('*')
        ->get();
        return view('admin/contents/adminappusers_dealer',array('faculties'=>$faculties));

    }

    public function add_faculty()
    {
       $department = DB::table('department')
       ->select('*')
       ->where('department_flag','=',1)
       ->get();        
       return view('admin/contents/adminappusers_addfaculty',array('department'=>$department));

   }

    public function add_dealer()
    {
       $department = DB::table('department')
       ->select('*')
       ->where('department_flag','=',1)
       ->get();        
       return view('admin/contents/adminappusers_adddealer',array('department'=>$department));

   }


   public function add_admin()
   {
    return view('admin/contents/adminappusers_addusers');

}

public function save_admin(Request $request)
{
   $password=Hash::make($request->password);
   $user['usertype_id']=3;
   $user['email']=$request->email;
   $user['password']=$password;

   $insert_id= DB::table('user')->insertGetId(
    $user);

   $admin["user_id"]=$insert_id;
   $admin["adminuser_fullname"]=$request->full_name;
   $admin["adminuser_contactnumber"]=$request->contact;

   DB::table('admin_user')->insert(
    $admin);

   return 1;

}

public function save_faculty(Request $request)
{
   $password=Hash::make($request->password);
   $user['usertype_id']=1;
   $user['email']=$request->email;
   $user['password']=$password;

   $insert_id= DB::table('user')->insertGetId(
    $user);

   $faculty["user_id"]=$insert_id;
   $faculty["faculty_fullname"]=$request->full_name;
   $faculty["faculty_department_id"]=$request->dept;

   DB::table('faculty_user')->insert(
    $faculty);

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

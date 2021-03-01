<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\MessageBag;

class gethungrycontroller extends Controller
{
    //

    public function uinsert(Request $req){
        $name=$req->input('name');
        $email=$req->input('email');
        $num=$req->input('num');
        $password=$req->input('pass');
        $actype="user";
       
    //     DB::table('user_signup')->insert(['name'=>$name,'email'=>$email,'contact'=>$num,'password'=>$password, ]);
    //    return Redirect('login');
    $id = DB::table('user')->insertGetId(['username'=>$name,'email'=>$email,'password'=>$password,'actype'=>$actype, ]);
    // print_r ($user_id);
   // $last_id = $query->username;
        // echo ($id);
    //DB::table('user_signup')->insert(['name'=>$name,'email'=>$email,'contact'=>$num,'password'=>$password,'user_id'=>]);
    // return Redirect('login');
    DB::table('user_signup')->insert(['name'=>$name,'email'=>$email,'contact'=>$num,'password'=>$password,'user_id'=>$id]);
    return Redirect('login');
    }
    public function rinsert(Request $request){
        $rname=$request->input('rname');
        $address=$request->input('address');
        $oname=$request->input('oname');
        $email=$request->input('email');
        $lnum=$request->input('land');
        $mnum=$request->input('mob');
        $password=$request->input('pass');
        $status="pending";
        $actype="restaurent";
        $this->validate($request, [
            'rname' => 'required|unique:posts|max:20',
            'address' => 'required',
        ]);
        //$file=$request->file('image')->getClientOriginalName();;
        
         $fileName="filename".time().'.'.request()->image->getClientOriginalExtension();
         $request->file('image')->storeAs('public/profile',$fileName);

    //  DB::table('re_signup')->insert(['rname'=>$rname,'address'=>$address,'oname'=>$oname,'email'=>$email,'lan'=>$lnum,'contact'=>$mnum,'password'=>$password,'status'=>$status,'file'=>$fileName]);
    //    return Redirect('login');

    
        $id = DB::table('user')->insertGetId(['username'=>$rname,'email'=>$email,'password'=>$password,'actype'=>$actype,]);
        DB::table('re_signup')->insert(['rname'=>$rname,'address'=>$address,'oname'=>$oname,'email'=>$email,'lan'=>$lnum,'contact'=>$mnum,'password'=>$password,'status'=>$status,'file'=>$fileName,'user_id'=>$id]);
        return Redirect('login');
    }
    public function logfn(Request $req){
        $email=$req->input('email');
        $password=$req->input('password');
        $data=DB::table('user')->where('email',$email)->first();
        $user='user';
        $admin='admin';
        $adminpass='admin';

     
    if(is_null($data)){
       
        return Redirect('login')->with('alert-success', 'Invalid Email id');
        // return Redirect('login')->with('message', 'Thanks for registering!');
       

    }
    elseif(($email==$data->email)&&($password==$data->password)){
        session()->put('user_id',$data->id);
        session()->put('user_name',$data->username);
        if($user==$data->actype){
          
            return redirect('home');
        //    echo (session()->get('user_id'));
           
        }elseif(($email==$admin)&&($password==$adminpass)){
            return redirect('admin');
        }
          else{
              return redirect('homer');
     }
        
    }
    else{
        return Redirect('login')->with('alert-success', 'Invalid Password');
    }

}
public function logout(){
    session()->forget('user_name');
    session()->forget('user_id');
    session()->flush();
    return view('home');

}
public function rshow(Request $req){
    $id=DB::table('re_signup')->get();
    return view('admin_res',['DATAS'=>$id]);
}
public function delete_res($id){
    DB::table('re_signup')->where('id',$id)->delete();
    return Redirect('admin_res');

}
public function approve_res($id){
    $status="approved";
    DB::table('re_signup')->where('id',$id)->update(['status'=>$status,]);
            
    return Redirect('admin_res');

}
public function ushow(Request $req){
    $id=DB::table('user_signup')->get();
    return view('admin_user',['DATAS'=>$id]);
}
public function delete_user($id){
    DB::table('user_signup')->where('id',$id)->delete();
    return Redirect('admin_user');}

    public function addfoods(Request $request){
        $fcat=$request->input('cat');
        $fname=$request->input('dname');
        $aboutf=$request->input('aboutd');
        $fprice=$request->input('dprice');
        $nonveg='Nonvegetarian';
        $veg='Vegetarian';
        $dessert='DessertFood';
        // $file=$request->input('land')
        $fileName="filename".time().'.'.request()->image->getClientOriginalExtension();
        $request->file('image')->storeAs('public/profile',$fileName);
        
        if($nonveg==$fcat){
            DB::table('item_nonv')->insert(['category'=>$fcat,'fname'=>$fname,'aboutf'=>$aboutf,'price'=>$fprice,'file'=>$fileName,]);
       return Redirect('item');
        }
        else if($veg==$fcat){
            DB::table('item_v')->insert(['category'=>$fcat,'fname'=>$fname,'aboutf'=>$aboutf,'price'=>$fprice,'file'=>$fileName,]);
            return Redirect('item');
        }
        else if($dessert==$fcat){
            DB::table('item_d')->insert(['category'=>$fcat,'fname'=>$fname,'aboutf'=>$aboutf,'price'=>$fprice,'file'=>$fileName,]);
            return Redirect('item');

        }
        else{
            DB::table('item_f')->insert(['category'=>$fcat,'fname'=>$fname,'aboutf'=>$aboutf,'price'=>$fprice,'file'=>$fileName,]);
            return Redirect('item');
        }

        // DB::table('items')->insert(['category'=>$fcat,'fname'=>$fname,'aboutf'=>$aboutf,'price'=>$fprice,'file'=>$fileName,]);
       
    }
    public function nonvegshow(){
        $id=DB::table('item_nonv')->get();
        return view('res_nonveg',['DATAS'=>$id]);
        
    }
    public function vegshow(){
        $id=DB::table('item_v')->get();
        return view('res_veg',['DATAS'=>$id]);
        
    }
    public function desertshow(){
        // $id=DB::table('item_d')->get();
        $id=DB::table('item_d')->skip(0)->take(3)->get();
        return view('res_desert',['DATAS'=>$id]);
        
    }
    public function fastshow(){
        $id=DB::table('item_f')->skip(0)->take(3)->get();
        return view('res_fast',['DATAS'=>$id]);
        
    }

   
public function userprof(){
    $user_id = session()->get('user_id');
    $data=DB::table('user')->where('id',$user_id)->first();
    return view('userprofileedit',['res'=>$data]);


}
    
     
}

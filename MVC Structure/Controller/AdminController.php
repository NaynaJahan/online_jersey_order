<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jersey;
use App\Models\Order;
use App\Models\Category;
use App\Models\Sale;

class AdminController extends Controller
{
    public function user() 
    {
        $data=user::all();
        return view("admin.users", compact("data"));
    }
    public function deleteuser($id) 
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function jerseymenu() 
    {
        $data = jersey::all();
        return view("admin.jerseymenu", compact("data"));
    }

    public function deletemenu($id) 
    {
        $data = jersey::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateview($id) 
    {
        $data = jersey::find($id);
        return view("admin.updateview", compact("data"));
    }

    public function update(Request $request, $id) 
    {
        $data = jersey::find($id);
        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('jerseyimage', $imagename);

        $data->image=$imagename;

        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->description;

        $data->save();

        return redirect()->back();
    }


    public function upload(Request $request) 
    {

        
        $data = new jersey;

        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('jerseyimage', $imagename);

        $data->image=$imagename;

        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->description;

        $data->save();

        return redirect()->back();


    }


    public function order(Request $request) 
    {
        $data = new order;


        $data->name=$request->name;

        $data->email=$request->email;

        $data->phone=$request->phone;

        $data->quantity=$request->quantity;
        
        $data->date=$request->date;

        $data->time=$request->time;

        $data->product=$request->product;

        $data->address=$request->address;

        $data->save();

        return redirect()->back();


    }

    public function viewcategory()
    {
        $data = category::all();
        return view("admin.admincategory", compact("data"));
    }

    public function vieworder()
    {
        if(Auth::id())
        {
            $data = order::all();
            return view("admin.adminorder", compact("data"));
            
        }
        else
        {
            return redirect('login');
        }
        
    }

    public function uploadcategory(Request $request)
    {
        $data = new category;
        
        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('categoryimage', $imagename);

        $data->image=$imagename;

        $data->name=$request->name;
        $data->speciality=$request->speciality;

        $data->save();
        return redirect()->back();

    }

    public function updatecategory($id)
    {
        $data = category::find($id);
        
        return view("admin.updatecategory", compact("data"));

    }

    public function updatejerseycategory(Request $request, $id)
    {
        $data = category::find($id);

        $image = $request->image;

        if($image){
            
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('categoryimage', $imagename);

        $data->image=$imagename;
        }


        $data->name=$request->name;
        $data->speciality=$request->speciality;

        $data->save();
        return redirect()->back();

    }

    public function deletecategory($id) 
    {
        $data = category::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function viewcarts() 
    {
        $data = sale::all();

        return view('admin.viewcarts',  compact('data'));
    }

    public function search(Request $request) 
    {
        $search=$request->search;
        $data = sale::where('name','Like','%'.$search.'%')->orWhere('jerseyname','Like','%'.$search.'%')->get();

        return view('admin.viewcarts',  compact('data'));
    }

}

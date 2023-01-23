<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Records;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function view(){
        // Check for date input
        if (request('date')) {
            $data = Records::where('date','like','%'. date('Y-m-d', strtotime(str_replace('/', '-',request('date')))).'%')->get();
        }
        else{
            $data = Records::all();
        }
        
        return view('view-data', compact('data'));
        
    }

    public function add(){
        return view('add-data');
    }

    public function add_user(){
        return view('new-user');
    }

    public function add_data(Request $request){
        $record = new Records;

        // $validatedData = $request->validate([
        //     'date' => ['required'],
        //     'body' => ['required'],
        // ]);

        $record->date = date('Y-m-d', strtotime(str_replace('/', '-',$request->input('date'))));
        $record->b_soap = $request->input('b_soap');
        $record->d_soap = $request->input('d_soap');
        $record->l_soap = $request->input('l_soap');
        $record->bulb_pieces = $request->input('b_pieces');
        $record->diesel_litre = $request->input('d_litre');
        $record->diesel_cost = $request->input('d_cost');
        $record->maintenance = $request->input('maintenance');
        $record->maintenance_cost = $request->input('m_cost');

       if($record->save()){
        // Session::put('message', 'Data send successful');
        return redirect()->back()->with('message', 'Data send successful');
       }
    //    else{
    //     echo '<h1 style="color:red">Something went wrong</h1>';
    //    }
    }

    public function new_user(Request $request){
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        if (User::where('name', $user->name )->exists()) {
            return redirect()->back()->with('message', 'Username already exist');
        }
        else{
            $user->save();
            return redirect()->back()->with('message', 'user added successful');
        }
    }
}

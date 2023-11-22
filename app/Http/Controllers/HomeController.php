<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

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
  
    public function index(Department $department)
    {
        

        $use = auth()->user()->department; 
        $department = Department::where('name', '$use')->get();
        $folderas = $department->folderas()->whereNull('document')->paginate(10);
        $fileas = $department->folderas()->whereNotNull('document')->paginate(10);

        
        

        return view('user.folder1.index')->with([
            "fileas" => $fileas,
            "folderas" => $folderas,
            "departments" => Department::has("folderas")->get(),
            "department" => $department
          
        ]);
        
    }
    public function test(Department $department)
    {
        

        $use = auth()->user()->department; 
        $department = Department::where('name', '$use')->get();
        

        dd($department);

        
        

        // return view('user.folder1.index')->with([
        //     "fileas" => $fileas,
        //     "folderas" => $folderas,
        //     "departments" => Department::has("folderas")->get(),
        //     "department" => $department
          
        // ]);
        
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Foldera;
use App\Models\Folderb;
use App\Models\Folderc;
use App\Models\Folderd;
use App\Models\Content;
use App\Models\User;

use Illuminate\Support\Facades\DB;

class MainController extends Controller
{    


    public function __construct()
    {
        $this->middleware('auth');
    }
    //departments crude
    // public function department()
    // {
        
    //     $fas = Foldera::where('department_id', '1')->whereNull('document')->orderBy('created_at', 'asc')->get();
    //     $departments = Department::orderBy('created_at', 'asc')->get();
    //     return view('user.departments.index', compact('departments', 'fas'));

    // }
    // public function departmentadd()
    // {
    //     return view('user.departments.add');
    // }
    // public function departmentstore(Request $request)
    // {

    //     $request->validate([
    //         "name" => 'required',
    //     ]);

    //     Department::create([
    //         "name"  => $request->name,
    //     ]);

        
    //     return redirect('/departments')->with([
    //         "success" => "Department Added Succesfully"
    //     ]);
    // }








    //folder1crude
    public function getFolderaByDepartment(Department $department)
    {
        
        if($department->id == auth()->user()->department){
         
               
                $folderas = $department->folderas()->whereNull('document')->where('department_id', auth()->user()->department)->get();
                $fileas = $department->folderas()->whereNotNull('document')->where('department_id', auth()->user()->department)->paginate(10);

            
                
                return view('user.folder1.index', compact('fileas', 'folderas', 'department'));
        }        
        else {
            if(auth()->user()->can('Departments-View')){
                $folderas = $department->folderas()->whereNull('document')->paginate(10);    
                $fileas = $department->folderas()->whereNotNull('document')->paginate(10);

                return view('user.folder1.index')->with([
                    "fileas" => $fileas,
                    "folderas" => $folderas,
                    "departments" => Department::has("folderas")->get(),
                    "department" => $department
                  
                ]);
            }
            else{return view('user.error');}
            
        }
        
     


        
    }

    public function folder1add($id)
    {
        return view('user.folder1.add')->with([

            "department" => Department::findOrFail($id)
        ]);
    }

    public function file1add($id)
    {
        return view('user.folder1.addfile')->with([

            "department" => Department::findOrFail($id)
        ]);
    }
    
    public function folder1store(Request $request)
    {

        $request->validate([
            "name" => 'required',
        ]);
        $id=$request->department_id;
        $name = $request->name;
        if ($request->has("document")) {
           $file = $request->file('document');
           $docName = "files/folder1/" . "$name". "." . $file->getClientOriginalExtension();
           // $imageName = "images/beneficiaries/" . time() . "_" . $file->getClientOriginalName();
           $ext = $file->getClientOriginalExtension();
           $file->move(public_path("files/folder1"), $docName);

            Foldera::create([
                "name"  => $request->name,
                "document"  => $docName,
                "ext"  => $ext,
                "department_id" => $request->department_id,
            ]);
        } 
        else{
            Foldera::create([
                "name"  => $request->name,
                "department_id" => $request->department_id,
            ]); 
        }   

        
        return redirect()->route('getFolderaByDepartment', [$id])->with([
            "success" => "Added Succesfully"
        ]);
    }
    public function folderaedit(Foldera $foldera)
    {  
        return view('user.folder1.edit', compact('foldera'));

    }
    public function folderashare(Foldera $foldera)
    {  
        $use = auth()->user()->department; 

        if(auth()->user()->can('Departments-View')){
            $users = User::all();
            return view('user.folder1.share', compact('foldera', 'users'));
        }  
        else{
            $users = User::where('department', auth()->user()->department)->get();
            return view('user.folder1.share', compact('foldera', 'users')); 
        }  

    }
    public function updatefoldera(Request $request, Foldera $foldera)
    {
       
        if ($request->has("document")) {

            unlink(public_path($foldera->document));
            $name = $request->name;
            $file = $request->file('document');
            $docName = "files/folder1/" . "$name". "." . $file->getClientOriginalExtension();
            // $imageName = "images/beneficiaries/" . time() . "_" . $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $file->move(public_path("files/folder1"), $docName);
 
            $foldera->update([
                 "name"  => $request->name,
                 "document"  => $docName,
                 "ext"  => $ext,
           
            ]);
            return back()->with([
                "success" => "Details updated succesfully"
            ]);
        } 
         else{
            $foldera->update([
                 "name"  => $request->name,
             
             ]); 
            return back()->with([
                "success" => "Detail updated succesfully"
            ]);
         } 
        
    }









    //folder 2 crude

    public function getFolderbByFoldera(Foldera $foldera)
    {
       
        if(auth()->user()->can('Documents_ViewAll')){
            $folderbs = $foldera->folderbs()->whereNull('document')->get();
            $filebs = $foldera->folderbs()->whereNotNull('document')->get();
        }
        else{
            $folderbs = $foldera->folderbs()->whereNull('document')->where('user_id', auth()->user()->id)->get();
            $filebs = $foldera->folderbs()->whereNotNull('document')->where('user_id', auth()->user()->id)->get();
        }

        return view('user.folder2.index')->with([
            "folderbs" => $folderbs,
            "filebs" => $filebs,
            "folderas" => Foldera::has("folderbs")->get(),
            "foldera" => $foldera
          
        ]);
        
    }
    public function folder2add($id)
    {
        return view('user.folder2.add')->with([

            "foldera" => Foldera::findOrFail($id)
        ]);
    }
    public function file2add($id)
    {
        return view('user.folder2.addfile')->with([

            "foldera" => Foldera::findOrFail($id)
        ]);
    }
    public function folder2store(Request $request)
    {

        $request->validate([
            "name" => 'required',
        ]);
        $id = $request->foldera_id;
        $name = $request->name;
        if ($request->has("document")) {
           $file = $request->file('document');
           $docName = "files/folder2/" . "$name". "." . $file->getClientOriginalExtension();
           $ext = $file->getClientOriginalExtension();
           // $imageName = "images/beneficiaries/" . time() . "_" . $file->getClientOriginalName();
           $file->move(public_path("files/folder2"), $docName);

            Folderb::create([
                "name"  => $request->name,
                "document"  => $docName,
                "ext"  => $ext,
                "foldera_id" => $request->foldera_id,
                "department_id" => $request->department_id,
            ]);
        } 
        else{
            Folderb::create([
                "name"  => $request->name,
                "foldera_id" => $request->foldera_id,
                "department_id" => $request->department_id,
            ]);
        } 
        return redirect()->route('getFolderbByFoldera', [$id])->with([
            "success" => "Added Succesfully"
        ]);
           
    }
    public function folderbedit(folderb $folderb)
    {  
        return view('user.folder2.edit', compact('folderb'));

    }
    public function updatefolderb(Request $request, folderb $folderb)
    {
       
    
        if ($request->has("document")) {

            unlink(public_path($folderb->document));
            $name = $request->name;
            $file = $request->file('document');
            $docName = "files/folder2/" . "$name". "." . $file->getClientOriginalExtension();
            // $imageName = "images/beneficiaries/" . time() . "_" . $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $file->move(public_path("files/folder2"), $docName);
 
            $folderb->update([
                 "name"  => $request->name,
                 "document"  => $docName,
                 "ext"  => $ext,
           
            ]);
            return back()->with([
                "success" => "Details updated succesfully"
            ]);
        } 
         else{
            $folderb->update([
                 "name"  => $request->name,
             
             ]); 
            return back()->with([
                "success" => "Detail updated succesfully"
            ]);
         } 
        
    }



    //folder 3 crude
    public function getFoldercByFolderb(Folderb $folderb)
    {    

        if(auth()->user()->can('Documents_ViewAll')){
            $foldercs = $folderb->foldercs()->whereNull('document')->get();
            $filecs = $folderb->foldercs()->whereNotNull('document')->get();
        }
        else{
            $foldercs = $folderb->foldercs()->whereNull('document')->where('user_id', auth()->user()->id)->get();
            $filecs = $folderb->foldercs()->whereNotNull('document')->where('user_id', auth()->user()->id)->get();
        }
       
    
      

        return view('user.folder3.index')->with([
            "foldercs" => $foldercs,
            "filecs" => $filecs,
            "folderbs" => Folderb::has("foldercs")->get(),
            "folderb" => $folderb
          
        ]);
        
    }
    public function folder3add($id)
    {
        return view('user.folder3.add')->with([

            "folderb" => Folderb::findOrFail($id)
        ]);
    }
    public function file3add($id)
    {
        return view('user.folder3.addfile')->with([

            "folderb" => Folderb::findOrFail($id)
        ]);
    }
    public function folder3store(Request $request)
    {

        $request->validate([
            "name" => 'required',
        ]);
        $id = $request->folderb_id;
        $name = $request->name;
        if ($request->has("document")) {
           $file = $request->file('document');
           $docName = "files/folder3/" . "$name". "." . $file->getClientOriginalExtension();
           $ext = $file->getClientOriginalExtension();
           // $imageName = "images/beneficiaries/" . time() . "_" . $file->getClientOriginalName();
           $file->move(public_path("files/folder3"), $docName);

            Folderc::create([
                "document"  => $docName,
                "name"  => $request->name,
                "ext" => $ext,
                "foldera_id" => $request->foldera_id,
                "folderb_id" => $request->folderb_id,
                "department_id" => $request->department_id,
            ]);
        } 
        else{
            Folderc::create([
                "name"  => $request->name,
                "foldera_id" => $request->foldera_id,
                "folderb_id" => $request->folderb_id,
                "department_id" => $request->department_id,
            ]);
        }
        
        return redirect()->route('getFoldercByFolderb', [$id])->with([
            "success" => "Added Succesfully"
        ]);
  
    }
    public function foldercedit(folderc $folderc)
    {  
        return view('user.folder3.edit', compact('folderc'));

    }
    public function updatefolderc(Request $request, folderc $folderc)
    {
       
    
        if ($request->has("document")) {

            unlink(public_path($folderc->document));
            $name = $request->name;
            $file = $request->file('document');
            $docName = "files/folder3/" . "$name". "." . $file->getClientOriginalExtension();
            // $imageName = "images/beneficiaries/" . time() . "_" . $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $file->move(public_path("files/folder3"), $docName);
 
            $folderc->update([
                 "name"  => $request->name,
                 "document"  => $docName,
                 "ext"  => $ext,
           
            ]);
            return back()->with([
                "success" => "Details updated succesfully"
            ]);
        } 
         else{
            $folderc->update([
                 "name"  => $request->name,
             
             ]); 
            return back()->with([
                "success" => "Detail updated succesfully"
            ]);
         } 
        
    }


    //folder 4 crude
     public function getFolderdByFolderc(Folderc $folderc)
     {
        
        if(auth()->user()->can('Documents_ViewAll')){
            $folderds = $folderc->folderds()->get();
        }
        else{
            $folderds = $folderc->folderds()->where('user_id', auth()->user()->id)->get();
        }
        
       
 
         return view('user.folder4.index')->with([
             "folderds" => $folderds,
             "foldercs" => Folderc::has("folderds")->get(),
             "folderc" => $folderc
           
         ]);
         
     }
     public function folder4add($id)
     {
         return view('user.folder4.add')->with([
 
             "folderc" => Folderc::findOrFail($id)
         ]);
     }
     public function folder4store(Request $request)
     {
 
         $request->validate([
             "name" => 'required',
         ]);
         $name = $request->name;
         $id = $request->folderc_id;
         if ($request->has("document")) {
            $file = $request->file('document');
            $ext = $file->getClientOriginalExtension();
            $docName = "files/folder4/" . "$name". "." . $file->getClientOriginalExtension();
            // $imageName = "images/beneficiaries/" . time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("files/folder4"), $docName);

 
         Folderd::create([
             "name"  => $request->name,
             "document"  => $docName,
             "ext"  => $ext,
             "foldera_id" => $request->foldera_id,
             "folderb_id" => $request->folderb_id,
             "folderc_id" => $request->folderc_id,
             "department_id" => $request->department_id,
         ]);
         
        }
         
        return redirect()->route('getFolderdByFolderc', [$id])->with([
            "success" => "Added Succesfully"
        ]);
         
     }
     public function folderdedit(folderd $folderd)
     {  
         return view('user.folder4.edit', compact('folderd'));
 
     }
     public function updatefolderd(Request $request, folderd $folderd)
     {
        
     
         if ($request->has("document")) {
 
             unlink(public_path($folderd->document));
             $name = $request->name;
             $file = $request->file('document');
             $docName = "files/folder4/" . "$name". "." . $file->getClientOriginalExtension();
             // $imageName = "images/beneficiaries/" . time() . "_" . $file->getClientOriginalName();
             $ext = $file->getClientOriginalExtension();
             $file->move(public_path("files/folder4"), $docName);
  
             $folderd->update([
                  "name"  => $request->name,
                  "document"  => $docName,
                  "ext"  => $ext,
            
             ]);
             return back()->with([
                 "success" => "Details updated succesfully"
             ]);
         } 
          else{
             $folderd->update([
                  "name"  => $request->name,
              
              ]); 
             return back()->with([
                 "success" => "Detail updated succesfully"
             ]);
          } 
         
     }



     //content images etc
     public function images(Folderd $folderd, Folderc $folderc, Folderb $folderb, Foldera $foldera)
     {
           
        if(auth()->user()->can('AllContent_View')){
            $images = Content::whereIn('ext', ['jpeg', 'jpg', 'png'])->get();
        }
        else
        { $images = Content::whereIn('ext', ['jpeg', 'jpg', 'png'])->where('user_id', auth()->user()->id)->get();}
         return view('user.content.images')->with([
             "images" => $images,
           
         ]);
         
     }

     public function reports(Folderd $folderd, Folderc $folderc, Folderb $folderb, Foldera $foldera)
     {
         
        
       
        if(auth()->user()->can('AllContent_View')){
            $reports = Content::whereIn('ext', ['pdf','docx', 'doct', 'ppt'])->get();
        }
        else
        { $reports = Content::whereIn('ext', ['pdf','docx', 'doct', 'ppt'])->where('user_id', auth()->user()->id)->get();}
        return view('user.content.reports')->with([
             "reports" => $reports,
           
         ]);
         
     }


     public function analytics(Folderd $folderd, Folderc $folderc, Folderb $folderb, Foldera $foldera)
     {
        
        if(auth()->user()->can('AllContent_View')){
            $analytics = Content::whereIn('ext', ['csv', 'xlsx'])->get();
        }
        else
        { $analytics = Content::whereIn('ext', ['csv', 'xlsx'])->where('user_id', auth()->user()->id)->get();}
        
        return view('user.content.analytics')->with([
        "analytics" => $analytics,
           
        ]);
         
     }

}

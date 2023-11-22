<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('user.dashboard.index');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');
  
   //profile
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');
    Route::put('/profile/update', [App\Http\Controllers\ProfileController::class, 'updateprofile']);


    //folders folder a
    Route::get('/{department}/folders/', [App\Http\Controllers\MainController::class, 'getFolderaByDepartment'])->name('getFolderaByDepartment');
    Route::get('{department_id}/folders/add/', [App\Http\Controllers\MainController::class, 'folder1add'])->name('folder1add');
    Route::get('{department_id}/files/add/', [App\Http\Controllers\MainController::class, 'file1add'])->name('file1add');
    Route::post('/folder/store', [App\Http\Controllers\MainController::class, 'folder1store'])->name('folder1store');
    Route::get('/folder/edit/{foldera}', [App\Http\Controllers\MainController::class, 'folderaedit']);
    Route::get('/tier/share/{foldera}', [App\Http\Controllers\MainController::class, 'folderashare']);
    Route::put('/folder/update/{foldera}', [App\Http\Controllers\MainController::class, 'updatefoldera']);
    



    //sub folders folder b
    Route::get('/{foldera}/subfolders', [App\Http\Controllers\MainController::class, 'getFolderbByFoldera'])->name('getFolderbByFoldera');
    Route::get('{foldera_id}/subfolders/add/', [App\Http\Controllers\MainController::class, 'folder2add'])->name('folder2add');
    Route::get('{foldera_id}/subfiles/add/', [App\Http\Controllers\MainController::class, 'file2add'])->name('file2add');
    Route::post('/subfolder/store', [App\Http\Controllers\MainController::class, 'folder2store'])->name('folder2store');
    Route::get('/1sttier/edit/{folderb}', [App\Http\Controllers\MainController::class, 'folderbedit']);
    Route::put('/1sttier/update/{folderb}', [App\Http\Controllers\MainController::class, 'updatefolderb']);

    //2nd tier sub folders folder c
    Route::get('{folderb}/subfolders/2ndtier/', [App\Http\Controllers\MainController::class, 'getFoldercByFolderb'])->name('getFoldercByFolderb');
    Route::get('{folderb_id}/subfolders/2ndtier/add/', [App\Http\Controllers\MainController::class, 'folder3add'])->name('folder3add');
    Route::get('{folderb_id}/subfiles/2ndtier/add/', [App\Http\Controllers\MainController::class, 'file3add'])->name('file3add');
    Route::post('/subfolder/2ndtier/store', [App\Http\Controllers\MainController::class, 'folder3store'])->name('folder3store');
    Route::get('/2ndtier/edit/{folderc}', [App\Http\Controllers\MainController::class, 'foldercedit']);
    Route::put('/2ndtier/update/{folderc}', [App\Http\Controllers\MainController::class, 'updatefolderc']);

    //3rd tier sub folders
    Route::get('{folderc}/subfolders/3rdtier/', [App\Http\Controllers\MainController::class, 'getFolderdByFolderc'])->name('getFolderdByFolderc');
    Route::get('{folderc_id}/subfolder/3rdtier/add/', [App\Http\Controllers\MainController::class, 'folder4add'])->name('folder4add');
    Route::post('/subfolder/3rdtier/store', [App\Http\Controllers\MainController::class, 'folder4store'])->name('folder4store');
    Route::get('/3rdtier/edit/{folderd}', [App\Http\Controllers\MainController::class, 'folderdedit']);
    Route::put('/3rdtier/update/{folderd}', [App\Http\Controllers\MainController::class, 'updatefolderd']);


    //content
    Route::get('/images', [App\Http\Controllers\MainController::class, 'images'])->name('images');
    Route::get('/reports', [App\Http\Controllers\MainController::class, 'reports'])->name('reports');
    Route::get('/analytics', [App\Http\Controllers\MainController::class, 'analytics'])->name('analytics');


});





// Route::get('/departments', function (){
//     return view('user.department.index');
// })->middleware(['auth', 'role:admin'])->name('admindashboard');

Route::middleware(['auth', 'role:Admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/departments', [App\Http\Controllers\AdminController::class, 'department'])->name('departments');
    Route::get('/departments/add', [App\Http\Controllers\AdminController::class, 'departmentadd'])->name('departmentadd');
    Route::post('/department/store', [App\Http\Controllers\AdminController::class, 'departmentstore'])->name('departmentstore');
    Route::put('/department/update/{department}', [App\Http\Controllers\AdminController::class, 'updatedepartment']);
    
    Route::get('/roles', [App\Http\Controllers\AdminController::class, 'roles'])->name('roles');
    Route::post('/role/store', [App\Http\Controllers\AdminController::class, 'rolestore'])->name('rolestore');
    Route::get('/role/edit/{role}', [App\Http\Controllers\AdminController::class, 'roleedit']);
    Route::put('/role/update/{role}', [App\Http\Controllers\AdminController::class, 'updaterole']);
    Route::put('/role/assign/{role}', [App\Http\Controllers\AdminController::class, 'assignpermission']);
    Route::delete('/role/delete/{role}/{permission}', [App\Http\Controllers\AdminController::class, 'revokepermission']);

    Route::get('/permissions', [App\Http\Controllers\AdminController::class, 'permissions'])->name('permissions');
    Route::post('/permission/store', [App\Http\Controllers\AdminController::class, 'permissionstore'])->name('permissionstore');
    Route::get('/permission/edit/{permission}', [App\Http\Controllers\AdminController::class, 'editpermission']);
    Route::put('/permission/update/{permission}', [App\Http\Controllers\AdminController::class, 'updatepermission']);



    Route::get('/users', [App\Http\Controllers\AdminController::class, 'users'])->name('users');
    Route::post('/user/store', [App\Http\Controllers\AdminController::class, 'userstore'])->name('userstore');
    Route::get('/user/edit/{user}', [App\Http\Controllers\AdminController::class, 'useredit']);
    Route::put('/user/update/{user}', [App\Http\Controllers\AdminController::class, 'updateuser']);
    Route::put('/user/assign/{user}', [App\Http\Controllers\AdminController::class, 'assignrole']);
    Route::delete('/user/delete/{user}/{role}', [App\Http\Controllers\AdminController::class, 'revokerole']);




   
});

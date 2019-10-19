<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* ---------------------------------------- USER -------------------------------------------*/

use fitcenter_admin\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;

Route::get('uindex', function () {
    return view('user.index');
});

Route::get('uabout', function () {
    return view('user.about');
});

Route::get('ublog-sidebar', function () {
    return view('user.blog-sidebar');
});

Route::get('ublog-single', function () {
    return view('user.blog-single');
});

Route::get('uproduct', function () {
    $data = DB::table('add-product')->select('*')->get();
    return view('user.product')->with('data', $data);
});

Route::get('ucontact', function () {
    return view('user.contact');
});

Route::get('ucourse-single', function () {
    return view('user.course-single');
});

Route::get('ucourse', function () {
    return view('user.course');
});

Route::get('uequipment', function () {
    $data = DB::table('add-equipment')->select('*')->get();
    return view('user.equipment')->with('data', $data);
});

Route::get('udoctor', function () {
    $data = DB::table('doctor')->select('*')->get();
    return view('user.doctor')->with('data', $data);
});

Route::get('ucart', function () {
    $data = DB::table('add-product')->select('*')->get();
    return view('user.cart')->with('data', $data);
});

Route::get('ufitnesstips', function () {
    return view('user.fitnesstips');
});

Route::get('ujoinus', function () {
    return view('user.joinus');
});

Route::get('upricing', function () {
    $data = DB::table('packages')->select('*')->get();
    return view('user.pricing')->with('data',$data);
});

Route::get('usendmail', function () {
    return view('user.sendmail');
});

Route::get('utrainer', function () {
    return view('user.trainer');
});

/* ---------------------------------------- ADMIN -------------------------------------------*/

Route::get('/registration', function () {
    return view('admin.registration');
});

Route::post('registration', function (Illuminate\Http\Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email|unique:ducks',
        'password' => 'required',
        'password_confirm' => 'required|same:password',
    ]);

    if ($validator->fails()) {
        return redirect('/admin.registration')
            ->withErrors($validator)
            ->withInput();
    }
   });

Route::get('/login', function () {
    return view('admin.login');
});

Route::post('login', function (Illuminate\Http\Request $request) {
    $validator = Validator::make($request->all(), [
        'username' => 'required|unique:mail|max:125',
        'password' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/|confirmed',
    ]);

    if ($validator->fails()) {
        return redirect('/admin.login')
            ->withErrors($validator)
            ->withInput();
    }
   });

Route::get('/forgotpassword', function () {
    return view('admin.forgotpassword');
});

Route::get('/forgot', function () {
    return view('forgot');
});

Route::get('/resetpassword', function () {
    return view('admin.resetpassword');
});

Route::get('/accounts', function () {
    return view('admin.accounts');
});

Route::get('/add-equipment', function () {
    return view('admin.add-equipment');
});

Route::get('/add-product', function () {
    return view('admin.add-product');
});

Route::get('/add-packages', function () {
    return view('admin.add-packages');
});

Route::get('/packages', function () {
    $data = DB::table('packages')->select('*')->get();
    return view('admin.packages')->with('data', $data);
});

Route::get('/update-packages', function () {
    return view('admin.update-packages');
});

Route::get('/contactdetails', function () {
    $data = DB::table('contact')->select('*')->get();
    return view('admin.contactdetails')->with('data', $data);;
});

Route::get('/update-equipment', function () {
    return view('admin.update-equipment');
});

Route::get('/update-product', function () {
    return view('admin.update-product');
});

Route::get('/update-doctor', function () {
    return view('admin.update-doctor');
});

Route::get('/edit-product', function () {
    return view('admin.accounts');
});

Route::get('/index', function () {
    $data = DB::table('checkoutform')->select('*')->get();
    return view('admin.index')->with('data',$data);
});

Route::get('/pastorder', function () {
    $data = DB::table('pastorder')->select('*')->get();
    return view('admin.pastorder')->with('data',$data);
});

Route::get('/membershipstatus', function () {
    $data = DB::table('membership')->select('*')->get();
    return view('admin.membershipstatus')->with('data',$data);
});

Route::get('/doctorstatus', function () {
    $data = DB::table('appointment')->select('*')->get();
    return view('admin.doctorstatus')->with('data',$data);
});

Route::get('/products', function () {
    $data = DB::table('add-product')->select('*')->get();
    return view('admin.products')->with('data', $data);
});

Route::get('/equipments', function () {
    $data = DB::table('add-equipment')->select('*')->get();
    return view('admin.equipments')->with('data',$data);
});

Route::get('/doctors', function () {
    $data = DB::table('doctor')->select('*')->get();
    return view('admin.doctors')->with('data',$data);
});

Route::get('/doctor', function () {
    return view('admin.doctor');
});

Route::get('/forgot', function () {
    return view('emails.forgot');
});



Route::resource('forgot', 'Controller');

Route::post('/registration','Controller@insert');

Route::post('/after','Controller@loginafter');

Route::post('/forgotpassword', 'controller@sendEmail');
Route::post('/resetpassword','Controller@reset');

Route::post('/add-equipment','Controller@equipmentinsert');
Route::post('/update-equipment','Controller@equipmentupdate');
Route::get('/equipments/{id}', 'Controller@equipmentdestroy');

Route::post('/add-product','Controller@productinsert');
Route::post('/update-product','Controller@productupdate');
Route::get('/products/{id}', 'Controller@destroy');

Route::post('/doctor','Controller@doctorinsert');
Route::post('/update-doctor','Controller@doctorupdate');
Route::get('/doctors/{id}', 'Controller@doctordestroy');

Route::post('/add-packages','Controller@packagesinsert');
Route::post('/update-packages','Controller@packagesupdate');
Route::get('/packages/{id}', 'Controller@packagesdestroy');


Route::post('/search','Controller@search');
Route::post('/searchorder','Controller@searchorder');

Route::get('/checkoutform/{id}', 'Controller@checkoutform');
Route::get('/equicheckoutform/{id}', 'Controller@equicheckoutform');
Route::get('/doccheckoutform/{id}', 'Controller@doccheckoutform');

Route::post('/accounts','Controller@accountupdate');

Route::post('/cart','Controller@cart');
Route::get('generatePDF','Controller@pdf');

Route::post('/checkoutform/{id}','Controller@orderinsert');
Route::post('/equicheckoutform/{id}','Controller@orderinsert2');
Route::post('/doccheckoutform/{id}','Controller@orderdoctor');
Route::get('/memcheckout/{id}','Controller@memcheckout');

Route::get('/changestatus/{id}','Controller@changestatus');
Route::post('/membership/{p_id}','Controller@membership');

Route::post('/contact','Controller@contact');
Route::get('/contact/{id}', 'Controller@contactdetailsdestroy');
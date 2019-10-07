<?php

namespace fitcenter_admin\Http\Controllers;
use Redirect;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers;
use App\user;
use Mail;
use PDF;
use DB;

class Controller extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function insert(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');

        $data = array('name'=>$name,'email'=>$email,'password'=>$password,'phone'=>$phone);

        DB::table('registration')->insert($data);

        return redirect('/login');
    }


    function loginafter(Request $request)
    {
        $email = $request->input('username');
        $password = $request->input('password');
        $data=DB::select('select id from registration where email=? and password=?',[$email,$password]);

        if(count($data))
        {
          return redirect('/index');
        }
        else 
        {
           // $errors = new MessageBag(['password' => ['Email and/or password invalid.']]);
            //return Redirect::back()->withErrors($errors)->withInput(Input::except('password'));
            return back()->withErrors('error', 'Wrong Login Details');

        }
          

    }

    function productinsert(Request $request)
    {
       $productname = $request->input('name');
       $description = $request->input('description');
       $price = $request->input('price');
       $expireydate = $request->input('expire_date');
       $stock = $request->input('stock');
       
       $image = $request->file('image');
       $extension = $image->getClientOriginalExtension();
       Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
       $temp = $image->getFilename().'.'.$extension;

       $date = $expireydate;
       $newformat = date('Y-m-d', strtotime(str_replace('-','/', $date)));
       
       $data = array('productname'=>$productname,'description'=>$description,'price'=>$price,'expireydate'=>$newformat,'stock'=>$stock,'image'=>$temp);

       DB::table('add-product')->insert($data);
       
       return redirect('/products');
    }

    function productupdate(Request $request)
    {
        $productname = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $expireydate = $request->input('expire_date');
        $stock = $request->input('stock');
       
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
        $temp = $image->getFilename().'.'.$extension;

        $date = $expireydate;
        $newformat = date('Y-m-d', strtotime(str_replace('-','/', $date)));

        $data = array('productname'=>$productname,'description'=>$description,'price'=>$price,'expireydate'=>$newformat,'stock'=>$stock,'image'=>$temp);

        DB::table('add-product')->where('productname',$productname)->update($data);

        return redirect('/products');
    }
  

    function equipmentinsert(Request $request)
    {
       $equipmentname = $request->input('name');
       $description = $request->input('description');
       $price = $request->input('price');
       $stock = $request->input('stock');
       
       $image = $request->file('image');
       $extension = $image->getClientOriginalExtension();
       Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
       $temp = $image->getFilename().'.'.$extension;

       $data = array('equipmentname'=>$equipmentname,'description'=>$description,'price'=>$price,'stock'=>$stock,'image'=>$temp);

       DB::table('add-equipment')->insert($data);
       
       return redirect('/equipments');
    }

    function equipmentupdate(Request $request)
    {
        $equipmentname = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $stock = $request->input('stock');
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
        $temp = $image->getFilename().'.'.$extension;

        $data = array('equipmentname'=>$equipmentname,'description'=>$description,'price'=>$price,'stock'=>$stock,'image'=>$temp);

        DB::table('add-equipment')->where('equipmentname',$equipmentname)->update($data);

        return redirect('/equipments');
    }

    function doctorinsert(Request $request)
    {
       $doctorname = $request->input('name');
       $email = $request->input('email');
       $specification = $request->input('specification');
       $consultancycharge = $request->input('consultancycharge');

       $image = $request->file('image');
       $extension = $image->getClientOriginalExtension();
       Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
       $temp = $image->getFilename().'.'.$extension;

       $avaibility = $request->input('avaibility');
       

       $data = array('doctorname'=>$doctorname,'email'=>$email,'specification'=>$specification,'consultancycharge'=>$consultancycharge,'image'=>$temp,'avaibility'=>$avaibility);


       DB::table('doctor')->insert($data);
       
       return redirect('/doctors');
    }

    function packagesinsert(Request $request)
    {
       $packagename = $request->input('name');
       $price = $request->input('price');
       $validity = $request->input('validity');
       $toverview = $request->input('toverview');
       $foundation = $request->input('foundation');
       $begineer = $request->input('begineer');
       $olympic = $request->input('olympic');
       $steam = $request->input('steam');

       $data = array('name'=>$packagename,'price'=>$price,'vadility'=>$validity,'Training_overview'=>$toverview,'Foundation_Training'=>$foundation,'Begineers_Classes'=>$begineer,'Olympic_weighlifting'=>$olympic,'Steam_bath_and_Sulu_bath'=>$steam);

       DB::table('packages')->insert($data);
       
       return redirect('/products');
    }

    function doctorupdate(Request $request)
    {
        $doctorname = $request->input('name');
        $email = $request->input('email');
        $specification = $request->input('specification');
        $consultancycharge = $request->input('consultancycharge');
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
        $temp = $image->getFilename().'.'.$extension;
        $avaibility = $request->input('avaibility');

        $data = array('doctorname'=>$doctorname,'email'=>$email,'specification'=>$specification,'consultancycharge'=>$consultancycharge,'image'=>$temp,'avaibility'=>$avaibility);

        DB::table('doctor')->where('doctorname',$doctorname)->update($data);

        return redirect('/doctors');
    }

    public function destroy($id) {

    
        $data = DB::table('add-product')->where('id',$id)->delete();
    
        return redirect('/products');
    
    }

    public function equipmentdestroy($id) {

    
        $data = DB::table('add-equipment')->where('id',$id)->delete();
    
        return redirect('/equipments');
    
    }

    public function doctordestroy($id) {

    
        $data = DB::table('doctor')->where('id',$id)->delete();
    
        return redirect('/doctors');
    
    }



    function accountupdate(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');

        $data = array('name'=>$name,'email'=>$email,'password'=>$password);

        DB::table('registration')->where('phone',$phone)->update($data);

        return redirect('/accounts');
    }

    

 

    public function sendEmail(Request $request)
    {

        $email = $request->input('email');


        $user=DB::select('select * from registration where email=?',[$email]);

       if($user == null){
            return redirect()->back()->with(['error' => 'Email not Exists']);
        }

        $user = array('name'=>"Ogbonna Vitalis(sender_name)", "body" => "A test mail");

        Mail::send( 'emails.forgot', ['title' => 'hey', 'content' => 'hello'], function ($m) use ($email) {
            

            $m->from('nisuprajapati6974@gmail.com', 'nisarg');

            $m->to($email)->subject('Fit-Center');

        });

        return redirect('/login');
        // your response
    }

    function reset(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $data = array('email'=>$email,'password'=>$password);

        DB::table('registration')->where('email',$email)->update($data);

        return redirect('/login');
    }

    function orderinsert(Request $request,$id)
    {
       $name = $request->input('name');
       $email = $request->input('email');
       $phone = $request->input('phone');
       $apartment = $request->input('apartment');
       $area = $request->input('area');
       $landmark = $request->input('landmark');
       $city = $request->input('city');
       $pincode = $request->input('pincode');
       $state = $request->input('state');
       
       $datap = DB::table('add-product')->where('id',$id)->get();
     

       foreach ($datap as $p) 
       {
        $pname=$p->productname;
        $pprice=$p->price;
       }

       $data = array('name'=>$name,'email'=>$email,'phone'=>$phone,'apartment'=>$apartment,'area'=>$area,'landmark'=>$landmark,'city'=>$city,'pincode'=>$pincode,'state'=>$state,'productname'=>$pname,'price'=>$pprice,'orderstatus'=>'pending');

       DB::table('checkoutform')->insert($data);

       
       Mail::send( 'emails.payment', ['title' => 'hey', 'content' => 'hello'], function ($m) use ($email) {
            

        $m->from('nisuprajapati6974@gmail.com', 'nisarg');

        $m->to($email)->subject('Your order detail!');

    });

       $data = DB::table('checkoutform')->where('email',$email)->get();

       return view('user.paymentdetails')->with('data', $data);
    }

    function orderinsert2(Request $request,$id)
    {
       $name = $request->input('name');
       $email = $request->input('email');
       $phone = $request->input('phone');
       $apartment = $request->input('apartment');
       $area = $request->input('area');
       $landmark = $request->input('landmark');
       $city = $request->input('city');
       $pincode = $request->input('pincode');
       $state = $request->input('state');
       
       $datap = DB::table('add-equipment')->where('id',$id)->get();
     

       foreach ($datap as $p) 
       {
        $pname=$p->equipmentname;
        $pprice=$p->price;
       }

       $data = array('name'=>$name,'email'=>$email,'phone'=>$phone,'apartment'=>$apartment,'area'=>$area,'landmark'=>$landmark,'city'=>$city,'pincode'=>$pincode,'state'=>$state,'productname'=>$pname,'price'=>$pprice,'orderstatus'=>'pending');

       DB::table('checkoutform')->insert($data);
       
       Mail::send( 'emails.payment', ['title' => 'hey', 'content' => 'hello'], function ($m) use ($email) {
            

        $m->from('nisuprajapati6974@gmail.com', 'nisarg');

        $m->to($email)->subject('Your oder details!');

    });

       $data = DB::table('checkoutform')->where('email',$email)->get();
       return view('user.paymentdetails')->with('data', $data);
    }

    function orderdoctor(Request $request,$id)
    {
       $name = $request->input('name');
       $email = $request->input('email');
       $phone = $request->input('phone');
       $apartment = $request->input('apartment');
       $area = $request->input('area');
       $landmark = $request->input('landmark');
       $city = $request->input('city');
       $pincode = $request->input('pincode');
       $state = $request->input('state');
       
       $datap = DB::table('doctor')->where('id',$id)->get();
     

       foreach ($datap as $p) 
       {
        $pname=$p->doctorname;
        $pprice=$p->consultancycharge;
       }

       $data = array('name'=>$name,'email'=>$email,'phone'=>$phone,'apartment'=>$apartment,'area'=>$area,'landmark'=>$landmark,'city'=>$city,'pincode'=>$pincode,'state'=>$state,'doctorname'=>$pname,'consultancycharge'=>$pprice);

       DB::table('appointment')->insert($data);
       
       Mail::send( 'emails.payment', ['title' => 'hey', 'content' => 'hello'], function ($m) use ($email) {
            

        $m->from('nisuprajapati6974@gmail.com', 'nisarg');

        $m->to($email)->subject('Your Doctor Details !');

    });

       return redirect('/uindex');
    }

    function cart(Request $request)
    {
       $productname = $request->input('name');
       $price = $request->input('price');
       
       $data = array('productname'=>$productname,'price'=>$price,);

       DB::table('add-product')->insert($data);
       
       return view('user.ucart')->with('data', $data);
    }

    function  pdf(Request $request)
    {
        $user = UserDetail::find($request);
  
        $pdf = PDF::loadView('pdf', compact('user'));
        return $pdf->download('invoice.pdf');
  
      }

      public function checkoutform($id) {

    
        $data = DB::table('add-product')->where('id',$id)->get();
    
        return view('user.checkoutform')->with('data',$data);
    
    }

    public function equicheckoutform($id) {

    
        $data = DB::table('add-equipment')->where('id',$id)->get();
    
        return view('user.equicheckoutform')->with('data',$data);
    
    }

    public function doccheckoutform($id) {

    
        $data = DB::table('doctor')->where('id',$id)->get();
    
        return view('user.doccheckoutform')->with('data',$data);
    
    }


    public function changestatus($id) {

    
        $data = DB::table('checkoutform')->where('id',$id)->get();
        
        if($data[0]->orderstatus=='pending')
        {
           $d = array('name'=>$data[0]->name,'email'=>$data[0]->email,'phone'=>$data[0]->phone,'apartment'=>$data[0]->apartment,'area'=>$data[0]->area,'landmark'=>$data[0]->landmark,'city'=>$data[0]->city,'pincode'=>$data[0]->pincode,'state'=>$data[0]->state,'productname'=>$data[0]->productname,'price'=>$data[0]->price,'orderstatus'=>'active');

            DB::table('checkoutform')->where('id',$id)->update($d);
            return redirect('/index');

        }
        else
        {
         $d = array('name'=>$data[0]->name,'email'=>$data[0]->email,'phone'=>$data[0]->phone,'apartment'=>$data[0]->apartment,'area'=>$data[0]->area,'landmark'=>$data[0]->landmark,'city'=>$data[0]->city,'pincode'=>$data[0]->pincode,'state'=>$data[0]->state,'productname'=>$data[0]->productname,'price'=>$data[0]->price,'orderstatus'=>'delievred','oder_id'=>$data[0]->id);
         DB::table('pastorder')->insert($d);

         DB::table('checkoutform')->where('id',$id)->delete();

         return redirect('/index');

       
        }
    }

  }


  


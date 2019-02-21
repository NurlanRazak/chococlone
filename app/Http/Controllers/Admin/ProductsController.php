<?php

namespace App\Http\Controllers\Admin;
use App\Product;
use App\images;
use App\deals;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class ProductsController extends Controller
{
    public function index()
    {
    	$objProduct = new Product();
    	$products = $objProduct->get();
    	return view('admin.products.index', ['products' => $products]); 
    }
        public function showItem()
    {
    	return view('admin.products.picturesadd'); 
    }
     public function addImage(Request $request){
    	try{
    		    			dd($request);
$objProduct = new images();
    	$products = $objProduct->get();
    		$filename=$request->file('addimage')->getClientOriginalName();
    		 $request->file('addimage')->storeAs('public/img',$filename);
    		 $picture=new images;
    		
    		 $picture->path=$filename;
    		 $picture->title=$filename;
    		 $picture->id_img=Input::get("productSelect");
    		 $picture->save();

    		 print_r($picture);
    		# code...
    	}
    	catch(ValidationException $e){
    	\Log::error($e->getMessage());
    	return back()->with('error', $e->getMessage());
    }
    }



    public function addProduct()
    {    $var=deals::all();
  return view('admin.products.picturesadd',compact('var'));

}
    
        public function showform()
    {    
  return view('admin.products.add');


    }    public function addRequestProduct(Request $request)
    {

    	try{
    		$this->validate($request, [
    			'name' => 'required'
    			
    		]);
    	$objProduct = new Product();
    	$objProduct = $objProduct->create([
    		'name' => $request->input('name'),
    		'description' => $request->input('description'),
    		'price' => $request->input('price'),
    		
    	]);
    
    
    	if($objProduct){
    		/*$filename=$request->file('addimage')->getClientOriginalName();
    		 $request->file('addimage')->storeAs('public/img',$filename);
    		 $picture=new images();
    		 $picture->path=$filename;
    		 $picture->title=$filename;
    		 $picture->id_deals=Input::get("prod_id");
    		

    		 dd($picture);*/
    			//print_r($objProduct);
    		
    	}					
    		/* $request->file('addimage')->storeAs('public/img',$filename);
    		 $picture=new images();
    		 $picture=$picture->create([
    		 'path'=>$request->input($filename),
    		 'title'=>$request->input($filename),
    		 'id_deals'=>$request->input('prod_id')

    		 ]);
             
    		}*/
    		return redirect('/admin/createimage');
    	//return back()->with('error', "Product not added");
    }   catch(ValidationException $e){
    	\Log::error($e->getMessage());
    	return back()->with('error', $e->getMessage());
    }
 
    }
    public function storePicture(Request $request){

    
        if($request->hasFile('addimage')){
        	$filename=$request->file('addimage')->getClientOriginalName();
    		 $request->file('addimage')->storeAs('public/img',$filename);
    	     $picture=new images();
    		 $picture->path=$filename;
    		 $picture->title=$filename;
    		 $picture->id_deals=Input::get("prod_id");
    		 $picture->save();
    	     return redirect('admin/products'); 
         }
    	}
    public function editProduct()
    {

    }
    public function deleteProduct()
    {
    	if($request->ajax()){
    		
    	}
    }
   }

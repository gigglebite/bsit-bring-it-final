<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Exception;
use Session;
use Auth;
use Log;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminControls(){

        $user = Auth::user();


        if (Auth::user()->role_as == '1'){
            Log::info('listing the tables');
        $categories = Category::all();
        $users = User::all();
        $products = Product::all();
        $orders = Order::all();
        return view ('/admin/admin', ['products' => $products, 'orders' => $orders, 'users' => $users, 'categories' => $categories]);
        } else {
            Session::flash('error', 'Only administrator users are allowed to open this page');
        }

        return redirect('/welcome');
    }

    // CRUD for the Users table

    public function showEditFormUsers($id)
    {
            $user = User::find($id);
            if (!is_null($user)){
                return view('admin/edit-user', compact('user'));
            }
            Session::flash('error', 'We cannot find the record you are searching for.');
            return redirect()->back();
    }
    
    
    public function saveUserChanges(Request $request)
    {
    
        $validated = $request->validate([
            'role_as' => 'required|numeric|between:1,2',
            'name' => 'required|max:255',
            'email' => 'required|max: 150',
        ]);
    
    try {
        $id = $request->id;
        $user = User::find($id);
        $user->update([
            'role_as' => $request->role_as,
            'name' => $request->name,
            'email' => $request->email
    
        ]);
    
        Session::flash('message', 'Successfully updated book information!');
    } catch (Exception $e) {
        Session::flash('error', 'Something went wrong, please try again later!');
    }
        return redirect('/admin/admin');
    
    
    }
    
    
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
    
        Session::flash('message', 'Successfully removed user');
        return redirect('/admin/admin');
    }

    // CRUD for the Products table

    public function showEditFormProduct($id)
    {
            $product = Product::find($id);
            if (!is_null($product)){
                return view('/admin/edit-product', compact('product'));
            }
            Session::flash('error', 'We cannot find the record you are searching for.');
            return redirect()->back();
    }
    
    public function showNewFormProduct()
    {
        return view('/admin/new-product-form');
    }
    
    public function saveProductChanges(Request $request)
    {
    
    
        $validated = $request->validate([
            'imagePath' => 'required',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required'

    
        ]);
    
    
    
    try {
        $id = $request->id;
        $product = Product::find($id);
        $product->update([
            'imagePath' => $request->imagePath,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category
    
        ]);
    
        Session::flash('message', 'Successfully updated product information!');
    } catch (Exception $e) {
        Session::flash('error', 'Something went wrong, please try again later!');
    }
        return redirect('/admin/admin');
    
    
    }
    
    public function saveNewProduct (Request $request)
    {
    
        $validated = $request->validate([
            'imagePath' => 'required',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required'

    
        ]);
    
        try {
    
            $product->update([
                'imagePath' => $request->imagePath,
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'category' => $request->category
        
            ]);
            if (!is_null($product)){
                Session::flash('message','Successfully added a new product information');
            } else {
                throw new Exception('Unable to create a new product information');
            }
    
        } catch (Exception $e) {
            Session::flash('error', 'Something went wrong, please try again later.');
        }
    
    
        return redirect('/admin/admin');
    }
    
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
    
        Session::flash('message', 'Successfully removed product');
        return redirect('/admin/admin');
    }

    // CRUD for the Categories Table

    public function showEditFormCategory($id)
{
        $category = Category::find($id);
        if (!is_null($category)){
            return view('admin/edit-category', compact('category'));
        }
        Session::flash('error', 'We cannot find the record you are searching for.');
        return redirect()->back();
}

public function showNewFormCategory()
{
    return view('admin/new-category-form');
}

public function saveCategoryChanges(Request $request)
{

    $validated = $request->validate([
        'imagePath' => 'required|max:150',
        'category' => 'required|max:255',

    ]);


try {
    $id = $request->id;
    $category = Category::find($id);
    $category->update([
        'imagePath' => $request->imagePath,
        'category' => $request->category

    ]);

    Session::flash('message', 'Successfully updated category information!');
} catch (Exception $e) {
    Session::flash('error', 'Something went wrong, please try again later!');
}
    return redirect('/admin/admin');


}

public function saveNewCategory (Request $request)
{

    $validated = $request->validate([
        'imagePath' => 'required|max:150',
        'category' => 'required|max:255',

    ]);

    try {

        $cat = Category::create([
            'imagePath' => $request->imagePath,
            'category' => $request->category
        ]);
        if (!is_null($cat)){
            Session::flash('message','Successfully added a new category information');
        } else {
            throw new Exception('Unable to create a new category information');
        }

    } catch (Exception $e) {
        Session::flash('error', 'Something went wrong, please try again later.');
    }


    return redirect('/admin/admin');
}

public function deleteCategory($id)
{
    $category = Category::find($id);
    $category->delete();

    Session::flash('message', 'Successfully removed category');
    return redirect('/admin/admin');
}



public function charts(){
    $data = Product::select(
        'category',
        DB::raw('COUNT(id) AS category_size')
    )
    ->groupBy('category')
    ->orderBy('category_size', 'DESC')
    ->get();

    return view('/admin/chart', compact('data'));

}
}

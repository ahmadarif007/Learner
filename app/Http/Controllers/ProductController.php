<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller
{
    public function addProduct() {
        return view('admin.product.addProduct');
    }

    public function saveProduct(Request $request) {
        $this->validate($request, [
            'productName' => 'required',
            'productImage' => 'required',
        ]);

        $productImage = $request->file('productImage');
        $name = $productImage->getClientOriginalName();
        $uploadPath = 'public/productImage/';
        $productImage->move($uploadPath, $name);
        $imageUrl = $uploadPath.$name;
        $this->saveProductInfo($request, $imageUrl);
        return redirect('/add/product')->with('message', 'Product Info Save Successfully');
    }

    protected function saveProductInfo($request, $imageUrl) {
        $product = new Product();
        $product->productName = $request->productName;
        $product->productDescription = $request->productDescription;
        $product->productImage = $imageUrl;
        $product->save();
    }

    public function manageProduct() {
        $products = DB::table('products')
        ->select('products.*')
        ->get();
        return view('admin.product.manageProduct', ['products' => $products]);
    }

    public function viewProduct($id) {
        $productById = DB::table('products')
                ->where('products.id', $id)
                ->first();
        return view('admin.product.viewProduct', ['productById' => $productById]);
    }

    public function editProduct($id){
        $productById = Product::where('id',$id)->first();
        return view('admin.product.editProduct', ['productById' => $productById ]);
    }


    public function updateProduct(Request $request) {
        $imageUrl = $this->imageExistStatus($request);
        //$product = Product::find($request->id);
        $product = Product::find($request->productId);
        $product->productName = $request->productName;
        $product->productDescription = $request->productDescription;
        $product->productImage = $imageUrl;
        $product->save();
        
        return redirect('/manage/product')->with('message','Update Product Info Successfully');
    }

    private function imageExistStatus($request) {
        $productById = Product::where('id', $request->productId)->first();
        $productImage = $request->file('productImage');
        if ($productImage) {
            //unlink($productById->productImage);
            $name = $productImage->getClientOriginalName();
            $uploadPath = 'public/productImage/';
            $productImage->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        } else {
            $imageUrl = $productById->productImage;
        }
        return $imageUrl;
    }

    
    public function deleteProduct($id){
        $deleteProductById = Product::find($id);
        //$deleteProductById = Product::where('id',$id)->first();
        //$deleteProductById = Product::where('id',$id);
        $deleteProductById->delete();
        return redirect('/manage/product')->with('message','Delete Product Info Successfully');
    }
}

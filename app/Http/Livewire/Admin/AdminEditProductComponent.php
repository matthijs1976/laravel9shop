<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{
    
        use WithFileUploads;        

    public $product_id;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $art_num;
    public $stock_status = 'instock';
    public $quantity;
    public $featured =0;
    public $image;
    public $category_id;
    public $newimage;

    public function mount($product_id)
    {
        $product = Product::find($product_id);
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->short_description = $product->short_description;
        $this->description = $product->description;
        $this->regular_price = $product->regular_price;
        $this->sale_price = $product->sale_price;
        $this->art_num = $product->art_num;
        $this->stock_status  = $product->stock_status;
        $this->quantity = $product->quantity;
        $this->featured = $product->featured;
        $this->image = $product->image;
        $this->category_id = $product->category_id;
    }
    

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updateProduct()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required',
            'short_description'=>'required',
            'description'=>'required',
            'regular_price'=>'required',
            'sale_price'=>'required',
            'art_num'=>'required',
            'stock_status'=>'required',
            'quantity'=>'required',
            'featured'=>'required',
            'image'=>'required',
            'category_id'=>'required'
         ]);

        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->art_num = $this->art_num;
        $product->stock_status = $this->stock_status;
        $product->quantity = $this->quantity;
        $product->featured = $this->featured;
        if($this->newimage)
        {
            unlink('assets/imgs/producten/'.$product->image);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('producten',$imageName);
            $product->image = $imageName;
        }
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message','Product Is Aangepast!');
    }
     
    public function render()
    {       
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories]);
    }
}

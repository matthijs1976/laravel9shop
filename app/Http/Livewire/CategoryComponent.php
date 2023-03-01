<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;

class CategoryComponent extends Component
{
    use WithPagination;
    public $pageSize = 12;
    public $orderBy= "Default";
    public $slug;

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        session()->flash('success_message', 'Toegevoegd Aan Winkelmandje');
        return redirect()->route('shop.cart');
    }
    public function changePageSize($size)
    {
        $this->pageSize = $size;
    }

    public function changeOrderBy($order)
    {
        $this->orderBy= $order;
    }

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $category = Category::where('slug',$this->slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;
        if($this->orderBy== 'Laag->Hoog')
        {
            $products = Product::where('category_id',$category_id)->orderBy('regular_price', 'ASC')->paginate($this->pageSize);
        }
        else if($this->orderBy== 'Hoog->Laag')
        {
            $products = Product::where('category_id',$category_id)->orderBy('regular_price', 'DESC')->paginate($this->pageSize); 
        }
        else if($this->orderBy== 'Nieuwste')
        {
            $products = Product::where('category_id',$category_id)->orderBy('created_at', 'DESC')->paginate($this->pageSize); 
        }
        else{
            $products = Product::where('category_id',$category_id)->paginate($this->pageSize);
        }        
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.category-component',['products'=>$products,'categories'=>$categories,'$category_name'=>$category_name]);
    }
}

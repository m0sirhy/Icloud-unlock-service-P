<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Item;
use Image;
class ItemController extends Controller
{
   
        public function index(Request $request)
        {
            $categories = Category::all();
    
            $items = Item::latest()->paginate(5);
    
            return view('dashboard.items.index', compact('categories', 'items'));
    
        }//end of index
    
        public function create()
        {
            $categories = Category::all();
            return view('dashboard.items.create', compact('categories'));
    
        }//end of create
    
        public function store(Request $request)
        {
    
           
    
            $request->validate([
                'stock' => 'required'
                ]
            );
    
            $request_data = $request->all();
    
            if ($request->image) {
    
                Image::make($request->image)
                  
                    ->save(public_path('uploads/item_images/' . $request->image->hashName()));
    
                $request_data['image'] = $request->image->hashName();
    
            }//end of if
    
            Item::create($request_data);
            session()->flash('success', __('site.added_successfully'));
            return redirect()->route('dashboard.items.index');
    
        }//end of store
    
        public function edit(Item $item)
        {
            $categories = Category::all();
            return view('dashboard.items.edit', compact('categories', 'item'));
    
        }//end of edit
    
        public function update(Request $request, Item $item)
        {
           
            $request->validate([
    
            ]);
    
            $request_data = $request->all();
    
            if ($request->image) {
    
                if ($item->image != 'default.png') {
    
                    Storage::disk('public_uploads')->delete('/item_images/' . $item->image);
                        
                }//end of if
    
                Image::make($request->image)
                   
                    ->save(public_path('uploads/item_images/' . $request->image->hashName()));
    
                $request_data['image'] = $request->image->hashName();
    
            }//end of if
            
            $item->update($request_data);
            session()->flash('success', __('site.updated_successfully'));
            return redirect()->route('dashboard.items.index');
    
        }//end of update
    
        public function destroy(Item $item)
        {
            if ($item->image != 'default.png') {
    
                Storage::disk('public_uploads')->delete('/item_images/' . $item->image);
    
            }//end of if
    
            $item->delete();
            session()->flash('success', __('site.deleted_successfully'));
            return redirect()->route('dashboard.items.index');
    
        }//end of destroy
    }
    
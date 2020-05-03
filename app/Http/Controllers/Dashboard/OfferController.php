<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Offer;

use Image;
class OfferController extends Controller
{

   
    public function index(Request $request)
        {
    
            $offers = Offer::latest()->paginate(5);
    
            return view('dashboard.offers.index', compact( 'offers'));
    
        }//end of index
    
        public function create()
        {
            return view('dashboard.offers.create');
    
        }//end of create
    
        public function store(Request $request)
        {
    
           
    
            $request->validate([
                'desc' => 'required',
             
                ]
            );
    
            $request_data = $request->all();
    
            if ($request->image) {
    
                Image::make($request->image)
                ->resize(134, 134,null)
                  
                    ->save(public_path('uploads/offer_images/' . $request->image->hashName()));
    
                $request_data['image'] = $request->image->hashName();
    
            }//end of if
    
            Offer::create($request_data);
            session()->flash('success', __('site.added_successfully'));
            return redirect()->route('dashboard.offers.index');
    
        }//end of store
    
        public function edit(Offer $offer)
        {
            return view('dashboard.offers.edit', compact( 'Offer'));
    
        }//end of edit
    
        public function update(Request $request, Offer $offer)
        {
           
            $request->validate([
                'desc' => 'required',
                
            ]);
    
            $request_data = $request->all();
    
            if ($request->image) {
    
                if ($offer->image != 'default.png') {
    
                    Storage::disk('public_uploads')->delete('/offer_images/' . $offer->image);
                        
                }//end of if
    
                Image::make($request->image)
                ->resize(134, 134,null)
                   
                    ->save(public_path('uploads/offer_images/' . $request->image->hashName()));
    
                $request_data['image'] = $request->image->hashName();
    
            }//end of if
            
            $offer->update($request_data);
            session()->flash('success', __('site.updated_successfully'));
            return redirect()->route('dashboard.offers.index');
    
        }//end of update
    
        public function destroy(Offer $offer)
        {
            if ($offer->image != 'default.png') {
    
                Storage::disk('public_uploads')->delete('/offer_images/' . $offer->image);
    
            }//end of if
    
            $Offer->delete();
            session()->flash('success', __('site.deleted_successfully'));
            return redirect()->route('dashboard.offers.index');
    
        }//end of destroy
}

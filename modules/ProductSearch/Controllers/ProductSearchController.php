<?php

namespace Modules\ProductSearch\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use OpenFoodFacts;
use App\Helpers\CollectionHelper;
use App\Http\Controllers\Controller;
use Modules\ProductSearch\Models\Product;

class ProductSearchController extends Controller
{
    public function index() {
        return view('product_search::index');
    }

    public function result(Request $request) {
        $searchRequest = $request->searchRequest;
        try {
            if(is_numeric($searchRequest)) {
                $items = [OpenFoodFacts::find($searchRequest)];
            } else {
                $items = CollectionHelper::paginate(OpenFoodFacts::find($searchRequest),20);
            }

            if(count($items) == 0)
                throw new \Exception('Nothig found. Please try again with some different keywords.');
            
        } catch (\Exception $error) {
            return Redirect::back()->withErrors([$error->getMessage()]);
        }
        
        return view('product_search::result', compact('searchRequest','items'));
    }

    public function saveProduct(Request $request) {
        $saved = false;
        $product = Product::firstOrNew(['api_id' => $request->api_id]);
        $product->fill($request->all());
        if($product->save()) $saved = true;
        return response()->json(compact('saved'));
    }

}

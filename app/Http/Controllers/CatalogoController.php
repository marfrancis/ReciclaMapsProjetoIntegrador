<?php

namespace App\Http\Controllers;

use App\Category;
use App\Module;
use App\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        if (!request('categoria_slug')) {
            return view(str_replace('index', 'categories', request()->route()->getAction()['as']));
        }

        $filters = $this->applyFilters(request());

        if (count(request()->all()) === 0) {
            return view(str_replace('index', 'categories', request()->route()->getAction()['as']), [
                'categories'  => Category::all(),
                'carousel'    => Product::forCategories()->unique('categoria_slug'),
                'promotional' => Module::categoriesImages()->where('promocional', true)->first(),
            ]);
        }

        return view(request()->route()->getAction()['as'], [
            'products' => $this->paginate($filters->sortBy('legenda'), 9),
            'carousel' => Product::forCategories()->unique('categoria_slug'),
        ]);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $query = Product::query();

        $product = $query->where('id', $id)->first();

        /* produtos relacionados */
        $related = $query->whereNotIn('id', [$id])
        ->filter(function ($item) use ($product) {
            return $item->categoria_slug == $product->categoria_slug && $item->fornecedor == $product->fornecedor;
        })->take(4);

        $categories = Product::forCategories()->unique('categoria_slug');

        return view(request()->route()->getAction()['as'], compact('product', 'related', 'categories'));
    }

    /**
     * @param Request $request
     * @return mixed
     */
    private function applyFilters(Request $request)
    {
        $allowed = $request->only(['categoria_slug', 'fornecedor', 'legenda', 'codigo', 'promocao']);

        if ($request->has('codigo')) {
            $filters = $request->only(['codigo']);
        } elseif ($request->has('legenda')) {
            if($request->has('promocao')) $filters = $request->only(['promocao', 'legenda']);
            else $filters = $request->only(['legenda']);
        } else {
            $filters = array_filter($allowed, function ($item) {
                return $item != null;
            });
        }

        $products = Product::query();

        foreach ($filters as $key => $filter) {
            $products = $products->filter(function ($item) use ($key, $filter) {

                if ($key == 'codigo') {
                    return $item->codigo == $filter;
                }
                if ($key == 'promocao') {
                    return $item->promocao == $filter;
                }

                return stripos($item->$key, $filter) !== false;
            });
        }

        session()->put('last-search', request()->getUri());
        return $products;
    }
}

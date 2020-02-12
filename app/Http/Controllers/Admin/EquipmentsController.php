<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProductRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Equipments;

class EquipmentsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('equipments_access'), 403);

        $equipments = Equipments::all();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('equipments_create'), 403);

        return view('admin.equipments.create');
    }

    public function store(StoreProductRequest $request)
    {
        abort_unless(\Gate::allows('equipments_create'), 403);

        $equipments = Equipments::create($request->all());

        return redirect()->route('admin.equipments.index');
    }

    public function edit(Product $product)
    {
        abort_unless(\Gate::allows('equipments_edit'), 403);

        return view('admin.equipments.edit', compact('equipments'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        abort_unless(\Gate::allows('equipments_edit'), 403);

        $equipments->update($request->all());

        return redirect()->route('admin.equipments.index');
    }

    public function show(Equipments $equipments)
    {
        abort_unless(\Gate::allows('equipments_show'), 403);

        return view('admin.equipments.show', compact('equipments'));
    }

    public function destroy(Equipments $equipments)
    {
        abort_unless(\Gate::allows('equipments_delete'), 403);

        $product->delete();

        return back();
    }

    public function massDestroy(MassDestroyProductRequest $request)
    {
        Product::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}

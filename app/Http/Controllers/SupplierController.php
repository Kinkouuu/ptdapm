<?php

namespace App\Http\Controllers;

use App\Services\SupplierService;
use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    protected $supplierService;
    public function __construct(SupplierService $supplierService){
        $this->supplierService = $supplierService;
    }
    public function index(){
        return view('Suppliers.index',[
            'title' => 'Danh sách nhà cung cấp',
            'suppliers' => $this->supplierService->getAll()
        ]);
    }
    public function create(){
        return view('Suppliers.add',[
            'title' => 'Thêm nhà cung cấp',
        ]);
    }
    public function store(Request $request){
        $this->supplierService->store($request);
        return redirect()->back()->with('msg', 'Thêm thành công');
    }
    public function show(Supplier $supplier){
        return view('suppliers.edit',[
            'title' => 'Cập nhật nhà cung cấp',
            'supplier' => $supplier
        ]);
    }
    public function update(Request $request,Supplier $supplier){
    $data = $request->except('_token','_method');
        $this->supplierService->update($data,$supplier->id);
        return redirect()->back()->with('msg', 'Cập nhật thành công');
    }
    public function destroy($id)
    {
        $this->supplierService->delete($id);
        return redirect(route('suppliers.index'))->with('success', 'Xóa nhà cung cấp thành công');
    }
}

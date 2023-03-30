<?php

namespace App\Services;
use App\Models\Supplier;

class SupplierService
{
    public function getAll(){
        return Supplier::orderBy('id')->get();
    }
    public function store($request){
        $data = $request->except('_token');
        Supplier::create($data);
    }
    public function update($data,$id)
    {
        Supplier::where('id',$id)->update($data);
    }
    public function delete($id){
        Supplier::where('id',$id)->delete();
    }

}
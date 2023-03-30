@extends('main')
@section('content')
    <h1 class="text-center">{{$title}}</h1>
    <div class="col-md-8 m-auto">
        @if (session('msg'))
        <div class="alert alert-success text-center">{{ session('msg') }}</div>
    @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên nhà cung cấp</th>
                    <th scope="col">Ngày thêm</th>
                    <th scope="col" class="text-end">
                        <a href="{{route('suppliers.create')}}" class="btn btn-outline-primary">
                            <i class="fa-solid fa-plus"></i>
                            Add
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($suppliers as $supplier)
                        <tr>
                            <td>{{$supplier->id}}</td>
                            <td>{{$supplier->name}}</td>
                            <td>{{$supplier->created_at}}</td>
                            <td class="text-end">
                                <a href="{{route('suppliers.show',$supplier->id)}}" class="btn btn-success">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form class="d-inline" action="{{ route('suppliers.destroy', $supplier->id) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Xóa cái này ?')"> 
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection
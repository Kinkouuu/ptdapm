@extends('main')
@section('content')
    <h1 class="text-center">{{ $title }}</h1>
    <div class="col-md-8 m-auto">
        @if ($errors->any())
        <div class="alert alert-danger text-center">
            Thông tin điền vào chưa đúng. Vui lòng nhập lại.
        </div>
    @endif
        <form action="{{route('suppliers.update',$supplier->id)}}" method="POST">
            @method('PUT')
            <label for="">Tên nhà cung cấp</label>
            <input type="text" name="name" value="{{$supplier->name}}">
            <button type="submit">Cập nhật</button>
            @csrf
        </form>
    </div>
@endsection

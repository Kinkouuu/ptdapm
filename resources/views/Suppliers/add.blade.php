@extends('main')
@section('content')
    <h1 class="text-center">{{ $title }}</h1>
    <div class="col-md-8 m-auto">
        @if ($errors->any())
        <div class="alert alert-danger text-center">
            Thông tin điền vào chưa đúng. Vui lòng nhập lại.
        </div>
    @endif
        <form action="{{route('suppliers.store')}}" method="POST">
            <label for="">Tên nhà cung cấp</label>
            <input type="text" name="name">
            <button type="submit">Thêm</button>
            @csrf
        </form>
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
    @include('layouts.navbar')
    <div class="container">
        @yield('content')
    </div>
</body>

@include('layouts.end')
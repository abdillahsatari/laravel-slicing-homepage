@if($pageSetting == "ADMIN")
    @include('admin.__layouts.public_head')
    @include('admin.__layouts.public_header')
    @include('admin.__layouts.public_content')
    @include('admin.__layouts.public_footer')
@else
    @include('public.__layouts.public_head')
    @include('public.__layouts.public_header')
    @include('public.__layouts.public_content')
    @include('public.__layouts.public_footer')
@endif

@include('product_search::components.header')
    <div class="container full-height d-flex flex-column justify-content-center align-items-center">
        @if($errors->any())
        <h4>{{$errors->first()}}</h4>
        @endif
        @include('product_search::components.form')
    </div>
@include('product_search::components.footer')
<form action="{{route('product_search.result')}}" method="GET">
    <div class="form-group">
      @csrf
      <input type="text" class="form-control" placeholder="Input name/barcode of product" name="searchRequest" value="{{ $searchRequest?? '' }}">
      <button type="submit" class="btn btn-primary col-1">Search</button>
    </div>
</form>
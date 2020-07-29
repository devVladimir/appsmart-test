<table>
    <tr>
      <th>Control</th>
      <th>Image</th>
      <th>Name</th>
      <th>Categories</th>
    </tr>
  @foreach ($items as $item)
      <tr
        data-api_id="{{$item['_id']}}"
        data-product_name="{{$item['product_name']}}"
        data-image_url="{{$item['image_url'] ?? 'https://static.openfoodfacts.org/images/svg/product-silhouette.svg'}}"
        data-categories="{{$item['categories'] ?? ''}}"
        >
        <td><button class="btn btn-primary btn-save">Save</button></td>
        <td>
          <div class="image">
            <img src="{{$item['image_url'] ?? 'https://static.openfoodfacts.org/images/svg/product-silhouette.svg'}}" alt="{{$item['product_name']}}" class="img-responsive product-img"></td>
          </div>
        <td>
          {{$item['product_name']}}
        </td>
        <td>{{$item['categories'] ?? 'No categories'}}</td>
      </tr>
  @endforeach

</table>
@if($items instanceof \Illuminate\Pagination\LengthAwarePaginator )
<div class="controls d-flex justify-content-center">
    {{ $items->withQueryString()->links() }}
</div>
@endif
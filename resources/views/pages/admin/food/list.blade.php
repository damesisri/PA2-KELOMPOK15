<div class="card-body">
    <div>
      <div class="table-responsive table-desi">
        <table class="user-table table table-striped">
          <thead>
            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($product as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->category}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->stock}}</td>
                <td>
                  <a href="{{ route('admin.food.show', $item->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                </td>
                <td>
                  <a href="{{ route('admin.food.edit', $item->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                </td>
                <td>
                  <a href="javascript:;" onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','DELETE','{{route('admin.food.destroy',$item->id)}}');"
                    class="text-danger d-inline-block remove-item-btn"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  {{ $product->links('theme.app.pagination') }}
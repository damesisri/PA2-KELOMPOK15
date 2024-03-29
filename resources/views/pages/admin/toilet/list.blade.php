<div class="card-body">
    <div>
        <div class="table-responsive table-desi">
            <table class="user-table table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Kamar</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($toilet as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$item->title}}</td>
                            {{-- <td>{{$item->category}}</td> --}}
                            <td>{{$item->price}}</td>
                            <td>{{$item->stock}}</td>
                            <td>
                                <a href="{{ route('admin.toilet.show', $item->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('admin.toilet.edit', $item->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                                <a href="javascript:;" onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','DELETE','{{route('admin.toilet.destroy',$item->id)}}');"
                                        class="text-danger d-inline-block remove-item-btn"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{ $toilet->links('theme.app.pagination') }}

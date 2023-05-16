<div class="card-body">
    <div>
      <div class="table-responsive table-desi">
        <table class="user-table table table-striped">
          <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengirim</th>
                <th>Isi Kritik & Saran</th>
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($kritikSaran as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->user->name}}</td>
                <td>{{$item->kritik_saran}}</td>
              </td>
              <td>
                <a href="javascript:;" onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','DELETE','{{route('admin.kritik.destroy',$item->id)}}');">
                    <i class="fa fa-trash-o" aria-hidden="true"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  {{ $kritikSaran->links('theme.app.pagination') }}
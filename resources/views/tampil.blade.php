<a href="{{route('sekolah.create')}}" class="btn btn-primary"><h1>Tambah Data</h1></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Sekolah</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @foreach ($data as $item)
    <tbody>
        <tr>
          <th scope="row">{{$loop->iteration}}</th><!-- menggunakan blade foreach -->
          <td>{{$item->nama_sekolah}}</td>
        </tr>
      </tbody>
    @endforeach
  </table>
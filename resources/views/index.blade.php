@extends('layout.master')
@section('content')
 <!-- Main Section -->
 <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Anak IT -  Table Kontak</h1>
            <a href="{{url('/create')}}"><button class="btn btn-primary">Insert</button></a>
            <!-- @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif -->
            
            @include('notifikasi')
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. HP</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($datas as $data => $hasil)
                    <tr>
                        <td>{{ $data + $datas->firstitem()}}</td>
                        <td>{{ $hasil->nama }}</td>
                        <td>{{ $hasil->email }}</td>
                        <td>{{ $hasil->nohp }}</td>
                        <td>{{ $hasil->alamat }}</td>
                        <td>
                            <form action="{{url('hapus')}}/{{$hasil->id}}" method="post">
                            {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{url('edit')}}/{{$hasil->id}}" class=" btn btn-sm btn-primary">Edit</a> ||
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$datas->links()}}
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
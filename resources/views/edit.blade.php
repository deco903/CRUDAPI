@extends('layout.master')
@section('content')


 <!-- Main Section -->
 <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Anak IT -  Tambah Kontak</h1>
            <hr>
            <form action="{{url('update')}}/{{$data->id}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama" value="{{$data->nama}}">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}">
                </div>
                <div class="form-group">
                    <label for="nohp">No Hp:</label>
                    <input type="text" class="form-control" id="nohp" name="nohp" value="{{$data->nohp}}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat">{{$data->alamat}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Update</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
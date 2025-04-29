@extends('profile.layout.layout')

@section("main")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Change Profile picture</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <!-- /.content -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-12">
                <div class="card p-3">
                    <form action="{{ route('profile.gallery.store',['houseId'=>$houseId]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Gallery Picture</label>
                            <input type="file" name="pictures[]" multiple class="form-control @error('pictures')
                            @enderror" id="">
                            @error('pictures')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Submit" class="btn btn-success">
                        </div>
                    </form>
                    <div>
                        <ul>
                            <li>Picture Must be in jpg,jpeg,png,webp formate</li>
                            <li>Picture Must be less then 10 and grater then 3</li>
                        </ul>
                    </div>
                </div>
            </div>
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

  

</div>
<!-- /.content-wrapper -->


<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>

@endsection
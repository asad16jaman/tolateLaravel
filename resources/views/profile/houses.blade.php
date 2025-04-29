@extends('profile.layout.layout')

@section('style')
<style>
.imageContainer{
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>

@endsection

@section("main")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    
@forelse($myHouses as $house)


<div class="card m-3" >
  <div class="row no-gutters">
    <div class="col-md-4 p-2">
      <div class="imageContainer">
      <img src="{{ asset('storage')."/".$house->thum}}" class="object-fit-cover img-fluid" alt="...">
      </div>
    </div>
    <div class="col-md-4">
      <div class="card-body">
        <h3>About House*</h3>
        <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis debitis possimus quam commodi minus magni eligendi atque accusamus dolorem ad cupiditate numquam, odit fugit. Aspernatur totam voluptatibus non similique, recusandae maxime quam commodi aliquam nulla nostrum amet corporis reprehenderit numquam beatae? Debitis itaque illo eos dignissimos, magni neque temporibus quae.</p>
        <p class="card-text"><small class="text-muted">Available from : 15:5:2026</small></p>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="card-body">
        <h5 class="">House Type : Family*</h5>
        <p>Rant : 1200</p>
       
            
            <p>Number of Room : 5</p>
            <p>Number of Balchoni : 5</p>
            <p>Number of kdkd : 5</p>
            <p>Number of kdkd : 5</p>

            <p>
            <span>Gas : Yes</span>
            <span>Internate : Yes</span>
            <span>Parking : Yes</span>
            <span>left : Yes</span>
            </p>
        

        <p>
            <span>District : Dhaka</span>
            <span>Thana : Dhaka</span>
            <span>Area : Tongi</span>
        </p>

       
      </div>
      <div class="d-flex justify-content-end m-3">
            <a href="{{ route("profile.gallery.create",['houseId'=>$house->id]) }}" class="btn btn-primary mx-3">Add House Gallery</a>
            <a href="{{ route('profile.house.delete',['id'=> $house->id]) }}" class="btn btn-danger ">Delete</a>
        </div>
    </div>
    
  </div>
</div>


@empty

  <p>You Have No house Yeat...</p>
@endforelse


    

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
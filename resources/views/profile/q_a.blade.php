@extends('profile.layout.layout')

@section("main")



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   

    <!-- Main content -->

    <!-- /.content -->

    <section>
 
        <div class="container-fluid">
             <!-- /.row -->
        <div class="row px-3 py-3">
            @if($qas)

            @foreach ($qas as $data)

                <div class="col-md-12 col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                            <h4>Title: <a href="{{ route('discus.comment',$data->id)}}">{{ $data->title}}</a></h4>
                            <span class="mx-1">{{ date('d-m-Y', strtotime($data->created_at)) }}</span>
                            </div>
                            
                            <p>Problem: {{ $data->description }}</p>
                        </div>
                        <div class="card-body">
                            @if(count($data->comments) == 0)
                               <p> No answer given</p>
                            @else
                                <p>Query about question</p>
                               @foreach ($data->comments as $cmt)
                               <div class="card">
                                    <div class="card-body">
                                        {{ $cmt->content }}
                                    </div>
                                    <div class="card-footer">
                                        
                                    </div>
                                </div>
                               @endforeach
                            @endif
                        </div>
                        <div class="card-footer">
                        <div class="d-flex justify-content-end">
                                
                        <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modalDanger{{$data->id}}">
                <i class="fa-solid fa-trash"></i>
                </button>
                <!-- Modal delete lesson  -->
                <div class="modal fade" id="modalDanger{{$data->id}}" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content bg-danger">
                  <form action="{{ route('profile.q_a.delete',$data->id) }}" method="post">
                  @csrf
                 
                  <div class="modal-body">
                  <p>Are you sure you want to delete…?</p>
                  </div>
                  <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancle</button>
                  <!-- <button type="button" class=""></button> -->
                  <input type="submit" value="Delete" class="btn btn-outline-light">
                  </div>
                  </form>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            
            @endforeach

            @else
                <p>You have no question...</p>

            @endif

            
        </div>
        <!-- /.row -->
        
		
        </div>
    </section>

</div>
<!-- /.content-wrapper -->


<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="">Asaduzzaman</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>




@endsection
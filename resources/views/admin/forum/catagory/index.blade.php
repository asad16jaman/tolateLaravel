<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
            <div class="card">
                <div class="card-body">
                <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Thumbnail</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($catagories as $catagory)
                    <tr>
                        <td>{{ $catagory->id }}</td>
                        <td>{{ $catagory->name }}</td>
                        <td>{{ substr($catagory->description,0,100)."..." }}</td>
                        <td>
                        <img  width="50px" class="img-thumbnail" src="{{ asset('/forum/thum/'.$catagory->thumbnail)}}" alt="">
                        </td>
                        <td>
                           <div style="display:inline-block;width:130px">
                         
                           <a href="{{ route('catagory_edit',$catagory->id)}}" class="btn btn-warning">Edit</a>
                           <!-- <button class="btn btn-danger">delete</button> -->
                           <a href="{{ route('catagory_delete',$catagory->id)}}" class="btn btn-danger">Delete</a>
                           </div>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
@extends('profile.layout.layout')

@section("main")



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->

        <section>

            <div class="container-fluid">
                <!-- /.row -->
                <div class="card">


                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-lg-4 col-12">
                                    <div class="mb-3">
                                        <label for="">House Type</label>
                                        <select name="type" id="" class="form-control">
                                            <option value="">Select House Type</option>
                                            <option value="family">Familly</option>
                                            <option value="boys">Boys</option>
                                            <option value="girls">Girlds</option>
                                        </select>
                                        @error('type')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-12">
                                    <div class="mb-3">
                                        <label for="">Rant/Month</label>
                                        <input type="text" name="price" id="" value="{{ old('price') }}" class="form-control">
                                        @error('price')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-12">
                                    <div class="mb-3">
                                        <label for="">Available From</label>
                                        <input type="date" name="availableFrom" id="" value="{{ old('availableFrom') }}" class="form-control">
                                        @error('availableFrom')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-12">
                                <div class="mb-3">
                                        <label for="">Number of Room</label>
                                        <input type="text" name="numberOfRooms" value="{{ old('numberOfRooms') }}" id="" class="form-control">
                                        @error('numberOfRooms')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-12">
                                    <div class="mb-3">
                                        <label for="">Number of BathRoom</label>
                                        <input type="text" name="numberOfBathRooms" value="{{ old('numberOfBathRooms') }}" id="" class="form-control">
                                        @error('numberOfBathRooms')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-12">
                                    <div class="mb-3">
                                        <label for="">Number of Balcony</label>
                                        <input type="text" name="numberOfBalcony" value="{{ old('numberOfBalcony') }}" id="" class="form-control">
                                        @error('numberOfBalcony')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                

                                <div class="col-md-6 col-lg-4 col-12">
                                    <div class="mb-3">
                                        <label for="">Division</label>
                                        <input type="text" name="division" value="{{ old('division') }}" id="" class="form-control">
                                        @error('division')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-12">
                                    <div class="mb-3">
                                        <label for="">District</label>
                                        <input type="text" name="district" value="{{ old('district') }}" id="" class="form-control">
                                        @error('district')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-12">
                                    <div class="mb-3">
                                        <label for="thana">Thana</label>
                                        <input type="text" name="thana" id="" value="{{ old('thana') }}" class="form-control">
                                        @error('thana')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-12">
                                    <div class="mb-3">
                                        <label for="">Area</label>
                                        <input type="text" name="area" id="" value="{{ old('area') }}" class="form-control">
                                        @error('area')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-12">
                                    <div class="mb-3">
                                        <label for="thum">ThumbNail</label>
                                        <input type="file" name="thum" id="" class="form-control">
                                        @error('thum')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-12">
                                    
                                </div>

                                <div class="col-md-4 col-lg-4 col-6">
                                    <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" name="gas" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Gass Available</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="left" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Left Available</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="internate" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Internate Available</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="parking" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Parking Available</label>
                                    </div>
                                    </div>
                                </div>

                                <div class="col-md-8 col-lg-8 col-6">
                                    <div class="mb-3">
                                        <label for="">Description</label>
                                        <textarea name="description" id="" class="form-control"></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex justify-content-end ">
                                    <input type="submit" value="Submit" class="btn btn-info">
                                </div>

                        </form>
                    </div>
                </div>

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
<div id="carouselExampleControls" class="carousel slide bg-danger" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($house->gallery as $pictur)
                                    @if($loop->first)
                                    <div class="carousel-item active">
                                    <img src="{{ asset('storage').'/'.$pictur->image }}" class="img-fluid" alt="...">
                                    </div>
                                    @else
                                    <di class="carousel-item">
                                    <img src="{{ asset('storage').'/'.$pictur->image }}" class="img-fluid" alt="...">
                                    </div>
                                    @endif
                               
                                        
                                @endforeach
                               
                            </div>
                            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button> -->
                        </div>
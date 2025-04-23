@extends('layout.base')

@section('style')


@endsection





@section('content')
@include('front.nav')






<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center" >Contact us</h2>
  <div class="h-line bg-dark"></div>
    <p class="text-center mt-3" >
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
       Facilis sit placeat impedit error <br> aut molestiae deleniti?
        Maiores minus ab delectus.
    </p>
</div>


<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4" >

      <iframe  height="350" class="w-100 rounded mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116804.64831635449!2d90.26781280541765!3d23.813433119026097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ada2664e21%3A0x3c872fd17bc11ddb!2sDaffodil%20International%20University!5e0!3m2!1sen!2sbd!4v1731527078710!5m2!1sen!2sbd" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



        <h5>Address</h5>
        <a href="" class="d-inline-block text-decoration-none text-dark mb-2" ></iframe>
          <i class="bi bi-geo-alt-fill"></i>Daffodile
        </a>
        <h5 class="mt-4" >Call Us</h5>
                    <a href="tel : +" class="d-inline-block mb-2 text-decoration-none text-dark" > 
                        <i class="bi bi-telephone-fill"></i>+1245788
                      </a>
                        <br>

                           <a href="tel : +$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark" > 
                                 <i class="bi bi-telephone-fill"></i>+478562
                                  </a>


                   

               <h5 class="t-4" >Email</h5>   
               <a href="mailto:  " class="d-inline-block text-decoration-none text-dark" >
               <i class="bi bi-envelope-fill"></i> 
              </a>
              <h5 class="mt-4" >Follow Us</h5>
             
                
                <a href="" class="d-inline-block text-dark fs-5 me-2 " > 
                        <i class="bi bi-twitter me-1"></i>
                        </a>
                
              
              

                    <a href="" class="d-inline-block  text-dark fs-5 me-2 " >
                        <i class="bi bi-facebook me-1"></i> 
                        
                        </a>
                       
                    <a href="" class="d-inline-block text-dark fs-5 " > 
                        
                        <i class="bi bi-instagram me-1"></i> 
                       
                        </a>       

      </div>

    </div>
    <div class="col-lg-6 col-md-6 px-4">
      <div class="bg-white rounded shadow p-4" >

        <form method="POST" >
          <h5>Send a message</h5>
          <div class="mt-3">
                        <label  class="form-label" style="font-weight: 500;" >Name</label>
                        <input name="name" required type="text" class="form-control shadow-none">
                    </div>
               <div class="mt-3">
                        <label  class="form-label" style="font-weight: 500;" >Email</label>
                        <input  name="email" required type="email" class="form-control shadow-none">
                    </div> 
                    
               <div class="mt-3">
                        <label  class="form-label" style="font-weight: 500;" >Subject</label>
                        <input  name="subject" required type="text" class="form-control shadow-none">
                    </div>   
                  <div class="mt-3">
                        <label  class="form-label" style="font-weight: 500;" >Massage</label>
                        <textarea  name="message" required class="form-control shadow-none"  rows="5" style="resize: none;" ></textarea>
                    </div>  
                    <button type="submit" name="send" class="btn text-white custom-bg mt-3" >Send</button>  
        </form>
      </div>

    </div>
  </div>
</div>

<!-- footer startd................................................ -->


  @include('front.footer')


  @endsection

  @push('js')
        <script>
            document.getElementsByTagName('body').className = "bg-light"
        </script>
  @endpush

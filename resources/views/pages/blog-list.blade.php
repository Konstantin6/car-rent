@extends('layouts.layout')
@section('hometitle')
Blog List
@endsection


@section('content')


<ul class="">
    <div class="row  w-100">
    <div class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);" >
      <div class="container">
        <div class="row d-flex w-100">
    <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest blog posts</h2>

              
            </div>
          </div>
@foreach ($articles as $article)
    


   
          

          <div class="col-lg-4 col-md-6 p-3  ">
            <div class="service-item ">
            <a href="#" class="services-item-image"><img src="assets/images/blog-5-370x270.jpg" class="img-fluid" alt=""></a>              <div class="down-content">
              <a class="text-dark" href="#">{{$article['title']}}</a>
              <div class="mb-1 text-muted">{{$article['created_at']}}</div>

                <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>


         
         
    
@endforeach
</div>
      </div>
    </div>

    </div>
</ul>

@endsection







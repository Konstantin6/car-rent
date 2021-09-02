@extends('layouts.layout')
@section('hometitle')
Blog List
@endsection


@section('content')
<div class="container ">
<ul class="d-flex justify-content-between">
    <div class="row justify-content-between">
@foreach ($articles as $article)
    
<div class="col-md-6  ">
          <div class="card flex-md-row mb-4 box-shadow h-100 d-inline-block">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary"></strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">{{$article['title']}}</a>
              </h3>
              <div class="mb-1 text-muted">{{$article['created_at']}}</div>
              <p class="card-text mb-auto text-dark">{{$article['description']}}</p>
              <a href="{{route('article.show', ['articleId'=>$article['id']])}}">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block sticky" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="{{$article['image']}}" data-holder-rendered="true">
          </div>
        </div>  

    <div class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest blog posts</h2>

              <a href="blog">read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img class="card-img-right flex-auto d-none d-md-block sticky" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 288px; height: 210px;" src="{{$article['image']}}" data-holder-rendered="true"></a>
              <div class="down-content">
              <a class="text-dark" href="#">{{$article['title']}}</a>
              <div class="mb-1 text-muted">{{$article['created_at']}}</div>

                <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>



          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/blog-2-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h4>

                <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>

@endforeach
    </div>
</ul>
</div>
@endsection







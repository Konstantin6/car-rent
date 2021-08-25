@extends('layouts.layout')
@section('hometitle')
Blog List
@endsection


@section('content')
<div class="container">
<ul class="d-flex justify-content-between">
    <div class="row justify-content-between">
@foreach ($articles as $article)
    
<div class="col-md-6  ">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">{{$article['name']}}</a>
              </h3>
              <div class="mb-1 text-muted">{{$article['created_at']}}</div>
              <p class="card-text mb-auto text-dark">{{$article['description']}}</p>
              <a href="{{route('article.show', ['articleId'=>$article['id']])}}">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="{{$article['img']}}" data-holder-rendered="true">
          </div>
        </div>    

@endforeach
    </div>
</ul>
</div>
@endsection







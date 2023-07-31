@extends('components.layout')

@section('content')
    <h1 class="text-center py-5">Nuova Pubblicazione</h1>

    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-4">
                <div class="card my-3 mx-4" style="width: 18em; text-align: center;">
                    <div class="card-body">
                        <h5 class="card-title">{{$article['title']}}</h5>
                        <p class="card-text">{{$article['content']}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a> 
                    </div>
                </div> 
            </div> 
            @endforeach
        </div>
    </div>
@endsection
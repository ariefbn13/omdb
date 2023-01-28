@extends('layouts/layoutMain')

@section('content')

    <div class="row">
        
        <div class="col-4">
            <h1>List Film</h1>
        </div>

        <div class="col-6">

            <form action="{{ route('search_film') }}" method="GET">

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="search_film" class="form-control" placeholder="Search...">
    
                        <button type="submit" class="btn btn-secondary">
                            <i class="fa fa-search"></i>
                        </button>
                        
                    </div>
                </div>
                
            </form>
            
        </div>
        <div class="col-2"></div>

    </div>
    
    @if (!isset($search))

    <div class="row my-3">

        @foreach ($data['Search'] as $film)

            <div class="card m-3" style="width: 18rem;">

                    <img class="card-img-top mt-2"  width="200" height="300" src="{{ $film['Poster'] }}" alt="Poster">
                    <div class="card-body">
                    <h5  style="font-size:15px;" class="card-title">{{ $film['Title'] }}</h5>
                    <p class="card-text">{{ $film['Year'] }}</p>
                    <form action="{{ route('detail_film') }}" method="GET">
                        <button href="/detail"type="submit" class="btn btn-primary">
                            <input name="detail_film" type="hidden" value="{{ $film['imdbID'] }}">Detail Film
                        </button>    
                    </form>
                    </div>
            
            </div>
        @endforeach    

    </div>

    @else
         <div class="row my-3">

        @foreach ($data['Search'] as $film)

            <div class="card m-3" style="width: 18rem;">

                    <img class="card-img-top mt-2" src="{{ $film['Poster'] }}" alt="Poster">
                    <div class="card-body">
                    <h5 class="card-title">{{ $film['Title'] }}</h5>
                    <p class="card-text">{{ $film['Year'] }}</p>
                    <a href="/detail" class="btn btn-primary">Detail Film</a>
                    </div>
            
            </div>
        @endforeach    

    </div>
    @endif

    </div>

  

@endsection    
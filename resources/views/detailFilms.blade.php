@extends('layouts/layoutMain')

@section('content')

    <h1>{{ $data['Title'] }} ({{ $data['Year'] }})</h1>
    
    <div class="row mt-2">
        
        <div class="col-4">
            <img class="img-thumbnail img-responsive mt-2" src="{{ $data['Poster'] }}" alt="Poster">
            <h5 class="ms-2 mt-2">IMDb Rating</h5>
            
            <div class="rating mt-1">
                <div class="row">
                    <div class="col-2">
    
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
                            <path fill="gold" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z"/>
                        </svg>
    
                    </div>
    
                    <div class="col-2 mt-2">
    
                       <h5>{{ $data['imdbRating'] }}/10</h5>
                       <h6 class="mt-1"> {{ $data['imdbVotes'] }}</h6>
    
                    </div>
                </div>
            </div>
        </div>

        <div class="col-8 mt-2">

            <div class="row">
                <div class="col-2"><h4>Rated</h4></div>
                <div class="col-10"><h4>: {{ $data['Rated'] }}</h4></div>
            </div>

            
            <div class="row">
                <div class="col-2"><h4>Runtime</h4></div>
                <div class="col-10"><h4>: {{ $data['Runtime'] }}</h4></div>
            </div>

            <div class="row">
                <div class="col-2"><h4>Released</h4></div>
                <div class="col-10"><h4>: {{ $data['Released'] }}</h4></div>
            </div>

            <div class="row">
                <div class="col-2"><h4>Genre</h4></div>
                <div class="col-10"><h4>: {{ $data['Genre'] }}</h4></div>
            </div>

            <div class="row">
                <div class="col-2"><h4>Director</h4></div>
                <div class="col-10"><h4>: {{ $data['Director'] }}</h4></div>
            </div>

            <div class="row">
                <div class="col-2"><h4>Writer</h4></div>
                <div class="col-10"><h4>: {{ $data['Writer'] }}</h4></div>
            </div>

            <div class="row">
                <div class="col-2"><h4>Actors</h4></div>
                <div class="col-10"><h4>: {{ $data['Actors'] }}</h4></div>
            </div>

            <div class="row">
                <div class="col-2"><h4>Language</h4></div>
                <div class="col-10"><h4>: {{ $data['Language'] }}</h4></div>
            </div>

            <div class="row">
                <div class="col-2"><h4>Country</h4></div>
                <div class="col-10"><h4>: {{ $data['Country'] }}</h4></div>
            </div>

        </div>

       

    </div>

    <div class="plot mt-2 mb-2">

        <h3 class="mb-2">Plot</h3>
        <p style="font-size:18px;text-align:justify;">{{ $data['Plot'] }}</p>

    </div>
     
    <a href="/" class="btn btn-primary mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="line-height:38px;" viewBox="0 0 24 24">
            <path fill="white" d="m12 16l1.4-1.4l-1.6-1.6H16v-2h-4.2l1.6-1.6L12 8l-4 4Zm0 6q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Zm0-2q3.35 0 5.675-2.325Q20 15.35 20 12q0-3.35-2.325-5.675Q15.35 4 12 4Q8.65 4 6.325 6.325Q4 8.65 4 12q0 3.35 2.325 5.675Q8.65 20 12 20Zm0-8Z"/>
        </svg>
        Kembali
    </a>

@endsection    
@extends("layouts.master")
@section("title","Főoldal")
@section("content")
    @include("menu")
    <div class="container mt-5">
        <div class="row">
            @foreach ($aktualis as $egyMeres)
                <div class="col-3">

                   

                    <div class=" 
                    
                    @if($egyMeres->homerseklet<=15)
                      bg-primary
                    @elseif($egyMeres->homerseklet>15 && $egyMeres->homerseklet<=18)
                      bg-success
                    @else
                      bg-danger
                    @endif
                    
                    text-center text-white rounded p-3">
                        <span class="display-4 fw-bold">{{$egyMeres->homerseklet}} &deg;C</span>
                        <br>
                        {{$egyMeres->nev}}
                        <br>
                        {{$egyMeres->datum_ido}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@extends("layouts.master")

@section("title","Főoldal")

@section("content")
    @include("menu")
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <div class="bg-success text-center text-white rounded p-3">
                   <span class="display-4 fw-bold">18 &deg;C</span>
                   <br>
                   Labor 2
                   <br>
                   2022-10-25 11:50:32
                </div>
            </div>

            <div class="col-3">
                <div class="bg-success text-center text-white rounded p-3">
                   <span class="display-4 fw-bold">17 &deg;C</span>
                   <br>
                   Labor 2
                   <br>
                   2022-10-25 11:50:32
                </div>
            </div>

            <div class="col-3">
                <div class="bg-danger text-center text-white rounded p-3">
                   <span class="display-4 fw-bold">22 &deg;C</span>
                   <br>
                   306
                   <br>
                   2022-10-25 11:50:32
                </div>
            </div>

            <div class="col-3">
                <div class="bg-primary text-center text-white rounded p-3">
                   <span class="display-4 fw-bold">14 &deg;C</span>
                   <br>
                   305
                   <br>
                   2022-10-25 11:50:32
                </div>
            </div>
        </div>
    </div>

@endsection
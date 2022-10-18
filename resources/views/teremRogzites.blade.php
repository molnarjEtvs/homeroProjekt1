@extends("layouts.master")

@section("title","Főoldal")

@section("content")
    @include("menu")

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-primary p-3 rounded text-white">
                    <h1>Terem rögzítés</h1>
                    
                    <form method="POST">
                        @csrf
                        <div class="my-3">
                            <label for="nev">Terem neve:</label>
                            <input type="text" name="nev" id="nev" value="{{ old('nev') }}" class="form-control">
                            @error('nev')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="my-3">
                            <label for="szel_cm">Terem szélessége (cm):</label>
                            <input type="number" name="szel_cm" value="{{ old('szel_cm') }}" id="szel_cm" class="form-control">
                            @error('szel_cm')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="my-3">
                            <label for="hosz_cm">Terem hosszúság (cm):</label>
                            <input type="number" name="hosz_cm" id="hosz_cm" value="{{ old('hosz_cm') }}" class="form-control">
                            @error('hosz_cm')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="my-3">
                            <label for="mag_cm">Terem magasság (cm):</label>
                            <input type="number" name="mag_cm" id="mag_cm" value="{{ old('mag_cm') }}"  class="form-control">
                            @error('mag_cm')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                        </div>

                        <div class="my-3">
                            <button type="submit" class="btn btn-danger">Adatok rögzítése</button>
                        </div>


                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    
@endsection
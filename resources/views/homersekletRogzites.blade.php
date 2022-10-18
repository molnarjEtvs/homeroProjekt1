@extends("layouts.master")

@section("title","Főoldal")

@section("content")
    @include("menu")

    <div class="container">
        <h1>Hőmérséklet rögzítése</h1>
        <div class="row text-white">
            <div class="col-12">
                <div class="bg-success rounded p-3">
                    <form method="POST">
                        <div class="mt-3 mb-3">
                            <label for="t_id">Terem: </label>
                            <select name="t_id" id="t_id" class="form-select">
                                <option value="">Kérjük válassz!</option>
                                @foreach ($termek as $egyTerem)
                                    <option value="{{$egyTerem->t_id}}">{{$egyTerem->nev}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-3 mb-3">
                            <label for="homerseklet">Hőmérséklet: </label>
                            <input type="number" name="homerseklet" id="homerseklet" class="form-control">
                        </div>


                        <div class="mt-3 mb-3">
                            <button type="submit" class="btn btn-light">Adatok rögzítése</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
@endsection
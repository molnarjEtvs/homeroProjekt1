@extends("layouts.master")

@section("title","Főoldal")

@section("content")
    @include("menu")
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <h1>Hőmérsékletek</h1>
                    
                    <table class="table table-sm table-dark table-striped table-hover">
                        <tr>
                            <th>#</th>
                            <th>Terem név</th>
                            <th>Hőmérséklet</th>
                            <th>Rögzítés ideje</th>
                        </tr>
                        @foreach ($lista as $egyHomerseklet)
                            <tr>
                                <td>{{ $egyHomerseklet->h_id }}</td>
                                <td>{{ $egyHomerseklet->teremnev }}</td>
                                <td>{{ $egyHomerseklet->homerseklet }} &deg;C</td>
                                <td>{{ $egyHomerseklet->datum_ido }}</td>
                            </tr> 
                        @endforeach
                        
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
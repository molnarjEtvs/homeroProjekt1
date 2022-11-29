@extends("layouts.master")

@section("title","Főoldal")

@section("content")
    @include("menu")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-dark p-3 rounded text-white mt-3">
                    <h1>Terem lista </h1>
                    <table class="table table-light table-sm table-striped table-hover">
                        <tr>
                            <th>#</th>
                            <th>Tereme név</th>
                            <th>Szél</th>
                            <th>Hossz</th>
                            <th>Mag</th>
                            <th>Módosít</th>
                            <th>Törölés</th>
                        </tr>
                        @foreach ($termek as $item)
                        <tr id="sor_{{ $item->t_id }}">
                            <td>{{ $item->t_id }}</td>
                            <td>{{ $item->nev }}</td>
                            <td>{{ $item->szel_cm }} cm</td>
                            <td>{{ $item->hossz_cm }} cm</td>
                            <td>{{ $item->mag_cm }} cm</td>
                            
                            <td>
                                <button class="btn btn-primary btn-sm">M</button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="teremTorles({{ $item->t_id }});" id="gomb_{{ $item->t_id }}">törlés</button>
                            </td>
                        </tr>  
                        @endforeach
                        
                    </table>
                </div>
            </div>
        </div>
    </div>

<script>
    function teremTorles(id){
        $.ajax({
            url:"./terem-torles",
            type:"POST",
            headers:{
                "X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")
            },
            data:{"id":id},
            cache:false,
            async:false,
            dataType:'json',
            beforeSend:function(){
                $("#gomb_"+id).attr("disabled",true);
            },
            success:function(){
                $("#sor_"+id).remove();
            }

        });
    }
</script>
@endsection
@extends('layouts.startbootstrap')
@section('content')
@push('webservice') 
<script>
        var tempo = window.setInterval(site, 1000);
function site()
{
    $.ajax({
		type: "GET",
        url: "eugenio/getdatasite/" + {!! $id_equipamento !!},
		//data: $('#form').serialize(),
		success: function(result) {	
            //$("#tabela1").html('');								
			$("#equipamentos").html(result);						
		},
		/*beforeSend: function () {
            bloqueioHtml('#row_all');
        },
        complete: function () {
        	$('#row_all').unblock();
        	updates();
        },*/
        error: function(){
            console.log('Erro.');
        }    
    });
}

site();
</script>
 @endpush   

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Equipamentos no Site</h1>
    </div>
</div>
<div class="row">
    <div id="equipamentos" class="col-lg-12">
    </div>
</div>
<hr />


@endsection
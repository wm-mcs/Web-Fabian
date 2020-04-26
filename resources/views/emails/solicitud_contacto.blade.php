<br>

<span style="font-family: arial; font-size: 14px; padding-bottom:5px; font-weight: bold; ">
 Solicitud de contacto por web:
</span>
<br>
<br>

@if($data['name'] != '')
<span style="font-family: arial; font-size: 12px;padding-bottom:5px;">
 Nombre: <strong>{{$data['name']}}</strong>	
</span>
<br>
@endif

@if($data['email'] != '')
<span style="font-family: arial; font-size: 12px;padding-bottom:5px;">
 Email: <strong>{{$data['email']}}</strong>	
</span>
<br>
@endif

@if($data['celular'] != '')
<span style="font-family: arial; font-size: 12px;padding-bottom:5px;">
 Celular: <strong>{{$data['celular']}}</strong>	
</span>
<br>
@endif

@if($data['departamento'] != '')
<span style="font-family: arial; font-size: 12px;padding-bottom:5px;">
 Departamento: <strong>{{$data['departamento']}}</strong>	
</span>
<br>
@endif

@if($data['inquilino_ocupante'] != '')
<span style="font-family: arial; font-size: 12px;">
 Caso: <strong>{{$data['inquilino_ocupante']}}</strong>	
</span>
<br>
@endif

@if($data['problema'] != '')
<span style="font-family: arial; font-size: 12px;padding-bottom:5px;">
 Problema: <strong>{{$data['problema']}}</strong>	
</span>
<br>
@endif


@if($data['mensaje'] != '')
<br>
<span style="font-family: arial; font-size: 12px;padding-bottom:5px;">
 Mensaje:  <strong>{{$data['mensaje']}}</strong> 
</span>
<br>
@endif






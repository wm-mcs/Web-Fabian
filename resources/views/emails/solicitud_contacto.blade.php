<br>

Solicitud de contacto por web:

<br>

@if($data['name'] != '')
<span style="font-family: arial; font-size: 12px;">
 Nombre: <strong>{{$data['name']}}</strong>	
</span>
<br>
@endif

@if($data['email'] != '')
<span style="font-family: arial; font-size: 12px;">
 Email: <strong>{{$data['email']}}</strong>	
</span>
<br>
@endif

@if($data['celular'] != '')
<span style="font-family: arial; font-size: 12px;">
 Celular: <strong>{{$data['celular']}}</strong>	
</span>
<br>
@endif

@if($data['departamento'] != '')
<span style="font-family: arial; font-size: 12px;">
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
<span style="font-family: arial; font-size: 12px;">
 Problema: <strong>{{$data['problema']}}</strong>	
</span>
<br>
@endif



<div style="padding: 10px; border-radius: 4px; background-color: #f8f8f8;" >
 <strong>{{$data['problema']}}</strong> 
</div>

<br>


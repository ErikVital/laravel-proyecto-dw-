@extends('layout.menuprin')

@section('contenido')
<div class="central">
    <div>
        <?php 
            if(DB::connection()->getPdo()){
                echo "Successfully Conected to DB";
            }
        ?>
    </div>
    <div class="contenido">
        <table border="1" id="dbtable">
            <tr>
                <td>id</td>
                <td>nombre</td>
                <td>correo</td>
                <td>edad</td>
            </tr>

         @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->nombre}}</td>
                <td>{{$user->correo}}</td>
                <td>{{$user->edad}}</td>
            </tr>
        @endforeach
        </table>
    </div>
</div>
@endsection
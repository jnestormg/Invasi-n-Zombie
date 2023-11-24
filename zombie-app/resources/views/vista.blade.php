@extends('plantilla')
@section('contenido')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="card mx-auto" style="width: 90%; ">
            <div class="card-header">
                Supervivientes
            </div>
            <div class="card-body">
                <table class="table" style="width: 80%" id="survivor">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nombre</th>
                            <th>edad</th>
                            <th>sexo</th>
                            <th>latitud</th>
                            <th>longitud</th>
                            <th>articulo</th>
                            <th>cantidad</th>
                            <th>Opciones</th>

                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($supervivientes as $supervivientes)
                            <tr>
                                <td>{{ $supervivientes->id }}</td>
                                <td>{{ $supervivientes->nombre }}</td>
                                <td>{{ $supervivientes->edad }}</td>
                                <td>{{ $supervivientes->sexo }}</td>
                                <td>{{$supervivientes->latitud}}</td>
                                <td>{{$supervivientes->longitud}}</td>
                                <td>{{$supervivientes->nombre}}</td>
                                <td>{{$supervivientes->cantidad}}</td>


                                <td>
                                    <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                  </svg></a>
                                  <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
                                        <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5"/>
                                      </svg>
                                  </a>
                                  <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-diamond-fill" viewBox="0 0 16 16">
                                        <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                                      </svg>
                                  </a>
                                  
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

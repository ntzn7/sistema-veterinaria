@extends('layout.main')

@section('body')

<div class="alert alert-success" role="alert">
    <h2>Relatório de Clientes</h2>
</div>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
              
                <br>

                <div class="box-body no-padding">
                    <table  class="table table-bordered table-striped" >
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th>Endereço</th>
                                <th>Estado</th>
                                
                                
                            </tr>

                        </thead>
                        <tbody>
                            @foreach($clients as $client)

                            <tr>
                               <td>{{$client->id}}</td>
                               <td>{{$client->name}}</td>
                               <td>{{$client->email}}</td>
                               <td>{{$client->cell_phone}}</td>
                               <td>{{$client->address}}</td>
                               <td>{{$client->state}}</td>
                              
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

</section>

@endsection
@extends('layout.main')

@section('body')

<div class="alert alert-success" role="alert">
    <h2>Pets</h2>
</div>
    <section class="content">
        <div class="row">
            <div class="cold-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <a href="/pet/new" class="btn btn-success">cadrastar Novo Pet</a>
                    </div>
                        <br>
                        
                        <div class="box-body no-padding">
                            <table id="tb-default" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th style="width: 250px">Foto</th>
                                        <th>Name</th>
                                        <th>Dono</th>
                                        <th>Espécie</th>
                                        <th>Sexo(M/H)</th>
                                        <th>Data nascimento</th>
                                        <th style="width: 250px">&nbsp;</th>
                                        
                                    </tr>

                                </thead> 
                                <tbody>
                                    @foreach($pet as $pet)

                                    <tr>
                                        <td>{{$pet->id}}</td>
                                        <td><img src="{{ asset('storage/' . $pet->photo_path) }}" alt="photo" style="width: 90%;"></td>
                                        <td>{{$pet->name}}</td>
                                        <td>{{$pet->client->name ?? ''}}</td>
                                        <td>{{$pet->specie}}</td>
                                        <td>{{$pet->gender}}</td>
                                        <td>{{\Carbon\Carbon::parse($pet->birth_date)->format('d/m/Y') }}</td>

                                        <td>
                                            <a href="/pet/edit/{{$pet->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>Edit</a>
                                            <a href="/pet/delete/{{$pet->id}}" onclick="return confim('do you want to delete this record id = {{$pet->id}} ?')" class="btn btn-danger btn-xs"><i class="fa fa-trash">Delete</i></a>
                                        </td>
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
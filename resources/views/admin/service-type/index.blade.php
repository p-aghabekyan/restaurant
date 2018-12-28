@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: right">
                <a href="/admin/service-types/create" class="btn btn-primary">Add Service Type</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Actions</td>
                    </tr>
                    @foreach($data['data'] as $d)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{ $d->name }}</td>
                            <td>
                                <a href="/admin/service-types/{{$d->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <button onclick="admin.deleteAction('{{ $d->id }}', '/admin/service-types/')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <br>
                @include('flash::message')
            </div>
        </div>
    </div>
</div>
@endsection

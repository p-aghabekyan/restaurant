@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: right">
                <a href="/admin/menus/create" class="btn btn-primary">Add Menu</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>#</td>
                        <td>Img</td>
                        <td>Category</td>
                        <td>Actions</td>
                    </tr>
                    @foreach($data as $d)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td><img src="{{ asset("$d->pic") }}" class="img-responsive" height="150px" alt=""></td>
                            <td>{{ $d->categories->name }}</td>
                            <td>
                                <a href="/admin/menus/{{$d->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <button onclick="admin.deleteAction('{{ $d->id }}', '/admin/menus/')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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

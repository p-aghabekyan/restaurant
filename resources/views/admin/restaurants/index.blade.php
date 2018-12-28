@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: right">
                <a href="/admin/restaurants/create" class="btn btn-primary">Add Restaurant</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped datatable" id="datatable">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Contacts</td>
                            <td>a</td>
                            <td>Order</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $d)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{{ $d->contact_phone }}</td>
                                <td>
                                    @foreach($d->languages as $l)
                                        <p><b style="color: red;"><u>{{ $l->code }}</u></b> :</p>
                                        <p> {{ $l->pivot->name }},</p>
                                        <p> {{ $l->pivot->address }},</p>
                                        <p> {{ $l->pivot->description }} </p>
                                    @endforeach
                                </td>
                                <td>{{ $d->order }}</td>
                                <td>
                                    <a href="/admin/restaurants/{{$d->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <form onsubmit="if(getAnswer() == false ) { return false; } " style="display: inline-block;" action="/admin/restaurants/{{$d->id}}" method="post">
                                        @method("DELETE")
                                        {{ csrf_field() }}
                                    </form>
                                    <button onclick="admin.deleteAction('{{ $d->id }}', '/admin/restaurants/')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                @include('flash::message')
            </div>
        </div>
    </div>
</div>
@endsection

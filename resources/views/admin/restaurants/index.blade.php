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
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>#</td>
                        <td>Contacts</td>
                        <td>Order</td>
                        <td>Actions</td>
                    </tr>
                    @foreach($data as $d)
                        <?php $contact = json_decode($d->contact_phone, true); ?>
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{ $contact['phone'] }} {{ $contact['address'] }}</td>
                            <td>{{ $d['order'] }}</td>
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
                </table>
                <br>
                @include('flash::message')
            </div>
        </div>
    </div>
</div>
@endsection

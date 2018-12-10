@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: right">
                <a href="/admin/languages/create" class="btn btn-primary">Add Language</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>#</td>
                        <td>Language</td>
                        <td>Code</td>
                        <td>Default</td>
                        <td>Actions</td>
                    </tr>
                    @foreach($data as $d)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{ $d['name'] }}</td>
                            <td>{{ $d['code'] }}</td>
                            <td>{{ $d['default'] }}</td>
                            <td>
                                <a href="/admin/languages/{{$d->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <button onclick="admin.deleteAction('{{ $d->id }}', '/admin/languages/')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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

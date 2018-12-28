@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: right">
                <a href="/admin/images/create" class="btn btn-primary">Add Image</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>#</td>
                        <td>Image</td>
                        <td>Img URL</td>
                        <td>Actions</td>
                    </tr>
                    @foreach($data as $d)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td><img class="img-responsive" height="150px" src="{{ asset("$d->img") }}" alt=""></td>
                            <td>{{ $d->img }}</td>
                            <td>
                                {{--<a href="/admin/images/{{$d->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>--}}
                                <button onclick="admin.deleteAction('{{ $d->id }}', '/admin/images/')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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

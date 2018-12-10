@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/images" method="post" enctype="multipart/form-data" class="col-md-12 uploader">
                    {{ csrf_field() }}
                    <?php echo '<div style="color: red;">'. $errors->first('files') . '</div>'; ?>
                    <input type="file" name="files" class="dropify" data-width="100%">
                    <div class="form-group" style="text-align: right; margin-top: 10px;">
                        <input type="submit" class="btn btn-success" value="store">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

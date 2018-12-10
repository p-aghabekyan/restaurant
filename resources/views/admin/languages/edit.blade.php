@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/languages/{{ $data->id }}" method="post" class="col-md-4">
                    {{ csrf_field() }}
                    @method("PUT")
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('name') . '</div>'; ?>
                        <label for="language" class="control-label">Language</label>
                        <input type="text" required name="name" placeholder="Language" class="form-control" id="language" value="{{ $data->name }}" >
                    </div>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('code') . '</div>'; ?>
                        <label for="code" class="control-label">Code</label>
                        <input type="text" name="code" placeholder="Code" class="form-control" id="code" value="{{ $data->code }}" >
                    </div>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('default') . '</div>'; ?>
                        <label for="default" class="control-label">Default</label>
                        <input type="number" name="default" placeholder="default" class="form-control" id="default" value="{{ $data->default }}" >
                    </div>
                    <div class="form-group" style="text-align: right">
                        <input type="submit" required class="btn btn-success" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

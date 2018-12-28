@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/staff-types" method="post" enctype="multipart/form-data" class="col-md-4">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('name') . '</div>'; ?>
                        <label for="name" class="control-label">Staff Type</label>
                        <input type="text" required name="name" placeholder="Name" class="form-control" id="name" value="{{ old('name') }}" >
                    </div>
                    <div class="form-group" style="text-align: right">
                        <input type="submit" class="btn btn-success" value="Store">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

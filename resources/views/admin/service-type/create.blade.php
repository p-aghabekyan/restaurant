@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/service-types" method="post" enctype="multipart/form-data" class="col-md-12">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <?php echo '<div style="color: red;">' . $errors->first('staff_type_id') . '</div>'; ?>
                        <label for="staff_type" class="control-label">Staff Type</label>
                        <select required class="form-control" name="staff_type_id" id="staff_type">
                            <option value="">Select Staff Type</option>
                            @foreach($data['staff_type'] as $staff)
                                <option <?php if( empty(old('staff_type_id')) ) { old('staff_type_id') == $staff->id ? 'selected' : ''; } ?> value="{{ $staff->id }}">{{ $staff->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('name') . '</div>'; ?>
                        <label class="control-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    <hr>
                    <span class="ajax_here"></span>
                    <div class="form-group">
                        <button type="button" onclick="admin.getForm('service_types')" class="form-control btn btn-default"><i class="mdi mdi-plus"></i></button>
                    </div>
                    <div class="form-group" style="text-align: right">
                        <input type="submit" class="btn btn-success" value="Store">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

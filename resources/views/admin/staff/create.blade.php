@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/staff" method="post" class="col-md-12">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('staff_type_id') . '</div>'; ?>
                        <label for="name" class="control-label">Staff Type</label>
                        <select required name="staff_type_id" class="form-control" id="">
                            <option value="">Select Staff Type</option>
                            @foreach($data['staff_type'] as $key)
                                <option value="{{ $key->id }}">{{ $key->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <span class="ajax_here"></span>
                    <div class="form-group">
                        <button type="button" onclick="admin.getForm('staff')" class="form-control btn btn-default"><i class="mdi mdi-plus"></i></button>
                    </div>
                    <div class="form-group" style="text-align: right">
                        <input type="submit" class="btn btn-success" value="Store">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/staff/{{ $data['data']->id }}/" method="post" class="col-md-12">
                    {{ csrf_field() }}
                    @method("PUT")
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('staff_type_id') . '</div>'; ?>
                        <label for="name" class="control-label">Staff Type</label>
                        <select required name="staff_type_id" class="form-control" id="">
                            <option value="">Select Staff Type</option>
                            @foreach($data['staff_type'] as $key)
                                <option @if($key->id == $data['data']->staff_type_id) {{ 'selected' }} @endif value="{{ $key->id }}">{{ $key->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <span class="ajax_here">
                        @foreach($data['data']->languages as $bin => $key)
                            <script>count++</script>
                            <div class="main" style="margin-top: 10px">
                                <div class="form-group">
                                    <label for="language" class="control-label">Select Language</label>
                                    <select name="data[{{ $bin }}][language_id]" onchange="admin.getData(this, 'address'), admin.getLang(this)" id="language" class="form-control language" required>
                                        <option value="">Select Language</option>
                                        @foreach($data['languages'] as $d)
                                            <option @if($key->pivot->language_id == $d->id) {{ 'selected' }} @endif value="{{ $key->id }}">{{ $key->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom: 10px">
                                        <label for="name" class="control-label">First Name</label>
                                        <input type="text" name="data[{{ $bin }}][firstname]" placeholder="First Name" value="{{ $key->pivot->firstname }}" class="form-control name" id="name" required>
                                    </div>
                                    <div class="col-md-11" style="margin-bottom: 10px">
                                        <label for="name" class="control-label">Last Name</label>
                                        <input type="text" name="data[{{ $bin }}][lastname]" placeholder="Last Name" value="{{ $key->pivot->lastname }}" class="form-control name" id="name" required>
                                    </div>
                                    <div class="col-md-1" style="transform: translateY(25px)">
                                        <button onclick="if (confirm('Are You Sure You Want To Delete This Row') == false) return false; admin.deleteRow(this), admin.getLang()" type="button" class="btn btn-danger"><i class="mdi mdi-minus"></i></button>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        @endforeach
                    </span>
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

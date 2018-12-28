@extends('layouts.app')
@section('content')
    <?php $dec_dat = json_decode($data->contact_phone, true); ?>
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/restaurants/{{$data->id}}" method="post" class="col-md-12">
                    {{ csrf_field() }}
                    @method('PUT')

                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('phone') . '</div>'; ?>
                        <label for="phone" class="control-label">Phone</label>
                        <input type="text" required name="phone" placeholder="Phone" class="form-control" id="phone" value="{{ $data->contact_phone }}" >
                    </div>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('order') . '</div>'; ?>
                        <label for="order" class="control-label">Order</label>
                        <input type="number" name="order" placeholder="Order" class="form-control" id="order" value="{{ $data->order }}" >
                    </div>
                    <hr>
                    <span class="ajax_here">
                        @foreach($data->languages as $bin => $l)
                            <script>count++;</script>
                            <div class="main" style="margin-top: 10px">
                                <div class="form-group">
                                    <label for="language" class="control-label">Select Language</label>
                                    <select name="data[{{ $bin }}][language_id]" onchange="admin.getData(this, 'address'), admin.getLang(this)" id="language" class="form-control language" required>
                                        <option value="">Select Language</option>
                                        @foreach($data['languages'] as $key)
                                            <option @if($l->id == $key->id) {{ 'selected' }} @endif value="{{ $key->id }}">{{ $key->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom: 10px">
                                        <label for="name" class="control-label">Name</label>
                                        <input type="text" name="data[{{ $bin }}][name]" placeholder="Name" class="form-control name" id="name" value="{{$l->pivot->name}}" required>
                                    </div>
                                    <div class="col-md-12" style="margin-bottom: 10px">
                                        <label for="desc" class="control-label">Description</label>
                                        <textarea name="data[{{ $bin }}][description]" id="desc" cols="30" rows="10" class="form-control">"{{$l->pivot->description}}"</textarea>
                                    </div>
                                    <div class="col-md-11">
                                        <label for="address" class="control-label">Address</label>
                                        <input type="text" name="data[{{ $bin }}][address]" placeholder="Address" class="form-control address" id="address" required value="{{$l->pivot->name}}">
                                    </div>
                                    <div class="col-md-1" style="transform: translateY(25px)">
                                        <button type="button" onclick="if (confirm('Are You Sure You Want To Delete This Row') == false) return false; admin.deleteRow(this), admin.getLang()" class="btn btn-danger"><i class="mdi mdi-minus"></i></button>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        @endforeach
                    </span>
                    <div class="form-group">
                        <button type="button" onclick="admin.getForm('address')" class="form-control btn btn-default"><i class="mdi mdi-plus"></i></button>
                    </div>
                    <div class="form-group" style="text-align: right">
                        <input type="submit" required class="btn btn-success" value="Store">
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

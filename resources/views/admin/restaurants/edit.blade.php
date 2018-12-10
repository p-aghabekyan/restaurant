@extends('layouts.app')
@section('content')
    <?php $dec_dat = json_decode($data->contact_phone, true); ?>
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/restaurants/{{$data->id}}" method="post" class="col-md-4">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('phone') . '</div>'; ?>
                        <label for="phone" class="control-label">Phone</label>
                        <input type="text" required name="phone" placeholder="Phone" class="form-control" id="phone" value="{{ $dec_dat['phone'] }}" >
                    </div>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('address') . '</div>'; ?>
                        <label for="address" class="control-label">Address</label>
                        <input type="text" name="address" placeholder="Address" class="form-control" id="address" value="{{ $dec_dat['address'] }}" >
                    </div>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('order') . '</div>'; ?>
                        <label for="order" class="control-label">Order</label>
                        <input type="number" name="order" placeholder="Order" class="form-control" id="order" value="{{ $data->order }}" >
                    </div>
                    <div class="form-group" style="text-align: right">
                        <input type="submit" required class="btn btn-success" value="Store">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

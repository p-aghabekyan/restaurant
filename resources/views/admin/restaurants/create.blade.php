@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/restaurants" method="post" class="col-md-12">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('phone') . '</div>'; ?>
                        <label for="phone" class="control-label">Phone</label>
                        <input type="text" required name="phone" placeholder="Phone" class="form-control" id="phone" value="{{ old('phone') }}" >
                    </div>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('order') . '</div>'; ?>
                        <label for="order" class="control-label">Order</label>
                        <input type="number" name="order" placeholder="Order" class="form-control" id="order" value="{{ old('order') }}" >
                    </div>
                    <hr>
                    <span class="ajax_here"></span>
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

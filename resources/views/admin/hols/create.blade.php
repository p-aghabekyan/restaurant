@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/hols" method="post" class="col-md-12">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <?php echo '<div style="color: red;">' . $errors->first('volume') . '</div>'; ?>
                        <label for="" class="control-label">Volume</label>
                        <input type="number" class="form-control" placeholder="Volume" name="volume">
                    </div>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">' . $errors->first('restaurant_id') . '</div>'; ?>
                        <label for="" class="control-label">Restaurant</label>
                        <select name="restaurant_id" class="form-control" required id="">
                            <option value="">Select Restaurant</option>
                            @foreach($data as $d)
                                <option value="{{ $d->id }}">{{ $d->languages[0]->pivot->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <span class="ajax_here"></span>
                    <div class="form-group">
                        <button type="button" onclick="admin.getForm('hols')" class="form-control btn btn-default"><i class="mdi mdi-plus"></i></button>
                    </div>
                    <div class="form-group" style="text-align: right">
                        <input type="submit" class="btn btn-success" value="Store">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/menus" method="post" enctype="multipart/form-data" class="col-md-12">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <?php echo '<div style="color: red;">' . $errors->first('category') . '</div>'; ?>
                        <label for="categories" class="control-label">Category</label>
                        <select required class="form-control" name="category" id="categories">
                            <option value="">Select Category</option>
                            @foreach($data['categories'] as $category)
                                <option <?php if( empty(old('category')) ) { old('category') == $category->id ? 'selected' : ''; } ?> value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('pic') . '</div>'; ?>
                        <label for="pic" class="control-label">Picture</label>
                        <div style="height: 150px; width: 100%; text-align: center" class="img_choose_div">
                            <img class="img-responsive" height="150px" onclick="admin.chooseImage(this)" src=" @if( old('pic') ) {{ asset(old('pic')) }} @else {{ asset('https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png') }}" @endif alt="">
                            <input type="hidden" required name="pic" placeholder="Picture" class="form-control " id="pic" value="{{ 'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png' }}" >
                        </div>
                    </div>
                    <hr>
                    <span class="ajax_here"></span>
                    <div class="form-group">
                        <button type="button" onclick="admin.getForm('menus')" class="form-control btn btn-default"><i class="mdi mdi-plus"></i></button>
                    </div>
                    <div class="form-group" style="text-align: right">
                        <input type="submit" class="btn btn-success" value="Store">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

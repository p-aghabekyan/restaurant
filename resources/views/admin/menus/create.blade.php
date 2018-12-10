@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/menus" method="post" enctype="multipart/form-data" class="col-md-4">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <?php echo '<div style="color: red;">' . $errors->first('category') . '</div>'; ?>
                        <label for="categories" class="control-label">Category</label>
                        <select required class="form-control" name="category" id="categories">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option <?php if( empty(old('category')) ) { old('category') == $category->id ? 'selected' : ''; } ?> value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
<!--                        --><?php //echo '<div style="color: red;">'. $errors->first('name') . '</div>'; ?>
                        <label for="pic" class="control-label">Picture</label>
                        <input type="text" name="pic" placeholder="Picture" class="form-control" id="pic" value="{{ old('pic') }}" >
                    </div>
                    <div class="form-group" style="text-align: right">
                        <input type="submit" class="btn btn-success" value="Store">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

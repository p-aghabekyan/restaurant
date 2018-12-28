@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/menus/{{ $data['menus']->id }}" method="post" enctype="multipart/form-data" class="col-md-12">
                    {{ csrf_field() }}
                    @method("PUT")
                    <div class="form-group">
                        <?php echo '<div style="color: red;">' . $errors->first('category') . '</div>'; ?>
                        <label for="categories" class="control-label">Category</label>
                        <select required class="form-control" name="category" id="categories">
                            <option value="">Select Category</option>
                            @foreach($data['categories'] as $category)
                                <option @if($data['menus']->category_id == $category->id) {{'selected'}} @endif value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group" style="">
                        <?php echo '<div style="color: red;">'. $errors->first('pic') . '</div>'; ?>
                        <label for="pic" class="control-label">Picture</label>
                        <div style="height: 150px; width: 100%; text-align: center" class="img_choose_div">
                            <img class="img-responsive" height="150px" onclick="admin.chooseImage(this)" src="{{ asset( $data['menus']->pic ) }}" alt="">
                            <input type="hidden" name="pic" placeholder="Picture" class="form-control" id="pic" value="{{ $data['menus']->pic }}" >
                        </div>
                    </div>
                    <span class="ajax_here">
                        @foreach($data['menus']->languages as $bin => $d)
                            <script>count ++</script>
                            <div class="main" style="margin-top: 10px">
                                <div class="form-group">
                                    <label for="language" class="control-label">Select Language</label>
                                    <select name="data[{{ $bin }}][language_id]" onchange="admin.getData(this, 'address'), admin.getLang(this)" id="language" class="form-control language" required>
                                        <option value="">Select Language</option>
                                        @foreach($data['languages'] as $key)
                                            <option @if($key->id == $d->id) {{ 'selected' }} @endif value="{{ $key->id }}">{{ $key->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-11" style="margin-bottom: 10px">
                                        <label for="name" class="control-label">Name</label>
                                        <input type="text" name="data[{{ $bin }}][name]" placeholder="Name" class="form-control name" value="{{ $d->pivot->name }}" id="name" required>
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
                        <button type="button" onclick="admin.getForm('menus')" class="form-control btn btn-default"><i class="mdi mdi-plus"></i></button>
                    </div>
                    <div class="form-group" style="text-align: right">
                        <input type="submit" class="btn btn-success" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/categories/{{ $data['categories']->id }}" method="post" class="col-md-12">
                    {{ csrf_field() }}
                    @method("PUT")
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('name') . '</div>'; ?>
                        <label for="name" class="control-label">Category</label>
                        <input type="text" required name="name" placeholder="Category" class="form-control" id="name" value="{{ $data['categories']->name }}" >
                    </div>
                    <span class="ajax_here">
                        @foreach($data['categories']->languages as $bin => $d)
                            <script>count ++</script>
                            <div class="main" style="margin-top: 10px">
                                <div class="form-group">
                                    <label for="language" class="control-label">Select Language</label>
                                    <select name="data[{{ $bin }}][language_id]" onchange="admin.getData(this, 'address'), admin.getLang(this)" id="language" class="form-control language" required>
                                        <option value="">Select Language</option>
                                        @foreach($data['languages'] as $key)
                                            <option @if($d->id == $key->id) {{ 'selected' }} @endif value="{{ $key->id }}">{{ $key->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom: 10px">
                                        <label for="name" class="control-label">Name</label>
                                        <input type="text" name="data[{{ $bin }}][name]" placeholder="Name" class="form-control name" value="{{ $d->pivot->name }}" id="name" required>
                                    </div>
                                    <div class="col-md-11" style="margin-bottom: 10px">
                                        <label for="desc" class="control-label">Description</label>
                                        <textarea name="data[{{ $bin }}][description]" id="desc" cols="30" rows="10" class="form-control">
                                            {{ $d->pivot->description }}
                                        </textarea>
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
                        <button type="button" onclick="admin.getForm('categories')" class="form-control btn btn-default"><i class="mdi mdi-plus"></i></button>
                    </div>
                    <div class="form-group" style="text-align: right">
                        <input type="submit" class="btn btn-success" value="Store">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

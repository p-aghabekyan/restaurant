@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/hols/{{ $data['data']->id }}" method="post" class="col-md-12">
                    {{ csrf_field() }}
                    @method("PUT")
                    <div class="form-group">
                        <?php echo '<div style="color: red;">' . $errors->first('volume') . '</div>'; ?>
                        <label for="" class="control-label">Volume</label>
                        <input type="number" class="form-control" placeholder="Volume" value="{{$data['data']->volume}}" required name="volume">
                    </div>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">' . $errors->first('restaurant_id') . '</div>'; ?>
                        <label for="" class="control-label">Restaurant</label>
                        <select name="restaurant_id" class="form-control" required id="">
                            <option value="">Select Restaurant</option>
                            @foreach($data['restaurants'] as $d)
                                <option @if($data['data']->restaurant_id == $d->id) {{ 'selected' }} @endif value="{{ $d->id }}">{{ $d->languages[0]->pivot->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <span class="ajax_here">
                    @foreach($data['data']->languages as $bin => $l)
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
                                    <div class="col-md-11" style="margin-bottom: 10px">
                                        <label for="desc" class="control-label">Description</label>
                                        <textarea name="data[{{ $bin }}][description]" id="desc" cols="30" rows="10" class="form-control">"{{$l->pivot->description}}"</textarea>
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
                        <button type="button" onclick="admin.getForm('hols')" class="form-control btn btn-default"><i class="mdi mdi-plus"></i></button>
                    </div>
                    <div class="form-group" style="text-align: right">
                        <input type="submit" class="btn btn-success" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

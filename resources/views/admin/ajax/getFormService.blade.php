<div class="main" style="margin-top: 10px">
    <div class="form-group">
        <label for="language" class="control-label">Select Language</label>
        <select name="data[{{ $data['count'] }}][language_id]" onchange="admin.getData(this, 'address'), admin.getLang(this)" id="language" class="form-control language" required>
            <option value="">Select Language</option>
            @foreach($data['languages'] as $key)
                <option value="{{ $key->id }}">{{ $key->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="row">
        <div class="col-md-11" style="margin-bottom: 10px">
            <label for="name" class="control-label">Name</label>
            <input type="text" name="data[{{ $data['count'] }}][name]" placeholder="Name" class="form-control name" id="name" required>
        </div>
        <div class="col-md-1" style="transform: translateY(25px)">
            <button onclick="if (confirm('Are You Sure You Want To Delete This Row') == false) return false; admin.deleteRow(this), admin.getLang()" type="button" class="btn btn-danger"><i class="mdi mdi-minus"></i></button>
        </div>
    </div>
    <hr>
</div>

<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Choose The Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <table style="width: 100%" class="table table-bordered table-striped dataTable" id="dataTable">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Image</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
            @foreach($images as $key)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td><img src='{{ asset("$key->img") }}' class="img-responsive" height="100px" alt=""></td>
                    <td><button onclick="admin.checkImage('{{ asset("$key->img") }}')" class="btn btn-primary"><i class="mdi mdi-check"></i></button></td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td>#</td>
                    <td>Image</td>
                    <td>Action</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="modal-footer" style="text-align: right">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>


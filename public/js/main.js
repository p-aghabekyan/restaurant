class AdminActions{
    deleteAction(id, prefix){
        $("#mi-modal").modal('show');
        $("#mi-modal form").attr('action', prefix + id);
    }
}
var admin = new AdminActions();

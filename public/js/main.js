var count = 0;

class AdminActions {

    constructor() {
        this.token = $('meta[name="csrf-token"]').attr('content');
        this.pic;
    }

    deleteAction(id, prefix) {
        $("#mi-modal").modal('show');
        $("#mi-modal form").attr('action', prefix + id);
    }

    deleteNotif() {
        $(document).find('.alert').hide(1000);
    }

    chooseImage(_this) {
        this.pic = _this;
        $.post("/admin/getImages", {_token: this.token}, function (data) {
            $("#myModal .modal-dialog").html(data);
            $('#myModal').modal();
            $('#dataTable').DataTable({
                drawCallback: function () {
                    console.log('Table redrawn ' + new Date());
                }
            });
            $("#myModal").modal();
        });

    }

    checkImage(hr) {
        let pic = this.pic;
        $(pic).attr('src', hr);
        hr = hr.split('public');
        hr = hr[1];
        $(pic).parent().find('input').val('public' + hr);
        $('#myModal').modal('hide');
    }

    getData(_this, url) {
        // $.post("/admin/getData", {_token: this.token, id: $(_this).val(), data: url}, function (data) {
        //     data = JSON.parse(data);
        //     if (url == 'address') {
        //         $("." + url).val(data.address)
        //     }
        // });
    }

    getForm(data) {
        let _this = this;
        $.post("/admin/getForm", {_token: this.token, data: data, count: count}, function (data) {
            $(document).find(".ajax_here").append(data);
            _this.getLang();
        });
        count++;
    }

    deleteRow(_this) {
        $(_this).parentsUntil('.ajax_here').remove();
        let id = $(this).parentsUntil('.ajax_here').find('select').val();
        console.log(id);
    }

    getLang(_this=false) {
        let chosen_languages = [];
        $(document).find(".language").each(function(){
            if($(this).val() != ""){
                chosen_languages.push($(this).val());
            }
        });
        $(document).find(".language option").removeAttr('disabled');
        chosen_languages.forEach(function(e){
            $(document).find(".language").each(function(){
                $(this).find("option").each(function(){
                    if( ($(this).val() != "") && (e == $(this).val()) && ($(this).is(":selected") == false) ){
                        $(this).attr('disabled', true);
                    }
                });
            });
        });
        console.log(chosen_languages);
    }

    changeLang(_this){
        let lang = $(_this).val();
        $.post("/admin/changeLang", {_token: this.token, lang: lang}, function (data) {
            location.reload();
        });
    }
}

var admin = new AdminActions();
setTimeout(admin.deleteNotif, 3000);


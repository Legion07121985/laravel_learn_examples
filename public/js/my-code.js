// Set good height for textarea element in table for change data
$("textarea[name='col1_data']").height($("textarea[name='col1_data']")[0].childNodes[0].length);
$("textarea[name='col2_data']").height($("textarea[name='col2_data']")[0].childNodes[0].length);
$("textarea[name='col3_data']").height($("textarea[name='col3_data']")[0].childNodes[0].length);
$("textarea[name='col4_data']").height($("textarea[name='col4_data']")[0].childNodes[0].length);
$("textarea[name='description']").height($("textarea[name='description']")[0].childNodes[0].length);


// setTimeout(function() { 
    $('#delete_btn_frm').click(
        function(){
                $('#modal-header').css('background-color', '#c51f1a');
                $('#exampleModalLabel').html('Delete this table?');
                $('#modal-body').html('<strong style="color: red">Are you sure you want to delete the table data? Once confirmed, the data will be lost forever!</strong>');
                $('#modal_save_button').removeClass('btn-success');
                $('#modal_save_button').removeClass('btn-primary');
                $('#modal_save_button').addClass("btn-danger");
                $('#modal_save_button').removeClass('update');
                $('#modal_save_button').addClass("delete");
            }
        );
//  }, 15000);

    $('#update_btn_frm').click(
    function(){
            $('#modal-header').css('background-color', '#2d995b');
            $('#exampleModalLabel').html('UPDATE data for this table?');
            $('#modal-body').html('<strong style="color: #2d995b">Are you sure you want to UPDATE the table data? The changes the data will be lost forever!</strong>');
            $('#modal_save_button').removeClass('btn-danger');
            $('#modal_save_button').removeClass('btn-primary');
            $('#modal_save_button').addClass("btn-success");
            $('#modal_save_button').removeClass('delete');
            $('#modal_save_button').addClass("update");
        }
    );

    $('#modal_save_button').click(
    function(){
        if ($('#modal_save_button').hasClass('update')==true){
            $('#updt_btn_frm_ok').click();
        } 
        if ($('#modal_save_button').hasClass('delete')==true){
            $('#dlt_btn_frm_ok').click();
        }
    }
)
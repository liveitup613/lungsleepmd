var editedID = 0;

$('#btnAddNewService').click(function() {
    $('#AddNewModal').modal('show');
});

$('#btnAddNew').click(function() {
    if (!$('#addNewForm').valid())
        return;

    $.ajax({
        url: base_url + 'api/services/additional/add',
        type: 'post',
        data: {
            Title : $('#ServiceTitle').val()
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Add New Additional Service');
        }        
    })
});

function deleteService(ID) {

    editedID = ID;
    $('#deleteModal').modal('show');
}

$('#btnDeleteModalYes').click(function() {
    $.ajax({
        url : base_url + 'api/services/additional/delete',
        type: 'post',
        data: {
            ID : editedID
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Additional Service');
        }
    })
});

function editService(ID) {
    editedID = ID;

    $.ajax({
        url: base_url + 'api/services/additional/update',
        type: 'post',
        data : {
            ID: editedID,
            Title: $('#value' + editedID).val()
        },
        success: function() {
            showSuccessToastr('Update Additional Service');
        },
        error: function(err) {
            showErrorToastr('Update Additional Service');
        }
    })
}


var editedID = 0;

$('#btnAddNewForm1').click(function() {
    $('#Type').val('Medical');
    $('#AddNewModal').modal('show');
});

$('#btnAddNewForm2').click(function() {
    $('#Type').val('Instruction');
    $('#AddNewModal').modal('show');
});

$('#btnAddNewForm3').click(function() {
    $('#Type').val('Sleep');
    $('#AddNewModal').modal('show');
});

$('#btnAddNewForm4').click(function() {
    $('#Type').val('Other');
    $('#AddNewModal').modal('show');
});

$('#btnAddNew').click(function() {
    if (!$('#addNewForm').valid())
        return;

    $.ajax({
        url: base_url + "api/patient-form/add",
        method: "POST",
        data: new FormData(document.getElementById('addNewForm')),
        contentType: false,
        cache: false,
        processData: false,
        dataType: "json",
        success: function (res) {
            if (res.success == true) {
                document.location.reload();
            }
            else {
                showErrorToastr('Add New Patient From');
            }
        },
        error: function (err) {
            showErrorToastr('Add New Patient From');
        }
    });
});

function deleteForm(ID) {

    editedID = ID;
    $('#deleteModal').modal('show');
}

$('#btnDeleteModalYes').click(function() {
    $.ajax({
        url : base_url + 'api/patient-form/delete',
        type: 'post',
        data: {
            ID : editedID
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Patient Form');
        }
    })
});

function editForm(ID) {
    editedID = ID;

    $.ajax({
        url: base_url + 'api/patient-form/get',
        type: 'post',
        data : {
            ID: editedID
        },
        success: function(res) {
            var data = JSON.parse(res);            

            if (data.success == false) {
                showErrorToastr('Get Patient Form');
                return;
            }

            data = data.data;
            $('#FormTitleEdit').val(data.Title);

            $('#EditModal').modal('show');
        },
        error: function(err) {
            showErrorToastr('Get Patient Form');
        }
    });
}

$('#btnUpdate').click(function() {
    if (!$('#editForm').valid())
        return;

    $('#editedID').val(editedID);
    
    $.ajax({
        url: base_url + "api/patient-form/update",
        method: "POST",
        data: new FormData(document.getElementById('editForm')),
        contentType: false,
        cache: false,
        processData: false,
        dataType: "json",
        success: function (res) {
            if (res.success == true) {
                document.location.reload();
            }
            else {
                showErrorToastr('Update Patient From');
            }
        },
        error: function (err) {
            showErrorToastr('Update Patient From');
        }
    });
});

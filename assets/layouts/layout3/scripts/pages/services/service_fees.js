var editedID = 0;

$('#btnAddNewService').click(function() {
    $('#AddNewModal').modal('show');
});

$('#btnAddNew').click(function() {
    if (!$('#addNewForm').valid())
        return;

    $.ajax({
        url: base_url + 'api/services/fee/add',
        type: 'post',
        data: {
            Title : $('#ServiceTitle').val(),
            Price : $('#ServiceFee').val()
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Add New Service Fee');
        }        
    })
});

function deleteService(ID) {

    editedID = ID;
    $('#deleteModal').modal('show');
}

$('#btnDeleteModalYes').click(function() {
    $.ajax({
        url : base_url + 'api/services/fee/delete',
        type: 'post',
        data: {
            ID : editedID
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Service Fee');
        }
    })
});

function editService(ID) {
    editedID = ID;

    $.ajax({
        url: base_url + 'api/services/fee/get',
        type: 'post',
        data : {
            ID: editedID
        },
        success: function(res) {
            var data = JSON.parse(res);            

            if (data.success == false) {
                showErrorToastr('Get Service Fee');
                return;
            }

            data = data.data;
            $('#ServiceTitleEdit').val(data.Title);
            $('#ServiceFeeEdit').val(data.Price);

            $('#EditModal').modal('show');
        },
        error: function(err) {
            showErrorToastr('Get Service Fee');
        }
    });
}

$('#btnUpdate').click(function() {
    if (!$('#addNewForm').valid())
        return;

    $.ajax({
        url: base_url + 'api/services/fee/update',
        type: 'post',
        data: {
            ID : editedID,
            Title : $('#ServiceTitleEdit').val(),
            Price : $('#ServiceFeeEdit').val()
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Update Service Fee');
        }        
    })
});

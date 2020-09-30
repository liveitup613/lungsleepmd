var editedID = 0;

$('#btnAddNewVideo').click(function() {
    $('#AddNewModal').modal('show');
});

$('#btnAddNew').click(function() {
    if (!$('#addNewForm').valid())
        return;

    $.ajax({
        url: base_url + 'api/medical-video/add',
        type: 'post',
        data: {
            Title : $('#Title').val(),
            YoutubeID : $('#YoutubeID').val()
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Add New Medical Video');
        }        
    })
});

function deleteVideo(ID) {

    editedID = ID;
    $('#deleteModal').modal('show');
}

$('#btnDeleteModalYes').click(function() {
    $.ajax({
        url : base_url + 'api/medical-video/delete',
        type: 'post',
        data: {
            ID : editedID
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Medical Video');
        }
    })
});

function editVideo(ID) {
    editedID = ID;

    $.ajax({
        url: base_url + 'api/medical-video/get',
        type: 'post',
        data : {
            ID: editedID
        },
        success: function(res) {
            var data = JSON.parse(res);            

            if (data.success == false) {
                showErrorToastr('Get Medical Video');
                return;
            }

            data = data.data;
            $('#TitleEdit').val(data.Title);
            $('#YoutubeIDEdit').val(data.YoutubeID);

            $('#EditModal').modal('show');
        },
        error: function(err) {
            showErrorToastr('Get Medical Video');
        }
    });
}

$('#btnUpdate').click(function() {
    if (!$('#editForm').valid())
        return;

    $.ajax({
        url: base_url + 'api/medical-video/update',
        type: 'post',
        data: {
            ID : editedID,
            Title : $('#TitleEdit').val(),
            YoutubeID : $('#YoutubeIDEdit').val()
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Update Medical Video');
        }        
    })
});

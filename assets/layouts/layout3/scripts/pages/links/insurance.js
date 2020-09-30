var editedID = 0;

$('#btnAddNewInsurance').click(function() {
    $('#inputType').val('Insurance');
    $('#filePortfolio').click();
});

$('#filePortfolio').change(function() {
    console.log('image selected');

    $.ajax({
		url: base_url + "api/resource/add",
		method: "POST",
		data: new FormData(document.getElementById('imageForm')),
		contentType: false,
		cache: false,
		processData: false,
		dataType: "json",
		success: function (res) {
			if (res.success == true) {
                document.location.reload();
            }
            else {
                showErrorToastr('Add New ' + $('#inputType').val());
            }
        },
        error: function (err) {
            showErrorToastr('Add New ' + $('#inputType').val());
        }
	});
});

function delelteInsurance(ID) {
    editedID = ID;
    $('#deleteModal').modal('show');
}


$('#btnDeleteModalYes').click(function() {
    $.ajax({
        url : base_url + 'api/resource/delete',
        type: 'post',
        data: {
            ID : editedID
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Resource');
        }
    })
})
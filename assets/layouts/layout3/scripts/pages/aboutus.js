var ComponentsEditors = function () {
    
    var handleWysihtml5 = function () {
        if (!jQuery().wysihtml5) {
            return;
        }

        if ($('.wysihtml5').size() > 0) {
            $('.wysihtml5').wysihtml5({
                "stylesheets": ["../assets/global/plugins/bootstrap-wysihtml5/wysiwyg-color.css"]
            });
        }
    }

    var handleSummernote = function () {
        $('#sumnoteContent').summernote({height: 300});
        $('#sumnoteClinical').summernote({height: 300});
        //API:
        //var sHTML = $('#summernote_1').code(); // get code
        //$('#summernote_1').destroy(); // destroy
    }

    return {
        //main function to initiate the module
        init: function () {
            handleWysihtml5();
            handleSummernote();
        }
    };

}();

jQuery(document).ready(function() {    
    ComponentsEditors.init(); 
});

var editedID = 0;
var type='Staff';
$('#btnUpdate').click(function() {
    $.ajax({
        url : base_url + 'api/about-us/update',
        type : 'post',
        data : {            
            Content: $('#sumnoteContent').code(),
            ClinicalStaff: $('#sumnoteClinical').code()
        },
        success: function(res) {
            var data = JSON.parse(res);

            if (data.success == true)
                showSuccessToastr('Update About Us');
            else 
                showErrorToastr('Update About Us');
        },
        error : function(err) {
            showErrorToastr('Update About Us');
        }
    })
});

$('#btnAddNewStaff').click(function() {
    $('#AddNewModal').modal('show');
});

$('#btnAddNew').click(function() {
    if (!$('#addNewForm').valid())
        return;

    $.ajax({
		url: base_url + "api/staff/add",
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
                showErrorToastr('Add New ' + $('#inputType').val());
            }
        },
        error: function (err) {
            showErrorToastr('Add New ' + $('#inputType').val());
        }
	});
})

$('#btnAddNewAssociation').click(function() {
    $('#inputType').val('Association');
    $('#filePortfolio').click();
});

$('#btnAddNewAffiliation').click(function() {
    $('#inputType').val('Affiliation');
    $('#filePortfolio').click();
});

$('#btnAddNewCertification').click(function() {
    $('#inputType').val('Certification');
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

function deleteAssociation(ID) {
    editedID = ID;
    type = 'Association';
    $('#deleteModal').modal('show');
}

function deleteAffiliation(ID) {
    editedID = ID;
    type = 'Affiliation';
    $('#deleteModal').modal('show');
}

function deleteCerfication(ID) {
    editedID = ID;
    type='Certification';
    $('#deleteModal').modal('show');
}

$('#btnDeleteModalYes').click(function() {
    $.ajax({
        url : base_url + (type=='Staff' ? 'api/staff/delete' : 'api/resource/delete'),
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
});

function editStaff(ID) {
    editedID = ID;

    $.ajax({
        url: base_url + 'api/staff/get',
        type: 'post',
        data : {
            ID: editedID
        },
        success: function(res) {
            var data = JSON.parse(res);            

            if (data.success == false) {
                showErrorToastr('Get Staff');
                return;
            }

            data = data.data;
            $('#NameEdit').val(data.Name);
            $('#DescriptionEdit').val(data.Description);

            $('#EditModal').modal('show');
        },
        error: function(err) {
            showErrorToastr('Get Staff');
        }
    });
}

$('#btnUpdateStaff').click(function() {
    if (!$('#editForm').valid())
        return;

    $('#editedID').val(editedID);
    
    $.ajax({
        url: base_url + "api/staff/update",
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
                showErrorToastr('Update Staff');
            }
        },
        error: function (err) {
            showErrorToastr('Update Staff');
        }
    });
});

function deleteStaff(ID) {
    editedID = ID;
    $('#deleteModal').modal('show');
    type = 'Staff';
}
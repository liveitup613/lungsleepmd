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
    $('#deleteModal').modal('show');
}

function deleteAffiliation(ID) {
    editedID = ID;
    $('#deleteModal').modal('show');
}

function deleteCerfication(ID) {
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
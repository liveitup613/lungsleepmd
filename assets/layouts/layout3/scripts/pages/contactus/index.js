
$('#btnUpdateContact').click(function() {
    $.ajax({
        url: base_url + "api/contact/update",
        method: "POST",
        data: new FormData(document.getElementById('contactForm')),
        contentType: false,
        cache: false,
        processData: false,
        dataType: "json",
        success: function (res) {
            if (res.success == true) {
                showSuccessToastr('Update Contact Info');
            }
            else {
                showErrorToastr('Update Contact Info');
            }
        },
        error: function (err) {
            showErrorToastr('Update Contact Info');
        }
    });
});


$('#btnUpdateOfficeHoure').click(function() {
    $.ajax({
        url: base_url + "api/contact/update",
        method: "POST",
        data: new FormData(document.getElementById('officeForm')),
        contentType: false,
        cache: false,
        processData: false,
        dataType: "json",
        success: function (res) {
            if (res.success == true) {
                showSuccessToastr('Update Office Hours');
            }
            else {
                showErrorToastr('Update Office Hours');
            }
        },
        error: function (err) {
            showErrorToastr('Update Office Hours');
        }
    });
});
 

$('#btnUpdatePFTHours').click(function() {
    $.ajax({
        url: base_url + "api/contact/update",
        method: "POST",
        data: new FormData(document.getElementById('pftForm')),
        contentType: false,
        cache: false,
        processData: false,
        dataType: "json",
        success: function (res) {
            if (res.success == true) {
                showSuccessToastr('Update PFT Hours');
            }
            else {
                showErrorToastr('Update PFT Hours');
            }
        },
        error: function (err) {
            showErrorToastr('Update PFT Hours');
        }
    });
});
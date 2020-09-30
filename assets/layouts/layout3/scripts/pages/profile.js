$('.portfolio-camera').click(function() {    
    $('#filePortfolio').click();
});

$('#filePortfolio').change(function () {
    readURL(this, $('#imgPortfolio'));
});

function readURL(input, avatar) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$(avatar)
				.attr('src', e.target.result);
		};

		reader.readAsDataURL(input.files[0]);
	}
}

$('#btnUpdate').click(function() {
    if(!$('#profileForm').valid())
        return;

    var newPassword = $('#NewPassword').val();
    var passfordConfirm = $('#PasswordConfirm').val();

    if (newPassword != passfordConfirm) {
        showErrorToastr('Please make sure your passwords match');
        $('#PasswordConfirm').val('');
        $('#PasswordConfirm').focus();
        return;
    }

    $.ajax({
		url: base_url + "api/profile/update",
		method: "POST",
		data: new FormData(document.getElementById('profileForm')),
		contentType: false,
		cache: false,
		processData: false,
		dataType: "json",
		success: function (res) {
			if (res.success == true) {
                showSuccessToastr('Update Profile');
                $('#PasswordConfirm').val('');
                $('#NewPassword').val('');
                $('#OldPassword').val('');
                $('#OldPassword').focus();
            }
            else {
                showErrorToastr(res.message);
            }
        },
        error: function (err) {
            showErrorToastr('Update Profile');
        }
	});
})
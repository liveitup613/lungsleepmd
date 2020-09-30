$('#btnUpdate').click(function() {
    $.ajax({
        url : base_url + 'api/home/updateContnet',
        type : 'post',
        data : {
            AboutUsContent : $('#AboutUsContent').val(),
            PulmonaryContent : $('#PulmonaryContent').val(),
            SleepDisorderContent: $('#SleepDisorderContent').val(),
            CriticalCareContent: $('#CriticalCareContent').val()
        },
        success: function(res) {
            var data = JSON.parse(res);

            if (data.success == true)
                showSuccessToastr('Update Home Content');
            else 
                showErrorToastr('Update Home Content');
        },
        error : function(err) {
            showErrorToastr('Update Home Content');
        }
    })
});
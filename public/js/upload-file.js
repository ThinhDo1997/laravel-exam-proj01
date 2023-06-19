$(function() {
    $(document).ready(function() {
        $('#submit-btn').click(function(e) {
            e.preventDefault();
            let fileInput = $('#fileSubmit')[0];
            console.log('fileInput:', fileInput);
            let file = fileInput.files;
            console.log(file)
            let formData = 112
                // formData.append('file', file);
            let csrfToken = $('meta[name="csrf-token"]').attr('content');
            console.log('formData:', 112)
            $.ajax({
                url: 'http://127.0.0.1:8000/exam/upload',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'multipart/form-data'
                },
                type: 'POST',
                data: {
                    "formData": formData,
                    "_token": csrfToken,
                },
                processData: false,
                contentType: false,
                success: function(response) {
                    // Xử lý phản hồi thành công
                },
                error: function(xhr, status, error) {
                    // Xử lý lỗi
                }
            });
        });
    });
});

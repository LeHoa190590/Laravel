$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id, url){
    
    if(confirm('Ban co chac chan muon xoa')){
        console.log(url);
        $.ajax({
            type: 'DELETE',
            dataType: 'json',
            data: {id},
            url: 'destroy',
            success: function(result){
                console.log(result.error);
                if(result.error == false){
                    alert(result.message);
                    location.reload();
                }else{ 
                    alert('Xoa khong thanh cong, vui long kiem tra lai ');
                }
            }
        })
    }
}

/* Upload file */
$('#upload').change(function () {
    const form = new FormData();
    form.append('file', $(this)[0].files[0]);

    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        dataType: 'JSON',
        data: form,
        url: '/GiaTien/public/admin/upload/services',
        success: function (results) {
            if (results.error === false) {
                $('#image_show').html('<a href="' + results.url + '" target="_blank">' +
                    '<img src="' + results.url + '" width="100px"></a>');

                $('#thumb').val(results.url);
            } else {
                alert('Upload File Lỗi');
            }
        }
    });
});
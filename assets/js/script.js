const alertData = $('.alert').data(flashdata);


if (alertData) {
    Swal.fire({
        title : 'Data berhasil' + alertData,
        text : ' ditambahkan',
        type : 'success'

    })
}

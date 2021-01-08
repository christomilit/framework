$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Barang');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#serialnumber').val('');
        $('#merk').val('');
        $('#jenis').val('');
        $('#id').val('');
    });


    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Barang');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/code/public/barang/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/code/public/barang/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#serialnumber').val(data.serialnumber);
                $('#merk').val(data.merk);
                $('#jenis').val(data.jenis);
                $('#id').val(data.id);
            }
        });
        
    });

});
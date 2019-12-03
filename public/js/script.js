$(function () {

	$('.tambahData').on('click', function () {
		$('#judulModal').html('Tambah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Tambah Data');
		$('.modal-body form').attr('action', 'http://localhost/php/MVC/public/mahasiswa/tambah')

		$.ajax({
			success: function (data) {
				$('#nama').val(null);
				$('#nrp').val(null);
				$('#email').val(null);
				$('#jurusan').val(null);
				$('#id').val(null);

			}

		})
	})
	$('.editData').on('click', function () {

		$('#judulModal').html('Edit Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Edit Data');
		$('.modal-body form').attr('action', 'http://localhost/php/MVC/public/mahasiswa/edit')

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/php/MVC/public/mahasiswa/getedit',
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				$('#nama').val(data.nama);
				$('#nrp').val(data.nrp);
				$('#email').val(data.email);
				$('#jurusan').val(data.jurusan);
				$('#id').val(data.id);
			}
		})
	})
})
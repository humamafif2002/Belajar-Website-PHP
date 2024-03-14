
$(function(){
  $('.tampilModalUbah').on('click',function(){
    $('#judulModal').html('Ubah Data Mahasiswa');
    $('.modal-footer Button[type=submit]').html('ubah data')
  });
}); 

$(function(){
  $('.tambahDataMahasiswa').on('click',function(){
    $('#judulModal').html('Tambah Data Mahasiswa');
    $('.modal-footer Button[type=submit]').html('tambah data')
  });
}); 
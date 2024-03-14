
$(function(){
  $('.tampilModalUbah').on('click',function(){
    $('#judulModal').html('Ubah Data Mahasiswa');
    $('.modal-footer Button[type=submit]').html('ubah data')
    $('.modal-body form').attr('action','http://localhost/Website%20PHP/Belajar-Website-PHP/phpmvc/public/mahasiswa/ubah')
    // tangkap data
    const id = $(this).data('id');
    $.ajax({
      // request data tanpa mereload website
      url: 'http://localhost/Website%20PHP/Belajar-Website-PHP/phpmvc/public/mahasiswa/getubah',
      // kunjungi url diatas sambil mengirim id
      // id kiri adalah nama data yang dikirim,yang dikanan adalah valuenya atau inputan dari variable id diatas
      data: {id:id},
      // dengan method post
      method : 'post',
      // dan mengembalikan datanya dengan type
      dataType: 'json',
      success :(data)=>{
       $('#nama').val(data.nama);
       $('#nim').val(data.nim);
       $('#email').val(data.email);
       $('#jurusan').val(data.jurusan);
       $('#id').val(data.id);
      }
    })
  });
});  

$(()=>{
  $('.tambahDataMahasiswa').on('click',function(){
    $('#judulModal').html('Tambah Data Mahasiswa');
    $('.modal-footer Button[type=submit]').html('tambah data')
    $('.modal-body form').attr('action','http://localhost/Website%20PHP/Belajar-Website-PHP/phpmvc/public/mahasiswa/tambah')
    $('#nama').val('');
    $('#nim').val('');
    $('#email').val('');
    $('#jurusan').val('');
  });
})
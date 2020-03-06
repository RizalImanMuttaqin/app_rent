
  $(function () {
    // $('#example1').DataTable()
    $('#example').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false
    });
    $('.select2').select2();
    $('.confirmation').on('click', function () {
        return confirm('Apakah anda yakin ingin menghapus data?');
    });
    
    $('.editModal').on('click', function () {
      $('#editModal').modal('show');
      j = $(this).parent().parent().find('#t_judul').text();
      n = $(this).parent().parent().find('#t_nama_kategori').text();
      k  = $(this).parent().parent().find('#t_konten').text();
      ket  = $(this).parent().parent().find('#t_keterangan').text();
      // h  = $(this).parent().parent().parent().find('#hp').text();
      // p  = $(this).parent().parent().parent().find('#pass').val();
      // id   = $(this).parent().parent().parent().find('#id_user').val();
      foto   = $(this).parent().parent().find('#t_foto').val();
      id   = $(this).parent().parent().find('#t_id_berita').val();
      id_a  = $(this).parent().parent().find('#t_id_artikel').val();
      id_k  = $(this).parent().parent().find('#t_id_kegiatan').val();
      id_mm   = $(this).parent().parent().find('#t_id_media').val();

    // alert(id_mm);

      $('#judul').val(j);
      $('#m_keterangan').val(ket);
      $('#id_berita').val(id);
      $('#id_artikel').val(id_a);
      $('#id_kegiatan').val(id_k);
      $('#id_media').val(id_mm);
      $('#ckeditor_edit').val(k);
      CKEDITOR.replace('ckeditor_edit');
      $('#m_foto').attr('src', "../assets/upload/"+foto)
      // $('#editForm').attr('action', "<?php echo/"+id);
    // console.log(tahun);
  });

    $('#editModal').on('hidden.bs.modal', function (e) {
      // CKEDITOR.destroy('ckeditor_edit');
      // alert('www');
      CKEDITOR.instances['ckeditor_edit'].destroy(true);
    });

  })

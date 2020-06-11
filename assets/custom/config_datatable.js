
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
      const _this = $(this);

      foto   = $(this).parent().parent().find('.t_foto').val();

      $('#judul').val(
        _this.parent().parent().find('.t_judul').text().toString()
      );

      $('#m_keterangan').val(
        _this.parent().parent().find('.t_keterangan').text()
      );

      $('#id_product').val(
        _this.parent().parent().find('.t_id_product').val()
      );

      $('#ckeditor_edit').val(
        _this.parent().parent().find('.t_konten').text()
      );

      $('#m_harga_sewa').val(
        _this.parent().parent().find('.t_harga_sewa').text()
      );

      $('#m_harga_crew').val(
        _this.parent().parent().find('.t_harga_crew').text()
      );

      $('#m_stock').val(
        _this.parent().parent().find('.t_stock').text()
      );

      $('#m_id_kategori').val(
        _this.parent().parent().find('.t_id_kategori').val()
      );

      CKEDITOR.replace('ckeditor_edit');
      $('#m_foto').attr('src', "../../assets/upload/"+foto)
      // $('#editForm').attr('action', "<?php echo/"+id);
    // console.log(tahun);
  });

    $('#editModal').on('hidden.bs.modal', function (e) {
      // CKEDITOR.destroy('ckeditor_edit');
      // alert('www');
      CKEDITOR.instances['ckeditor_edit'].destroy(true);
    });

  })

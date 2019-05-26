@extends('layout.admin')
@section('content')
<a href="{{ base_url('dashboard/listing/new') }}" class="btn btn-primary">new listing</a>

<div class="card wow fadeIn">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table" id="tabel_listing">
                <thead class="blue-grey lighten-4">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Min. Deposit</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Bonus</th>
                        <th scope="col">Website Link</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_hapus" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Konfirmasi Hapus</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini.?</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Tidak</button>
                <a href="#" class="btn btn-primary hapus">Ya, hapus</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
   $(document).ready(function () {
       var table = $("#tabel_listing").dataTable({
           "bProcessing": false,
           "bServerSide": true,
           "sAjaxSource": "{{ site_url('dashboard/listing/show') }}",
           "fnRowCallback": function( nRow, aoData, iDisplayIndex ) {
               var index = iDisplayIndex +1;
               $('td:eq(0)',nRow).html(index);
               return nRow;
            },
           "columns": [
               { "data": "nomor",orderable:false,searchable:false },
               { "data": "list_nama", "name": "list_table.list_nama" },
               { "data": "list_min_depo", "name": "list_table.list_min_depo" },
               { "data": "list_rating", "name": "list_table.list_rating" },
               { "data": "list_bonus", "name": "list_table.list_bonus" },
               { "data": "list_web_link", "name": "list_table.list_web_link" },
               { "data": "list_gambar", "name": "list_table.list_gambar" },
               { "data": "actions",orderable:false,searchable:false}
               
               
           ],
           "bJQueryUI": true,
           "sPaginationType": "full_numbers",
           "iDisplayStart ": 20,
           "fnServerData": function (sSource, aoData, fnCallback)
           {
               $.ajax
                       ({
                           "dataType": "json",
                           "type": "POST",
                           "url": sSource,
                           "data": aoData,
                           "success": fnCallback
                       });
           },
           "order": [
               [0, "asc"]
           ]
       });
      
   });
    $('#tabel_listing').on('click','.hapus_record',function(){
        var id=$(this).data('id');
        $('#modal_hapus').modal('show');
        $('.hapus').attr('data-url','<?php echo site_url('dashboard/listing/delete/') ?>'+id);
    });

    //hapus record
    $('.modal-footer').on('click','.hapus',function(){
        var url=$(this).data('url');
        document.location.href=url;
    });
</script>
@endsection
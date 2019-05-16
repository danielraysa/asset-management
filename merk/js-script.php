
<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- SweetAlert2 -->
<script src="../plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
<!-- Select2 -->
<script src="../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(document).ready(function() {
    $('.select-box').select2();
});
</script>
<script>
  $(function () {
    $('#example1').DataTable({
    'autoWidth': true,
    'responsive': true,
    "scrollX": true
});
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
      'responsive'  : true
    })
    $('#example3').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
	$('.modalLink').click(function(){
		var id = $(this).attr('data-id');
		console.log(id);
		$.ajax({
			url:"ajax.php",
			type: "GET",
			data: "ID="+id,
			success:function(result){
				console.log(result)
        var data = JSON.parse(result);
        $('#id_merk').val(data.id);
        $('#merk').val(data.nama);
			}
		});
	});
  $('.modalDelete').click(function(){
    var id = $(this).attr('delete-id');
    console.log(id);
    $("#id-merk").val(id);
	});
</script>
<script>
  $('.logout').on('click', function (event) {
      event.preventDefault();
      swal({
          title: 'Apakah anda ingin keluar?',
          type: 'warning',
          showCancelButton: true,
          //confirmButtonColor: '#d9534f',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes'
      }).then((result) => {
          if (result.value) {
              swal({
                  title: "Success!",
                  text: "Redirecting in 2 seconds.",
                  type: "success",
                  timer: 2000,
                  showConfirmButton: false
                  }).then(function(){
                      window.location.href = "../logout.php";
                      //return false;
                  })
              }
          }
      )
  });
</script>
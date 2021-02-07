<script src="{{asset('assets/plugins/common/common.min.js')}}"></script>
<script src="{{asset('assets/js/custom.min.js')}}"></script>
<script src="{{asset('assets/js/settings.js')}}"></script>
<script src="{{asset('assets/js/gleek.js')}}"></script>
<script src="{{asset('assets/js/styleSwitcher.js')}}"></script>

<!-- Chartjs -->
<script src="{{asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Circle progress -->
<script src="{{asset('assets/plugins/circle-progress/circle-progress.min.js')}}"></script>
<!-- Datamap -->
<script src="{{asset('assets/plugins/d3v3/index.js')}}"></script>
<script src="{{asset('assets/plugins/topojson/topojson.min.js')}}"></script>
<script src="{{asset('assets/plugins/datamaps/datamaps.world.min.js')}}"></script>
<!-- Morrisjs -->
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
<!-- Pignose Calender -->
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
<!-- ChartistJS -->
<script src="{{asset('assets/plugins/chartist/js/chartist.min.js')}}"></script>
<script src="{{asset('assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{asset('assets/js/dashboard/dashboard-1.js')}}"></script>


<script src="{{asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}">
</script>
<script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>

<!-- DATATABLES -->
<script src="{{asset('assets/js/datatables/jquery-3.5.1.min.js')}}"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>

<!-- SWAL -->
<script src="{{asset('assets/js/swal/swal.min.js')}}"></script>
<script type="text/javascript">
if ("{{Session::get('message')}}" == 'Sukses') {
    Swal.fire({
        position: 'inherit',
        icon: 'success',
        title: 'Berhasil disimpan',
        showConfirmButton: false,
        timer: 1500
    });
}

if ("{{Session::get('message')}}" == 'Gagal') {
    Swal.fire({
        position: 'inherit',
        icon: 'error',
        title: 'Oops... Terjadi kesalahan',
        showConfirmButton: false,
        timer: 1500
    });
}

if ("{{Session::get('message')}}" == 'Peringatan') {
    Swal.fire({
        position: 'inherit',
        icon: 'warning',
        title: 'Oops... Gagal disimpan \n' + 'Data yang disimpan telah terdaftar',
        showConfirmButton: false,
        timer: 1500
    });
}

if ("{{Session::get('message')}}" == 'Login') {
    Swal.fire({
        position: 'inherit',
        icon: 'warning',
        title: 'Maaf Anda belum melakukan login',
        showConfirmButton: false,
        timer: 1500
    });
}

if ("{{Session::get('message')}}" == 'Hapus') {
    Swal.fire({
        position: 'inherit',
        icon: 'success',
        title: 'Berhasil dihapus',
        showConfirmButton: false,
        timer: 1500
    });
}

if ("{{Session::get('message')}}" == 'GagalLogin') {
    Swal.fire({
        position: 'inherit',
        icon: 'error',
        title: 'Oops... Username atau Password Anda Salah',
        showConfirmButton: false,
        timer: 1500
    });
}
</script>
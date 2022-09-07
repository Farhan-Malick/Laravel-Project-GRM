<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('public/assets/js/owl.carousel.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
</script>
{{-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script> --}}

<!-- AdminLTE App -->
{{-- <script src="{{ asset('assets/links/dist/js/adminlte.min.js') }}"></script> --}}

<script>
    @error('email')
        $('#Login').modal('show');
    @enderror
</script>


<!-- ================== BEGIN PAGE LEVEL JS ================== -->

<script src="{{ asset('Raw/admin/assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>

<script src="{{ asset('Raw/admin/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ asset('Raw/admin/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
</script>

<script src="{{ asset('Raw/admin/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
</script>

<script src="{{ asset('Raw/admin/assets/js/demo/table-manage-default.demo.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.js"
integrity="sha512-T5Bneq9hePRO8JR0S/0lQ7gdW+ceLThvC80UjwkMRz+8q+4DARVZ4dqKoyENC7FcYresjfJ6ubaOgIE35irf4w=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

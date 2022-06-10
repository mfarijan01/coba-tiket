<!-- Fontawesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Plugin -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('assets-fe/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script>
    @if(Session::get("status"))
        @if(Session::get("status")=='success')
            Swal.fire(
                'Success',
                '{{Session::get("action")." ".Session::get("module")." ".Session::get("status")}}',
                'success'
            )
        @else
            Swal.fire(
                'Failed',
                '{{Session::get("action")." ".Session::get("module")." ".Session::get("status")}}',
                'error'
            )
        @endif
    @endif
</script>
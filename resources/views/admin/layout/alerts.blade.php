@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Sucesso',
        text: @json(session('success')),
        showConfirmButton: false,
        timer: 2500
    });
</script>
@endif

@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Erro',
        text: @json(session('error')),
        showConfirmButton: false,
        timer: 2500
    });
</script>
@endif

@if(session('warning'))
<script>
    Swal.fire({
        icon: 'warning',
        title: 'Atenção',
        text: @json(session('warning')),
        showConfirmButton: false,
        timer: 2500
    });
</script>
@endif

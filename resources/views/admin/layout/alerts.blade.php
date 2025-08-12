@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Sucesso',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 2500
    })
</script>
@endif

@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Erro',
        text: '{{ session('error') }}',
        showConfirmButton: false,
        timer: 2500
    })
</script>
@endif

@if(session('warning'))
<script>
    Swal.fire({
        icon: 'warning',
        title: 'Atenção',
        text: '{{ session('warning') }}',
        showConfirmButton: false,
        timer: 2500
    })
</script>
@endif

@if (session('success'))
    @section('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
            })
        </script>
    @endsection
@elseif(session('error'))
    @section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
            })
        </script>
    @endsection
@endif

@if ($errors->any())
    @section('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: @foreach ($errors->all() as $error)
                        "{{ $error }}"
                    @endforeach,
            showConfirmButton: false,
            timer: 2000
            })
        </script>
    @endsection
@endif


{{--
<div class="col-sm-12">
    <div class="card">

        <div class="card-body btn-showcase">
            <button class="btn btn-success sweet-8" type="button"
                onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-8']);">Success</button>
        </div>
    </div>
</div> --}}

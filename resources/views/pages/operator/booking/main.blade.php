<x-app-layout title="Booking">
    <div class="page-body">
        <div id="content_list">
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header  card-header--2">
                                <div>
                                    <h5>Booking Pemandian</h5>
                                </div>
                                {{-- <div class="d-inline-flex">
                                <a class="align-items-center btn btn-theme" href="{{ route('admin.hotel.create') }}">
                                    <i data-feather="plus-square"></i>Add New
                                </a>
                            </div> --}}
                            </div>
                            <div id="list_result">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('custom_js')
        <script>
            load_list(1);
        </script>
    @endsection
</x-app-layout>

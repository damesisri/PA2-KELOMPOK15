<x-app-layout title="Hotel">
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header  card-header--2">
                            <div>
                                <h5>Data Kritik</h5>
                            </div>
                        </div>
                        <div id="list_result">
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

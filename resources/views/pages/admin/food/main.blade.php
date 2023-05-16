<x-app-layout title="Restaurant">
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header  card-header--2">
                            <div>
                                <h5>Data Restaurant</h5>
                            </div>
                            <form class="d-inline-flex">
                                <a class="align-items-center btn btn-theme" href="{{ route('admin.food.create') }}">
                                    <i data-feather="plus-square"></i>Add New
                                </a>
                            </form>
                        </div>  
                        <div id="list_result">     
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="content_input"></div>
<div id="content_detail"></div>
@section('custom_js')
    <script>
        load_list(1);
    </script>
    @endsection
</x-app-layout>
    
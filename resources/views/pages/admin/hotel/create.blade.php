<x-app-layout title="Hotel">
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <!--Hotel detail start-->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add New Hotel</h5>
                                </div>
                                <div class="card-body">
                                    <form class="theme-form mega-form" id="form_input" method="POST"
                                        action="{{ route('admin.hotel.store') }}" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label class="form-label-title">No Kamar</label>
                                            <input class="form-control" type="text" placeholder="Hotal Name"
                                                name="name" />
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label-title ">
                                                Category</label>
                                            <select name="category"
                                                class="form-control js-example-basic-single col-sm-12">
                                                <option value="Free Wifi dan TV">Free Wifi dan TV</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label-title">Room</label>
                                            <input class="form-control" type="text" placeholder="Room Name"
                                                name="room" />
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label-title">Price</label>
                                            <input class="form-control" type="text" placeholder="Price"
                                                name="price" />
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label-title">Stock</label>
                                            <input class="form-control" type="text" placeholder="Stock"
                                                name="stock" />
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label-title mt-4">Cover</label>
                                            <input class="form-control" type="file" name="cover" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label-title">Description</label>
                                            <textarea class="form-control" name="description" placeholder="Description" rows="3"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-end">
                                    <button class="btn btn-primary me-3" type="submit">Submit</button>
                                    <button class="btn btn-outline-primary" type="button">Cancel</button>
                                </div>
                            </div>
                            <!--Hotel detail end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
    @section('custom_js')
        <script src="{{ asset('js/FormControls.js') }}"></script>
        <script>
            const btnSubmit = document.querySelector('button[type="submit"]');
            const formEl = $('#form_input');
            btnSubmit.addEventListener('click', function(e) {
                e.preventDefault();
                KTFormControls.onSubmitForm(formEl);
            });
        </script>
    @endsection
</x-app-layout>

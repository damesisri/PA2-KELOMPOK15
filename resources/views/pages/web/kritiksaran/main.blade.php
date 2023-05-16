<x-web-layout title="Kritik & Saran">

    @section('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @endsection
    <!--Start Sub Banner-->
    <div class="sub-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="detail">
                        <h1>Kritik dan Saran</h1>
                        {{-- <span>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</span> --}}
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><a class="select">Kritik dan Saran</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-img"></div>
    </div>
    <div class="wave"></div>

    <!--End Sub Banner-->



    <!--Start Content-->
    <div class="content">

        <div class="contact-page">

            <!--Start Get in Touch-->
            <div class="get-in-touch">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">

                            <div class="get-touch-detail">
                                <h3>Kritik & Saran</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus
                                    feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit
                                    lacinia. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                    <br /><br />
                                    f you have questions or comments, please get a hold of us in whichever way is most
                                    convenient. Ask away.
                                </p>
                            </div>

                            <div class="social-icons">
                                <h5>Follow Along</h5>
                                <ul>
                                    <li><a href="#."><i class="icon-facebook-1"></i></a></li>
                                    <li><a href="#."><i class="icon-twitter-1"></i></a></li>
                                    <li><a href="#."><i class="icon-google"></i></a></li>
                                    <li><a href="#."><i class="icon-pinterest-p"></i></a></li>
                                    <li><a href="#."><i class="icon-instagram"></i></a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="get-touch-form">
                                <p class="success_msg" id="success_msg" style="display:none">Thank You! We will contact
                                    you shortly.</p>
                                <form action="{{ route('web.kritik.store') }}"name="contact_form" id="contact_form"
                                    method="post">
                                    @csrf
                                    <textarea name="kritik_saran"></textarea>
                                    <input type="submit" value="send message">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <!--End Get in Touch-->



        </div>

    </div>
    <!--End Content-->
    @section('script')
        <script>
            $(document).ready(function() {
                // Get the success message from the URL parameter
                $('#contact_form').submit(function(e) {
                    e.preventDefault();
                    var data = $('#contact_form').serialize();
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('web.kritik.store') }}',
                        data: data,
                        dataType: 'json',
                        success: function(response) {
                            if (response.status == "success") {
                                toastr.success(response.message);
                            } else {
                                toastr.error(response.message);
                            }
                        }
                    });
                });
            });
        </script>
    @endsection
</x-web-layout>

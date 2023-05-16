<x-app-layout title="Pemandian">
    <div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header  card-header--2 package-card">
                        <div>
                            <h5>Restaurant's Details</h5>
                        </div>
                    </div>
    
                    <div class="card-body">
                        <section class="single-section small-section bg-inner">
                            <div class="row">
                                <div class="col-12">
                                    <div class="description-section ">
                                        {{-- <div class="detail-img">
                                            <img src="../assets/images/tours/spain.jpg"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </div> --}}
                                        {{-- <div class="menu-top menu-up">
                                            <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                                <li class="nav-item"><a data-bs-toggle="tab"
                                                        class="nav-link active"
                                                        href="#highlight">highlight</a></li>
                                                <li class="nav-item"><a data-bs-toggle="tab"
                                                        class="nav-link" href="#itinerary">itinerary</a>
                                                </li>
                                                <li class="nav-item"><a data-bs-toggle="tab"
                                                        class="nav-link" href="#gallery">gallery</a>
                                                </li>
                                                <li class="nav-item"><a data-bs-toggle="tab"
                                                        class="nav-link"
                                                        href="#accommodations">Accommodations</a></li>
                                                <li class="nav-item"><a data-bs-toggle="tab"
                                                        class="nav-link" href="#location">location</a>
                                                </li>
                                                <li class="nav-item"><a data-bs-toggle="tab"
                                                        class="nav-link" href="#review">reviews</a>
                                                </li>
                                                <li class="nav-item"><a data-bs-toggle="tab"
                                                        class="nav-link" href="#policy">policies</a>
                                                </li>
                                            </ul>
                                        </div> --}}
                                        <div class="description-details">
                                            <div class="menu-part ">
                                                <div class="list-view">
                                                    <div class="list-box">
                                                        <div class="list-img">
                                                            <a href="#">
                                                                <img src="{{ asset('images/toilet/'. $toilet->cover) }}"
                                                                    class="img-fluid blur-up lazyload"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div class="list-content">
                                                            <div>
                                                                <a href="#">
                                                                    <h5>{{ $toilet->title }}</h5>
                                                                </a>
                                                                <div class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <span></span>
                                                                </div>
    
                                                                <p class="toilet-info">Harga : {{ number_format($toilet->price) }}</p>
    
                                                                <p class="toilet-info">Deskripsi : {{ $toilet->description }}</p>
    
                                                                <div class="facility-icon">
                                                                    <div class="facility-box">
                                                                        <span>Stock : {{ $toilet->stock }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-end">
                                            <a class="btn btn-outline-primary" href="javascript:;" onclick="load_list(1);">Kembali</a>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                    </div>
    
                </div>
    
    
    
            </div>
        </div>
    
        </div>
    </div>
    </x-app-layout>
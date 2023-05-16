<x-web-layout title="Restaurant">
    <!--Start Sub Banner-->
    <div class="sub-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="detail">
                        <h1>shop</h1>
                        <span>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</span>
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><a class="select">Shop</a></li>
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

        <!--Start Shop-->
        <div class="shop">

            <div class="container">
                <div class="notice notify notify--dismissible" role="alert">
                    <span><strong>Option!</strong> cash on delivery and paypal option is available in this
                        template.</span>
                </div>
            </div>

            <!--Start Team Detail-->
            <div class="cbp-panel" style="max-width:1170px;">

                <div id="filters-container" class="cbp-l-filters-list ">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item cbp-l-filters-list-first">ALL
                        PRODUCTS</div>
                    <div data-filter=".starters" class="cbp-filter-item">STARTERS</div>
                    <div data-filter=".mains" class="cbp-filter-item">MAINS</div>
                    <div data-filter=".salads" class="cbp-filter-item cbp-l-filters-list-last">SALADS</div>
                </div>

                <div id="grid-container" class="cbp shop-gallery">
                    @foreach ($food as $item)
                        <div class="cbp-item starters">

                            <a href="{{ route('web.food.detail', $item->id) }}">
                                <img src="{{ asset('assets-user/images/menu/dish-img1.jpg') }}" alt="">
                                <div class="detail">
                                    <h6>{{ $item->title }}</h6>
                                    <span>Fresh<span class="dot">.</span> light<span class="dot">.</span>
                                        Mexican</span>

                                    <div class="price-cart">
                                        <a href="#."><span
                                                class="price">${{ number_format($item->price) }}</span></a>
                                        <a href="#."><span class="cart">add to cart</span></a>
                                    </div>

                                </div>
                            </a>

                        </div>
                    @endforeach
                </div>


            </div>
            <!--End Team Detail-->

        </div>
        <!--End Shop-->

    </div>
    <!--End Content-->


</x-web-layout>

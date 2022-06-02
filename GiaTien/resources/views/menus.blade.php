@extends('main')

@section('content')
   
    <!-- Banner -->
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                   <h1>{{ $title }}</h1>
                </div>
                    <div class="row">
                        @foreach($menus as $menu)
                            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                                <!-- Block1 -->
                                <div class="block1 wrap-pic-w">
                                    <img src="{{asset('/template/images/banner-01.jpg')}}" alt="IMG-BANNER">

                                    <a href="/GiaTien/public/danh-muc/{{ $menu->id }}-{{ \Str::slug($menu->name, '-') }}.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                        <div class="block1-txt-child1 flex-col-l">
                                    <span class="block1-name ltext-102 trans-04 p-b-8">
                                        {{ $menu->name }}
                                    </span>
                                            <span class="block1-info stext-102 trans-04">
                                        Sản phẩm mới
                                    </span>
                                        </div>
                                        <div class="block1-txt-child2 p-b-4 trans-05">
                                            <div class="block1-link stext-101 cl0 trans-09">
                                                Xem ngay
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>


@endsection

@extends('site.master')

@section('content')

@php
    $name = 'name_'.app()->currentLocale() ;
    $content = 'content_'.app()->currentLocale() ;
@endphp


<section class="page-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Advance Search -->
                <div class="advance-search nice-select-white">
                    <form>
                        <div class="form-row align-items-center">
                            <div class="form-group col-xl-4 col-lg-3 col-md-6">
                                <input type="text" class="form-control my-2 my-lg-0" id="inputtext4"
                                    placeholder="What are you looking for">
                            </div>
                            <div class="form-group col-lg-3 col-md-6">
                                <select class="w-100 form-control my-2 my-lg-0">
                                    <option>Category</option>
                                    <option value="1">Top rated</option>
                                    <option value="2">Lowest Price</option>
                                    <option value="4">Highest Price</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3 col-md-6">
                                <input type="text" class="form-control my-2 my-lg-0" id="inputLocation4"
                                    placeholder="Location">
                            </div>
                            <div class="form-group col-xl-2 col-lg-3 col-md-6">

                                <button type="submit" class="btn btn-primary active w-100">Search Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-sm">
    <div class="container">
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="search-result bg-gray">
                    <h2>Results For "Electronics"</h2>
                    <p>123 Results on 12 December, 2017</p>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="category-sidebar">
                    <div class="widget category-list">
                        <h4 class="widget-header">All Category</h4>
                        <ul class="category-list">
                            <li><a href="category.html">Laptops <span>93</span></a></li>
                            <li><a href="category.html">Iphone <span>233</span></a></li>
                            <li><a href="category.html">Microsoft <span>183</span></a></li>
                            <li><a href="category.html">Monitors <span>343</span></a></li>
                        </ul>
                    </div>

                    <div class="widget category-list">
                        <h4 class="widget-header">Nearby</h4>
                        <ul class="category-list">
                            <li><a href="category.html">New York <span>93</span></a></li>
                            <li><a href="category.html">New Jersy <span>233</span></a></li>
                            <li><a href="category.html">Florida <span>183</span></a></li>
                            <li><a href="category.html">California <span>120</span></a></li>
                            <li><a href="category.html">Texas <span>40</span></a></li>
                            <li><a href="category.html">Alaska <span>81</span></a></li>
                        </ul>
                    </div>

                    <div class="widget filter">
                        <h4 class="widget-header">Show Produts</h4>
                        <select>
                            <option>Popularity</option>
                            <option value="1">Top rated</option>
                            <option value="2">Lowest Price</option>
                            <option value="4">Highest Price</option>
                        </select>
                    </div>

                    <div class="widget price-range w-100">
                        <h4 class="widget-header">Price Range</h4>
                        <div class="block">
                            <input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="5000"
                                data-slider-step="5" data-slider-value="[0,5000]">
                            <div class="d-flex justify-content-between mt-2">
                                <span class="value">$10 - $5000</span>
                            </div>
                        </div>
                    </div>

                    <div class="widget product-shorting">
                        <h4 class="widget-header">By Condition</h4>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                Brand New
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                Almost New
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                Gently New
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                Havely New
                            </label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="category-search-filter">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-left">
                            <strong>Short</strong>
                            <select>
                                <option>Most Recent</option>
                                <option value="1">Most Popular</option>
                                <option value="2">Lowest Price</option>
                                <option value="4">Highest Price</option>
                            </select>
                        </div>
                        <div class="col-md-6 text-center text-md-right mt-2 mt-md-0">
                            <div class="view">
                                <strong>Views</strong>
                                <ul class="list-inline view-switcher">
                                    <li class="list-inline-item">
                                        <a href="#!" onclick="event.preventDefault();" class="text-info"><i
                                                class="fa fa-th-large"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="ad-list-view.html"><i class="fa fa-reorder"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-grid-list">
                    <div class="row mt-30">

                        @foreach ($products as $product)
                            <div class="col-lg-4 col-md-6">
                                <!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="{{route('site.product',$product->id )}}">
                                                <img  class="card-img-top img-fluid" src="{{asset('uploads/products/'. $product->image )}}"
                                                    alt="Card image cap">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="{{route('site.product',$product->id )}}">{{$product->$name}}</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="{{route('site.category',$product->category->id )}}"><i
                                                            class="fa fa-folder-open-o"></i>{{$product->category->$name}}</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a ><i class="fa fa-calendar"></i>{{$product->created_at->format('jS F')}}</a>
                                                </li>
                                            </ul>
                                            <p class="card-text">{{Str::words($product->$content, 10 ,'.....')}}</p>
                                            <div class="product-ratings">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        @endforeach



                    </div>
                </div>
                <div class="pagination justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="category.html" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="category.html">1</a></li>
                            <li class="page-item active"><a class="page-link" href="category.html">2</a></li>
                            <li class="page-item"><a class="page-link" href="category.html">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="category.html" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection


@extends('frontend.layouts.app')

@section('content')
        <!-- shop start -->
        <div class="cv-product-single spacer-top spacer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="cv-pro-thumb-img">
                                    <img src="{{asset('images/'.$product['image'])}}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="cv-prod-content">
                                    <h2 class="cv-price-title"> {{$product['name']}} </h2>
                                    <p class="cv-pdoduct-price"><del>$170</del> $165</p>
                                    <div class="cv-prod-category">
                                        <span>Category :</span>
                                        <a href="#" class="cv-prod-category"> Face Mask</a>,
                                        <a href="#" class="cv-prod-category"> Body Cover</a>
                                    </div>
                                    <p class="cv-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </p>
                                </div>
                                <div class="cv-prod-count">
                                    <div class="cv-cart-quantity">
                                        <button class="cv-sub"></button>
                                        <input type="number" value="1" min="1">
                                        <button class="cv-add"></button>
                                    </div>
                                    <button class="cv-btn">add to cart</button>
                                </div>
                            </div>
                            <div class="col-md-12">    
                                <div class="cv-prod-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="cv-shop-tab">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link active" data-bs-toggle="tab" href="#cv-pro-description" role="tab" aria-selected="true">description</a>
                                <a class="nav-link" data-bs-toggle="tab" href="#cv-pro-review" role="tab" aria-selected="false">Review</a>
                            </div>
                            <div class="tab-content cv-tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="cv-pro-description">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                                </div>
                                <div class="tab-pane fade" id="cv-pro-review">
                                    <div class="cv-blog-comment">
                                        <ul>
                                            <li>
                                                <div class="cv-comment-box">
                                                    <div class="cv-comment-img">
                                                        <img src="https://via.placeholder.com/100x100" alt="image" class="img-fluid">
                                                    </div>
                                                    <div class="cv-comment-text">
                                                        <h3>John Michel</h3>
                                                        <a href="javascript:;" class="cv-cmnt-date">1 June, 2020</a>
                                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit.</p>
                                                        <a href="javascript:;" class="cv-cmnt-reply">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.633 511.633">
                                                                <g>
                                                                    <path d="M463.375,183.726c-35.782-36.735-92.789-57.764-171.02-63.094V45.83c0-7.994-3.713-13.608-11.136-16.846
                                                                        c-7.803-3.23-14.466-1.902-19.985,3.999L115.06,179.161c-3.618,3.621-5.424,7.902-5.424,12.85c0,4.949,1.807,9.229,5.424,12.847
                                                                        l146.178,146.177c3.432,3.617,7.71,5.425,12.85,5.425c2.283,0,4.661-0.476,7.136-1.427c7.423-3.238,11.139-8.847,11.139-16.845
                                                                        v-71.663c30.642,2.475,56.097,7.471,76.376,14.989c20.27,7.519,36.494,18.034,48.677,31.549
                                                                        c28.362,31.405,38.451,85.171,30.266,161.311c-0.376,4.951,1.807,8.186,6.567,9.708c0.571,0.192,1.427,0.284,2.569,0.284
                                                                        c3.806,0,6.468-1.618,7.994-4.853l5.709-11.42c2.662-5.331,6.516-13.945,11.56-25.841c5.041-11.901,9.616-23.794,13.709-35.692
                                                                        c4.093-11.893,7.755-25.026,10.992-39.396c3.234-14.376,4.853-27.079,4.853-38.116
                                                                        C511.63,265.094,495.546,216.657,463.375,183.726z"></path>
                                                                    <path d="M63.953,192.011c0-4.952,1.809-9.233,5.424-12.85L182.725,65.531V45.83c0-7.994-3.715-13.608-11.138-16.846
                                                                        c-7.804-3.23-14.465-1.902-19.983,3.999L5.424,179.161C1.809,182.781,0,187.062,0,192.011c0,4.949,1.809,9.229,5.424,12.847
                                                                        l146.18,146.177c3.425,3.617,7.708,5.425,12.85,5.425c2.284,0,4.663-0.476,7.137-1.427c7.423-3.238,11.138-8.847,11.138-16.845
                                                                        v-19.985L69.377,204.857C65.762,201.24,63.953,196.962,63.953,192.011z"></path>
                                                                </g>
                                                            </svg>
                                                        Reply</a>
                                                    </div>
                                                </div>   
                                                <ul>
                                                    <li>
                                                        <div class="cv-comment-box">
                                                            <div class="cv-comment-img">
                                                                <img src="https://via.placeholder.com/100x100" alt="image" class="img-fluid">
                                                            </div>
                                                            <div class="cv-comment-text">
                                                                <h3>Michel John</h3>
                                                                <a href="javascript:;" class="cv-cmnt-date">1 June, 2020</a>
                                                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit.</p>
                                                                <a href="javascript:;" class="cv-cmnt-reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.633 511.633">
                                                                        <g>
                                                                            <path d="M463.375,183.726c-35.782-36.735-92.789-57.764-171.02-63.094V45.83c0-7.994-3.713-13.608-11.136-16.846
                                                                                c-7.803-3.23-14.466-1.902-19.985,3.999L115.06,179.161c-3.618,3.621-5.424,7.902-5.424,12.85c0,4.949,1.807,9.229,5.424,12.847
                                                                                l146.178,146.177c3.432,3.617,7.71,5.425,12.85,5.425c2.283,0,4.661-0.476,7.136-1.427c7.423-3.238,11.139-8.847,11.139-16.845
                                                                                v-71.663c30.642,2.475,56.097,7.471,76.376,14.989c20.27,7.519,36.494,18.034,48.677,31.549
                                                                                c28.362,31.405,38.451,85.171,30.266,161.311c-0.376,4.951,1.807,8.186,6.567,9.708c0.571,0.192,1.427,0.284,2.569,0.284
                                                                                c3.806,0,6.468-1.618,7.994-4.853l5.709-11.42c2.662-5.331,6.516-13.945,11.56-25.841c5.041-11.901,9.616-23.794,13.709-35.692
                                                                                c4.093-11.893,7.755-25.026,10.992-39.396c3.234-14.376,4.853-27.079,4.853-38.116
                                                                                C511.63,265.094,495.546,216.657,463.375,183.726z"></path>
                                                                            <path d="M63.953,192.011c0-4.952,1.809-9.233,5.424-12.85L182.725,65.531V45.83c0-7.994-3.715-13.608-11.138-16.846
                                                                                c-7.804-3.23-14.465-1.902-19.983,3.999L5.424,179.161C1.809,182.781,0,187.062,0,192.011c0,4.949,1.809,9.229,5.424,12.847
                                                                                l146.18,146.177c3.425,3.617,7.708,5.425,12.85,5.425c2.284,0,4.663-0.476,7.137-1.427c7.423-3.238,11.138-8.847,11.138-16.845
                                                                                v-19.985L69.377,204.857C65.762,201.24,63.953,196.962,63.953,192.011z"></path>
                                                                        </g>
                                                                    </svg>
                                                                Reply</a>
                                                            </div>
                                                        </div>   
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="cv-comment-box">
                                                    <div class="cv-comment-img">
                                                        <img src="https://via.placeholder.com/100x100" alt="image" class="img-fluid">
                                                    </div>
                                                    <div class="cv-comment-text">
                                                        <h3>Nikki Bela</h3>
                                                        <a href="javascript:;" class="cv-cmnt-date">1 June, 2020</a>
                                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit.</p>
                                                        <a href="javascript:;" class="cv-cmnt-reply">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.633 511.633">
                                                                <g>
                                                                    <path d="M463.375,183.726c-35.782-36.735-92.789-57.764-171.02-63.094V45.83c0-7.994-3.713-13.608-11.136-16.846
                                                                        c-7.803-3.23-14.466-1.902-19.985,3.999L115.06,179.161c-3.618,3.621-5.424,7.902-5.424,12.85c0,4.949,1.807,9.229,5.424,12.847
                                                                        l146.178,146.177c3.432,3.617,7.71,5.425,12.85,5.425c2.283,0,4.661-0.476,7.136-1.427c7.423-3.238,11.139-8.847,11.139-16.845
                                                                        v-71.663c30.642,2.475,56.097,7.471,76.376,14.989c20.27,7.519,36.494,18.034,48.677,31.549
                                                                        c28.362,31.405,38.451,85.171,30.266,161.311c-0.376,4.951,1.807,8.186,6.567,9.708c0.571,0.192,1.427,0.284,2.569,0.284
                                                                        c3.806,0,6.468-1.618,7.994-4.853l5.709-11.42c2.662-5.331,6.516-13.945,11.56-25.841c5.041-11.901,9.616-23.794,13.709-35.692
                                                                        c4.093-11.893,7.755-25.026,10.992-39.396c3.234-14.376,4.853-27.079,4.853-38.116
                                                                        C511.63,265.094,495.546,216.657,463.375,183.726z"></path>
                                                                    <path d="M63.953,192.011c0-4.952,1.809-9.233,5.424-12.85L182.725,65.531V45.83c0-7.994-3.715-13.608-11.138-16.846
                                                                        c-7.804-3.23-14.465-1.902-19.983,3.999L5.424,179.161C1.809,182.781,0,187.062,0,192.011c0,4.949,1.809,9.229,5.424,12.847
                                                                        l146.18,146.177c3.425,3.617,7.708,5.425,12.85,5.425c2.284,0,4.663-0.476,7.137-1.427c7.423-3.238,11.138-8.847,11.138-16.845
                                                                        v-19.985L69.377,204.857C65.762,201.24,63.953,196.962,63.953,192.011z"></path>
                                                                </g>
                                                            </svg>
                                                        Reply</a>
                                                    </div>
                                                </div>   
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cv-blog-cmnt-reply">
                                        <h2 class="cv-sidebar-title">leave a reply</h2>
                                        <form>
                                            <input type="text" placeholder="Enter Your Name"/>
                                            <input type="text" placeholder="Enter Your Email"/>
                                            <input type="text" placeholder="Enter Your Subject"/>
                                            <textarea placeholder="Message Here"></textarea>
                                            <button class="cv-btn">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cv-shop-sidebar">
                            <div class="cv-widget cv-search">
                                <h2 class="cv-sidebar-title">Product Search</h2>
                                <form>
                                    <input type="text" placeholder="Product Search"/>
                                    <button class="cv-btn">search</button>
                                </form>
                            </div>
                            <div class="cv-widget cv-range-slider">
                                <h2 class="cv-sidebar-title">Filter by price</h2>
                                <div class="range-slider">
                                    <input type="text" class="js-range-slider" value="" />
                                </div>
                            </div>
                            <div class="cv-widget cv-product-category">
                                <h2 class="cv-sidebar-title">Categories</h2>
                                <ul>
                                    <li><a href="javascript:;">Consectetur adipiscing elit</a></li>
                                    <li><a href="javascript:;">Quis nostrud exercitation</a></li>
                                    <li><a href="javascript:;">Duis aute irure dolor in repreh</a></li>
                                    <li><a href="javascript:;">Sunt in culpa officia deserunt</a></li>
                                    <li><a href="javascript:;">Ut enim ad minim veniam</a></li>
                                </ul>
                            </div>
                            <div class="cv-widget cv-product-instagram">
                                <h2 class="cv-sidebar-title">Instagram</h2>
                                <ul>
                                    <li><a href="javscript:;"><img src="https://via.placeholder.com/100x100" alt="image" class="img-fluid"></a></li>
                                    <li><a href="javscript:;"><img src="https://via.placeholder.com/100x100" alt="image" class="img-fluid"></a></li>
                                    <li><a href="javscript:;"><img src="https://via.placeholder.com/100x100" alt="image" class="img-fluid"></a></li>
                                    <li><a href="javscript:;"><img src="https://via.placeholder.com/100x100" alt="image" class="img-fluid"></a></li>
                                    <li><a href="javscript:;"><img src="https://via.placeholder.com/100x100" alt="image" class="img-fluid"></a></li>
                                    <li><a href="javscript:;"><img src="https://via.placeholder.com/100x100" alt="image" class="img-fluid"></a></li>
                                </ul>
                            </div>
                            <div class="cv-widget cv-tag">
                                <h2 class="cv-sidebar-title">Tag Cloud</h2>
                                <ul>
                                    <li><a href="javscript:;">Face</a></li>
                                    <li><a href="javscript:;">Mask</a></li>
                                    <li><a href="javscript:;">Body</a></li>
                                    <li><a href="javscript:;">Hand</a></li>
                                    <li><a href="javscript:;">Eye</a></li>
                                    <li><a href="javscript:;">Doctor</a></li>
                                    <li><a href="javscript:;">Sanitizer</a></li>
                                    <li><a href="javscript:;">Price</a></li>
                                    <li><a href="javscript:;">Corona</a></li>
                                    <li><a href="javscript:;">Virus</a></li>
                                    <li><a href="javscript:;">Drugs</a></li>
                                    <li><a href="javscript:;">Medicine</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop end -->
        <!-- related product start -->
        <div class="cv-arrival cv-related-product cv-product-slider spacer-top-less">
            <div class="container">
                <div class="cv-heading">
                    <h1>Related products</h1>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="cv-product-box">
                                        <div class="cv-product-img">
                                            <img src="https://via.placeholder.com/253x253" alt="image" class="img-fluid"/>
                                            <div class="cv-product-button">
                                                <a href="javascript:;" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                                    <g>
                                                        <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                            S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                            c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"></path>
                                                    </g>
                                                    <g>
                                                        <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                            c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                            C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                            s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"></path>
                                                    </g>
                                                </svg> View detail</a>
                                                <a href="javascript:;" class="cv-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <g>
                                                            <path d="M507.519,116.384C503.721,111.712,498.021,109,492,109H129.736l-1.484-13.632l-0.053-0.438C121.099,40.812,74.583,0,20,0
                                                                C8.954,0,0,8.954,0,20s8.954,20,20,20c34.506,0,63.923,25.749,68.512,59.928l23.773,218.401C91.495,327.765,77,348.722,77,373
                                                                c0,0.167,0.002,0.334,0.006,0.5C77.002,373.666,77,373.833,77,374c0,33.084,26.916,60,60,60h8.138
                                                                c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59s59-26.468,59-59c0-6.645-1.104-13.036-3.138-19h86.277
                                                                c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59c32.533,0,59-26.468,59-59c0-32.532-26.467-59-59-59H137
                                                                c-11.028,0-20-8.972-20-20c0-0.167-0.002-0.334-0.006-0.5c0.004-0.166,0.006-0.333,0.006-0.5c0-11.028,8.972-20,20-20h255.331
                                                                c35.503,0,68.084-21.966,83.006-55.962c4.439-10.114-0.161-21.912-10.275-26.352c-10.114-4.439-21.912,0.161-26.352,10.275
                                                                C430.299,300.125,411.661,313,392.331,313h-240.39L134.09,149h333.308l-9.786,46.916c-2.255,10.813,4.682,21.407,15.495,23.662
                                                                c1.377,0.288,2.75,0.426,4.104,0.426c9.272,0,17.59-6.484,19.558-15.92l14.809-71C512.808,127.19,511.317,121.056,507.519,116.384
                                                                z M399,434c10.477,0,19,8.523,19,19s-8.523,19-19,19s-19-8.523-19-19S388.523,434,399,434z M201,434c10.477,0,19,8.524,19,19
                                                                c0,10.477-8.523,19-19,19s-19-8.523-19-19S190.523,434,201,434z"></path>
                                                        </g>
                                                    </svg>
                                                add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="cv-product-data">
                                            <a href="javascript:;" class="cv-price-title">Plastic face shield</a>
                                            <p class="cv-pdoduct-price">$165</p>
                                            <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cv-product-box">
                                        <div class="cv-product-img">
                                            <span class="cv-sale">sale</span>
                                            <img src="https://via.placeholder.com/253x253" alt="image" class="img-fluid"/>
                                            <div class="cv-product-button">
                                                <a href="javascript:;" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                                    <g>
                                                        <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                            S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                            c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"></path>
                                                    </g>
                                                    <g>
                                                        <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                            c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                            C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                            s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"></path>
                                                    </g>
                                                </svg> View detail</a>
                                                <a href="javascript:;" class="cv-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <g>
                                                            <path d="M507.519,116.384C503.721,111.712,498.021,109,492,109H129.736l-1.484-13.632l-0.053-0.438C121.099,40.812,74.583,0,20,0
                                                                C8.954,0,0,8.954,0,20s8.954,20,20,20c34.506,0,63.923,25.749,68.512,59.928l23.773,218.401C91.495,327.765,77,348.722,77,373
                                                                c0,0.167,0.002,0.334,0.006,0.5C77.002,373.666,77,373.833,77,374c0,33.084,26.916,60,60,60h8.138
                                                                c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59s59-26.468,59-59c0-6.645-1.104-13.036-3.138-19h86.277
                                                                c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59c32.533,0,59-26.468,59-59c0-32.532-26.467-59-59-59H137
                                                                c-11.028,0-20-8.972-20-20c0-0.167-0.002-0.334-0.006-0.5c0.004-0.166,0.006-0.333,0.006-0.5c0-11.028,8.972-20,20-20h255.331
                                                                c35.503,0,68.084-21.966,83.006-55.962c4.439-10.114-0.161-21.912-10.275-26.352c-10.114-4.439-21.912,0.161-26.352,10.275
                                                                C430.299,300.125,411.661,313,392.331,313h-240.39L134.09,149h333.308l-9.786,46.916c-2.255,10.813,4.682,21.407,15.495,23.662
                                                                c1.377,0.288,2.75,0.426,4.104,0.426c9.272,0,17.59-6.484,19.558-15.92l14.809-71C512.808,127.19,511.317,121.056,507.519,116.384
                                                                z M399,434c10.477,0,19,8.523,19,19s-8.523,19-19,19s-19-8.523-19-19S388.523,434,399,434z M201,434c10.477,0,19,8.524,19,19
                                                                c0,10.477-8.523,19-19,19s-19-8.523-19-19S190.523,434,201,434z"></path>
                                                        </g>
                                                    </svg>
                                                add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="cv-product-data">
                                            <a href="javascript:;" class="cv-price-title">Hand gloves</a>
                                            <p class="cv-pdoduct-price"><del>$70</del> $65</p>
                                            <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cv-product-box">
                                        <div class="cv-product-img">
                                            <img src="https://via.placeholder.com/253x253" alt="image" class="img-fluid"/>
                                            <div class="cv-product-button">
                                                <a href="javascript:;" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                                    <g>
                                                        <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                            S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                            c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"></path>
                                                    </g>
                                                    <g>
                                                        <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                            c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                            C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                            s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"></path>
                                                    </g>
                                                </svg> View detail</a>
                                                <a href="javascript:;" class="cv-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <g>
                                                            <path d="M507.519,116.384C503.721,111.712,498.021,109,492,109H129.736l-1.484-13.632l-0.053-0.438C121.099,40.812,74.583,0,20,0
                                                                C8.954,0,0,8.954,0,20s8.954,20,20,20c34.506,0,63.923,25.749,68.512,59.928l23.773,218.401C91.495,327.765,77,348.722,77,373
                                                                c0,0.167,0.002,0.334,0.006,0.5C77.002,373.666,77,373.833,77,374c0,33.084,26.916,60,60,60h8.138
                                                                c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59s59-26.468,59-59c0-6.645-1.104-13.036-3.138-19h86.277
                                                                c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59c32.533,0,59-26.468,59-59c0-32.532-26.467-59-59-59H137
                                                                c-11.028,0-20-8.972-20-20c0-0.167-0.002-0.334-0.006-0.5c0.004-0.166,0.006-0.333,0.006-0.5c0-11.028,8.972-20,20-20h255.331
                                                                c35.503,0,68.084-21.966,83.006-55.962c4.439-10.114-0.161-21.912-10.275-26.352c-10.114-4.439-21.912,0.161-26.352,10.275
                                                                C430.299,300.125,411.661,313,392.331,313h-240.39L134.09,149h333.308l-9.786,46.916c-2.255,10.813,4.682,21.407,15.495,23.662
                                                                c1.377,0.288,2.75,0.426,4.104,0.426c9.272,0,17.59-6.484,19.558-15.92l14.809-71C512.808,127.19,511.317,121.056,507.519,116.384
                                                                z M399,434c10.477,0,19,8.523,19,19s-8.523,19-19,19s-19-8.523-19-19S388.523,434,399,434z M201,434c10.477,0,19,8.524,19,19
                                                                c0,10.477-8.523,19-19,19s-19-8.523-19-19S190.523,434,201,434z"></path>
                                                        </g>
                                                    </svg>
                                                add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="cv-product-data">
                                            <a href="javascript:;" class="cv-price-title">Saftey mask</a>
                                            <p class="cv-pdoduct-price">$25</p>
                                            <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cv-product-box">
                                        <div class="cv-product-img">
                                            <span class="cv-sale">sale</span>
                                            <img src="https://via.placeholder.com/253x253" alt="image" class="img-fluid"/>
                                            <div class="cv-product-button">
                                                <a href="javascript:;" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                                    <g>
                                                        <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                            S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                            c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"></path>
                                                    </g>
                                                    <g>
                                                        <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                            c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                            C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                            s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"></path>
                                                    </g>
                                                </svg> View detail</a>
                                                <a href="javascript:;" class="cv-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <g>
                                                            <path d="M507.519,116.384C503.721,111.712,498.021,109,492,109H129.736l-1.484-13.632l-0.053-0.438C121.099,40.812,74.583,0,20,0
                                                                C8.954,0,0,8.954,0,20s8.954,20,20,20c34.506,0,63.923,25.749,68.512,59.928l23.773,218.401C91.495,327.765,77,348.722,77,373
                                                                c0,0.167,0.002,0.334,0.006,0.5C77.002,373.666,77,373.833,77,374c0,33.084,26.916,60,60,60h8.138
                                                                c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59s59-26.468,59-59c0-6.645-1.104-13.036-3.138-19h86.277
                                                                c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59c32.533,0,59-26.468,59-59c0-32.532-26.467-59-59-59H137
                                                                c-11.028,0-20-8.972-20-20c0-0.167-0.002-0.334-0.006-0.5c0.004-0.166,0.006-0.333,0.006-0.5c0-11.028,8.972-20,20-20h255.331
                                                                c35.503,0,68.084-21.966,83.006-55.962c4.439-10.114-0.161-21.912-10.275-26.352c-10.114-4.439-21.912,0.161-26.352,10.275
                                                                C430.299,300.125,411.661,313,392.331,313h-240.39L134.09,149h333.308l-9.786,46.916c-2.255,10.813,4.682,21.407,15.495,23.662
                                                                c1.377,0.288,2.75,0.426,4.104,0.426c9.272,0,17.59-6.484,19.558-15.92l14.809-71C512.808,127.19,511.317,121.056,507.519,116.384
                                                                z M399,434c10.477,0,19,8.523,19,19s-8.523,19-19,19s-19-8.523-19-19S388.523,434,399,434z M201,434c10.477,0,19,8.524,19,19
                                                                c0,10.477-8.523,19-19,19s-19-8.523-19-19S190.523,434,201,434z"></path>
                                                        </g>
                                                    </svg>
                                                add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="cv-product-data">
                                            <a href="javascript:;" class="cv-price-title">Oxygen mask</a>
                                            <p class="cv-pdoduct-price"><del>$70</del> $65</p>
                                            <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- related product end -->
@endsection
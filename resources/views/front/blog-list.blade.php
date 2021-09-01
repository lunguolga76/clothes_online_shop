@extends('layouts.front_layout')
@section('hometitle')
Blog-list

@endsection


@section('content')
<section class="section lb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-custom-build mt-1">
                               @foreach($articles as $article)
                                <div class="blog-box wow fadeIn">
                                    <div class="post-media">
                                        <a href="" title="">
                                            <img src="{{$article['image']}}" alt="" class="img-fluid rounded">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div>
                                            <!-- end hover -->
                                        </a>
                                    </div>
                                    <!-- end media -->
                                    <div class="blog-meta big-meta text-center">
                                        <div class="post-sharing">
                                            <ul class="list-inline d-flex justify-content-center m-1 p-1">
                                                <li><a href="#" class="fb-button btn btn-primary m-1"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                                <li><a href="#" class="tw-button btn btn-info m-1 text-white"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                                <li><a href="#" class="gp-button  btn btn-danger m-1"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div><!-- end post-sharing -->
                                        <h4><a href="{{route('article.show', [$article['id']])}}" title="" class="fs-2 fw-bold text-decoration-none">{{$article->title}}</a></h4>
                                        <p class="fs-5 fw-bold">{{$article->description}}</p>
                                        <small><a href="marketing-single.html" title=""class="text-decoration-none">/ {{$article->rubric->name}} /</a></small>
                                        <small><a href="#" title="" class="text-decoration-none">by {{$article->author->first_name}} /</a></small>
                                        <small><a href="marketing-single.html" title=""class="text-decoration-none"> {{$article->published_at}} /</a></small>
                                        <small><a href="#" title=""class="text-decoration-none"><i class="fa fa-eye"> {{$article->views}} </i></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                                @endforeach

                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                {{ $articles->links() }}
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget-no-style bg-light m-3 rounded border border-secondar">
                                <div class="newsletter-widget text-center align-self-center fw-bold">
                                    <h3>Subscribe Today!</h3>
                                    <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                                    <form class="form-inline m-2" method="post">
                                        <input type="text" name="email" placeholder="Add your email here.." required class="form-control" class="m-2" />
                                        <input type="submit" value="Subscribe" class="btn btn-default btn-block bg-dark text-white mt-1 mb-1" />
                                    </form>         
                                </div><!-- end newsletter -->
                            </div>

                            <div class="widget bg-light rounded border border-secondar">
                                <h2 class="widget-title text-center mt-2">Recent Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="marketing-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="../images/woman.jpg" alt="" class="img-fluid rounded float-start mb-1">
                                                <h5 class="mb-2 mt-2 fw-bold">5 Beautiful buildings you need to before dying</h5>
                                                <small>12 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="marketing-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="../images/man.jpg" alt="" class="img-fluid rounded float-start mb-1" >
                                                <h5 class="mb-2 mt-2 fw-bold">Let's make an introduction for creative life</h5>
                                                <small>11 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="marketing-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 last-item justify-content-between">
                                                <img src="../images/medusa.jpg" alt="" class="img-fluid rounded float-start mb-1">
                                                <h5 class="mb-2 mt-2 fw-bold">Did you see the most beautiful sea in the world?</h5>
                                                <small>07 Jan, 2016</small>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div id="" class="widget border border-secondar bg-light mt-2">
                                <h2 class="widget-title text-center fw-bold">Advertising</h2>
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->
   
                        </div><!-- end sidebar -->
                    
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        
@endsection
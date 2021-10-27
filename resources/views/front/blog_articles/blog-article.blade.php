@extends('layouts.front_blog')
@section('hometitle')
{{$article['title']}}

@endsection


@section('content')
                   
                        <div class="page-wrapper">
                            <div class="blog-title-area">
                                <ol class="breadcrumb hidden-xs-down">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                                    <li class="breadcrumb-item active">{{$article->title}}</li>
                                </ol>

                                <span class="btn btn-outline-secondary m-2 text-decoration-none"><a href="marketing-category.html" title="" class="text-decoration-none text-secondary">{{$article->blog_category->name}}</a></span>

                                <h3 class="fs-2 fw-bold">{{$article['title']}}</h3>

                                <div class="blog-meta big-meta">
                                <small><a href="marketing-single.html" title=""class="text-decoration-none">{{$article->getPublishedAtAttribute()}}</a></small>
                                        <small><a href="#" title="" class="text-decoration-none">by {{$article->author->first_name}}</a></small>
                                        <small><a href="#" title=""class="text-decoration-none"><i class="fa fa-eye"></i> {{$article->views}}</a></small>
                                </div><!-- end meta -->

                                <div class="post-sharing">
                                    <ul class="list-inline d-flex justify-content-center m-1 p-1">
                                        <li><a href="#" class="fb-button btn btn-primary m-1"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-info m-1 text-white"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-danger m-1"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="{{$article->image_url}}" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">  
                                <div class="pp">
                                    <p>{{$article->body}} </p>

                                </div><!-- end pp -->
                                </div><!-- end pp -->
                            </div><!-- end content -->

                            <div class="blog-title-area">
                                <div class="tag-cloud-single">
                                    <span>Tags</span>
                                    <small><a href="#" title="">lifestyle</a></small>
                                    <small><a href="#" title="">colorful</a></small>
                                    <small><a href="#" title="">trending</a></small>
                                    <small><a href="#" title="">another tag</a></small>
                                </div><!-- end meta -->

                                <div class="post-sharing">
                                <ul class="list-inline d-flex justify-content-center m-1 p-1">
                                        <li><a href="#" class="fb-button btn btn-primary m-1"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-info m-1 text-white"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-danger m-1"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                            <img src="upload/banner_01.jpg" alt="" class="img-fluid">
                                        </div><!-- end banner-img -->
                                    </div><!-- end banner -->
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <hr class="invis1">

                            <div class="custombox authorbox clearfix">
                                <h4 class="small-title">About author</h4>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <img src="upload/author.jpg" alt="" class="img-fluid rounded-circle"> 
                                    </div><!-- end col -->

                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <h4><a href="#">{{$article->author->first_name}}</a></h4>
                                        <p>Quisque sed tristique felis. Lorem <a href="#">visit my website</a> amet, consectetur adipiscing elit. Phasellus quis mi auctor, tincidunt nisl eget, finibus odio. Duis tempus elit quis risus congue feugiat. Thanks for stop Markedia!</p>

                                        <div class="topsocial">
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Website"><i class="fa fa-link"></i></a>
                                        </div><!-- end social -->

                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end author-box -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">You may also like</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="marketing-single.html" title="">
                                                    <img src="upload/market_blog_02.jpg" alt="" class="img-fluid">
                                                    <div class="hovereffect">
                                                        <span class=""></span>
                                                    </div><!-- end hover -->
                                                </a>
                                            </div><!-- end media -->
                                            <div class="blog-meta">
                                                <h4><a href="marketing-single.html" title="">We are guests of ABC Design Studio</a></h4>
                                                <small><a href="blog-category-01.html" title="">Trends</a></small>
                                                <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div><!-- end col -->

                                    <div class="col-lg-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="marketing-single.html" title="">
                                                    <img src="upload/market_blog_03.jpg" alt="" class="img-fluid">
                                                    <div class="hovereffect">
                                                        <span class=""></span>
                                                    </div><!-- end hover -->
                                                </a>
                                            </div><!-- end media -->
                                            <div class="blog-meta">
                                                <h4><a href="marketing-single.html" title="">Nostalgia at work with family</a></h4>
                                                <small><a href="blog-category-01.html" title="">News</a></small>
                                                <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end custom-box -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">3 Comments</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="comments-list">
                                        @foreach($article->comments as $comment)
                                            <div class="media">
                                                <a class="media-left" href="#">
                                                    <img src="upload/author.jpg" alt="" class="rounded-circle">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading user_name">Amanda Martines <small>5 days ago</small></h4>
                                                    <p>{{$comment->content}}</p>
                                                    <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                </div>
                                            </div>
                                            @endforeach
                                         
                                            
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end custom-box -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">Leave a Reply</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form class="form-wrapper">
                                            <input type="text" class="form-control" placeholder="Your name">
                                            <input type="text" class="form-control" placeholder="Email address">
                                            <input type="text" class="form-control" placeholder="Website">
                                            <textarea class="form-control" placeholder="Your comment"></textarea>
                                            <button type="submit" class="btn btn-primary">Submit Comment</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    
          
      
@endsection
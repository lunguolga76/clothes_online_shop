@extends('layouts.front_blog')
@section('hometitle')
Blog-list

@endsection


@section('content')
            <form action="{{ route('search') }}" method="GET" class="md-form input-group m-4 shadow-sm">
                <select class="form-select text-secondary" aria-label="Default select example" name="sort" id="sort">
                <option selected="" disabled="disabled" value="Select Department">Select</option>
                <option value="published_at_ascending"@if (request()->sort == "published_at_ascending") selected @endif>published date ascending</option>
                 <option value="published_at_descending"@if (request()->sort == "published_at_descending") selected @endif>published date descending</option>
                </select>
                 </form>
                        <div class="page-wrapper">
                            <div class="blog-custom-build mt-1">
                               @foreach($articles as $article)
                                <div class="blog-box wow fadeIn">
                                    <div class="post-media">
                                        <a href="" title="">
                                            <img src="{{$article->getImageUrAttribute()}}" alt="" class="img-fluid rounded">
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
                                        <h4><a href="{{route('article.show', [$article->id])}}" title="" class="fs-2 fw-bold text-decoration-none">{{$article->title}}</a></h4>
                                        <p class="fs-5 fw-bold">{{$article->description}}</p>
                                        <small><a href="marketing-single.html" title=""class="text-decoration-none">/ {{$article->blog_category->name}} /</a></small>
                                        <small><a href="#" title="" class="text-decoration-none">by {{$article->author->first_name}} /</a></small>
                                        <small><a href="marketing-single.html" title=""class="text-decoration-none"> {{$article->getPublishedAtAttribute()}} /</a></small>
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
@endsection
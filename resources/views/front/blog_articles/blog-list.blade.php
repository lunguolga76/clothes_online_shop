@extends('layouts.front_blog')
@section('hometitle')
Blog-list

@endsection

        @section('content')
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-3">
                        <form action="{{ route('bloghome') }}" method="GET">
                            <div class="form-group d-inline w-15 m-2">
                                <input type="text" class="form-control text-secondary border border-secondary rounded" name="title" value="{{request()->title}}" placeholder="select by title">
                            </div>
                            <div class="form-group d-inline w-15 m-2">
                                <input type="text" class="form-control text-secondary border border-secondary rounded" name="name" value="{{request()->name}}" placeholder="select category">
                            </div>
                            <div class="form-group d-inline w-15 m-2">
                                <input type="text" class="form-control text-secondary border border-secondary rounded" name="first_name" value="{{request()->first_name}}" placeholder="select by author name">
                            </div>
                            <div class="form-group d-inline w-15 m-2">
                                <select class="form-select text-secondary border border-secondary" aria-label="Default select example" name="created_at" id="created_at">
                                    <option selected="" disabled="disabled" value="Select Department">Sort by date</option>
                                    <option value="created_at_desc" @if(request()->created_at=="created_at_desc")selected @endif>Newest</option>
                                    <option value="created_at_asc" @if(request()->created_at=="created_at_asc")selected @endif>Latest</option>
                                </select>
                            </div>
                            <div  class="form-group d-inline w-15 m-2">
                                <button type="submit" class="btn btn-warning m-2">Filter</button>
                            </div>
                        </form>
                    </div>
                </div>
                        <div class="page-wrapper">
                            <div class="blog-custom-build mt-1">
                               @foreach($articles as $article)
                                <div class="blog-box wow fadeIn">
                                    <div class="post-media">
                                        <a href="" title="">
                                            <img src="{{$article->getImageUrlAttribute()}}" alt="" class="img-fluid rounded">
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
                                        <small><a href="marketing-single.html" title="class="text-decoration-none>/ {{$article->getPublishedAtAttribute()}} /</a></small>
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
@endsection
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12"> 
                             <div class="sidebar">
                            <div class="widget-no-style bg-warning m-3 rounded border border-secondary">
                                <div class="newsletter-widget text-center align-self-center fw-bold mt-2">
                                    <h3>Subscribe Today!</h3>
                                    <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                                    <form class="form-inline m-2" method="post">
                                        <input type="text" name="email" placeholder="Add your email here.." required class="form-control" class="m-2" />
                                        <input type="submit" value="Subscribe" class="btn btn-default btn-block bg-dark text-white mt-1 mb-1" />
                                    </form>         
                                </div><!-- end newsletter -->
                            </div>

                            <div class="widget bg-light rounded border border-secondary">
                                <h2 class="widget-title text-center mt-2">Recent Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                    @foreach($popular_articles as $article)
                                        <a href="{{route('article.show', [$article->id])}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="{{$article->getImageUrlAttribute()}}" alt=""  width="90" height="90"class="img-fluid rounded float-start m-2">
                                                <div><h5 class="mb-2 mt-2 fw-bold">{{$article->title}}</h5>
                                                <small>{{$article->published_at}}</small>
                                                <small>/ <i class="fa fa-eye"> {{$article->views}} </i></small>
                                            </div>
                                                
                                            </div>
                                        </a>
                                        @endforeach

                                      
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget border border-secondary rounded mt-3 bg-light">
                                <h2 class="widget-title text-center">Popular Categories</h2>
                                <div class="link-widget">
                                    <ul>
                                        @foreach($blog_cats as $cat)
                                        
                                        <li class="text-uppercase fw-bold fs-5">
                                            <a href="#" class="link-dark text-decoration-none">{{$cat->name}} 
                                             <span>({{$cat->articles_count}})</span>
                                        </a></li>
                                        
                                     @endforeach 
                                    </ul>
                                </div><!-- end link-widget -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                        </div> <!-- end col -->
                   
                      

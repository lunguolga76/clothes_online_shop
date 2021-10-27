<div class="container-fluid">
    <div class="row">
<!--start-logo-->
<div class="logo img-thumbnail rounded float-start">
    <img src="/images/logo.png">
</div>
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-7 header-left">
                <div class="top-nav">
                    <ul class="memenu skyblue">
                        <li class="active"><a href="/">Home</a></li>
                        @foreach($sections as $section)
                        <li class="grid text-capitalize"><a href="{{route('index.categories',[$section->name])}}">{{$section->name}}</a></li>
                        @endforeach
                        <li class="grid"><a href="{{route('bloghome')}}">Blog</a></li>
                        <li class="grid"><a href="{{route('contactUs.show')}}">Contacts</a></li>
                        <li class="grid"><a href="{{route('info.show')}}">About us</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!--Search-->
            <div class="col-md-3 header-right">
                    <form class="form-input d-flex justify-content-start align-items-start" method="get" action="{{route('search')}}">
                        <div class="input-group">
                        <input name="s" class="form-control mr-sm-2 @error('s') is-invalid @enderror" type="text" placeholder="Search..." required>
                            <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>

            </div>
            <!--Search End-->
            <div class="col-md-2 header-right">
                <div class="text-end">
                    <button type="button" class="btn btn-outline-secondary me-2">Login</button>
                    <button type="button" class="btn btn-warning">Sign-up</button>
                </div>
            </div>
    </div>
</div>
<!--bottom-header-->

</div>
</div>
</div>



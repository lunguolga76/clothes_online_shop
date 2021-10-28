<div class="col-md-3 single-right">
    <div class="w_sidebar">
        <section  class="sky-form">
            <h4>Categories</h4>
            <div class="row1 scroll-pane">
                <div class="col col-4">
                    <ul>
                    @foreach($cats as $cat)
                        <li><a href="{{route('index.categories',['$cat->section->name'])}}" class="text-decoration-none text-uppercase fw-bold">{{$cat->section->name}}</a></li>
                            <li><a href="{{route('index.categories',['$cat->name'])}}" class="text-decoration-none text-uppercase fw-bold">{{$cat->name}}</a></li>

                    @endforeach
                    </ul>
                </div>
            </div>
        </section>
        <section class="sky-form">
            <h4>Colour</h4>
            <ul class="w_nav2">
                <li><a class="color1" href="#"></a></li>
                <li><a class="color2" href="#"></a></li>
                <li><a class="color3" href="#"></a></li>
                <li><a class="color4" href="#"></a></li>
                <li><a class="color5" href="#"></a></li>
                <li><a class="color6" href="#"></a></li>
                <li><a class="color7" href="#"></a></li>
                <li><a class="color8" href="#"></a></li>
                <li><a class="color9" href="#"></a></li>
                <li><a class="color10" href="#"></a></li>
                <li><a class="color12" href="#"></a></li>
                <li><a class="color13" href="#"></a></li>
                <li><a class="color14" href="#"></a></li>
                <li><a class="color15" href="#"></a></li>
                <li><a class="color5" href="#"></a></li>
                <li><a class="color6" href="#"></a></li>
                <li><a class="color7" href="#"></a></li>
                <li><a class="color8" href="#"></a></li>
                <li><a class="color9" href="#"></a></li>
                <li><a class="color10" href="#"></a></li>
            </ul>
        </section>
        <section class="sky-form">
            <h4>discount</h4>
            <div class="row1 row2 scroll-pane">
                <div class="col col-4">
                    <label class="radio"><input type="radio" name="radio" checked=""><i></i>60 % and above</label>
                    <label class="radio"><input type="radio" name="radio"><i></i>50 % and above</label>
                    <label class="radio"><input type="radio" name="radio"><i></i>40 % and above</label>
                </div>
                <div class="col col-4">
                    <label class="radio"><input type="radio" name="radio"><i></i>30 % and above</label>
                    <label class="radio"><input type="radio" name="radio"><i></i>20 % and above</label>
                    <label class="radio"><input type="radio" name="radio"><i></i>10 % and above</label>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="clearfix"> </div>

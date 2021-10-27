@foreach($new_products as $product)
    <div class="col-md-4 product-left p-left">
        <div class="product-main simpleCart_shelfItem">
            <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{$product->productDetail->image_url}}" alt="" /></a>
            <div class="product-bottom">
                <h3>Smart Watches</h3>
                <p>Explore Now</p>
                <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
            </div>
            <div class="srch">
                <span>-50%</span>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    </div>
@endforeach

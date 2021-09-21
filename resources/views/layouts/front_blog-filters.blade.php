
<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12"> 
        <form action="{{ route('bloghome') }}" method="GET">
            <div class="form-group">
                <label for="title" class="form-controll">Title</label>
                <input type="text"class="form-controll"name="title">
            </div>
            <div class="form-group">
                <label for="title" class="form-controll">Title</label>
                <select name="published_at">
                    <option value="published_at_newest" {{request()->published_at_newest=='published_at_newest' ? 'selected':''}}>Select newest</option>
                   <option value="published_at_latest" {{request()->published_at_latest=='published_at_latest' ? 'selected':''}}>Select latest</option>
                   <button type="submit" class="btn btn-primary">Filter</button>
                </div>
          
        </form>
        </div>


<div class="row">
    @php
        $name = 'name_'.app()->currentLocale() ;
    @endphp
    <div class="col-md-6">
        <div class="mb-3">
            <label>English Name</label>
            <input type="text" placeholder="English Name" name="name_en" class="form-control @error('name_en') is-invalid @enderror" value="{{old('name_en',$product->name_en)}}">
            @error('name_en')
                <small class="invalid-feedback">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label>Arabc Name</label>
            <input type="text" placeholder="Arabc Name" name="name_ar" class="form-control @error('name_ar') is-invalid @enderror" value="{{old('name_ar',$product->name_ar)}}">
            @error('name_ar')
                <small class="invalid-feedback">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label>English Content</label>
            <textarea placeholder="English Name" name="content_en" class="form-control @error('content_en') is-invalid @enderror" rows="5">{{old('content_en',$product->content_en)}}</textarea>
            @error('content_en')
                <small class="invalid-feedback">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label>Arabc Content</label>
            <textarea placeholder="Arabc Name" name="content_ar" class="form-control @error('content_ar') is-invalid @enderror" rows="5">{{old('content_ar',$product->content_ar)}}</textarea>

            @error('content_ar')
                <small class="invalid-feedback">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="mb-3">
            <label>Price</label>
            <input type="number" placeholder="Price" name="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price',$product->price)}}">
            @error('price')
                <small class="invalid-feedback">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="mb-3">
            <label>Sale Price</label>
            <input type="number" placeholder="Sale Price" name="sale_price" class="form-control @error('sale_price') is-invalid @enderror" value="{{old('sale_price',$product->sale_price)}}">
            @error('sale_price')
                <small class="invalid-feedback">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="mb-3">
            <label>Quantity</label>
            <input type="number" placeholder="Quantity" name="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{old('quantity',$product->quantity)}}">
            @error('quantity')
                <small class="invalid-feedback">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="mb-3">
            <label>Category</label>
            <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                <option value="">Select Category</option>
                @foreach ($categories as $category )
                    <option  {{ $product->category_id == $category->id ? 'selected' : '' }} value="{{$category->id}}">{{$category->$name}}</option>
                @endforeach
            </select>

            @error('category_id')
                <small class="invalid-feedback">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label class=" d-block mb-2">Image</label>
            @if ($product->image)
            <img class="mb-2" width ='100' src="{{asset('uploads/products/'.$product->image)}}"></img>
            @endif

            <input type="file"  name="image" class="form-control @error('image') is-invalid @enderror" value="{{old('image')}}">
            @error('image')
                <small class="invalid-feedback">{{$message}}</small>
            @enderror
        </div>
    </div>
</div>

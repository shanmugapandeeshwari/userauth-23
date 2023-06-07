<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<h1 class="text-center"> Edit Product</h1>
<div class="container">
<form method="post" action="{{url('/edit-product/'.$product->id)}}" class="row g-3 needs-validation" novalidate>
    @csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input type="text" class="form-control" value= "{{old('name') ?? $product->name }}" id="p_name" name="p_name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input type="number" class="form-control" value= "{{old('price') ?? $product->price }}" id="price" name="price">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Category</label>
    <select class="form-control" value= "{{old('category_id') ?? $product->category_id }}" id="category" name="category" aria-label="Default select example">
        @foreach($category as $cat)
        <option value="">Select</option>
        <option value="{{$cat->id}}">{{$cat->name}}</option>
        @endforeach
    </select>
  </div>
  <button type="submit" class="byn btn-primary mt-3">Submit</button>
</form>
</div>
<x-master-layout>
  
      <h3 class = " mb-3 ">Create new post</h3 >
      <div class="row">
        <div class="col-6 mt-2">
          @if($errors->any())
           <div class="alert alert-danger" role="alert">
                   Please fix follow error
           </div>
           @endif
          <form action="/post" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
              <label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
              <div class="col-sm-10">
                <select name="category" class="form-select">
                   <option value="">chhose-one</option>
                   @foreach($categories as $item)
                   <option @if(old('category')==$item->id) selected @endif value="{{$item->id}}">{{ $item->name }}</option>
                   @endforeach
                </select>
                @if($errors->first('category'))
                     <div id="" class="invalid-feedback">
                           {{$errors->first('category')}}
                     </div>
                @endif
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputTile" class="col-sm-2 col-form-label">Title</label>
              <div class="col-sm-10">
                <input type="text" value="{{old('title','New Models')}}" name="title" class="form-control @if($errors->first('title'))is-invalid @endif" id="inputTitle" > 
                @if($errors->first('title'))
                     <div id="" class="invalid-feedback">
                           {{$errors->first('title')}}
                     </div>
                @endif
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
              <div class="col-sm-10">
                <input type="number" value="{{old('price','5000')}}" name="price" class="form-control @if($errors->first('price'))is-invalid @endif" id="inputPrice" > 
                @if($errors->first('price'))
                     <div id="" class="invalid-feedback">
                           {{$errors->first('price')}}
                     </div>
                @endif
              </div>
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label">image</label>
              <input class="form-control @if($errors->first('image'))is-invalid @endif" name="image" type="file" id="formFile">
              @if($errors->first('image'))
              <div id="" class="invalid-feedback">
                    {{$errors->first('image')}}
              </div>
             @endif
            </div>
            <div class="mb-3">
              <label for="inputDescription" class="form-label">Description</label>
              <textarea class="form-control @if($errors->first('description'))is-invalid @endif"  name="description" id="inputDescription" rows="3">{{old('description','Check Below specification below')}}</textarea>
              @if($errors->first('description'))
              <div id="" class="invalid-feedback">
                    {{$errors->first('description')}}
              </div>
              @endif
            </div>
            <div class="mb-3">
              @foreach($tags as $item)
              <div class="form-check">
                <input @if(in_array($item->id,old('tag',[]))) checked @endif class="form-check-input" name =" tag[]" type="checkbox" value="{{$item->id}}" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  {{$item->title}}
                </label>
              </div>
              @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
       
    </x-master-layout>
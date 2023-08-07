<x-master-layout>
  
  <h3 class = " my-5 "> Discover of out Post </h3 >
    <a href="/post" class="btn btn-outline-danger">Reset</a>
    @foreach($categories as $item)
    <a href="/post?c={{$item->id}}" class="btn btn-outline-primary">({{$item->post->count()}}){{$item->name}}</a>
    @endforeach
  <div class="row">
    <div class="col-12 mt-2">
      {{$posts->links()}}
  </div>
    @foreach($posts as $item )
   <div class="col-3">
          <div class="card" style="width: 18rem;">
            @if($item->image)
            <img src="/storage/{{$item->image}}" class="card-img-top" alt="...">
            @else
                 <img src="/asset/thumbnail.png" class="card-img-top" alt="...">
            @endif
            <div class="card-body">
              <h5 class="card-title">{{$item->title}}</h5>
              @if($item->category)
              <span>{{$item->category->name}}</span>
              @endif
              <h5 class="card-title">{{$item->price}}</h5>
              <a href="/post/{{$item->id}}" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          </div>
      @endforeach
      <div class="col-12 mt-2">
          {{$posts->links()}}
      </div>
    
</x-master-layout>
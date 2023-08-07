<x-master-layout>
  
      <h3 class ="mb-3">{{$post->title}}</h3 >

      <div class="row">
        <div class="col-8 mt-2">
            <img src="/storage/{{$post->image}}" class="card-img-top" alt="...">
      </div>
       <div class="col-4">
                <div class="card" style="width: 18rem;">
                   <ul class="list-group list-group-plush">
                         <li class="list-group-item">Category : {{$post->category->name}}</li>
                         <li class="list-group-item">Price : {{$post->price}}</li> 
                        </ul> 
                  </div>
                  @foreach($tags as $item) 
                  <span class="badge bg-secondary">{{$item->title}}</span>
                   @endforeach
                   <div class="my-3">
                    <a href="/post/{{$post->id}}" class="btn btn-primary">Contact Seller now</a>
                   </div>
                   <hr>
                   <span>Posted BY:{{$post->user->name}}</span>
        </div>
                
              </div>
              <div class="col-8 mt-2">
                  {{$post->description}}
            </div>
    </x-master-layout>
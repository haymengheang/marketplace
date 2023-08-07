<x-master-layout>
          <h1>My post</h1>
          <div class="row">
              <div class="col-md-8">
                    <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">id</th>
                                  <th scope="col">title</th>
                                  <th scope="col">price</th>
                                  <th scope="col">image</th>
                                  <th scope="col">status</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($posts as $item)
                                <tr>
                                  <th scope="row">{{$item->id}}</th>
                                  <td>{{$item->title}}
                                      <br>
                                      <span class="bade bg-secondary">{{$item->status}}</span>
                                </td>
                                  <td>{{$item->price}}</td>
                                  <td>
                                   @if($item->image)
                                        <img src="/storage/{{$item->image}}" class="card-img-top" alt="...">
                                   @else
                                        <img src="/asset/thumbnail.png" class="card-img-top" alt="...">
                                   @endif
                                  </td>
                                  <td>
                                        <a href="/post/edit/{{$item->id}}" class="btn btn-small btn-info">edit</a>
                                        <a href="/post/delete/{{$item->id}}" class="btn btn-small btn-danger">delete</a>
                                  </td>
                                </tr> 
                              @endforeach
                              </tbody>
                            </table>
                            <div class="col-12 mt-2">
                              {{$posts->links()}}
                          </div>
              </div>
          </div>
</x-master-layout>
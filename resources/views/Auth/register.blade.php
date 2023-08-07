<x-master-layout>
 <div class="row mt-5">
       <div class="col-md-4">
          <form action="/register" method="post">
                    @csrf
                    <div class="mb-3">
                              <label for="InputName" class="form-label">Name</label>
                              <input type="text" value="Tin kimsou" name ="name" class="form-control" id="InputName" aria-describedby="InputName">
                    </div>
                    <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email"value ="soukim275@gmail.com" name ="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          
                    </div>
                    <div class="mb-3">
                              <label for="InputPassword1" class="form-label">Password</label>
                              <input type="password" name="password" value ="sou@1111" class="form-control" id="InputPassword1">
                    </div>
                    <div class="mb-3">
                              <label for="InputPassword2" class="form-label">Retype-Password</label>
                              <input type="password" value="sou@1111" name ="password_confirmation" class="form-control" id="InputPassword2">
                    </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
              </form>
       </div>
 </div>
</x-master-layout>
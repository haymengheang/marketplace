
<template>
     <Master>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post</h1>
    </div>
    <table class="table">
          <thead>
          <tr>
          <th scope="col">#</th>
          <th scope="col">title</th>
          <th scope="col">price</th>
          <th scope="col">image</th>
          <th scope="col">category</th>
          <th scope="col">option</th>
          </tr>
          </thead>
          <tbody>
          <tr v-for ="item in posts">
          <th scope="row">1</th>
          <td>{{item.title}}
               <br>
            <span class="badge bg-secondary">{{item.status}}</span>
         </td>
          <td>{{item.price}}</td>
          <td>
            <temple v-if="item.image">
                <br>
                <img :src="'/storage/'+item.image" class="card-img-top w-25 h-25" alt="...">
            </temple>
            <temple v-else="item.image">
                 
                <img src="/asset/thumbnail.png" class="card-img-top w-25 h-25" alt="..."
                >
            </temple>
          </td>
          <td>{{item.category.name}}</td>
           <td>
                <button @click = "response('aprove',item.id)"   class="btn btn-success btn-sm">approve</button>
                <button @click="respone('reject',item.id)" class="btn btn-danger btn-sm">reject</button>
           </td>
          </tr>
          </tbody>
</table>
     </Master>
          
</template>
<script>
import Master from'../../layouts/Master.vue'

      export default {
    data() {
        components: {
            Master;
        }
        return {
            posts: [],
        };
    },
    mounted() {
        this.getPost();
    },
    methods: {
        getPost() {
            axios.get("/api/post").then((res) => {
                this.posts = res.data.posts.data;
            }).catch((err) => {
                if (err.respone.status == 500) {
                    alert("internal server error");
                }
                elseif(err.respone.status == 200);
                {
                    alert("internal server success fully");
                }
            });
        },
        response(value, id) {
            axios.get("/api/post/response?status=" + value + "&id=" + id).then((res) => {
            }).catch((err) => {
                if (err.respone.status == 500) {
                    alert("internal server error");
                }
                elseif(err.respone.status == 400);
                {
                }
            });
        }
    },
    components: { Master }
}
</script>
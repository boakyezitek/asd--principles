<template>
  <layout title="Welcome">
    <div>
        <div v-if="Object.keys(errors).length > 0" class="alert alert-danger mt-4">
             {{errors[Object.keys(errors)[0]]}}
        </div>
        <form action="/users" method="POST" class="my-5" @submit.prevent="createUser">
           <div class="form-group">
               <label>Name</label>
               <input type="text" class="form-control" id="name" placeholder="Name" v-model="form.name" />
           </div>
<div class="form-group">
               <label>Email</label>
               <input type="text" class="form-control" id="email" placeholder="email" v-model="form.email" />
           </div>

           <div class="form-group">
               <label>Password</label>
               <input type="password" class="form-control" id="password" placeholder="password" v-model="form.password" />
           </div><br />
           <button type="submit" class="btn btn-primary">Create User</button>

        </form>
    </div>
  </layout>
</template>

<script>
  import Layout from '@/Shared/Layout'

  export default {
    components: {
      Layout,
    },
    props: {
      users: Object,
      errors:Object,
    },
    data() {
        return{
            form:{
                name:"",
                email:"",
                password:""
            }
        }
    },

    methods:{
        createUser(){
            this.$inertia.post('/users', this.form)
            .then(() => {
                //
           })
        }
    }
  }
</script>

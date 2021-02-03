<template>
  <layout title="Welcome">
    <div>
        <form action="/users" method="PATCH" class="my-5" @submit.prevent="updateUser">
           <div class="form-group">
               <label>Name</label>
               <input type="text" class="form-control" id="name" placeholder="Name" v-model="form.name" />
           </div>
<div class="form-group">
               <label>Email</label>
               <input type="text" class="form-control" id="email" placeholder="email" v-model="form.email" />
           </div>
<br />
           <button type="submit" class="btn btn-primary">Update User</button>

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
            loading:false,
            form:{
                name:this.users?.name,
                email:this.users?.email,
            }
        }
    },

    methods:{
        updateUser(){
            console.log(this.users.id);
            this.$inertia.patch(`/users/${this.users.id}`, this.form)
            .then(() => {
                this.loading = false;
           })
        },
        deleteUser() {
            if(confirm('Are you sure you want to delete this user')) {
 this.$inertia.delete(`/users/${this.users.id}`)
            .then(() => {

            })
            }

        }
    }
  }
</script>

<template>
  <layout title="Welcome">


    <div class="welcome-container">
         <h1>Welcome</h1>
         <p>Choose any option</p>
        <div></div>
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
      user: Object,
    },
  }
</script>

<style scoped>
   .welcome-container{
       max-width: 1000px;
       margin: auto;
       padding: 50px;
       text-align: center;
   }
</style>

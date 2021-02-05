<template>
  <layout title="Welcome">


    <div class="welcome-container">
         <h1>Welcome</h1>
         <p>Choose any option</p>
        <div class="option-box">
            <div>12 principles of Agile Software Development</div>
            <div>4 values of Agile Software Development</div>
        </div>
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

   .option-box{
       display: flex;
       justify-content: center;
       margin-top: 20px;
   }

   .option-box div{
       width: 300px;
       box-shadow: 0px 3px 5px #ccc;
       padding: 5px;
       text-align: center;
   }
</style>

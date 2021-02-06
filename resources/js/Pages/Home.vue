<template>
  <layout title="Welcome">


    <div class="welcome-container">
         <h1>Welcome</h1>
         <p>The Agile Manifesto is comprised of four foundational values and 12 supporting principles which lead the Agile approach to software development. Each Agile methodology applies the four values in different ways, but all of them rely on them to guide the development and delivery of high-quality, working software.</p>
        <div class="option-box">
            <div><inertia-link class="nav-link active" href="/principles">principles of Agile Software Development</inertia-link> </div>
            <div><inertia-link class="nav-link active" href="/values">4 values of Agile Software Development</inertia-link></div>
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
       margin: 5px;
   }
</style>

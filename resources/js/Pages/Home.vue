<template>
  <layout title="Welcome">
    <h1>Welcome</h1>
    <p>Choose any option</p>

    <div>
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

<style lang="stylus" scoped>

</style>

<template>

  <main>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">

           <inertia-link class="nav-link active" href="/">Home</inertia-link>
        </li>
        <li class="nav-item">
         <inertia-link class="nav-link" href="/">About</inertia-link>
        </li>
        <li class="nav-item">
          <inertia-link class="nav-link" href="/">Service</inertia-link>
        </li>

      </ul>
    </div>
  </div>
</nav>
    </header>
    <article>
        <div class="container">
 <slot />
        </div>

    </article>
  </main>
</template>

<script>

  export default {
    inject:['page'],
    props: {
      title: String,
    },
    watch: {
      title: {
        immediate: true,
        handler(title) {
          document.title = title
        },
      },
    },
  }
</script>

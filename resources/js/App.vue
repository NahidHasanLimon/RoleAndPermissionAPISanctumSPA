<template>
<Nav></Nav>
  <div class=" flex justify-center items-center">
      <h1 class="text-3xl font-bold ">
          Its an App Vue component
    </h1>
  </div>
  
   <router-view/>

</template>
<script>
import Nav from "./components/Nav.vue";
export default {
  components: {
    Nav
  }
}
</script>
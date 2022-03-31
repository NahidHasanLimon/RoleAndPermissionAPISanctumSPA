<template>
<Nav></Nav>
  <div class=" flex justify-center items-center">
      <h1 class="text-3xl font-bold ">
          Its an App Vue component
    </h1>
  </div>
  <div class=" flex justify-center items-center">
    <ul>
      <li><router-link to="/login"> Login </router-link> </li>
      <li><router-link to="/profile"> Profile </router-link> </li>
    </ul>
  </div>
  
   <router-view/>
<!-- <Footer></Footer> -->
</template>

<script>
import Nav from "./components/partials/Nav.vue";
import Footer from "./components/partials/Footer.vue";
export default {
  components: {
    Nav,Footer
  },
  
}
</script>
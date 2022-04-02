<template>
    <section class="px-4 py-24 mx-auto max-w-7xl">
  <h2 class="mb-2 text-3xl font-extrabold leading-tight text-gray-900">Skcript Blog</h2>
  <p class="mb-20 text-lg text-gray-500">Comes directly from the desk of engineers, creators and managers at Skcript.</p>
  <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3" >
    <div v-for="item in items" :key="item">
      <a href="#">
        <img src="/brand/og.png" class="object-cover w-full h-56 mb-5 bg-center rounded" alt="Kutty" loading="lazy" />
      </a>
      <h2 class="mb-2 text-lg font-semibold text-gray-900">
        <a href="#" class="text-gray-900 hover:text-purple-700">Process Documents Using Artificial Intelligence For RPA Bots</a>
      </h2>
      <p class="mb-3 text-sm font-normal text-gray-500">
        Earlier RPA bots used to have some limitations like it would take structured data for processing from excel, database, on these data. But with advancements in technology like OCR (Optical
        Character Recognition) and Machine Learning, RPA bots are capable of extracting these data …
      </p>
      <p class="mb-3 text-sm font-normal text-gray-500">
        <a href="#" class="font-medium text-gray-900 hover:text-purple-700">Praveen Juge</a>
        • April 16, 2020
      </p>
    </div>
    <!-- <div>
      <a href="#">
        <img src="/brand/og-white.png" class="object-cover w-full h-56 mb-5 bg-center rounded" alt="Kutty" loading="lazy" />
      </a>
      <h2 class="mb-2 text-lg font-semibold text-gray-900">
        <a href="#" class="text-gray-900 hover:text-purple-700">Using Webpack with React Typescript</a>
      </h2>
      <p class="mb-3 text-sm font-normal text-gray-500">
        Ever wondered if there is a way to just tie up all your code into one single module for easy usage. If so, in this article I will show you how to bundle all your code into a single javascript
        module that you can easily use in any other project.
      </p>
      <p class="mb-3 text-sm font-normal text-gray-500">
        <a href="#" class="font-medium text-gray-900 hover:text-purple-700">Praveen Juge</a>
        • April 16, 2020
      </p>
    </div> -->
  </div>
  <div class="flex flex-col items-center justify-center mt-20 space-x-0 space-y-2 md:space-x-2 md:space-y-0 md:flex-row">
    <a href="#" class="w-full rounded-full btn btn-light btn-xl md:w-auto">Previous Page</a>
    <a href="#" class="w-full rounded-full btn btn-light btn-xl md:w-auto">Next Page</a>
  </div>
    </section>

</template>
<script>
import axios from "axios";
export default {
  name: "App",
  data() {
    return {
      items: [],
    };
  },
  async created() {
    try {
      const res = await axios.get(`http://localhost:8000/api/blogs`);
      this.items = res.data;
    } catch (error) {
      console.log(error);
    }
  },
};
</script>
<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { ref, watch } from "vue";

const props = defineProps({
    links: Array,
    page: Object,
});



</script>

<template>
  <nav aria-label="Page navigation">
  <ul class="pagination pagination-lg">

    <li v-for="(link,index) in links" :key="index" class="page-item">
        
        <Link v-if="index == 0" class="page-link"  :href="link.url" :aria-label="index == 0 ? `Previous` : `Next` ">
            <i :class="index == 0 ? `fa fa-angle-left` : `fa fa-angle-right`"></i>
            <span class="sr-only">Previous</span>
        </Link>

        <Link v-else :rel="index" :aria-label="index" class="page-link" :href="link.url"  :class="link.active == true ? `bg-primary text-white` : ``" v-html="link.label"  />
    </li>
   

  </ul>
</nav>
</template>



<script setup lang="ts">
import BaseElement from "./BaseElement.vue";
</script>

<template>
  <div class="grid grid-cols-3 grid-rows-3 justify-items-center h-full">
    <BaseElement color="yellow" class="mr-auto" />
    <div>2</div>
    <BaseElement color="green" class="ml-auto" />
    <div>4</div>
    <div>5</div>
    <div>6</div>
    <BaseElement color="black" class="mr-auto mt-auto" />
    <div>8</div>
    <BaseElement color="red" class="ml-auto mt-auto" />
  </div>
</template>

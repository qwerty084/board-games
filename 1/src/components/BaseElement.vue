<script setup lang="ts">
type Color = "green" | "yellow" | "red" | "black";

const props = defineProps<{
  color: Color;
}>();
</script>

<template>
  <div class="grid">
    <div class="row">
      <div :class="props.color"></div>
      <div :class="props.color"></div>
    </div>
    <div class="flex h-full justify-center items-center mx-auto font-bold text-xl">B</div>
    <div class="row">
      <div :class="props.color"></div>
      <div :class="props.color"></div>
    </div>
  </div>
</template>

<style scoped>
.row div {
  border-radius: 50%;
  width: 50px;
  height: 50px;
  border: 3px solid #000;
}

.grid {
  grid-template-columns: 1fr 30px 1fr;
  height: fit-content;
}

.row {
  @apply flex flex-col gap-4;
}

.green {
  background-color: #077706;
}

.yellow {
  background-color: #e6e307;
}

.black {
  background-color: #000;
}

.red {
  background-color: #ea0505;
}
</style>

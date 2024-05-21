<script setup lang="ts">
import type { Color } from "@/types/Colors";

interface Props {
  fieldColor: Color;
  text?: string;
  textColor?: "white" | "black";
}

withDefaults(defineProps<Props>(), {
  text: "",
  textColor: "black",
});
</script>

<template>
  <div :class="['playingfield flex justify-center items-center', $props.fieldColor]">
    <span :class="['font-bold field-color', $props.textColor]">{{ $props.text }}</span>
  </div>
</template>

<style>
.playingfield {
  border-radius: 50%;
  width: 3.125rem;
  height: 3.125rem;
  border: 0.188rem solid #000;

  &.green {
    @apply bg-green-700;
  }

  &.yellow {
    @apply bg-amber-400;
  }

  &.black {
    @apply bg-black;
  }

  &.red {
    @apply bg-red-600;
  }
}

.field-color {
  &.white {
    @apply text-white;
  }

  &.black {
    @apply text-black;
  }
}
</style>

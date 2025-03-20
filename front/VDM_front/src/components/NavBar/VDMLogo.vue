<template>

<router-link to ="/">
<h1 class="title text-black text-base md:text-xl lg:text-2xl">
<span class="lg:hidden">AMPNV</span>
<span class="hidden lg:inline">ANCIENS MEUBLES POUR UNE NOUVELLE VIE</span></h1>
</router-link>
</template>

<style scoped>

.title {
  font-family: 'Koulen', sans-serif;
  text-transform: uppercase; 
  color: black; 
 
  display: inline-block; /* Ensures the underline only spans the text */
  position: relative;
  text-decoration: none; /* Remove default underline */
}
.title::after {
  content: ''; 
  position: absolute; 
  left: 0; /* Start from the left edge */
  bottom: -2px; /* Adjust to position the underline */
  width: 0; /* Start with no width */
  height: 2px; /* Thickness of the underline */
  background-color: rgb(0, 0, 0); /* Color of the underline */
  transition: width 1.4s ease /* Smooth transition for width */
 
}
.title:hover::after {
  width: 100%; /* Expand to full width on hover */
}
</style>

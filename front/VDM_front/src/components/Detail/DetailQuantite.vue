<template>
	<div>{{ quantite }}</div>
  </template>
  
  <script>
  export default {
	props: {
	  quantite: { type: [String, Number], required: true },
	},
  }
  </script>
  
<script>
export default {
  data() {
    return {
      links: ['About', 'Support']
    }
  }
}
</script>

<template>
  <nav>
    <ul>
      <li v-for="link in links">
        <a href="#">{{ link }}</a>
      </li>
    </ul>
  </nav>
</template>

<style scoped>
nav,
ul,
a {
  display: flex;
  flex-direction: row;
}

a {
  text-decoration: none;
  padding: 0.1rem 1.1rem 0.1rem 1.1rem;
  color: black;
}
</style>
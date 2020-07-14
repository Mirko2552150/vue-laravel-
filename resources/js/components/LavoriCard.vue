<template>
  <div class="lavori-card">
    <a :href="data.link">{{ data.title }}</a>{{ data.autore }}
    <img :src="data.img" alt="">
  </div>
</template>

<script>

export default {
    props: ['data'], // se mi arrivano da un altro componente NON sono DATA ma PROPS
  mounted() {
    // console.log(this.data);
    // console.log(data);
  }
};



</script>

<style lang="scss">
  .lavori-card {
    background: white;
    width: calc(100% / 4);
    padding: 20px;
    border-radius: 10px;
    height: 300px;
    margin: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    img {
      width: 100%;
    }
  }
</style>

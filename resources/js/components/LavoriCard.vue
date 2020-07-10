<template>
  <div class="lavori-card">
    {{ this.data.title }} - {{ this.data.autore }}
  </div>
</template>

<script>
export default {
    props: ['data'], // se mi arrivano da un altro componente NON sono DATA ma PROPS
  mounted() {
    // console.log(this.data);
  }
};

</script>

<style lang="scss">
  .lavori-card {
    background: white;
    width: calc(100% / 6);
    padding: 20px;
    border-radius: 10px;
    height: 200px;
    margin: 10px;
    flex-wrap: wrap;
  }
</style>

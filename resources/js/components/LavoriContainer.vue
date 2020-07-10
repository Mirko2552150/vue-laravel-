<template>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="lavori-container">
          <lavori-card v-for="work in works" :data='work'></lavori-card>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import LavoriCard from './LavoriCard';

  export default {
    components: { // inserisco il file importato nel component
      LavoriCard
    },
    data() { // data FUNZIONE oggetto RETURN  oggetto
      return {
        works: [
          {
            title: 'A',
            autore: 'A'
          },
          {
            title: 'B',
            autore: 'B'
          },
          {
            title: 'C',
            autore: 'C'
          },
          {
            title: 'D',
            autore: 'D'
          },
          {
            title: 'E',
            autore: 'E'
          }
        ]
      };
    }
  };
</script>

<style lang="scss">
  .lavori-container {
    display: flex;
    justify-content: center;
    align-items: center;
  }
</style>

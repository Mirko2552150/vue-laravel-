<template>
  <!-- dentro il templeate un solo componente .VUE -->
  <div class="lavori">

    <!-- PRIMO COMPONENTE -->
    <lavori-header></lavori-header>

    <!-- SECONDO COMPONENTE -->
    <lavori-container></lavori-container>

  </div>
</template>


<script>
import LavoriHeader from '../components/LavoriHeader'; // importo il file tramite il percorso

import LavoriContainer from '../components/LavoriContainer'; // importo il file tramite il percorso

// rende disponibile quello che scriviamo per l'applicazione
export default {
  components: { // inserisco il file importato nel component
    LavoriHeader,
    LavoriContainer
  },
  data() { // data FUNZIONE oggetto RETURN  oggetto
    return {};
  }
};
</script>

<!-- scoped attributo style, vale solo per quel componente -->
<!-- con leng indichiamo il metodo di inserimento HTML SCSS ecc -->
<style scoped leng="scss">
  .lavori {
    background-color: black;
  }
</style>

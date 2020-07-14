<template>
  <!-- dentro il templeate un solo componente .VUE -->
  <div class="lavori">

    <!-- PRIMO COMPONENTE -->
    <lavori-header></lavori-header>
    <div class="img">
      <img src="https://avatars3.githubusercontent.com/u/59876947?s=460&u=7dd0ad0a95427d1f07b31a7ba3e0c2ee4a757cfa&v=4" alt="">
    </div>


    <!-- SECONDO COMPONENTE -->
    <lavori-footer></lavori-footer>

  </div>
</template>


<script>
import LavoriHeader from '../components/LavoriHeader'; // importo il file tramite il percorso

import LavoriFooter from '../components/LavoriFooter'; // importo il file tramite il percorso

// rende disponibile quello che scriviamo per l'applicazione
export default {
  components: { // inserisco il file importato nel component
    LavoriHeader,
    LavoriFooter
  },
  data() { // data FUNZIONE oggetto RETURN  oggetto
    return {};
  }
};
</script>

<!-- scoped attributo style, vale solo per quel componente -->
<!-- con leng indichiamo il metodo di inserimento HTML SCSS ecc -->
<style leng="scss" scoped>
  .lavori {
    width: 100vw;
    height: 100vh;
    background-color: black;
    position: relative;

  }
  .img {
    display: flex;
    justify-content: center;
    position: relative;
    top: 40%;
    transform: translateY(-50%);
    /* background-color: white; */

  }

  img {
    width: 300px;

  }

</style>

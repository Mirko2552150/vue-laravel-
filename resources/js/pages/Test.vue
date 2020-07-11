<template>
  <!-- dentro il templeate un solo componente .VUE -->
  <div>
    <!-- <h1 v-for="(message, index) in messages" :key="index">{{ message }}</h1> -->
    <h1>{{ message }}</h1>
    <!-- <h1> Ciao </h1> -->
  </div>
</template>


<script>
  // rende disponibile quello che scriviamo per l'applicazione
  export default {
    data() { // data FUNZIONE oggetto RETURN  oggetto
      return {
        message: ""
      };
    },
    mounted() { // utile per chiamate AJAX, prima che carichi la pagina prendi i dati
      // this.message = "popolato dentro MOUNTED";
      // alert('ciao');
      var self = this; // = al THEN
      axios.get('/api/message')
      .then(function(response) {
        // console.log(response);
        var messageFromController = response.data.message;
        // console.log(messageFromController);
        self.message = messageFromController; // do a messagge il valore del RESPONSE


      }); // primo paramentro, cosa devo chiamate, secondo parametro funzione di CALLBACK
    }
  };

</script>

<!-- scoped attributo style, vale solo per quel componente -->
<!-- con leng indichiamo il metodo di inserimento HTML SCSS ecc -->
<style scoped leng="scss">
  h1 {
    color: red;
  }
</style>

<template>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="lavori-container">
          <lavori-card v-for="work in works" :data='work'></lavori-card>
          <!-- <lavori-card v-for="messageArray in messagesArray" :data='messageArray'> {{ messageArray }}</lavori-card> -->
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
            autore: 'A',
            img: './img/apilogo.jpg'
          },
          {
            title: 'B',
            autore: 'B',
            img: './img/apilogo.jpg'
          },
          {
            title: 'C',
            autore: 'C',
            img: './img/apilogo.jpg'
          },
          {
            title: 'D',
            autore: 'D',
            img: './img/apilogo.jpg'
          },
          {
            title: 'E',
            autore: 'E',
            img: './img/apilogo.jpg'
          }
        ]
      };
    },

    // SOSTITUIRE ARRAY WORKS CON CHIAMATA AXIOS

    mounted() { // utile per chiamate AJAX, prima che carichi la pagina prendi i dati
      // this.message = "popolato dentro MOUNTED";
      // alert('ciao');
      var self = this; // = al THEN
      axios.get('/api/message')
      .then(function(response) {
        // console.log(response.data);
        var messagesArray = response.data;
        console.log(messagesArray);
        // console.log(messagesFromController);
        // self.message = messagesArray; // do a messagge il valore del RESPONSE
        // console.log(self.message);

      }); // primo paramentro, cosa devo chiamate, secondo parametro funzione di CALLBACK
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

<template>
  <!-- QUI LAVORO SULL'HEADER, IMPORTO IL TEMPLATE IN HOME, POSSO ESPORTARLA OVUNQUE -->
  <div class="lavori-header">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <img src="https://www.boolean.careers/images/common/logo.png" alt="">
        </div>
        <div class="col-6">
          <ul>
            <li v-for='item in items'>
              <!-- per inserire la VAR in HREF -->
              <a :href="item.href">{{ item.title }}</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>
<!-- <template>
  <h1>ciao</h1>
</template> -->

<script>
  export default {
    data() {
      return {
        items: [
          {
            title: 'Home',
            href: 'home'
          },
          {
            title: 'About Us',
            href: 'about-us'
          },
          {
            title: 'Prova',
            href: 'prova'
          }
        ]
      };
    }
  };
</script>

<style lang="scss" scoped>
  .lavori-header {
    background-color: green;
    height: 70px;
    line-height: 70px;
    ul {
      list-style: none;
      li {
        display: inline-block;
        margin-right: 10px;
        a {
          color: white;
        }
      }
    }

  }
  img {
    height: 70px;
  }
</style>

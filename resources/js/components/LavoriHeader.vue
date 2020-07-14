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

<script>
  export default {
    data() {
      return {
        items: [
          {
            title: 'Home',
            href: '/'
          },
          {
            title: 'Lavori',
            href: '/lavori'
          }
        ]
      };
    }
  };
</script>

<style lang="scss" scoped>
  .lavori-header {
    background-color: white;
    height: 70px;
    line-height: 70px;
    font-size: 20px;
    ul {
      list-style: none;
      text-align: right;
      li {
        display: inline-block;
        margin-right: 10px;

        a {
          color: black;
        }
      }
    }

  }
  img {
    height: 70px;
  }
</style>

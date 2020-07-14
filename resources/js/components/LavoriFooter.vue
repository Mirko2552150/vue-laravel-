<template>
  <div class="lavori-footer">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ul>
            <li v-for='link in links'>
              <a :href="link.percorso">. {{ link.nome }} .</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div class="lavori-footer">
</template>

<script>
export default {
  data() {
    return {
      links: [
        {
          nome: 'GitHub',
          percorso: 'https://github.com/Mirko2552150'
        },
        {
          nome: 'Linkedin',
          percorso: 'https://www.linkedin.com/feed/'
        },
        {
          nome: 'Master Boolean',
          percorso: 'https://www.credential.net/a5f602ec-be62-471a-968f-3a1488a045cc#gs.a7ioa0'
        }
      ]
    }
  }
}

</script>

<style lang="scss" scoped>
  .lavori-footer {
    background-color: black;
    height: 100px;
    line-height: 100px;
    position: fixed;
    bottom: 0;
    width: 100%;

    ul {
        list-style: none;
        display: flex;
        justify-content: center;

        li {
          display: inline-block;
          margin: 20px;

          a {
            color: white;
            font-size: 15px;
          }
        }
      }
    }
</style>

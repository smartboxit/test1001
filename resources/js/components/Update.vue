<template lang="html">
  <div  class="modal" :class='openmodal'>
      <div class="modal-background"></div>
          <div class="modal-card">
      <header class="modal-card-head">
          <p class="modal-card-title">Update {{list.name}}'s details'</p>
          <button class="delete" aria-label="close" @click='close'></button>
      </header>
      <section class="modal-card-body">

        <div class="field">
          <label class="label">Name</label>
          <div class="control">
            <input class="input" type="text" placeholder="Text input" v-model="list.name" :class="{'is-danger':errors.name}">
          </div>
        </div>

        <div class="field">
          <label class="label">Phone number</label>
          <div class="control">
            <input class="input" type="text" placeholder="Text input" v-model="list.phone">
          </div>
        </div>

        <div class="field">
          <label class="label">Email</label>
          <div class="control">
            <input class="input" type="text" placeholder="Text input" v-model="list.email">
          </div>

        </div>

      </section>
      <footer class="modal-card-foot">
          <button class="button is-success" @click="update" >Update</button>
          <button class="button" @click='close'>Cancel</button>
      </footer>
    </div>
  </div>

</template>

<script>
export default {
    props: ['openmodal'],

    data() {
        return {
          list: {},
          errors:{}
        }
    },


    methods: {
        close() {
            this.$emit('closeRequest')
          },

        update() {
          axios.patch('/phonebook/${this.list.id}',this.$data.list)
                .then(response=>this.close())
                .catch(error=>this.errors=error.response.data.errors)
        }
    }
}
</script>

<style lang="css"> </style>

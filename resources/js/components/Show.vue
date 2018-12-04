<template lang="html">

  <div  class="modal" :class='openmodal' >
      <div class="modal-background" ></div>
          <div class="modal-card">
      <header class="modal-card-head">
          <p class="modal-card-title">{{list.name}}</p>
          <button class="delete" aria-label="close" @click='close'></button>
      </header>
      <section class="modal-card-body">


        <div class="field">
            <label class="label">Phone  : <a> {{list.phone}} </a> </label>
        </div>

        <div class="field">
            <label class="label">Email  : <a> {{list.email}} </a> </label>
        </div>

        <div class="field">
            <label class="label">UpdatedAt: <a> {{list.updated_at}} </a> </label>
        </div>

      </section>
      <footer class="modal-card-foot">
          <button class="button" @click='close'>Cancel</button>
      </footer>
    </div>
  </div>


</template>

<script>
  export default {
      props:['openmodal'],


      methods: {
                close() { this.$emit('closeRequest') }
      }

  }
</script>

<style lang="css"> </style>

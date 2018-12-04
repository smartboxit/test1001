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
          <button class="button is-success" @click="save" >Save</button>
          <button class="button" @click='close'>Cancel</button>
      </footer>
    </div>
  </div>



</template>

<script>
export default {
}
</script>

<style lang="css">
</style>

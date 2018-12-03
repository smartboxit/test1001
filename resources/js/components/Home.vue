<template>

   <div>
 <nav class="panel column is-offset-2 is-8" >
    <p class="panel-heading">
        Phonebook
            <button class="button is-link is-outlined" @click="openAdd">
                Add New
            </button>
    </p>


    <div class="panel-block">
        <p class="control has-icons-left">
        <input class="input is-medium" type="text" placeholder="search">
        <span class="icon is-small is-left">
            <i class="fa fa-search" aria-hidden="true"></i>
        </span>
        </p>
    </div>
    <a class="panel-block">


        <span class="column is-9">
          marksheet
        </span>

        <span class="panel-block column is-1">
                <i class="has-text-info fa fa-eye" aria-hidden="true"></i>
        </span>

        <span class="panel-block column is-1">
                <i class="has-text-edit fa fa-edit" aria-hidden="true"></i>
        </span>

        <span class="panel-block column is-1">
                <i class="has-text-danger fa fa-trash" aria-hidden="true"></i>
        </span>
    </a>
 </nav>

        <Add :openmodal='addActive'  :client_id='cid' @closeRequest='close'></Add>

   </div>

</template>


<script>
    let Add = require('./Add.vue');


export default {

    components:{Add},

    data(){
           return{
                addActive: ''
                }
    },

    mounted: function() {

                  var valueOne;
                      function setValue(){
                        var date = new Date();
                        valueOne = date.getTime();
                      }
                      function readValue() {}
                      setValue();
                      readValue();

                      console.log('working fome home.vue : '+valueOne);
                  },

    methods:{
        openAdd() {
                this.addActive='is-active';

        },

        close() {
            this.addActive=''
            this.cid=this.addActive
        }
    }

}
</script>

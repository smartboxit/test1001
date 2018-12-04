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

    <a class="panel-block" v-for="item,key in lists" >
        <span class="column is-9"  >
          {{item.name}} ; {{item.email}}
        </span>

        <span class="panel-block column is-1">
                <i class="has-text-info fa fa-eye" aria-hidden="true" @click="openShow(key)" ></i>
        </span>

        <span class="panel-block column is-1">
                <i class="has-text-edit fa fa-edit" aria-hidden="true"></i>
        </span>

        <span class="panel-block column is-1">
                <i class="has-text-danger fa fa-trash" aria-hidden="true"></i>
        </span>
    </a>
 </nav>

        <Add  :openmodal='addActive'  @closeRequest='close'></Add>
        <Show :openmodal='showActive'  @closeRequest='close'></Show>

   </div>

</template>


<script>
    let Add  = require('./Add.vue');
    let Show = require('./Show.vue');

    export default {
        components:{Add,Show},

        data(){
               return{
                    addActive: '',
                    showActive: '',
                    lists:{},
                    errors:{}
                    }
        },

        mounted() {
                //console.log('working from home.vue'),

                axios.post('/getData')
                        .then(response=>this.lists=response.data)
                        .catch(error=>this.errors=error.response.data.errors)
        },

        methods:{

             openAdd() {this.addActive='is-active'      },

             openShow(key){
               this.$children[1].list=this.lists[key]
               this.showActive='is-active'     },

               close() {this.addActive=''
                        this.showActive=''
                        }
        }

    }
</script>

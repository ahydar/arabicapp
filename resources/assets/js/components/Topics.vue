<template>
      <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="list-group">
                <a v-for="topic in topics" class="list-group-item" @click = "disp" v-show="isVisible">
                  <h4 class="list-group-item-heading">{{topic.name}}</h4>
                  <p class="list-group-item-text">{{topic.description}}</p>
                </a>
              </div>
        </div>
    </div>
</template>

<script>

    export default {
        //

        data:function(){
          return {
          isVisible:true,
            topics:[]
          }
        },
        mounted() {
            axios.get('/topics').then( response => this.topics = response.data),
            axios.get('/topics').then( response => console.log( response.data)),
            console.log('Component mounted.')
        },
        methods:{
                disp:function(){
                    this.isVisible=false;
                    alert(this.topics[0].topics[0].name);
                }
        }
    }
</script>

<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Test Component</div>

                    <div class="panel-body">
                      I am a testing component
                      <ol>
                      <li v-for="skill in skills">{{skill}}</li>
                      </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        //

        data:function(){
          return {
            skills:[]
          }
        },
        mounted() {
            axios.get('/topics').then( response => this.skills = response.data);
            console.log('Component mounted.')
        }
    }
</script>

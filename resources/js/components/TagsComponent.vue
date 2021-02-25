<template>

    <div class="flex wrapper_api">
        <div class="card" v-for="(tag, index) in tagsList" :key="index">
            <h3>Argument: {{tag.arguments}}</h3>          
            <h4>Shares: {{tag.shares}}</h4>
            <h4>Views: {{tag.views}}</h4>


        </div>
        

    </div>





</template>

<script>
    export default {
        
        data(){
            
            return{
 
            tagsList: "",
            
        }
        },
        mounted() {
            axios.get(`api/tags`).then(response => {

                // console.log(response.data);
                this.tagsList = response.data.data;

            }).catch(error => {
                console.log(error);
                
            });
        

        }

    }
</script>

<template>

    <div class="flex wrapper_api">
        <div class="card" v-for="(category, index) in categoriesList" :key="index">
            <h3>Name: {{category.name}}</h3>          
            <h4>Id: {{category.id}}</h4>

        </div>
        

    </div>





</template>

<script>
    export default {
        
        data(){
            
            return{
 
            categoriesList: "",
            
        }
        },
        mounted() {
            axios.get(`api/categories`).then(response => {

                // console.log(response.data);
                this.categoriesList = response.data.data;

            }).catch(error => {
                console.log(error);
                
            });
        

        }

    }
</script>

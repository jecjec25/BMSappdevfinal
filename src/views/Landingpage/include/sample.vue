<template>


</template>

<script>
import axios from 'axios'


export default{
  
  data(){
      return{
          info:[],
         
      }
  },
  created(){
    this.getInfo();   
  },
      methods:{
          async getInfo(){
              try {
                  const inf = await axios.get('demographics');
                  this.info = inf.data;
              
              } catch (error) {
                  console.log(error);    
              }
          }
      }
      }
</script>
<template>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
            <headers/>      
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            
            <sidebars/>
        
            <!-- END HEADER DESKTOP-->
            <div class="table">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h4 style="font-size:23px; font:bold;">Demographic Data</h4>
                                <a href="/create" class= "btn btn-primary float-right">Add Barangay</a>
                            </div>
                            <div class="card-body"> 
                                <demog/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        
        </div>         
   
   
    </template>
    <script>
    import sidebars from '@/views/dashboard/include/sidebar.vue'
    import headers from '@/views/dashboard/include/header.vue'
    import demog from '@/views/dashboard/tables/demographic-table.vue'
     
export default{
  components:{
    sidebars,
    headers,
    demog
  }
        
}
</script>

<style scope>
.table{
    margin-top:45px;
}
</style>
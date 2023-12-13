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
                            <h4 style="font-size:28px; font:bold;">Resident Data</h4>
                            <form action="/rcreate">
                                    <div>
                                        <button class="btn-primary float-right" style="font-size:25px; border-radius: 5px;">Add Resident</button>
                                    </div>
                            </form>
                          </div>
                          <div class="card-body"> 
                              <resid/>
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
  import resid from '@/views/dashboard/tables/resident-table.vue'
   
export default{
components:{
  sidebars,
  headers,
  resid
}
      
}
</script>

<style scope>
.table{
  margin-top:45px;
}
</style>
    <template>
            <div class="page-wrapper">
        <headers/>     
        <div class="page-container">
            <sidebars/>
            <div class="table">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h4 style="font-size:28px; font:bold;">Barangay Officials</h4>
                                <form action="/bcreate">
                                    <div>
                                        <button class="btn-primary float-right" style="font-size:25px; border-radius: 5px;">Add Barangay Officials</button>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="card-body"> 
                                <br>
                                <officials/>
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
    import officials from '@/views/dashboard/tables/tbl-official.vue'
    export default{
        components:{
            sidebars,
            headers,
            officials
        }
    }
    </script>
    <style scope>
    .table{
        margin-top:45px;
    }
    </style>
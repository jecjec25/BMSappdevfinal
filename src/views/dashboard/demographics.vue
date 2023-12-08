<template>
      <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            </header>
            <headers/>
           <sidebar/>
           <demog/>
        <!-- END MENU SIDEBAR-->
            
        <!-- PAGE CONTAINER-->
        
    </div>

    </template>
    <script>
    import sidebar from '@/views/dashboard/include/sidebar.vue'
    import headers from '@/views/dashboard/include/header.vue'
    import demog from '@/views/dashboard/tables/demographic-table.vue'
     
export default{
  components:{
    sidebar,
    headers,
    demog
  }
        
}
</script>
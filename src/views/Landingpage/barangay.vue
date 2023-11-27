<template>
	<headers/>
	<navs/>
	<section id="explore" class="explore">
			<div class="container">
				<div class="section-header">
					<h2>Barangay</h2>
					<p>Calapan has 62 barangays as shown in the following table.</p>
				</div>
            </div>
    </section>
	<footers/>

</template>

<script>
import headers from '@/views/Landingpage/include/header.vue'
import navs from '@/views/Landingpage/include/nav.vue'
import footers from '@/views/Landingpage/include/footer.vue'
export default{
	components:{
		headers,
		navs,
		footers
	}
}
</script>
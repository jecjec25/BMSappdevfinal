<template>
	<headers/>
	<section id="explore" class="explore">
			<div class="container">
				<div class="section-header">
					<h2>Barangay</h2>
					<p>Calapan has 62 barangays as shown in the following table.</p>
				</div>
				<demographys/>
            </div>
    </section>
	<footers/>

</template>

<script>
import headers from '@/views/Landingpage/include/header.vue'
import demographys from '@/views/Landingpage/include/demography.vue'
import footers from '@/views/Landingpage/include/footer.vue'
export default{
	components:{
		headers,
		demographys,
		footers
	}
}
</script>
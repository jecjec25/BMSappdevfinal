<template>
	<headers/>
	<section id="explore" class="explore" style="background-color: rgb(119, 119, 238); ">
			<div class="container">
				<div class="section-header" style="font-family: 'Poppins';">
					<h2 style="color: black;font-family: 'Poppins'; ">Barangay</h2>
					<p style="color: black; font-family: 'Poppins';">Calapan has 62 barangays as shown in the following table.</p>
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
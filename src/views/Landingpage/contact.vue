<template>		
<headers/>
<!--subscription strat -->
		<section id="contact"  class="subscription" style="font-family: 'Poppins';">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2 style="font-family: 'Poppins';">
						do you want to add your business listing with us?
					</h2>
					<p style="font-family: 'Poppins';">
						Listrace offer you to list your business with us and we very much able to promote your Business.
					</p>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="subscription-input-group">
							<form action="#">
								<input type="email" class="subscription-input-form" placeholder="Enter your email here">
								<button class="appsLand-btn subscribe-btn" onclick="window.location.href='#'">
									creat account
								</button>
							</form>
						</div>
					</div>	
				</div>
			</div>

		</section><!--/subscription-->	
		<!--subscription end -->
		<footers/>
</template>

<script>
import headers from '@/views/Landingpage/include/header.vue'
import footers from '@/views/Landingpage/include/footer.vue'
export default{
	components:{
		headers,
		footers
	}
}
</script>
<template>		
<headers/>
<!--subscription strat -->
		<!-- <?php $validation = \Config\Services::validation(); ?> -->
		<section id="contact"  class="subscription" style="font-family: 'Poppins';">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2 style="font-family: 'Poppins';">
						Send E-mail
					</h2>
				</div>
				<div class="bg-dark bg-gradient min-vh-100">
					<div class="container">
						<div class="row my-5">
							<div class="col-lg-6 mx-auto">
								<div class="card shadow">
									<div class="card-header">
										<h3 class="text secondary">Contact-us</h3>
									</div>
									<div class="card-body p-5">
										<form @submit.prevent="enter">
											<div class="mb-3">
												<label for="email">E-mail</label>
												<input type="email" v-model="email" id="email" class="form-control" placeholder="E-mail">
												<!-- <?php if($validation-getError('email')): ?>
												<div class="invalid-feedback"><?= $validation-.getError('email') ?></div>
												<?php endif; ?> -->

											</div>

											<div class="mb-3">
												<label for="subject">Subject</label>
												<input type="text" v-model="subject" id="subject" class="form-control" placeholder="Subject">
											</div>

											<div class="mb-3">
												<label for="message">Message</label>
												<textarea v-model="message" id="message" rows="4" class="form-control" placeholder="Message"></textarea>
											</div>

											<div class="mb-3">
												<label for="file">Select file</label>
												<input type="file" ref="file" id="file" class="form-control">
											</div>

											<div class="d-grid">
												<button type="submit" class="btn btn-dark bg-gradient">Send</button>
											</div>
										</form>
									</div>
								</div>
							</div>
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
	},
	data(){
		return{
		email: '',
		subject:'',
		message:'',	
		file:null
		}
	},
	methods:{
		async enter()
		{
			console.log('hello')
			// try{
			// 	const ins = await axios.post('send',{
			// 		email: this.email,
			// 		subject: this.subject,
			// 		message: this.message,
			// 		file: this.file
			// 	});
			// }
			// catch(error){
			// 	console.log(error)
			// }
		}
	}
}

</script>
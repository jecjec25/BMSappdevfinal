<template>
	<headers/>
<section id="blog" class="blog" style="background-color: #ecd9c6">
			<div class="container">
				<div class="section-header">
					<h2 style="font-family: 'Poppins';">news and articles</h2>
					<p style="font-family: 'Poppins';">Always upto date with our latest News and Articles </p>
				</div><!--/.section-header-->
				<div class="blog-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-blog-item">
								<div class="single-blog-item-img">
									<img src="@/assets/img/calapan.jpg" alt="blog image">
								</div>
								<div class="single-blog-item-txt">
									<h2><a href="#">CALAPAN CITY HALL</a></h2>
									<h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
									<p>
											Place Type:	City Hall, Local Government Office
											Address	:	Calapan, 5200 Oriental Mindoro, Phils.
											Email: lgu.calapancity@gmail.com
											Phone Number	:	+63 43 288 2496
											Website	:	www.cityofcalapan.gov.ph
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-blog-item">
								<div class="single-blog-item-img">
									<img src="@/assets/img/place.jpg" alt="blog image">
								</div>
								<div class="single-blog-item-txt">
									<h2><a href="#">VISION</a></h2>
									<h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
									<p>
										“A premier Green City with God-loving, economically-empowered, and culture-rich citizens actively participating in good governance and co-existing harmoniously with the environment.”
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-blog-item">
								<div class="single-blog-item-img">
									<img src="@/assets/img/Museum.jpg" alt="blog image">
								</div>
								<div class="single-blog-item-txt">
									<h2><a href="#">MISSION</a></h2>
									<h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
									<p>
										“The Green City of Calapan shall initiate and sustain programs to create an environment conducive to development and responsive to people’s needs through a transparent, accountable and participatory governance.”
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
			
		</section><!--/.blog-->
		<!--blog end -->
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
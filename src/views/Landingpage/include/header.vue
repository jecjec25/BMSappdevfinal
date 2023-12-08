<template>
<header id="header-top" class="header-top" style="background-color: rgb(220, 222, 241)">
			<ul>
				<li>
					<div class="header-top-left">
						<ul>
							<li class="select-opt">
								<a href="#"><span class="lnr lnr-magnifier" style="color: black; font-weight: bolder; size: lnr-magnifier;"></span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="head-responsive-right pull-right">
					<div class="header-top-right">
						<ul>
							<li class="header-top-contact">
								<a href="/login" style="color: black; font-weight: bold;font-size: small; font-family: 'Poppins';">Sign In</a>
							</li>
							<li class="header-top-contact">
								<a href="/register" style="color: black; font-weight: bold;font-size: small; font-family: 'Poppins';">Register</a>
							</li>
						</ul>
					</div>
				</li>
				<navs/>
			</ul>
		</header>
    </template>

<script>
import navs from '@/views/Landingpage/include/nav.vue'
export default{
	components:{
		navs
	}
}
</script>



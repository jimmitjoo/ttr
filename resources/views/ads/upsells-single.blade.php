<div id="upsells" class="max-width container-fluid block bg-white">
	<div class="row">
	

		@if (Auth::check() && !empty(Auth::user()->gender))
			
			<!-- User is logged in and we got some kind of gender -->	
			
		    @if (Auth::user()->gender == 'female')
		    
		    	<!-- if gender is female -->
		    	<!-- place code here -->
		    	<a href="http://track.adtraction.com/t/t?a=435656443&as=1087597488&t=2&tk=1&url=http://www.outnorth.se/suunto/ambit3-run-black-hr" target="_blank">
					<div class="col-lg-6 col-md-6 col-xs-12">
						<img src="images/products/outnorth-suunto-ambit3-run.jpg"/>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<div class="table">
							<div class="table-cell">
								<h2>Suunto Ambit3 Run HR -en perfekt löpupplevelse</h2>
								<p>Suunto Ambit3 Run HR är en GPS-klocka som är optimerad för en perfekt löpupplevelse – var du än springer.</p>
								<span class="label">Suunto Ambit3 Run</span>
								<span class="label price">2194;- <span class="sale">Spara 15%!</span></span>
								<span class="label-buy click click-shop">Handla här</span>
							</div>
						</div>
					</div>
				</a>
		    
		    @elseif(Auth::user()->gender == 'male')
				
				<!-- if gender is male -->
				<!-- place code here -->  
				<a href="http://track.adtraction.com/t/t?a=435656443&as=1087597488&t=2&tk=1&url=http://www.outnorth.se/suunto/ambit3-run-black-hr" target="_blank">
					<div class="col-lg-6 col-md-6 col-xs-12">
						<img src="images/products/outnorth-suunto-ambit3-run.jpg"/>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<div class="table">
							<div class="table-cell">
								<h2>Suunto Ambit3 Run HR -en perfekt löpupplevelse</h2>
								<p>Suunto Ambit3 Run HR är en GPS-klocka som är optimerad för en perfekt löpupplevelse – var du än springer.</p>
								<span class="label">Suunto Ambit3 Run</span>
								<span class="label price">2194;- <span class="sale">Spara 15%!</span></span>
								<span class="label-buy click click-shop">Handla här</span>
							</div>
						</div>
					</div>
				</a>   
		
		    @endif
		
		
		@elseif(Auth::check())
		
			<!-- The user is logged in, but we don't know the gender -->
			<!-- place code here -->
			<a href="http://track.adtraction.com/t/t?a=435656443&as=1087597488&t=2&tk=1&url=http://www.outnorth.se/2xu/men-s-elite-compression-tight" target="_blank">
				<div class="col-lg-6 col-md-6 col-xs-12">
					<img src="images/products/outnorth-2xu-compression-tights.jpg"/>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<div class="table">
						<div class="table-cell">
							<h2>Orka längre med 2XU kompressionskläder</h2>
							<p>2XU Men's Elite Compression Tights är förmodligen de skönaste löpartightsen du någonsin kommer äga. Stabiliserar de största muskelgrupperna och ger stöd under löpturen.</p>
							<span class="label">2XU Men Compression Tight</span>
							<span class="label price">745;- <span class="sale">Spara 50%!</span></span>
							<span class="label-buy click click-shop">Handla här</span>
						</div>
					</div>
				</div>
			</a>
		
		@else
		
		    <!-- We don't know anything about the user -->
		    <!-- place code here -->
		    <a href="http://track.adtraction.com/t/t?a=435656443&as=1087597488&t=2&tk=1&url=http://www.outnorth.se/suunto/ambit3-run-black-hr" target="_blank">
				<div class="col-lg-6 col-md-6 col-xs-12">
					<img src="images/products/outnorth-suunto-ambit3-run.jpg"/>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<div class="table">
						<div class="table-cell">
							<h2>Suunto Ambit3 Run HR -en perfekt löpupplevelse</h2>
							<p>Suunto Ambit3 Run HR är en GPS-klocka som är optimerad för en perfekt löpupplevelse – var du än springer.</p>
							<span class="label">Suunto Ambit3 Run</span>
							<span class="label price">2194;- <span class="sale">Spara 15%!</span></span>
							<span class="label-buy click click-shop">Handla här</span>
						</div>
					</div>
				</div>
			</a>
		
		@endif

		
	</div>
</div>
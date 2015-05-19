@extends('master.master')

@section('title', 'Älska att springa - Timetorun.se')
@section('description', 'Hitta lopp och tävlingar att springa i Sverige och utomlands. Löparskor, träningskläder och kompressionskläder till bra pris online.')
@section('current_url', 'http://'.getenv('APP_URL') )
@section('share_image', 'http://'.$_SERVER['HTTP_HOST'].'/images/unsplash-green.jpg')

@section('content')


	
    
    
    <header>
    
    	<div class="topnav">
	    	<div class="max-width container-fluid header-scroll-bg">
	            <div class="row">
	                <div class="col-lg-6 col-md-6 col-xs-6 header-scroll">
	                    <div class="table">
	                        <div class="table-cell">
	                            <a href="/"><img class="logo" src="/images/timetorun.png"></a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-6 col-md-6 col-xs-6 header-scroll text-right">
	                    @include('partials.authmenu')
	                </div>
	            </div>
	        </div>
    	</div>
    
        <div class="max-width container-fluid header-default-bg">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-6 header-default">
                    <div class="table">
                        <div class="table-cell">
                            <a href="/"><img class="logo" src="/images/timetorun.png"></a>
                            
                            <a class="link-topnav" href="#">demo</a>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-xs-6 header-default text-right">

                    <!--
                    <form>
                        <input type="text" class="search-topnav" placeholder="sök">
                    </form>
                    -->

                    @include('partials.authmenu')
                    
                </div>
                
            </div>
        </div>
        
    </header>


    <div class="max-width container-fluid block canvas">
        <div class="row height-full">
            <div class="col-lg-12 col-md-12 height-full">
                <div class="table">
                    <div class="table-cell">
                    	<div id="fader">
                    		<div>
		                        <span class="title">Drottning</span><br/><span>Margaretaloppet</span>
		                        <p>
		                        	<?php
		                            /*
		                             * First parameter is the id (last part of race url) and is required.
		                             * Check what the id is on the live-site since it may not be the same
		                             * in your local environment.
		                             *
		                             * Second parameter in printPromoLink is not required, will use the
		                             * name of the run from database in that case it is empty or not set.
		                             *
		                             * Third parameter is the class that should be set on the link, if
		                             * multiple, just put a space between them.
		                            */
		                            ?>
		                            <?php echo \App\Run::printRunLink('131', 'Läs mer och anmäl dig här', 'click click-blue'); ?>
		                        </p>
		                    </div>
                    		<div>
		                    	<span>Lidingöloppet</span>
		                        <p><?php echo \App\Run::printRunLink('619', 'Läs mer och anmäl dig här', 'click click-blue'); ?></p>
                    		</div>
                    		<div>
		                    	<span>Kalmar Malkars 21</span>
		                        <p><?php echo \App\Run::printRunLink('275', 'Läs mer och anmäl dig här', 'click click-blue'); ?></p>
                    		</div>
                    	</div>
                    </div>
            	</div>
            </div>
        </div>
    </div>

    
    <div class="max-width container-fluid bg-white block-border-bottom">
    	<div class="row">
    		<div class="col-lg-6 col-md-6 block bg-blue">
    			<h3 class="large">Time<span style="font-weight:500">to</span>run<br/>- Älska att springa</h3>
    			<p>Med Timetorun är det enkelt att hitta lopp och tävlingar att springa – på mobilen, datorn eller surfplattan vart du än är. Du bestämmer förutsättningarna. Lägg upp dina träningspass och bjud in gamla och nya vänner. Få förslag och inspiration till löparskor, träningskläder och tillbehör -allt för att göra din löpning ännu effektivare och roligare.</p>
                
                @if (!Auth::check())
                <a class="btn-facebook" href="{{ url('login/facebook') }}">Registrera dig med facebook</a>
    		    @endif
    		    
            </div>
    		<div class="col-lg-6 col-md-6 block hide-mobile">
    			
    			@include('ads.upsells-single-slider')
    			
    		</div>
    	</div>
    </div>
    
    
    <div class="max-width block block-border-bottom bg-white">
    
            <div class="row">
                <div class="col-lg-12 text-center" style="padding-bottom: 50px;">
                    <h2 class="text-title big">Sök lopp och tävlingar</h2>
                    <p style="font-weight: 500;">-i närheten eller på annan plats i Sverige och världen.</p>
                </div>
            </div>

            @include('race.list-with-search')

    </div>

    @include('ads.upsells-single')

    <script src="/js/angular/angular.js"></script>
    <script src="/js/angular/ui-bootstrap-0.11.1.js"></script>
    <script src="/js/angular/application.js"></script>
@stop
<header>
    
	<div class="topnav">
    	<div class="max-width container-fluid header-scroll-bg">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-8 header-scroll">
                    <div class="table">
                        <div class="table-cell">
                            <a href="/"><img class="logo" src="/images/timetorun.png"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-4 header-scroll text-right">
                    @include('partials.authmenu')
                </div>
            </div>
        </div>
	</div>

    <div class="max-width container-fluid header-default-bg">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-8 header-default">
                <div class="table">
                    <div class="table-cell">
                        <a href="/"><img class="logo" src="/images/timetorun.png"></a>
                        <!--<a class="link-topnav" href="#"></a>-->
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-xs-4 header-default text-right">

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
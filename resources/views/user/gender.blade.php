
@if (Auth::check() && !empty(Auth::user()->gender))
	
	<!-- User is logged in and we got some kind of gender -->	
	
    @if (Auth::user()->gender == 'female')
    
    	<!-- if gender is female -->
    	<!-- place code here -->
    
    @elseif(Auth::user()->gender == 'male')
		
		<!-- if gender is male -->
		<!-- place code here -->      

    @endif


@elseif(Auth::check())

	<!-- The user is logged in, but we don't know the gender -->
	<!-- place code here -->

@else

    <!-- We don't know anything about the user -->
    <!-- place code here -->

@endif
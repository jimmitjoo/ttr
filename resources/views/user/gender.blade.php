<!-- Exempel på hur man ser kön på inloggad användare -->
@if (Auth::check() && !empty(Auth::user()->gender))

    @if (Auth::user()->gender == 'female')
        <!-- Vad som visas om det är en kvinna -->

    @elseif(Auth::user()->gender == 'male')
        <!-- Vad som visas om det är en man -->

    @endif

@elseif(Auth::check() && empty(Auth::user()->gender))

    <!-- Vad som sker om vi inte vet vad personen har för kön -->
    
@endif
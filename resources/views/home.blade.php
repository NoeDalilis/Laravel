<?php echo $users[0]['name']; ?>
<br>

@foreach ($users as $user)
    <h1> {{ $user ['name'] }} </h1>
    <h2> {{ $user ['age'] }} </h1>
    @if ($user ['age'] > 17)
    <p>user may drive </p>
        
    @endif
    <hr>
@endforeach

@copyright {{date ('Y')}}
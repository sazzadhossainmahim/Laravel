<div>
 <h1>Hellow </h1>
 <h3> Hello {{ $names }} </h3>
 <h2>Fruits are:</h2>
 <ul>
     @foreach ($fruits as $fruit )
        <li>{{ $fruit}}</li>
     @endforeach
 </ul>
</div>

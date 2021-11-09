<h1>Users Page</h1>

{{-- @if ($errors->any())
@foreach ($errors->all() as $err)
<li>{{ $err }}</li>
@endforeach
@endif --}}

<form action="users" method="post">
    @csrf
    <input type="text" name="username" placeholder="Username" /><br>
    <span style="color:blue">@error('username'){{ $message }}
        @enderror</span><br>
    <input type="text" name="password" placeholder="Password" /><br>
    <span style="color:blue">@error('password'){{ $message }}
        @enderror</span><br>
    <button type="submit">Login </button>

</form>

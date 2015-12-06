<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="{{url()}}/auth/register">
    {!! csrf_field() !!}

    <div class="col-md-6">
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="text" name="username" value="{{ old('username') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div class="col-md-6">
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>

@if($errors->has())
<div class='alert alert-danger'>
    @foreach ($errors->all('<p>:message</p>') as $message)
    {!! $message !!}
    @endforeach
</div>
@endif
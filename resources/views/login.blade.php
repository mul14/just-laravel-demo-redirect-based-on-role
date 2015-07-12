<form method="post">
    {!! csrf_field() !!}
    <input type="text" name="email" value="admin@example.com">
    <input type="password" name="password" value="123">
    <button type="submit">Login</button>
</form>

<form method="post">
    {!! csrf_field() !!}
    <input type="text" name="email" value="member@example.com">
    <input type="password" name="password" value="123">
    <button type="submit">Login</button>
</form>

<a href="/dashboard">Go to Dashboard</a>
<a href="/">Home page</a>
<a href="/login">Login</a>
<a href="/logout">Logout</a>

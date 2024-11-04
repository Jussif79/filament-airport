
<form action="{{route('airports.store')}}" method="POST">
    @csrf
    <input type="text" name="title">
    <input type="submit">
</form>

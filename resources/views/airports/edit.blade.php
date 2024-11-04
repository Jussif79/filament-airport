
<form action="{{route('airports.update',['airport'=>$airport->id])}}" method="POST">
    @csrf
    <input type="text" name="title" value="{{$airport->title}}">
    <input type="submit">
</form>

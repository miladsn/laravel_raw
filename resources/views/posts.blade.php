<div    style="box-shadow: 1px 1px 1px gray ; width:100%; height: 300px; margin: 0px auto  ">
    hello

</div> <table>
    @foreach($users as $row)
 <tr><td>{{$row->name}}</td><td>{{$row->username}}</td></tr>

@endforeach
</table>
{{--@if($names)--}}
    {{--{{123}}--}}
    {{--@endif--}}

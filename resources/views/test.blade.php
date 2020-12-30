<h1>test page</h1>
<ul>
@foreach($data as $item)
<li>{{$item['id']}}:{{$item['name']}}</li>
@endforeach
</ul>
{{print_r($data)}}
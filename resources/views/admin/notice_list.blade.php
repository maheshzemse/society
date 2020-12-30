<h1>Notice List</h1>
<table border="1">
<tr>
<td>id</td>
<td>name</td>
<td>date</td>
<td>notice_type</td>
<td>recipient_name</td>
<td>description</td>
</tr>
@foreach($notice as $notice)
<tr>
<td>{{$notice['id']}}</td>
<td>{{$notice['name']}}</td>
<td>{{$notice['date']}}</td>
<td>{{$notice['notice_type']}}</td>
<td>{{$notice['recipient_name']}}</td>
<td>{{$notice['description']}}</td>
</tr>
@endforeach
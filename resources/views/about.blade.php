<h1>hello</h1>
<ul>
@foreach ($customers as $item)
   <li>{{$item->contactFirstName}}</li> 
@endforeach
</ul>
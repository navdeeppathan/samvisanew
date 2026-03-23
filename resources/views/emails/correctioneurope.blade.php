<h2>Update Required</h2>

<p>{{ $messageText }}</p>

<h4>Fields to Update:</h4>
<ul>
    @foreach($fields as $field)
        <li>{{ ucfirst(str_replace('_',' ', $field)) }}</li>
    @endforeach
</ul>

<a href="{{ url('/europe/application/edit/'.$application->id) }}" 
   style="padding:10px 20px;background:black;color:white;text-decoration:none;">
   Edit Application
</a>
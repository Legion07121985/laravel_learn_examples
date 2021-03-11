<h2>Component Attributes</h2>
<div type= {{ $type }} {{ $attributes }}>
	{{ $message }}
</div>
<div class="div-code" style="width: 306px;">
	<code>
		&lt;div type=&quot;someType&quot; class=&quot;mt-4&quot;&gt;</br>
			Massage from welcome.blade.php</br>
		&lt;/div&gt;</br>
	</code>
</div>

<h2>Default / Merged Attributes</h2>
<div {{ $attributes->merge(['class'=>'alert alert-'.$type]) }}>
	{{ $message }}
</div>
<div class="div-code" style="width: 340px;">
	<code>
		&lt;div class=&quot;alert alert-someType mt-4&quot;&gt;</br>
			Massage from welcome.blade.php</br>
		&lt;/div&gt;</br>
	</code>
</div>





<h2>Slots</h2>
<div class="alert alert-danger">
	{{ $slot }}
</div>
<div class="div-code" style="width: 395px;">
	<code>
		&lt;div class=&quot;alert alert-danger&quot;&gt;</br>
			&lt;string&gt;Whoops! &lt;/string&gt;Something went wrong!</br>
		&lt;/div&gt;</br>
	</code>
</div>


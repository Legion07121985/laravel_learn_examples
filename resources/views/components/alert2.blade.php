@inject('TabWC', 'App\Http\Controllers\TabWCController')
<h2>Component Attributes</h2>
<div type= {{ $type }} {{ $attributes }}>
	{{ $message }}
</div>
{{ $TabWC->show(5) }}

<h2>Default / Merged Attributes</h2>
<div {{ $attributes->merge(['class'=>'alert alert-'.$type]) }}>
	{{ $message }}
</div>
{{ $TabWC->show(6) }}

<h2>Slots</h2>
<div class="alert alert-danger">
	{{ $slot }}
</div>
{{ $TabWC->show(7) }}
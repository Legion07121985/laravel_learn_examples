@section('content')
@inject('TabWC', 'App\Http\Controllers\TabWCController')
@include('layauts.menutop')
@yield('menutop')
<br>    
<div style="float: right" id="like_button_container"></div>
<div id="example"></div>

    <h3>Environment Directives</h3>
    <strong>Out:</strong>
    @production
    <div class="container">
        This is production mode??? Yes it is!
    </div>
    @endproduction
    
 
    @env('local')
        @isset($_ENV['EXAMPLE'])
            <div>
                Environment 'APP_ENV' is set in 'local'!
            </div>
        @endisset
    @endenv
    {{ $TabWC->show(4) }}


    <h2>Passing Data To Components</h2>
    <x-alert type="error" message="message for welcome.blade.php"/>
    
    {{ $TabWC->show(1) }}
 
    <h2>Component Methods</h2>
    <strong>Output:</strong></br>
    <select size="4" name="hero">
        <x-option value="0" label="Papay"></x-option>
        <x-option value="1" label="Tom"></x-option>
        <x-option value="0" label="Jerry"></x-option>
    </select>
    {{ $TabWC->show(2) }}

    <br>

    
    <h2>Accessing Attributes & Slots Within Component Classes</h2>
    <x-commons.link href="/" class="primary-action">
        <i class="fas fa-newspaper"></i> News
    </x-commons.link>
    {{ $TabWC->show(3) }}
        

    <!-- Component Attributes | Default / Merged Attributes | Slots -->
    <x-alert2 type="someType" message="Massage from welcome.blade.php" class="mt-4">
            <string>Whoops! </string>Something went wrong!
    </x-alert2>
    @endsection
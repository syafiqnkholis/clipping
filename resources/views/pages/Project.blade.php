{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}

    <div class="row">
    <div class="card card-custom gutter-b">
	<div class="card-header">
		<div class="card-title">
			<h3 class="card-label">
				Basic Card
				<small>sub title</small>
			</h3>
		</div>
	</div>
	<div class="card-body">
		isi:

	</div>
    
`   <button   button type="button" class="btn btn-primary">Primary</button>
</div>
    </div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection

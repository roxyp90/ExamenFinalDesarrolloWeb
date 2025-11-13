@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(74, 46, 20, 0.1); border: 1px solid #E8C547;">
                <div class="card-header" style="background-color: #fafafa; border-bottom: 2px solid #E8C547;">
                    <span style="color: #D97A26; font-weight: bold; font-size: 1.1rem;">{{ __('Dashboard') }}</span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert" style="background-color: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 1rem; border-radius: 4px; margin-bottom: 1rem;" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p style="color: #4A2E14; font-size: 1rem;">{{ __('You are logged in!') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
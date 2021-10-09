@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-5 fw-normal">{{ __('messages.plan_title') }}</h1>
    <p class="fs-5 text-muted">{{ __('messages.plan_text') }}</p>
</div>
<main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">{{ __('messages.free') }}</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/{{ __('messages.month') }}</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>{{ __('messages.users_included', ['total' => 10]) }}</li>
                        <li>{{ __('messages.storage_included', ['total' => 2]) }}</li>
                        <li>{{ __('messages.email_included', ['total' => 1]) }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Pro</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/{{ __('messages.month') }}</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>{{ __('messages.users_included', ['total' => 20]) }}</li>
                        <li>{{ __('messages.storage_included', ['total' => 10]) }}</li>
                        <li>{{ __('messages.email_included', ['total' => 5]) }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-white bg-primary border-primary">
                    <h4 class="my-0 fw-normal">Enterprise</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/{{ __('messages.month') }}</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>{{ __('messages.users_included', ['total' => 30]) }}</li>
                        <li>{{ __('messages.storage_included', ['total' => 15]) }}</li>
                        <li>{{ __('messages.email_included', ['total' => 10]) }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

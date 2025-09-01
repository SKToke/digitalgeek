@extends('layouts' . '.' . get_frontend_settings('theme'))
@push('title', get_phrase('Certificate Verify'))
@push('meta')@endpush
@push('css')
@endpush
@section('content')
    <!------------------- Login Area Start  ------>
    <section class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="login-img text-center">
                        <img class="w-75 h-auto ms-auto me-auto"
                             src="{{ asset('assets/frontend/default/image/login.gif') }}" alt="...">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <form action="{{ route('certificate-verify.show') }}" class="global-form login-form mt-25"
                          method="POST">
                        @csrf
                        <h4 class="g-title">{{ get_phrase('Certificate Verify') }}</h4>
                        <p class="description">{{ get_phrase('Submit your certificate identifier.') }} </p>
                        <div class="form-group">
                            <label for="certificate_id"
                                   class="form-label">{{ get_phrase('Certificate Identifier') }}</label>
                            <input type="text" id="certificate_id" name="identifier" class="form-control"
                                   placeholder="{{ get_phrase('Enter Your Certificate Identifier') }}">
                        </div>
                        <button type="submit" class="eBtn gradient w-100 mt-5">{{ get_phrase('Send Request') }}</button>
                    </form>
                    <div class="mt-5">
                        @if(session('success'))
                            <h2 class="text-success">{{ session('success') }}</h2>
                        @else
                            <h2 class="text-danger">{{ session('error') }}</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------- Login Area End  ------>
@endsection
@push('js')

@endpush

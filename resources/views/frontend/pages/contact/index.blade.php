@extends('frontend.layouts.page')

@push('style')
  <link rel="stylesheet" href="{{ asset('themes/frontend/fhmvietnam/css/contact.css') }}" type="text/css" /> 
@endpush
@php
  $page_title = $taxonomy->title ?? ($page->title ?? ($page->name ?? ''));
  $image_background = $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');
  $title = $page->description ?? '';
  $image = $page->json_params->og_image ?? '';
@endphp

@section('content')
  {{-- Print all content by [module - route - page] without blocks content at here --}}
  <div id="contact">
    <div class="contact-form">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="contact-form-img">
              <img src="{{ $image }}" alt="Contact" />
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="contact-form-wrapper">
              <h2 class="title">
                {{ $title }}
              </h2>
              <form class="mb-0 form_ajax" method="post" action="{{ route('frontend.contact.store') }}">
                @csrf
                <div class="contact-form-fields">
                  <input type="text" id="name" name="name" value="" class="sm-form-control required" placeholder="Họ và tên (bắt buộc)" required />
                  <input type="email" id="email" name="email" value=""
                    class="required email sm-form-control" placeholder="Email (bắt buộc)" required />
                  <input type="text" id="phone" name="phone" value="" class="sm-form-control" placeholder="Điện thoại (bắt buộc)" required />
                  <textarea class="required sm-form-control" id="content" name="content" rows="5" cols="30" placeholder="Lời nhắn" required></textarea>
                  <button class="button" type="submit">
                    <a href="#"><span>@lang('Gửi')</span></a>
                    <a href="#"><span>@lang('Gửi')</span></a>
                  </button>
                </div>
                <input type="hidden" name="is_type" value="contact">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-information">
      <div class="container">
        <a href="tel:{!! $web_information->information->phone ?? '' !!}" class="phone">{!! $web_information->information->phone ?? '' !!}</a>
        <div class="row justify-content-end">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="contact-information-list">
              <a href="mailto:{!! $web_information->information->email ?? '' !!}"
                ><span>Email.</span>{!! $web_information->information->email ?? '' !!}
              </a>
              <p>
                <span>Address.</span>{!! $web_information->information->address ?? '' !!}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('script')
  <script>
    $(function() {
      $('#footer').addClass('dark');
    })
  </script>
@endpush

@extends('frontend.layouts.app')

@section('title', app_name() . ' | Artists Page')

@section('content')
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-user"></i> {{ __('navs.frontend.artists') }}
                </div>
                <div class="card-body">
                    <div class="row">
                        @if(!empty($artists))
                            @forelse($artists as $key=>$artist)

                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            {!! $artist->fullname !!}
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Address:{!! $artist->address !!}</p>
                                            <a href="{{ route('frontend.artist.artist.show',$artist->id) }}">View Detail</a>
                                        </div>
                                    </div>
                                </div>
                                @if($key=='2')
                                    <div class="w-100"></div>
                                @endif
                             @empty

                            @endforelse
                         @endif

                     </div>
                 </div>
             </div><!--card-->
         </div><!--col-->
     </div><!--row-->
 @endsection
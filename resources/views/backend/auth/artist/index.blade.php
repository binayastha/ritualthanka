@extends ('backend.layouts.app')

@section ('title', app_name() . ' | ' . __('labels.backend.access.artist.main'))

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.access.artist.management') }}
                    </h4>
                </div>
                <!--col-->

                <div class="col-sm-7 pull-right">
                    @include('backend.auth.artist.includes.header-buttons')
                </div>
                <!--col-->
            </div>
            <!--row-->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>{{ __('labels.backend.access.artist.table.fullname') }}</th>
                                {{--<th>{{ __('labels.backend.access.artist.table.dob') }}</th>--}}
                                <th>{{ __('labels.backend.access.artist.table.address') }}</th>
                                <th>{{ __('labels.backend.access.artist.table.email') }}</th>
                                <th>{{ __('labels.backend.access.artist.table.contact') }}</th>
                                <th>{{ __('labels.general.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($artists))
                                @forelse($artists as $artist)
                                    <tr>
                                        <td>{!!  $artist->fullname !!}</td>
                                        {{--<td>{!!$artist->dob!!}</td>--}}
                                        <td>{!!$artist->address!!}</td>
                                        <td>{!!$artist->email!!}</td>
                                        <td>{!!$artist->contact!!}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group"
                                                 aria-label="Artist Actions">
                                                <a href="{{ route('admin.artist.artist.show',$artist->id) }}"
                                                   class="btn btn-info">
                                                    <i class="fa fa-search" data-toggle="tooltip"
                                                       data-placement="top" title=""
                                                       data-original-title="View">

                                                    </i>
                                                </a>
                                                <a href="{{ route('admin.artist.artist.edit',$artist->id) }}"
                                                   class="btn btn-primary">
                                                    <i class="fa fa-pencil" data-toggle="tooltip"
                                                       data-placement="top" title=""
                                                       data-original-title="Edit">

                                                    </i>
                                                </a>
                                                <a data-method="delete" data-trans-button-cancel="Cancel"
                                                   data-trans-button-confirm="Delete"
                                                   data-trans-title="Are you sure you want to do this?"
                                                   class="btn btn-danger" style="cursor:pointer;"
                                                   onclick="$(this).find('form').submit();"><i class="fa fa-trash"
                                                                                               data-toggle="tooltip"
                                                                                               data-placement="top"
                                                                                               title=""
                                                                                               data-original-title="Delete"></i>

                                                    <form action="{{ route('admin.artist.artist.destroy',$artist->id) }}" method="POST" name="delete_item"
                                                          style="display:none">
                                                        <input type="hidden" name="_method" value="delete">
                                                        <input type="hidden" name="_token"
                                                               value="{{ Session::token() }}">
                                                    </form>
                                                </a>

                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">No Artists added</td>
                                    </tr>
                                @endforelse
                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <div class="float-left">

                        {!! $artists->count() !!} {{ trans_choice('labels.backend.access.artist.table.total', $artists->count()) }}
                    </div>
                </div>
                <!--col-->

                <div class="col-5">
                    <div class="float-right">
                        {{--{!! $roles->render() !!}--}}
                    </div>
                </div>
                <!--col-->
            </div>
            <!--row-->
        </div>
        <!--card-body-->
    </div>
@endsection
@extends ('backend.layouts.app')

@section ('title', app_name() . ' | ' . __('labels.backend.access.page.main'))

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.access.page.management') }}
                    </h4>
                </div>
                <!--col-->

                <div class="col-sm-7 pull-right">
                    @include('backend.auth.page.includes.header-buttons')
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
                                <th>{{ __('labels.backend.access.page.table.title') }}</th>
                                {{--<th>{{ __('labels.backend.access.artist.table.dob') }}</th>--}}
                                <th>{{ __('labels.backend.access.page.table.slug') }}</th>
                                <th>{{ __('labels.backend.access.page.table.status') }}</th>
                                <th>{{ __('labels.backend.access.page.table.created') }}</th>
                                <th>{{ __('labels.backend.access.page.table.last_updated') }}</th>
                                <th>{{ __('labels.general.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($pages))
                                @forelse($pages as $page)
                                    <tr>
                                        <td>{!!  $page->title !!}</td>
                                        {{--<td>{!!$page->dob!!}</td>--}}
                                        <td>{!!$page->clean_url!!}</td>
                                        <td>
                                            @if ($page->status == 1)
                                                Publish
                                            @else
                                                Unpublish
                                            @endif
                                        </td>
                                        <td>{!!$page->created_at!!}</td>
                                        <td>{!!$page->updated_at!!}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group"
                                                 aria-label="Artist Actions">
                                                <a href="{{ route('admin.page.page.show',$page->id) }}"
                                                   class="btn btn-info">
                                                    <i class="fa fa-search" data-toggle="tooltip"
                                                       data-placement="top" title=""
                                                       data-original-title="View">

                                                    </i>
                                                </a>
                                                <a href="{{ route('admin.page.page.edit',$page->id) }}"
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

                                                    <form action="{{ route('admin.page.page.destroy',$page->id) }}" method="POST" name="delete_item"
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
                                        <td colspan="3">No Articles added</td>
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

                        {!! $pages->count() !!} {{ trans_choice('labels.backend.access.page.table.total', $pages->count()) }}
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
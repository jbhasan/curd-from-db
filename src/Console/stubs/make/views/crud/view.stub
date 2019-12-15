@extends('layouts.crud-master')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {!! $title !!}
                    <div class="float-right"><a href="/{!! Illuminate\Support\Str::snake($model_name) !!}" class="btn btn-xs btn-warning">{!! ucfirst(Illuminate\Support\Str::singular($model_name)) !!} List</a></div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered">
                            <tbody>
                                @foreach($columns_visible as $column)
                                    <tr>
                                    <td>{!! Illuminate\Support\Str::title(str_replace('_', ' ', $column)) !!}</td>
                                    <td>{!! $data->$column !!}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush
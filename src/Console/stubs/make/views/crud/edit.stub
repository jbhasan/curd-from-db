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
                    {!! Form::model($data, ['method'=>'PATCH','route' => [Illuminate\Support\Str::snake($model_name).'.update',$data->id], 'files'=>true]) !!}
                        @foreach($columns_fillable as $column)
                            @if($column == 'email')
                                @php($type = 'email')
                            @elseif($column == 'password')
                                @php($type = 'password')
                            @else
                                @php($type = 'text')
                            @endif

                            <div class="form-group">
                                <label for="{!! $column !!}">{!! Illuminate\Support\Str::title(str_replace('_', ' ', $column)) !!}</label>
                                @if (\Schema::getColumnType($table_name, $column) == 'text')
                                    {!! Form::textarea($column, null, ['class'=>"form-control date", 'id'=>$column, 'placeholder'=>Illuminate\Support\Str::title(str_replace('_', ' ', $column))]) !!}
                                @elseif (Illuminate\Support\Str::endsWith($column, '_id'))
                                    @php
                                        $relational_model_name = Illuminate\Support\Str::limit($column, strlen($column) - strlen('_id'), '');
                                        if ($relational_model_name == 'parent') {
                                            $relational_model = '\App\\'.$model_name;
                                        } else {
                                            $relational_model = '\App\\'.ucfirst(Illuminate\Support\Str::singular(Illuminate\Support\Str::limit($column, strlen($column) - strlen('_id'), '')));
                                        }
                                    @endphp
                                    @if (class_exists($relational_model))
                                        @php($relational_data = $relational_model::pluck('name', 'id')->prepend('-- Please Select --', '0'))
                                        {!! Form::select($column, $relational_data, null, ['class'=>'form-control', 'id'=>$column]) !!}
                                    @else
                                        {!! Form::text($column, null, ['class'=>"form-control", 'id'=>$column, 'autocomplete'=>'off', 'placeholder'=>Illuminate\Support\Str::title(str_replace('_', ' ', $column))]) !!}
                                    @endif
                                @elseif (Illuminate\Support\Str::endsWith($column, '_date'))
                                    {!! Form::text($column, null, ['class'=>"form-control date", 'id'=>$column, 'autocomplete'=>'off', 'placeholder'=>Illuminate\Support\Str::title(str_replace('_', ' ', $column))]) !!}
                                @elseif (Illuminate\Support\Str::endsWith($column, '_datetime'))
                                    {!! Form::text($column, null, ['class'=>"form-control datetime", 'id'=>$column, 'autocomplete'=>'off', 'placeholder'=>Illuminate\Support\Str::title(str_replace('_', ' ', $column))]) !!}
                                @else
                                    {!! Form::text($column, null, ['class'=>"form-control", 'id'=>$column, 'autocomplete'=>'off', 'placeholder'=>Illuminate\Support\Str::title(str_replace('_', ' ', $column))]) !!}
                                @endif
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-success">Update Data</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush
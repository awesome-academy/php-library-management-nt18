@extends('admin.layouts.app')

@section('title')
    <title>{{ trans('message.add_author') }}</title>
@endsection

@section('content')
<div class="content-wrapper">

    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card card-primary mt-5">
                        <div class="card-header">
                            <h3 class="card-title">{{ trans('message.add_author') }}</h3>
                        </div>

                        <form method="POST" action="{{ route('authors.index') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>{{ trans('message.name') }}</label>
                                    <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name"
                                        placeholder="{{ trans('message.input_name_of_author') }}">
                                        @if ($errors->has('name'))
                                            <span class="error">
                                                {{ $errors->first('name') }}
                                            </span>
                                        @endif
                                </div>

                                <div class="form-group">
                                    <label>{{ trans('message.description') }}</label>
                                    <textarea class="form-control" rows="3" name="description"
                                        placeholder="{{ trans('message.enter') }}"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>{{ trans('message.email') }}</label>
                                    <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email"
                                        placeholder="{{ trans('message.input_email_of_author') }}">
                                        @if ($errors->has('email'))
                                            <span class="error">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif
                                </div>

                                <div class="form-group">
                                    <label>{{ trans('message.avatar') }}</label>
                                    <div class="custom-file">
                                        <input 
                                            type="file" 
                                            class="custom-file-input" 
                                            id="inputGroupFile02" 
                                            name="avatar">
                                        <label class="custom-file-label"
                                            for="inputGroupFile02">{{ trans('message.choose_file') }}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">{{ trans('message.submit')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('Admin::layouts.default')

@section('title','SKILL')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger alert-dismissable">
            @foreach($errors->all() as $error)
                <p>{!! $error !!}</p>
            @endforeach
        </div>
    @endif
    <div class="row">
        <div class="col">
            <div class="card">
                {!! Form::open(['route'=>'admin.skill.store', 'class' =>'form']) !!}
                <div class="card-header">
                    <strong>SKILL</strong>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="name">Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="power">Power</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="power">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" >Image:</label>
                        <div class="col-md-9">
                            <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                    <i class="fa fa-picture-o"></i> Chọn
                                </a>
                            </span>
                                <input id="thumbnail" class="form-control" type="hidden" name="img_url">
                            </div>
                            <img id="holder" style="margin-top:15px;max-height:100px;">
                        </div>
                    </div>
                    <!--/.row-->
                </div>
                <div class="card-footer">
                    <div class="col-md-9 offset-md-3">
                        <a href="{!! url()->previous() !!}" class="btn btn-danger text-white"><i class="fa fa-arrow-left"></i> Back</a>
                        <button class="btn btn-success" type="submit"><i class="fa fa-dot-circle-o"></i> Save</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="{{asset('public')}}/vendor/laravel-filemanager/js/lfm.js"></script>
    <script src="{{asset('public/assets/admin/js/script.js')}}"></script>
    <script>
        const url = "{{url('/')}}"
        init_tinymce(url);
        // BUTTON ALONE
        init_btnImage(url,'#lfm');

    </script>
@stop

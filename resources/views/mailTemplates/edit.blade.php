@extends('layouts.main')

@section('title'){{ $title }}@endsection

@section('content')

    <h1>Edit template</h1>
    <hr>
    
    <p><a href="{{ url()->previous() }}" class="btn btn-default">< Back</a></p>

    @include('includes.message-block')

    <div class="row">
        <div class="col-sm-offset-2 col-sm-10">
            <header><h3><span class="small">Template name:</span> {{ $template->name }}</h3></header>
            <br>
            <form action="{{ route('mail-template.edit', ['id' => $template->id]) }}" id="edit-template" method="POST">
                <div class="form-group">
                    <textarea class="form-control"
                              name="content"
                              id="content"
                              rows="5" placeholder="Content">{!! $template->content !!}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <input type="hidden" name="templateId" value="{{ $template->id }}" >
                <input type="hidden" name="_method" value="PUT" >
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>

@endsection

@section('footer-scripts')
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <script type="text/javascript">
      CKEDITOR.replace( 'content' );
    </script>
@endsection

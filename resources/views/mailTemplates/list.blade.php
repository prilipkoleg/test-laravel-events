@extends('layouts.main')

@section('title'){{ $title }}@endsection

@section('content')

    <h1>Mail templates</h1>
    <hr>

    @include('includes.message-block')

    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            @if( count($templates) )
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Content</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($templates as $template)
                        <tr>
                            <td>{{ $template->name }}</td>
                            <td>{{ Str::words(strip_tags($template->content), 5,'...') }} </td>
                            <td class="text-right">
                                <a class="btn btn-primary btn-sm"
                                   href="{{ route('mail-template.item', ['id' => $template->id]) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h4>Empty...</h4>
            @endif
        </div>
    </div>

@endsection

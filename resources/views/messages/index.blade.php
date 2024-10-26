@extends('layouts.app')

@section('content')

<h1>メッセージ一覧</h1>

    @if (count($messages) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>タイトル</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                <tr>
                    <td><a href="{{ route('messages.show', ['message' => $message->id]) }}">{{ $message->id }}</a></td>
                    <td>{{ $message->title }}</td>
                    <td>{{ $message->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {{-- ページネーションのリンク --}}
    <div class="mt-4">
        {{ $messages->links('pagination::bootstrap-5') }}
    </div>

    {{-- メッセージ作成ページへのリンク --}}
    <a href="{{ route('messages.create') }}" class="btn btn-primary">新規メッセージの投稿</a>

@endsection
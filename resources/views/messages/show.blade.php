@extends('layouts.app')

@section('content')

    <h1>{{ $message->title }} のメッセージ詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $message->id }}</td>
        </tr>
        <tr>
            <th>タイトル</th>
            <td>{{ $message->title }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $message->content }}</td>
        </tr>
    </table>

    <a href="{{ route('messages.edit', ['message' => $message->id]) }}" class="btn btn-light">このメッセージを編集</a>
    {{-- メッセージ削除フォーム --}}
<form action="{{ route('messages.destroy', ['message' => $message->id]) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">削除</button>
</form>


@endsection
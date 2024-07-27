@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
            <form action="{{ route('messages.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="content">タイトル:</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $message->title ?? '') }}">
                </div>

                <div class="form-group">
                    <label for="content">メッセージ:</label>
                    <input type="text" name="content" id="content" class="form-control" value="{{ old('content', $message->content ?? '') }}">
                </div>

                <button type="submit" class="btn btn-primary">投稿</button>
            </form>
        </div>
    </div>
@endsection

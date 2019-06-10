@extends('layouts.app')

@section('content')
  <div class="form-box">
    <div class="form-title">投稿する</div>
      <form action="{{ route('post.create') }}" method="POST" class="clearfix">
        {!! csrf_field() !!}

        <div class="form-content">
          <label for="comment" class="form-label">投稿内容</label><br>
          <textarea name="comment" class="form-area" id="comment" placeholder="今日はいい天気です。"></textarea>
        </div>


        <div class="btn-wrapper">
          <button type="submit" class="btn-submit">送信</button>
        </div>
      </form>
  </div>

  <footer>
    <small>©️KazukiOkayama</small>
  </footer>
@endsection
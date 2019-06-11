@extends('layouts.app')

@section('content')
  <section>
      <div class="contact-form">
        <h2 class="icon">お問い合わせ</h2>
        <form action="{{ route('contact.create') }}" method="POST" class="clearfix">
          {!! csrf_field() !!}
          <dl>
            <dt>お名前<span class="error-message">{{$errors->first('Name')}}</span></dt>
            <dd><input type="text" name="Name" class="name"></dd>
            <dt>お電話番号<span class="error-message">{{$errors->first('Phonenumber')}}</span></dt>
            <dd><input type="tel" name="Phonenumber" class="tel"></dd>
            <dt>メールアドレス<span class="error-message">{{$errors->first('Email')}}</span></dt>
            <dd><input type="email" name="Email" class="email"></dd>
            <dt>要望<span class="error-message">{{$errors->first('Requirement')}}</span></dt>
            <dd>
              <select name="Requirement" class="select">
                <option value="不具合報告">不具合報告</option>
                <option value="退会希望">退会希望</option>
                <option value="改善・要望">改善・要望</option>
              </select>
            </dd>
            <dt>ご希望の連絡方法<span class="error-message">{{$errors->first('WayToContact')}}</span></dt>
            <dd>
              <input type="radio" name="WayToContact" value="Eメール">Eメール
              <input type="radio" name="WayToContact" value="お電話">お電話
            </dd>
            <dt>ご希望の連絡時間帯<span class="error-message">{{$errors->first('TimeZone')}}</span></dt>
            <dd>
              <input id="9~12" type="checkbox" name="TimeZone[]" value="9~12">
              <label for="9~12">9:00 ~ 12:00</label>
              <input id="12~15" type="checkbox" name="TimeZone[]" value="12~15">
              <label for="12~15">12:00 ~ 15:00</label>
              <input id="15~18" type="checkbox" name="TimeZone[]" value="15~18">
              <label for="15~18">15:00 ~ 18:00</label>
            </dd>
            <dt>その他</dt>
            <dd>
              <textarea name="Other" class="message" placeholder="デザインがダサい。"></textarea>
            </dd>
          </dl>
          <button type="submit" class="btn contact-btn">送信</button>
        </form>
      </div>
  </section>

  <footer>
    <small>©️KazukiOkayama</small>
  </footer>
@endsection




<!-- <div class="form-content">
          <label for="Name">名前</label>
          <input type="text" name="Name" placheholder="山田太郎">

          <label for="Phonenumber">電話番号</label>
          <input type="text" name="Phonenumber" placheholder="0801111111">

          <label for="Email">メールアドレス</label>
          <input type="text" name="Email" placheholder="aaa@gmail.com">

          <label for="Requirement">要件</label>
          <select name="Requirement">
            <option value="" selected>選択してください</option>
            <option value="不具合" >不具合報告</option>
            <option value="削除" >投稿の削除依頼</option>
            <option value="改善" >改善・要望</option>
          </select>

          <label for="WayToContact">ご希望の連絡方法</label>
          <div>
            <input type="radio" id="huey" name="WayToContact" value="電話でのご連絡"
                  checked>
            <label for="huey">電話でのご連絡</label>
          </div>
          <div>
            <input type="radio" id="dewey" name="WayToContact" value="メールでのご連絡">
            <label for="dewey">メールでのご連絡</label>
          </div>
          <p>ご希望の時間帯</p>
          <label><input type="checkbox" name="TimeZone">9:00 ~ 12:00</label>
          <label><input type="checkbox" name="Timezone">12:00 ~ 15:00</label>
          <label><input type="checkbox" name="Timezone">15:00 ~ 18:00</label>
          <label for="Other" class="form-label">その他</label><br>
          <textarea name="Other" class="form-area" id="other" placeholder="特になし"></textarea>
        </div>
        <div class="btn-wrapper">
          <button type="submit" class="btn-submit">送信</button>
        </div> -->




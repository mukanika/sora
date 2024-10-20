@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__content">
    <div class="register-form__heading">
        <h2>商品登録</h2>
    </div>
    <form class="form">
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">商品名</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="text" name="name" value="{{ old('name') }}" />
          </div>
          <div class="form__error">
            @error('name')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">値段</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="price" name="price" value="{{ old('price') }}" />
            </div>
            <div class="form__error">
                @error('price')
                {{ $message }}
                @enderror
            </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">商品画像</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="image" name="image" value="{{ old('image') }}" />
            </div>
            <div class="form__errror">
                @error('image')
                {{ $message}}
                @enderror
            </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">季節</span>
            <label><input type="radio" value="spring" name="season">春</label>
            <label><input type="radio" value="summer" name="season">夏</label>
            <label><input type="radio" value="autumn" name="season">秋</label>
            <label><input type="radio" value="winter" name="season">冬</label>
        </div>
        <div class="form__errror">
            @error('season')
            {{ $message }}
            @enderror
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">商品説明</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--textarea">
                <textarea name="description" placeholder="商品の説明を入力"></textarea>
            </div>
            <div class="form__error">
                @error('description')
                {{ $message }}
                @enderror
            </div>
        </div>
      </div>
      <div class="form__button">
        <button class="form__button-submit" type="submit">戻る</button>
        <button class="form__button-submit" type="submit">登録</button>
      </div>
    </form>
</div>
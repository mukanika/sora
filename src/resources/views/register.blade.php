@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('contents')
<div class="register__content">
    <div class="register-form__heading">
        <h1>商品登録</h1>
        
    </div>
      <form action="/products/register" methot="post">
        @csrf
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">商品名</span>
          <span class="form__label--item">必須</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="text" name="product_name" value="{{ old('product_name') }}" />
          </div>
          <div class="form__error">
            @error('product_name')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">値段</span>
            <span class="form__label--item">必須</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="price" name="product_price" value="{{ old('product_price') }}" />
            </div>
            <div class="form__error">
                @error('product_price')
                {{ $message }}
                @enderror
            </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">商品画像</span>
            <span class="form__label--item">必須</span>
            <output id="list" class="image_output"></output>
            <input type="file" id="product_image" class="image" name="product_image">
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="image" name="product_image" value="{{ old('image') }}" />
            </div>
            <div class="form__errror">
                @error('product_image')
                {{ $message}}
                @enderror
            </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">季節</span>
            <span class="form__label--item">必須 </span>
            <span class="form__label--item">複数選択可</span>
            <label><input type="radio" value="spring" name="season">春</label>
            <label><input type="radio" value="summer" name="season">夏</label>
            <label><input type="radio" value="autumn" name="season">秋</label>
            <label><input type="radio" value="winter" name="season">冬</label>
        </div>
        <div class="form__errror">
            @error('product_season')
            {{ $message }}
            @enderror
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">商品説明</span>
            <span class="form__label--item">必須</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--textarea">
                <textarea name="product_description" placeholder="商品の説明を入力"></textarea>
            </div>
            <div class="form__error">
                @error('product_description')
                {{ $message }}
                @enderror
            </div>
        </div>
      </div>
      <div class="button-content">
        <a href="/products" class="back">戻る</a>
        
        <button  type="submit" class="button-register">登録</button>
      </div>
    
    </form>
</div>

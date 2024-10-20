<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mogitate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
  
  
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Mogitate
      </a>
    </div>
  </header>
  
  <main>
  
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>商品の一覧</h2>
      </div>
      <form class="form" action="/products/{:productld}" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
            <span class="form__label--item">商品名</span> 
              <input type="text" name="name" placeholder="キウイ" 
              class="validata[required]" data-prompt-position="topLeft">
            </div>
            <div class="form__error">
              @error('name')
              {{ $message }}
              @enderror
            </div>
        <div class="form__grop">
            <div class="form__grop-title">
            <span class="form__label--item">値段</span>
                <input type="text" name="price" placeholder="800"
                class="validata[required]" data-prompt-position="topLeft">
            </div>
            <div class="form__error">
                @error('price')
                {{ $message}}
                @enderror
            </div>
        </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">季節
            </span>
          </div>
          <div class="form__group-content">
              
              <p>
              <input type="radio" name="season" value="1" checked> 春
              <input type="radio" name="season" value="2"> 夏
              <input type="radio" name="season" value="3"> 秋
              <input type="radio" name="season" value="4"> 冬
              </p>
              
            </div>
            <div class="form__error">
              @error('season')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
    
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">商品説明</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" placeholder="商品の説明を入力"></textarea>
            </div>
            <div class="form__error">
              @error('detail')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">検索</button>
          
        </div>
      </form>
    </div>
  
  </main>
  
</body>

</html>
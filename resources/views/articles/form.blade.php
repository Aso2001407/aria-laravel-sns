@csrf
<div class="md-form">
  <label>タイトル</label>
   <input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title') }}">
</div>
<div class="form-group">
    <label for="exampleFormControlFile1">お好きな画像を選択して下さい</label>
    <input type="file" name="image" accept="image/png, image/jpeg" class="form-control-file">
  </div>
<div class="form-group">
  <label></label>
  <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ $article->body ?? old('body') }}</textarea>
</div>
<div class="form-group">
  <article-tags-input
  :initial-tags='@json($tagNames ?? [])'

    :autocomplete-items='@json($allTagNames ?? [])'
  >
  </article-tags-input>
</div>

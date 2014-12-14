<!doctype html>
<html class="no-js" lang="">
  <head>
    @include('head',['page_title'=>'新增提案'])
  </head>
  <body>
    @include('menu')

<section class="main new_issue">
  <fieldset>
    <form method="post" action="{{url('/issue/add')}}">
      <p><label for="text_field">議題主旨</label>
        <input type="text" id="title" name="title"></p>

      <p><label for="text_area">議題內容</label>
        <textarea id="text_area" name="content" rows=10></textarea></p>

      <p><label for="category">分類</label>
        <select name="category">
          @foreach($categorys as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
          @endforeach
      </select></p>

      <p><input class="button" type="submit" value="Submit"></p>
    </form>
  </fieldset>
</section>
<!-- Start of Foot -->


    @include('script')
</body>
</html>


<!doctype html>
<html class="no-js" lang="">
  <head>
    @include('head',['page_title'=>'會員註冊'])
  </head>
  <body>
  @include('menu')

<section class="main verify_email">
  <fieldset>
    <form action="{{url('/register')}}" method="post">

      <p><label for="text_field">驗證 Email</label>
        <input type="text" id="email_edu" name="email_edu">
      </p>

      <p><label for="department">系所</label>
        <input type="text" id="department" name="department">
      </p>

      <p><label for="type">身份</label>
        <select name="type">
          <option value="student">學生</option>
          <option value="offical">教職員</option>
        </select>
      </p>

      <p><input class="button" type="submit" value="Submit"></p>
    </form>
  </fieldset>
</section>
<!-- Start of Foot -->


    @include('script')
</body>
</html>


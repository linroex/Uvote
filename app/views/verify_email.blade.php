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
      <p><input type="checkbox" name="legal"> 我同意遵守 附中議言堂 HSNUVOTE 使用者條款</p>
      <p><input class="button" type="submit" value="Submit"></p>
    </form>
  </fieldset>
</section>
<!-- Start of Foot -->
    @include('script')
</body>
</html>


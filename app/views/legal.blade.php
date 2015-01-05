<!doctype html>
<html class="no-js" lang="">
  <head>
    @include('head',['page_title'=>'首頁'])
  </head>
  <body>
    @include('menu')

    <section class="banner index">
      <div class="background" style="background-image: url({{url('/images/issue-images/c1.jpg')}});"></div>
      <img src="{{url('/images/main-logo.svg')}}">
    </section>



    <section class="main index issue-list">

    <div class="issues">
      <h1>Uvote 使用者條款</h1>

      <ul>
      <li>2014.12.30第一次修訂版</li>
      </ul>

      <p>Uvote 校園公投網 ( 以下簡稱本平台 ) 用戶使用自己的 Facebook 建立帳號，我們需要您的協助來確保自己的權利。以下是您使用本平台的使用者條款：</p>

      <h2>註冊條款</h2>

      <ul>
      <li>本平台使用 Facebook 帳號進行註冊並使用學校信箱進行認證，禁止任何虛假個人資料，或者未經允許為其他人進行註冊。</li>
      <li>禁止建立一個以上的個人帳號。</li>
      <li>在沒有得到我們事先的書面許可下，您不會轉讓您的帳號給任何人。</li>
      </ul>

      <h2>本平台使用條款</h2>

      <ul>
      <li>本平台上所表達的觀點、建議和其他所有訊息僅代表這些訊息、內容、資料、和張貼的作者本人看法，非本平台的觀點。</li>
      <li>禁止攻擊、誹謗、侮辱他人或損害他人信用（檢附第三方公正單位證明）。</li>
      <li>禁止侵害他人智慧財產權或其他權利，如肖像權、著作權、商標權、智慧財產權等（檢附第三方公正單位證明）。</li>
      <li>禁止影響其他使用者權益之行為。</li>
      <li>禁止違反公共秩序、善良風俗或具違法之虞的行為。</li>
      <li>禁止在本平台張貼侵犯、違反他人權利，具有營利商業行為或違反法律的內容或任何行動。</li>
      <li>如果我們認為您在本平台張貼的任何內容或資料違反本使用條款，我們有權移除內容。</li>
      <li>如果違反以上使用條款，我們保有停用您的帳號的權利。並且您於遭停權之期間，無法使用本平台之任何功能。</li>
      <li>如果您的內容因為侵犯他人權利而被我們刪除，而您認為我們錯誤刪除，我們會給您上訴機會。</li>
      </ul>

      <h2>修訂補充</h2>

      <ul>
      <li>本條款如有增訂或修改，您同意自該修訂條款於本網站公告之時起受其拘束，本平台將不對使用者個別通知。如您於公告後繼續使用本服務，則視為您已經同意該修訂條款。</li>
      </ul>
    </div>


    </section>
    <!-- Start of Foot -->


    @include('script')
</body>
</html>


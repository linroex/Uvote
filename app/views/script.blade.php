<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '{{$_ENV["google_analytics"]}}', 'auto');
  ga('send', 'pageview');

</script>

<script src="{{url('/scripts/vendor.js')}}"></script>

<script src="{{url('/scripts/main.js')}}"></script>

@if(Session::get('msg') != '')
  <script>
    $(document).ready(function(){
      var msg = '{{Session::get('msg') }}';
      alert(msg);
    });
  </script>
@endif
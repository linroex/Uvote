<meta charset="utf-8">
<meta name="description" content="uVote 校園公投平台">
<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
<title>{{$page_title}} - Uvote 校園公投平台｜</title>
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<link rel="stylesheet" href="{{url('styles/main.css')}}">
<script src="{{url('scripts/vendor/modernizr.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="{{url('bower_components/marked/lib/marked.js')}}"></script>
<script>
    
    $(document).ready(function(){
        $('.issue-main-content').html(marked($('.issue-main-content').text().trim(),{breaks:true}));
        // $('.issue-main-content').html($('.issue-main-content').html().replace(/\n/g,"<br/>"));
    })
</script>
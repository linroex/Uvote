<meta charset="utf-8">
<meta name="description" content="uVote 校園公投平台">
<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
<title>{{$page_title}} - Uvote 校園公投平台</title>
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<link rel="stylesheet" href="{{url('styles/main.css')}}">
<meta property="og:image" content="{{url('/images/banner.jpg')}}">  
<script src="{{url('scripts/vendor/modernizr.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="{{url('bower_components/marked/lib/marked.js')}}"></script>

<style>
    .issue-main-content h1,h2,h3,h4,h5,h6{
        margin-top: 10px;
    }
    .issue-main-content ul li{
        list-style: disc;
    }
    .issue-main-content ol li{
        list-style: decimal;
    }
    
    .issue-main-content ul,.issue-main-content ol{
        padding-left: 1cm;
    }

</style>
    
<script>
    
    $(document).ready(function(){
        $('.issue-main-content').html(marked($('.issue-main-content').text().trim(),{breaks:true}));
        $('.issue-main-content a').attr('target','_blank');
        // $('.issue-main-content').html($('.issue-main-content').html().replace(/\n/g,"<br/>"));
    })
</script>
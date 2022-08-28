<x-layout.app>

    @section('og_meta')
    <meta property="og:site_name" content="{{env('APP_NAME')}}.">
    <meta property="og:title" content="{{env('APP_NAME')}} : Home">
    <meta property="og:description" content="{{env('APP_SUB_NAME')}}">
    <meta property="og:image" content="https://d2ue9uje1dz3gg.cloudfront.net/11/UTuwGjqJlkxaFcviaWgPoBmbvsmlVf-metaS2luZ09mVGhlSnVuZ2xlMjAwNS05MDB4Njc1LmpwZWc=-.jpg">
    <meta property="og:url" content="{{env('APP_URL')}}">
    <meta name="twitter:card" content="summary_large_image">
    <title>{{env('APP_NAME')}} : Home</title>
    @endsection


    @section('title', 'Home')


    <x-layout.pageheader  :cat="$cat" />

    <div class="container mx-auto pb-4">
        <div class="flex flex-col md:flex-row justify-left">
            <div class="mr-3">
                <x-layout.dash-left />
            </div>
            <x-dashboard.dash_main :products='$products' />

        </div>
    </div>
</x-layout.app>

<!-- This script disables the use of right click on the browser -->

<script type="text/javascript">
function click (e) {
  if (!e)
    e = window.event;
  if ((e.type && e.type == "contextmenu") || (e.button && e.button == 2) || (e.which && e.which == 3)) {
    if (window.opera)
      window.alert("");
    return false;
  }
}
if (document.layers)
  document.captureEvents(Event.MOUSEDOWN);
document.onmousedown = click;
document.oncontextmenu = click;
</script>

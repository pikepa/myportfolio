<x-layout.app>

    <header>

        <div class="flex justify-end w-4/5 mx-auto ">
            <a class="button bg-blue-500 hover:bg-blue-700 text-white mt-8 float-right" href="/product/{{$image->model_id}}">Go Back</a>
        </div>
    </header>
    
    <main class="flex flex-wrap  py-4">
        <div class="w-3/5 mx-auto px-2 py-2">
            <div class="card flex-grow  overflow-hidden">
                <img class="w-full rounded" src="{{$image->geturl('full')}}" alt="{{$image->name}}">
            </div>
        </div>

    </main>

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

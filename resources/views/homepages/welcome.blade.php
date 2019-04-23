@extends('layouts.app')

@section('content')
<div class="bg-frontpage h-screen">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row mb-4 pt-10 ">
            <div class="flex flex-col md:w-1/2 m-2 ">
                <div class="card  text-center text-3xl text-pink">
                    <h1>Fit Fast-n-Fab</h1>
                    <h3>Fitness made Easier</h3>
                </div>
                <div class="mx-auto pb-8 pt-8">
                    <ul class="list-reset text-3xl text-white">
                      <li class=" pb-4"><span><i class="fas fa-utensils"></i>&nbsp;&nbsp;Weekly Meal Plans</span></li>
                      <li class=" pb-4"><span><i class="fa fa-balance-scale"></i>&nbsp;&nbsp;Programmed Exercise</span></li>
                      <li class=" pb-4"><span><i class="fa fa-map"></i>&nbsp;&nbsp;Goal Setting</span></li>
                      <li class=" pb-4"><span><i class="fa fa-calendar"></i>&nbsp;&nbsp;Weekly Activity Tracking</span></li>
                      <li class=" pb-4"><span><i class="fa fa-heartbeat"></i>&nbsp;&nbsp;Body Composition Bioscans</span></li>
                      <li class=" pb-4"><span><i class="fas fa-tablet-alt"></i>&nbsp;&nbsp;Personalised Support</span></li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col md:w-1/2">
                <div class="mx-auto px-2 mt-2 ">
                    <img class="rounded-lg border-white border-4 " src="images/1KmTimeTrial.jpg" alt="1KM Time Trial">
                </div>
                <div class="m-8 mx-auto px-4text-center text-3xl text-pink">
                    <h3>Register Now</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


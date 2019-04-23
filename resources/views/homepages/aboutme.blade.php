@extends('layouts.app')

@section('title', 'About Me')

@section('content')

@include('layouts.partials.pageheader')

    <div class="container mx-auto pb-4">
        <div class="text-center text-pink">
            <h1 class="m-4 uppercase">Philippa Morris</h1>
            <h3 class="m-4 text-pink">Personal Trainer & fully accredited Athletics Coach with Athletics Australia.</h3>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="mx-auto px-4 ">
               <img class="rounded-lg border-white border-8" src="{{URL::asset('images/FFF-ProfilePic-222x300.jpg')}}" alt="Profile Pic">
            </div>

            <div class="flex flex-col flex-1 card items-center m-2 md:m-0">
                <div class="text-base">
                    <div class="text-justify">
                        <p class="pb-2">After graduating from Griffith University in Australia with a Bachelor of Internet Computing I later joined Gulf Air as a Cabin Attendant in Bahrain where I met my husband.&nbsp;&nbsp;Several years later, and after the birth of our two beautiful children, my weight had ballooned out of control and I felt unfit, unhappy and very uncomfortable.</p>
                        <p class="pb-2">With a lot of hard work, training and study, I transitioned from being an unfit, overweight new mum into the athlete that I am today.&nbsp;&nbsp;I know and understand what it takes to put in the effort and the hard work involved to get results and have done the research, undertaken the studies and become an expert in the field so that you don’t have to.</p>
                        <p class="pb-2">Obesity has overtaken smoking as the leading preventable cause of death in the Western World.&nbsp;&nbsp;Sedentary lifestyles and junk foods can take responsibility for much of this.&nbsp;&nbsp;My ambition is to inspire everyone to become fit, healthy and strong; to eat nutritious food and also help others to become role models in society and lead the way for younger generations, so that we can beat this epidemic.</p>
                        <p class="pb-2">I offer a variety of fitness and healthy eating solutions to cater for any preference or budget, so you can incorporate your fitness routine into your current lifestyle in a realistic way.&nbsp;&nbsp;And I will be by your side leading you step by step through your journey and supporting you on the way.</p>
                        <p class="pb-2">I am passionate about health and nutrition and committed to helping both men and women achieve their fitness and weight goals.&nbsp;&nbsp;I look forward to getting to know you and helping you achieve your dreams and goals!</p>
                        <br>
                        <h3 class="text-pink"><em>Pippa</em></h3>
                    </div>
                </div>
                <div class="max-w-6xl  flex text-pink px-4 pt-4">
                    <em>
                      <ul>
                        <li>Accredited Athletics Coach - Athletics Australia</li>
                        <li>Level 2 Intermediate Running Coach - Athletics Australia</li>
                        <li>Certificate IV in Fitness - Australian Fitness Network</li>
                        <li>Certificate III in Fitness - Australian Fitness Network</li>
                        <li>Bachelor of Internet Computing -  Griffith University</li>
                      </ul>
                    </em>
                </div>
            </div>
        </div>
    </div>
@endsection

<x-header>
    <x-subHeader title="features"/>
<div class="m-4">
    <div class="flex justify-center">
        <a href="{{route("register")}}" class="{{env("ACCENT_BG")}} w-96 p-3 rounded text-white font-bold flex justify-center">click here to sign up for a free trial”</a>
    </div>
    <ul class="flex justify-center flex-wrap">
        <div class="grid grid-cols-2">
            <li class="m-2 border-black border-2 p-2  flex flex-col bg-white rounded">
                grade distributions
            </li>
            <li class="m-2 border-black border-2 p-2  flex flex-col bg-white rounded">
                professor reviews
            </li>
            <li class="m-2 border-black border-2 p-2  flex flex-col bg-white rounded">
                average salaries
            </li>
            <li class="m-2 border-black border-2 p-2  flex flex-col bg-white rounded">
                student demographics
            </li>
            <li class="m-2 border-black border-2 p-2  flex flex-col bg-white rounded">
                average gpa
            </li>
            <li class="m-2 border-black border-2 p-2  flex flex-col bg-white rounded">
                course times
            </li>
        </div>
        
    </ul>
    
    <x-carosel/>

    <div class="flex justify-center ">
        <blockquote class="mb-2 bg-white border-black border-2 p-2 rounded w-96">
            <em>
                "The mix of qualitative and quantitative information on this site is incredible. 
                Last semester, I managed to take 18 credit hours while still having free time on weekends and evenings, thanks to this site helping me choose my classes. 
                Using this software can truly make or break your semester." Anonymous User
            </em>
        </blockquote>
    </div>
    
    <div class="flex justify-center">
        <h3 class="font-bold m-2">access is only $4 a month after trial ends</h3>
    </div>

</div>
</x-header>
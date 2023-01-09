<x-header>
    <h2 class="bg-yellow-500 text-center font-bold text-white text-xl">{{"Reviews For" . $professor->firstName . " " . $professor->lastName}}</h2>
    <div class=" grid grid-cols-3 bg-gray-100">
        <div class="col-start-2">
            @foreach ($professor->reviews as $item)
                <div class="bg-white m-2 p-3 shadow-md">
                    <h3 class="text-lg font-bold underline">{{$item->question}}</h3>
                    <p>{{$item->response}}</p>
                    <p class="bg-black text-white">{{$item->course->departmentCode . "-" . $item->course->courseNumber}}</p>
                </div>   
            @endforeach
        </div>
        
    </div>
</x-header>

<div class=" contrast-125 p-3 shadow-md shadow-sky-500 bg-white rounded-lg m-2 p-2 ">
    <h3 class=" text-2xl p-1 bg-zinc-300 px-2 font-bold underline ">{{$professor->firstName . " " . $professor->lastName . " - " . $professor->department}}</h3>
    <div class="flex rounded-md">
        @auth
            <form  class="" method="POST" action="{{ route('professors.destroy', $professor->id) }}">
                @csrf
                @method('delete')
                <button class="m-1  border-2 border-sky-500 hover:text-white hover:bg-sky-500 rounded px-1 ">delete</button>
            </form>     
            <a class="m-1  border-2 border-sky-500 hover:text-white hover:bg-sky-500 rounded px-1 " href="{{route('professors.edit',$professor->id)}}">edit</a>
        @endauth
        <a class="m-1  border-2 border-sky-500 hover:text-white hover:bg-sky-500 rounded px-1 " href="{{route('professors.show',$professor->id)}}">reviews</a>
    </div>
</div>   
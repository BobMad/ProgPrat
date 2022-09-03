<x-layout title="Pescadores">
    <div class="grid grid-cols-2 gap-3">

            @foreach($pescadores as $pescador)
            <ul>
            <figure class="md:flex bg-emerald-100 rounded-xl p-1 md:p-1 dark:bg-slate-800">
                <a href="#"><img class="w-20 h-20 md:w-40 md:h-auto md:rounded-xl rounded-full" src="{{$pescador->avatar}}" alt="" width="300" height="300"></a>
                <div class="pt-6 md:p-8 text-center md:text-left space-y-3">
                    <figcaption class="font-medium">
                        <strong>Nome: </strong>
                        <a class="text-sky-500 dark:text-sky-400">
                         {{ $pescador->nome }}
                        </a>
                    </figcaption>

                @foreach($enderecos as $endereco)
                    <div class="text-slate-700 dark:text-slate-500">
                    @if($pescador->id === $endereco->pescadors_id)
                        <li><strong>Endereço: </strong> {{ $endereco->endereco }}</li>
                   @endif
                    </div>
                @endforeach
                </div>
            </figure>
            </ul>
            @endforeach

    </div>

</x-layout>

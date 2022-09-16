@foreach ($discounts as $discount)
    <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src={{ $discount->image }} alt="">
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $discount->brand }}
                </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">couleur :{{ $discount->color }}</p>
            @if ($discount->discount > 0)
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-through">prix :{{ $discount->price }} $
                </p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">prix
                    :{{ $discount->price - $discount->price * ($discount->discount / 100) }} $</p>
            @else
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">prix :{{ $discount->price }} $</p>
            @endif

            <form action="/car/delete/{{ $discount->id }}" method="post">
                @csrf
                @method('DELETE')
                <input
                    class='inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'
                    type="submit" value="SUPPRIMER">
            </form>
        </div>
    </div>
@endforeach

@php
    $reviews = [
        [
            'img' => '/images/client/01.jpg',
            'name' => 'Christa Smith',
            'title' => 'Manager',
            'desc' =>
                'Hously made the processes so easy. Hously instantly increased the amount of interest and ultimately saved us over $10,000.',
        ],
        [
            'img' => '/images/client/02.jpg',
            'name' => 'Christa Smith',
            'title' => 'Manager',
            'desc' =>
                'I highly recommend Hously as the new way to sell your home "by owner". My home sold in 24 hours for the asking price. Best $400 you could spend to sell your home.',
        ],
        [
            'img' => '/images/client/03.jpg',
            'name' => 'Christa Smith',
            'title' => 'Manager',
            'desc' =>
                'My favorite part about selling my home myself was that we got to meet and get to know the people personally. This made it so much more enjoyable!',
        ],
        [
            'img' => '/images/client/04.jpg',
            'name' => 'Christa Smith',
            'title' => 'Manager',
            'desc' => 'Great experience all around! Easy to use and efficient.',
        ],
        [
            'img' => '/images/client/05.jpg',
            'name' => 'Christa Smith',
            'title' => 'Manager',
            'desc' => 'Hously made selling my home easy and stress free. They went above and beyond what is expected.',
        ],
        [
            'img' => '/images/client/06.jpg',
            'name' => 'Christa Smith',
            'title' => 'Manager',
            'desc' => 'Hously is fair priced, quick to respond, and easy to use. I highly recommend their services!',
        ],
    ];
@endphp

@foreach ($reviews as $item)
    <div class="tiny-slide">
        <div class="text-center mx-3">
            <p class="text-lg text-slate-400 italic"> " {{ $item['desc'] }} " </p>

            <div class="text-center mt-5">
                <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                </ul>

                <img src="{{ asset('Hously_Landing/assets' . $item['img']) }}"
                    class="size-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                <h6 class="mt-2 fw-semibold">{{ $item['name'] }}</h6>
                <span class="text-slate-400 text-sm">{{ $item['title'] }}</span>
            </div>
        </div>
    </div>
@endforeach

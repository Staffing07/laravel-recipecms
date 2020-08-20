@extends('layouts.layout')

@section('content')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <div class="content">
        <!-- TODO Confirmation recipe added message appears as bootstrap style alert banner at top of screen -->
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="/recipes/create">Add a new recipe</a>
        <a href="/measurements/create">Add a new measurement</a>
        <!-- Banner -->
        <section id="banner">
            <div class="content">
                <header>
                    <h1>{{ $recipe->name }}</h1>
                    <p>{{ $recipe->created_at->format('d F Y') }}</p>
                    <!--<p>Last cooked</p>-->
                </header>
                <p>{{ $recipe->description }}</p>
                <!-- TODO These will be like pills to quickly show the recipe tags -->
                <div class="pills">
                    <button
                        class="bg-red-500 hover:bg-red-700 text-white text-xs uppercase font-bold py-1 px-2 rounded-full">{{ $recipe->course }}</button>
                    <button
                        class="bg-orange-500 hover:bg-orange-700 text-white text-xs uppercase font-bold py-1 px-2 rounded-full">{{ $recipe->cuisine }}</button>
                    <button
                        class="bg-yellow-500 hover:bg-yellow-700 text-white text-xs uppercase font-bold py-1 px-2 rounded-full">Prep
                        {{ $recipe->preptime }} mins</button>
                    <button
                        class="bg-green-500 hover:bg-green-700 text-white text-xs uppercase font-bold py-1 px-2 rounded-full">Cooking
                        {{ $recipe->cookingtime }} mins</button>
                </div>

                <!--<p>Rating</p>-->

                <a href="{{ route('recipes.show', $recipe->id) }}"
                    class="my-8 bg-blue-500 hover:bg-blue-700 text-white uppercase font-bold py-2 px-4 rounded">
                    View recipe
                </a>




            </div>
            <span class="image object">
                <img src="/img/burger.jpg" alt="Picture of pizza" id="main-img">
            </span>
        </section>

        <!-- Section -->
        <section>
            <header class="major">
                <h2>Erat lacinia</h2>
            </header>
            <div class="features">
                <article>
                    <span class="icon fa-gem"></span>
                    <div class="content">
                        <h3>Portitor ullamcorper</h3>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis
                            ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    </div>
                </article>
                <article>
                    <span class="icon solid fa-paper-plane"></span>
                    <div class="content">
                        <h3>Sapien veroeros</h3>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis
                            ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    </div>
                </article>
                <article>
                    <span class="icon solid fa-rocket"></span>
                    <div class="content">
                        <h3>Quam lorem ipsum</h3>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis
                            ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    </div>
                </article>
                <article>
                    <span class="icon solid fa-signal"></span>
                    <div class="content">
                        <h3>Sed magna finibus</h3>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis
                            ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    </div>
                </article>
            </div>
        </section>

        <!-- Section -->
        <section>
            <header class="major">
                <h2>Ipsum sed dolor</h2>
            </header>
            <div class="posts">
                <article>
                    <a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
                    <h3>Interdum aenean</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                        interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                    </ul>
                </article>
                <article>
                    <a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
                    <h3>Nulla amet dolore</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                        interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                    </ul>
                </article>
                <article>
                    <a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
                    <h3>Tempus ullamcorper</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                        interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                    </ul>
                </article>
                <article>
                    <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                    <h3>Sed etiam facilis</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                        interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                    </ul>
                </article>
                <article>
                    <a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
                    <h3>Feugiat lorem aenean</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                        interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                    </ul>
                </article>
                <article>
                    <a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
                    <h3>Amet varius aliquam</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                        interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                    </ul>
                </article>
            </div>
        </section>








    </div>
</div>
@endsection

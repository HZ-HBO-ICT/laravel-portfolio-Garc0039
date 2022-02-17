@extends('layout')

@section('title')
    Profile Page
@endsection

@section('content')
    <h1  class="underline">

        Hi there my name is David, feel free to look around if you want to get to know me :)

    </h1>

    <h2 id="profile-h2" class="underline">

        Personal information:

    </h2>

    <br>
    <br>
    <br>

    <article>

        <p>

            <img class="text-img" alt="Mugshot of David" id="profile-david-img" title="David Garcia (me)" src="/img/Picture.jpeg">

                Seems like you are interested about reading some of me then let us start with some information about me.
                My name is David as you can probably already tell and I am 19 years old by now instead of the 18 you maybe
                saw on my <span class="highlight">WHO AM I</span> assignment, how time flies. Either way my full name is <span class="highlight">David GARCIA VISEU HENRIQUES</span> and even tho it may sound
                spanish I sadly am not, sorry to disappoint you on that one. I went to school in Luxembourg and have my diploma on our
                General secondary education - technical division - engineering section, which basically means that I hopefully will make it through
                these studies. Further more I made the diploma in English, German and Luxembourgish and you may or may not believe it but we have our
                own language indeed. Jokes aside it is a pleasure to be able to be here and to start my studies here. If you are interested in some more
                infomation make sure to check out the follow up text(s).

                <br>
                <br>

        </p>

    </article>

    <br>

    <div1 class="div1">

        <p>

            Main subjects during my studies in Luxembourg:

            <ul>

                <li> Mathematics </li>

                <li> Physics </li>

                <li> Chemistry </li>

                <li> Technology </li>

            </ul>

    </p>

    </div1>

    <div2 class="div2">

        <p>

            Other subjects of importance during my studies in Luxembourg:

            <ul>

                <li>  Eletrical engineering </li>

                <li> Mechanics </li>

                <li> Computer science (Java) </li>

                <li> Global studies </li>

            </ul>

        </p>

    </div2>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <h3 class="underline">

        EXTRA-CURRICULAR ACTIVITIES (e.g. student job and leisure):

    </h3>

    <p>

        Do you work/are you planning to work alongside your studies? What do you do in your spare time? How do you think
        you can combine this with studying?

    </p>

    <article>

        <p>

            I do not plan on going to work during my studies but if for whatever reason money gets short I will not hesitate to get a job and to earn some money on the side.
            I spend a lot of time on youtube watching a variety of videos which reaches from comedy to informative videos. I also invest some time into costumizing hardware
            (more like keyboards). I have built one myself and am getting new things for it whenever a possability approaches. I also play videogames when I have time which
            is sadly not often the case but which is fine with me.
            is sadly not often the case but which is fine with me.
            <br>
            A good way to combine my hobbies/interests with my studies would be to maybe talk to people and see if they share the same interests as I do and therefor work
            more efficiently with and for them. I would also like to inspire people with it and maybe awake someone's interest with it. We could maybe work on a project
            and at the end we all would learn something out of it. I also think that combining my hobbies with the studies will maybe come in handy when it comes to understanding
            of linking between certain IT subjects.

        </p>

    </article>

    <article>

        <p>

            If you have further questions about me or if something is not clear yet and you need some more answeres, please consider on contacting
            me through any of these platforms:

            <ul>

                <li> <a href=""><span class="underline"> E-mail: Nexuss02@outlook.com </span> </a> </li>
                <li> <a href="https://www.facebook.com/profile.php?id=100006327525211" target="_blank" rel="noopener noreferrer"> Facebook: Garcia David </a> </li>
                <li> <a href="https://www.instagram.com/cxllmedxvid/" target="_blank" rel="noopener noreferrer"> Instagram: cxllmedxvid  </a> </li>
                <li> <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" rel="noopener noreferrer"> Onlyfans  </a> </li>

            </ul>

        </p>

    </article>

    <h2 class="underline">
        Recent Blog Posts:
    </h2>

    @for ($index = count($blogs) - 1; $index > count($blogs) - 4; $index--)
        <section>

            <article>

                <p>

                    {{$blogs[$index]->date}}

                </p>

                <h2 class="underline">

                    {{$blogs[$index]->title}}

                </h2>

                @if($blogs[$index]->sub_title != null)
                    <h3 id="blog-h3">

                        {{$blogs[$index]->sub_title}}

                    </h3>
                @endif

                <p>

                    <span class="underline"> {{$blogs[$index]->question}} </span>

                    <br>
                    <br>

                    {{$blogs[$index]->excerpt}}

                    <a href="/blog/{{$blogs[$index]->title_uri}}"> read more </a>

                </p>

            </article>

        </section>
    @endfor
@endsection

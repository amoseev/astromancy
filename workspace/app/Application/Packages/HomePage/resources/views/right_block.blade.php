<div class="row">
    <article>
        <div class="lines">
            <h3 style="margin-top:40px;" class="text-center">Подписаться на рассылку гороскопа!
            </h3>
            <form role="form"
                  action="{{ route('home') }}"
                  method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                  target="_blank" novalidate="novalidate" class="validate">
                <div class="form-group">
                    <input type="email" style="width:60%;" value="" name="EMAIL"
                           placeholder="enter your email" required="required">
                    <input
                            type="submit" style="width:38%;" value="Subscribe" name="subscribe"
                            class="btn-primary">
                </div>
            </form>
        </div>
    </article>
    {{--<article>--}}
        {{--<h4 class="text-center">Weekly World Horoscope</h4>--}}
        {{--<div class="sideCard">--}}
            {{--<h4 class="neon glow text-center">Weekly World Horoscope 1/4/2018</h4>--}}
            {{--<img--}}
                    {{--src=""--}}
                    {{--alt="eclipse in Leo and Full Moon in Cancer 2018"--}}
                    {{--title="full moon lunar eclipse January 2018" style="margin-left:auto;margin-right:auto;"--}}
                    {{--class="img-responsive">--}}
            {{--<p style="font-size:14px!important; padding-top:10px">This January 2018 is an extraordinary--}}
                {{--month because it begins with a Supermoon and ends with a Full Moon Lunar Eclipse!--}}
            {{--</p>--}}
            {{--<a--}}
                    {{--href="/blog/weekly-world-horoscope-1-4-2018">--}}
                {{--<p--}}
                        {{--class="text-center">Read More</p>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</article>--}}
    {{--<article>--}}
        {{--<h4 class="text-center">Card of the Day</h4>--}}
        {{--<div style="padding:10px;" class="sideCard daily">--}}
            {{--<h4 id="cotd" class="text-center neon glow">--}}
                {{--January 5, 2018--}}
            {{--</h4>--}}
            {{--<a--}}
                    {{--href="/tarot-card-meanings/major-arcana/strength"><img--}}
                        {{--src=""--}}
                        {{--alt="The Meaning of Strength Tarot"--}}
                        {{--title="Strength Major Arcana" style="margin-left: auto; margin-right: auto;"--}}
                        {{--class="img-responsive cotd"></a>--}}
            {{--<p style="font-size:14px!important; padding-top:10px">Strength Card #8 represents feminine--}}
                {{--power, tenderness, and fearless play.--}}
            {{--</p>--}}
            {{--<a--}}
                    {{--href="/tarot-card-meanings/major-arcana/strength">--}}
                {{--<p--}}
                        {{--class="text-center">Read More</p>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</article>--}}
</div>
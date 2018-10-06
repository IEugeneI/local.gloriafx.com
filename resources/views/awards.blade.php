<?php
$url = substr($_SERVER['REQUEST_URI'], 1);

use App\MenuModel;
use App\SecondMenu;
use App\ContentModel;
use App\workers;
use App\ContentBackgroundModel;

$allfon = App\ContentBackgroundModel::all();
$mainmenu = App\MenuModel::all();
$secondmenu = App\SecondMenu::all();
$content = App\ContentModel::all();
$workers = App\workers::all();

$uri = App\SecondMenu::where('http', $url)
        ->pluck('name')
        ->all();
foreach ($allfon as $fon) {
    if ($fon->id_image == 1) {
        $background = $fon->name;
    }
}
?>

@include('ContentViews/layouts/header')
@include('ContentViews/layouts/social')
@include('ContentViews/layouts/menu')
@include('ContentViews/layouts/mobilemenu')
<div class="d-none d-md-block">
    <?php
    echo "<div class='url '>";
    echo $url;
    echo "</div>";
    ?>
    <div class="awardscontent" '>
        <div class='awardsimage'>
            <img src="../public/image/awards/Awards.jpg" class="d-block w-100" alt="">
        </div>

        <div class='awardstext'>
            <br><p>GLORIA FX began operations in 2008 and ever since it has established itself on the international market as a skilled team capable to work with the best and create the best. The professionalism of our team and the quality of completed projects were repeatedly appreciated by the leading experts.</br></p>

            <br><p> Awards received by our company</br></p>
            <p>— 2011 CG Event , 3rd place in the nomination «CG Event Reel»;</p>
            <p>— 2012 CG Event, 1st place in the nomination «Commercials & Motion Design»;</p>
            <p>— 2015 MTV VMAs – GloriaFX Best visual effects;</p>
            <p>— 2016 MTV VMAs – GloriaFX Best visual effects;</p>
            <p>— 2016 CICLOPE Festival – GloriaFX Cold visual effects.</p>
            <p>— 2016 London International Awards LIA – Grand LIA Music video VFX by GloriaFX</p>
            <p> — 2017 Berlin Music video awards – Best Visual effects;</p>
            <p>— 2017 Cannes Lions – Film Craft – Silver Lions – GloriaFX Best visual effect;</p>
            <p>— 2017 Cannes Lions – Entertainment Lion for Music – Silver Lions – GloriaFX;</p>

            <br><p>Awards and projects in which our company has been involved</br></p>
            <p> — 2011 BET (Black Entertainment Television) Awards «Video Of The Year» – Chris Brown feat. Lil Wayne & Busta Rhymes «Look at Me Now» (directed by Colin Tilley);</p>
            <p>— 2011 MTV VMAs, in the nomination «Best Collaboration» – Chris Brown feat. Lil Wayne & Busta Rhymes «Look at Me Now» (directed by Colin Tilley);</p>
            <p> — 2012 MTV VMAs, in the nomination «Best pop video» and «Best male video» – Justin Bieber «Boyfriend» (directed by Colin Tilley);</p>
            <p> — 2012 MTV VMAs, in the nomination «Best Male Video» and «Best Dance Video» – Chris Brown «Turn Up the Music» (directed by Chris Brown);</p>
            <p> — 2013 MTV VMAs, in the category «Artist to watch» – Austin Mahone «What about love» (directed by Colin Tilley);</p>
            <p>— 2013 – MVPA Music Video Production Association Awards, in the category «BEST HIP HOP VIDEO» – Lil Wayne «Love Me» ft. Drake, Future (directed by Hannah Lux Davis);</p>
            <p>— 2013 MTV VMAs, in the nomination «Best Choreography» – Chris Brown «Fine China» (directed by Sylvain White);</p>
            <p> — 2013 MTV VMAs, in the nomination «Best Video with a Social Message» – Kelly Clarkson «People Like Us» (directed by Chris Marrs Piliero);</p>
            <p> — 2013 MVPA Video Music Production Association Awards, in the category «BEST SPECIAL EFFECTS» Tyga ft Rick Ross «Dope» (directed by Colin Tilley);</p>
            <p>— 2013 UK Video Music Awards 2013 in the category «Best visual effects in a video» – Foals «Bad Habit» (directed by Nabil);</p>
            <p>— 2014 UK Video Music Awards, in the category «BEST POP» – Jason Derulo ft 2 Chainz «Talk Dirty» (directed by Colin Tilley);</p>
            <p>— 2014 UK Video Music Awards, in the category «MTV ARTIST TO WATCH» – 5 Seconds of Summer «She Looks So Perfect» (directed by Frank Borin);</p>
            <p> — 2014 UK Video Music Awards, in the category «BEST COLLABORATION» – Chris Brown ft Lil Wayne and Tyga «Loyal» (directed by Chris Brown);</p>
            <p> — 2014 UK Video Music Awards, in the category «BEST VIDEO WITH A SOCIAL MESSAGE» – Angel Haze ft Sia «Battle Cry » (directed by Frank Borin).</p>
            <p>  — 2014 MTV VMAs, in the nomination «MTV ARTIST TO WATCH» – Fifth Harmony «Miss Moving On» (directed by Hannah Lux Davis)</p>
            <p> — 2014 MTV VMAs, in the nomination «Best male video» – Ed Sheeran (featuring Pharrell Williams) «Sing» (directed by Emil Nava)</p>
            <p>  — 2015 MTV VMAs, in the category «BEST VISUAL EFFECTS» – Childish Gambino «Telegraph Ave» (directed by Hiro Murai).</p>
            <p> — 2015 MTV VMAs, in the category «BEST VISUAL EFFECTS» – FKA Twigs «Two Weeks» (directed by Nabil Elderkin).</p>
            <p> — 2015 MTV VMAs, in the category «BEST VISUAL EFFECTS» – Tyler, The Creator «F****** Young/Death Camp» (directed by Wolf Haley).</p>
            <p>  — 2015 MTV VMAs, in the category «BEST VISUAL EFFECTS» – Skrillex & Diplo with Justin Bieber «Where Are Ü Now» (directed by Brewer).</p>
            <p> — 2016 UK MVA — «BEST VISUAL EFFECTS» — Coldplay «Up&Up» (directed by V.Heymann & G.Muggia)</p>
            <p> — 2016 Grammy — «Best music video» Coldplay «Up&Up» (directed by V.Heymann & G.Muggia), VFX by GloriaFX</p>
            <p>— 2017 Best Documentary Award at the Ischia Film Festival — Documentary feature “Ulugh Beg. The Man Who Unlocked The Universe”</p>

        </div>
    </div>
</div>
<div class="d-md-none">
    <div class='mobileurl '>
        <?php
        echo $uri['0'];
        ?>
    </div>
    <div class="awardscontentmd" >

        <img src="../public/image/awards/Awards.jpg" class="d-block w-100" alt="">


        <br><p>GLORIA FX began operations in 2008 and ever since it has established itself on the international market as a skilled team capable to work with the best and create the best. The professionalism of our team and the quality of completed projects were repeatedly appreciated by the leading experts.</br></p>

        <br><p> Awards received by our company</br></p>
        <p>— 2011 CG Event , 3rd place in the nomination «CG Event Reel»;</p>
        <p>— 2012 CG Event, 1st place in the nomination «Commercials & Motion Design»;</p>
        <p>— 2015 MTV VMAs – GloriaFX Best visual effects;</p>
        <p>— 2016 MTV VMAs – GloriaFX Best visual effects;</p>
        <p>— 2016 CICLOPE Festival – GloriaFX Cold visual effects.</p>
        <p>— 2016 London International Awards LIA – Grand LIA Music video VFX by GloriaFX</p>
        <p> — 2017 Berlin Music video awards – Best Visual effects;</p>
        <p>— 2017 Cannes Lions – Film Craft – Silver Lions – GloriaFX Best visual effect;</p>
        <p>— 2017 Cannes Lions – Entertainment Lion for Music – Silver Lions – GloriaFX;</p>

        <br><p>Awards and projects in which our company has been involved</br></p>
        <p> — 2011 BET (Black Entertainment Television) Awards «Video Of The Year» – Chris Brown feat. Lil Wayne & Busta Rhymes «Look at Me Now» (directed by Colin Tilley);</p>
        <p>— 2011 MTV VMAs, in the nomination «Best Collaboration» – Chris Brown feat. Lil Wayne & Busta Rhymes «Look at Me Now» (directed by Colin Tilley);</p>
        <p> — 2012 MTV VMAs, in the nomination «Best pop video» and «Best male video» – Justin Bieber «Boyfriend» (directed by Colin Tilley);</p>
        <p> — 2012 MTV VMAs, in the nomination «Best Male Video» and «Best Dance Video» – Chris Brown «Turn Up the Music» (directed by Chris Brown);</p>
        <p> — 2013 MTV VMAs, in the category «Artist to watch» – Austin Mahone «What about love» (directed by Colin Tilley);</p>
        <p>— 2013 – MVPA Music Video Production Association Awards, in the category «BEST HIP HOP VIDEO» – Lil Wayne «Love Me» ft. Drake, Future (directed by Hannah Lux Davis);</p>
        <p>— 2013 MTV VMAs, in the nomination «Best Choreography» – Chris Brown «Fine China» (directed by Sylvain White);</p>
        <p> — 2013 MTV VMAs, in the nomination «Best Video with a Social Message» – Kelly Clarkson «People Like Us» (directed by Chris Marrs Piliero);</p>
        <p> — 2013 MVPA Video Music Production Association Awards, in the category «BEST SPECIAL EFFECTS» Tyga ft Rick Ross «Dope» (directed by Colin Tilley);</p>
        <p>— 2013 UK Video Music Awards 2013 in the category «Best visual effects in a video» – Foals «Bad Habit» (directed by Nabil);</p>
        <p>— 2014 UK Video Music Awards, in the category «BEST POP» – Jason Derulo ft 2 Chainz «Talk Dirty» (directed by Colin Tilley);</p>
        <p>— 2014 UK Video Music Awards, in the category «MTV ARTIST TO WATCH» – 5 Seconds of Summer «She Looks So Perfect» (directed by Frank Borin);</p>
        <p> — 2014 UK Video Music Awards, in the category «BEST COLLABORATION» – Chris Brown ft Lil Wayne and Tyga «Loyal» (directed by Chris Brown);</p>
        <p> — 2014 UK Video Music Awards, in the category «BEST VIDEO WITH A SOCIAL MESSAGE» – Angel Haze ft Sia «Battle Cry » (directed by Frank Borin).</p>
        <p>  — 2014 MTV VMAs, in the nomination «MTV ARTIST TO WATCH» – Fifth Harmony «Miss Moving On» (directed by Hannah Lux Davis)</p>
        <p> — 2014 MTV VMAs, in the nomination «Best male video» – Ed Sheeran (featuring Pharrell Williams) «Sing» (directed by Emil Nava)</p>
        <p>  — 2015 MTV VMAs, in the category «BEST VISUAL EFFECTS» – Childish Gambino «Telegraph Ave» (directed by Hiro Murai).</p>
        <p> — 2015 MTV VMAs, in the category «BEST VISUAL EFFECTS» – FKA Twigs «Two Weeks» (directed by Nabil Elderkin).</p>
        <p> — 2015 MTV VMAs, in the category «BEST VISUAL EFFECTS» – Tyler, The Creator «F****** Young/Death Camp» (directed by Wolf Haley).</p>
        <p>  — 2015 MTV VMAs, in the category «BEST VISUAL EFFECTS» – Skrillex & Diplo with Justin Bieber «Where Are Ü Now» (directed by Brewer).</p>
        <p> — 2016 UK MVA — «BEST VISUAL EFFECTS» — Coldplay «Up&Up» (directed by V.Heymann & G.Muggia)</p>
        <p> — 2016 Grammy — «Best music video» Coldplay «Up&Up» (directed by V.Heymann & G.Muggia), VFX by GloriaFX</p>
        <p>— 2017 Best Documentary Award at the Ischia Film Festival — Documentary feature “Ulugh Beg. The Man Who Unlocked The Universe”</p>


    </div>
</div>
@include('ContentViews/layouts/footer')


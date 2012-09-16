<form name="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
    <fieldset role="search">
        <input class="search" value="<?php echo get_search_query() ?>" results="0" name="s" id="s" placeholder="Search" />
    </fieldset>
    <fieldset class="mobile-nav"><select><option value="">Navigate…</option><option value="http://melandri.net/">» Home</option><option value="http://melandri.net/about">» About</option><option value="http://melandri.net/projects">» Projects</option><option value="http://melandri.net/archives">» Archives</option><option value="http://photo.melandri.net/">» Photography</option><option value="http://melandri.net/contact">» Contact</option><option value="http://melandri.net/atom.xml">» RSS</option></select></fieldset>
</form>
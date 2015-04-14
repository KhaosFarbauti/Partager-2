<?php
require dirname(__FILE__).'/_widget.php';
class tplpartager2
{
	# Widget function
	public static function partager2Widget($w){
		
		global $core;
		global $_ctx;

		if ($core->url->type != 'post') {
			return;
		}

		$base_url = $core->blog->url;
			
		$lien = $_ctx->posts->getURL();
		$titre_billet = urlencode($_ctx->posts->post_title);
			
		if ($core->blog->settings->url_scan == 'path_info') $base_url .= '?';

		$fichier_sprite = $w->fichier ? $w->fichier : 'sprite_partager2.png';
		$pixel_start = $w->start ? $w->start : 5;
		$pixel_step = $w->step ? $w->step : 21;
		$css_a = $w->css ? $w->css : "display : block;float : left;height : 16px;width : 16px;margin : 2px;padding : 0;";

		$res =
		'<div class="partager2">'.
		($w->title ? '<h2>'.html::escapeHTML($w->title).'</h2>' : '').
		'<div class="partager2_content">'.
		($w->additious ? '<a href="http://www.additious.com/?url='.$lien.'&amp;title='.$titre_billet.'" title="Additious"><img src="'.$base_url.'pf=partager2/img/additious_rouge.gif" alt="Additious" /></a> ' : '').
		($w->blinkbits ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.$pixel_start.'px;" href="http://www.blinkbits.com/bookmarklets/save.php?v=1&amp;source_url='.$lien.'&amp;title='.$titre_billet.'&amp;body='.$titre_billet.'" title="Blinkbits"></a> ' : '').
		($w->blinklist ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+1*$pixel_step).'px;" href="http://www.blinklist.com/index.php?Action=Blink/addblink.php&amp;Url='.$lien.'&amp;Title='.$titre_billet.'" title="Blinklist"></a> ' : '').
		($w->blogmarks ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+2*$pixel_step).'px;" href="http://blogmarks.net/my/new.php?mini=1&amp;simple=1&amp;url='.$lien.'&amp;title='.$titre_billet.'" title="Blogmarks"></a> ' : '').
		($w->blogmemes ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+34*$pixel_step).'px;" href="http://www.blogmemes.net/fr/post.php?url='.$lien.'&amp;title='.$titre_billet.'" title="BlogMemes"></a> ' : '').
		($w->blogonet ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+35*$pixel_step).'px;" href="tools.blogonet.fr/article.php?url='.$lien.'" title="Blogonet"></a> ' : '').
		($w->bluegger ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+3*$pixel_step).'px;" href="http://www.bluegger.com/submit.php?url='.$lien.'&amp;title='.$titre_billet.'" title="Bluegger"></a> ' : '').
		($w->co_mments ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+4*$pixel_step).'px;" href="http://co.mments.com/track?url='.$lien.'&amp;title='.$titre_billet.'" title="Co.mments"></a> ' : '').
		($w->connotea ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+5*$pixel_step).'px;" href="http://www.connotea.org/addpopup?continue=confirm&amp;uri='.$lien.'&amp;title='.$titre_billet.'" title="Connotea"></a> ' : '').
		($w->del_icio_us ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+6*$pixel_step).'px;" href="http://del.icio.us/post?url='.$lien.'&amp;title='.$titre_billet.'" title="Del.icio.us"></a> ' : '').
		($w->de_lirio_us ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+7*$pixel_step).'px;" href="http://de.lirio.us/rubric/post?uri='.$lien.'&amp;title='.$titre_billet.'&amp;when_done=go_back" title="De.lirio.us"></a> ' : '').
		($w->digg ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+8*$pixel_step).'px;" href="http://digg.com/submit?phase=2&amp;url='.$lien.'&amp;title='.$titre_billet.'" title="Digg"></a> ' : '').
		($w->facebook ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+31*$pixel_step).'px;" href="http://www.facebook.com/share.php?u='.$lien.'" title="Facebook"></a> ' : '').
		($w->fark ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+9*$pixel_step).'px;" href="http://cgi.fark.com/cgi/fark/edit.pl?new_url='.$lien.'&amp;new_comment='.$titre_billet.'&amp;linktype=Misc" title="Fark"></a> ' : '').
		($w->feedmelinks ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+10*$pixel_step).'px;" href="http://feedmelinks.com/categorize?from=toolbar&amp;op=submit&amp;url='.$lien.'&amp;name='.$titre_billet.'" title="Feedmelinks"></a> ' : '').
		($w->furl ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+11*$pixel_step).'px;" href="http://www.furl.net/storeIt.jsp?u='.$lien.'&amp;t='.$titre_billet.'" title="Furl"></a> ' : '').
		($w->fuzz ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+12*$pixel_step).'px;" href="http://www.fuzz.fr/?nws_article?link='.$lien.'&amp;title='.$titre_billet.'" title="Fuzz"></a> ' : '').
		($w->linkagogo ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+13*$pixel_step).'px;" href="http://www.linkagogo.com/go/AddNoPopup?url='.$lien.'&amp;title='.$titre_billet.'" title="Linkagogo"></a> ' : '').
		($w->ma_gnolia ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+14*$pixel_step).'px;" href="http://ma.gnolia.com/beta/bookmarklet/add?url='.$lien.'&amp;title='.$titre_billet.'.&amp;description='.$titre_billet.'" title="Ma.gnolia"></a> ' : '').
		($w->netvouz ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+15*$pixel_step).'px;" href="http://www.netvouz.com/action/submitBookmark?url='.$lien.'&amp;title='.$titre_billet.'&amp;description='.$titre_billet.'" title="Netvouz"></a> ' : '').
		($w->newsvine ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+16*$pixel_step).'px;" href="http://www.newsvine.com/_tools/seed&amp;save?u='.$lien.'&amp;h='.$titre_billet.'" title="Newsvine"></a> ' : '').
		($w->nuouz ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+17*$pixel_step).'px;" href="http://www.nuouz.com/blogvote.aspx?titre='.$titre_billet.'&amp;url='.$lien.'" title="Nuouz"></a> ' : '').
		($w->pioche ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+33*$pixel_step).'px;" href="http://www.pioche.fr/submit_news.php?newurl='.$lien.'&amp;title='.$titre_billet.'" title="Pioche"></a> ' : '').
		($w->rawsugar ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+18*$pixel_step).'px;" href="http://www.rawsugar.com/tagger/?turl='.$lien.'&amp;tttl='.$titre_billet.'" title="Rawsugar"></a> ' : '').
		($w->reddit ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+19*$pixel_step).'px;" href="http://reddit.com/submit?url='.$lien.'&amp;title='.$titre_billet.'" title="Reddit"></a> ' : '').
		($w->scoopeo ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+20*$pixel_step).'px;" href="http://www.scoopeo.com/scoop/new?newurl='.$lien.'&amp;title='.$titre_billet.'" title="Scoopeo"></a> ' : '').
		($w->scuttle ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+21*$pixel_step).'px;" href="http://www.scuttle.org/bookmarks.php/maxpower?action=add&amp;address='.$lien.'&amp;title='.$titre_billet.'&amp;description='.$titre_billet.'" title="Scuttle"></a> ' : '').
		($w->shadows ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+22*$pixel_step).'px;" href="http://www.shadows.com/features/tcr.htm?url='.$lien.'&amp;title='.$titre_billet.'" title="Shadows"></a> ' : '').
		($w->simpy ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+23*$pixel_step).'px;" href="http://www.simpy.com/simpy/LinkAdd.do?href='.$lien.'&amp;title='.$titre_billet.'" title="Simpy"></a> ' : '').
		($w->smarking ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+24*$pixel_step).'px;" href="http://smarking.com/editbookmark/?url='.$lien.'&amp;description='.$titre_billet.'" title="Smarking"></a> ' : '').
		($w->spurl ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+25*$pixel_step).'px;" href="http://www.spurl.net/spurl.php?url='.$lien.'&amp;title='.$titre_billet.'" title="Spurl"></a> ' : '').
		($w->stumbleupon ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+26*$pixel_step).'px;" href="http://www.stumbleupon.com/submit?url='.$lien.'&amp;title='.$titre_billet.'" title="Stumble Upon"></a> ' : '').
		($w->tailrank ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+27*$pixel_step).'px;" href="http://tailrank.com/share/?text=&amp;link_href='.$lien.'&amp;title='.$titre_billet.'" title="Tailrank"></a> ' : '').
		($w->twitter ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+32*$pixel_step).'px;" href="http://twitthis.com/twit?url='.$lien.'&amp;title='.$titre_billet.'" title="Twitter"></a> ' : '').
		($w->viadeo ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+36*$pixel_step).'px;" href="http://www.viadeo.com/shareit/share/?url='.$lien.'&amp;title='.$titre_billet.'&amp;overview='.$titre_billet.'" title="Viadeo"></a> ' : '').
		($w->wikio_fr ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+28*$pixel_step).'px;" href="http://www.wikio.fr/vote?url='.$lien.'" title="Wikio"></a> ' : '').
		($w->wikio_it ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+28*$pixel_step).'px;" href="http://www.wikio.it/vote?url='.$lien.'" title="Wikio"></a> ' : '').
		($w->wikio_de ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+28*$pixel_step).'px;" href="http://www.wikio.de/vote?url='.$lien.'" title="Wikio"></a> ' : '').
		($w->wikio_es ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+28*$pixel_step).'px;" href="http://www.wikio.es/vote?url='.$lien.'" title="Wikio"></a> ' : '').
		($w->wikio_us ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+28*$pixel_step).'px;" href="http://www.wikio.com/vote?url='.$lien.'" title="Wikio"></a> ' : '').
		($w->wikio_uk ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+28*$pixel_step).'px;" href="http://www.wikio.co.uk/vote?url='.$lien.'" title="Wikio"></a> ' : '').
		($w->wists ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+29*$pixel_step).'px;" href="http://wists.com/r.php?c=&amp;r='.$lien.'&amp;title='.$titre_billet.'" title="Wists"></a> ' : '').
		($w->yahoo ? '<a style="'.$css_a.'background: transparent url(/partager2/img/'.$fichier_sprite.') no-repeat 0 -'.($pixel_start+30*$pixel_step).'px;" href="http://myweb2.search.yahoo.com/myresults/bookmarklet?u='.$lien.'&amp;='.$titre_billet.'" title="Yahoo MyWeb"></a>' : '').
		'</div>'.
		'<br style="clear : left;" /><br /></div>';
		
		return $res;
	}
}
?>

<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>

<?php
global $user;

$obj = _chss_presmetaj_preporaka ($user->uid);
//print_r ($obj);

global $base_url;
$iurl = $base_url.'/'.drupal_get_path('theme','chss_theme_2').'/';
?>




<?php 
	print render($page['content']);
?>




	
<?php 

	if (current_path() == 'ss/homepage' || current_path() == 'ss/qb' || current_path() == 'ss/orginfo')
	{
		echo'
	
	<div id="headerSS">
		<div id="headerLogo"><a href="'.$base_url.'/ss/homepage"><img src="'.$iurl.'images/chss/logo-regalo-perfecto.png" alt=""/></a></div>
		<div id="headerLinkovi">
			<div id="headerHash">#REGALO<b>PERFECTO</b></div>
			<div id="headerA">';
			
			if ($user->uid) { echo'
			
				
				<a href=qb>ENCUENTRA TU LIBRO&nbsp;&nbsp;&nbsp;|</a>
				
				<a href=orginfo>&nbsp;&nbsp;&nbsp;ORGANIZA  TU  INTERCAMBIO&nbsp;&nbsp;&nbsp;|</a>
				
					'; }
					
					else { echo '
					<a href="#" onclick="popUp1()">ENCUENTRA TU LIBRO&nbsp;&nbsp;&nbsp;|</a>
				
				<a href="#" onclick="popUp1()">&nbsp;&nbsp;&nbsp;ORGANIZA  TU  INTERCAMBIO&nbsp;&nbsp;&nbsp;|</a>
				
					'; }
					
				
					if (!$user->uid) { echo'
				<a href="#" onclick="popUp2()">&nbsp;&nbsp;&nbsp;INGRESAR&nbsp;&nbsp;&nbsp;|</a>
				<a href="#" onclick="popUp1()">&nbsp;&nbsp;&nbsp;REGISTRAR</a>
				';
					 } 
					 
					 echo '
			</div>
		</div>
	
	
	</div>
	
	<div id="podHeader">
		
		<div id="podHeaderTeks">
			<div id="TeksBel">
			<div class="golemo">HAZ TU INTERCAMBIO</div>
			<p>Y DESCUBRE CUÁL ES EL</p>
			</div>
			<div id="TeksZut">
			<div class="golemo">REGALO PERFECTO</div>
			<p>PARA ESTA TEMPORADA</p>
			</div>
		</div>
		
		<div id="nubeBlanca">
		<div id="podHeaderBelo">
		</div>
		<div id="podHeaderPoklonchinja"> <img src="'.$iurl.'images/chss/regalos-logo-gandhi.png" alt=""/> </div>
		<div id="podHeaderLogo"> <img src="'.$iurl.'images/chss/logo-gandhi.png" alt=""/> </div>
		</div>
		
	</div>';

	}





	if (current_path () == 'ss/homepage') { echo'
	
	


<div id="popUp1All">
	<div id="popUp1Overlay"></div>
	
	<div id="popUp1Container">
		
		
		<div id="popUp1Logo"> 
			<img src="'.$iurl.'images/chss/logo-regalo-perfecto.png" alt=""/>
		</div>
		
		<div id="popUp1Esc" onclick="gotohome()">
			<img src="'.$iurl.'images/close-icon.jpg" alt=""/>
		</div>
		
		<div id="popUp1Teks">Regístrate para hacer tu intercambio a través de:</div>
		
		<div id="popUp1Loginz">
			<div id="popUp1fb">
				<div id="popUp1fbKopche">
					<a href="https://www.facebook.com/dialog/oauth?client_id=...">facebook connect</a>
					
					<!--<a class="facebook-action-connect" rel="nofollow" href="https://www.facebook.com/dialog/oauth?client_id=1499300647024509&amp;redirect_uri=http%3A//chelik.org%3A60080/ma/drupal/fboauth/connect%3Fdestination%3Dss%252Fhomepage&amp;scope=email%2Cpublish_actions"><img src="http://www.facebook.com/images/fbconnect/login-buttons/connect_light_medium_short.gif" alt=""></a>-->
					 
					
				</div>
				<div id="popUp1fbtxt">
					Regalo perfecto no publicará en su cuenta de Facebook sin su consentimento.
				</div>
			</div>
			 <!--<form id="formReg" action="/ma/drupal/user/register" method="post">-->
			
			<form id="popUp1Mail" action="'.$base_url.'/user/register" method="post">
			   	<input class="username form-text required" type="text" id="edit-name" name="name" value="NOMBRE"/>
				<input type="text" name="mail" value="EMAIL"/>
				<input type="text" value="CONTRASEÑA"/>
				<input type="hidden" name="form_id" value="user_register_form" />
				<input type="hidden" name="timezone" value="Europe/Skopje" />
				
				<div id="popUp1kopche" class="kopche" onclick="submitit()">REGISTRAR</div>
				
			</form>
			
			<!--</form>-->
			
		</div>
		
		<div id="popUp1member">¿Ya eres miembro? <a href="#" onclick="popUp2()"><b>Entrar</b></a></div>
		
	</div>
			
</div>



<div id="popUp2All">
	<div id="popUp2Overlay"></div>
	
	<div id="popUp2Container">
		
		
		<div id="popUp2Logo"> 
			<img src="'.$iurl.'images/chss/logo-regalo-perfecto.png" alt=""/>
		</div>
		
		<div id="popUp2Esc" onclick="gotohome()">
			<img src="'.$iurl.'images/close-icon.jpg" alt=""/>
		</div>
		
		<div id="popUp2Teks">Registrate para hacer tu intercambio a través de:</div>
		
		<div id="popUp2Loginz">
			<div id="popUp2fb">
				<div id="popUp2fbKopche">
					<a href="https://www.facebook.com/dialog/oauth?client_id=[client_id]">facebook connect</a>
					
				</div>
				<div id="popUp2fbtxt">
					Regalo perfecto no publicará en su cuenta de Facebook sin su consentimento.
				</div>
			</div>
			
			<form id="popUp2Mail" action="'.$base_url.'/user/login?destination=ss/homepage" method="post">
				<input type="text" value="EMAIL" id="edit-name" name="name" class="form-text required" />
				<input type="text" value="CONTRASEÑA" id="edit-pass" name="pass" class="form-text required" />
				
				<input type="hidden" name="op" value="Log in" />
				<input type="hidden" name="form_build_id" value="form-Yac0fSBnH-AcNNJ9R9z5edg0rcv9Z78CYGfdl4dV9ac" />
				<input type="hidden" name="form_id" value="user_login" />
				
				<div id="popUp2kopche" class="kopche" onclick="submitit2()">INGRESAR</div>
			</form>
			
		</div>
		
		<div id="popUp2member">¿Aún no eres miembro? <a href="#" onclick="popUp1()"><b>Regístrate aquí</b></a></div>
		
	</div>
			
</div>












	

<div id="homeContainer">

';

if (_chss_ima_li_odgovoreno () || !_chss_ima_li_odgovoreno() ) {
//samo na kopche
echo '
	<div id="homeGore">
		
		<div id="homeGoreLevo">
			<div id="homeGoreL1">
				Ya no busques más, aquí encontrarás el <b>REGALOPERFECTO:</b> un libro.
			</div>
			<div id="homeGoreL2">
				Responde el siguiente formulario y encuentra</br>
				el libro ideal para regalar</br>
				esta Navidad
			</div>
		</div>

		<div id="homeGoreDesno">
			<div id="homeGoreD1"><a href=qb>"Dime qué le gusta y te diremos <b> qué libro es</b>"</a></div>
			<form id="homeGoreD2" action="' . url ('ss/qb') . '" method="post">
				
				<select name="prashanje_1" class="dropdownMF">
					<option selected>A QUIÉN QUIERO REGALAR</option>
                			<option value="1">Niños</option>
                			<option value="2">A mí</option>
                			<option value="3">Familia</option>
                			<option value="4">Amigos</option>
                			<option value="5">Alguien especial</option>
                			<option value="6">Los del trabajo</option>
                		</select>



				<select name="prashanje_2" class="dropdownMF">
					<option selected>EDAD</option>';
					
					for ($i = 2; $i < 100; $i++) {
                        			echo '<option value="' . $i . '"> ' . $i . ' </option>';
                			}
					 
					 
				echo '</select>
				
				<!--<div class="triagolnik"></div>-->
				
				
				<select name="prashanje_3" class="dropdownMF">
					<option selected>GÉNERO</option>
                			<option value="1"> Masculino </option>
                			<option value="2"> Femenino </option>
                			<!--<option value="0"> Masculino & Femenino </option>-->
                		</select>
				
				
				<select name="prashanje_5" class="dropdownMF">
					<option selected>CUÁNTO QUIERES GASTAR</option>
                			<option value="1"> Menos de $200 </option>
                			<option value="2"> Más de $200 </option>
                		</select>
				
				 <select name="prashanje_4" class="dropdownMF">
				 	<option selected>CÓMO ES LA PERSONA</option>
                			<option value="1"> Romántico </option>
                			<option value="2"> Aventurero </option>
                			<option value="3"> Reflexivo </option>
                			<option value="4"> Emprendedor </option>
                			<option value="5"> Culto </option>
                			<option value="6"> Amante de la Adrenalina </option>
                			<option value="7"> Cinéfilo </option>
                			<option value="8"> Divertido </option>
                		</select>
				
				<input type="hidden" name="realno_odgovara" value="1" /> ';
				
			if (!_chss_ima_li_odgovoreno ())
				echo'<div class="kopche" id="homeGoreDKopche" onclick="submitit3()">ENVIAR</div>';
			
			
			else 
			echo'<div class="kopche" id="homeGoreDKopche" onclick="imashOdgovoreno()">ENVIAR</div>';
			
			echo'</form>
		</div>
	
	</div>
	';
	
	
	}

	echo '<div id="homePoklonchinja">
		<div id="homePoklonchinjaSlika"> 
			<img src="'.$iurl.'images/chss/tres-regalos.png" alt=""/>
		</div>
		
		<div id="homePoklonchinjaDr">
			<h1>ORGANIZA &nbsp;TU &nbsp;INTERCAMBIO</h1>
			<p>con nuestra App gratuita de amigo secreto.</p>
			<!--<div class="kopche" id="homePoklonchinjaKopche"><a href=mygroups>COMIENZA AQUÍ</a></div>-->
			<div class="kopche" id="homePoklonchinjaKopche"><a href=#>COMIENZA AQUÍ</a></div>
		</div>
	</div>



	<div id="dolnite">
	<div id="homeBlock1">

		<div id="homeBlock1Naslov">LIBRO DEL DÍA</div>
		<div id="homeBlock1Inline">
			<div id="homeBlock1Text">Cu quo facer noster docendi, ex quo quidam apeirian instructior. Verear dolores at mei, et qui sale molestiae, has te pertinax rationibus...</div>
			<div id="homeBlock1Slika"> <img src="'.$iurl.'images/chss/book-the-art-of-stillness.jpg" alt=""/> </div>
		</div>
		<div id="homeBlock1Kopche" class="kopche"> <a href=recommendations>DISPONIBLE AHORA</a> </div>

	</div>

	<div id="homeBlok2">

		<div id="homeBlok2inline">
			<div id="homeBlok2tekstovi">
				<div id="homeBlok2teks1">Al comprar dos libros en </div>
				<div id="homeBlok2teks2"> <img src="'.$iurl.'images/chss/logo-gandhi.png"  alt=""/> </div>
				<div id="homeBlok2teks3"> obtendrás un <b> lindo morral de regalo. </b> </div>
			</div>

			<div id="homeBlok2slika"> <img src="'.$iurl.'images/chss/bolsa.jpg" /> </div>
		</div>

		<div id="homeBlok2teksDole">Promoción válida en</div>
		<div id="homeBlok2teksDole"><select name="prashanje_1" class="dropdownMF">
					<option selected>SUCURSALES</option>
                			<option value="">Mauricio Achar</option>
                			<option value="">Bellas Artes</option>
                			<option value="">Guadalajara</option>
                			<option value="">Monterey</option>
                			<option value="">Puebla</option>
                			<option value="">Querétaro</option>
                			<option value="">Satélite</option>
                			<option value="">Polanco</option>
                			<option value="">Santa Fe</option>
                			<option value="">Coapa</option>
                		</select></div>
	</div>
	
	
	<div id="homeTwitter">
		<div id="homeTwitterHeader">TWITTER FEED</div>
		<div id="homeTwitterMid">';
		
		if (function_exists('twitter_pull_render')) { print twitter_pull_render('#football', 'Twitter feed', 10); }
		
		
		echo '</div>
		<div id="homeTwitterShare">
			<div id="homeTwitterShareBox">
				<div id="homeTwitterShareText">Síguenos en:</div>
				<div id="homeTwitterShareSliki">
					<img src="'.$iurl.'images/chss/share-fb-icon.png"/>
					<img src="'.$iurl.'images/chss/share-twitter-icon.png"/>
					<img src="'.$iurl.'images/chss/share-google-icon.png"/>
					<img src="'.$iurl.'images/chss/share-youtube-icon.png"/>
					<img src="'.$iurl.'images/chss/share-pinterest-icon.png"/>
					
				</div>
			</div>
		</div>
	</div>
	
	<div id="homeReklami"> <img src="'.$iurl.'images/chss/bookstore.png"/> </div>
	</div>
</div>
'; }

else if (current_path () == 'ss/grouporg') { 

$day='';
$month='';

for ($i = 1; $i < 32; $i ++)
                        $day .= '<option value="' . $i . '">' . $i . '</option>';
                        
for ($i = 1; $i < 13; $i ++)
                        $month .= '<option value="' . $i . '">' . $i . '</option>';


echo '


<div id="homeContainer">

	<form action="' . url ('ss/creategroup') . '" method="post" id="gCreate">
		<p>Crea tu grupo de intercambio:</p>
		<input type="text" name="groupname" id="gInput"/>
		<p>Fecha limite para hacer el sorteo:
		
		<select name="gift_day"> ' . $day . '</select>
		<select name="gift_month"> ' . $month . '</select>
		2014
		
		<p>Fecha del intercambio:
		<select name="closure_day"> ' . $day . '</select>
                <select name="closure_month"> ' . $month . '</select>
                2014
                
                <p><img src="" alt="slika"/>Agrega a los personas que participaran en este grupo:
                <div id="gLugje">
                	<input type="text" name="invitee_name_arr[]" />   <input type="text" name="email_arr[]" /><br/>
			<input type="text" name="invitee_name_arr[]" />   <input type="text" name="email_arr[]" /><br/>
			<input type="text" name="invitee_name_arr[]" />   <input type="text" name="email_arr[]" /><br/>

		</div>
                <input type="checkbox" name="termz" value="y">Aviso de privacidad<br>
                
                
                <input type="hidden" name="gift_year" value="2014"/>
                <input type="hidden" name="closure_year" value="2014"/>
                
                <input type="hidden" name="message" value="Just testing group stuff"/>
                
                <div class="kopche" id="gKopche" onclick="submitYo(\'gCreate\')">ENVIAR</div>
	</form>


</div>


'; }





else if (current_path () == 'ss/orginfo') { 

$id = $_GET ['group_id'];

echo '<div id="homeContainer"><div id="orgInfoMain">';


	if (!is_null($id))
	{
		if (chss_org_li_sum ($id)) 
		{
			echo 'Your group:';
			
			$arr = chss_my_orginfo (); //print_r ($arr);
			echo'<br/>';echo'<br/>';
			$j = 0;
			foreach ($arr as $a)
			{
				
				$i = 0;
				foreach ($a as $m)
				{
					if ($i == 0) {
						if ($id == $m) $j = 1;
					}
					//if ($i!=7)
					if ($j==1) {
					//echo $i . ' : ' . $m . '  ;   ';
					echo $m . ' ';
					}
					/*
					if ($i == 8)
					{	
						echo 'SEDUM!!!';
						
						foreach ($m as $n)
						{
							echo $n;
						}
					}
					*/
					$i++;
				}
				$j=0;
			echo'<br/>';echo'<br/>';
			}
			
			
		}
		else echo' not your group';

	}

else {
	echo'GROUP INFO:';
	$arr = chss_my_orginfo (); //print_r ($arr);
	foreach ($arr as $b)
	{
		$i=0;
		foreach ($b as $c)
		{
			if ($i==0) $ididid = $c;
			if ($i==1) { echo 'GROUP NAME: <a href=orginfo?group_id=' . $ididid . '> ' .$c; echo'</a><br/>'; }
			$i++;
		}
	
	
	}
	
	echo '</div></div>';
	}



/*
echo '<div id="groupaContainer" >
	<div id="grupaBelo">
		<div id="naslovIIme">
			<div id="naslov">BIENVENIDA</div>
			<div id="userName">Julia</div>
		</div>
		<div id="grupaVtorRed">
			<div id="vtorRedTekst">Haz creado el intercombio:</div>
			<div id="vtorRedEditar">Editar</div>
		</div>
		<div id="grupaTriSivi">
			<div class="ednoSivo">Navidad Marnie</div>
			<div class="ednoSivo">20 di decembrie</div>
			<div class="ednoSivo">Invitados 22</div>
			
		
		</div>
		
		<div id="grupaInvitado">Agregar invitado</div>
		
		<div id="grupaTabovi">
			<div class="grupaTab">Participantes</div>
			<div class="grupaTab">Invitados</div>
			<div class="grupaTab">e-mail</div>
		</div>
		
		<div id="grupaTabela">
			
			<div class="edenRed">
				<div class="red1"> <img src="" alt="lol"/> </div>
				<div class="red2"> Ime prezime </div>
				<div class="red3"> isf@yahoo.com </div>
				<div class="red4"> Editar </div>
			</div>
			
			<div class="dvaRed">
				<div class="red1"> <img src="" alt="lol"/> </div>
				<div class="red2"> Ime prezime </div>
				<div class="red3"> isf@yahoo.com </div>
				<div class="red4"> Editar </div>
			</div>
		
		</div>
		
		<div id="grupaKopchinja2">
			<div id="ednoKopche" class="kopche">GUARDAR</div>
			<div id="vtoroKopche" class="kopche">ENCUENTRA TU REGALO PERFECTO</div>
		</div>
		
	</div>
      </div>';
*/

}




//RECOMMENDATIONS!!!

else if (current_path () == 'ss/qb') { 

//RECOMMENDATIONS

echo '<div id="homeContainer1" >
	<div id="recommendationGore">
		<div id="recNaslov">ENCUENTRA TU LIBRO</div>
		<div id="recPodnaslov">Loremimsum</div>
		<div id="recPodpodnaslov">El arte la Quietud</div>
		<div id="recTekstche">Cu quo facer noster docendi, ex quo quidam apeirian instructior. Verear dolores at mei, et qui sale molestiae, has te pertinax rationibus... </div>
	
		<div id="recKnigite">';
			
			$preporaki = _chss_presmetaj_preporaka ($user->uid);
	
			foreach ($preporaki as $preporaka)
			{
				$i=0;
				foreach($preporaka as $p)
				{
					if($i==2) { echo'
					<div class="ednaKniga">
						<div class="knigaSlika"> <img src="" alt="slika"/> </div>
						<div class="knigaTekst">' . $p .' </div>
					</div>
			
			
					'; }
			
						
					$i++;
				}
			}
			
			/*
			<!--<div class="ednaKniga">
				<div class="knigaSlika"> <img src="" alt="slika"/> </div>
				<div class="knigaTekst"> tekssss</div>
			</div>-->
			*/
		echo '</div>
	
		<div id="knigiNekiTekst"> Puedes escoger hasta 4 libros </div>
		
		<div id="knigiKopche" class="kopche">ENVIAR "A TU AMIGO SECRETO"</div>
	
	';

	/*
	
	*/
	echo '
	
	</div>
	
	<div id="msgDole">
		<div id="msgNaslov"> AGREGA OTRAS OPCIONES DE REGALO </div>
		<div id="msgMsg"> <textarea name="messageName" value="ESCRIBE ETWAS">ESCRIBE TUS OPCIONES DE REGALO</textarea> </div>
	
		<div id="msgKopche" class="kopche">ENVIAR "A TU AMIGO SECRETO"</div>
	</div>
	
	
	
	
	
</div>';
	
	
	
}



else if (current_path () == 'ss/mygroups') { 




echo '<div id="homeContainer"><div id="orgInfoMain">';
	
$arr = chss_find_my_groups ();
print_r ($arr);
echo '</div></div>';
}


else if (current_path() == 'ss/groupjoin') {

echo '
<form action="' . url ('ss/groupjoin') . '" method="post">
<input type="hidden" name="shto" value="probuva" />
Enter your hash, etc. to join a group: <input type="text" name="grouphash" /><br/>
<input type="Submit" value="Join a group!" /></form><br/>
';

}



?>







<div id="footerSS">
	<div id="footerLinkz">
		<a href="#">Aviso de privacidad&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</a>
		<a href="#">Términos y condiciones;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</a>
		<a href="#">Contacto&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</a>
		&nbsp;&nbsp;&nbsp;Sitio patrocinado por: </a>
		
	</div>
	
	<div id="footerPic">
		<?php print '<img src="'.$iurl.'images/chss/logo-penguin-random-house.png"/>'; ?>
	</div>
	<?php //print render($page['content']); ?>
	
</div>
<?php //} 
?>

<script>
function gotohome() {
	
    document.getElementById("popUp1All").style.visibility = 'hidden';
    
    document.getElementById("popUp2All").style.visibility = 'hidden';
}

function popUp1() {
	
    	document.getElementById("popUp2All").style.visibility = 'hidden';
	document.getElementById("popUp1All").style.visibility = 'visible';
}

function popUp2() {
	
    	document.getElementById("popUp1All").style.visibility = 'hidden';
	document.getElementById("popUp2All").style.visibility = 'visible';
}

function submitit() {
	document.getElementById("popUp1Mail").submit();
}

function submitit2() {
	document.getElementById("popUp2Mail").submit();
}

function submitit3() {
	document.getElementById("homeGoreD2").submit();
}

function submitYo(a) {
	document.getElementById(a).submit();
}

function imashOdgovoreno() {
	alert("Already answered.");
}

window.onload = gotohome;

</script>
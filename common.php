<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'fi',

// Number formatting
'lang_decimal_point'				=>	',',
'lang_thousands_sep'				=>	' ',

// Notices
'Bad request'						=>	'Virheellinen pyynt&ouml;. Linkki, jota klikkasit, on virheellinen tai vanhentunut.',
'No view'							=>	'Sinulla ei ole tarvittavia oikeuksia!',
'No permission'						=>	'Sinulla ei ole tarvittavia oikeuksia!',
'Bad referrer'						=>	'Virheellinen HTTP_REFERER. Sinut ohjattiin t&auml;lle sivulle virheellisest&auml; l&auml;hteest&auml;. Jos ongelma ei katoa, varmist&auml; ett&auml; osoite on oikein laitettu hallinnasta Lis&auml;&auml; ohjeita saat FluxBB dokumentaatiosta.',
'No cookie'							=>	'Olet kirjautuneena, mutta cookieta ei ole asetettu. Varmista, ett&auml; cookiet on asetettu p&auml;&auml;lle!',
'Pun include error'					=>	'User includea %s ei voida prosessoida templatesta %s. Tiedostoa ei ole template-hakemistossa eik&auml; user include -hakemistossa.',

// Miscellaneous
'Announcement'						=>	'Ilmoitus',
'Options'							=>	'Asetukset',
'Submit'							=>	'L&auml;het&auml;', // "Name" of submit buttons
'Ban message'						=>	'Sinut on bannattu!',
'Ban message 2'						=>	'Bannisi vanhenee',
'Ban message 3'						=>	'Sinut bannannut j&auml;tti seuraavan viestin:',
'Ban message 4'						=>	'Mik&auml;li on jotain kysytt&auml;v&auml;&auml;, ota yhteytt&auml; yll&auml;pitoon',
'Never'								=>	'Ei ikin&auml;',
'Today'								=>	'T&auml;n&auml;&auml;n',
'Yesterday'							=>	'Eilen',
'Info'								=>	'Info', // A common table header
'Go back'							=>	'Takaisin',
'Maintenance'						=>	'Huolto',
'Redirecting'						=>	'Ohjataan',
'Click redirect'					=>	'Klikkaa t&auml;st&auml;, jos et halua odottaa en&auml;&auml; (tai selaimesi ei automaattisesti ohjaa sinua eteenp&auml;in).',
'on'								=>	'on', // As in "BBCode is on"
'off'								=>	'off',
'Invalid email'						=>	'Virheellinen s&auml;hk&ouml;postiosoite.',
'Required'							=>	'(Pakollinen)',
'required field'					=>	'on pakollinen kentt&auml;.', // For javascript form validation
'Last post'							=>	'Viimeisin',
'by'								=>	'', // As in last post by someuser
'New posts'							=>	'Uudet viestit', // The link that leads to the first new post
'New posts info'					=>	'Mene uusimpaan viestiin t&auml;ss&auml; aiheessa.', // The popup text for new posts links
'Username'							=>	'K&auml;ytt&auml;j&auml;tunnus',
'Password'							=>	'Salasana',
'Email'								=>	'S&auml;hk&ouml;posti',
'Send email'						=>	'L&auml;het&auml; s&auml;hk&ouml;postia',
'Moderated by'						=>	'Moderoi',
'Registered'						=>	'Rekister&ouml;itynyt',
'Subject'							=>	'Otsikko',
'Message'							=>	'Viesti',
'Topic'								=>	'Aihe',
'Forum'								=>	'Alue',
'Posts'								=>	'Viestit',
'Replies'							=>	'Vastaukset',
'Pages'								=>	'Sivut:',
'Page'								=>	'Sivu %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'img tag'							=>	'[img]:',
'Smilies'							=>	'Hymi&ouml;t:',
'and'								=>	'ja',
'Image link'						=>	'kuva', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'kirjoitti:', // For [quote]'s
'Mailer'							=>	'Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'T&auml;rke&auml;&auml; tietoa',
'Write message legend'				=>	'Kirjoita viestisi',
'Previous'							=>	'Edellinen',
'Next'								=>	'Seuraava',
'Forum index'						=>	'Keskustelualueen etusivu',
'Spacer'							=>	'...', // Ellipsis for paginate

// Title
'Title'								=>	'Titteli',
'Member'							=>	'J&auml;sen', // Default title
'Moderator'							=>	'Moderaattori',
'Administrator'						=>	'Yll&auml;pit&auml;j&auml;',
'Banned'							=>	'Bannattu',
'Guest'								=>	'Vieras',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] l&ouml;ytyi ilman t&auml;sm&auml;&auml;v&auml;&auml; [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] avattiin [%2$s] kanssa, t&auml;m&auml; ei ole sallittua',
'BBCode error invalid self-nesting'	=>	'[%s] avattiin itsens&auml; kanssa, t&auml;m&auml; ei ole sallittua',
'BBCode error no closing tag'		=>	'[%1$s] l&ouml;ytyi ilman t&auml;sm&auml;&auml;v&auml;&auml; [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] tagilla oli tyhj&auml; attribute-arvo',
'BBCode code problem'				=>	'[code]-tageissasi on ongelma',
'BBCode list size error'			=>	'Lista oli liian pitk&auml; parsittavaksi, ole hyv&auml; ja tee siit&auml; lyhyempi!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Etusivu',
'User list'							=>	'K&auml;ytt&auml;j&auml;t',
'Rules'								=>	'S&auml;&auml;nn&ouml;t',
'Search'							=>	'Haku',
'Register'							=>	'Rekister&ouml;idy',
'Login'								=>	'Kirjaudu',
'Not logged in'						=>	'Et ole kirjautuneena.',
'Profile'							=>	'Profiili',
'Logout'							=>	'Kirjaudu ulos',
'Logged in as'						=>	'Kirjautuneena',
'Admin'								=>	'Hallinta',
'Last visit'						=>	'Viimeisin vierailu: %s',
'Topic searches'					=>	'Aiheet:',
'New posts header'					=>	'Uusi',
'Active topics'						=>	'Aktiivinen',
'Unanswered topics'					=>	'Vastaamaton',
'Posted topics'						=>	'Vastaukset',
'Show new posts'					=>	'Hae uudet viestit viime k&auml;yntisi j&auml;lkeen.',
'Show active topics'				=>	'Hae aiheet joihin on vastattu viimeksi.',
'Show unanswered topics'			=>	'Hae aiheet ilman vastauksia.',
'Show posted topics'				=>	'Hae aiheet joihin olet vastannut.',
'Mark all as read'					=>	'Merkitse kaikki luetuksi',
'Mark forum read'					=>	'Merkitse alue luetuksi',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Keskustelupalstan alaosa',
'Jump to'							=>	'Siirry',
'Go'								=>	' Mene ', // Submit button in forum jump
'Moderate topic'					=>	'Moderoi',
'Move topic'						=>	'Siirr&auml;',
'Open topic'						=>	'Avaa',
'Close topic'						=>	'Sulje',
'Unstick topic'						=>	'Avaa kiinnitys',
'Stick topic'						=>	'Kiinnit&auml;',
'Moderate forum'					=>	'Moderoi foorumia',
'Powered by'						=>	'Powered by %s',

// Debug information
'Debug table'						=>	'Debug-informaatio',
'Querytime'							=>	'Luotu %1$s sekunnissa, %2$s kysely&auml; suoritettiin',
'Memory usage'						=>	'Muistin k&auml;ytt&ouml;: %1$s',
'Peak usage'						=>	'(Piikki: %1$s)',
'Query times'						=>	'Aika (s)',
'Query'								=>	'Kysely',
'Total query time'					=>	'Kyselyiden kokonaisaika: %s',

// Email related notifications
'New user notification'				=>	'H&auml;lytys - Uusi rekister&ouml;ityminen',
'New user message'					=>	'K&auml;ytt&auml;j&auml; \'%s\' rekister&ouml;ityi foorumille %s',
'Banned email notification'			=>	'H&auml;lytys - Bannattu s&auml;hk&ouml;posti tunnistettu',
'Banned email register message'		=>	'K&auml;ytt&auml;j&auml; \'%s\' rekister&ouml;ityi bannatulla s&auml;hk&ouml;postilla: %s',
'Banned email change message'		=>	'K&auml;ytt&auml;j&auml; \'%s\' vaihtoi bannattuun s&auml;hk&ouml;postiin: %s',
'Banned email post message'			=>	'K&auml;ytt&auml;j&auml; \'%s\' l&auml;hetti viestin bannatulla s&auml;hk&ouml;postilla: %s',
'Duplicate email notification'		=>	'H&auml;lytys - email-duplikaatti havaittu',
'Duplicate email register message'	=>	'K&auml;ytt&auml;j&auml; \'%s\' rekister&ouml;ityi s&auml;hk&ouml;postiosoitteella joka kuuluu jo k&auml;ytt&auml;j&auml;lle: %s',
'Duplicate email change message'	=>	'K&auml;ytt&auml;j&auml; \'%s\' vaihtoi s&auml;hk&ouml;postiosoitteeseen joka kuuluu jo k&auml;ytt&auml;j&auml;lle: %s',
'Report notification'				=>	'Raportti(%d) - \'%s\'',
'Report message 1'					=>	'K&auml;ytt&auml;j&auml; \'%s\' on raportoinut seuraavan viestin: %s',
'Report message 2'					=>	'Syy: %s',

'User profile'						=>	'K&auml;ytt&auml;j&auml;n profiili: %s',
'Post URL'							=>	'Viestin URL: %s',
'Email signature'					=>	'Forum Mailer'."\n".'(&Auml;l&auml; vastaa t&auml;h&auml;n viestiin)',

// For extern.php RSS feed
'RSS description'					=>	'Uusimmat aiheet alueella %s.',
'RSS description topic'				=>	'Uusimmat viestit ketjussa %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'Aktiivisten ketjujen RSS-sy&ouml;te',
'Atom active topics feed'			=>	'Aktiivisten ketjujen Atom-sy&ouml;te',
'RSS forum feed'					=>	'Foorumin RSS-sy&ouml;te',
'Atom forum feed'					=>	'Foorumin Atom-sy&ouml;te',
'RSS topic feed'					=>	'Ketjun RSS-sy&ouml;te',
'Atom topic feed'					=>	'Ketjun Atom-sy&ouml;te',

// Admin related stuff in the header
'New reports'						=>	'Uusia raportteja',
'Maintenance mode enabled'			=>	'Huoltotila k&auml;yt&ouml;ss&auml;!',

);

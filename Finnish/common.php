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
'Bad request'						=>	'Virheellinen pyynt&ouml;. Linkki jota klikkasit on virheellinen tai vanhentunut.',
'No view'							=>	'Sinulla ei ole tarvittavia oikeuksia!',
'No permission'						=>	'Sinulla ei ole tarvittavia oikeuksia!',
'Bad referrer'						=>	'Virheellinen HTTP_REFERER. Sinut ohjattiin t&auml;lle sivulle virheellisest&auml; l&auml;hteest&auml;. Jos ongelma ei katoa, varmistä ett&auml; osoite on oikein laitettu hallinnasta Lis&auml;&auml; ohjeita saat FluxBB dokumentaatiosta.',
'No cookie'							=>	'Olet kirjautuneena, mutta cookieta ei ole asetettu. Varmista, ett&auml; cookiet on asetettu p&auml;&auml;lle!',
'Pun include error'					=>	'Unable to process user include %s from template %s. There is no such file in neither the template directory nor in the user include directory.',

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
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Titteli',
'Member'							=>	'J&auml;sen', // Default title
'Moderator'							=>	'Moderaattori',
'Administrator'						=>	'Yll&auml;pit&auml;j&auml;',
'Banned'							=>	'Bannattu',
'Guest'								=>	'Vieras',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] was found without a matching [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] was opened within [%2$s], this is not allowed',
'BBCode error invalid self-nesting'	=>	'[%s] was opened within itself, this is not allowed',
'BBCode error no closing tag'		=>	'[%1$s] was found without a matching [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] tag had an empty attribute section',
'BBCode code problem'				=>	'There is a problem with your [code] tags',
'BBCode list size error'			=>	'Your list was too long to parse, please make it smaller!',

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
'Debug table'						=>	'Debug information',
'Querytime'							=>	'Generated in %1$s seconds, %2$s queries executed',
'Memory usage'						=>	'Memory usage: %1$s',
'Peak usage'						=>	'(Peak: %1$s)',
'Query times'						=>	'Time (s)',
'Query'								=>	'Query',
'Total query time'					=>	'Total query time: %s',

// Email related notifications
'New user notification'				=>	'Alert - New registration',
'New user message'					=>	'User \'%s\' registered in the forums at %s',
'Banned email notification'			=>	'Alert - Banned email detected',
'Banned email register message'		=>	'User \'%s\' registered with banned email address: %s',
'Banned email change message'		=>	'User \'%s\' changed to banned email address: %s',
'Banned email post message'			=>	'User \'%s\' posted with banned email address: %s',
'Duplicate email notification'		=>	'Alert - Duplicate email detected',
'Duplicate email register message'	=>	'User \'%s\' registered with an email address that also belongs to: %s',
'Duplicate email change message'	=>	'User \'%s\' changed to an email address that also belongs to: %s',
'Report notification'				=>	'Report(%d) - \'%s\'',
'Report message 1'					=>	'User \'%s\' has reported the following message: %s',
'Report message 2'					=>	'Reason: %s',

'User profile'						=>	'User profile: %s',
'Post URL'							=>	'Post URL: %s',
'Email signature'					=>	'Forum Mailer'."\n".'(Do not reply to this message)',

// For extern.php RSS feed
'RSS description'					=>	'The most recent topics at %s.',
'RSS description topic'				=>	'The most recent posts in %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS active topics feed',
'Atom active topics feed'			=>	'Atom active topics feed',
'RSS forum feed'					=>	'RSS forum feed',
'Atom forum feed'					=>	'Atom forum feed',
'RSS topic feed'					=>	'RSS topic feed',
'Atom topic feed'					=>	'Atom topic feed',

// Admin related stuff in the header
'New reports'						=>	'There are new reports',
'Maintenance mode enabled'			=>	'Maintenance mode is enabled!',

);

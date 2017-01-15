<?php

return [
	'friend_request' => "Žádost o přátelství",
	'friend_request:menu' => "Žádosti o přátelství",
	'friend_request:title' => "Žádosti o přátelství uživatele %s",

	'friend_request:new' => "Nová žádost o přátelství",
	
	'friend_request:friend:add:pending' => "Nevyřízené žádosti o přátelství",
	
	// plugins settings
	'friend_request:settings:add_river' => "Při přijmutí přátelství vytvářet záznamy v aktivitě stránek",
	
	// notifications
	'friend_request:newfriend:subject' => "%s chce být vaším přítelem!",
	'friend_request:newfriend:body' => "%s chce být vaším přítelem! Ale čeká se na vaše schválení... Tak se přihlaste abyste tuto žádost mohl/a schválit!


Pro zobrazení žádostí čekajících na vaše schválení navštivte:

%s

Před kliknutím na tento odkaze se ujistěte že jste přihlášeni, jinak budete přesměrováni na přihlašovací stránku.

Na tento e-mail prosím neodpovídejte.",
		
	// Actions
	// Add request
	'friend_request:add:failure' => "Díky chybě systému bohužel není možné dokončit vaši žádost. Zkuste to prosím znovu.",
	'friend_request:add:successful' => "Požádal/a jste o přátelství s uživatelem %s. Ten musí nejdříve vaši žádost schválit a poté se bude zobrazovat v seznamu vašich přátel.",
	'friend_request:add:exists' => "Uživateli %s jste již odeslal/a žádost o přátelství.",
	
	// Approve request
	'friend_request:approve' => "Přijnout",
	'friend_request:approve:subject' => "%s přijal/a vaši žádost o přátelství",
	'friend_request:approve:message' => "Zdravím %s,

%s přijal/a vaši žádost o přátelství.",
	'friend_request:approve:successful' => "%s je nyní váš přítel",
	'friend_request:approve:fail' => "Při vytváření vazby přátel s %s nastala chyba",

	// Decline request
	'friend_request:decline' => "Odmítnout",
	'friend_request:decline:subject' => "%s odmítl/a vaši žádost o přátelství",
	'friend_request:decline:message' => "Zdravím %s,

%s odmítl/a vaši žádost o přátelství.",
	'friend_request:decline:success' => "Žádost o přátelství vyla úspěšně odmítnuta",
	'friend_request:decline:fail' => "Při odmítání žádosti nastala chyba, zkuste to prosím znovu",
	
	// Revoke request
	'friend_request:revoke' => "Zrušit",
	'friend_request:revoke:success' => "Žádost o přátelství byla úspěšně zrušena",
	'friend_request:revoke:fail' => "Při rušení žádosti nastala chyba, zkuste to prosím znovu",

	// Views
	// Received
	'friend_request:received:title' => "Přijaté žádosti o přátelství",
	'friend_request:received:none' => "Žádné přijaté žádosti čekající na schválení",

	// Sent
	'friend_request:sent:title' => "Odeslané žádosti o přátelství",
	'friend_request:sent:none' => "Žádné nepotvrzené odeslané žádosti",
];

<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Vrednost bi morala biti nepravilna (false).',
    'This value should be true.' => 'Vrednost bi morala biti pravilna (true).',
    'This value should be of type {{ type }}.' => 'Vrednost mora biti naslednjega tipa {{ type }}.',
    'This value should be blank.' => 'Vrednost mora biti prazna.',
    'The value you selected is not a valid choice.' => 'Vrednost, ki ste jo izbrali, ni veljavna možnost.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Izbrati morate vsaj {{ limit }} možnost.|Izbrati morate vsaj {{ limit }} možnosti.|Izbrati morate vsaj {{ limit }} možnosti.|Izbrati morate vsaj {{ limit }} možnosti.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Izberete lahko največ {{ limit }} možnost.|Izberete lahko največ {{ limit }} možnosti.|Izberete lahko največ {{ limit }} možnosti.|Izberete lahko največ {{ limit }} možnosti.',
    'One or more of the given values is invalid.' => 'Ena ali več podanih vrednosti ni veljavnih.',
    'This field was not expected.' => 'To polje ni bilo pričakovati.',
    'This field is missing.' => 'To polje manjka.',
    'This value is not a valid date.' => 'Ta vrednost ni veljaven datum.',
    'This value is not a valid datetime.' => 'Ta vrednost ni veljaven datum in čas.',
    'This value is not a valid email address.' => 'Ta vrednost ni veljaven e-poštni naslov.',
    'The file could not be found.' => 'Datoteke ni mogoče najti.',
    'The file is not readable.' => 'Datoteke ni mogoče prebrati.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Datoteka je prevelika ({{ size }} {{ suffix }}). Največja dovoljena velikost je {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime tip datoteke je neveljaven ({{ type }}). Dovoljeni mime tipi so {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ta vrednost bi morala biti {{ limit }} ali manj.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ta vrednost je predolga. Morala bi imeti {{ limit }} znak ali manj.|Ta vrednost je predolga. Morala bi imeti {{ limit }} znaka ali manj.|Ta vrednost je predolga. Morala bi imeti {{ limit }} znake ali manj.|Ta vrednost je predolga. Morala bi imeti {{ limit }} znakov ali manj.',
    'This value should be {{ limit }} or more.' => 'Ta vrednost bi morala biti {{ limit }} ali več.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ta vrednost je prekratka. Morala bi imeti {{ limit }} znak ali več.|Ta vrednost je prekratka. Morala bi imeti {{ limit }} znaka ali več.|Ta vrednost je prekratka. Morala bi imeti {{ limit }} znake ali več.|Ta vrednost je prekratka. Morala bi imeti {{ limit }} znakov ali več.',
    'This value should not be blank.' => 'Ta vrednost ne bi smela biti prazna.',
    'This value should not be null.' => 'Ta vrednost ne bi smela biti nedefinirana (null).',
    'This value should be null.' => 'Ta vrednost bi morala biti nedefinirana (null).',
    'This value is not valid.' => 'Ta vrednost ni veljavna.',
    'This value is not a valid time.' => 'Ta vrednost ni veljaven čas.',
    'This value is not a valid URL.' => 'Ta vrednost ni veljaven URL.',
    'The two values should be equal.' => 'Ti dve vrednosti bi morali biti enaki.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Datoteka je prevelika. Največja dovoljena velikost je {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Datoteka je prevelika.',
    'The file could not be uploaded.' => 'Datoteke ni bilo mogoče naložiti.',
    'This value should be a valid number.' => 'Ta vrednost bi morala biti veljavna številka.',
    'This file is not a valid image.' => 'Ta datoteka ni veljavna slika.',
    'This is not a valid IP address.' => 'To ni veljaven IP naslov.',
    'This value is not a valid language.' => 'Ta vrednost ni veljaven jezik.',
    'This value is not a valid locale.' => 'Ta vrednost ni veljavna lokalnost.',
    'This value is not a valid country.' => 'Ta vrednost ni veljavna država.',
    'This value is already used.' => 'Ta vrednost je že uporabljena.',
    'The size of the image could not be detected.' => 'Velikosti slike ni bilo mogoče zaznati.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Širina slike je preširoka ({{ width }}px). Največja dovoljena širina je {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Širina slike je premajhna ({{ width }}px). Najmanjša predvidena širina je {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Višina slike je prevelika ({{ height }}px). Največja dovoljena višina je {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Višina slike je premajhna ({{ height }}px). Najmanjša predvidena višina je {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ta vrednost bi morala biti trenutno uporabnikovo geslo.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ta vrednost bi morala imeti točno {{ limit }} znak.|Ta vrednost bi morala imeti točno {{ limit }} znaka.|Ta vrednost bi morala imeti točno {{ limit }} znake.|Ta vrednost bi morala imeti točno {{ limit }} znakov.',
    'The file was only partially uploaded.' => 'Datoteka je bila le delno naložena.',
    'No file was uploaded.' => 'Nobena datoteka ni bila naložena.',
    'No temporary folder was configured in php.ini.' => 'Začasna mapa ni nastavljena v php.ini.',
    'Cannot write temporary file to disk.' => 'Začasne datoteke ni bilo mogoče zapisati na disk.',
    'A PHP extension caused the upload to fail.' => 'PHP razširitev je vzrok, da nalaganje ni uspelo.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ta zbirka bi morala vsebovati {{ limit }} element ali več.|Ta zbirka bi morala vsebovati {{ limit }} elementa ali več.|Ta zbirka bi morala vsebovati {{ limit }} elemente ali več.|Ta zbirka bi morala vsebovati {{ limit }} elementov ali več.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ta zbirka bi morala vsebovati {{ limit }} element ali manj.|Ta zbirka bi morala vsebovati {{ limit }} elementa ali manj.|Ta zbirka bi morala vsebovati {{ limit }} elemente ali manj.|Ta zbirka bi morala vsebovati {{ limit }} elementov ali manj.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ta zbirka bi morala vsebovati točno {{ limit }} element.|Ta zbirka bi morala vsebovati točno {{ limit }} elementa.|Ta zbirka bi morala vsebovati točno {{ limit }} elemente.|Ta zbirka bi morala vsebovati točno {{ limit }} elementov.',
    'Invalid card number.' => 'Neveljavna številka kartice.',
    'Unsupported card type or invalid card number.' => 'Nepodprti tip kartice ali neveljavna številka kartice.',
    'This is not a valid International Bank Account Number (IBAN).' => 'To ni veljavna mednarodna številka bančnega računa (IBAN).',
    'This value is not a valid ISBN-10.' => 'Neveljavna vrednost po ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Neveljavna vrednost po ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Neveljavna vrednost po ISBN-10 ali po ISBN-13.',
    'This value is not a valid ISSN.' => 'Neveljavna vrednost ISSN.',
    'This value is not a valid currency.' => 'Ta vrednost ni veljavna valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Ta vrednost bi morala biti enaka {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ta vrednost bi morala biti večja od {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ta vrednost bi morala biti večja ali enaka {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta vrednost bi morala biti identična {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ta vrednost bi morala biti manjša od {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ta vrednost bi morala biti manjša ali enaka {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ta vrednost ne bi smela biti enaka {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta vrednost ne bi smela biti identična {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Razmerje slike je preveliko ({{ ratio }}). Največje dovoljeno razmerje je {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Razmerje slike je premajhno ({{ ratio }}). Najmanjše pričakovano razmerje je {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Slika je kvadrat ({{ width }}x{{ height }}px). Kvadratne slike niso dovoljene.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Slika je ležeče usmerjena ({{ width }}x{{ height }}px). Ležeče usmerjene slike niso dovoljene.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Slika je pokončno usmerjena ({{ width }}x{{ height }}px). Pokončno usmerjene slike niso dovoljene.',
    'An empty file is not allowed.' => 'Prazna datoteka ni dovoljena.',
    'The host could not be resolved.' => 'Gostitelja ni bilo mogoče prepoznati.',
    'This value does not match the expected {{ charset }} charset.' => 'Ta vrednost se ne ujema s pričakovanim naborom znakov {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'To ni veljavna identifikacijska koda podjetja (BIC).',
    'This form should not contain extra fields.' => 'Ta obrazec ne sme vsebovati dodatnih polj.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Naložena datoteka je prevelika. Prosimo, poizkusite naložiti manjšo.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF vrednost je napačna. Prosimo, ponovno pošljite obrazec.',
    'fos_user.username.already_used' => 'Uporabniško ime že obstaja.',
    'fos_user.username.blank' => 'Prosimo, vnesite uporabniško ime.',
    'fos_user.username.short' => 'Uporabniško ime je prekratko.',
    'fos_user.username.long' => 'Uporabniško ime je predolgo.',
    'fos_user.email.already_used' => 'Email že obstaja.',
    'fos_user.email.blank' => 'Prosimo, vnesite email.',
    'fos_user.email.short' => 'Email je prekratek.',
    'fos_user.email.long' => 'Email je predolg.',
    'fos_user.email.invalid' => 'Email je napačen.',
    'fos_user.password.blank' => 'Prosimo, vnesite geslo.',
    'fos_user.password.short' => 'Geslo je prekratko.',
    'fos_user.password.mismatch' => 'Vpisani gesli se ne ujemata.',
    'fos_user.new_password.blank' => 'Prosimo, vnesite novo geslo.',
    'fos_user.new_password.short' => 'Novo geslo je prekratko.',
    'fos_user.current_password.invalid' => 'Geslo je napačno.',
    'fos_user.group.blank' => 'Prosimo, vnesite ime.',
    'fos_user.group.short' => 'Ime je prekratko.',
    'fos_user.group.long' => 'Ime je predolgo.',
    'fos_group.name.already_used' => 'Ime je že v uporabi.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Prišlo je do izjeme pri preverjanju avtentikacije.',
    'Authentication credentials could not be found.' => 'Poverilnic za avtentikacijo ni bilo mogoče najti.',
    'Authentication request could not be processed due to a system problem.' => 'Zahteve za avtentikacijo ni bilo mogoče izvesti zaradi sistemske težave.',
    'Invalid credentials.' => 'Neveljavne pravice.',
    'Cookie has already been used by someone else.' => 'Piškotek je uporabil že nekdo drug.',
    'Not privileged to request the resource.' => 'Nimate privilegijev za zahtevani vir.',
    'Invalid CSRF token.' => 'Neveljaven CSRF žeton.',
    'Digest nonce has expired.' => 'Začasni žeton je potekel.',
    'No authentication provider found to support the authentication token.' => 'Ponudnika avtentikacije za podporo prijavnega žetona ni bilo mogoče najti.',
    'No session available, it either timed out or cookies are not enabled.' => 'Seja ni na voljo, ali je potekla ali pa piškotki niso omogočeni.',
    'No token could be found.' => 'Žetona ni bilo mogoče najti.',
    'Username could not be found.' => 'Uporabniškega imena ni bilo mogoče najti.',
    'Account has expired.' => 'Račun je potekel.',
    'Credentials have expired.' => 'Poverilnice so potekle.',
    'Account is disabled.' => 'Račun je onemogočen.',
    'Account is locked.' => 'Račun je zaklenjen.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Shrani',
    'group.show.name' => 'Ime skupine',
    'group.new.submit' => 'Shrani',
    'group.flash.updated' => 'Skupina je bila uspešno shranjena.',
    'group.flash.created' => 'Skupina je bila uspešno ustvarjena.',
    'group.flash.deleted' => 'Skupina je bila uspešno izbrisana.',
    'security.login.username' => 'Uporabniško ime',
    'security.login.password' => 'Geslo',
    'security.login.remember_me' => 'Zapomni si me',
    'security.login.submit' => 'Prijava',
    'profile.show.username' => 'Uporabniško ime',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Shrani',
    'profile.flash.updated' => 'Profil je bil uspešno shranjen.',
    'change_password.submit' => 'Spremeni geslo',
    'change_password.flash.success' => 'Geslo je bilo uspešno spremenjeno.',
    'registration.check_email' => 'Na %email% smo vam poslali sporočilo s kodo za aktivacijo. Račun aktivirate s klikom na to povezavo.',
    'registration.confirmed' => 'Pozdravljeni %username%, vaš račun je sedaj aktiviran.',
    'registration.back' => 'Nazaj na prvotno stran.',
    'registration.submit' => 'Registracija',
    'registration.flash.user_created' => 'Uporabnik je bil uspešno ustvarjen.',
    'registration.email.subject' => 'Dobrodošli %username%!',
    'registration.email.message' => 'Pozdravljeni %username%!

Za aktivacijo računa prosimo, obiščite %confirmationUrl%

Lep pozdrav,
ekipa.
',
    'resetting.request.username' => 'Uporabniško ime',
    'resetting.request.submit' => 'Spremeni geslo',
    'resetting.reset.submit' => 'Spremeni geslo',
    'resetting.flash.success' => 'Geslo je bilo uspešno spremenjeno.',
    'resetting.email.subject' => 'Sprememba gesla',
    'resetting.email.message' => 'Pozdravljeni %username%!

Za spremembo gesla prosimo, obiščite %confirmationUrl%

Lep pozdrav,
ekipa.
',
    'layout.logout' => 'Odjava',
    'layout.login' => 'Prijava',
    'layout.register' => 'Registracija',
    'layout.logged_in_as' => 'Prijavljen kot %username%',
    'form.group_name' => 'Ime skupine',
    'form.username' => 'Uporabniško ime',
    'form.email' => 'Email',
    'form.current_password' => 'Trenutno geslo',
    'form.password' => 'Geslo',
    'form.password_confirmation' => 'Preverjanje gesla',
    'form.new_password' => 'Novo geslo',
    'form.new_password_confirmation' => 'Preverjanje gesla',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'fos_user.username.already_used' => 'El nombre de usuario ya está en uso.',
    'fos_user.username.blank' => 'Por favor, ingrese un nombre de usuario.',
    'fos_user.username.short' => 'El nombre de usuario es demasiado corto.',
    'fos_user.username.long' => 'El nombre de usuario es demasiado largo.',
    'fos_user.email.already_used' => 'La dirección de correo ya está en uso.',
    'fos_user.email.blank' => 'Por favor, ingrese una dirección de correo.',
    'fos_user.email.short' => 'La dirección de correo es demasiado corta.',
    'fos_user.email.long' => 'La dirección de correo es demasiado larga.',
    'fos_user.email.invalid' => 'La dirección de correo no es válida.',
    'fos_user.password.blank' => 'Por favor, ingrese una contraseña.',
    'fos_user.password.short' => 'La contraseña es demasiado corta.',
    'fos_user.password.mismatch' => 'Las dos contraseñas no coinciden.',
    'fos_user.new_password.blank' => 'Por favor, ingrese una nueva contraseña.',
    'fos_user.new_password.short' => 'La nueva contraseña es demasiado corta.',
    'fos_user.current_password.invalid' => 'La contraseña ingresada no es válida.',
    'fos_user.group.blank' => 'Por favor, ingrese un nombre.',
    'fos_user.group.short' => 'El nombre es demasiado corto.',
    'fos_user.group.long' => 'El nombre es demasiado largo.',
    'fos_group.name.already_used' => 'El nombre ya está en uso.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Actualizar grupo',
    'group.show.name' => 'Nombre de grupo',
    'group.new.submit' => 'Crear grupo',
    'group.flash.updated' => 'El grupo ha sido actualizado.',
    'group.flash.created' => 'El grupo ha sido creado.',
    'group.flash.deleted' => 'El grupo ha sido borrado.',
    'security.login.username' => 'Nombre de usuario',
    'security.login.password' => 'Contraseña',
    'security.login.remember_me' => 'Recordar',
    'security.login.submit' => 'Entrar',
    'profile.show.username' => 'Nombre de usuario',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizar usuario',
    'profile.flash.updated' => 'El perfil ha sido actualizado.',
    'change_password.submit' => 'Cambiar contraseña',
    'change_password.flash.success' => 'La contraseña se ha cambiado con éxito.',
    'registration.check_email' => 'Se ha enviado un email a %email%. Contiene un enlace de activación que debes presionar para activar tu cuenta.',
    'registration.confirmed' => 'Felicidades %username%, tu cuenta está ahora confirmada.',
    'registration.back' => 'Volver a la página original.',
    'registration.submit' => 'Registrar',
    'registration.flash.user_created' => 'El usuario se ha creado satisfactoriamente.',
    'registration.email.subject' => 'Bienvenido %username%!',
    'registration.email.message' => 'Hola %username%!

Para completar la validación de tu cuenta - por favor visita %confirmationUrl%

Este enlace sólo puede utilizarse una vez para validar tu cuenta.

Atentamente,
el Equipo.
',
    'resetting.check_email' => 'Un email ha sido enviado. Contiene un enlace de activación que debes presionar para restablecer tu contraseña.
 Nota: Solo se puede solicitar una nueva contraseña dentro %tokenLifetime% horas.

Si no recibe un correo electrónico, comprueba tu carpeta de correo no deseado o inténtelo de nuevo.
',
    'resetting.request.username' => 'Nombre de usuario o correo electrónico',
    'resetting.request.submit' => 'Restablecer contraseña',
    'resetting.reset.submit' => 'Cambiar contraseña',
    'resetting.flash.success' => 'La contraseña se ha cambiado con éxito.',
    'resetting.email.subject' => 'Restablecer Contraseña',
    'resetting.email.message' => 'Hola %username%!

Para restablecer tu contraseña - por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'layout.logout' => 'Salir',
    'layout.login' => 'Entrar',
    'layout.register' => 'Registrar',
    'layout.logged_in_as' => 'Identificado como %username%',
    'form.group_name' => 'Nombre de grupo',
    'form.username' => 'Nombre de usuario',
    'form.email' => 'Email',
    'form.current_password' => 'Contraseña actual',
    'form.password' => 'Contraseña',
    'form.password_confirmation' => 'Repita la contraseña',
    'form.new_password' => 'Nueva contraseña',
    'form.new_password_confirmation' => 'Repita la contraseña',
  ),
  'HWIOAuthBundle' => 
  array (
    'header.connecting' => 'Conectando',
    'header.success' => 'Cuenta \'%name%\' conectada con éxito!',
    'header.register' => 'Registrarse con la cuenta \'%name%\'',
    'header.registration_success' => 'Se ha registrado y conectado la cuenta \'%username%\' con éxito!',
    'connect.confirm.cancel' => 'Cancelar',
    'connect.confirm.submit' => 'Conectar cuenta',
    'connect.confirm.text' => '¿Está seguro de que desea conectar su cuenta de %service% \'%name%\' con su cuenta actual?',
    'connect.registration.cancel' => 'Cancelar',
    'connect.registration.submit' => 'Registrar cuenta',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);

return $catalogue;

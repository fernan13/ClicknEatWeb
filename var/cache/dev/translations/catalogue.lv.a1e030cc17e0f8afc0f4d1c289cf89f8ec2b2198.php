<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lv', array (
  'validators' => 
  array (
    'This value should be false.' => 'Šai vērtībai ir jābūt nepatiesai.',
    'This value should be true.' => 'Šai vērtībai ir jābūt patiesai.',
    'This value should be of type {{ type }}.' => 'Šīs vērtības tipam ir jābūt {{ type }}.',
    'This value should be blank.' => 'Šai vērtībai ir jābūt tukšai.',
    'The value you selected is not a valid choice.' => 'Vērtība, kuru jūs izvēlējāties nav derīga izvēle.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Jums nav jāveic izvēle.|Jums ir jāveic vismaz {{ limit }} izvēle.|Jums ir jāveic vismaz {{ limit }} izvēles.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Jums nav jāveic izvēle.|Jums ir jāveic ne vairāk kā {{ limit }} izvēle.|Jums ir jāveic ne vairāk kā {{ limit }} izvēles.',
    'One or more of the given values is invalid.' => 'Viena vai vairākas no dotajām vērtībām ir nederīgas.',
    'This field was not expected.' => 'Šis lauks netika gaidīts.',
    'This field is missing.' => 'Šis lauks ir pazudis.',
    'This value is not a valid date.' => 'Šī vērtība ir nederīgs datums.',
    'This value is not a valid datetime.' => 'Šī vērtība ir nederīgs datums un laiks',
    'This value is not a valid email address.' => 'Šī vērtība ir nederīga e-pasta adrese.',
    'The file could not be found.' => 'Fails nav atrasts.',
    'The file is not readable.' => 'Fails nav lasāms.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fails ir pārāk liels ({{ size }} {{ suffix }}). Atļautais maksimālais izmērs ir {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Faila mime tips nav derīgs ({{ type }}). Atļautie mime tipi ir {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Šai vērtībai ir jābūt ne vairāk kā {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Šīs vērtības garums ir 0 rakstzīmju.|Šī vērtība ir pārāk gara. Tai būtu jābūt ne vairāk kā {{ limit }} rakstzīmei.|Šī vērtība ir pārāk gara. Tai būtu jābūt ne vairāk kā {{ limit }} rakstzīmēm.',
    'This value should be {{ limit }} or more.' => 'Šai vērtībai ir jābūt ne mazāk kā {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Šīs vērtības garums ir 0 rakstzīmju.|Šī vērtība ir pārāk īsa. Tai būtu jābūt ne mazāk kā {{ limit }} rakstzīmei.|Šī vērtība ir pārāk īsa. Tai būtu jābūt ne mazāk kā {{ limit }} rakstzīmēm.',
    'This value should not be blank.' => 'Šai vērtībai nav jābūt tukšai.',
    'This value should not be null.' => 'Šai vērtībai nav jābūt null.',
    'This value should be null.' => 'Šai vērtībai ir jābūt null.',
    'This value is not valid.' => 'Šī vērtība ir nederīga.',
    'This value is not a valid time.' => 'Šī vērtība ir nederīgs laiks.',
    'This value is not a valid URL.' => 'Šī vērtība ir nederīgs URL.',
    'The two values should be equal.' => 'Abām vērtībām jābūt vienādam.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fails ir pārāk liels. Atļautais maksimālais izmērs ir {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fails ir pārāk liels.',
    'The file could not be uploaded.' => 'Failu nevarēja augšupielādēt.',
    'This value should be a valid number.' => 'Šai vērtībai ir jābūt derīgam skaitlim.',
    'This file is not a valid image.' => 'Šis fails nav derīgs attēls.',
    'This is not a valid IP address.' => 'Šī nav derīga IP adrese.',
    'This value is not a valid language.' => 'Šī vērtība nav derīga valoda.',
    'This value is not a valid locale.' => 'Šī vērtība nav derīga lokalizācija.',
    'This value is not a valid country.' => 'Šī vērtība nav derīga valsts.',
    'This value is already used.' => 'Šī vērtība jau tiek izmantota.',
    'The size of the image could not be detected.' => 'Nevar noteikt attēla izmēru.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Attēla platums ir pārāk liels ({{ width }}px). Atļautais maksimālais platums ir {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Attēla platums ir pārāk mazs ({{ width }}px). Minimālais sagaidāmais platums ir {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Attēla augstums ir pārāk liels ({{ height }}px). Atļautais maksimālais augstums ir {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Attēla augstums ir pārāk mazs ({{ height }}px). Minimālais sagaidāmais augstums ir {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Šai vērtībai ir jābūt lietotāja pašreizējai parolei.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Šīs vērtības garums ir 0 rakstzīmju.|Šai vērtībai ir jābūt tieši {{ limit }} rakstzīmei.|Šai vērtībai ir jābūt tieši {{ limit }} rakstzīmēm.',
    'The file was only partially uploaded.' => 'Fails bija tikai daļēji augšupielādēts.',
    'No file was uploaded.' => 'Fails netika augšupielādēts.',
    'No temporary folder was configured in php.ini.' => 'Pagaidu mape php.ini failā nav nokonfigurēta.',
    'Cannot write temporary file to disk.' => 'Nevar ierakstīt pagaidu failu uz diska.',
    'A PHP extension caused the upload to fail.' => 'PHP paplašinājums izraisīja augšupielādes neizdošanos.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Šis krājums satur 0 elementu.|Šim krājumam jāsatur vismaz {{ limit }} elementu.|Šim krājumam jāsatur vismaz {{ limit }} elementus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Šis krājums satur 0 elementu.|Šim krājumam jāsatur ne vairāk kā {{ limit }} elementu.|Šim krājumam jāsatur ne vairāk kā {{ limit }} elementus.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Šis krājums satur 0 elementu.|Šim krājumam jāsatur tieši {{ limit }} elementu.|Šim krājumam jāsatur tieši {{ limit }} elementus.',
    'Invalid card number.' => 'Nederīgs kartes numurs.',
    'Unsupported card type or invalid card number.' => 'Neatbalstīts kartes tips vai nederīgs kartes numurs.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Šis nav derīgs starptautisks banku konta numurs (IBAN).',
    'This value is not a valid ISBN-10.' => 'Šī vērtība nav derīgs ISBN-10 numurs.',
    'This value is not a valid ISBN-13.' => 'Šī vērtība nav derīgs ISBN-13 numurs',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Šī vērtība neatbilst ne derīgam ISBN-10 numuram, ne derīgm ISBN-13 numuram.',
    'This value is not a valid ISSN.' => 'Šī vērtība nav derīgs ISSN numurs',
    'This value is not a valid currency.' => 'Šī vērtība nav derīga valūta',
    'This value should be equal to {{ compared_value }}.' => 'Šai vērtībai ir jābūt vienādai ar {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Šai vērtībai ir jābūt lielākai par {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Šai vērtībai ir jābūt lielākai vai vienādai ar {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Šai vērtībai ir jābūt identiskai ar {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Šai vērtībai ir jābūt mazākai par {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'TŠai vērtībai ir jābūt mazākai vai vienādai ar {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Šai vērtībai ir jābūt vienādai ar {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Šai vērtībai nav jābūt identiskai ar {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Attēla attiecība ir pārāk liela ({{ ratio }}). Atļautā maksimālā attiecība ir {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Attēla attiecība ir pārāk maza ({{ ratio }}). Minimālā sagaidāmā attiecība ir {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Šis attēls ir kvadrāts ({{ width }}x{{ height }}px). Kvadrātveida attēli nav atļauti.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Attēls ir orientēts kā ainava ({{ width }}x{{ height }}px). Attēli, kas ir orientēti kā ainavas nav atļauti.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Attēls ir orientēts kā portrets ({{ width }}x{{ height }}px). Attēli, kas ir orientēti kā portreti nav atļauti.',
    'An empty file is not allowed.' => 'Tukšs fails nav atļauts.',
    'The host could not be resolved.' => 'Resursdatora nosaukumu nevar atrisināt.',
    'This value does not match the expected {{ charset }} charset.' => 'Šī vērtība neatbilst sagaidāmajai rakstzīmju kopai {{ charset }}.',
    'This form should not contain extra fields.' => 'Šajā veidlapā nevajadzētu būt papildus ievades laukiem.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Augšupielādētā faila izmērs bija par lielu. Lūdzu mēģiniet augšupielādēt mazāka izmēra failu.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Dotais CSRF talons nav derīgs. Lūdzu mēģiniet vēlreiz iesniegt veidlapu.',
    'fos_user.username.already_used' => 'Šis lietotājvārds jau ir aizņemts.',
    'fos_user.username.blank' => 'Lūdzu ievadiet lietotājvārdu.',
    'fos_user.username.short' => 'Lietotājvārds ir pārāk īss.',
    'fos_user.username.long' => 'Lietotājvārds ir pārāk garš.',
    'fos_user.email.already_used' => 'Šis e-pasts jau ir aizņemts.',
    'fos_user.email.blank' => 'Lūdzu ievadiet e-pastu.',
    'fos_user.email.short' => 'E-pasts ir pārāk īss.',
    'fos_user.email.long' => 'E-pasts ir pārāk garš.',
    'fos_user.email.invalid' => 'E-pasts nav derīgs.',
    'fos_user.password.blank' => 'Lūdzu ievadiet paroli.',
    'fos_user.password.short' => 'Parole ir pārāk īsa.',
    'fos_user.new_password.blank' => 'Lūdzu ievadiet jaunu paroli.',
    'fos_user.new_password.short' => 'Jaunā parole ir pārāk īsa.',
    'fos_user.current_password.invalid' => 'Ievadītā parole nav pareiza.',
    'fos_user.group.blank' => 'Lūdzu ievadiet nosaukumu.',
    'fos_user.group.short' => 'Nosaukums ir pārāk īss.',
    'fos_user.group.long' => 'Nosaukums ir pārāk garš.',
    'fos_group.name.already_used' => 'Šis nosaukums tiek jau izmantots.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Radās autentifikācijas kļūda.',
    'Authentication credentials could not be found.' => 'Autentifikācijas dati nav atrasti.',
    'Authentication request could not be processed due to a system problem.' => 'Autentifikācijas pieprasījums nevar tikt apstrādāts sistēmas problēmas dēļ.',
    'Invalid credentials.' => 'Nederīgi autentifikācijas dati.',
    'Cookie has already been used by someone else.' => 'Kāds cits jau izmantoja sīkdatni.',
    'Not privileged to request the resource.' => 'Nav tiesību ši resursa izsaukšanai.',
    'Invalid CSRF token.' => 'Nederīgs CSRF talons.',
    'Digest nonce has expired.' => 'Vienreiz lietojamās atslēgas darbības laiks ir beidzies.',
    'No authentication provider found to support the authentication token.' => 'Nav atrasts, autentifikācijas talonu atbalstošs, autentifikācijas sniedzējs.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija nav pieejama - vai nu tā beidzās, vai nu sīkdatnes nav iespējotas.',
    'No token could be found.' => 'Nevar atrast nevienu talonu.',
    'Username could not be found.' => 'Nevar atrast lietotājvārdu.',
    'Account has expired.' => 'Konta derīguma termiņš ir beidzies.',
    'Credentials have expired.' => 'Autentifikācijas datu derīguma termiņš ir beidzies.',
    'Account is disabled.' => 'Konts ir atspējots.',
    'Account is locked.' => 'Konts ir slēgts.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Saglabāt izmaiņas',
    'group.show.name' => 'Grupas nosaukums',
    'group.new.submit' => 'Izveidot grupu',
    'group.flash.updated' => 'Grupa tika atjaunināta.',
    'group.flash.created' => 'Grupa tika izveidota.',
    'group.flash.deleted' => 'Grupa tika dzēsta.',
    'security.login.username' => 'Lietotājvārds',
    'security.login.password' => 'Parole',
    'security.login.remember_me' => 'Atcerēties mani',
    'security.login.submit' => 'Ienākt',
    'profile.show.username' => 'Lietotājvārds',
    'profile.show.email' => 'E-pasts',
    'profile.edit.submit' => 'Saglabāt',
    'profile.flash.updated' => 'Profila izmaiņas tika saglabātas.',
    'change_password.submit' => 'Nomainīt paroli',
    'change_password.flash.success' => 'Parole tika nomainīta.',
    'registration.check_email' => 'Uz %email% tika nosūtīts e-pasts ar aktivizācijas saiti. Lūdzu sekojiet tai, lai aktivizētu savu kontu.',
    'registration.confirmed' => 'Apsveicam, %username%, tavs konts tika aktivizēts!',
    'registration.back' => 'Atpakaļ uz sākotnējo lapu.',
    'registration.submit' => 'Reģistrēties',
    'registration.flash.user_created' => 'Lietotājs tika izveidots.',
    'registration.email.subject' => 'Sveiki, %username%!',
    'registration.email.message' => 'Sveiks, %username%!

Lai pabeigtu aktivizēt savu kontu, lūdzu apmeklē %confirmationUrl%

Jauku dienu,
lapas kolektīvs.
',
    'resetting.request.username' => 'Lietotājvārds vai e-pasta adrese',
    'resetting.request.submit' => 'Atiestatīt paroli',
    'resetting.reset.submit' => 'Nomainīt paroli',
    'resetting.flash.success' => 'Parole tika atiestatīta.',
    'resetting.email.subject' => 'Paroles atiestatīšana',
    'resetting.email.message' => 'Sveiki, %username%!

Lai atiestatītu savu paroli, lūdzu apmeklē %confirmationUrl%

Jauku dienu,
lapas kolektīvs.
',
    'layout.logout' => 'Iziet',
    'layout.login' => 'Ienākt',
    'layout.register' => 'Reģistrēties',
    'layout.logged_in_as' => 'Autorizējies kā %username%',
    'form.group_name' => 'Grupas nosaukums',
    'form.username' => 'Lietotājvārds',
    'form.email' => 'E-pasts',
    'form.current_password' => 'Esošā parole',
    'form.password' => 'Parole',
    'form.password_confirmation' => 'Atkārtoti',
    'form.new_password' => 'Jaunā parole',
    'form.new_password_confirmation' => 'Atkārtoti',
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

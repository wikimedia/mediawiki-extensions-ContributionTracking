<?php
/**
 * Internationalisation for ContributionTracking extension
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author David Strauss
 */
$messages['en'] = array(
	'contributiontracking-desc' => 'Contribution tracking for the Wikimedia fundraiser',
	'contributiontracking' => 'Contribution tracking',

	'contrib-tracking-error' => 'Error',
	'contrib-tracking-error-text' => 'Invalid form submission',

	'contrib-tracking-submitting' => 'Submitting to payment processor...',
	'contrib-tracking-continue' => 'If you are not automatically redirected, click the button to complete your donation.',
	'contrib-tracking-redirect' => 'You will be automatically redirected to complete your donation.',

	'contrib-tracking-button' => 'Continue',

	'contrib-tracking-item-name-onetime' => 'One-time donation',
	'contrib-tracking-item-name-recurring' => 'Recurring monthly donation',

	'contrib-tracking-fundraiser-maintenance-header' => "Temporarily down for maintenance",
	'contrib-tracking-fundraiser-maintenance-notice' => "We are currently performing scheduled maintenance and are unable to accept donations.  Please try again soon.  If you have any questions, please email $1.",
);

/** Message documentation (Message documentation)
 * @author Bennylin
 * @author Darth Kule
 * @author Shirayuki
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'contributiontracking-desc' => '{{desc|name=Contribution Tracking|url=http://www.mediawiki.org/wiki/Extension:ContributionTracking}}',
	'contrib-tracking-error' => '{{Identical|Error}}',
	'contrib-tracking-button' => '{{Identical|Continue}}',
	'contrib-tracking-fundraiser-maintenance-header' => 'Header for maintenance notification page',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Message indicating that we are currently performing scheduled maintenance and are not currently able to process donations.

Parameters:
* $1 - an email address where questions about the maintenance downtime should be sent',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 * @author පසිඳු කාවින්ද
 */
$messages['af'] = array(
	'contributiontracking-desc' => 'Bydrae die dop vir die Wikimedia fondsinsameling',
	'contributiontracking' => 'Bydrae die dop',
	'contrib-tracking-error' => 'Fout',
	'contrib-tracking-error-text' => 'Ongeldige vorm voorlegging',
	'contrib-tracking-submitting' => 'Stuur na betaling verwerker ...',
	'contrib-tracking-continue' => 'As jy nie outomaties getrek het, kliek op die knoppie om u skenking te voltooi.',
	'contrib-tracking-redirect' => 'Jy sal outomaties herlei word om jou skenking te voltooi.',
	'contrib-tracking-button' => 'Gaan voort',
	'contrib-tracking-item-name-onetime' => 'Eenmalige donasie',
	'contrib-tracking-item-name-recurring' => 'Herhalende maandelikse skenking',
);

/** Aragonese (aragonés)
 * @author Juanpabl
 */
$messages['an'] = array(
	'contributiontracking-desc' => "Seguimiento de contrebucions d'a replegad de fondos de Wikimedia",
	'contributiontracking' => 'Seguimiento de contrebucions',
	'contrib-tracking-error' => 'Error',
	'contrib-tracking-error-text' => 'Error en o formulario',
	'contrib-tracking-submitting' => 'Ninviando ta o procesador de pagos...',
	'contrib-tracking-continue' => 'Si ye endrezato automaticament, faiga click en o botón ta rematar a suya donación en PayPal.', # Fuzzy
	'contrib-tracking-button' => 'Continar',
);

/** Arabic (العربية)
 * @author DRIHEM
 * @author Meno25
 * @author OsamaK
 * @author زكريا
 */
$messages['ar'] = array(
	'contributiontracking-desc' => 'تتبع المساهمة لجامع تبرعات ويكيميديا',
	'contributiontracking' => 'تتبع المساهمة',
	'contrib-tracking-error' => 'خطأ',
	'contrib-tracking-error-text' => 'نموذج تسليم غير صحيح',
	'contrib-tracking-submitting' => 'تسليم إلى معالج الدفع...',
	'contrib-tracking-continue' => 'إذا لم يتم توجيهها تلقائياً، انقر فوق الزر لإتمام تبرعك.',
	'contrib-tracking-redirect' => 'سوف يتم توجيهك تلقائياً لإتمام تبرعك.',
	'contrib-tracking-button' => 'استمرار',
	'contrib-tracking-item-name-onetime' => 'التبرع مرة واحدة',
	'contrib-tracking-item-name-recurring' => 'تبرع شهري متكرر',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'contrib-tracking-error' => 'ܦܘܕܐ',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Ghaly
 * @author Meno25
 * @author Ramsis II
 */
$messages['arz'] = array(
	'contributiontracking-desc' => 'تتبع المساهمة لجامع تبرعات ويكيميديا',
	'contributiontracking' => 'تتبع المساهة',
	'contrib-tracking-error' => 'غلط',
	'contrib-tracking-error-text' => 'استمارة التقديم مش صحيحة',
	'contrib-tracking-submitting' => 'تقديم لمعالج الدفع ...',
	'contrib-tracking-continue' => 'لو ما اتحولتش اوتوماتيكى، دوس على الزرار علشان تكمل التبرع بتاعك على الباى بال', # Fuzzy
	'contrib-tracking-button' => 'استمر',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'contributiontracking-desc' => 'Siguimientu de les collaboraciones cola recaudación de fondos de Wikimedia',
	'contributiontracking' => 'Siguimientu de les collaboraciones',
	'contrib-tracking-error' => 'Error',
	'contrib-tracking-error-text' => 'Unviu de formulariu inválidu',
	'contrib-tracking-submitting' => 'Unviando al procesador de pagos...',
	'contrib-tracking-continue' => 'Si nun te redirixe de mou automáticu, calca nel botón pa completar la to donación.',
	'contrib-tracking-redirect' => 'Te redirixirá de mou automáticu pa completar la to donación.',
	'contrib-tracking-button' => 'Siguir',
	'contrib-tracking-item-name-onetime' => 'Donación única',
	'contrib-tracking-item-name-recurring' => 'Donación mensual repetida',
	'contrib-tracking-fundraiser-maintenance-header' => 'Zarráu temporalmente por mantenimientu',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Nesti momentu tamos faciendo un mantenimientu programáu y nun somos a aceutar donativos. Por favor, vuelvi a intentalo ceo. Si tienes dalguna entruga, manda un corréu a $1.',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 * @author Vago
 */
$messages['az'] = array(
	'contrib-tracking-error' => 'Xəta',
	'contrib-tracking-button' => 'Davam et',
);

/** South Azerbaijani (تورکجه)
 * @author පසිඳු කාවින්ද
 */
$messages['azb'] = array(
	'contrib-tracking-error' => 'خطا',
	'contrib-tracking-button' => 'داوام ائت',
);

/** Bashkir (башҡортса)
 * @author Assele
 */
$messages['ba'] = array(
	'contributiontracking-desc' => 'Викимедиа файҙаһына иғәнә йыйыуҙы күҙәтеү',
	'contributiontracking' => 'Иғәнә йыйыуҙы күҙәтеү',
	'contrib-tracking-error' => 'Хата',
	'contrib-tracking-error-text' => 'Форманы ебәреү хатаһы',
	'contrib-tracking-submitting' => 'Түләүҙәрҙе эшкәртеү ҡоралына ебәреү...',
	'contrib-tracking-continue' => 'Әгәр һеҙ автоматик рәүештә йүнәлтелгән булмаһағыҙ, PayPal сайтында иғәнә биреүҙе тамамлау өсөн, төймәгә баҫығыҙ.', # Fuzzy
	'contrib-tracking-redirect' => 'Һеҙ иғәнә биреүҙе тамамлау өсөн автоматик рәүештә PayPal  сайтына йүнәлтеләсәкһегеҙ.', # Fuzzy
	'contrib-tracking-button' => 'Дауам итергә',
	'contrib-tracking-item-name-onetime' => 'Бер тапҡыр булған иғәнә',
	'contrib-tracking-item-name-recurring' => 'Ай һайын ҡабатланған иғәнә',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Red Winged Duck
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'contributiontracking-desc' => 'Сачэньне за зборам ахвяраваньняў на карысьць фундацыі «Вікімэдыя»',
	'contributiontracking' => 'Сачэньне за зборам ахвяраваньняў',
	'contrib-tracking-error' => 'Памылка',
	'contrib-tracking-error-text' => 'Няслушная перадача зьвестак з формы',
	'contrib-tracking-submitting' => 'Адпраўка апрацоўшчыку плацяжоў...',
	'contrib-tracking-continue' => 'Калі Вы не былі аўтаматычна перанакіраваны, націсьніце кнопку, каб завяршыць Вашае ахвяраваньне.',
	'contrib-tracking-redirect' => 'Вы будзеце аўтаматычна перанакіраваныя для сканчэньня Вашага ахвяраваньня.',
	'contrib-tracking-button' => 'Працягваць',
	'contrib-tracking-item-name-onetime' => 'Аднаразовае ахвяраваньне',
	'contrib-tracking-item-name-recurring' => 'Паўтараючаяся штомесячнае ахвяраваньне',
	'contrib-tracking-fundraiser-maintenance-header' => 'Часава выключана для тэхнічнага абслугоўваньня',
);

/** Bulgarian (български)
 * @author DCLXVI
 * @author Spiritia
 * @author Turin
 */
$messages['bg'] = array(
	'contributiontracking-desc' => 'Проследяване на даренията в дарителската акция на Уикимедия',
	'contributiontracking' => 'Проследяване на дарението',
	'contrib-tracking-error' => 'Грешка',
	'contrib-tracking-error-text' => 'Неправилно изпратена форма',
	'contrib-tracking-submitting' => 'Изпращане за обработка на плащането...',
	'contrib-tracking-continue' => 'Ако не бъдете пренасочени автоматично, натиснете бутона, за да завършите дарението през PayPal.', # Fuzzy
	'contrib-tracking-button' => 'Продължаване',
	'contrib-tracking-item-name-onetime' => 'Еднократно дарение',
	'contrib-tracking-item-name-recurring' => 'Ежемесечно дарение',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'contributiontracking' => 'অনুদান অনুসরণ',
	'contrib-tracking-error' => 'ত্রুটি',
	'contrib-tracking-error-text' => 'অগ্রহণযোগ্য ফর্ম জমা',
	'contrib-tracking-submitting' => 'পেমেন্ট প্রসেসরের কাছে প্রদান করা হচ্ছে...',
	'contrib-tracking-continue' => 'আপনাকে যদি স্বয়ংক্রিয়ভাবে পুনর্নির্দেশিত করা না হয়, তবে পেপ্যাল-এ আপনার অনুদান সম্পন্ন করতে নিচের বাটনে ক্লিক করুন।', # Fuzzy
	'contrib-tracking-redirect' => 'অনুদান সম্পূর্ণ করতে আপনাকে স্বয়ংক্রিয়ভাবে পেপ্যালে পুনর্নির্দেশ করা হবে।', # Fuzzy
	'contrib-tracking-button' => 'অগ্রসর হোন',
	'contrib-tracking-item-name-onetime' => 'একক-সময় অনুদান',
);

/** Breton (brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'contributiontracking-desc' => "Heuliañ an donezonoù evit dastumadeg arc'hant Wikimedia",
	'contributiontracking' => 'Heuliañ an donezonoù',
	'contrib-tracking-error' => 'Fazi',
	'contrib-tracking-error-text' => 'Furmskrid kaset direizh',
	'contrib-tracking-submitting' => "O kas d'ar reizhiad tretiñ ar paeamantoù...",
	'contrib-tracking-continue' => 'Ma ne vezit ket adkaset ent emgefre, klikit war ar bouton-mañ evit kas da benn ho paeamant.',
	'contrib-tracking-redirect' => 'Adkaset e viot ent emgefre evit echuiñ an donezon.',
	'contrib-tracking-button' => "Kenderc'hel",
	'contrib-tracking-item-name-onetime' => 'Donezon nemetañ',
	'contrib-tracking-item-name-recurring' => 'Donezon miziek ingal',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'contributiontracking-desc' => 'Praćenje doprinosa za Wikimedia donacije',
	'contributiontracking' => 'Praćenje doprinosa',
	'contrib-tracking-error' => 'Greška',
	'contrib-tracking-error-text' => 'Slanje nevaljanog obrasca',
	'contrib-tracking-submitting' => 'Šaljem za proces plaćanja...',
	'contrib-tracking-continue' => 'Ako niste automatski preusmjereni, kliknite na dugme da završite Vašu donaciju putem PayPala.', # Fuzzy
	'contrib-tracking-redirect' => 'Bit ćete automatski preusmjereni na PayPal da dovršite vašu donaciju.', # Fuzzy
	'contrib-tracking-button' => 'nastavi',
	'contrib-tracking-item-name-onetime' => 'Jednokratna donacija',
	'contrib-tracking-item-name-recurring' => 'Mjesečna ponavljajuća donacija',
);

/** Catalan (català)
 * @author Arnaugir
 * @author Davidpar
 * @author Paucabot
 * @author Solde
 */
$messages['ca'] = array(
	'contributiontracking-desc' => 'Contribució de seguiment per a la recaptació de fons de Wikimedia',
	'contributiontracking' => 'Rastreig de contribucions',
	'contrib-tracking-error' => 'Error',
	'contrib-tracking-error-text' => 'Enviament de formulari no vàlid',
	'contrib-tracking-submitting' => 'Enviant al processador de pagaments...',
	'contrib-tracking-continue' => 'Si no sou automàticament redirigit, clicau el botó per completar la vostra donació a PayPal.', # Fuzzy
	'contrib-tracking-button' => 'Continua',
	'contrib-tracking-item-name-onetime' => 'Donació única',
	'contrib-tracking-item-name-recurring' => 'Donació mensual periòdica',
);

/** Czech (česky)
 * @author Mormegil
 * @author Tchoř
 */
$messages['cs'] = array(
	'contributiontracking-desc' => 'Sledování finančních příspěvků v průběhu kampaně nadace Wikimedia',
	'contributiontracking' => 'Sledování příspěvků',
	'contrib-tracking-error' => 'Chyba',
	'contrib-tracking-error-text' => 'Odeslaný formulář nebyl správně vyplněn',
	'contrib-tracking-submitting' => 'Platba se odesílá ke zpracování…',
	'contrib-tracking-continue' => 'Pokud nebudete automaticky přesměrován(a), klikněte na tlačítko, abyste mohl(a) dokončit svůj příspěvek.',
	'contrib-tracking-redirect' => 'Pro dokončení příspěvku budete automaticky přesměrování.',
	'contrib-tracking-button' => 'Pokračovat',
	'contrib-tracking-item-name-onetime' => 'Jednorázový dar',
	'contrib-tracking-item-name-recurring' => 'Pravidelný měsíční příspěvek',
);

/** Danish (dansk)
 * @author Peter Alberti
 * @author Sarrus
 * @author Tjernobyl
 */
$messages['da'] = array(
	'contrib-tracking-error' => 'Fejl',
	'contrib-tracking-error-text' => 'Ugyldig formularafsendelse',
	'contrib-tracking-button' => 'Fortsæt',
	'contrib-tracking-item-name-onetime' => 'Engangsdonation',
	'contrib-tracking-fundraiser-maintenance-header' => 'Midlertidigt nede pga. vedligeholdelse',
);

/** German (Deutsch)
 * @author Imre
 * @author Kghbln
 * @author Metalhead64
 * @author The Evil IP address
 */
$messages['de'] = array(
	'contributiontracking-desc' => 'Ermöglicht die Spendennachverfolgung für die Wikimedia-Spendenkampagne',
	'contributiontracking' => 'Spendennachverfolgung',
	'contrib-tracking-error' => 'Fehler',
	'contrib-tracking-error-text' => 'Ungültige Übertragung des Formulars',
	'contrib-tracking-submitting' => 'Übertragung an den Zahlungsdienstleister …',
	'contrib-tracking-continue' => 'Sofern du nicht automatisch weitergeleitet wirst, klicke bitte auf „{{int:contrib-tracking-button}}“, um deine Spende abzuschließen.',
	'contrib-tracking-redirect' => 'Du wirst automatisch weitergeleitet, um deine Spende abzuschließen zu können.',
	'contrib-tracking-button' => 'Weiter',
	'contrib-tracking-item-name-onetime' => 'Einmalige Spende',
	'contrib-tracking-item-name-recurring' => 'Monatlich wiederholende Spende',
	'contrib-tracking-fundraiser-maintenance-header' => 'Derzeit wegen Wartung nicht erreichbar',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Wir führen derzeit geplante Wartungsarbeiten durch und können keine Spenden entgegennehmen. Bitte versuche es später erneut. Falls du irgendwelche Fragen hast, sende bitte eine E-Mail an $1.',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Imre
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'contrib-tracking-continue' => 'Sofern Sie nicht automatisch weitergeleitet werden, klicken Sie bitte auf „{{int:contrib-tracking-button}}“, um Ihre Spende abzuschließen.',
	'contrib-tracking-redirect' => 'Sie werden automatisch weitergeleitet, um Ihre Spende abzuschließen zu können.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Mirzali
 * @author Xoser
 */
$messages['diq'] = array(
	'contributiontracking-desc' => 'Yardimê peteyî tekip kerdoğ qe Wîkîmediya pere berz kerdoğî',
	'contributiontracking' => 'Yardimê peteyî tekip kerdoğ',
	'contrib-tracking-error' => 'Xırab',
	'contrib-tracking-error-text' => 'Ena form raşt niyo',
	'contrib-tracking-submitting' => 'Processor de pere teslim keno...',
	'contrib-tracking-continue' => 'Eka ti şıma xob xo hetênayış nêbiyê se, bêca xo temam kerdışi rê maker pıploxnê',
	'contrib-tracking-button' => 'Dewam ke',
	'contrib-tracking-item-name-onetime' => 'Yew raye bacdayış',
	'contrib-tracking-item-name-recurring' => 'Meng meng bêcdayış',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'contributiontracking-desc' => 'Slědowanje darow za pósćiwańsku kampanju Wikimedije',
	'contributiontracking' => 'Slědowanje darow',
	'contrib-tracking-error' => 'Zmólka',
	'contrib-tracking-error-text' => 'Njepłaśiwe słanje formulara',
	'contrib-tracking-submitting' => 'Płaśenje wótpósćeła se k wobźěłowanjeju...',
	'contrib-tracking-continue' => 'Joli njepósrědnjaš se awtomatiski dalej, klikni na tłocašk, aby dokóńcył swój dar.',
	'contrib-tracking-redirect' => 'Buźoš se awtomatiski dalej pósrědnjaś, aby swójo dar dokóńcył.',
	'contrib-tracking-button' => 'Dalej',
	'contrib-tracking-item-name-onetime' => 'Jadnorazny dar',
	'contrib-tracking-item-name-recurring' => 'Wóspjetujucy se mjasecny dar',
);

/** Ewe (eʋegbe)
 */
$messages['ee'] = array(
	'contrib-tracking-error' => 'Vodada',
);

/** Greek (Ελληνικά)
 * @author Glavkos
 * @author Konsnos
 * @author Omnipaedista
 * @author ZaDiak
 */
$messages['el'] = array(
	'contributiontracking-desc' => 'Παρακολούθηση συνεισφορών για τον έρανο του Wikimedia',
	'contributiontracking' => 'Παακολούθηση συνεισφορών',
	'contrib-tracking-error' => 'Σφάλμα',
	'contrib-tracking-error-text' => 'Υποβολή άκυρου τύπου',
	'contrib-tracking-submitting' => 'Υποβολή στον επεξεργαστή πληρωμών...',
	'contrib-tracking-continue' => 'Εάν δεν προωθηθήκατε αυτόματα, πατήστε το κουμπί για να ολοκληρώσετε τη δωρεάν σας.',
	'contrib-tracking-redirect' => 'Θα μεταφερθείτε αυτόματα στην για να ολοκληρώσετε τη δωρεά σας.',
	'contrib-tracking-button' => 'Συνέχεια',
	'contrib-tracking-item-name-onetime' => 'Εφάπαξ δωρεά',
	'contrib-tracking-item-name-recurring' => 'Επαναλαμβανόμενη μηνιαία δωρεά',
	'contrib-tracking-fundraiser-maintenance-header' => 'Προσωρινά εκτός λειτουργίας για συντήρηση',
);

/** Esperanto (Esperanto)
 * @author Blahma
 * @author Yekrats
 */
$messages['eo'] = array(
	'contributiontracking-desc' => 'Kontribuada atentilo por la monkampajno Wikimedia',
	'contributiontracking' => 'Kontribua kontrolado',
	'contrib-tracking-error' => 'Eraro',
	'contrib-tracking-error-text' => 'Malvalida enigo',
	'contrib-tracking-submitting' => 'Sendante al mona traktejo...',
	'contrib-tracking-continue' => 'Se oni ne alidirektos vin aŭtomate, klaku la butonon por fini la donacon.',
	'contrib-tracking-redirect' => 'Vi estos aŭtomate alidirektita por fini vian donacon.',
	'contrib-tracking-button' => 'Daŭrigi',
	'contrib-tracking-item-name-onetime' => 'Unuopa donaco',
	'contrib-tracking-item-name-recurring' => 'Ĉiumonata donaco',
	'contrib-tracking-fundraiser-maintenance-header' => 'Provizore ŝalta por riparado',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Crazymadlover
 * @author MetalBrasil
 * @author Remember the dot
 */
$messages['es'] = array(
	'contributiontracking-desc' => 'Contribución para el seguimiento del recaudador de fondos de Wikimedia',
	'contributiontracking' => 'Seguimiento contribucional',
	'contrib-tracking-error' => 'Error',
	'contrib-tracking-error-text' => 'Envío de formulario inválido',
	'contrib-tracking-submitting' => 'Entregando al procesador de pagos...',
	'contrib-tracking-continue' => 'Si no es redirigido automáticamente, haga clic en el botón para completar su donación.',
	'contrib-tracking-redirect' => 'Usted será redirigido automáticamente para completar su donación.',
	'contrib-tracking-button' => 'Continuar',
	'contrib-tracking-item-name-onetime' => 'Donación única',
	'contrib-tracking-item-name-recurring' => 'Donación mensual recurrente',
	'contrib-tracking-fundraiser-maintenance-header' => 'Parado temporalmente por mantenimiento',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Actualmente estamos realizando mantenimiento programado y somos incapaces de aceptar donaciones. Inténtalo de nuevo en otro momento.  Si tienes alguna pregunta, por favor, envíanos un correo electrónico a $1.',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'contributiontracking-desc' => 'Jälgib Wikimedia korjanduse laekumisi.',
	'contrib-tracking-error' => 'Viga',
	'contrib-tracking-submitting' => 'Maksevahendaja juurde suunamine...',
	'contrib-tracking-continue' => 'Kui sind ei suunata automaatselt, klõpsa nuppu, et annetus lõpule viia.',
	'contrib-tracking-redirect' => 'Sind suunatakse automaatselt, et annetus lõpule viia.',
	'contrib-tracking-button' => 'Jätka',
	'contrib-tracking-item-name-onetime' => 'Ühekordne annetus',
	'contrib-tracking-item-name-recurring' => 'Korduv igakuine annetus',
);

/** Basque (euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'contrib-tracking-error' => 'Errorea',
	'contrib-tracking-button' => 'Jarraitu',
);

/** Persian (فارسی)
 * @author Huji
 * @author Komeil 4life
 * @author Mjbmr
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'contributiontracking-desc' => 'پی‌گیری کمک‌های انجام شده به جذب سرمایهٔ ویکی‌مدیا',
	'contributiontracking' => 'پی‌گیری کمک‌ها',
	'contrib-tracking-error' => 'خطا',
	'contrib-tracking-error-text' => 'اطلاعات ارسالی فرم غیر مجاز است',
	'contrib-tracking-submitting' => 'ارسال به پردازش کنندهٔ پرداخت...',
	'contrib-tracking-continue' => 'اگر به طور خودکار به صفحهٔ مورد نظر هدایت نشدید، برای تکمیل کمک مالی خود بر روی دکمه کلیک کنید.',
	'contrib-tracking-redirect' => 'شما به طور خودکار برای تکمیل کمک مالی‌تان تغییرمسیر داده خواهید شد.',
	'contrib-tracking-button' => 'ادامه',
	'contrib-tracking-item-name-onetime' => 'یک بار کمک مالی',
	'contrib-tracking-item-name-recurring' => 'دورهٔ اهدای کمک مالی ماهانه',
);

/** Finnish (suomi)
 * @author Crt
 * @author Nedergard
 * @author Nike
 * @author Olli
 * @author Tarmo
 * @author VezonThunder
 */
$messages['fi'] = array(
	'contributiontracking-desc' => 'Lahjoitusseuranta Wikimedian rahankeräykseen.',
	'contributiontracking' => 'Lahjoitusseuranta',
	'contrib-tracking-error' => 'Virhe',
	'contrib-tracking-error-text' => 'Lähetetty lomake oli viallinen',
	'contrib-tracking-submitting' => 'Lähetetään maksujen käsittelyyn...',
	'contrib-tracking-continue' => 'Jos sinua ei ohjata eteenpäin automaattisesti, viimeistele lahjoituksesi napsauttamalla painiketta.',
	'contrib-tracking-redirect' => 'Sinut ohjataan automaattisesti lahjoituksen lähettämiseksi.',
	'contrib-tracking-button' => 'Jatka',
	'contrib-tracking-item-name-onetime' => 'Kertaluonteinen lahjoitus',
	'contrib-tracking-item-name-recurring' => 'Jatkuva kuukausilahjoitus',
	'contrib-tracking-fundraiser-maintenance-header' => 'Väliaikaisesti ei käytettävissä huoltotöiden vuoksi',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Suoritamme parhaillaan aikataulun mukaisia huoltotöitä emmekä voi ottaa lahjoituksia vastaan. Yritä pian uudelleen. Jos sinulla on kysyttävää, lähetä sähköpostia osoitteeseen $1.',
);

/** French (français)
 * @author DavidL
 * @author Gomoko
 * @author Korrigan
 * @author Peter17
 * @author PieRRoMaN
 * @author Verdy p
 */
$messages['fr'] = array(
	'contributiontracking-desc' => 'Suivi des contributions pour la levée de fonds de Wikimedia',
	'contributiontracking' => 'Suivi des contributions',
	'contrib-tracking-error' => 'Erreur',
	'contrib-tracking-error-text' => 'Soumission du formulaire invalide',
	'contrib-tracking-submitting' => 'Envoi au système de traitement des paiements...',
	'contrib-tracking-continue' => 'Si vous n’êtes pas redirigé automatiquement, cliquez ce bouton pour compléter votre don.',
	'contrib-tracking-redirect' => 'Vous allez être redirigé automatiquement pour terminer votre don.',
	'contrib-tracking-button' => 'Continuer',
	'contrib-tracking-item-name-onetime' => 'Don unique',
	'contrib-tracking-item-name-recurring' => 'Don mensuel récurrent',
	'contrib-tracking-fundraiser-maintenance-header' => 'Arrêté momentanément pour maintenance',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Nous effectuons actuellement une maintenance programmée et ne pouvons pas accepter les dons. Veuillez réessayer prochainement. Si vous avez des question, veuillez envoyer un courriel à $1.',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'contributiontracking-desc' => 'Survelyence de les contribucions por la levâ de fonds de Wikimedia.',
	'contributiontracking' => 'Survelyence de les contribucions',
	'contrib-tracking-error' => 'Èrror',
	'contrib-tracking-error-text' => 'Somission du formulèro envalida',
	'contrib-tracking-submitting' => 'Èxpèdicion u sistèmo de trètament des payements...',
	'contrib-tracking-continue' => 'Se vos éte pas redirigiê ôtomaticament, clicâd lo boton por chavonar voutron don.',
	'contrib-tracking-redirect' => 'Vos voléd étre redirigiê ôtomaticament por chavonar voutron don.',
	'contrib-tracking-button' => 'Continuar',
	'contrib-tracking-item-name-onetime' => 'Don solèt',
	'contrib-tracking-item-name-recurring' => 'Don per mês rècurrent',
);

/** Friulian (furlan)
 * @author Klenje
 */
$messages['fur'] = array(
	'contrib-tracking-button' => 'Va indevant',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'contrib-tracking-error' => 'Earráid',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'contributiontracking-desc' => 'Seguimento das contribucións da recadación de fondos da Wikimedia',
	'contributiontracking' => 'Seguimento das contribucións',
	'contrib-tracking-error' => 'Erro',
	'contrib-tracking-error-text' => 'Envío do formulario inválido',
	'contrib-tracking-submitting' => 'Enviando ao procesador de pagamentos...',
	'contrib-tracking-continue' => 'Se non es redirixido automaticamente, fai clic no botón para completar a túa doazón.',
	'contrib-tracking-redirect' => 'Serás redirixido automaticamente para completar a túa doazón.',
	'contrib-tracking-button' => 'Continuar',
	'contrib-tracking-item-name-onetime' => 'Doazón única',
	'contrib-tracking-item-name-recurring' => 'Doazón mensual recorrente',
	'contrib-tracking-fundraiser-maintenance-header' => 'Fóra de servizo temporalmente por mantemento',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Estamos levando a cabo tarefas programadas de mantemento e non podemos aceptar doazóns. Inténtao de novo máis tarde. Se tes algunha pregunta, envía un correo ao enderezo $1.',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'contrib-tracking-error' => 'Σφάλμα',
	'contrib-tracking-button' => 'Ἀκολουθεῖν',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'contributiontracking-desc' => 'Spändeverfolgig fir d Wikimedia Spändekampagne',
	'contributiontracking' => 'Spändeverfolgig',
	'contrib-tracking-error' => 'Fähler',
	'contrib-tracking-error-text' => 'Nit giltig Ibertragigsformular',
	'contrib-tracking-submitting' => 'Ibertragig an dr Zahligsprovider ...',
	'contrib-tracking-continue' => 'Wänn Du nit automatisch wytergleitet wirsch, no druck bitte uf „{{int:contrib-tracking-button}}“ go Dyy Spände abzschließe.',
	'contrib-tracking-redirect' => 'Du wirsch automatisch wytergleitet go Dyy Spände aschließe z chenne.',
	'contrib-tracking-button' => 'Wyter',
	'contrib-tracking-item-name-onetime' => 'Eimoligi Spänd',
	'contrib-tracking-item-name-recurring' => 'Spänd, wu all Monet soll widerholt wäre',
);

/** Gujarati (ગુજરાતી)
 * @author Dineshjk
 */
$messages['gu'] = array(
	'contrib-tracking-error' => 'ત્રુટિ',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Rotem Liss
 * @author YaronSh
 */
$messages['he'] = array(
	'contributiontracking-desc' => 'מעקב תרומות להתרמה לקרן ויקימדיה',
	'contributiontracking' => 'מעקב תרומות',
	'contrib-tracking-error' => 'שגיאה',
	'contrib-tracking-error-text' => 'שליחת פורום בלתי תקינה',
	'contrib-tracking-submitting' => 'נשלח למעבד התרומות...',
	'contrib-tracking-continue' => 'אם ההפניה אינה מתבצעת אוטומטית, לחצו על הכפתור כדי להשלים את תרומתכם באתר PayPal.',
	'contrib-tracking-redirect' => 'כעת תתבצע הפניה אוטומטית ל־PayPal כדי להשלים את תרומתכם.',
	'contrib-tracking-button' => 'המשך',
	'contrib-tracking-item-name-onetime' => 'תרומה חד־פעמית',
	'contrib-tracking-item-name-recurring' => 'תרומה חודשית חוזרת',
	'contrib-tracking-fundraiser-maintenance-header' => 'השירות אינו פעיל באופן זמני לצורך תחזוקה',
	'contrib-tracking-fundraiser-maintenance-notice' => 'אנחנו עושים פעולות תחזוקה מתוכננות ואיננו יכולים לקבל עכשיו תקומות. נא לנסות שוב בקרוב. אם יש לך שאלות כלשהן, אפשר לשלוח אותן לכתובת $1.',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 */
$messages['hi'] = array(
	'contributiontracking' => 'अबदान ट्रैकिंग',
	'contrib-tracking-error' => 'त्रुटि',
	'contrib-tracking-error-text' => 'अमान्य फॉर्म सबमिशन',
	'contrib-tracking-button' => 'जारी रखें',
	'contrib-tracking-item-name-onetime' => 'एक समय दान',
	'contrib-tracking-item-name-recurring' => 'आवर्ती मासिक दान',
);

/** Fiji Hindi (Latin script) (Fiji Hindi)
 * @author Karthi.dr
 */
$messages['hif-latn'] = array(
	'contrib-tracking-error' => 'Galti',
);

/** Croatian (hrvatski)
 * @author Dalibor Bosits
 * @author Roberta F.
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'contributiontracking-desc' => 'Praćenje doprinosa za Wikimedijino prikupljanje sredstava',
	'contributiontracking' => 'Praćenje doprinosa',
	'contrib-tracking-error' => 'Pogrješka',
	'contrib-tracking-error-text' => 'Neispravno podnošenje obrasca',
	'contrib-tracking-submitting' => 'Podnošenje obrascu za plaćanje...',
	'contrib-tracking-continue' => 'Ako niste automatski preusmjereni, kliknite na tipku kako biste dovršili svoju donaciju s PayPalom.', # Fuzzy
	'contrib-tracking-redirect' => 'Bit ćete automatski preusmjereni na PayPal za dovršetak vaše donacije.', # Fuzzy
	'contrib-tracking-button' => 'Nastavi',
	'contrib-tracking-item-name-onetime' => 'Jednokratna donacija',
	'contrib-tracking-item-name-recurring' => 'Mjesečna ponavljajuća donacija',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'contributiontracking-desc' => 'Sćěhowanje přinoškow za darjensku kampanju Wikimedije',
	'contributiontracking' => 'Sćěhowanje přinoškow',
	'contrib-tracking-error' => 'Zmylk',
	'contrib-tracking-error-text' => 'Njepłaćiwe formularne přenjesenje',
	'contrib-tracking-submitting' => 'Přenjesenje k płaćenskemu sposrědkowarjej',
	'contrib-tracking-continue' => 'Jeli njeposrědkuješ so awtomatisce dale, klikń na tłóčatko, zo by swój dar přewjedł.',
	'contrib-tracking-redirect' => 'Sposrědkuješ so awtomatisce dale, zo by swój dar wotzamknył.',
	'contrib-tracking-button' => 'Dale',
	'contrib-tracking-item-name-onetime' => 'Jónkrócny dar',
	'contrib-tracking-item-name-recurring' => 'Wospjetowacy so měsačny dar',
	'contrib-tracking-fundraiser-maintenance-header' => 'Nachwilu wothladowanja dla njedocpějomny',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Přewjedźemy tuchwilu planowane wothladowanje a njemóžemy dary akceptować. prošu spytaj hišće raz. Jeli maš prašenja, pósćel prošu e-mejlku na $1.',
);

/** Hungarian (magyar)
 * @author Dani
 * @author Dj
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'contributiontracking-desc' => 'Adományok követése a Wikimédia adománygyűjtő kampányában',
	'contributiontracking' => 'Adakozás nyomonkövetése',
	'contrib-tracking-error' => 'Hiba',
	'contrib-tracking-error-text' => 'Az elküldött űrlap érvénytelen',
	'contrib-tracking-submitting' => 'Küldés a fizetés-feldolgozóhoz…',
	'contrib-tracking-continue' => 'Ha az oldal nem irányít át automatikusan, kattints a gombra hogy befejezd az adományozást.',
	'contrib-tracking-redirect' => 'Automatikusan átirányításra kerülsz az adományozás befejezéséhez.',
	'contrib-tracking-button' => 'Folytatás',
	'contrib-tracking-item-name-onetime' => 'Egyszeri adományozás',
	'contrib-tracking-item-name-recurring' => 'Havonta ismétlődő adományozás',
	'contrib-tracking-fundraiser-maintenance-header' => 'Karbantartás miatt időlegesen leállítva',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'contributiontracking-desc' => 'Sequimento de contributiones pro le collecta de fundos pro Wikimedia',
	'contributiontracking' => 'Sequimento de contributiones',
	'contrib-tracking-error' => 'Error',
	'contrib-tracking-error-text' => 'Submission de formulario invalide',
	'contrib-tracking-submitting' => 'In submission al processator de pagamentos...',
	'contrib-tracking-continue' => 'Si tu non es automaticamente redirigite, clicca sur le button pro completar tu donation.',
	'contrib-tracking-redirect' => 'Tu essera redirigite automaticamente pro completar tu donation.',
	'contrib-tracking-button' => 'Continuar',
	'contrib-tracking-item-name-onetime' => 'Donation unic',
	'contrib-tracking-item-name-recurring' => 'Donation periodic mensual',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author Farras
 * @author IvanLanin
 */
$messages['id'] = array(
	'contributiontracking-desc' => 'Pelacak kontribusi untuk penggalangan dana Wikimedia',
	'contributiontracking' => 'Pelacakan kontribusi',
	'contrib-tracking-error' => 'Galat',
	'contrib-tracking-error-text' => 'Pengiriman formulir tidak sah',
	'contrib-tracking-submitting' => 'Mengirimkan ke pemroses pembayaran...',
	'contrib-tracking-continue' => 'Jika halaman ini tidak otomatis dialihkan, klik tombol ini untuk menyelesaikan sumbangan Anda.',
	'contrib-tracking-redirect' => 'Anda akan otomatis dialihkan untuk menyelesaikan sumbangan Anda.',
	'contrib-tracking-button' => 'Lanjutkan',
	'contrib-tracking-item-name-onetime' => 'Sumbangan satu kali',
	'contrib-tracking-item-name-recurring' => 'Sumbangan bulanan berulang',
	'contrib-tracking-fundraiser-maintenance-header' => 'Dimatikan sementara untuk pemeliharaan',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Kami sedang melakukan pemeliharaan terjadwal dan tidak dapat menerima sumbangan. Silakan coba lagi nanti. Jika Anda memiliki pertanyaan, silakan kirim surel ke $1.',
);

/** Igbo (Igbo)
 */
$messages['ig'] = array(
	'contrib-tracking-error' => 'Nsogbú',
);

/** Ido (Ido)
 * @author Malafaya
 */
$messages['io'] = array(
	'contrib-tracking-error' => 'Eroro',
);

/** Icelandic (íslenska)
 * @author පසිඳු කාවින්ද
 */
$messages['is'] = array(
	'contrib-tracking-error' => 'Villa',
	'contrib-tracking-button' => 'Halda áfram',
);

/** Italian (italiano)
 * @author Beta16
 * @author BrokenArrow
 * @author Darth Kule
 * @author Rippitippi
 * @author Vituzzu
 */
$messages['it'] = array(
	'contributiontracking-desc' => 'Monitoraggio donazioni per la raccolta fondi Wikimedia',
	'contributiontracking' => 'Monitoraggio donazioni',
	'contrib-tracking-error' => 'Errore',
	'contrib-tracking-error-text' => "Errore nell'invio del modulo",
	'contrib-tracking-submitting' => 'Invio al gestore del pagamento...',
	'contrib-tracking-continue' => 'Se il collegamento non avviene automaticamente, fare clic sul pulsante per completare la donazione.',
	'contrib-tracking-redirect' => 'Verrai reindirizzato automaticamente per completare la tua donazione.',
	'contrib-tracking-button' => 'Continua',
	'contrib-tracking-item-name-onetime' => 'Donazione singola',
	'contrib-tracking-item-name-recurring' => 'Donazione ricorrente mensile',
	'contrib-tracking-fundraiser-maintenance-header' => 'Temporaneamente fuori servizio per manutenzione',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Stiamo al momento effettuando la manutenzione programmata e non siamo in grado di accettare donazioni. Si prega di riprovare fra poco. Per qualsiasi domanda potete scriverci a $1.',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Mizusumashi
 * @author Ohgi
 * @author Shirayuki
 * @author Whym
 * @author 青子守歌
 */
$messages['ja'] = array(
	'contributiontracking-desc' => 'ウィキメディア資金調達者向け寄付追跡',
	'contributiontracking' => '寄付追跡',
	'contrib-tracking-error' => 'エラー',
	'contrib-tracking-error-text' => 'フォーム送信が無効',
	'contrib-tracking-submitting' => '決済処理者に提出中...',
	'contrib-tracking-continue' => '自動的に転送されない場合、ボタンを押して寄付を完了させてください。',
	'contrib-tracking-redirect' => 'あなたの寄付を完了させるため、自動的にリダイレクトします。',
	'contrib-tracking-button' => '続行',
	'contrib-tracking-item-name-onetime' => '1回だけ寄付',
	'contrib-tracking-item-name-recurring' => '月ごとに定期寄付',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 * @author Pras
 */
$messages['jv'] = array(
	'contributiontracking-desc' => 'Panjejakan kontribusi kanggo pangumpul dana Wikimedia',
	'contributiontracking' => 'Panjejakan kontribusi',
	'contrib-tracking-error' => 'Kasalahan',
	'contrib-tracking-error-text' => 'Pangajuan formulir ora sah',
	'contrib-tracking-submitting' => 'Ngirim menyang prosèsor pambayaran...',
	'contrib-tracking-continue' => 'Yèn Sampéyan ora otomatis dialihaké, klik tombol kuwi kanggo ngrampungaké sumbangan Sampéyan.',
	'contrib-tracking-redirect' => 'Sampéyan bakal otomatis diarahaké kanggo ngrampungaké sumbangan Sampéyan.',
	'contrib-tracking-button' => 'Terus',
	'contrib-tracking-item-name-onetime' => 'Sumbangan sisan-gawé',
	'contrib-tracking-item-name-recurring' => 'Sumbangan saben sasi ajeg',
);

/** Georgian (ქართული)
 * @author David1010
 * @author Malafaya
 * @author გიორგიმელა
 */
$messages['ka'] = array(
	'contributiontracking-desc' => 'ვიკიმედიის ფონდის სასარგებლოდ შეწირულებების კონტროლი',
	'contributiontracking' => 'შეწირულობების შეგროვების კონტროლი',
	'contrib-tracking-error' => 'შეცდომა',
	'contrib-tracking-error-text' => 'არასწორი ფორმის ნებართვა',
	'contrib-tracking-submitting' => 'მიმდინარეობს გადახდების დამმუშავებლისდამი გაგზავნა...',
	'contrib-tracking-continue' => 'თუ თქვენ არ იყავით ავტომატურად გადამისამართებული, დააჭირეთ ღილაკს რათა დაასრულოთ თქვენი შემოწირულობა.',
	'contrib-tracking-button' => 'გაგრძელება',
	'contrib-tracking-item-name-onetime' => 'ერთჯერადი შენატანი',
	'contrib-tracking-item-name-recurring' => 'ყოველთვიური შენატანი',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Thearith
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'contrib-tracking-error' => 'កំហុស',
	'contrib-tracking-continue' => 'ប្រសិនបើអ្នកមិនត្រូវបានបញ្ជូនបន្តដោយស្វ័យប្រវត្តិទេ សូចចុចប៊ូតុងដើម្បីសំរេចការបរិច្ចាគរបស់អ្នក។',
	'contrib-tracking-redirect' => 'អ្នកនឹងត្រូវបញ្ជូនបន្តដោយស្វ័យប្រវត្តិដើម្បីសំរេចការបរិច្ចាគរបស់អ្នក។',
	'contrib-tracking-button' => 'បន្ត',
	'contrib-tracking-item-name-onetime' => 'ការបរិច្ចាគសំរាប់តែមួយលើក',
	'contrib-tracking-item-name-recurring' => 'ការបរិច្ចាគប្រចាំខែ',
);

/** Korean (한국어)
 * @author Ilovesabbath
 * @author Kwj2772
 * @author 아라
 */
$messages['ko'] = array(
	'contributiontracking-desc' => '위키미디어 모금을 위한 기부 추적',
	'contributiontracking' => '기부 추적',
	'contrib-tracking-error' => '오류',
	'contrib-tracking-error-text' => '부적절한 양식 제출',
	'contrib-tracking-submitting' => '결재 처리 요청 중...',
	'contrib-tracking-continue' => '자동으로 넘어가지 않는다면, 기부를 완료하기 위해서 버튼을 클릭하세요.',
	'contrib-tracking-redirect' => '자동으로 기부를 완료하기 위해 넘겨주기될 것입니다.',
	'contrib-tracking-button' => '계속',
	'contrib-tracking-item-name-onetime' => '한 번 기부',
	'contrib-tracking-item-name-recurring' => '매월 정기 기부',
	'contrib-tracking-fundraiser-maintenance-header' => '유시 보수를 위해 일시적으로 멈춤',
	'contrib-tracking-fundraiser-maintenance-notice' => '현재 유지 보수가 예정되어 있어 기부를 받아줄 수 없습니다. 잠시 뒤 다시 시도해주세요. 질문이 있다면 $1 (으)로 이메일을 보내세요.',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'contributiontracking-desc' => 'Spende Verfollje för de Wikimedija Shtefftung iere Jeld-Sammel-Kampanje',
	'contributiontracking' => 'Spende Verfollje',
	'contrib-tracking-error' => 'Fähler',
	'contrib-tracking-error-text' => 'Unjöltijje Date övverdraare för dat Fommulaa',
	'contrib-tracking-submitting' => 'Övverjäve aan dä <i lang="en">Provider</i> för et Bezahle&nbsp;...',
	'contrib-tracking-continue' => 'Wann De nit automattesch ömjelengk wees, donn op dä Knopp klecke, öm Ding Spend fäädesch ze maache.',
	'contrib-tracking-redirect' => 'Do küß automattesch pä Ömleidong wigger, öm Ding Spänd fäädesch ze maache.',
	'contrib-tracking-button' => 'Wigger',
	'contrib-tracking-item-name-onetime' => 'Eimohl_Spänd',
	'contrib-tracking-item-name-recurring' => 'Moonatlesch_Spänd',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'contrib-tracking-error' => 'Çewtî',
);

/** Cornish (kernowek)
 * @author Kw-Moon
 */
$messages['kw'] = array(
	'contrib-tracking-error' => 'Gwall',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'contributiontracking-desc' => 'Suivi vun den Donen vun der Wikimedia-Spendenakioun',
	'contributiontracking' => 'Iwwersiicht vun den Donen',
	'contrib-tracking-error' => 'Feeler',
	'contrib-tracking-error-text' => 'Feeler bäi der Iwwermëttlung vum Formulaire',
	'contrib-tracking-submitting' => 'Weiderschécken op de System fir ze bezuelen ...',
	'contrib-tracking-continue' => 'Wann Dir net automatesch virugeleet gitt, da klickt w.e.g. op de Knäppchen fir ären Don ofzeschléissen.',
	'contrib-tracking-redirect' => 'Dir gitt automatesch virugeleet fir Ären Don ofzeschléissen.',
	'contrib-tracking-button' => 'Weider',
	'contrib-tracking-item-name-onetime' => 'Eemolegen Don',
	'contrib-tracking-item-name-recurring' => 'Don deen all Mount widderholl gëtt',
);

/** Limburgish (Limburgs)
 * @author Ooswesthoesbes
 * @author Pahles
 */
$messages['li'] = array(
	'contributiontracking-desc' => 'Vólge ven gifte veur de fónswèrving ven Wikimedia',
	'contributiontracking' => 'Gifte vólge',
	'contrib-tracking-error' => 'Fout',
	'contrib-tracking-error-text' => 'Óngèldige formuleerinveur',
	'contrib-tracking-submitting' => "Bezig mit 't oetveure venne betaling...",
	'contrib-tracking-continue' => 'Es se neet automatisch wörs doorgestuurdj, klik den óp de knoep óm dien gif via PayPal aaf te make.', # Fuzzy
	'contrib-tracking-button' => 'Doorgaon',
	'contrib-tracking-item-name-onetime' => 'Einsige donatie',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 * @author Matasg
 */
$messages['lt'] = array(
	'contrib-tracking-error' => 'Klaida',
	'contrib-tracking-error-text' => 'Neteisingas formos pateikimas',
	'contrib-tracking-submitting' => 'Pateikiama mokėjimo procesoriui...',
	'contrib-tracking-continue' => 'Jei nebūsite automatiškai nukreiptas, paspauskite mygtuką, kad galėtumėte užbaigti savo aukojimą PayPal.', # Fuzzy
	'contrib-tracking-redirect' => 'Jūs būsite automatiškai nukreipti į PayPal sistemą, kad užbaigtumėte aukojimo procesą.', # Fuzzy
	'contrib-tracking-button' => 'Tęsti',
	'contrib-tracking-item-name-onetime' => 'Vienkartinės auka',
	'contrib-tracking-item-name-recurring' => 'Kas mėnesinė auka',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'contrib-tracking-button' => 'Turpināt',
);

/** Eastern Mari (олык марий)
 * @author Сай
 */
$messages['mhr'] = array(
	'contrib-tracking-error' => 'Йоҥылыш',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 * @author Brest
 */
$messages['mk'] = array(
	'contributiontracking-desc' => 'Следење на дарувани прилози во иницијативата за собирање на средства на Викимедија',
	'contributiontracking' => 'Следење на дарувања',
	'contrib-tracking-error' => 'Грешка',
	'contrib-tracking-error-text' => 'Неважечко поднесување на образецот',
	'contrib-tracking-submitting' => 'Поднесувам на обработувачот на плаќања...',
	'contrib-tracking-continue' => 'Ако се случи да не бидете пренасочени автоматски, кликнете на копчето за да го довршите дарувањето.',
	'contrib-tracking-redirect' => 'Системот автоматски ќе ве префрли за да го довршите дарувањето.',
	'contrib-tracking-button' => 'Продолжи',
	'contrib-tracking-item-name-onetime' => 'Еднократен прилог',
	'contrib-tracking-item-name-recurring' => 'Месечен прилог',
	'contrib-tracking-fundraiser-maintenance-header' => 'Привремено недостапно поради одржување',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Во моментов вршиме планирано одржување и не можеме да прифаќаме уплати. Вратете се малку подоцна. Ако имате некакви прашања, обратете се на $1.',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'contributiontracking-desc' => 'വിക്കിമീഡിയ ധനശേഖരണത്തിലേയ്ക്കുള്ള സംഭാവനകൾ അനുഗമിക്കൽ',
	'contributiontracking' => 'സംഭാവനകൾ പിന്തുടരൽ',
	'contrib-tracking-error' => 'പിഴവ്',
	'contrib-tracking-error-text' => 'ഫോം സമർപ്പണം അസാധുവായ വിധത്തിലാണ്',
	'contrib-tracking-submitting' => 'പണമടയ്ക്കാനായി സമർപ്പിക്കുന്നു...',
	'contrib-tracking-continue' => 'താങ്കളുടെ അഭ്യർത്ഥന സ്വയം വഴിതിരിച്ചു വിട്ടില്ലെങ്കിൽ, താങ്കളുടെ സംഭാവന പൂർത്തിയാക്കാൻ ബട്ടൺ ഞെക്കുക.',
	'contrib-tracking-redirect' => 'താങ്കളുടെ സംഭാവന പ്രക്രിയ പൂർത്തിയാക്കാൻ സ്വയം തിരിച്ചുവിടുന്നതാണ്.',
	'contrib-tracking-button' => 'തുടരുക',
	'contrib-tracking-item-name-onetime' => 'ഒറ്റത്തവണ സംഭാവന',
	'contrib-tracking-item-name-recurring' => 'ആവർത്തിക്കുന്ന മാസംതോറുമുള്ള സംഭാവന',
	'contrib-tracking-fundraiser-maintenance-header' => 'പരിപാലനത്തിനായി താത്കാലികമായി പ്രവർത്തനരഹിതമാക്കിയിരിക്കുന്നു',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Aviator
 */
$messages['ms'] = array(
	'contributiontracking-desc' => 'Jejak sumbangan dana Wikimedia',
	'contributiontracking' => 'Jejak sumbangan',
	'contrib-tracking-error' => 'Ralat',
	'contrib-tracking-error-text' => 'Borang yang diserahkan tidak sah',
	'contrib-tracking-submitting' => 'Borang sedang diserahkan kepada pemproses pembayaran...',
	'contrib-tracking-continue' => 'Sekiranya anda tidak dilencongkan secara automatik, klik butang ini untuk melengkapkan dermaan anda.',
	'contrib-tracking-redirect' => 'Anda akan dilencongkan secara automatik untuk melengkapkan dermaan anda.',
	'contrib-tracking-button' => 'Teruskan',
	'contrib-tracking-item-name-onetime' => 'Dermaan sekali',
	'contrib-tracking-item-name-recurring' => 'Dermaan berulang bulanan',
	'contrib-tracking-fundraiser-maintenance-header' => 'Ditutup Buat Sementara untuk Kerja Penyelenggaraan',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Kami sedang melakukan kerja penyelenggaraan berjadual, oleh itu kami tidak dapat menerima dermaan. Sila cuba lagi nanti. Jika anda ada apa-apa soalan, sila e-melkan ke $1.',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'contributiontracking-desc' => "Moniteraġġ tad-donazzjonijiet għall-kampanja ta' ġbir ta' fondi tal-Wikimedia",
	'contributiontracking' => 'Moniteraġġ tad-donazzjonijiet',
	'contrib-tracking-error' => 'Żball',
	'contrib-tracking-error-text' => 'Żball fis-sottomissjoni tal-formola',
	'contrib-tracking-submitting' => 'Qiegħed jintbagħat għall-proċessur tal-ħlas...',
	'contrib-tracking-continue' => 'Jekk mintix awtomatikament rindirizzat, agħfas il-buttuna sabiex tkompli d-donazzjoni.',
	'contrib-tracking-redirect' => 'Se tiġi awtomatikament rindirizzat sabiex tkompli d-donazzjoni tiegħek.',
	'contrib-tracking-button' => 'Kompli',
	'contrib-tracking-item-name-onetime' => 'Donazzjoni unika',
	'contrib-tracking-item-name-recurring' => 'Donazzjoni rikorrenti għal kull xahar',
);

/** Erzya (эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'contrib-tracking-button' => 'Поладомс',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'contrib-tracking-error' => 'Ahcuallōtl',
);

/** Norwegian Bokmål (norsk (bokmål)‎)
 * @author Danmichaelo
 * @author Finnrind
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'contributiontracking-desc' => 'Bidragssporing for Wikimedias innsamling',
	'contributiontracking' => 'Bidragssporing',
	'contrib-tracking-error' => 'Feil',
	'contrib-tracking-error-text' => 'Ugyldig skjema',
	'contrib-tracking-submitting' => 'Sender til betalingshåndtering...',
	'contrib-tracking-continue' => 'Om du ikke omdirigeres automatisk, klikk på knappen for å gjennomføre din donasjonen.',
	'contrib-tracking-redirect' => 'Du vil automatisk bli omdirigert for å fullføre donasjonen din.',
	'contrib-tracking-button' => 'Fortsett',
	'contrib-tracking-item-name-onetime' => 'Engangsdonasjon',
	'contrib-tracking-item-name-recurring' => 'Regelmessige månedlige donasjoner',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'contributiontracking-desc' => 'Spennen verfolgen för de Wikimedia-Spennenkampagne',
	'contributiontracking' => 'Spennen folgen',
	'contrib-tracking-error' => 'Fehler',
	'contrib-tracking-error-text' => 'Ungüllig Formularöverdragung',
	'contrib-tracking-submitting' => 'An’t Överdragen an Betahl-Provider ...',
	'contrib-tracking-continue' => 'Wenn du nich automaatsch wiederleidt warrst, denn klick op „Wieder“, dat du diene Spenn över PayPal afsluten kannst.', # Fuzzy
	'contrib-tracking-button' => 'Wiedermaken',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'contributiontracking-desc' => 'Volgen van donaties voor de fondswerving van Wikimedia',
	'contributiontracking' => 'Donaties volgen',
	'contrib-tracking-error' => 'Fout',
	'contrib-tracking-error-text' => 'Ongeldige formulierinvoer',
	'contrib-tracking-submitting' => 'Bezig met het uitvoeren van de betaling...',
	'contrib-tracking-continue' => 'Als u niet automatisch wordt doorgestuurd, klik dan op de knop om uw donatie te voltooien.',
	'contrib-tracking-redirect' => 'U wordt automatisch doorgeleid om uw donatie te voltooien.',
	'contrib-tracking-button' => 'Doorgaan',
	'contrib-tracking-item-name-onetime' => 'Eenmalige donatie',
	'contrib-tracking-item-name-recurring' => 'Terugkerende maandelijkse donatie',
	'contrib-tracking-fundraiser-maintenance-header' => 'Tijdelijk niet beschikbaar tijdens onderhoudswerkzaamheden',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Op het moment wordt onderhoud uitgevoerd en kunnen we helaas geen donaties verwerken. Probeer het alstublieft snel opnieuw. Stuur een e-mail naar $1 als u vragen hebt.',
);

/** Nederlands (informeel)‎ (Nederlands (informeel)‎)
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'contrib-tracking-continue' => 'Als je niet automatisch wordt doorgestuurd, klik dan op de knop om je donatie te voltooien.',
	'contrib-tracking-redirect' => 'Je wordt automatisch doorgeleid om je donatie te voltooien.',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Op het moment wordt onderhoud uitgevoerd en kunnen we helaas geen donaties verwerken. Probeer het alsjeblieft snel opnieuw. Stuur een e-mail naar $1 als je vragen hebt.',
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Finnrind
 * @author Harald Khan
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'contributiontracking-desc' => 'Bidragssporing for innsamlinga til Wikimedia',
	'contributiontracking' => 'Bidragssporing',
	'contrib-tracking-error' => 'Feil',
	'contrib-tracking-error-text' => 'Ugyldig skjema',
	'contrib-tracking-submitting' => 'Sender til betalingshandtering...',
	'contrib-tracking-continue' => 'Vert du ikkje omdirigert automatisk, klikk på knappen for å gjennomføra donasjonen.',
	'contrib-tracking-button' => 'Hald fram',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'contributiontracking-desc' => 'Seguit de las contribucions per la levada de fonses de Wikimedia',
	'contributiontracking' => 'Seguit de las contribucions',
	'contrib-tracking-error' => 'Error',
	'contrib-tracking-error-text' => 'Error dins lo formulari',
	'contrib-tracking-submitting' => 'Mandadís al sistèma de pagament...',
	'contrib-tracking-continue' => 'Clicatz sul boton per acabar vòstre don amb Paypal.', # Fuzzy
	'contrib-tracking-button' => 'Contunhar',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Ansumang
 * @author Odisha1
 * @author Psubhashish
 */
$messages['or'] = array(
	'contrib-tracking-error' => 'ଭୁଲ',
	'contrib-tracking-button' => 'ଚାଲୁରଖ',
	'contrib-tracking-item-name-onetime' => 'ଥର-ଟିଏ ଦାନ',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'contrib-tracking-error' => 'Mischteek',
	'contrib-tracking-button' => 'Weider',
);

/** Polish (polski)
 * @author Beau
 * @author Leinad
 * @author Odie2
 * @author Olgak85
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'contributiontracking-desc' => 'Przekierowanie do systemu obsługi wpłat dla darczyńców Fundacji Wikimedia',
	'contributiontracking' => 'Przekierowanie do systemu obsługi wpłat',
	'contrib-tracking-error' => 'Błąd',
	'contrib-tracking-error-text' => 'Niewłaściwy format danych wejściowych',
	'contrib-tracking-submitting' => 'Przesyłanie danych do systemu płatności...',
	'contrib-tracking-continue' => 'Jeżeli nie {{GENDER:|zostałeś przekierowany|zostałaś przekierowana|przekierowano Cię}} automatycznie, kliknij przycisk w celu dokończenia składania darowizny.',
	'contrib-tracking-redirect' => 'Zostaniesz automatycznie {{GENDER:|przekierowany|przekierowana}}, aby dokończyć wpłatę.',
	'contrib-tracking-button' => 'Kontynuuj',
	'contrib-tracking-item-name-onetime' => 'Jednorazowa darowizna',
	'contrib-tracking-item-name-recurring' => 'Powtarzająca się comiesięczna darowizna',
	'contrib-tracking-fundraiser-maintenance-header' => 'Tymczasowo wyłączone z powodu konserwacji',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Jesteśmy w trakcie wykonywania zaplanowanych konserwacji i nie jesteśmy w stanie przyjmować darowizn. Proszę spróbować ponownie później.  Jeżeli masz pytania napisz na e-mail $1',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'contributiontracking-desc' => 'Trassadura dle contribussion për la racòlta fond ëd Wikimedia',
	'contributiontracking' => 'Trassadura dle contribussion',
	'contrib-tracking-error' => 'Eror',
	'contrib-tracking-error-text' => 'Spedission ëd forma nen bon-a',
	'contrib-tracking-submitting' => 'Spedission al motor ëd pagament ...',
	'contrib-tracking-continue' => "S'a l'é pa ridiressionà automaticament, ch'a sgnaca an sël boton për completé soa donassion.",
	'contrib-tracking-redirect' => 'A sarà anviarà automaticament për completé soa donassion.',
	'contrib-tracking-button' => 'Continua',
	'contrib-tracking-item-name-onetime' => 'Donassion sìngola',
	'contrib-tracking-item-name-recurring' => 'Donassion arcorenta mensil',
	'contrib-tracking-fundraiser-maintenance-header' => 'Temporaneament giù për manutension',
	'contrib-tracking-fundraiser-maintenance-notice' => "I soma an camin ch'i foma na manutension pianificà e i podoma pa aceté dle donassion. Për piasì ch'a preuva torna tòst. S'a l'ha dle chestion, për piasì ch'a scriva a $1.",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'contrib-tracking-error' => 'تېروتنه',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 * @author Malafaya
 * @author Waldir
 */
$messages['pt'] = array(
	'contributiontracking-desc' => 'Monitorização de donativos para a angariação de fundos da Wikimedia',
	'contributiontracking' => 'Monitorização de donativos',
	'contrib-tracking-error' => 'Erro',
	'contrib-tracking-error-text' => 'Envio de formulário inválido',
	'contrib-tracking-submitting' => 'A enviar ao processador de pagamentos...',
	'contrib-tracking-continue' => 'Se não for redireccionado automaticamente, clique no botão para completar o seu donativo no PayPal.', # Fuzzy
	'contrib-tracking-redirect' => 'Será reencaminhado automaticamente para o Paypal para terminar o donativo.', # Fuzzy
	'contrib-tracking-button' => 'Continuar',
	'contrib-tracking-item-name-onetime' => 'Donativo único',
	'contrib-tracking-item-name-recurring' => 'Donativo mensal recorrente',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Eduardo.mps
 * @author Giro720
 */
$messages['pt-br'] = array(
	'contributiontracking-desc' => 'Seguimento de doações para a coleta de fundos da Wikimedia',
	'contributiontracking' => 'Seguimento de doações',
	'contrib-tracking-error' => 'Erro',
	'contrib-tracking-error-text' => 'Submissão de formulário inválida',
	'contrib-tracking-submitting' => 'Submetendo ao processador de pagamentos...',
	'contrib-tracking-continue' => 'Se você não for redirecionado automaticamente, clique no botão para completar a sua doação no PayPal.', # Fuzzy
	'contrib-tracking-redirect' => 'Será reencaminhado automaticamente para o Paypal para terminar a sua doação.', # Fuzzy
	'contrib-tracking-button' => 'Continuar',
	'contrib-tracking-item-name-onetime' => 'Doação única',
	'contrib-tracking-item-name-recurring' => 'Doação mensal recorrente',
);

/** Romanian (română)
 * @author Firilacroco
 * @author KlaudiuMihaila
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'contributiontracking-desc' => 'Urmărirea contribuțiilor pentru strângerea de fonduri Wikimedia',
	'contributiontracking' => 'Urmărirea contribuțiilor',
	'contrib-tracking-error' => 'Eroare',
	'contrib-tracking-error-text' => 'Trimiterea formularului este invalidă',
	'contrib-tracking-submitting' => 'Trimitere la procesorul de plată...',
	'contrib-tracking-continue' => 'Dacă nu sunteți redirecționat automat, apăsați butonul pentru a finaliza donația.',
	'contrib-tracking-redirect' => 'Veți fi redirecționat automat pentru a finaliza donația.',
	'contrib-tracking-button' => 'Continuă',
	'contrib-tracking-item-name-onetime' => 'Donație unică',
	'contrib-tracking-item-name-recurring' => 'Donație lunară recurentă',
	'contrib-tracking-fundraiser-maintenance-header' => 'Închis temporar pentru mentenanță',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'contrib-tracking-error' => 'Errore',
	'contrib-tracking-error-text' => 'Module de sottomissione invalide',
	'contrib-tracking-submitting' => "Stoche a conferme 'u processe de pajamende...",
	'contrib-tracking-button' => 'Condinue',
	'contrib-tracking-item-name-onetime' => "Donazione de 'na vote",
	'contrib-tracking-item-name-recurring' => "Ste arrive 'a donazzione mensile",
	'contrib-tracking-fundraiser-maintenance-header' => 'Temboraneamende abbasce pe manutenzione',
);

/** Russian (русский)
 * @author DCamer
 * @author Eleferen
 * @author Kaganer
 * @author Ole Yves
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'contributiontracking-desc' => 'Отслеживание сбора пожертвований в пользу Викимедии',
	'contributiontracking' => 'Отслеживание сбора пожертвований',
	'contrib-tracking-error' => 'Ошибка',
	'contrib-tracking-error-text' => 'Неправильное подчинение формы',
	'contrib-tracking-submitting' => 'Отправка обработчику платежей…',
	'contrib-tracking-continue' => 'Если Вы не были автоматически перенаправлены, нажмите на кнопку, чтобы завершить Ваше пожертвование.',
	'contrib-tracking-redirect' => 'Вы будете автоматически перенаправлены для завершения вашего пожертвования.',
	'contrib-tracking-button' => 'Продолжить',
	'contrib-tracking-item-name-onetime' => 'Единовременный взнос',
	'contrib-tracking-item-name-recurring' => 'Ежемесячный взнос',
	'contrib-tracking-fundraiser-maintenance-header' => 'Временно отключён для технического обслуживания',
	'contrib-tracking-fundraiser-maintenance-notice' => 'В настоящее время происходит техническое обслуживание и мы не способны принимать пожертвования. Пожалуйста, попробуйте позже. Если у вас есть какие-либо вопросы, напишите по адресу $1.',
);

/** Rusyn (русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'contributiontracking-desc' => 'Слїдованя фінанчных приспівків почас кампанї фонду Вікімедія',
	'contributiontracking' => 'Слїдованя приспевків',
	'contrib-tracking-error' => 'Хыба',
	'contrib-tracking-error-text' => 'Одосланый формуларь не быв правилно выповненый',
	'contrib-tracking-submitting' => 'Платба ся одосылать про спрацованя ...',
	'contrib-tracking-continue' => 'Як не будете автоматічно напрамленый(а), кликните на клапку, жебы сьте міг(ла) докінчіти свій приспевок за помочі службы PayPal.', # Fuzzy
	'contrib-tracking-redirect' => 'Про докібчіня приспевку будете автоматічно напрамлены на PayPal.', # Fuzzy
	'contrib-tracking-button' => 'Продовжовати',
	'contrib-tracking-item-name-onetime' => 'Єдноразове пожертвованя',
	'contrib-tracking-item-name-recurring' => 'Періодічне штомісячне пожертвованя',
);

/** Sakha (саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'contributiontracking-desc' => 'Викимедиаҕа киирбит үп ханна барбытын көрүү',
	'contributiontracking' => 'Үп хантан киирбитин көрүү',
	'contrib-tracking-error' => 'Алҕас',
	'contrib-tracking-error-text' => 'Форма сыыһа сигэнэр',
	'contrib-tracking-submitting' => 'Төлөбүрү таҥастааччыга ыытыы...',
	'contrib-tracking-continue' => 'Аптамаатынан наадалаах сиргэ тиийбэтэх буоллаххына, тимэҕи баттаан PayPal тиһилигин көмөтүнэн сиэртибэлээһиҥҥин түмүктээ.', # Fuzzy
	'contrib-tracking-redirect' => 'Сиэртибэлээһиҥҥин түмүктүүргэ аптамаатынан PayPal саайтыгар утаарыллыаҥ.', # Fuzzy
	'contrib-tracking-button' => 'Салгыы',
	'contrib-tracking-item-name-onetime' => 'Биир төлөбүрүнэн',
	'contrib-tracking-item-name-recurring' => 'Ый аайы төлөбүр',
);

/** Sicilian (sicilianu)
 * @author Aushulz
 */
$messages['scn'] = array(
	'contrib-tracking-button' => 'Camina',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 * @author බිඟුවා
 */
$messages['si'] = array(
	'contributiontracking-desc' => 'විකිමාධ්‍ය පුණ්‍යාධාරය සඳහා දායකත්ව ඉලියිම්',
	'contributiontracking' => 'දායකත්ව ඉලියිම්',
	'contrib-tracking-error' => 'දෝෂය',
	'contrib-tracking-error-text' => 'වලංගු නොවන ෆෝරම යොමුව',
	'contrib-tracking-submitting' => 'ගෙවීම් සකසනය වෙත යොමුකරමින්...',
	'contrib-tracking-redirect' => 'ඔබගේ පරිත්‍යාගය සම්පූර්ණ කිරීම සඳහා ඔබව ස්වයංක්‍රීයව යලි යොමු කරනු ඇත.',
	'contrib-tracking-button' => 'ඉදිරියට යන්න',
	'contrib-tracking-item-name-onetime' => 'එක්-වතාවක පරිත්‍යාගය',
	'contrib-tracking-item-name-recurring' => 'ප්‍රත්‍යාවර්තී මාසික පරිත්‍යාගය',
	'contrib-tracking-fundraiser-maintenance-header' => 'නඩත්තුව සඳහා තාවකාලිකව මැඩපවත්වා ඇත',
);

/** Slovak (slovenčina)
 * @author Helix84
 * @author Teslaton
 */
$messages['sk'] = array(
	'contributiontracking-desc' => 'Sledovanie príspevkov fundraisingu nadácie Wikimedia',
	'contributiontracking' => 'Sledovanie príspevkov',
	'contrib-tracking-error' => 'Chyba',
	'contrib-tracking-error-text' => 'Zaslaný neplatný obsah formulára',
	'contrib-tracking-submitting' => 'Odosiela sa na spracovanie platieb...',
	'contrib-tracking-continue' => 'Ak nebudete automaticky presmerovaný, kliknite na tlačidlo, čím dokončíte váš príspevok.',
	'contrib-tracking-redirect' => 'Pre dokončenie príspevku budete automaticky presmerovaný.',
	'contrib-tracking-button' => 'Pokračovať',
	'contrib-tracking-item-name-onetime' => 'Jednorazový dar',
	'contrib-tracking-item-name-recurring' => 'Opakovaný mesačný dar',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'contributiontracking-desc' => 'Sledenje prispevkov za zbiralca sredstev Wikimedie',
	'contributiontracking' => 'Sledenje prispevkov',
	'contrib-tracking-error' => 'Napaka',
	'contrib-tracking-error-text' => 'Neveljavni oddan obrazec',
	'contrib-tracking-submitting' => 'Pošiljanje predelovalcu plačil ...',
	'contrib-tracking-continue' => 'Če niste samodejno preusmerjeni, kliknite gumb, da dokončate svoj prispevek.',
	'contrib-tracking-redirect' => 'Samodejno boste preusmerjeni za dokončanje vašega prispevka.',
	'contrib-tracking-button' => 'Nadaljuj',
	'contrib-tracking-item-name-onetime' => 'Enkratni prispevek',
	'contrib-tracking-item-name-recurring' => 'Ponavljajoči se mesečni prispevki',
	'contrib-tracking-fundraiser-maintenance-header' => 'Trenutno ne deluje zaradi vzdrževalnih del',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Trenutno izvajamo načrtovana vzdrževalna dela in ne moremo sprejemati donacij.  Prosimo, kmalu poskusite znova.  Če imate kakršna koli vprašanja, nam pišite na $1.',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 * @author Јованвб
 */
$messages['sr-ec'] = array(
	'contributiontracking-desc' => 'Праћење дарованих прилога за програм прикупљања средстава Викимедије',
	'contributiontracking' => 'Праћење доприноса',
	'contrib-tracking-error' => 'Грешка',
	'contrib-tracking-error-text' => 'Неисправно подношење обрасца',
	'contrib-tracking-submitting' => 'Шаљем обрасцу за плаћање…',
	'contrib-tracking-continue' => 'Ако не будете преусмерени, кликните на дугме да завршите давање прилога.',
	'contrib-tracking-redirect' => 'Бићете преусмерени да бисте завршили давање прилога.',
	'contrib-tracking-button' => 'Настави',
	'contrib-tracking-item-name-onetime' => 'Једнократан прилог',
	'contrib-tracking-item-name-recurring' => 'Месечни прилог',
	'contrib-tracking-fundraiser-maintenance-header' => 'Привремено недоступно ради одржавања',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Michaello
 */
$messages['sr-el'] = array(
	'contributiontracking-desc' => 'Praćenje darovanih priloga za program prikupljanja sredstava Vikimedije',
	'contributiontracking' => 'Praćenje doprinosa',
	'contrib-tracking-error' => 'Greška',
	'contrib-tracking-error-text' => 'Neispravno podnošenje obrasca',
	'contrib-tracking-submitting' => 'Šaljem obrascu za plaćanje…',
	'contrib-tracking-continue' => 'Ako ne budete preusmereni, kliknite na dugme da završite davanje priloga.',
	'contrib-tracking-redirect' => 'Bićete preusmereni da biste završili davanje priloga.',
	'contrib-tracking-button' => 'Nastavi',
	'contrib-tracking-item-name-onetime' => 'Jednokratan prilog',
	'contrib-tracking-item-name-recurring' => 'Mesečni prilog',
);

/** Swedish (svenska)
 * @author Ainali
 * @author Boivie
 * @author Tobulos1
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'contributiontracking-desc' => 'Bidragsspårning för Wikimedia-insamlingen',
	'contributiontracking' => 'Bidragsspårning',
	'contrib-tracking-error' => 'Fel',
	'contrib-tracking-error-text' => 'Ogiltigt skickande av formulär',
	'contrib-tracking-submitting' => 'Skickar till betalningshanterare...',
	'contrib-tracking-continue' => 'Om du omdirigeras automatiskt, klicka på knappen för att slutföra din donation.',
	'contrib-tracking-redirect' => 'Du kommer att omdirigeras automatiskt för att slutföra din donation.',
	'contrib-tracking-button' => 'Fortsätt',
	'contrib-tracking-item-name-onetime' => 'Engångs-donation',
	'contrib-tracking-item-name-recurring' => 'Återkommande månatlig donation',
	'contrib-tracking-fundraiser-maintenance-header' => 'Tillfälligt nere för underhåll',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Vi utför planerat underhåll och inte kan ta emot donationer.  Försök igen snart.  Om du har några frågor, vänligen maila $1.',
);

/** Swahili (Kiswahili)
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'contributiontracking-desc' => 'Ufuatiliaji wa mchango kwa ajili ya uchangishaji fedha kwa Wikimedia',
	'contributiontracking' => 'Ufuatiliaji wa mchango',
	'contrib-tracking-error' => 'Hitilafu',
	'contrib-tracking-error-text' => 'Kuwasilisha kwa fomu ni batili',
	'contrib-tracking-submitting' => 'Inawasilisha kwa prosesa ya malipo...',
	'contrib-tracking-continue' => 'Kama hautaelekezwa mara moja kwa moja, bonyeza lkitufe ili kukamilisha mchango wako.',
	'contrib-tracking-redirect' => 'Utaelekezwa mara moja kwa moja kukamilisha mchango wako.',
	'contrib-tracking-button' => 'Endelea',
	'contrib-tracking-item-name-onetime' => 'Mchango wa wakati mmoja',
	'contrib-tracking-item-name-recurring' => 'Mchango wa mara kwa mara kila mwezi',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author TRYPPN
 */
$messages['ta'] = array(
	'contrib-tracking-error' => 'தவறு',
	'contrib-tracking-button' => 'தொடரவும்',
	'contrib-tracking-item-name-onetime' => 'ஒருதடவையிலான நன்கொடை',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'contrib-tracking-error' => 'పొరపాటు',
	'contrib-tracking-continue' => 'స్వయంచాలకంగా మిమ్మల్ని దారి మళ్ళించకపోతే, మీ విరాళాన్ని పూర్తిచెయ్యడానికి మీరే బొత్తాన్ని నొక్కండి.',
	'contrib-tracking-button' => 'కొనసాగించు',
);

/** Tajik (Cyrillic script) (тоҷикӣ)
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'contrib-tracking-error' => 'Хато',
	'contrib-tracking-button' => 'Идома',
);

/** Tajik (Latin script) (tojikī)
 * @author Liangent
 */
$messages['tg-latn'] = array(
	'contrib-tracking-error' => 'Xato',
	'contrib-tracking-button' => 'Idoma',
);

/** Thai (ไทย)
 * @author Korrawit
 * @author Woraponboonkerd
 */
$messages['th'] = array(
	'contrib-tracking-error' => 'เกิดความผิดพลาด',
	'contrib-tracking-submitting' => 'กำลังส่งไปยังผู้ดำเนินการจ่ายเงิน...',
	'contrib-tracking-continue' => 'ถ้าคุณยังไม่ได้ถูกนำทางไปหน้าอื่นโดยอัตโนมัติ คลิกที่ปุ่มเพื่อเสร็จสิ้นการบริจาคที่ PayPal', # Fuzzy
	'contrib-tracking-button' => 'ดำเนินการต่อ',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 */
$messages['tk'] = array(
	'contributiontracking-desc' => 'Wikimedia fond ýygnaýjysy üçin bagyş trekingi',
	'contributiontracking' => 'Goşant trekingi',
	'contrib-tracking-error' => 'Säwlik',
	'contrib-tracking-error-text' => 'Nädogry form tabşyrmasy',
	'contrib-tracking-submitting' => 'Töleg işleýjä tabşyrylýar...',
	'contrib-tracking-continue' => 'Eger awtomatik gönükdirilmeseňiz, PayPal-däki bagyşyňyzy tamamlamak üçin düwmäni tykladyň.', # Fuzzy
	'contrib-tracking-button' => 'Dowam et',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 * @author Sky Harbor
 */
$messages['tl'] = array(
	'contributiontracking-desc' => 'Pagsunod sa bakas (pagtugaygay) para sa pangangalap ng salaping panustos (pondo) ng Wikimedia',
	'contributiontracking' => 'Pagtugaygay/pagsunod sa bakas ng ambag',
	'contrib-tracking-error' => 'Kamalian',
	'contrib-tracking-error-text' => 'Hindi tanggap na anyo/pormularyo ng pagpasa',
	'contrib-tracking-submitting' => 'Ipinapasa/ipinapadala sa tagapagsagawa (tagaproseso) ng bayad...',
	'contrib-tracking-continue' => 'Kapag hindi ka kusang naihatid sa ibang kapupuntahan, pindutin ang pindutan upang mabuo ang iyong abuloy.',
	'contrib-tracking-redirect' => 'Kusa kang ihahatid sa ibang kapupuntahan upang mabuo ang donasyon mo.',
	'contrib-tracking-button' => 'Magpatuloy',
	'contrib-tracking-item-name-onetime' => 'Abuloy na pang-isang pagkakataon',
	'contrib-tracking-item-name-recurring' => 'Umuulit na buwanang ambag',
);

/** Turkish (Türkçe)
 * @author Joseph
 * @author Suelnur
 */
$messages['tr'] = array(
	'contributiontracking-desc' => 'Vikimedya fonsağlayıcı için katkı izlemesi',
	'contributiontracking' => 'Katkı izlemesi',
	'contrib-tracking-error' => 'Hata',
	'contrib-tracking-error-text' => 'Geçersiz form teslimi',
	'contrib-tracking-submitting' => 'Ödeme işlemcisine gönderiliyor...',
	'contrib-tracking-continue' => 'Otomatik olarak yönlendirilmediyseniz, bağışınızı tamamlamak için düğmeye tıklayın.',
	'contrib-tracking-redirect' => 'Bağışınızı tamamlamak üzere otomatik olarak yönlendirileceksiniz.',
	'contrib-tracking-button' => 'Devam et',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'contrib-tracking-error' => 'خاتالىق',
	'contrib-tracking-button' => 'داۋاملاشتۇر',
);

/** Ukrainian (українська)
 * @author Aleksandrit
 * @author Ата
 * @author Тест
 */
$messages['uk'] = array(
	'contributiontracking-desc' => 'Відстеження збору пожертвувань на користь Вікімедіі',
	'contributiontracking' => 'Відстеження збору пожертвувань',
	'contrib-tracking-error' => 'Помилка',
	'contrib-tracking-error-text' => 'Неправильне підпорядкування форми',
	'contrib-tracking-submitting' => 'Відправка оброблювачеві платежів...',
	'contrib-tracking-continue' => 'Якщо ви не були автоматично перенаправлені, натисніть на кнопку, щоб завершити вашу пожертву.',
	'contrib-tracking-redirect' => 'Ви будете автоматично перенаправлені для завершення вашого пожертвування.',
	'contrib-tracking-button' => 'Продовжити',
	'contrib-tracking-item-name-onetime' => 'Одноразове пожертвування',
	'contrib-tracking-item-name-recurring' => 'Періодичне щомісячне пожертвування',
	'contrib-tracking-fundraiser-maintenance-header' => 'Тимчасово відключений для технічного обслуговування',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Ми зараз виконуємо заплановане обслуговування і не в змозі прийняти пожертвувань. Будь ласка, спробуйте ще раз трохи згодом. Якщо у Вас є якісь запитання, будь ласка, напишіть на $1 .',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'contributiontracking' => 'شراکت سے باخبر رہنا',
	'contrib-tracking-error' => 'غلطی',
	'contrib-tracking-error-text' => 'باطل فارم پیش',
	'contrib-tracking-button' => 'جاری رکھیں',
	'contrib-tracking-item-name-onetime' => 'ایک ٹائم عطیہ',
	'contrib-tracking-item-name-recurring' => 'بار بار چلنے والی ماہانہ عطیہ',
);

/** vèneto (vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'contributiontracking-desc' => 'Traciamento dei contributi par la racolta fondi Wikimedia',
	'contributiontracking' => 'Traciamento dei contributi',
	'contrib-tracking-error' => 'Eròr',
	'contrib-tracking-error-text' => 'Invio de modulo mia valido',
	'contrib-tracking-submitting' => "So' drio contatar el processador del pagamento...",
	'contrib-tracking-continue' => 'Se no te vien reindirissà automaticamente, struca el boton par conpletar la to donassion su PayPal.', # Fuzzy
	'contrib-tracking-button' => 'Và vanti',
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'contributiontracking-desc' => 'Rahoidenkeradusen WikiMediale kaclend',
	'contributiontracking' => 'Lahjoičendan kaclend',
	'contrib-tracking-error' => 'Petuz',
	'contrib-tracking-error-text' => 'Forman vär alištuz',
	'contrib-tracking-submitting' => 'Oigendamine maksuiden processorale...',
	'contrib-tracking-continue' => 'Ku teid ei udesoigendanuded avtomatižešti, paindat kingiteshe, miše tehta lahjočend.',
	'contrib-tracking-redirect' => 'Teid kaimdas avtomatižešti, miše tö voižit tehta tond',
	'contrib-tracking-button' => 'Jatkta',
	'contrib-tracking-item-name-onetime' => 'Kerdaline tond',
	'contrib-tracking-item-name-recurring' => 'Kuine tond',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'contributiontracking-desc' => 'Dò đóng góp cho chương trình gây quỹ Wikimedia',
	'contributiontracking' => 'Dò đóng góp',
	'contrib-tracking-error' => 'Lỗi',
	'contrib-tracking-error-text' => 'Đăng mẫu sau quy cách',
	'contrib-tracking-submitting' => 'Đang đăng bộ xử lý tính tiền...',
	'contrib-tracking-continue' => 'Nếu không được tự động đổi hướng, nhấn vào nút để hoàn thành quyên góp của bạn.',
	'contrib-tracking-redirect' => 'Bạn sẽ được tự động chuyển hướng để hoàn thành đóng góp của bạn.',
	'contrib-tracking-button' => 'Tiếp tục',
	'contrib-tracking-item-name-onetime' => 'Quyên góp một lần',
	'contrib-tracking-item-name-recurring' => 'Quyên góp định kỳ hàng tháng',
	'contrib-tracking-fundraiser-maintenance-header' => 'Tạm ngừng hoạt động để bảo trì',
	'contrib-tracking-fundraiser-maintenance-notice' => 'Chúng tôi hiện đang thực hiện những công việc bảo trì định kỳ nên không nhận được tiền đóng góp. Xin vui lòng thử lại sau. Nếu bạn có thắc mắc, xin gửi thư điện tử cho $1.',
);

/** Volapük (Volapük)
 * @author Smeira
 */
$messages['vo'] = array(
	'contrib-tracking-error' => 'Pöl',
	'contrib-tracking-error-text' => 'Fometised no lonöföl',
	'contrib-tracking-button' => 'Föfiö!',
);

/** Yiddish (ייִדיש)
 * @author Imre
 * @author פוילישער
 */
$messages['yi'] = array(
	'contrib-tracking-error' => 'גרײַז',
	'contrib-tracking-button' => 'פֿארזעצן',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Chenzw
 * @author Hydra
 * @author Liangent
 * @author Wilsonmess
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'contributiontracking-desc' => '跟踪维基媒体筹款的贡献',
	'contributiontracking' => '跟踪的贡献',
	'contrib-tracking-error' => '错误',
	'contrib-tracking-error-text' => '无效的表单提交',
	'contrib-tracking-submitting' => '正在提交到支付处理器……',
	'contrib-tracking-continue' => '若阁下没有被重定向，请点击按钮以完成您的捐助。',
	'contrib-tracking-redirect' => '您将被自动重定向来完成你的捐款。',
	'contrib-tracking-button' => '继续',
	'contrib-tracking-item-name-onetime' => '一次性捐赠',
	'contrib-tracking-item-name-recurring' => '每月定期捐款',
	'contrib-tracking-fundraiser-maintenance-header' => '暂时停机维护',
	'contrib-tracking-fundraiser-maintenance-notice' => '我们目前正在进行计划性的维护，因此目前不能接受捐赠。请稍后再试。如果您有任何疑问，请发邮件到$1。',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Liangent
 * @author Mark85296341
 */
$messages['zh-hant'] = array(
	'contributiontracking-desc' => '追蹤維基媒體籌款的貢獻',
	'contributiontracking' => '追蹤的貢獻',
	'contrib-tracking-error' => '錯誤',
	'contrib-tracking-error-text' => '無效的表單提交',
	'contrib-tracking-submitting' => '正在提交到支付處理器……',
	'contrib-tracking-continue' => '若閣下沒有被重定向，請點擊按鈕以完成您的捐助。',
	'contrib-tracking-redirect' => '您將被自動重定向來完成你的捐款。',
	'contrib-tracking-button' => '繼續',
	'contrib-tracking-item-name-onetime' => '一次性捐助',
	'contrib-tracking-item-name-recurring' => '每月定期捐款',
);

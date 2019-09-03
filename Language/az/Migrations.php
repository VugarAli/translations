<?php

/**
 * Migration language strings.
 *
 * @package      CodeIgniter
 * @author       CodeIgniter Dev Team
 * @copyright    2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 3.0.0
 * @filesource
 * 
 * @codeCoverageIgnore
 */
return [
	// Migration Runner
	'missingTable'    => 'Miqrasiya cədvəlini göstərin.',
	'invalidType'     => 'Yanlış miqrasiya nömrələmə növü: {0}',
	'disabled'        => 'Köçürmə yükləndi, lakin aktiv edilmədi və ya səhv quraşdırıldı.',
	'notFound'        => 'Miqrasiya faylı tapılmadı: ',
	'empty'           => 'Köçürmə faylları tapılmadı.',
	'gap'             => 'Bu versiya nömrəsinin yaxınlığında miqrasiya növbəsində boşluq var: ',
	'classNotFound'   => 'Miqrasiya sinifi "%s" tapılmadı.',
	'missingMethod'   => 'Miqrasiya sinifinin "%s" metodu əksikdir.',

	// Migration Command
	'migHelpLatest'   => "\t\tBazanı ən son miqrasiya versiyasına köçürür.",
	'migHelpCurrent'  => "\t\tBaza tənzimləmələrində 'current' (mövcud) olaraq göstərilən versiyaya köçürür.",
	'migHelpVersion'  => "\tBazanı {v} bu versiyaya köçürür.",
	'migHelpRollback' => "\tBütün köçləri 0 versiyasına endirir.",
	'migHelpRefresh'  => "\t\tVerilənlər bazasını yeniləmək üçün bütün köçləri çıxarır və yenidən işə salır.",
	'migHelpSeed'     => "\t[name] adlı toxumlayıcını işə salın.",
	'migCreate'       => "\t[name] adlı yeni bir miqrasiya yaradın.",
	'nameMigration'   => "Miqrasiya faylına bir ad verin.",
	'badCreateName'   => 'Bir miqrasiya faylı adı göstərməlisiniz.',
	'writeError'      => 'Yazma xətası səbəbi ilə fayl yaradıla bilmədi.',

	'toLatest'          => 'Son versiyaya köçürülür...',
	'migInvalidVersion' => 'Etibarsız versiya nömrəsi göstərildi.',
	'toVersionPH'       => '%s versiyasına köçürülür...',
	'toVersion'         => 'Mövcud versiyaya köçürülür....',
	'rollingBack'       => "Bütün miqrasiyalar geri qaytarılır...",
	'noneFound'         => 'Hərhansı bir miqrasiya tapılmadı.',
	'on'                => 'Köçürüldü: ',
	'migSeeder'         => 'Toxumlayıcı adı',
	'migMissingSeeder'  => 'Toxumlayıcı adı göstərməlisiniz.',
	'removed'           => 'Geri qaytarılır: ',
	'added'             => 'İşə salınır: ',

	'version'           => 'Versiya',
	'filename'          => 'Fayl adı',
];

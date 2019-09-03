<?php

/**
 * Validation language strings.
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
	// Core Messages
	'noRuleSets'            => 'Qayda dəsti təsdiqləmə parametrlərində müəyyən edilməyib.',
	'ruleNotFound'          => '{0} etibarlı qayda deyil.',
	'groupNotFound'         => '{0} etibarlı qayda qrupu deyil.',
	'groupNotArray'         => '{0} qayda qrupu massiv olmalıdır.',
	'invalidTemplate'       => '{0} etibarlı şablon deyil.',

	// Rule Messages
	'alpha'                 => '{field} sahəsində yalnız əlifba işarələri ola bilər.',
	'alpha_dash'            => '{field} sahəsində yalnız hərflər, nömrələr, alt altlar və tire ola bilər.',
	'alpha_numeric'         => '{field} sahəsində yalnız hərf və rəqəmlər ola bilər.',
	'alpha_numeric_space'   => '{field} sahəsində yalnız hərf, rəqəm və boşluq ola bilər.',
	'alpha_space'  			=> '{field} sahəsində yalnız hərf və boşluq ola bilər.',
	'decimal'               => '{field} sahəsində bir rəqəm olmalıdır.',
	'differs'               => '{field} sahəsi {param} sahəsindən fərqli olmalıdır.',
	'exact_length'          => '{field} sahəsi {param} simvol uzunluğunda olmalıdır.',
	'greater_than'          => '{field} sahəsi {param} dən büyük dəyər olmalıdır.',
	'greater_than_equal_to' => '{field} sahəsi {param} dən büyük və ya bərabər dəyər olmalıdır.',
	'in_list'               => '{field} sahəsi bunlardan biri olmalıdır: {param}.',
	'integer'               => '{field} sahəsində tam ədəd olmalıdır.',
	'is_natural'            => '{field} sahəsində yalnız rəqəmlər olmalıdır.',
	'is_natural_no_zero'    => '{field} sahəsində yalnız rəqəmlər olmalıdır və sıfırdan böyük olmalıdır.',
	'is_unique'             => '{field} sahəsində unikal bir dəyər olmalıdır.',
	'less_than'             => '{field} sahəsində {param} -dan kiçik say olmalıdır.',
	'less_than_equal_to'    => '{field} sahəsində {parametr} -dən az və ya bərabər olan bir sıra olmalıdır.',
	'matches'               => '{field} sahə {param} ilə eyni olmamalıdır.',
	'max_length'            => '{field} sahə {parametr} simvollarından çox ola bilməz.',
	'min_length'            => '{field} sahəsində ən azı {param} simvol olmalıdır.',
	'numeric'               => '{field} sahəsində yalnız nömrələr olmalıdır.',
	'regex_match'           => '{field} Sahə düzgün formatda deyil.',
	'required'              => '{field} yer tələb olunur.',
	'required_with'         => '{param} olduqda {field} sahəsi də olmalıdır.',
	'required_without'      => '{param} olmadıqda {field} sahəsi tələb olunur.',
	'timezone'              => '{field} sahəsi etibarlı vaxt zonası olmalıdır.',
	'valid_base64'          => '{field} sahəsi etibarlı base64 sıra olmalıdır.',
	'valid_email'           => '{field} sahəsində etibarlı e-poçt ünvanı olmalıdır.',
	'valid_emails'          => '{field} sahəsində etibarlı e-poçt ünvanları olmalıdır.',
	'valid_ip'              => '{field} sahəsində etibarlı IP olmalıdır.',
	'valid_url'             => '{field} sahəsində etibarlı URL olmalıdır.',
	'valid_date'            => '{field} sahəsində etibarlı tarix olmalıdır.',

	// Credit Cards
	'valid_cc_num'          => '{field} etibarlı kredit kartı nömrəsi deyil.',

	// Files
	'uploaded'              => '{field} etibarlı yüklənmiş fayl deyil.',
	'max_size'              => '{field} çox böyük fayl.',
	'is_image'              => '{field} etibarlı yüklənmiş şəkil faylı deyil.',
	'mime_in'               => '{field} sahəsində düzgün fayl növü yoxdur.',
	'ext_in'                => '{field} sahəsində düzgün fayl tipi yoxdur.',
	'max_dims'              => '{field} şəkil deyil və ya çox geniş və ya uzundur.',
];

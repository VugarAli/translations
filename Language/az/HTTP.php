<?php

/**
 * HTTP language strings.
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
	// CurlRequest
	'missingCurl'                => 'CURLRequest sinifini istifadə etmək CURL üçün aktiv olmalıdır.',
	'invalidSSLKey'              => 'SSL Açarı müəyyən etmək olmur. {0} etibarsız fayl',
	'sslCertNotFound'            => 'SSL sertifikatı {0} \'da tapılmadı.',
	'curlError'                  => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType'     => '{0} etibarsız bazarlıq növü. Aşağıdakılardan biri olmalıdır: media, charset, kodlaşdırma, dil.',

	// Message
	'invalidHTTPProtocol'        => 'Yanlış HTTP protokol versiyası. Bunlardan biri olmalıdır: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'TDanışıqlarda dəstəklənən dəyərlər dəstini göstərməlisiniz.',

	// RedirectResponse
	'invalidRoute'               => '{0, string} etibarsız yol',

	// Response
	'missingResponseStatus'      => 'HTTP Cavab statusu kodu yoxdur.',
	'invalidStatusCode'          => '{0, string} etibarsız HTTP cavab status kodu',
	'unknownStatusCode'          => 'Naməlum HTTP status kodu: {0}',

	// URI
	'cannotParseURI'             => 'URI təhlil edilmədi: {0}',
	'segmentOutOfRange'          => 'Tələb olunan URI bölməsi aralığın xaricindədir: {0}',
	'invalidPort'                => 'Portlar 0 və 65535 aralığında olmalıdır. Verilən: {0}',
	'malformedQueryString'       => 'Sorğu sətirlərində URI bölmələri olmamalıdır.',

	// Page Not Found
	'pageNotFound'               => 'Səhifə tapılmadı.',
	'emptyController'            => 'Controller göstərilməyib.',
	'controllerNotFound'         => 'Controller və ya metod tapılmadı: {0}::{1}',
	'methodNotFound'             => 'Controller metodu tapılmadı: {0}',

	// CSRF
	'disallowedAction'           => 'Tələb olunan hərəkətə icazə verilmir.',
	
	// Uploaded file moving
	'alreadyMoved'				 => 'Yüklənmiş fayl artıq köçürülmüşdür.',
	'invalidFile'				 => 'Orijinal sənəd etibarsız bir sənəddir.',
	'moveFailed'				 => '{0} faylı {1} ({2}) yə köçürülür.',
];

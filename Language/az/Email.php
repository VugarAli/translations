<?php

/**
 * Email language strings.
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
	'mustBeArray'          => 'E-poçt yoxlanışına massiv verilməlidir.',
	'invalidAddress'       => 'Etibarsız e-poçt ünvanı: {0}',
	'attachmentMissing'    => 'E-poçt qoşması tapılmadı: {0}',
	'attachmentUnreadable' => 'E-poçt qoşması aça bilmədi: {0}',
	'noFrom'               => '"From" başlığı olmadan email göndərilə bilməz.',
	'noRecipients'         => 'Alıcıları göstərməlisiniz: To, Cc, veya Bcc',
	'sendFailurePHPMail'   => 'PHP mail() İstifadə edərək e-poçt göndərmək olmur. Bu metodla e-poçt göndərmək üçün serveriniz qurulmamışdır.',
	'sendFailureSendmail'  => 'PHP Sendmail İstifadə edərək e-poçt göndərmək olmur. Bu metodla e-poçt göndərmək üçün serveriniz qurulmamışdır.',
	'sendFailureSmtp'      => 'PHP SMTP İstifadə edərək e-poçt göndərmək olmur. Bu metodla e-poçt göndərmək üçün serveriniz qurulmamışdır.',
	'sent'                 => 'Mesajınız {0, string} protokolu istifadə edərək uğurla göndərildi.',
	'noSocket'             => 'Sendmail soketi açılmır. Zəhmət olmasa tənzimləmələri yoxlayın.',
	'noHostname'           => 'SMTP server adı göstərməlisiniz.',
	'SMTPError'            => 'SMTP xətası alındı: {0}',
	'noSMTPAuth'           => 'Xəta: SMTP istifadəçi adı və şifrə göstərməlisiniz.',
	'failedSMTPLogin'      => 'AUTH LOGIN əmri göndərilə bilmədi. Xəta: {0}',
	'SMTPAuthUsername'     => 'İstifadəçi adı yanlışdır. Xəta: {0}',
	'SMTPAuthPassword'     => 'Şifrə yanlışdır Xəta: {0}',
	'SMTPDataFailure'      => 'Məlumat göndərilə bilmədi: {0}',
	'exitStatus'           => 'Çıxış kodu: {0}',
];

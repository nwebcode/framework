<?php
/**
 * Nweb Framework
 *
 * @category    NwebFramework
 * @package     Http
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @license     http://www.gnu.org/licenses/lgpl-3.0.txt  GNU Lesser General Public
 * @version     0.1-dev
 * @link        https://github.com/nwebcode/framework
 * @link        http://framework.nweb.pl
 */

namespace Nweb\Framework\Http\Response;

/**
 * HTTP Response Code
 *
 * @category    NwebFramework
 * @package     Http
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 * @link http://www.faqs.org/rfcs/rfc2616
 */
class Code
{
    /**
     * @link http://www.faqs.org/rfcs/rfc2616
     * @var int
     */
     const OK = 200;
     const CREATED = 201;
     const ACCEPTED = 202;
     const NON_AUTHORITATIVE_INFORMATION = 203;
     const NO_CONTENT = 204;
     const RESET_CONTENT = 205;
     const PARTIAL_CONTENT = 206;
     const MULTIPLE_CHOICES = 300;
     const MOVED_PERMANENTLY = 301;
     const FOUND = 302;
     const SEE_OTHER = 303;
     const NOT_MODIFIED = 304;
     const USE_PROXY = 305;
     const TEMPORARY_REDIRECT = 307;
     const BAD_REQUEST = 400;
     const UNAUTHORIZED = 401;
     const PAYMENT_REQUIRED = 402;
     const FORBIDDEN = 403;
     const NOT_FOUND = 404;
     const METHOD_NOT_ALLOWED = 405;
     const NOT_ACCEPTABLE = 406;
     const PROXY_AUTHENTICATION_REQUIRED = 407;
     const REQUEST_TIMEOUT = 408;
     const CONFLICT = 409;
     const GONE = 410;
     const LENGTH_REQUIRED = 411;
     const PRECONDITION_FAILED = 412;
     const REQUEST_ENTITY_TOO_LARGE = 413;
     const REQUEST_URI_TOO_LONG = 414;
     const UNSUPPORTED_MEDIA_TYPE = 415;
     const REQUESTED_RANGE_NOT_SATISFIABLE = 416;
     const EXPECTATION_FAILED = 417;
     const INTERNAL_SERVER_ERROR = 500;
     const NOT_IMPLEMENTED = 501;
     const BAD_GATEWAY = 502;
     const SERVICE_UNAVAILABLE = 503;
     const GATEWAY_TIMEOUT = 504;
     const HTTP_VERSION_NOT_SUPPORTED = 505;

     /**
      * @link http://www.faqs.org/rfcs/rfc2616
      * @var array
      */
     public static $httpCodes = array(
         100 => 'Continue',
         101 => 'Switching Protocols',
         102 => 'Processing',
         200 => 'OK',
         201 => 'Created',
         202 => 'Accepted',
         203 => 'Non-Authoritative Information',
         204 => 'No Content',
         205 => 'Reset Content',
         206 => 'Partial Content',
         207 => 'Multi-Status',
         300 => 'Multiple Choices',
         301 => 'Moved Permanently',
         302 => 'Found',
         303 => 'See Other',
         304 => 'Not Modified',
         305 => 'Use Proxy',
         306 => 'Switch Proxy',
         307 => 'Temporary Redirect',
         400 => 'Bad Request',
         401 => 'Unauthorized',
         402 => 'Payment Required',
         403 => 'Forbidden',
         404 => 'Not Found',
         405 => 'Method Not Allowed',
         406 => 'Not Acceptable',
         407 => 'Proxy Authentication Required',
         408 => 'Request Timeout',
         409 => 'Conflict',
         410 => 'Gone',
         411 => 'Length Required',
         412 => 'Precondition Failed',
         413 => 'Request Entity Too Large',
         414 => 'Request-URI Too Long',
         415 => 'Unsupported Media Type',
         416 => 'Requested Range Not Satisfiable',
         417 => 'Expectation Failed',
         418 => 'I\'m a teapot',
         422 => 'Unprocessable Entity',
         423 => 'Locked',
         424 => 'Failed Dependency',
         425 => 'Unordered Collection',
         426 => 'Upgrade Required',
         449 => 'Retry With',
         450 => 'Blocked by Windows Parental Controls',
         500 => 'Internal Server Error',
         501 => 'Not Implemented',
         502 => 'Bad Gateway',
         503 => 'Service Unavailable',
         504 => 'Gateway Timeout',
         505 => 'HTTP Version Not Supported',
         506 => 'Variant Also Negotiates',
         507 => 'Insufficient Storage',
         509 => 'Bandwidth Limit Exceeded',
         510 => 'Not Extended'
     );
}
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
 * HTTP Response Cookie
 *
 * @category    NwebFramework
 * @package     Http
 * @author      Krzysztof Kardasz <krzysztof@kardasz.eu>
 * @copyright   Copyright (c) 2013 Krzysztof Kardasz
 * @version     0.1-dev
 * @link        http://www.faqs.org/rfcs/rfc2616
 */
class Cookie
{
    /**
     * Cookie fields
     */
    const NAME      = 'name';
    const VALUE     = 'value';
    const EXPIRE    = 'expire';
    const PATH      = 'path';
    const DOMAIN    = 'domain';
    const SECURE    = 'secure';
    const HTTP_ONLY = 'httpOnly';

    /**
     * @var array
     */
    protected $params = array(
        self::PATH      => '/',
        self::EXPIRE    => 0,
        self::HTTP_ONLY => true
    );

    /**
     * @param string $name
     * @param string $value
     * @param array $params
     */
    public function __construct($name, $value, array $params = array())
    {
        $this->params = array_merge(
            $this->params, $params,
            array(
                self::NAME  => (string)$name,
                self::VALUE => (string)$value,
            )
        );

        if (!isset($this->params[self::DOMAIN])) {
            $httpHost = $_SERVER['HTTP_HOST'];
            if (preg_match('/^(www\.)?(.*?)$/', $httpHost, $matches)) {
                $httpHost = '.' . $matches[2];
            }
            $this->params[self::DOMAIN] = $httpHost;
        }

        if (!isset($this->params[self::SECURE])) {
            $this->params[self::SECURE] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
        }
    }

    /**
     */
    public function send ()
    {
        setcookie(
            $this->params[self::NAME],
            $this->params[self::VALUE],
            $this->params[self::EXPIRE],
            $this->params[self::PATH],
            $this->params[self::DOMAIN],
            $this->params[self::SECURE],
            $this->params[self::HTTP_ONLY]
        );
    }
}
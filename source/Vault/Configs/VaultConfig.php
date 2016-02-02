<?php
/**
 * Spiral Framework.
 *
 * @license MIT
 * @author  Anton Titov (Wolfy-J)
 */
namespace Spiral\Vault\Configs;

use Spiral\Core\InjectableConfig;
use Spiral\Vault\VaultRoute;

/**
 * Configuration for Vault administration panel.
 */
class VaultConfig extends InjectableConfig
{
    /**
     * Configuration section.
     */
    const CONFIG = 'modules/vault';

    /**
     * Default permissions namespace.
     */
    const GUARD_NAMESPACE = 'vault';

    /**
     * @var array
     */
    protected $config = [
        'guardNamespace' => 'vault',

        //Default vault controller
        'controllers'    => [],
        'navigation'     => [],

        //Example: vault/users/addresses/1/remove/123
        'route'          => [
            'middlewares' => [],
            'pattern'     => 'vault[/<controller>[/<action>[/<id>[/<operation>[/<childID>]]]]]',
            'defaults'    => [],
            'matchHost'   => false,
        ]
    ];

    public function securityNamespace()
    {
        if (empty($this->config['guardNamespace'])) {
            return self::GUARD_NAMESPACE;
        }

        return $this->config['guardNamespace'];
    }

    /**
     * List of allowed vault controllers in a form alias => class.
     *
     * Example:
     * cms    => Vendor\CMSController::class,
     * system => Vault\SystemController::class
     *
     * @return array
     */
    public function controllers()
    {
        return $this->config['controllers'];
    }

    /**
     * Vault navigation structure including sections, permissions, titles and etc.
     *
     * @return array
     */
    public function navigationSections()
    {
        return $this->config['navigation'];
    }

    /**
     * @param string $name
     * @return VaultRoute
     */
    public function createRoute($name)
    {
        $config = $this->config['route'];

        $route = new VaultRoute($name, $config['pattern'], $config['defaults']);

        return $route->withHost($config['matchHost'])->withMiddleware($config['middlewares']);
    }
}
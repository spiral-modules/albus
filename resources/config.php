<?php
/**
 * Vault component configuration file. Attention, configs might include runtime code which
 * depended on environment values only.
 *
 * @see SecurityConfig
 */

return [
    /*
     * Every controller access will be checked under following permissions namespace. For example
     * access to TestController mounted under name "test" will be checked as "vault.test".
     */
    'guardNamespace' => 'vault',

    /*
     * List of controller classes associated with their alias to be available for vault. No other
     * controllers can be called.
     *
     * Vault checks access to controllers using high level permission "vault", make sure this
     * permissions is available for a needed user role.
     *
     * @see VaultCore
     */
    'controllers' => [
        'dashboard' => \Spiral\Vault\Controllers\DashboardController::class,

        /*{{controllers}}*/
    ],

    /*
     * Structure of vault navigation including sections, section icons, links, link badges
     * and permissions needed to view link. Link labels will be translated using i18n domain
     * "vault".
     */
    'navigation'  => [
        /*
         * Project overview and activity.
         */
        'activity' => [
            'title' => 'Overview and Activity',
            'icon'  => 'tab',
            'items' => [
                'dashboard' => [
                    //Navigation label
                    'title'    => 'Dashboard',

                    //Permission needed to show this navigation section
                    'requires' => 'vault.dashboard'
                ],
                /*{{navigation.activity}}*/
            ]
        ],

        /*{{navigation}}*/
    ],

    /*
     * Configuration for VaultRoute.
     */
    'route'       => [
        /*
        * Set of middleware classes to be applied for VaultRoute. Make sure to include AuthMiddleware
        * here!
        */
        'middlewares' => [
            /*{{middlewares}}*/
        ],

        /*
         * Simple replace vault with desired keyword (for example "admin") to specify vault url
         * namespace.
         */
        'pattern'     => 'vault[/<controller>[/<action>[/<id>[/<operation>[/<childID>]]]]]',

        /*
         * Default route values.
         */
        'defaults'    => [
            'controller' => 'dashboard'
        ],

        /*
         * Set this value to true in cases when route based on sub domain patten, for example:
         * vault.website.com[/<controller>[/<action>[/<id>[/<operation>[/<childID>]]]]]
         */
        'matchHost'   => false
    ]
];
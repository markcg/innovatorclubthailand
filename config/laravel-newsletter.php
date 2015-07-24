<?php

return [

    'mailChimp' => [

        /*
         * The api key of a MailChimp account. You can find yours here:
         * https://us10.admin.mailchimp.com/account/api-key-popup/
         */
        'apiKey' => '996deb24bf1169da8c2ff896ce2cacd5-us11',

        /*
         * Here you can define properties of the lists you want to
         * send campaigns.
         */
        'lists' => [

            /*
             * This key is used to identify this list. It can be used
             * in the various methods provided by this package.
             *
             * You can set it to any string you want and you can add
             * as many lists as you want.
             */
            'subscribers' => [

                /*
                 * A mail chimp list id. Check the mailchimp docs if you don't know
                 * how to get this value:
                 * http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id
                 */
                'id' => '8f1a2f41e0',

                /*
                 * These values will be used when creating a new campaign.
                 */
                'createCampaign' => [
                    'fromEmail' => '',
                    'fromName' => '',
                    'toName' => ''
                ],

                /*
                 * These values will be used when subscribing to a list.
                 */
                'subscribe' => [
                    'emailType' => 'html',
                    'requireDoubleOptin' => false,
                    'updateExistingUser' => false
                ],

                /*
                 * These values will be used when unsubscribing from a list.
                 */
                'unsubscribe' => [
                    'deletePermanently' => false,
                    'sendGoodbyeEmail' => false,
                    'sendUnsubscribeEmail' => false
                ],
            ],
        ],
    ],
];

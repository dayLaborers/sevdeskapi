<?php

return [
    /*
     * The sevDesk API v1 uses a token authentication.
     *
     * The token can be found on https://my.sevdesk.de.
     * settings –> user –> specific user
     */
    'apiToken' => env('SEV_DESK_TOKEN'),

    /*
     * Default values
     */
    'defaults' => [
        'part' => [
            'taxRate'      => 19,
            'stockEnabled' => false,
            'unit'         => 1,
            'stock'        => 0.0,
            'price'        => 0.0,
            'grossPrice'   => 0.0,
        ],
    ],

    /*
     * sevDesk API Endpoints
     * The basic URL contains four elements. BaseURL + Controller + Version + Model
     */
    'apiEndpoints' => [
        'contact'                    => 'https://my.sevdesk.de/api/v1/Contact/',
        'contactAddress'             => 'https://my.sevdesk.de/api/v1/ContactAddress/',
        'invoice'                    => 'https://my.sevdesk.de/api/v1/Invoice/',
        'invoicePosition'            => 'https://my.sevdesk.de/api/v1/InvoicePos/',
        'invoiceLog'                 => 'https://my.sevdesk.de/api/v1/InvoiceLog/',
        'order'                      => 'https://my.sevdesk.de/api/v1/Order/',
        'orderPosition'              => 'https://my.sevdesk.de/api/v1/OrderPos/',
        'orderLog'                   => 'https://my.sevdesk.de/api/v1/OrderLog/',
        'unity'                      => 'https://my.sevdesk.de/api/v1/Unity/',
        'task'                       => 'https://my.sevdesk.de/api/v1/Task/',
        'feed'                       => 'https://my.sevdesk.de/api/v1/Feed/',
        'part'                       => 'https://my.sevdesk.de/api/v1/Part/',
        'voucher'                    => 'https://my.sevdesk.de/api/v1/Voucher/',
        'voucherPos'                 => 'https://my.sevdesk.de/api/v1/VoucherPos/',
        'voucherLog'                 => 'https://my.sevdesk.de/api/v1/VoucherLog/',
        'paymentMethod'              => 'https://my.sevdesk.de/api/v1/PaymentMethod/',
        'discounts'                  => 'https://my.sevdesk.de/api/v1/Discounts/',
        'accountingContact'          => 'https://my.sevdesk.de/api/v1/AccountingContact/',
        'accountingType'             => 'https://my.sevdesk.de/api/v1/AccountingType/',
        'accountingSystemNumber'     => 'https://my.sevdesk.de/api/v1/AccountingSystemNumber/',
        'accountingCorrection'       => 'https://my.sevdesk.de/api/v1/AccountingCorrection/',
        'accountingIndex'            => 'https://my.sevdesk.de/api/v1/AccountingIndex/',
        'accountingSystem'           => 'https://my.sevdesk.de/api/v1/AccountingSystem/',
        'accountingChart'            => 'https://my.sevdesk.de/api/v1/AccountingChart/',
        'asset'                      => 'https://my.sevdesk.de/api/v1/Asset/',
        'assetPosition'              => 'https://my.sevdesk.de/api/v1/AssetPos/',
        'category'                   => 'https://my.sevdesk.de/api/v1/Category/',
        'checkAccount'               => 'https://my.sevdesk.de/api/v1/CheckAccount/',
        'checkAccountTransaction'    => 'https://my.sevdesk.de/api/v1/CheckAccountTransaction/',
        'checkAccountTransactionLog' => 'https://my.sevdesk.de/api/v1/CheckAccountTransactionLog/',
        'communicationWay'           => 'https://my.sevdesk.de/api/v1/CommunicationWay/',
        'communicationWayKey'        => 'https://my.sevdesk.de/api/v1/CommunicationWayKey/',
        'costCentre'                 => 'https://my.sevdesk.de/api/v1/CostCentre/',
        'currencyExchangeRate'       => 'https://my.sevdesk.de/api/v1/CurrencyExchangeRate/',
        'document'                   => 'https://my.sevdesk.de/api/v1/Document/',
        'documentFolder'             => 'https://my.sevdesk.de/api/v1/DocumentFolder/',
        'documentServer'             => 'https://my.sevdesk.de/api/v1/DocServer/',
        'documentIndex'              => 'https://my.sevdesk.de/api/v1/DocumentIndex/',
        'email'                      => 'https://my.sevdesk.de/api/v1/Email/',
        'help'                       => 'https://my.sevdesk.de/api/v1/Help/',
        'inventoryPartLog'           => 'https://my.sevdesk.de/api/v1/InventoryPartLog/',
        'tag'                        => 'https://my.sevdesk.de/api/v1/TagRelation/',
        'tagRelation'                => 'https://my.sevdesk.de/api/v1/Tag/',
        'objectUsed'                 => 'https://my.sevdesk.de/api/v1/ObjectUsed/',
        'objectViewed'               => 'https://my.sevdesk.de/api/v1/ObjectViewed/',
        'partUnity'                  => 'https://my.sevdesk.de/api/v1/PartUnity/',
        'partContactPrice'           => 'https://my.sevdesk.de/api/v1/PartContactPrice/',
        'place'                      => 'https://my.sevdesk.de/api/v1/Place/',
        'report'                     => 'https://my.sevdesk.de/api/v1/Report/',
        'aggregator'                 => 'https://my.sevdesk.de/api/v1/Aggregator/',
        'entryType'                  => 'https://my.sevdesk.de/api/v1/EntryType/',
        'search'                     => 'https://my.sevdesk.de/api/v1/Search/',
        'sevInvoices'                => 'https://my.sevdesk.de/api/v1/SevClient/getSevDeskAccountInvoices/',
        'sevClientConfig'            => 'https://my.sevdesk.de/api/v1/SevClientConfig/',
        'sevQuery'                   => 'https://my.sevdesk.de/api/v1/SevQuery/',
        'sevSequence'                => 'https://my.sevdesk.de/api/v1/SevSequence/',
        'sevToken'                   => 'https://my.sevdesk.de/api/v1/SevToken/',
        'sevUser'                    => 'https://my.sevdesk.de/api/v1/SevUser/',
        'staticCountry'              => 'https://my.sevdesk.de/api/v1/StaticCountry/',
        'staticReferralProgram'      => 'https://my.sevdesk.de/api/v1/StaticReferralProgram/',
        'subscriptionHistory'        => 'https://my.sevdesk.de/api/v1/SubscriptionHistory/',
        'subscriptionType'           => 'https://my.sevdesk.de/api/v1/SubscriptionType/',
        'swissEsr'                   => 'https://my.sevdesk.de/api/v1/SwissEsr/',
        'taxSet'                     => 'https://my.sevdesk.de/api/v1/TaxSet/',
        'textTemplate'               => 'https://my.sevdesk.de/api/v1/TextTemplate/',
        'letter'                     => 'https://my.sevdesk.de/api/v1/Letter/',
        'vatReport'                  => 'https://my.sevdesk.de/api/v1/VatReport/',
    ],
];